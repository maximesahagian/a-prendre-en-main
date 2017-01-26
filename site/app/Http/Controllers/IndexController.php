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
        $first_new = DB::table('news')->first();

        $news = DB::table('news')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $team = DB::table('members')->get();

        $data = [
            'message' =>  DB::table('news')->count(),
            'first_new' => $first_new,
            'ulule' => $ulule,
            'news' => $news,
            'team' => $team
        ];

        return view('pages.home',$data);
    }

    public function sendMail(){
        dd($_GET);
    }
}