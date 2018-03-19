<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class MediaController extends BaseController
{
    //
    public function index(Request $request)
    {
        $category_id = $request->get('category_id');
        $media = Images::when(!empty($category_id),function($query) use ($category_id) {
            return $query->where('category_id',$category_id);
        })->where('is_show','1')->get();
        return response()->json($media);
    }
}
