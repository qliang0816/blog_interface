<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    /**
     * @author leo_qin <qliang0816@gmail.com>
     * @api 首页文章内容,按照更新时间倒序
     */
    public function home(Request $request)
    {
        // 分页
        $paginate = $request->input('paginate');
        // 分类
        $category_id = $request->input('category_id');
        // 搜索
        $searchData = $request->input('searchData');
        // 标签
        $tag_id = $request->input('tag_id');
        if (!empty($tag_id)) {
            $tags = DB::table('text_tags')->where('tag_id', $tag_id)->get();
            if (!$tags->isEmpty()) {
                for ($i = 0; $i < count($tags); $i++) {
                    $in_query[] = $tags[$i]->text_id;
                }
            } else {
                $in_query = [];
            }
        } else {
            $in_query = [];
        }
        
        $texts = Texts::select('id', 'title', 'summary', 'category_id', 'image', 'updated_at')
            ->where('is_show', '1')
            ->whereIn('id', $in_query)
            ->when(!empty($category_id), function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when(!empty($searchData), function ($query) use ($searchData) {
                return $query->where('title', 'like', '%' . $searchData . '%');
            })
            ->orderBy('updated_at', 'desc')
            ->paginate($paginate);
        return response()->json($texts);
    }
}
