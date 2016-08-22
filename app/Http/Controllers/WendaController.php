<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use  Illuminate\Pagination\LengthAwarePaginator;

header('content-type:text/html;charset=utf-8');
class WendaController extends Controller
{
    /*
     * 问答推荐
     */
    public function wenda(){
//        //echo "123";die;
//        $is_look=Input::get('is_look');
//        if(empty($is_look)){
//            echo 1;
//        }else{
//            print_r($is_look);
//        }
        $pro=DB::table('t_tw')
            ->select(DB::raw('*,count(comments.com_id)as num'))
        ->join('direction', function ($join) {
            $join->on('direction.d_id', '=', 't_tw.d_id');
        })
        ->join('users', function ($join) {
            $join->on('users.user_id', '=', 't_tw.user_id');
        })
        ->leftjoin('comments',function($join){
            $join->on('comments.t_id', '=', 't_tw.t_id');
        })->groupby('t_tw.t_id')
            ->orderBy('num','desc')
        ->simplePaginate(5);
//        print_r($pro);die;
   //一周回答雷锋榜
        if(!isset($_SESSION)){
            session_start();
        }
        $honor = DB::select("select user_name,img,count(comments_replay.user_id) from
comments_replay join users on comments_replay.user_id = users.user_id group by
 comments_replay.user_id order by count(comments_replay.user_id) desc limit 10");
        return view('wenda/wenda',['pro'=>$pro,'honor' => $honor,'is_look']);
    }


    /*
     * 最新问答题
     */
    public function bestnew(){
        //echo "123";die;
        $pro=DB::table('t_tw')
            ->join('direction', function ($join) {
                $join->on('direction.d_id', '=', 't_tw.d_id');
            })
            ->join('users', function ($join) {
                $join->on('users.user_id', '=', 't_tw.user_id');
            })
            ->orderBy('t_tw.add_time','desc')
            ->simplePaginate(5);
        //print_r($pro);die;
        //一周回答雷锋榜
        if(!isset($_SESSION)){
            session_start();
        }
        $honor = DB::select("select user_name,img,count(comments_replay.user_id) from
      comments_replay join users on comments_replay.user_id = users.user_id group by
      comments_replay.user_id order by count(comments_replay.user_id) desc limit 10");
        return view('wenda/bestnew',['pro'=>$pro,'honor' => $honor]);
    }
    /*
    * 问答推荐
    */
    public function waitreply(){
        //echo "123";die;
        $pro=DB::table('t_tw')
            ->select(DB::raw('*,count(comments.com_id)as num'),'t_tw.t_id')
            ->join('direction', function ($join) {
                $join->on('direction.d_id', '=', 't_tw.d_id');
            })
            ->leftjoin('users', function ($join) {
                $join->on('users.user_id', '=', 't_tw.user_id');
            })
            ->leftjoin('comments',function($join){
                $join->on('comments.t_id', '=', 't_tw.t_id');
            })
            ->groupby('t_tw.t_id')
            ->having('num','=','0')
            ->simplePaginate(5);
//        print_r($pro);die;
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
        //return view('wenda/waitreply',['pro'=>$pro,'honor' => $honor]);
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
    /*
     * 提交提问功能
     */
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
        $time=date('Y-m-d H:i;s');
        //var_dump($t_content);die;
        $arr1=DB::insert("INSERT INTO t_tw(t_title,t_content,user_id,d_id,add_time) values('$t_title','$t_content','$u_id','$pro','$time')");
         if($arr1){
             echo "<script>alert('成功');location.href='wenda'</script>";
         }else{
            exit('0');
         } 
    }

    /*
     * 详情页面
     */
    public function detail(){
        session_start();
        $input=new Input();
        $id=$input->get("id");
        //查询题目
        $arr=DB::select("select * from t_tw where t_id='$id'");
        //print_r($arr);die;
       //查询提问人
       $arr_user=DB::table('t_tw')->leftjoin('users','users.user_id','=','t_tw.user_id')->where("t_tw.t_id",$id)->first();
//        //print_r($arr_user);die;
//        // 评论问题
//        //$arr_com=DB::table("comments")->leftjoin('users','users.user_id','=','comments.user_id')->leftjoin('t_tw','t_tw.t_id','=','t_tw.t_id')->where("comments.t_id",$id)->get();
//        $arr_com=DB::select("select *,count(comments_replay.status) from comments inner join users on users.user_id=comments.user_id inner join t_tw on t_tw.t_id=comments.t_id LEFT JOIN comments_replay on comments.com_id=comments_replay.com_id  where comments.t_id=$id GROUP BY comments.com_id") ;

// //赞同评论的数量
//         //print_r($arr_user);die;

        //查询回答的人数及点赞的人数
        $arr1 = DB::table('comments')
            ->join('users', 'users.user_id', '=', 'comments.user_id')
            ->select('*')
            ->where('comments.t_id',$id)
            ->get();
        $arr2 = DB::table('comments')
            ->leftjoin('comments_replay','comments.com_id', '=','comments_replay.com_id')
            ->select('comments_replay.status','comments_replay.com_id','comments_replay.user_id')
            ->where('comments.t_id',$id)
            ->where('status','!=','0')
            ->get();
        //处理数组，得到想要的数据
        foreach($arr1 as $k=>$v){
            foreach($arr2 as $ke=>$val){
                if($val['com_id']==$v['com_id']){
                    $arr1[$k]['agree'][]=$val;
                }
            }
            $arr1[$k]['is_agree']='';
        }

        $is_house = '';

        //判断当是否登录，
        if(isset($_SESSION['u_id'])){

            $u_id=$_SESSION['u_id'];
//            print_r($u_id);die;
            //查询登录人头像
            $user_img = DB::table('users')->where('user_id',"$u_id")->get();
            foreach($arr1 as $key=>$v){
                if(isset($v['agree'])){
                   foreach($v['agree'] as $k=>$va){
                       if($va['user_id']==$u_id){
                           $arr1[$key]['is_agree']=$va['status'];
                       }
                   }
                }
            }

            $arr['user']=DB::table('users')->select('img','user_name')->where("user_id",$u_id)->first();

            //判断是否收藏
            $is_house = DB::table("house_wenda")->where(['user_id' => $u_id, 'tid' => $id])->get();

        }

        $d_id = $arr[0]['d_id'];
        //查询相关问题
        $xiangguan = DB::table('t_tw')->where("d_id","$d_id")->orderBy('add_time','desc')->limit('10')->get();
        unset($xiangguan[0]);

        //查询相关分类
        $type = DB::table('direction')->get();
        $ti = DB::table('t_tw')->join("direction",'t_tw.d_id','=','direction.d_id')
            ->groupBy('t_tw.d_id')->orderBy('t_tw.add_time')->get();
        //判断是否收藏分类
        if(!empty($_SESSION['u_id'])) {
            $fei_num = count($type);
            $fenlei = DB::table("house_direction")->where(['user_id' => $u_id,])->get();
            foreach ($fenlei as $v) {
                $fen[] = $v['d_id'];
            }
            foreach ($ti as $k => $v) {
                if(empty($fenlei)){
                    $ti[$k]['is_guan'] = '0';
                }else{
                    if (in_array($v['d_id'], $fen)) {
                        $ti[$k]['is_guan'] = '1';
                    } else {
                        $ti[$k]['is_guan'] = '0';
                    }
                }
            }
        }
        //返回数据
        return view('wenda/detail',['arr'=>$arr],['arr_com'=>$arr1,'arr_user'=>$arr_user,'house' => $is_house,'xiangguan' => $xiangguan,'type' => $type,'ti' => $ti]);
            $arr['user']=DB::table('users')->select('img','user_name')->where("user_id",$u_id)->first();
        }
        //返回数据
        //return view('wenda/detail',['arr'=>$arr],['arr_com'=>$arr1,'arr_user'=>$arr_user]);
    /*
     * 添加评论
     */
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
//        添加入库
        $con=$re['account'];
        $tid=$re['tid'];
       $time=date("Y-m-d H:i:s");
        $sq="insert into comments(com_content,com_addtime,user_id,t_id) values('$con','$time','$user_id','$tid')";
        //执行添加
        $res=DB::insert($sq);
        //添加成功返回原路径
        if($res){
            $url=substr($re['url'],(strripos($re['url'],'/')+1));
           echo "<script>alert('成功');location.href='".$url."'</script>";
        }else{
            echo "评论失败";
        }
    }

    /*
     * 点赞功能
     * 状态 （0,1,2）  0 代表作废状态，  1 代表 赞同     2代表反对
     * 400代表执行成功（数据库数据添加了，或者状态由0变为别的状态），评论数量要加1
     * 500 （数据库数据状态由非0变成了0）评论数量要减1
     * 200 原始状态不为0，但是进行了修改，而且修改成功了
     * 300 修改或者添加失败！
     */
    function agree()
    {
        session_start();
        $agree = Request::get('status');
        $com_id = Request::get('com_id');
        $user_id = $_SESSION['u_id'];
        $result = DB::table('comments_replay')->where(['com_id' => $com_id, 'user_id' => $user_id])->first();
        if ($result != array()) {
            $up = DB::table('comments_replay')->where(['com_id' => $com_id, 'user_id' => $user_id])->update(['status' => $agree]);
            if ($up) {
                if($result['status']==0){
                    echo 400;die;//原状态为0修改后总数加1
                }else{
                  if($agree==0){
                      echo 500;die;//原状态不为0 要修改为0 修改后总数减1
                  }else{
                      echo 200;die;//原状态为不为0 切不是修改为0 总数不变
                  }
                }
            } else {
                echo 300;die;/*修改失败没变化*/
            }
        }else{
            $arr = array('status' => $agree, 'com_id' => $com_id,'user_id' => $user_id);
            $insert = DB::table('comments_replay')->insert($arr);
            if ($insert) {
                echo 400;die;//添加成功回复加总数1
            } else {
                echo 300;die;/*修改失败没变化*/

            }
        }
    }

    /*
     * 时庆庆
     * 2016-08-20
     * 收藏
     * 状态码：200 成功   500 失败
     */
    public function addhouse_wenda(){
        if(!isset($_SESSION)){
            session_start();
        }
        $tid = $_POST['tid'];
        //$user_name = Session::get('username');
        $u_id=$_SESSION['u_id'];
        $arr = DB::insert("insert into house_wenda(user_id,tid) values('$u_id','$tid')");
        if($arr){
            return 200;
        }else{
            return 500;
        }
    }

    /*
     * 时庆庆
     * 2016-08-20
     * 取消收藏
     * 状态码：200 成功   500 失败
     */

    public function delhouse_wenda(){
        if(!isset($_SESSION)){
            session_start();
        }
        $tid = $_POST['tid'];
        //$user_name = Session::get('username');
        $user_id=$_SESSION['u_id'];
        $arr = DB::delete("delete from house_wenda where user_id = '$user_id' and tid = '$tid'");
        if($arr){
            return 200;
        }else{
            return 500;
        }
    }

    /*
     * 时庆庆
     * 2016-08-21
     *关注分类
     */
    public function g_direction(){
        if(!isset($_SESSION)){
            session_start();
        }
        $d_id = $_POST['d_id'];
        //$user_name = Session::get('username');
        $u_id=$_SESSION['u_id'];
        $arr = DB::insert("insert into house_direction(user_id,d_id) values('$u_id','$d_id')");
        $msg = DB::table("house_direction")->where("user_id","$u_id")->get();
        echo json_encode($msg);
    }
}