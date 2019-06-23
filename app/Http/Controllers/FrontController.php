<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
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
        
        $articles = Article::all();
       // $categories = Category::all();
       //$articles = $category->articles;
        $articles->each(function($articles){
                $articles->category;
                 $articles->images;
                  });  
       
        return view('front.index')->with('articles', $articles );
    }

    public function searchFrontcategory($name)
    {       


        $category = Category::searchFrontcategory($name)->first();
        $articles = $category->articles;
        $articles->each(function($articles){
                $articles->category;
                 $articles->images;

        });   

        // dd($articles);   
        //$articles = Article::all();
        
        return view("front.index")->with('articles', $articles );
           

 
    }


}
