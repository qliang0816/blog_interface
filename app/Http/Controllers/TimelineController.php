<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimelineController extends BaseController
{
    //
    public function index()
    {
        $texts = DB::select("select id,date_format(updated_at,'%Y') year, date_format(updated_at,'%m') month,title,date_format(updated_at,'%Y-%m-%d') updated_at from texts  where is_show = 1 order by updated_at desc");
        return response()->json($texts);
    }
}
