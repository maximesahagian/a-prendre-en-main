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

class TeamController extends BaseController
{
    public function getTeam(){
        $members = DB::table('members')->get();
        $data =  [
            'members' => $members,
            'active' => 'team'
        ];

        return view('pages.team',$data);
    }

    public function getAddTeam(){
        $data = [
            'active' => 'team'
        ];

        return view('pages.team_add',$data);
    }

    public function addTeam(\Illuminate\Support\Facades\Request $request){
        $input = Input::all();
        $name = $input['name-input'];
        $description = $input['description-input'];
        $rank = $input['rank-input'];

        $image_name = "basic.jpg";
        if(isset($_FILES['image-input'])){
            $image = $_FILES["image-input"];
            $ext = pathinfo($_FILES['image-input']['name']);
            $ext = $ext['extension'];
            $image_name = uniqid().'.'.$ext;
            $target = "img/members/".$image_name;
            move_uploaded_file($image['tmp_name'],$target);
        }


        DB::table('members')->insert(
            [
                'name' => $name,
                'description' => $description,
                'image' => $image_name,
                'rank' => $rank
            ]
        );

        return redirect("/admin/team");
    }

    public function getEditTeam($id){
        $member = DB::table('members')->where('id','=',$id)->first();

        $data = [
            'member' => $member,
            'active' => 'team'
        ];

        return view('pages.team_edit',$data);
    }

    public function editTeam(\Illuminate\Support\Facades\Request $request){
        $input = Input::all();
        $id = intval($input['id-input']);
        $name = $input['name-input'];
        $description = $input['description-input'];
        $rank = $input['rank-input'];

        if(isset($_FILES['image-input']) && $_FILES['image-input']['name'] != "" && $_FILES['image-input']['type'] != ""){
            $image = $_FILES["image-input"];
            $ext = pathinfo($_FILES['image-input']['name']);
            $ext = $ext['extension'];
            $image_name = uniqid().'.'.$ext;
            $target = "img/members/".$image_name;
            move_uploaded_file($image['tmp_name'],$target);

            DB::table('members')->where('id','=',$id)->update([
                    'name' => $name,
                    'description' => $description,
                    'rank' => $rank,
                    'image' => $image_name
                ]
            );
        }
        else{
            DB::table('members')->where('id','=',$id)->update([
                    'name' => $name,
                    'description' => $description,
                    'rank' => $rank
                ]
            );
        }
        return redirect("/admin/team");
    }

    public function deleteTeam($id){
        DB::table('members')->where('id', '=', $id)->delete();
    }

}
?>