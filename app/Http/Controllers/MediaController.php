<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends BaseController
{
    //
    public function index(Request $request)
    {
        $category_id = $request->get('category_id');
        dd($category_id);
        return view('media');
    }
}
