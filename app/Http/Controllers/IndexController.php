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
    public function index()
    {
        $texts = Texts::orderBy('updated_at','desc')->paginate(6);
        // dd($texts);
        return view('index',['texts' => $texts]);
    }
}
