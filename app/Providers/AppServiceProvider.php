<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ImageCategories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $category = ImageCategories::all();
        view()->share('image_category',$category);
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
