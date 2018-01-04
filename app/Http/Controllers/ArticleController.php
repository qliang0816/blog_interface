<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texts;

class ArticleController extends BaseController
{
    //
    public function index($id,Texts $text)
    {
        $article = $text->where('id',$id)->first();
        return view('article',['article' => $article]);
    }
}
