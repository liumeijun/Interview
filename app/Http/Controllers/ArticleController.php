<?php

namespace App\Http\Controllers;
header("content-type:text/html;charset=UTF-8");
use DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    public function article(){
        $at_type=DB::table('ar_type')->get();
        $article=DB::select("select * from article left join ar_type on article.a_type=ar_type.at_id order by a_id desc");
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
        foreach($article as $key=>$val){
            $arr=DB::table('article_zan')->where(["u_id"=>0,"article_id"=>$val['a_id']])->first();
            if($arr){
                $article[$key]['zan']="1";
            }else{
                $article[$key]['zan']="0";
            }
        }
        // dd($article);

        //文章推荐
        $groom = DB::select("select * from article join ar_type on article.a_type=ar_type.at_id join a_lei on article.a_lei=a_lei.al_id order by article.a_num
desc limit 10");
        //查询一周达人
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
    

    /*
     * 添加文章
     */
    public function add(){
//print_r($_FILES);
        $post=Request::all();
//print_r($post);die;
        $file=Input::file('a_log');
        print_r($file);die;
        $a_title=$post['a_title'];
        $a_type=$post['a_type'];
        $a_con=$post['a_con'];
        $a_addtime=date("Y-m-d H:i:s");
        $re=DB::insert("insert into article(a_title,a_type,a_con,a_addtime) values('$a_title','$a_type','$a_con','$a_addtime')");
        if($re){
            echo "<script>alert('提交成功');location.href='article';</script>";
        }else{
            echo "<script>alert('提交失败');location.href='publish';</script>";
        }
    }
    
    /*
     * 点赞表
     */
    public function zan(){
        $a_id=$_POST['id'];
        // print_r($a_id);die;
        if(!isset($_SESSION)){
            session_start();
        }
        if(empty($_SESSION['u_id'])){
            echo 1;
        }else{
            $u_id = $_SESSION['u_id'];
            // echo $u_id;die;
            $arr=DB::table('article_zan')->where("u_id",$u_id)->where("article_id",$a_id)->get();
            if($arr){
                // 当用户已经推荐过（赞）
                echo 2;
            }else{
                $res = DB::table('article')->where('a_id',$a_id)->increment('a_num');
                $a=DB::insert("insert into article_zan(u_id,article_id) values('$u_id','$a_id')");
                echo 3;
            }
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

        $aping = DB::table('aping')->join("users", "aping.u_id", "=", "users.user_id")->join("article", "aping.a_id", "=", "article.a_id")->orderBy("aping.ap_id", "desc")->limit(3)->get();
//        return view('article/wxiang', ['arr' => $arr[0], 'username' => $username, 'aping' => $aping]);

        //查询是否收藏
        if (empty($_SESSION['username'])) {
            return view('article/wxiang', ['arr' => $arr[0], 'username' => $username, 'aping' => $aping]);
        } else {
            $user_id = DB::table('users')->where("user_name", "$username")
                                         ->orwhere("user_phone","$username")
                                         ->orwhere("user_email","$username")
                                         ->first();
            //  print_r($user_id);die;
            $u_id = $user_id['user_id'];
            $is_house = DB::table("house_article")->where(['user_id' => $u_id, 'article_id' => $id])->get();
             // dd($arr);die;
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
            $username=$_SESSION['username'];
            $u_id=DB::table('users')->where("user_phone","$username")->orwhere("user_email","$username")->first();
            $u_id=$u_id['user_id'];
        }
        //echo $u_id;die;
        $a_id=$_POST['a_id'];
        $ping=$_POST['ping'];
        $sql="insert into aping(u_id,ap_con,a_id) values('$u_id','$ping','$a_id')";
        $re=DB::insert($sql);

        $aping=DB::table('aping')->join("users","aping.u_id","=","users.user_id")->join("article","aping.a_id","=","article.a_id")->orderBy("aping.ap_id","desc")->limit(3)->get();
        //print_r($aping);die;
        return json_encode($aping);
        //return view('article/aping',['aping'=>$aping]);
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
}
