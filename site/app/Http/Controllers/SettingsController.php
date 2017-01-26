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

class SettingsController extends BaseController
{
    public function getSettings(){
        $settings = DB::table('settings')->get();
        $data =  [
            'settings' => $settings,
            'active' => 'settings'
        ];

        return view('pages.settings',$data);
    }

    public function editSettings(){

        $input = Input::all();

        foreach($input as $setting){
            if(array_search($setting,$input) != "_token"){
                $key = array_search($setting, $input);
                DB::table('settings')->where('key','=',$key)->update([
                    'value' => $setting
                ]);
            }
        }

        return redirect('/admin/settings');

    }

}