<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;
use TCG\Voyager\Models\Category;
use App\ImageCategories;
use App\Tags;

class CategoryController extends BaseController
{
    /**
     * @author leo_qin <qliang0816@gmail.com>
     * @api 文章分类,根据设置的order排序
     */
    public function category()
    {
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
        return response()->json($text_category);
    }

    /**
     * @api 文章标题分类
     */
    public function TitleCate()
    {
        $categories = Category::select('id','name')->orderBy('order','asc')->get();
        return response()->json($categories);
    }

    /**
     * @api 标签分类
     */
    public function TagCate()
    {
        $tags = Tags::all();
        return response()->json($tags);
    }
    
    /**
     * @api 图片分类
     */
    public function ImageCate()
    {
        $image_category = ImageCategories::all();
        return response()->json($image_category);
    }
}
