<script src="../js/jquery.js"></script>
<link rel="stylesheet" href="css/muke.css" type="text/css" />
<script type="text/javascript" src="http://open.51094.com/user/myscript/157b278400d7b9.html"></script>
<link rel="stylesheet" type="text/css" href="../static/css/ui2.css?2013032917">
<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<div id="header">
    <div class="page-container" id="nav" style="background:black;">
        <a href="http://www.interview.com/" target="_self"><img src="/images/login.png" style="float: left; padding-top:6px;"></a><a href="index" target="_self" class="hide-text"></a>
        <div class="g-menu-mini l">
            <ul class="nav-item l">
                <li><a href="shiti"  target="_self">试题</a></li>
                <li><a href="program"  target="_self">招聘</a></li>
                <li><a href="article"  target="_self">方法</a></li>
                <li><a href="company"  target="_self">简历</a></li>
                <li><a href="wenda" target="_self">答疑</a></li>
                <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
            </ul>
        </div>
        <div id="login-area">
            <ul   <?php if(empty($_SESSION['username'])){ ?> class="header-unlogin clearfix" <?php }else{ ?> class="clearfix logined" <?php }?>>
                <li class="header-app">
                    <a>
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">面试宝典APP下载</p>
                        <!--<p id="app-type">iPhone / Android / iPad</p>-->
                        <img src="/images/erweima.png">
                    </div>
                </li>

                <?php
                if(empty($_SESSION['username'])){
                ?>
                <li class="header-signin">
                    <a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" >登录</a>
                </li>
                <li class="header-signup">
                    <a href="#signup-modal" id="js-signup-btn" data-category="UserAccount" data-action="login" data-toggle="modal" >注册</a>
                </li>
                <?php
                }else{
                ?>

                <li class="remind_warp">
                    <i class="msg_remind" style="display: none;"></i>
                    <a href="/sms/messagesone" target="_blank"><i class="icon-notifi"></i></a>
                </li>
                <li class="my_message">
                    <a target="_blank" title="我的消息" href="/sms/messages">
                        <span style="display: inline;" class="msg_icon">3</span>
                        <i class="icon-mail"></i>
                        <span style="display: none;">我的消息</span>
                    </a>
                </li>
                <li class="set_btn user-card-box">
                    <a target="_self" href="/u/3071208/courses" action-type="my_menu" class="user-card-item"  id="header-avator">
                        <img width="40" style="" height="40" src="<?php if (empty($_SESSION['img'])) {
                                echo "/images/unknow-220.png";
                                 } else{
                                    echo $_SESSION['img'];
                                    } ?> ">
                        <i style="display: none;" class="myspace_remind"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href="/u/3071208/courses"><img class="l" alt="凤颖" src="<?php if (empty($_SESSION['img'])) {
                                    echo "/images/unknow-220.png";
                                 } else{
                                    echo $_SESSION['img'];
                                } ?> "></a>
                               <a href="/u/3071208/courses"><span class="name text-ellipsis"><?php echo $_SESSION['username'] ?></span></a>

                                <p class="meta">
                                    <a href="/u/3071208/experience">经验<b id="js-user-mp">550</b></a>
                                    <a href="/u/3071208/credit">积分<b id="js-user-credit">0</b></a>            </p>

                                <a class="icon-set setup" href="/setprofile"></a>
                            </div>
                            <!--
                            <div class="card-links">
                                <a href="/space/index" class="my-mooc l">我的慕课<i class="dot-update"></i></a>
                                <span class="split l"></span>
                                <a href="/myclub/myquestion/t/ques" class="my-sns l">我的社区</a>
                            </div>
                            -->
                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">python进阶</span>
                                    <span class="media-name text-ellipsis">2-9 闭包</span>
                                    <i class="icon-clock"></i>
                                     <a class="continue" href="/video/6059">继续</a>
                                </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a class="l mr30" target="_blank" href="/wenda/save">发问题</a>
                                <a class="l" target="_blank" href="/article/publish">写文章</a>
                                <a class="r" href="out?url=<?php   $re=Request::fullurl(); echo substr($re,(strripos($re,'/')+1))  ?>">退出</a>
                            </div>
                        </div>
                        <i class="card-arr"></i>
                    </div>
                </li>

                <?php
                }
                ?>
            </ul>
        </div>

        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger"   placeholder="请输入想搜索的内容..."   type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>

</div>

</div>
<div class="footer bg-white idx-minwidth">


