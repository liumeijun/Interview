<?php

namespace App\Http\Controllers;

class FriendController extends Controller
{
    //好友列表
    public function friendlist(){
        return view('friend/friendlist');
    }
    //头像设置
    public function setavator(){
        return view('user/setavator');
    }

}