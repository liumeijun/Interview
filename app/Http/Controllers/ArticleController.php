<?php

namespace App\Http\Controllers;
header("content-type:text/html;charset=UTF-8");
use DB;
class ArticleController extends Controller
{
    public function article(){
        $at_type=DB::table('ar_type')->get();
        $article=DB::select("select * from article left join ar_type on article.a_id=ar_type.at_id order by a_id desc");
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            $username=0;
        }else{
            $username=$_SESSION['username'];
        }
        $u_id=DB::table('users')->where("user_phone","$username")->orwhere("user_email","$username")->first();
        $u_id=$u_id['user_id'];
        //echo $u_id;die;
        //print_r($article);die;
        foreach($article as $key=>$val){
            $arr=DB::table('article_zan')->where(["u_id"=>0,"article_id"=>$val['a_id']])->first();
            if($arr){
                $article[$key]['zan']="1";
            }else{
                $article[$key]['zan']="0";
            }
        }
        //print_r($article);die;

        //文章推荐
        $groom = DB::select("select * from article join ar_type on article.a_type=ar_type.at_id join a_lei on article.a_lei=a_lei.al_id order by article.a_num
desc limit 10");
        //print_r($groom);die;
        //查询一周达人
//        $people = DB::table('aping')
//            ->join('users', 'aping.u_id', '=', 'users.user_id')
//            ->groupBy('aping.u_id')
//            ->select(count('aping.u_id'))
//            ->count('aping.u_id');
        $people = DB::select("select user_name,img from aping join users on aping.u_id = users.user_id group by aping.u_id order by count(aping.u_id) desc limit 10");
        return view('article/article',['at_type'=>$at_type,'article'=>$article,'groom' => $groom,'people' => $people]);
    }
    

    //发表文章展示页面
    public function publish(){
//        echo 1;die;
        $at_type=DB::table('ar_type')->get();
//	print_r($at_type);die;
        $a_lei=DB::table('a_lei')->get();
        return view('article/publish',['ar_type'=>$at_type,'a_lei'=>$a_lei]);
    }
    

