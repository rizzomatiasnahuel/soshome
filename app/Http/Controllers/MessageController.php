<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Article;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function m1()
    {

       
        $images = Image::all();
        $articles = Article::all();
        return view('partials.message', ['images' => $images , 'articles' => $articles]);

    }
    public function m2()
    {
        $images = Image::all();
        $articles = Article::all();
        return view('partials.message2', ['images' => $images , 'articles' => $articles]);

     
    }
    
    public function m3()
    {

        $images = Image::all();
        $articles = Article::all();
        return view('partials.message3', ['images' => $images , 'articles' => $articles]);

    }

}
