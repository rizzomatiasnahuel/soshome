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


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles = Article::orderBy('id','ASC')->paginate(50);
        $articles ->each(function($articles){
            $articles->Category;
            $articles->user;

        });

        return view("articles.index",["articles"=> $articles]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');

        return view('articles.create')
                ->with('categories',$categories)
                ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //manipulacion de imagenes
         if($request->file('image'))
         {

            
        $file = $request-> file('image');
        $name ='imgbase' . time(). '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/articles/';
        $file-> move($path, $name);
        

        }

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article -> save();

       $article->tags()->sync($request->tags);

       $image = new Image();
       $image->name = $name;
       $image-> article()-> associate( $article);
       $image-> save();
          return redirect()->route("articles.index");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
