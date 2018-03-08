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
    public function home($paginate)
    {
        $texts = Texts::where('is_show','1')->orderBy('updated_at','desc')->paginate($paginate);
        return response()->json($texts);
    }

    
}
