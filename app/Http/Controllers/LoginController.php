<?php

namespace App\Http\Controllers;
use DB,Mail,Request;
use open51094;
use Illuminate\Support\Facades\Session;
//引用短信验证码类命名空间
use App\Http\Smsapis\smsapi;

session_start();

class LoginController extends Controller
{
    public function login(){
        return view('login/login');
    }
    public function name(){
        $u_phone=$_POST['u_name'];
        // echo $u_phone;die;
        $arr=DB::table('users')->where('user_phone',"$u_phone")->first();
        if($arr){
            echo 1;
        }else{
            echo 2;
        }
    }
    public function email(){
        $u_email=$_POST['u_name'];
        $arr=DB::table('users')->where('user_email',"$u_email")->first();
        if($arr){
            echo 1;
        }else{
            echo 2;
        }
    }
    public function name_pwd(){
        $u_name=$_POST['u_name'];
        $u_pwd=$_POST['u_pwd'];
        //echo $u_name,$u_pwd;die;
        $arr=DB::table('users')->where('user_phone',"$u_name")->where('user_pwd',"$u_pwd")->get();
        print_r($arr);die;
        if($arr){
            echo 3;
        }else{
            echo 4;
        }
    }
    public function email_pwd(){
        $u_name=$_POST['u_name'];
        $u_pwd=$_POST['u_pwd'];
        //echo $u_name,$u_pwd;die;
        $arr=DB::table('users')->where('user_email',"$u_name")->where('user_pwd',"$u_pwd")->get();
        //print_r($arr);die;
        if($arr){
            echo 3;
        }else{
            echo 4;
        }
    }
    public function name_deng(){
        $u_name=$_POST['u_name'];
        $u_pwd=$_POST['u_pwd'];
        $arr=DB::table('users')->where('user_phone',"$u_name")->where('user_pwd',"$u_pwd")->get();
        //print_r($arr);die;
        if($arr){
            $_SESSION['u_id']=$arr[0]['user_id'];
            $_SESSION['username']=$arr[0]['user_name'];
            // echo $_SESSION['username'];die();
            echo 5;
        }else{
            echo 6;
        }
    }
    public function email_deng(){
        $u_name=$_POST['u_name'];
        $u_pwd=$_POST['u_pwd'];
        $_SESSION['username']=$u_name;
        $arr=DB::table('users')->where('user_email',"$u_name")->where('user_pwd',"$u_pwd")->get();
        //print_r($arr);die;
        if($arr){
            $_SESSION['u_id']=$arr[0]['user_id'];
            $_SESSION['username']=$arr[0]['user_name'];

            echo 5;
        }else{
            echo 6;
        }
    }
    //注册
    public function register(){
        return view('login/register');
    }
    public function reg(){
//	echo "ssssss";die;
        $name = Request::input('username');
        $pwd = Request::input('password');
        $email = Request::input('email');
        $phone = Request::input('phone');
        $md5 = md5($email);
        $a_name=DB::table('users')->where('user_name',"$name")->first();
        if($a_name){
            echo "<script>alert('用户名已存在');location.href='index'</script>";
        }else{

            if(DB::table('users')->where('user_email',"$email")->first()){

                echo "<script>alert('邮箱已存在');location.href='index'</script>";
            }else{
                if(DB::table('users')->where('user_phone',"$phone")->first()){
                    echo "<script>alert('手机号已存在');location.href='index'</script>";
                }else{

                    $arr=DB::insert("insert into users(user_name,user_pwd,user_email,user_phone,user_md5) values('$name','$pwd','$email','$phone','$md5');");
                    if($arr){
                        $email = md5($email);
                        //echo $email;die;
			            $_SESSION['username']=$name;
                        $str= 'http://www.baodian.com/send?email='.$email;
                        $boll= mail::raw($str, function ($message){
                            $to= '1521233971@qq.com';
                            $message -> to($to) ->subject('测试邮箱');
                        });
                        if ($boll) {
                                echo "<script>alert('亲邮箱注册成功');location.href='#';</script>";
                        }else{
                            echo "邮箱错误";
                        }

                        // echo "<script>alert('注册成功');location.href='#'</script>";
                    }else{
                        echo "<script>alert('注册失败');location.href='".$url."'</script>";
                    }
                }
            }
        }

    }
    //邮件激活
    public function sendemail(){
        // echo "sda";die;
        $email = Request::input('email');
         $select  = DB::table('users')->where('user_md5','=',$email)->update(['user_state'=>'1']);
         // Session::put('u_id',$user_id);
        //print_r($select);die;
        if($select ==1){
             echo "<script>alert('激活成功');location.href='index'</script>";
        }else{
             echo "<script>alert('激活失败');location.href='index'</script>";
        }        
    }

    public function out(){

        $url=Request::get('url');
        if ($url=='setprofile'||$url=='setavator'||$url=='setphone'||$url=='setverifyemail'||$url=='setresetpwd'||$url=='setbindsns') {
            $url='index';
        }
        // print_r($url);die;
        unset($_SESSION['username']);
        unset($_SESSION['u_id']);
        unset($_SESSION['img']);
     
        echo "<script>alert('退出成功');location.href='".$url."'</script>";
    }

