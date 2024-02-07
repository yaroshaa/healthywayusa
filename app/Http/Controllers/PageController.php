<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public $lang;

    public function __construct()
    {
        $this->lang = App::currentLocale();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->path();
        $home = false;
        if ($key == '/') {
            $key = 'home';
            $home = true;
        }
//        dd($key);
        return view('pages/' . $key)->with([
            'key' => $key,
            'home'=> $home
        ]);
    }

}
