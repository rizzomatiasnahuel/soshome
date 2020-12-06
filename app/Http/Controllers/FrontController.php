<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Category::all();
        $articles = Article::all();
        $tags = Tag::all()->pluck('id','name');
       // $categories = Category::all();
       //$articles = $category->articles;
        $articles->each(function($articles){
                $articles->category;
                 $articles->images;
                  });  
       
        //return view('front.index')->with('articles', $articles, 'categories', $categories );
        return view('front.index',['articles'=> $articles , 'categories'=> $categories,'tags'=> $tags]);
    }




}
