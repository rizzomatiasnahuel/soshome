<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles = Article::all();
       
        return view('front.index', [ 'articles' => $articles  ]);
    }

}
