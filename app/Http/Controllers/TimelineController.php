<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimelineController extends BaseController
{
    //
    public function index()
    {
        $texts = DB::select("
        SELECT
            texts.id ,
            date_format(texts.updated_at , '%Y') year ,
            date_format(texts.updated_at , '%m') month ,
            title ,
            date_format(texts.updated_at , '%Y-%m-%d') updated_at, 
            GROUP_CONCAT(tags.`name`) tags,
            GROUP_CONCAT(tags.`id`) tags_id
        FROM
            texts
        LEFT JOIN text_tags ON texts.id = text_tags.text_id
        LEFT JOIN tags ON tags.id = text_tags.tag_id
        WHERE
            is_show = 1
        group by id,year,month,title,updated_at
        ORDER BY
        updated_at DESC;");
        return response()->json($texts);
    }
}
