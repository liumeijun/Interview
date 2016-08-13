<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>面试宝典网</title>
    <meta property="wb:webmaster" content="a1bbe2238ec72e87" /><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <link rel = "Shortcut Icon" href=http://www.mbaodian.com/favicon.ico>
    <meta name="Keywords" content="面试，面试宝典，面试技巧，面试经验，面试简历，简历下载，面试试题">
    <script src="../js/push.js"></script>
    <script src="../js/rt.js" async="" type="text/javascript"></script>
    <script type="text/javascript">

        var OP_CONFIG={"module":"index","page":"index"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";

    </script>

    <link rel="stylesheet" href="css/a.css" type="text/css">
    <script src="../js/jquery.js" async="" charset="utf-8"></script>
    <script src="../js/seajs-text.js" async="" charset="utf-8"></script>
    <script src="../js/common.js" async="" charset="utf-8"></script>
    <script src="../js/string.js" async="" charset="utf-8"></script>
    <script src="../js/suggest.js" async="" charset="utf-8"></script>
    <script src="../js/store.js" async="" charset="utf-8"></script>
    <script src="../js/json.js" async="" charset="utf-8"></script>
    <script src="../js/im.js" async="" charset="utf-8"></script>
    <script src="../js/index.js" async="" charset="utf-8"></script>
    <script src="../js/socket.js" async="" charset="utf-8"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <style>
        .xunhuan{
            text-align: center;width:100%; height: 31px; margin: 0 auto;font-size: 32px;padding: 40px 0 30px;line-height: 1em;color:#C95E6A;
        }
    </style>

    </head>
<body id="index">
@include('layouts.master')


<div id="mooc-dynamic" class="dynamic bg-grey idx-minwidth" style=" margin-top:20px;">


    <div id="dynamic-wrap" class="dynamic-wrap idx-width">
        <div id="dynamic-left" class="dynamic-left"></div>
        <div id="dynamic-right" class="dynamic-right"></div>

        <ul class="dynamic-group clearfix">
            <li><a href="#">
                    <img class="lazy" data-original="picture/zzzz.jpg"  alt="手机APP">
                </a></li>

            <li><a href="#" target="_blank"><img  class="lazy" data-original="picture/5677ae970001c70404000200.jpg" alt="苹果表"></a></li>

            <li><a href="#" target="_blank">
                    <img class="lazy" data-original="picture/56a59f870001bd2e04000200.jpg" class=""  alt="前端学习计划"></a></li>
        </ul>
        {{----}}


    </div>

</div>

<!--试题开始-->

<div class="icourse">

    <div class="incourse-wrap idx-width">
        <h2 class="xunhuan" >试题
        </h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>">
                    <div class="icourse-img">
                        <img class="lazy" data-original="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>

</div>

<!--试题结束 -->

<!--招聘开始 -->
<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="xunhuan">招聘</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img class="lazy" data-original="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--招聘结束 -->

<!--面试方法开始 -->

<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="xunhuan">面试方法</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img class="lazy" data-original="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--面试方法结束 -->

<!--简历开始 -->


<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="xunhuan">简历</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img class="lazy" data-original="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--面试简历结束 -->

<!--答疑开始 -->


<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="xunhuan">答疑</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img class="lazy" data-original="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--答疑结束 -->
        <h2 class="xunhuan">手机宝典，随时随地学习！</h2>
        <div class="mobile-entry">
            <a href="" target="_blank"><!-- Android版 -->手机版</a>
            <a href="" target="_blank"><!-- IOS版 -->iPad版</a>
            <span id="js-mobile-trigger" class="mobile-trigger"></span>
        </div>
<!--script-->
<script src="js/jquery.lazyload.js"></script>
{{--延时加载--}}
<script charset="utf-8">

    $(function($){
        $(".lazy").show().lazyload({effect: "fadeIn",container: $("#index")});
    })
</script>
@include('layouts.foot')
</body>

</html>

