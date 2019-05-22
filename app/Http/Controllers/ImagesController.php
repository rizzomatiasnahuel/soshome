<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Article;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $images = Image::all();
        $articles = Article::all();
        return view('images.index', ['images' => $images , 'articles' => $articles]);




    }

}
