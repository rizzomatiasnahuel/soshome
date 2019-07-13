<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\View;
use App\Category;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


         view()->composer('*', function ($view){
            $categories = Category::all();

            return $view->with('categories', $categories);

         });   
        
        

        //View::composer(['front.index'], 'App\Http\ViewComposers\AsideComposer');


    }

    /** 
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
