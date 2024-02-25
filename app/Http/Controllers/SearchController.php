<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Services\LocaleService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private BlogRepositoryInterface $blogRepository;
    private LocaleService $service;

    public function __construct(BlogRepositoryInterface $blogRepository, LocaleService $service)
    {
        $this->blogRepository = $blogRepository;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request, $key = null)
    {
        $searchResult= $this->blogRepository->getSearch($request->input('search'),$this->service->getLanguageId($key));

        return view('search/searchList')->with([
            'searchResult' => $searchResult,
            'searchQuery' => $request->input('search')
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
    }




}
