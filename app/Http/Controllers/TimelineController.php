<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;
use Illuminate\Support\Facades\DB;

class TimelineController extends BaseController
{
    //
    public function index()
    {
        $texts = DB::select("select id,date_format(updated_at,'%Y') year, date_format(updated_at,'%m') month,title,updated_at from texts  where is_show = 1 order by updated_at desc");
        return response()->json($texts);
        // $texts = Texts::select('id','title','updated_at')->where('is_show',1)->orderBy('updated_at','desc')->get();
        foreach ($texts as $val) {
            $arr['id'] = $val->id;
            $arr['title'] = $val->title;
            $arr['updated_at'] = $val->updated_at;
            $array[date('Y',strtotime($val->updated_at))][date('m',strtotime($val->updated_at))][] = $arr;
        }
        return response()->json($array);
    }
}
