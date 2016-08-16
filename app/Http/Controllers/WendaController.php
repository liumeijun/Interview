<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use  Illuminate\Pagination\LengthAwarePaginator;


header('content-type:text/html;charset=utf-8');
class WendaController extends Controller
{
    public function wenda(){
        //echo "123";die;
        $pro=DB::table('t_tw')
        ->join('direction', function ($join) {
            $join->on('direction.d_id', '=', 't_tw.d_id');
        })
        ->join('users', function ($join) {
            $join->on('users.user_id', '=', 't_tw.user_id');
        })
            ->orderBy('t_id','desc')
        ->simplePaginate(5);
        //print_r($pro);die;


        //一周回答雷锋榜
        if(!isset($_SESSION)){
            session_start();
        }
        $honor = DB::select("select user_name,img,count(comments_replay.user_id) from
comments_replay join users on comments_replay.user_id = users.user_id group by
 comments_replay.user_id order by count(comments_replay.user_id) desc limit 10");
        //查看全部分类
        $article_type = DB::table('a_lei')->get();

        return view('wenda/wenda',['pro'=>$pro,'honor' => $honor,'article_type' => $article_type]);
    }


    //提问题页面
    public function save(){
        if(!isset($_SESSION)){
            session_start();
        }
        header('Content-Type: text/html; charset=utf-8');
       // $username = $_SESSION['username'];
    
        if(empty($_SESSION['username'])){
            echo "<script>alert('请先登录'),location.href='index'</script>";die;
        }else{
            $pro=DB::table('direction')->get();
        
        //显示各个学院
        return view('wenda/save',['pro'=>$pro]);
        }
        
    }
//提交提问功能
    public function tiwen(){
        $re=Request::all();
//        print_r($re);die;
        $t_title=$re["title"];
        $t_content=$re["aa"];
        $pro=$re['pro'];
        if(!isset($_SESSION)){
            session_start();
        }
        $u_id=$_SESSION['u_id'];
        //var_dump($t_content);die;
        $arr1=DB::insert("INSERT INTO t_tw(t_title,t_content,user_id,d_id) values('$t_title','$t_content','$u_id','$pro')");
         if($arr1){
             echo "<script>alert('成功');location.href='wenda'</script>";
         }else{
            exit('0');
         } 
    }

    //详情页面
    public function detail(){
        session_start();
        $input=new Input();
        $id=$input->get("id");
        $arr=DB::select("select * from t_tw where t_id='$id'");
       //查询提问人
       $arr_user=DB::table('t_tw')->leftjoin('users','users.user_id','=','t_tw.user_id')->where("t_tw.t_id",$id)->first();
       //print_r($arr_user);die;
       // 评论问题
       //$arr_com=DB::table("comments")->leftjoin('users','users.user_id','=','comments.user_id')->leftjoin('t_tw','t_tw.t_id','=','t_tw.t_id')->where("comments.t_id",$id)->get();
       $arr_com=DB::select("select *,count(comments_replay.status) from comments inner join users on users.user_id=comments.user_id inner join t_tw on t_tw.t_id=comments.t_id LEFT JOIN comments_replay on comments.com_id=comments_replay.com_id  where comments.t_id=$id GROUP BY comments.com_id") ;
//赞同评论的数量
        //print_r($arr_user);die;
        if(isset($_SESSION['u_id'])){
            $u_id=$_SESSION['u_id'];
            //查询登录人头像
            $user_img = DB::table('users')->where('user_id',"$u_id")->get();
            $agree=DB::select("select co.com_id,re.status from comments co inner join comments_replay re on co.com_id=re.com_id WHERE  co.t_id=$id and re.user_id=$u_id");
//            print_r($agree);die;
          foreach($arr_com as $ke=>$v){
              foreach($agree as $va){
                  if($v['com_id']==$va['com_id']){
                      $arr_com[$ke]['agree']=$va['status'];
                  }else{
                      $arr_com[$ke]['agree']='';
                  }
              }
          }
        }


//            print_r($arr_com);die;
        return view('wenda/detail',['arr'=>$arr],['arr_com'=>$arr_com,'arr_user'=>$arr_user,'user_img' => $user_img]);
    }
    //添加回答
    public function hui(){

        $re=Request::all();
        $username=$re['user_name'];

        if(empty($username)){
            echo "<script>alert('请先登录');location.href='login/login';</script>";
        }else{
            $sql=DB::table('users')->select('user_id')->where("user_name","$username")->first();
//            print_r($sql);die;
            $user_id=$sql['user_id'];
        }
//        print_r($user_id);die;
        $con=$re['account'];
        $tid=$re['tid'];
       $time=date("Y-m-d H:i:s");
        $sq="insert into comments(com_content,com_addtime,user_id,t_id) values('$con','$time','$user_id','$tid')";
        //echo $sq;
        $res=DB::insert($sq);
        if($res){

            $url=substr($re['url'],(strripos($re['url'],'/')+1));


           echo "<script>alert('成功');location.href='".$url."'</script>";
        }else{
            echo "评论失败";
        }
//        $arr_com=DB::select("select * from comments inner join users on users.user_id=comments.user_id inner join t_tw on t_tw.t_id=comments.t_id where comments.t_id=$tid order by com_id desc");
//        //print_r($arr_com);die;
//        return view('wenda/aa',['arr_com'=>$arr_com]);

    }


    // public function zid(){
    //         session_start();
    //         $zid=$_GET['name'];
    //         $id=$_SESSION['user_id'];
    //         $user = DB::table('dianzan')->where('user_id', $id)->first();
    //         //print_r($user); 
    //        if($user['z_id']!=$zid){
    //             $sq="insert into dianzan(z_id,user_id) values('$zid','$id')";
    //             $rr=DB::insert($sq);
    //             if($rr){
    //                 //$id=$_SESSION['user_id'];
    //                 //$sql="select z_id from z_u where user_id='$id'";
    //                 //$re=DB::select($sql);
    //                 //if(empty($re)){
    //                    // $sq="insert into z_u(z_id,user_id) vlues('$zid','$id')";
    //                    // $rr=DB::select($sq);
    //                     if($rr){
    //                         echo '1';
    //                     }
    //             }
    //         }
    //             else{
    //                 $sqp="delete from z_u where z_id='$zid' and user_id='$id'";
    //                 $rq=DB::delete($sqp);
    //                 if($rq){
    //                     echo '3';
    //                 }        
    //             }
               
    //     }

    
}