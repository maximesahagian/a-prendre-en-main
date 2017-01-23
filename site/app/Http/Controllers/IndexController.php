<?php
/**
 * Created by PhpStorm.
 * User: bbs
 * Date: 23/01/2017
 * Time: 13:29
 */

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    public function getIndex(){

        $new = DB::table('news')->first();

        $data = [
            'message' => $new->title
        ];

        return view('pages.homepage',$data);
    }
}