    //添加文章
    public function add(){
        $a_title=$_POST['a_title'];
        $a_type=$_POST['a_type'];
        $a_con=$_POST['a_con'];
        $a_addtime=date("Y-m-d H:i:s");
        $re=DB::insert("insert into article(a_title,a_type,a_con,a_addtime) values('$a_title','$a_type','$a_con','$a_addtime')");
        if($re){
            echo "<script>alert('提交成功');location.href='article';</script>";
        }else{
            echo "<script>alert('提交失败');location.href='publish';</script>";
        }
    }
    
    
    public function zan(){
        $a_id=$_POST['zan'];
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            echo 1;
        }else{
            $username=$_SESSION['username'];
        }
        $u_id=DB::table('users')->where("user_phone","$username")->orwhere("user_email","$username")->first();
        if($u_id){

        }
        $u_id=empty($u_id['user_id'])?$u_id['user_id']:1;
       //echo $u_id;die;
        $arr=DB::table('article_zan')->where("u_id",$u_id)->where("article_id",$a_id)->get();
        if($arr){
            $zan=DB::table('article')->where('a_id',$a_id)->first();
        }else{
            $zan=DB::table('article')->where('a_id',$a_id)->first();
            $nu=$zan['a_num'];
            $a_num=$nu+=1;
            $aa=DB::insert("update article set a_num=$a_num where a_id=$a_id");
            $a=DB::insert("insert into from article_zan(u_id,article_id) values('$u_id','$a_id')");
            $zan=DB::table('article')->where('a_id',$a_id)->get();
        }
        //print_r($zan);die;
        return json_encode($zan);
    }
    
    
    public function type(){
        $type=$_POST['type'];
        if($type=='0'){
            $type=DB::table('article')->get();
        }else{
            $type=DB::table('article')->where("a_type",$type)->get();
        }

        //print_r($type);die;
        return view("article/type",['article'=>$type]);
    }


    public function wxiang(){
        if(!isset($_SESSION)){
            session_start();
        }
        if (empty($_SESSION['username'])) {
            $username = 0;
        } else {
            $username = $_SESSION['username'];
        }
        $id = $_GET['id'];
        $arr = DB::table("article")
            ->join("ar_type", "article.a_type", "=", "ar_type.at_id")
            ->where("article.a_id", $id)->get();
        //print_r($arr);die;
        //评论
        $aping = DB::table('aping')->join("users", "aping.u_id", "=", "users.user_id")->join("article", "aping.a_id", "=", "article.a_id")->orderBy("aping.ap_id", "desc")->select('aping.ap_id','aping.ap_con','aping.u_id','article.a_id','aping.a_addtime','users.user_name','users.img','article.a_num','article.a_con','article.a_title')->get();
        //回答（回答评论）
        $a_ping = DB::table('a_ping')->join('aping','a_ping.ap_id','=','aping.ap_id')->leftjoin('users','a_ping.u_id','=','users.user_id')->orderBy('a_ping.article_addtime','desc')->orderBy('a_ping.ap_id')->select('a_ping.article_id','a_ping.ap_cont','a_ping.u_id','a_ping.ap_id','a_ping.article_addtime','aping.ap_con','aping.a_id','aping.a_addtime','users.user_name','users.img')->get();
        //print_r($a_ping);die;
        foreach($aping as $key => $v){
            foreach($a_ping as $k => $a){
                if($v['ap_id'] ==$a['ap_id']){
                    $aping[$key]['answer'][]=$a;
                }
            }
        }
        //print_r($aping);die;
        //查询是否收藏
        if (empty($_SESSION['username'])) {
            return view('article/wxiang', ['arr' => $arr[0], 'username' => $username, 'aping' => $aping,'a_ping' => $a_ping]);
        } else {
            $user_id = DB::table('users')->where("user_name", "$username")
                                         ->orwhere("user_phone","$username")
                                         ->orwhere("user_email","$username")
                                         ->first();
            //  print_r($user_id);die;
            $u_id = $user_id['user_id'];
            $is_house = DB::table("house_article")->where(['user_id' => $u_id, 'article_id' => $id])->get();
            return view('article/wxiang', ['arr' => $arr[0], 'username' => $username, 'aping' => $aping, 'house' => $is_house]);
        }

 }

    public function wping(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            $username=0;
            $u_id=0;
        }else{
            //$username=$_SESSION['username'];
            //$u_id=DB::table('users')->where("user_phone","$username")->orwhere("user_email","$username")->first();
            //$u_id=$u_id['user_id'];
            $u_id = $_SESSION['u_id'];
        }
        //echo $u_id;die;
        $a_id=$_POST['a_id'];
        $ping=$_POST['ping'];
        $a_addtime = date("Y-m-d H:i:s",time());
        $sql="insert into aping(u_id,ap_con,a_id,a_addtime) values('$u_id','$ping','$a_id','$a_addtime')";
        $re=DB::insert($sql);

        $aping = DB::table('aping')->join("users", "aping.u_id", "=", "users.user_id")->join("article", "aping.a_id", "=", "article.a_id")->orderBy("aping.ap_id", "desc")->select('aping.ap_id','aping.ap_con','aping.u_id','article.a_id','aping.a_addtime','users.user_name','users.img','article.a_num','article.a_con','article.a_title')->get();
        //回答（回答评论）
        $a_ping = DB::table('a_ping')->join('aping','a_ping.ap_id','=','aping.ap_id')->leftjoin('users','a_ping.u_id','=','users.user_id')->orderBy('a_ping.article_addtime','desc')->orderBy('a_ping.ap_id')->select('a_ping.article_id','a_ping.ap_cont','a_ping.u_id','a_ping.ap_id','a_ping.article_addtime','aping.ap_con','aping.a_id','aping.a_addtime','users.user_name','users.img')->get();
        //print_r($a_ping);die;
        foreach($aping as $key => $v){
            foreach($a_ping as $k => $a){
                if($v['ap_id'] ==$a['ap_id']){
                    $aping[$key]['answer'][]=$a;
                }
            }
        }
        return view('article/a_ping', ['aping' => $aping]);
    }

    //最新文章
    public function articleNew()
    {
        $type = DB::table('ar_type')->get();
        $newArticle = DB::table('article')->leftjoin('ar_type','article.a_type','=','ar_type.at_id')->orderby('a_addtime','desc')->get();
        // dd($newArticle);
        return view('article.newarticle')->with('new',$newArticle)->with('at_type',$type);
    }

    //最热文章
    public function articleHot()
    {
        $type = DB::table('ar_type')->get();
        $newArticle = DB::table('article')->leftjoin('ar_type','article.a_type','=','ar_type.at_id')->orderby('a_num','desc')->get();
        // dd($newArticle);
        return view('article.hotarticle')->with('new',$newArticle)->with('at_type',$type);
    }

    //文章收藏
    public function addhouse_article(){
        if(!isset($_SESSION)){
            session_start();
        }
        $c_id = $_POST['id'];
        //$user_name = Session::get('username');
        $user_name=$_SESSION['username'];
        $u_id=DB::table('users')->where("user_name","$user_name")->get();
        $u_id=$u_id[0]['user_id'];
        $arr = DB::insert("insert into house_article(user_id,article_id) values('$u_id','$c_id')");
        if($arr){
            return 1;
        }else{
            return 0;
        }
    }


    //取消收藏
    public function delhouse_article(){
        if(!isset($_SESSION)){
            session_start();
        }
        $c_id = $_POST['id'];
        //$user_name = Session::get('username');
        $user_name=$_SESSION['username'];
        $u_id=DB::table('users')->where("user_name","$user_name")->get();
        $u_id=$u_id[0]['user_id'];
        $arr = DB::delete("delete from house_article where user_id = '$u_id' and article_id = '$c_id'");
        if($arr){
            return 1;
        }else{
            return 0;
        }
    }

    public function a_ping(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['username'])){
            $username=0;
            $u_id=0;
        }else{
            $u_id = $_SESSION['u_id'];
        }
        $ap_id2=$_POST['ap_id'];
        $ap_id = substr($ap_id2,3);
        $ping=$_POST['ping'];
        //echo $ap_id;die;
        $a_addtime = date("Y-m-d H:i:s",time());
        $sql="insert into a_ping(u_id,ap_cont,ap_id,article_addtime) values('$u_id','$ping','$ap_id','$a_addtime')";
        $re=DB::insert($sql);

        $aping = DB::table('aping')->join("users", "aping.u_id", "=", "users.user_id")->join("article", "aping.a_id", "=", "article.a_id")->orderBy("aping.ap_id", "desc")->select('aping.ap_id','aping.ap_con','aping.u_id','article.a_id','aping.a_addtime','users.user_name','users.img','article.a_num','article.a_con','article.a_title')->get();
        //回答（回答评论）
        $a_ping = DB::table('a_ping')->join('aping','a_ping.ap_id','=','aping.ap_id')->leftjoin('users','a_ping.u_id','=','users.user_id')->orderBy('a_ping.article_addtime','desc')->orderBy('a_ping.ap_id')->select('a_ping.article_id','a_ping.ap_cont','a_ping.u_id','a_ping.ap_id','a_ping.article_addtime','aping.ap_con','aping.a_id','aping.a_addtime','users.user_name','users.img')->get();
        //print_r($a_ping);die;
        foreach($aping as $key => $v){
            foreach($a_ping as $k => $a){
                if($v['ap_id'] ==$a['ap_id']){
                    $aping[$key]['answer'][]=$a;
                }
            }
        }
        return view('article/a_ping', ['aping' => $aping]);
    }
}
