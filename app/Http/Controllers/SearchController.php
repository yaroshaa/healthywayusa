<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Resources\Blog\BlogContentResource;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Services\LocaleService;
use Helori\LaravelSeo\Seo;


class SearchController extends Controller
{
    private BlogRepositoryInterface $blogRepository;
    private SearchRequest $request;
    private LocaleService $service;

    private const post = 'POST';
    private const get = 'GET';
    private string $query;

    public function __construct(BlogRepositoryInterface $blogRepository, SearchRequest $searchRequest, LocaleService $service)
    {
        $this->blogRepository = $blogRepository;
        $this->request = $searchRequest;
        $this->query = '';
        $this->service = $service;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
        if($this->request->method() === $this::post && $this->request->has('search')){
            $this->query = $this->request->input('search');
            session(['search' => $this->query]);
        }elseif($this->request->method() === $this::get){
            if (session()->has('search')) {
                $this->query = session('search');
            }
        }

        $searchResult = $this->blogRepository->getSearch($this->query);

        return view('search/searchList')->with([
            'searchResult' => $searchResult,
            'searchQuery' => $this->query
        ]);
    }

    public function showItem($id, $key = null)
    {
//        Seo::set('title', 'My home page title');
//        Seo::set('description', "My home page description");
//        Seo::set('keywords', "my,home,page,keywords");
//        Seo::set('breadcrumblist', [
//            ['title' => 'Page short title', 'url' => 'page_url'],
//            ['title' => 'Sub-Page short title', 'url' => 'sub_page_url'],
//        ]);
        $repository = $this->blogRepository->getPost((int)$id, $this->service->getLanguageId($key));
        $blogContentResource = new BlogContentResource();
        $post = [];
        foreach ($repository as $data) {
            $post = $blogContentResource->toArray($data);
        }

        return view('search.searchPost')
            ->with(['post' => $post]);
    }

}
