<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends BaseController
{
    //
    public function index()
    {
        
        return view('media');
    }
}
