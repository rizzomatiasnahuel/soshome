<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Category;
use App\Article;
use App\Tag;
use App\Image;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        
        $articles = Article::all();
        $categories = Category::all();
        $users = User::orderBy('id','DES')->get();

        if( $request->user()->type== 'admin'){
            return view('/home',['articles'=> $articles , 'categories'=> $categories ,'users'=> $users ]);
            
        }if( $request->user()->type== 'menber'){
            return view('/homeu',['articles'=> $articles , 'categories'=> $categories ,'users'=> $users ]);

            return view('/homeu');
        }if( $request->user()->type== 'tecnico'){
            return view('/homeuTec',['articles'=> $articles , 'categories'=> $categories ,'users'=> $users ]);

            
        }
        
    }
    public function homeu()
    {
        
            return view('/homeu');
       
    }
}
