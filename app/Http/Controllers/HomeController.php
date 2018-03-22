<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;

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
        // dd($category_id);
        $texts = Texts::select('id','title','summary','category_id','image','updated_at')->where('is_show','1')
        ->when(!empty($category_id),function($query) use ($category_id){
                return $query->where('category_id',$category_id);
            })->orderBy('updated_at','desc')->paginate($paginate);
        return response()->json($texts);
    }
}
