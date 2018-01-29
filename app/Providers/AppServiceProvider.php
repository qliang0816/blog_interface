<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ImageCategories;
use App\Tags;
use App\Texts;
use TCG\Voyager\Models\Category;

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
        // 文章
        $texts = Texts::select('id','title','category_id')->get();
        // 文章分类
        $categories = Category::select('id','name')->orderBy('order','asc')->get();
        foreach ($texts as $key => $val) {
            foreach ($categories as $value) {
                if ($value->id == $val->category_id) {
                    $text_category[$value->name][] = $val;
                    break 1;
                }
            }
        }
        // dd($text_category);
        // 共享标签
        $tags = Tags::all();
        // 共享图片分类
        $image_category = ImageCategories::all();
        view()->share(['image_category'=>$image_category,'tags'=>$tags,'category'=>$categories,'text_category'=>$text_category]);
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
