﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IT技术文章-面试宝典</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="Keywords" content="" />
    <meta name="Description" content="面试宝典为IT专业技术人员提供最新的文章信息,包括PHP,JAVA,C语言,MySql,DB2等相关文章,更多IT技术资讯、原创内容、开源代码尽在慕课社区" />

    <script type="text/javascript">


        eval(function(p,a,c,k,e,r){e=function(c){return c.toString(36)};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[235-9a-dfg]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('!3(){5 6=a;5 7=3(t){9(typeof b=="undefined"){c d}5 2=f b();try{2.open("GET","/index/ajaxscsts?s="+t,true);2.onreadystatechange=3(){9(2.readyState==4&&2.status==200){9(t&&2.responseText==1)window.location.reload()}};2.send()}catch(e){c d}};5 8=f Image();8.onload=3(){clearTimeout(6);6=a;7(0)};8.onerror=3(){7(1)};6=setTimeout(3(){7(1)},3000);8.src=\'http://g.mukewang.com/g/img/common/logo.png\'}()',[],17,'||xhr|function||var|timer|cdnpost|imgobj|if|null|XMLHttpRequest|return|false||new|static'.split('|'),0,{}))

        var OP_CONFIG={"module":"article","page":"index"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";

    </script>



    <link rel="stylesheet" href="css/3dd38c5eb19043548362b1f191b56a92.css" type="text/css" />
</head>
<body >

@include('layouts.master')


    <div id="main">

    <div class="container clearfix">
        <div class="article-left l">

            <ul class="article-tab clearfix">
                <li  class="tabactive" >
                    <a data-id="0" id="type" value="0" >全部</a>
                </li>
                <?php foreach($at_type as $k=>$v){?>
                <li >
                    <a data-id="105"  id="type" value="<?php echo $v['at_type']?>"><?php echo $v['at_type']?></a>
                </li>
                <?php }?>
            </ul>
            <div class="article-tool-bar clearfix">
                <div class="tool-left l">

                    <a href="#" class="sort-item active">最新</a>
                    <a href="#" class="sort-item ">热门</a>
                </div>
            </div>
            <div id="lie">
            <?php foreach($article as $k=>$v){?>
            <div class="article-lwrap ">
                <!-- text -->
                <input type="hidden" id="a_id" value="<?php echo $v['a_id']?>">
                <div class="">
                    <h3 class="item-title">
                        <a href="fangfa?id=<?php echo $v['a_id']?>" target="_blank" class="title-detail"><?php echo $v['a_title']?></a>
                    </h3>
                    <p class="item-bd"><?php echo $v['a_con']?></p>
                    <div class="item-btm clearfix">
                        <ul class="l left-info">
                            <li class="hd-pic">
                                <a class="publisher-hd" href="#" target="_blank">
                                    <img src="" alt="" width="20" height="20" />
                                </a>
                                <a class="publisher-name" href="#" target="_blank">用户</a>
                            </li>
                            <li class="now-tag">
                                <a class="item-tag" href="#" target="_blank"><?php echo $v['at_type']?></a>
                            </li>
                            <li class="pass-time"><span><?php echo $v['a_addtime']?></span></li>
                            <li class="pass-time"><span><?php echo $v['a_num']?>浏览</span></li>
                        </ul>
                        <div class="r right-info">
                            <div class="favorite l" id="zan" value="<?php echo $v['a_id']?>">
                                <img src="images/zan.jpg"  class="zan" width="15" height="20">

                                <em id="z-<?php echo $v['a_id']?>">点赞
                                    <?php echo $v['zan']?>
                                </em>



                            </div>
                            <div class="item-judge l">
                                <i class="icon sns-comment"></i><em>评论 0</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>

        </div>
        </div>
        <div class="article-right r">
            <!-- 写文章 -->


            <div class="new-ques">
                <a class="write-ques" href="article/publish">写文章</a>
                <div class="ques-bd">
            </div>
                </div>

            <!-- 推荐文章 -->
            <div class="remon-page">
                <h2 class="panel-hd">推荐文章</h2>
                <div class="remon-main">
                    <ul>
                        @foreach($groom as $key => $v)
                            <li>
                                <h3 class="remon-title">
                                    <a href="#" class="title-detail"><?php echo $v['a_title']?></a>
                                </h3>
                                <p class="remon-bd"><?php echo $v['a_con']?></p>
                                <div class="arti-info clearfix">
                                    <ul>
                                        <li class="hd-pic">
                                            <a class="publisher-hd" href="#" target="_blank">
                                                <img src="" alt="" width="20" height="20" />
                                            </a>
                                            <a class="publisher-name" href="#" target="_blank"><?php echo $v['at_type']?></a>
                                        </li>
                                        <li class="now-tag">
                                            <a class="item-tag" href="#" target="_blank"><?php echo $v['al_name']?></a>
                                        </li>
                                        <li class="now-tag">
                                            <span class="viewed-num"><?php echo $v['a_num']?>浏览</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- 一周达人 -->
            <div class="weekly-rank">
                <h2 class="panel-hd">一周达人</h2>
                <div class="article-weekly clearfix">
                    <ol class="weekly-top">
                        @foreach($people as $key => $v)
                            <li>
                                <a href="#" class="l hot-head" target="_blank" title="">
                                    <img src="<?= $v['img'];?>" alt="" width="40" height="40" />
                                </a>
                                <a href="#" target="_blank" class="hot-name">
                                    <?= $v['user_name'];?></a>

                                <i class="rank-num weektop-first">第<?= $key+1;?>名</i>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="J_GotoTop" class="elevator">
    <a class="elevator-weixin" href="javascript:;">
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a class="elevator-msg" href="#" target="_blank" id="feedBack"></a>
    <a class="elevator-app" href="#" >
        <div class="elevator-app-box">
        </div>
    </a>
    <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>
</div>



<!--script-->
<script src="js/ssologin.js"></script>
<script type="text/javascript" src="js/sea.js"></script>
<script type="text/javascript" src="js/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

<div style="display: none">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script>
        $(document).on("click","#type",function(){
           var type=$(this).attr("value")
            $.post('type',{
                type:type
            },function(data){
               //alert(data)
                $("#lie").html(data)
            })
        })
    </script>
</div>
@include('layouts.foot')
</body>

</html>

