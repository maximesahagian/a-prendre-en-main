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

        $ulule = DB::table('settings')->where('key','=','ulule_id')->first();

        $data = [
            'message' =>  DB::table('news')->count(),
            'ulule' => $ulule
        ];

        return view('pages.home',$data);
    }
}