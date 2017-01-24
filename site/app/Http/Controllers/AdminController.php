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

    public function getNews(){
        $news = DB::table('news')->get();

        $data = [
            'news' => $news,
            'active' => 'news'
        ];

        return view('pages.news',$data);
    }

    public function deleteNew($id){
        DB::table('news')->where('id', '=', $id)->delete();
    }

    public function getAddNew(){
        return view('pages.news_add');
    }

    public function addNew(\Illuminate\Support\Facades\Request $request){
        $input = Input::all();
        $title = $input['title-input'];
        $text = $input['text-input'];
        $author = $input['author-input'];

        $image_name = "basic.jpg";
        if(isset($_FILES['image-input'])){
            $image = $_FILES["image-input"];
            $ext = pathinfo($_FILES['image-input']['name']);
            $ext = $ext['extension'];
            $image_name = uniqid().'.'.$ext;
            $target = "img/actu/".$image_name;
            move_uploaded_file($image['tmp_name'],$target);
        }


        DB::table('news')->insert(
            [
                'title' => $title,
                'message' => $text,
                'author' => $author,
                'image' => $image_name
            ]
        );

        return redirect("/admin/news");
    }

    public function getEditNew($id){
        $new = DB::table('news')->where('id','=',$id)->first();

        $data = [
            'new' => $new
        ];

        return view('pages.news_edit',$data);
    }

    public function editNew(\Illuminate\Support\Facades\Request $request){
        $id = $_GET['id'];
        $title = $_GET['title'];
        $text = $_GET['text'];
        $author = $_GET['author'];


        DB::table('news')->where('id','=',$id)->update([
                'title' => $title,
                'message' => $text,
                'author' => $author
        ]
        );
    }
}