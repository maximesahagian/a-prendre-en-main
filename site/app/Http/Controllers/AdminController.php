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
}