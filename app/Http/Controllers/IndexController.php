<?php

namespace App\Http\Controllers;
use DB;
class IndexController extends Controller
{
    public function index(){
        $shi=DB::table('shiti')->orderBy("click","desc")->limit(8)->get();
        $position=DB::table('recruit')->orderBy("release_date","desc")->limit(8)->get();
        $problem=DB::table('exam')
            ->join('e_ping', 'exam.exam_id', '=', 'e_ping.e_id')
            ->select('*')
            ->orderBy("e_addtime","desc")
            ->limit(8)
            ->get();
//        $video=DB::table('vidoe')->orderBy('good','desc')->limit(8)->get();



        return view('index/index',['shi'=>$shi]);
    }
}
