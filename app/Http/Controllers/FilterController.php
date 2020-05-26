<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;


class FilterController extends Controller
{
        public function searchFrontcategory($id)
    {       


        $articles = Article::all()->where('category_id','=',$id);
         $categories = Category::all();
       
        // dd($articles);   
        //$articles = Article::all();
        
       // return view("front.filter")->with('articles', $articles );
          return view('front.filter',['articles'=> $articles , 'categories'=> $categories  ]); 

 
    }
}
