<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Article;
use App\Http\Requests\ArticleRequest;*/
use Auth;
use App\Tag;
use Illuminate\Support\Facades\Gate;

class WebboardController extends Controller
{
    public function index(){
        return view('webboards.index');
    }

    public function computerhardware(){
        return view('webboards.computerhardware');
    }

    public function videogames(){
        return view('webboards.videogames');
    }

    public function lifestyle(){
        return view('webboards.lifestyle');
    }

    public function etc(){
        return view('webboards.etc');
    }

    public function market(){
        return view('webboards.market');
    }

    public function lovetalk(){
        return view('webboards.lovetalk');
    }
}