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
use Illuminate\Support\Facades\Hash;

class AdminsController extends BaseController
{
    public function getAdmins()
    {
        $admins = DB::table('users')->get();

        $data = [
            'admins' => $admins,
            'active' => 'admins'
        ];

        return view('pages.admins', $data);
    }

    public function deleteAdmin($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }

    public function getAddAdmin()
    {
        $data = [
            'active' => 'admins'
        ];

        return view('pages.admins_add', $data);
    }

    public function addAdmin(\Illuminate\Support\Facades\Request $request)
    {
        $input = Input::all();
        $name = $input['name-input'];
        $email = $input['email-input'];
        $password = $input['password-input'];
        $password = Hash::make($password);

        DB::table('users')->insert(
            [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]
        );

        return redirect("/admin/admins");
    }

    public function getEditAdmin($id)
    {
        $admin = DB::table('users')->where('id', '=', $id)->first();

        $data = [
            'admin' => $admin,
            'active' => 'admins'
        ];

        return view('pages.admins_edit', $data);
    }

    public function editAdmin(\Illuminate\Support\Facades\Request $request)
    {
        $input = Input::all();
        $id = intval($input['id-input']);
        $name = $input['name-input'];
        $email = $input['email-input'];
        $password = $input['password-input'];
        if($password != ""){
            $password = Hash::make($password);
            DB::table('users')->where('id', '=', $id)->update([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                ]
            );
        }
        else{
            DB::table('users')->where('id', '=', $id)->update([
                    'name' => $name,
                    'email' => $email
                ]
            );
        }
        return redirect("/admin/admins");
    }
}

?>