<?php

namespace App\Http\Controllers;

use App\Jobs\NewFaqJob;
use App\Jobs\SendMailJob;
use App\Models\Settings;
use App\Models\User;
use App\Repositories\FaqRepository;
use Auth;
use Helori\LaravelSeo\Seo;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private FaqRepository $faqRepository;
    private const ID = 1;

    public function __construct(FaqRepository $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
//        Seo::set('title', 'My home page title');
//        Seo::set('description', "My home page description");
//        Seo::set('keywords', "my,home,page,keywords");
//        Seo::set('breadcrumblist', [
//            ['title' => 'Page short title', 'url' => 'page_url'],
//            ['title' => 'Sub-Page short title', 'url' => 'sub_page_url'],
//        ]);
        if(Auth::user() && Auth::user()->isAdmin()) {
            $data = $this->faqRepository->getQuestionsForAdmin();
        } else {
            $data = $this->faqRepository->getQuestions();
        }

        return view('faq/faqList')->with([
            'title' => 'FAQ',
            'meta_keys' => 'faq',
            'meta_description' => 'faq',
            'data' => ['data' => $data]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'userId' => ['required'],
            'question' => ['required','string'],
            //            'g-recaptcha-response' => 'required|captcha',
        ]);

        $newQuestion = $this->faqRepository->storeQuestion($request);

        $user = User::find($request->input('userId'));

        $data = [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'question' => $request->input('question'),
            'createdAt' => $newQuestion->created_at,

        ];

        if ($newQuestion)
        {
            $adminEmails = explode(',', Settings::find($this::ID)->admin_email);

            if(count($adminEmails) > 0){
                foreach($adminEmails as $item){
                    NewFaqJob::dispatch($data, trim($item));
                }
            }
            return redirect()->route('faq');

        } else {
            return view()->with(['error' => 'New Question not added']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->faqRepository->updateQuestion($request);
        return redirect()->route('faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        $this->faqRepository->deleteQuestion($id);
        return redirect()->route('faq');
    }
}
