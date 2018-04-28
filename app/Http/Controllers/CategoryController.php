<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $texts = Texts::select('id', 'title', 'category_id')->where('is_show',1)->orderBy('updated_at', 'desc')->get();
        // 文章分类
        $categories = Category::select('id', 'name')->orderBy('order', 'asc')->get();
        $text_category=[];
        foreach ($texts as $val) {
            foreach ($categories as $value) {
                if ($value->id == $val->category_id) {
                        $text_category[$value->name][] = $val;
                        // 默认只显示6条数据
                        if (count($text_category[$value->name])>6) {
                            array_pop($text_category[$value->name]);
                        }
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
        $categories = Category::select('id', 'name')->orderBy('order', 'asc')->get();
        return response()->json($categories);
    }

    /**
     * @api 标签分类
     */
    public function TagCate(Request $request)
    {
        $article_id = $request->input('article_id');
        if (!empty($article_id)) {
            $tag_id = DB::table('text_tags')->select('tag_id')->where('text_id', $article_id)->get();
            if (!$tag_id->isEmpty()) {
                for ($i = 0; $i < count($tag_id); $i++) {
                    $in_query[] = $tag_id[$i]->tag_id;
                }
            } else {
                $in_query = [];
            }
        } else {
            $in_query = [];
        }
        $tags = Tags::when(!empty($article_id), function ($query) use ($in_query) {
            return $query->whereIn('id', $in_query);
        })->get();
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
