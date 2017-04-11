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
use Illuminate\Support\Facades\Mail;

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
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $message = $_GET['message'];


        $data = [
          'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'text' => $message
        ];

        if(isset($firstname) && isset($lastname) && isset($email) && isset($message)){
            Mail::send('components.email', $data, function($message)
			{
				$email_to_send = DB::table('settings')->where('key','=','email_contact')->first();
                $message->from('contact@apem.fr', 'APEM');
                $message->to($email_to_send->value, 'A Prendre En Main')->subject('Nouveau message à prendre en main !');
            });
			dd(Mail::failures());
        }
    }
}