      //第三方qq登陆
    // public function qqlogin(){
    //     $code=$_GET['code'];
    //     //$state=$_GET['state'];
    //     $client_id=101339184;
    //     $client_secret='2b7b5c3cd25ab24d19315351727cae16';
    //     $redirect_uri='http://www.baodian.com/qqlogin';
    //     //print_r($redirect_uri);exit;
    //     $url="https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=$client_id&client_secret=$client_secret&code=$code&redirect_uri=$redirect_uri";
    //     $data=file_get_contents($url);
    //     // print_r($data);die;
    //     $queryParts = explode('&',$data); 
    //     // print_r($queryParts);exit;
    //     $params = array(); 
    //         foreach ($queryParts as $param) 
    //         { 
    //             $item = explode('=', $param); 
    //            $params[$item[0]] = $item[1]; 
    //         } 
    //         // print_r($item);die;
    //     $access_token=$params['access_token'];
    //     // print_r($access_token);exit;
    //     $url="https://graph.qq.com/oauth2.0/me?access_token=$access_token";
    //     $data=file_get_contents($url);
    //     // print_r($data);die;
    //     $result = array();
    //     preg_match_all("/(?:\{)(.*)(?:\})/i",$data, $result); 
    //     $data=json_decode($result[0][0],true);
    //     // print_r($data);exit;
    //     $openid=$data['openid'];
    //     // print_r($openid);exit;
    //     $data = DB::table('users')->where('user_openid',$openid)->first();
    //     $user_name=$data['user_name'];
    //     // print_r($user_name);die; 
    //     // Session::put('username',$data['user_name']);
    //     if($data){
    //             // session_start();
    //             $_SESSION['username']=$user_name;
    //             // echo "$_SESSION['user_name']";die;
    //             // Session::put('username',$data['user_name']);
    //         }else{
    //             //rand随机函数
    //             $user_name = rand(10000,9999);
    //             $res = DB::table('users')->insert(['user_name'=>$user_name,'user_openid'=>$openid]);
    //             // session_start();
    //             $_SESSION['username']=$user_name;
    //             // Session::put('username',$user_name);
    //         }
    //          // print_r($user_name);die; 
    //     return redirect('/index');   
    // }  
    //第三方
    public function weibo(){
        include 'disan/open51094.class.php';

        $open = new open51094();
        // print_r($open);die;
        $code = $_GET['code'];
        $data=$open->me($code);
        // print_r($data);die();
        // $user_id=$data['user_id'];
        $uniq=$data['uniq'];
        $name=$data['name'];
        $img=$data['img'];
        $data = DB::table('users')->where('user_openid',$uniq)->first();
         // $name=$data['user_nickname'];
         //  $img=$data['img'];
         // $_SESSION['u_id']=$data[0]['user_id'];
        if ($data) {
                  $name=$data['user_nickname'];
                  $img=$data['img'];
                  $user_id=$data['user_id'];
                 $_SESSION['u_id']=$user_id;
                 $_SESSION['username']=$name;
                 $_SESSION['img']=$img;
                 // echo $_SESSION['u_id'];die();
                 // $_SESSION['user_id']=$uniq;
        }else{
             // $name="宝典".rand(10000,999);
              // $_SESSION['u_id']=$user_id;
             $res = DB::table('users')->insert(['user_nickname'=> $name,'img'=> $img,'user_openid'=>$uniq]);
              $user_id=$data['user_id'];
            // print_r($res);die;
                  $_SESSION['username']=$name;
                  // $_SESSION['u_id']=$data[0]['user_id'];
                  $_SESSION['u_id']=$user_id;
                  $_SESSION['img']=$img;
                    // echo $_SESSION['img'];die();
                  // $_SESSION['img']=$img;
        }
          return redirect('/index');   
    }
    //短信注册验证
    public function xing(){
        //接收的手机号
        $phone = $_GET['phone'];
        // echo $phone;die;
        //设定验证码随机数
        $code=rand(1000,9999);
        //将手机号存入cookie
        setcookie('phone',$code,time()+600);
        //接口发送数据
        $url='http://api.sms.cn/sms/?ac=send&uid=hulin&pwd=3532bd6ef2fe152cdc3a0ef7164a77f6&template=384921&mobile='.$phone.'&content={"code":"'.$code.'"}';
        // $url='http://api.sms.cn/sms/?ac=send&uid=niuliang&pwd=c99d994abde245f922cfb339d245d8a0&template=384826&mobile='.$phone.'&content={"phone":'.$phone.'}'; 
        //$url='http://api.sms.cn/sms/?ac=send&uid=niuliang&pwd=c99d994abde245f922cfb339d245d8a0&template=384826&mobile=18513975044&content={"phone":1234}';
        $data=array();
        $method='GET';
        $res=$this->curlPost($url,$data,$method);
        echo $res;          
        die;        
    }   
    //curl的post传参
    function curlPost($url,$data,$method){
        $ch = curl_init();   //1.初始化
        curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
        //4.参数如下
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        if (ini_get('open_basedir') == '' && ini_get('safe_mode' == 'Off')) {
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        }
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_SSLVERSION, 3);
        curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');

        if($method=="POST"){//5.post方式的时候添加数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行

        if (curl_errno($ch)) {//7.如果出错
            return curl_error($ch);
        }
        curl_close($ch);//8.关闭
        return $tmpInfo;
    }
}
 