<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>面试宝典</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="keywords" content="面试宝典网，面试宝典官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程" />
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。" />
    <link rel="stylesheet" href="/css/base.css" type="text/css" />
    <script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"setprofile","userInfo":{"uid":3071208,"nickname":"\u51e4\u9896","head":"http:\/\/img.mukewang.com\/images\/unknow-80.png","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201604211612";
    </script>

    <!--
    <link rel="stylesheet" href="/static/component/logic/login/login-regist.css" type="text/css" />
    <link rel="stylesheet" href="/static/css/settings.css" type="text/css" />
    -->
    <link rel="stylesheet" href="/css/common-less.css" type="text/css" />
    <link rel="stylesheet" href="/css/profile-less.css" type="text/css" />
    <link rel="stylesheet" href="/css/user-common-less.css" type="text/css" />
    <link rel="stylesheet" href="/css/user-phone-less.css" type="text/css" />
    <link rel="stylesheet" href="/css/layer.css" type="text/css" />

    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body >
@include('layouts.master')

<div id="main">

    <div class="settings-cont clearfix">

        <div class="setting-left l" style="float: left">
            <ul class="wrap-boxes">
                <li>
                    <a href="/user/setprofile">个人资料</a>
                </li>
                <li class="active">
                    <a href="/user/my_house">我的收藏</a>
                </li>
                <li >
                    <a href="/user/setavator">头像设置</a>
                </li>

                <li >
                    <a href="/user/setphone">手机设置</a>
                    <span class='unbound'>未绑定</span>
                </li>

                <li>
                    <a href="/user/setverifyemail"  class="onactive">邮箱验证</a>
                    <span class='unbound'>未绑定</span>
                </li>
                <li >
                    <a href="/user/setresetpwd">修改密码</a>
                </li>
                <li >
                    <a no-pjajx href="/user/setbindsns">绑定帐号</a>
                </li>
            </ul>
        </div>
        <div class="setting-right-wrap wrap-boxes settings" style="margin-left: 280px;background-color: #ffffff">
            <div >
                <ul class="nav nav-tabs" style="height: 50px;">
                    <li><a href="/user/my_house">试题</a></li>
                    <li><a href="#">简历</a></li>
                    <li class="active"><a href="/user/my_house_article">文章</a></li>
                </ul>

                @if(empty($_SESSION['username']))
                    <br><br><br><br><br><br><center><h2 style="color: red">登录后可查看个人收藏</h2></center>
                @else
                        @foreach($article as $key => $v)
                            <br><span><h3 style="color: red"><?php echo $v['a_title']?></h3></span><br><br>
                            <span><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v['a_con']?></h5></span><br><br>
                        @endforeach
                @endif

            </div>

        </div>

    </div>

</div>
@include('layouts.foot')
<div id="J_GotoTop" class="elevator">
    <a class="elevator-weixin" href="javascript:;">
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a class="elevator-msg" href="/user/feedback" target="_blank" id="feedBack"></a>
    <a class="elevator-app" href="http://www.imooc.com/mobile/app" >
        <div class="elevator-app-box">
        </div>
    </a>
    <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>
</div>



<!--script-->
<script src="/jss/ssologin.js"></script>
<script type="text/javascript" src="/js/sea.js"></script>
<script type="text/javascript" src="/js/sea_config.js?v=201604211612"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>




<div style="display: none">
</div>
</body>
</html>
