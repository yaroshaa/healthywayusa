<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Settings;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendMailJob;



class ContactController extends Controller
{
    private const ID = 1;
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function result()
    {
        return view('pages.send-result')->with([
            'result' => session('sendResult')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     */
    public function send(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company' => ['required',  'string', 'max:255'],
            'email' => ['required',  'email', 'max:255'],
            'phone' => ['required',  'string', 'max:255'],
            'message' => ['required', 'string'],
//            'g-recaptcha-response' => 'required|captcha',
        ]);

        $data = [
            'name' => $request->input('name'),
            'company' => $request->input('company'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => strip_tags($request->input('message'))
        ];

        $mail = Email::create($data);

        if ($mail->id != null) {
            $adminEmails = explode(',', Settings::find($this::ID)->admin_email);

            if(count($adminEmails) > 0){
                foreach($adminEmails as $item){
                    SendMailJob::dispatch($data, trim($item));
                }
            }
            session(['sendResult' => true]);
        }else {
            session(['sendResult' => false]);
        }

        return redirect()->route('sendResult');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        if(Auth::user() && Auth::user()->isAdmin()) {
            Email::find($id)->delete();
            return redirect()->back();
        }else{
            return redirect()->route('home');
        }
    }
}
