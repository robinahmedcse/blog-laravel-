<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\category;
use App\blog;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer('forntEnd.includes.BlogCategory',function($view){
              $publishedCategories=category::where('publicationStatus',1)->get();
            $view->with('publishedCategories',$publishedCategories);
        });
        
        
    
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
