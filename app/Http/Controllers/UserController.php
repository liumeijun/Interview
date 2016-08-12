<?php

namespace App\Http\Controllers;
use DB;

class UserController extends Controller
{
    //个人资料
    public function setprofile(){
        return view('user/setprofile');
    }
    //头像设置
    public function setavator(){
        return view('user/setavator');
    }
    //手机设置
    public function setphone(){
        return view('user/setphone');
    }
    //邮箱验证
    public function setverifyemail(){
        return view('user/setverifyemail');
    }
    //修改密码
    public function setresetpwd(){
        return view('user/setresetpwd');
    }
    //绑定账号
    public function setbindsns(){
        return view('user/setbindsns');
    }

    //我的收藏
    public function my_house(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            return view('user/my_house');
        }else {
            $user_name = $_SESSION['username'];
            $users = DB::table('users')->where("user_name",$user_name)->get();
            $user_id = $users[0]['user_id'];
            $college_questions = DB::table('college_questions')
                ->join('house_college_questions', 'college_questions.c_id', '=', 'house_college_questions.college_questions_id')
                ->join('users', 'users.user_id', '=', 'house_college_questions.user_id')
                ->select('c_name','c_answer')
                ->where('users.user_id',$user_id)
                ->get();
            return view('user/my_house',['college_questions' => $college_questions]);
        }
    }

    //我的收藏->收藏的文章
    public function my_house_article(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            return view('user/my_house_article');
        }else {
            $user_name = $_SESSION['username'];
            $users = DB::table('users')->where("user_name",$user_name)->get();
            $user_id = $users[0]['user_id'];
            $article = DB::table('article')
                ->join('house_article', 'article.a_id', '=', 'house_article.article_id')
                ->join('users', 'users.user_id', '=', 'house_article.user_id')
                ->select('a_title','a_con')
                ->where('users.user_id',$user_id)
                ->get();
            return view('user/my_house_article',['article' => $article]);
        }
    }

    //我的评价
    public function my_ping(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            return view('user/my_ping');
        }else {
            $user_name = $_SESSION['username'];
            $users = DB::table('users')->where("user_name", $user_name)->get();
            $user_id = $users[0]['user_id'];
            $shiti = DB::table('e_ping')
                ->join('users', 'e_ping.u_id', '=', 'users.user_id')
                ->join('college_questions', 'e_ping.e_id', '=', 'college_questions.c_id')
                ->select('c_name', 'c_answer')
                ->distinct('c_name')
                ->distinct('c_answer')
                ->where('users.user_id', $user_id)
                ->get();
            $shiti_ping = DB::table('e_ping')
                ->join('users', 'e_ping.u_id', '=', 'users.user_id')
                ->join('college_questions', 'e_ping.e_id', '=', 'college_questions.c_id')
                ->select('p_con')
                ->where('users.user_id', $user_id)
                ->get();
            //print_r($shiti_ping);die;
            //$shiti = array_unique($arr);
            //print_r($shiti);die;
            return view('user/my_ping', ['shiti' => $shiti,'shiti_ping' => $shiti_ping]);
        }
    }
}