<script src="/static/js/landing-min.js?2013032917"></script>
<div style="text-align:center;clear:both"></div>


    <div style="text-align:center;clear:both"></div>

    <div id="js-index-video" class="video-container">
        <div class="video-wrap" id="js-video-wrap">
            <div id="js-video"></div>
        </div>
        <div class="video-mask"></div>
        <div id="js-video-close" class="video-close"></div>
    </div>

    <div class="modal in" id="login-modal"> <a class="close" data-dismiss="modal">×</a>
        <h1>登录</h1>
        <ul class="login-bind-tp">
        </ul>
        <a href=""> <p>还没有账号,立即注册</p></a><br>
        <form class="login-form clearfix" method="post" action="">

            <div class="form-arrow"></div>
            <input id="u_name" type="text" class="ipt ipt-email" placeholder="手机号或邮箱：">
            <font color="red"><span id="sp_name"></span></font>

            <input id="password" class="ipt ipt-pwd js-pass-pwd" type="password" placeholder="密码：">
            <font color="red"> <span id="sp_pwd"></span></font>

            <input type="button" name="type" class="button-blue login" value="登录" id="sub">
            <input type="hidden" name="return-url" value="">
            <div class="clearfix"></div>
            <label class="remember">
                <input name="remember" type="checkbox" checked/>
                下次自动登录 </label>
            <a class="forgot">忘记密码？</a>
            <div>
                <div>
                    第三方:<span id="hzy_fast_login"></span>
                </div>
                    
                
                <a href=""><p>还没有账号,立即注册</p></a><br>
            </div>


        </form>
    </div>


    <div class="modal in" id="signup-modal" > <a class="close" data-dismiss="modal">×</a>

        <h1>注册</h1>
        <p><a href="index">已有账号,直接登录</a></p><br/>
        <form class="signup-form clearfix" method="post" action="reg" onsubmit="return zhu()">
            <p class="error"></p>
            <input type="hidden" name="url" value="<?php   $re=Request::fullurl(); echo substr($re,(strripos($re,'/')+1))  ?>">
            <input type="text" name="username" id="username" data-validate="email" autocomplete="off" class="ipt ipt-email" placeholder="请输入名称 "><font color="red"><p class="tips" id="name_sp"></p></font>
            <input type="password" name="password"  class="ipt ipt-pwd js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" id="pwd"  style="background-image:url('');
   background-position:right bottom"><p class="tips" id="sp_pwd"><font color="red"></font></p>

            <input type="text" name="email" data-validate="nick" class="ipt ipt-email" placeholder="邮箱格式:@ . com" id="email">
            <font color="red"><p class="tips" id="email_sp"></p></font>
            <input type="text" name="phone" data-validate="nick" class="ipt ipt-nick" placeholder="手机号为11位 " id="phone" >
            <font color="red"><p class="tips" id="phone_sp"></p></font>
            <input class="code" value="六位数字验证码" id="validatecode" type="text">
            <input class="getNum vm" onclick='duanxin()' value="获取验证码" type="button">
            
            <input type="submit" name="type"  class="button-blue reg" value="注册" data-category="UserAccount" data-action="regist">

            <!--  <div class="wrap-right l">
                 <div class="login-sns-wrap">
                     <h1 class="form-h1">
                         一键授权，快速登录
                     </h1>
                     <div class="login-sns">
                         <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweixin" class="sns-weixin"><i class="icon-weixin"></i>微信帐号直接登录</a>
                         <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginqq" class="sns-qq"><i class="icon-qq"></i>QQ  帐号直接登录</a>
                         <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweibo" class="sns-weibo"><i class="icon-weibo"></i>新浪微博帐号登录</a>
                     </div>
                 </div>
             </div> -->
        </form>
    </div>
    

    <SCRIPT src="../js/jquery-1.9.1.min.js" type="text/javascript"></SCRIPT>
    <script>

        var flag=false;
        $('#username').blur(function(){
            // alert(123);
            var username=$(this).val();
            if(username=='') {
                $('#name_sp').html('用户名非空');
//            alert(123);

                return flag;
            }else{
                $('#name_sp').html('');
                flag = true;
                return flag;
            }
        })
        var emailflag=false;
        $('#email').blur(function(){
            var email=$("#email").val();
            var reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if(reg.test(email)){
                // alert(123)
                $("#email_sp").html('')
                emailflag=true;
                return emailflag;
            }else{
                // alert(456)
                // alert(456)
                $("#email_sp").html('格式错误')
                return emailflag;
            }
        })
        var phoneflag=false;
        $("#phone").blur(function(){
            var phone=$("#phone").val();
            var reg = /^1\d{10}$/;
            if(reg.test(phone)){
                $("#phone_sp").html('')
                phoneflag=true;
                return phoneflag;
            }else{
                $("#phone_sp").html('格式错误');
                return phoneflag;
            }
        })



        function show(){
            if(this.aa.password.type='password'){
                box.innerHTML = "<input type='text' name='password'  value="+this.aa.password.value+">";
                box3.innerHTML = "<a href='javascript:void(0)' onclick='hid();'>隐藏密码</a>";
            }
        }
        function hid(){
            if(this.aa.password.type='text'){
                box.innerHTML = "<input type='password' name='password'  value="+this.aa.password.value+">";
                box3.innerHTML = "<a href='javascript:void(0)' onclick='show();'>显示密码</a>";
            }
        }



        $("#u_name").blur(function() {
            var u_name = $("#u_name").val();
            var reg = /^1\d{10}$/;
            var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if (reg.test(u_name)) {
                // alert(u_name)
                $.post('name', {
                    u_name: u_name
                }, function (data) {
                    //alert(data)
                    if (data == 1) {
                        $("#sp_name").html('')
                    } else if (data == 2) {
                        $("#sp_name").html('不存在')
                    }
                })

            } else if (email_reg.test(u_name)) {
                $.post('email', {
                    u_name: u_name
                }, function (data) {
                    if (data == 1) {
                        $("#sp_name").html('')
                    } else if (data == 2) {
                        $("#sp_name").html('不存在')
                    }
                })
            } else {
                $("#sp_name").html('格式错误')
            }
        })
        $("#password").keyup(function() {

            var u_name = $("#u_name").val()
            var u_pwd = $("#password").val()
            var reg = /^1\d{10}$/;
            var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if (reg.test(u_name)) {
                $.post('name_pwd', {
                    u_name: u_name,
                    u_pwd: u_pwd
                }, function (data) {
                    if (data == 3) {
                        $("#sp_pwd").html('')
                    } else if (data == 4) {
                        $("#sp_pwd").html('密码错误');
                    }
                })
            } else if (email_reg.test(u_name)) {
                $.post('email_pwd', {
                    u_name: u_name,
                    u_pwd: u_pwd
                }, function (data) {
                    if (data == 3) {
                        $("#sp_pwd").html('')
                    } else if (data == 4) {
                        $("#sp_pwd").html('密码错误');
                    }
                })
            }
        })
        $("#sub").click(function(){
            var url="<?php   $re=Request::fullurl(); echo substr($re,(strripos($re,'/')+1))  ?>"
            var sp_name=$("#sp_name").html();
            var sp_pwd=$("#sp_pwd").html();
            var u_name=$("#u_name").val();
            var u_pwd=$("#password").val();

            if(sp_name=='' && sp_pwd==''){
                var reg = /^1\d{10}$/;
                var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
                if (reg.test(u_name)) {
                    $.post('name_deng',{
                        u_name:u_name,
                        u_pwd:u_pwd
                    },function(data){
                        if(data==5){
                            // alert(url)
                            alert('登陆成功');location.href=url;

                        }else if(data==6){
                            alert('登陆失败');location.href='login';
                        }
                    })
                }else if(email_reg.test(u_name)){
                    $.post('email_deng',{
                        u_name:u_name,
                        u_pwd:u_pwd
                    },function(data){
                        if(data==5){
                            alert('登陆成功');location.href=url;
                        }else if(data==6){
                            alert('登陆失败');location.href='login';
                        }
                    })
                }
            }else{
                alert("条件不成立");
            }
        })
        function zhu(){
            if(flag && emailflag && phoneflag ){
                return true;
            }else{
//            alert(flag)
                return false;
            }
        }

    //短信验证
    function duanxin(){
    //获取手机ID
    var phone = $('#phone').val();
    // alert(phone);return;
    $.ajax({
        url:'xing',
        data:{'phone':phone},
        type:"GET",
        dataType:"Json",
        success:function(msg){

            if(msg['stat']=='100'){
                alert('短信发送成功了');
            }else{
                alert('短信发送失败了');
            }
        }
    });
}  
    </script>

    {{--
       QQ咨询
       --}}


</div>

<div  style="position:fixed;z-index: 100;right: 15px; top: 40%">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=297973528&site=qq&menu=yes">
        <img border="0"  src="http://wpa.qq.com/pa?p=2:297973528:53" alt="点击这里给我发消息" title="点击这里给我发消息"/>
    </a>
</div>