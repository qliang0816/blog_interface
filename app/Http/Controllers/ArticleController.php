<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;

class ArticleController extends BaseController
{
    //
    public function index($id,Texts $text)
    {
        $article = $text->where('id',$id)->select('id','title','summary','updated_at','image','text')->first();
        $previous = $text->where('id','<',$id)->select('id','title')->orderBy('id','desc')->limit(1)->first();
        $next = $text->where('id','>',$id)->select('id','title')->orderBy('id','asc')->limit(1)->first();
        // dd($article);
        // dd($previous->title);
        // dd($next);
        return view('article',['article' => $article,'previous' => $previous, 'next' => $next]);
    }
}
