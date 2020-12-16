<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Tag;
use App\Image;
use App\User;
use Illuminate\Support\Facades\DB;


class ArticleAdminController extends Controller
{
    public function index(Request $request)
    {
        
        $articles = Article::all();
        $categories = Category::all();
        $users = User::all();
     
        return view('articles.index',['articles'=> $articles , 'categories'=> $categories ,'users'=> $users ]);
    }
}
