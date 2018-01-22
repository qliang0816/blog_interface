<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;

class TimelineController extends BaseController
{
    //
    public function index()
    {
        $texts = Texts::select('id','title','updated_at')->where('is_show','1')->orderBy('updated_at','desc')->get();
        // dd($texts);
        foreach ($texts as $val) {
            $arr['id'] = $val->id;
            $arr['title'] = $val->title;
            $arr['updated_at'] = $val->updated_at;
            $array[date('Y',strtotime($val->updated_at))][date('m',strtotime($val->updated_at))][] = $arr;
        }
        // dd($array);
        return view('timeline',['array'=>$array]);
    }
}
