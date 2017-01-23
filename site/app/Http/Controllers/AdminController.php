<?php
/**
 * Created by PhpStorm.
 * User: bbs
 * Date: 23/01/2017
 * Time: 13:29
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class AdminController extends BaseController
{
    public function getIndex(){
        return view('pages.admin');
    }

    public function authLogout(){
        if(!Auth::guest()) {
            Auth::logout();
        }
        return redirect('/');
    }

    public function getNews(){
        $news = DB::table('news')->get();

        $data = [
            'news' => $news
        ];

        return view('pages.news',$data);

    }
}