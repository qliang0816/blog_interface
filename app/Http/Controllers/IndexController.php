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
        if (empty($title)) {
            $texts = Texts::orderBy('updated_at','desc')->paginate(6);
        } else {
            // dd($title);
            $texts = Texts::where('title','like',"%$title%")->orderBy('updated_at','desc')->paginate(6);
        }
        // dd($texts);
        return view('index',['texts' => $texts,'title'=>$title]);
    }
}
