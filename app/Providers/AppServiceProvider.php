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
        // 强制https
        // \URL::forceScheme('https');
        // 共享图片分类
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
