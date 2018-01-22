<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        $texts = Texts::when(!empty($title),function($query) use ($title) {
            return $query->where('title','like',"%$title%");
        })->where('is_show','1')->orderBy('updated_at','desc')->paginate(6);
        // dd($texts);
        return view('index',['texts' => $texts,'title'=>$title]);
    }
}
