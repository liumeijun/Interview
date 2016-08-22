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
        <div class="l wenda-main">

            <div class="qa-content" data-qid="325735">
                <div class="qa-content-inner ">
                    <div id="js-content-main">
                        <div class="detail-q-title clearfix">
                            <div>
                            <a href="#" target="_blank">{{--href地址回答者的个人中心--}}
                                {{--回答者头像--}}
                                <img src="<?= $arr_user['img']; ?>"class="imgs" alt="用户头像" >
                            </a>
                            </div><br/>
                            <h1 class="js-qa-wenda-title detail-wenda-title l" style="color:black;margin-left: 15px;"><?php echo $arr['0']['t_title'];?></h1>
                            <!-- 编辑 -->

                        </div>

                        <div id="js-qa-wenda" class="detail-wenda imgPreview rich-text" style="padding-left: 75px;"><p><?php echo $arr['0']['t_content']?><br /></p></div>
                    </div>

                    <div class="qa-header detail-user-tips">

                        <div class="qa-header-right r">
                            <!-- credit -->
                            <div class="share-rl-tips share-posi js-share-statue">
                                <span>分享即可 +</span><strong>1积分</strong>
                                <span class="rule-arrow"></span>
                            </div>
                            <!-- share -->
                            <div class="small-share l wd-share">
                                <ul class="share-wrap">
                                    <li class="weichat-posi js-top-share">
                                        <div class="bdsharebuttonbox weichat-style bdshare-button-style0-16" data-tag="share_1" data-quesid="325735">
                                            <a href="#" class="bds_weixin icon-nav icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                            {{--<a href="#" class="bds_qzone icon-nav icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>--}}
                                            <script type="text/javascript">
                                                (function(){
                                                    var p = {
                                                        url:location.href,
                                                        showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
                                                        desc:'',/*默认分享理由(可选)*/
                                                        summary:'',/*分享摘要(可选)*/
                                                        title:'',/*分享标题(可选)*/
                                                        site:'',/*分享来源 如：腾讯网(可选)*/
                                                        pics:'', /*分享图片的路径(可选)*/
                                                        style:'203',
                                                        width:98,
                                                        height:22
                                                    };
                                                    var s = [];
                                                    for(var i in p){
                                                        s.push(i + '=' + encodeURIComponent(p[i]||''));
                                                    }
                                                    document.write(['<a version="1.0"  class="bds_qzone icon-nav icon-share-qq" title="分享到QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank"></a>'].join(''));
                                                })();
                                            </script>
                                            <script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
                                            <a href="#" class="bds_tsina icon-nav icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <em class="split l"></em>
                            <!-- follow -->
                            @if(empty($_SESSION['username']))
                                <h4 id="house" style="float: right;"><a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal"  style="color: red">加入收藏&nbsp;&nbsp;<img src="/images/collection.jpg" style="width: 20px;height: 20px;"></a></h4>
                            @else
                                @if(empty($house))
                                    <h4 id="s1" style="float: right"><a onclick="addhouse()"><span  id="house" style="color: red">加入收藏&nbsp;&nbsp;<img src="/images/collection.jpg" style="width: 20px;height:20px;"></span></a></h4>
                                @else
                                    <h4 id="s1" style="float: right"><a onclick="delhouse()"><span  id="house" style="color: #0000ff">已收藏&nbsp;&nbsp;<img src="/images/cancel.jpg" style="width: 20px;height:20px;"></span></a></h4>
                                @endif
                            @endif
                        </div>
                        <!-- 个人信息 -->
                        <div class="detail-user">
                            <span class="detail-provider">提问者</span>
                            <?php echo $arr_user['user_name'];?>
                        </div>

                    </div>
                </div>

            </div>
            {{--问题回答是否登录--}}
            <?php if(empty($_SESSION['username'])){ ?>
            {{--不登陆直接登录--}}
            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <div id="add-answer" class="detail-ci-avator">
                    <h3 class="answer-add-tip">添加回答</h3>
                    <a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" > <button id="answer-frame" class="answer-btn"></button></a>
                </div>

                <div id="avator-wrap" class="detail-ci-avator answer-hidden">
                </div>
                <div id="js-reply-wrap" class="answer-hidden">
                    <div id="js-reply-editor-box" class="wd-comment-box  js-ci-unlogin">
                    </div>
                    <div id="js-qa-ci-footer" class="qa-ci-footer clearfix">
                        <span class="qa-tips l"></span>
                        <div class="qa-ci-footright">
                            <button id="js-wenda-ci-submit" class="btn btn-red detail-ans disabled" data-qid="325735">回答</button>
                        </div>
                    </div>
                </div>


            </div>
<?php } else{?>
            {{--登录后可以评价--}}
            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">

                <div id="add-answer" class="detail-ci-avator" style="">
                    <h3 class="answer-add-tip">添加回答</h3>
                    <button id="answer-frame" class="answer-btn"></button>
                </div>

                {{--添加回答--}}
                <form action="hui" method="post">
                <div id="avator-wrap" class="detail-ci-avator answer-hidden">
                        {{--当前登录人回答者头像--}}
                    <?php if(isset($arr['user'])){?>
                        <img src="<?= $arr['user']['img'];?>"style="width: 50px;height: 50px;"  alt="用户头像" class="imgs"/>
                        <?php } ?>
                    <div class="detail-r clearfix">
                        <input type="hidden" name="url" value="<?php echo Request::fullurl() ?>">
                        {{--题id--}}
                        <input type="hidden" id="tid" name="tid" value="<?php echo $arr['0']['t_id']?>">
                        {{--回答者的名字--}}
                        <input type="hidden" value="<?php echo $_SESSION['username'];?>" name="user_name">

                        <span class="detail-name"><?php echo $_SESSION['username'];?></span>
                        <p class="detail-signal"></p>
                    </div>
                </div>
                <div id="js-reply-wrap" class="answer-hidden">
                    {{--百度编辑器--}}
                    <textarea  name="account" id="editor"></textarea>
                    <div id="js-qa-ci-footer" class="qa-ci-footer clearfix">
                        <span class="qa-tips l"></span>
                        <div class="qa-ci-footright">
                            <input type="submit" class="btn btn-red detail-ans " value="回答" >
                        </div>
                    </div>
                </div>
            </form>


            </div>
{{--添加回答结束--}}
            <?php } ?>

            <!-- 回答数 -->
            <div class="ans_num">共<?php echo count($arr_com);?>条回答</div>
            <!--.开始回答-->
            <?php foreach ($arr_com as $key => $val){?>
                <div id="aa">
                    <div class="ques-answer">
                        <div class="answer-con first" id="id_156829">
                            <div class="user-pic l">
                                <a href="#" target="_blank">{{--href地址回答者的个人中心--}}
                                    {{--回答者头像--}}
                                        <img src="<?= $val['img'];?>" class="imgs" alt="用户头像">
                                     </a>
                            </div><!--.user end-->
                            <div class="detail-r">
                                <span class="time"><?php echo $val['com_addtime'];?></span>
                                <a class="detail-name" href="#" target="_blank"><?php echo $val['user_name'];?></a>{{--href地址回答者的个人中心--}}
                            </div>


                            <div class="answer-content rich-text imgPreview"><p><?php echo $val['com_content'];?><br></p></div>

                            <div class="ctrl-bar clearfix js-wenda-tool">
                                {{--判断是否登录,进行对回复的支持与反对--}}

                               <?php if(empty($_SESSION['username'])){ ?>
                                            <span class="agree-with " data-ques-id="313011" data-answer-id="156829" data-hasop="">
                                            <a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" ><b >赞同</b></a>
                                            </span>
                                            <span class="agree-with " data-ques-id="313011" data-answer-id="156829" data-hasop="">
                                            <a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" ><b >反对</b></a>
                                            </span>
                                            <span class="reply" data-replynum="0" data-reply-id="156829" data-ques-uid="2965295"><em><?php if(isset($val['agree'])){echo count($val['agree']);}else{echo 0;}  ?></em>个回复</span>
                              <?php }else{ ?>

                                            <?php if($val['is_agree']=='' ||$val['is_agree']==0){ ?>
                                            {{--当前登录人没有回复--}}
                                                <span class="agree-with " data-ques-id="313011" data-answer-id="156829" data-hasop="">
                                                <b class="agree" b="<?php echo $val['com_id'] ?>"  >赞同</b> </span>
                                                <span class="agree-with " data-ques-id="313011" data-answer-id="156829" ><b class="disagree" b="<?php echo $val['com_id']; ?>">反对</b></span>
                                            <?php }else{ if($val['is_agree']==1){ ?>
                                            {{--已经赞过--}}
                                                    <span class="agree-with " data-ques-id="313011" data-answer-id="156829" data-hasop=""  style="background: #EDF1F2">
                                                    <b class="agree" b="<?php echo $val['com_id'] ?>"  >取消赞同</b>
                                                    </span>
                                                    <span class="agree-with" data-ques-id="313011" data-answer-id="156829" ><b class="disagree" b="<?php echo $val['com_id']; ?>">反对</b></span>

                                                <?php }else{ ?>
                                              {{--已经反对--}}
                                                    <span class="agree-with " data-ques-id="313011" data-answer-id="156829" data-hasop="">
                                                    <b class="agree" b="<?php echo $val['com_id'] ?>" >赞同</b>
                                                     </span>
                                                    <span class="oppose " data-ques-id="313011" data-answer-id="156829" style="background: #EDF1F2" ><b class="disagree" b="<?php echo $val['com_id']; ?>">取消反对</b></span>

                                             <?php } ?>



                           <?php }?>
                                <span class="reply" data-replynum="0" data-reply-id="156829" data-ques-uid="2965295"><em class="num"><?php if(isset($val['agree'])){echo count($val['agree']);}else{echo 0;}  ?></em>个回复</span>

                               <?php  }?>
                            </div><!--.ctrl-bar end-->


                        </div>
                    </div>
                </div>
             <?php } ?>
            <!--.结束回答-->
            <div class="qa-comment-page">
            </div>

        </div>
        {{--右边开始--}}
            <div class="wenda-slider r">
            <div class="quiz"><a href="save" class="js-quiz">我要提问</a></div>
            <!-- 相关问题 -->
            <div class="panel about-ques">
                <div class="panel-heading">
                    <h2 class="panel-title">相关问题</h2>
                </div>
                <div class="panel-body clearfix">
                    @foreach($xiangguan as $v)
                        <div class="mkhotlist padtop">
                            <a class="relwenda" href="detail?id=<?=$v['t_id']?>" target="_blank"><?= $v['t_title']?></a><i class="answer-num">2 回答</i>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- 广告 -->
            <div class="advertisement">
            </div><!--.advertisement end-->
            <div class="recommend-class">
                <div class="title clearfix">
                    <h3>相关分类</h3>
                </div><!--title end-->
                <ul class="cls-list">
                    @foreach($ti as $key => $v)
                        <li>
                            <div class="class-info">
                                <div class="class-icon">
                                    <a href="/wenda/5" target="_blank">
                                        分类头像位置
                                        {{--<img src="http://img.mukewang.com/563affe40001680c00900090.jpg" alt="Html/CSS"/>--}}
                                    </a>
                                </div><!--.class-icon end-->
                                <h4>
                                    <a href="#" target="_blank"><?= $v['d_name']?></a>
                                </h4>
                                <p class="follow-person">51065人关注</p>
                                <?php  if(!empty($_SESSION['username'])){ ?>
                                    @if($v['is_guan'] == 0)
                                <span id="direction_<?= $v['d_id']?>"><a href="javascript:void(0)" data-tag-id="5" class="follow"  onclick="g_direction(<?= $v['d_id']?>)" id="g_direction_<?= $v['d_id']?>">关注</a></span>
                                    @else
                                        <a href="javascript:void(0)" data-tag-id="5" class="follow" id="g_direction">已关注</a>
                                    @endif
                                <?php }else{ ?>
                                <span><a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" class="follow">关注</a></span>
                                    {{--<span><a href="javascript:void(0)" data-tag-id="5"  onclick="is_house()"></a></span>--}}
                                <?php } ?>
                            </div><!--.class-info end-->
                            <div class="desc">
                                <a class="desc-link" href="/wenda/detail/325737" taget="_blank"></a>
                                <i class="answer-num">7 回答</i>
                            </div>
                        </li><!--li end-->
                    @endforeach
                </ul><!--.cls-list end-->
            </div><!--.recommend-class end-->

        </div>
        {{--右边结束--}}
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












