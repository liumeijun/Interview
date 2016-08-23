<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>面试宝典大师秀</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />

    <meta name="Keywords" content="PHP，JAVA，Html/CSS" />


    <meta name="Description" content="猿问是由面试宝典为广大IT爱好者提供的专业问答交流平台,这里大牛云集,用户可根据自身需求,提出相关问题,也可为有问题同学进行解答,互帮互助,分享知识！" />


    <meta name="viewport" content="width=device-width, initial-scale=1">



    <style>
        h1,h2,h3,h4,h5,h6{
            color:black;
        }
        .imgs{border:solid 1px black;height:50px;width:50px;border-radius: 50%;float:left;}/*头像类*/
    </style>

    <script type="text/javascript">

        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))

    </script>
    <script type="text/javascript">
        var OP_CONFIG={"module":"wenda","page":"detail"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=2016081011958";
    </script>

    <link rel="stylesheet" href="css/ahx.css" type="text/css">
    <link rel="stylesheet" href="css/muke3.css" type="text/css" />
    {{--<link rel="stylesheet" href="css/muke2.css" type="text/css" />--}}


    <script>
        var quesInfo = {
            answeruid : "10000",
            quesid: "305892",
            quesuid : ""
        }
    </script>


</head>
<body style="background:#FFFFFF" >

@include('layouts.master')

<div id="main">


    <div class="wenda clearfix">
        <div class="main">
            @foreach($fenlei as $v)
                <h3><a href="detail?id=<?= $v['t_id']?>"><?= $v['t_title']?></a></h3>
                <br><h4 style="margin-left: 40px;"><?= $v['t_content']?></h4><br>
            @endforeach
        </div>



    </div>


    <div class="pop-tips-layer"></div>
</div>

@include('layouts.foot')

{{--右边咨询--}}
<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg" title="意见反馈"><i class="icon-feedback"></i></a>
    <a href="javascript:" class="elevator-app" title="app下载">
        <i class="icon-appdownload"></i>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:" class="elevator-weixin no-goto" id="js-elevator-weixin" title="官方微信">
        <i class="icon-wxgzh"></i>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" title="返回顶部" id="backTop"><i class="icon-up2"></i></a>
</div>


<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>

    {{--百度编辑器--}}
    <script type="text/javascript" charset="utf-8" src="baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="baidu/ueditor.all.min.js"> </script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>

    <?php  if(!empty($_SESSION['username'])){ ?>
    <script>
        $('#answer-frame').click(function(){
            /*修改回答的样式，隐藏起来*/
            $('#add-answer').css('display','none')
//            $('#avator-wrap').toggleClass('detail-ci-avator')
            //把编辑器显示出来
            $('#avator-wrap').removeClass('detail-ci-avator answer-hidden').addClass('detail-ci-avator')
            $('#js-reply-wrap').removeClass('answer-hidden')

        })
    </script>
    <script>
        jQuery(document).ready(function($) {
         $('.agree').click(function(){
            /*获取同意按钮*/
             var ag=$(this)
             /*获取反对按钮*/
             var disag=$(this).parent().siblings('.agree-with').children();
             /*同意按钮的值*/
             var zan=$(this).html();
             /*获取点回答id*/
             var com_id=$(this).attr('b');
             /*获取数量位置*/
             var replay=ag.parent().siblings('.reply').children('.num');
             if(zan=='赞同'){
                 $.ajax({
                   url:'agree',
                   type:'GET',
                  data:{status:1,com_id:com_id},
                    success:function(msg) {
                        if (msg == 200) {
                            /*初始状态不为0*/
                            disag.html('反对');
                            disag.parent().css('background', '');

                            ag.parent().css('background', '#EDF1F2');
                            ag.html('取消赞同')
                        } else {
                            if(msg==400){
                            var re = replay.html()*1+1*1;
                            replay.html(re)
                            ag.parent().css('background', '#EDF1F2');
                            ag.html('取消赞同')
                            }
                        }
                    }})


             }else{
                 $.ajax({
                     url:'agree',
                     type:'GET',
                     data:{status:0,com_id:com_id},
                     success:function(msg){
                         if(msg==500){
                             var re = replay.html()-1;
                             replay.html(re)
                             ag.parent().css('background','');
                             ag.html('赞同')
                         }
                     }
                 })
             }

         })
        $('.disagree').click(function(){
                /*获取同意按钮*/
                var ag=$(this)
                /*获取反对按钮*/
                var disag=$(this).parent().siblings('.agree-with').children();
                /*同意按钮的值*/
                var zan=$(this).html();
                /*获取点回答id*/
                var com_id=$(this).attr('b');
                /*获取数量位置*/
                var replay=ag.parent().siblings('.reply').children('.num');
                if(zan=='反对'){
                    $.ajax({
                        url:'agree',
                        type:'GET',
                        data:{status:2,com_id:com_id},
                        success:function(msg){
                            if (msg == 200) {
                                /*初始状态不为0*/
                                disag.html('赞同');
                                disag.parent().css('background', '');
                                ag.parent().css('background', '#EDF1F2');
                                ag.html('取消反对')
                            } else {
                                if(msg==400){
                                    var re = replay.html()*1+1*1;
                                    replay.html(re)
                                    ag.parent().css('background', '#EDF1F2');
                                    ag.html('取消反对')
                                }
                            }
                        }})
                }else{
                    $.ajax({
                        url:'agree',
                        type:'GET',
                        data:{status:0,com_id:com_id},
                        success:function(msg){
                            if(msg==500){
                                var re = replay.html()-1;
                                replay.html(re)
                                ag.parent().css('background','');
                                ag.html('反对')
                            }
                        }
                    })
                }
            })
        })
    </script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script>
        function addhouse(){
            var tid = $("#tid").val();
            $.ajax({
                type: "POST",
                url: "addhouse_wenda",
                data: "tid="+tid,
                success: function(msg){
                    if(msg == 200){
                        tr = '';
                        tr += '<h4 id="s1" style="float: right"><a onclick="delhouse()" style = "color:blue" style="color:blue">已收藏&nbsp;&nbsp;<img src="/images/cancel.jpg" style="width: 20px;height:20px;"></a></h4>';
                        $("#house").remove();
                        $("#s1").html(tr);
                    }
                }
            });
        }

        function is_house(){
            alert('<a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" >登录</a>');
            //location.href='index.php/login';
        }

        function delhouse(){
            var tid = $("#tid").val();
            $.ajax({
                type: "POST",
                url: "delhouse_wenda",
                data: "tid="+tid,
                success: function(msg){
                    if(msg == 200){
                        tr = '';
                        tr += '<h4 id="s1" style="float: right"><a onclick="addhouse()" style="color:red">加入收藏&nbsp;&nbsp;<img src="/images/collection.jpg" style="width: 20px;height:20px;"></a></h4>';
                        $("#house").remove();
                        $("#s1").html(tr);
                    }
                }
            });
        }

        function g_direction(d_id){
            $.ajax({
                type: "POST",
                url: "g_direction",
                data: "d_id="+d_id,
                dataType: "json",
                success: function(msg){
                        var tr = '';
                        for(var i=0;i<=msg.length;i++){
                                tr += '<a href="javascript:void(0)" data-tag-id="5" class="follow" id="q_direction">已关注</a>';
                        }
                        $("#g_direction_"+d_id).remove();
                        $("#direction_"+d_id).html(tr);
                }
            });
        }

        function q_direction(d_id){
            alert(d_id)
        }

    </script>



    <?php } ?>

</div>
</body>
</html>












