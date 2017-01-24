<?php
/**
 * Created by PhpStorm.
 * User: bbs
 * Date: 23/01/2017
 * Time: 13:29
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends BaseController
{
    public function getIndex(){
        $data = [
            'active' => 'index'
        ];
        return view('pages.admin',$data);
    }

    public function authLogout(){
        if(!Auth::guest()) {
            Auth::logout();
        }
        return redirect('/');
    }
}