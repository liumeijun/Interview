<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>面试宝典-IT技术问答平台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta name="Keywords" content="" />
<meta name="Description" content="猿问是由面试宝典为广大IT爱好者提供的专业问答交流平台,这里大牛云集,用户可根据自身需求,提出相关问题,也可为有问题同学进行解答,互帮互助,分享知识！" />

<meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
<script type="text/javascript">


    eval(function(p,a,c,k,e,r){e=function(c){return c.toString(36)};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[235-9a-dfg]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('!3(){5 6=a;5 7=3(t){9(typeof b=="undefined"){c d}5 2=f b();try{2.open("GET","/index/ajaxscsts?s="+t,true);2.onreadystatechange=3(){9(2.readyState==4&&2.status==200){9(t&&2.responseText==1)window.location.reload()}};2.send()}catch(e){c d}};5 8=f Image();8.onload=3(){clearTimeout(6);6=a;7(0)};8.onerror=3(){7(1)};6=setTimeout(3(){7(1)},3000);8.src=\'http://g.mukewang.com/g/img/common/logo.png\'}()',[],17,'||xhr|function||var|timer|cdnpost|imgobj|if|null|XMLHttpRequest|return|false||new|static'.split('|'),0,{}))

      var OP_CONFIG={"module":"wenda","page":"index"};
  var isLogin = 0;
var is_choice = "0";
  var seajsTimestamp="v=201603251711";

</script>




<link rel="stylesheet" href="css/c0e7cb6dbd3c47c9bcf65581ec74e79d.css" type="text/css" />
</head>
<body style="background:#fff;">

@include('layouts.master')

        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>
</div>


<div id="main">


<div class="wenda clearfix">

  <div class="js-layout-change">
    <div class="l wenda-main">
      <div class="wd-top-slogan">
        <span>程序员自己的问答社区</span>
        <a class="js-quiz" href="save">我要提问</a>
      </div>
        <?php if($re=Input::get('is_look')){
        ?>
        <div class="nav">
            <a href="/wenda?is_look=1" >推荐</a>
            <a href="bestnew?is_look=1"  >最新</a>
            <a href="waitreply?is_look=1" class="active">等待回答</a>
            <div class="switch-box">
                <div class="switch js-switch on">
                    <div class="fill">
                        <div class="outer"></div>
                    </div>
                    <div class="inner"></div>
                </div>
                <span>只显示关注内容</span>
            </div>
        </div>
        <?php }else{?>
        <div class="nav">
            <a href="/wenda/"  >推荐</a>
            <a href="bestnew"  >最新</a>
            <a href="waitreply" class="active" >等待回答</a>
            <div class="switch-box">
                <div class="switch js-switch">
                    <div class="fill">
                        <div class="outer"></div>
                    </div>
                    <div class="inner"></div>
                </div>
                <span>只显示关注内容</span>
            </div>
        </div>
        <?php }?>
      <div >
        






<?php foreach($pro as $k=>$v){?>



<div class="ques-answer">
    <div class="tag-img">
         <a href="#" target="_blank">
                <img src="picture/563afeb5000149c000900090.jpg" title="28"/>
            </a>
          </div><!--.tag-img end-->
        <div class="from-tag">        来自

                <a href="/detail" id="timu"><?php echo $v['d_name']?></a>的<a href="" target="_top"><b><?php echo $v['user_name']?></b></a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="detail?id=<?php echo $v['t_id']?>" class="ques-con-content" target="_blank" title="#include&amp;lt;stdio.h&amp;gt;#include&amp;lt;string.h&amp;gt;int main(){struct student{long nu;char name[10];int age;};struct student stu_i;struct student*p;p=&amp;amp;stu_i;stu_1.nu =201601;stu_1.age =12;strcpy(stu_1.name ,&quot;xiong&quot;);stu_2.nu =201602;stu_2.age =15;strcpy(stu_2.name ,&quot..."><?php echo $v['t_title'];?></a>

    </div>
        <div class="answer-con first" data-answer-id="156328" id="answer-con">
        <div class="user">

        </div>
        <div class="answer-content">
            <?php echo substr($v['t_content'],0,400)."…………" ;?>
        </div>

        <div class="ctrl-bar clearfix">
            共<?php echo $v['num']; ?>条回答

        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    </div><!--.ques-answer end-->



<?php } ?>
    <style>
        .pagination{
            position:absolute;
            left:450px;
            bottom:-20px;
        }
        .pagination li{
            float:left;
            margin-left:10px;
            font-size:24px;
        }
    </style>
    <?php if($re=Input::get('is_look')){?>
             <?=$pro->appends(['is_look' => '1'])->links();?>
          <?php }else{?>
          <?=$pro->links();?>
          <?php } ?>


</div>
    </div> 
    <?php $pro->render() ?>
    <div class="r wenda-slider">

      <!--.my-follow-class登录后可见-->

<div class="recommend-class">
    <div class="title clearfix">
        <h3>推荐分类</h3>
        <span class="all-cls">全部分类</span>
    </div><!--title end-->
    <ul class="cls-list">
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/20" target="_blank">
                        <img src="picture/563aff130001c76f00900090.jpg" alt="Linux"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/20" target="_blank">Linux</a></h4>
                <p class="follow-person">12162人关注</p>
                                <a href="javascript:void(0)" data-tag-id="20" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">Linux是一套免费使用和自由传播的类Unix操作系统，是一个基于P...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/25" target="_blank">
                        <img src="picture/563afed80001928100900090.jpg" alt="CSS3"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/25" target="_blank">CSS3</a></h4>
                <p class="follow-person">18014人关注</p>
                                <a href="javascript:void(0)" data-tag-id="25" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">CSS即层叠样式表（Cascading StyleSheet）。 在...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/12" target="_blank">
                        <img src="picture/563aff7e0001c8c700900090.jpg" alt="Android"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/12" target="_blank">Android</a></h4>
                <p class="follow-person">31584人关注</p>
                                <a href="javascript:void(0)" data-tag-id="12" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">Android是一种基于Linux的自由及开放源代码的操作系统，主要...</div>
        </li><!--li end-->
            </ul><!--.cls-list end-->
</div><!--.recommend-class end-->

<div class="advertisement">
        <a href="#" data-ast="yuanwenindexright_1_189" target="_blank">
        <img src="picture/569cb54900010baf02800100.jpg" alt="年度问答牛人团"/>
    </a>
    </div><!--.advertisement end-->
<div class="hot-ques">
    
</div><!--.hot-ques end-->
<div class="leifeng-sort">
    <h3 class="title">一周回答雷锋榜</h3>
    <ul>
        @foreach($honor as $key => $v)
            <li>
                <div class="ranking first"><?= $key+1;?></div>
                <div class="user-pic">
                    <a target="_blank" href="/u/1088132/bbs">
                        <img src="<?= $v['img'];?>" alt="用户头像">
                    </a>
                </div>
                <div class="user-name">
                    <a target="_blank" href="/u/1088132/bbs"><?= $v['user_name'];?></a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">JAVA开发工程师</span>
                    <span class="answer-num"><?= $v['count(comments_replay.user_id)'];?>回答</span>
                </div><!--.user-info end-->
            </li>
        @endforeach
            </ul>
</div><!--.leifeng-sort end-->
    </div>
  </div>
</div>

  <div class="tag-pop" id="tag-pop">
    <div class="shade"></div>
    <div class="tag-main">
        <h3><span>关注我喜欢或专注的猿问分类</span> <i class="icon-close2 js-close"></i></h3>
        <ul class="tag-list clearfix">
                        <li data-tag-id="12" >
                <img src="picture/563aff7e0001c8c700900090.jpg" alt=""/>
                <span>Android</span>
            </li>
                    </ul>
        <div class="save-btn">保存</div>
    </div><!--.tag-main end-->
</div><!--.tag-pop end-->


</div>
    <!--footer-->
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

  <div class="wd-scroll">
    <a href="/wenda/save" class="ques">提问</a>
    <a href="javascript:void(0)" class="to-top" title="返回顶部"><i class="icon-up2"></i></a>
    <a href="/user/feedback" class="feedback" title="意见反馈"><i class="icon-feedback"></i></a>
  </div>



<!--script-->
<script src="js/ssologin.js"></script>
<script type="text/javascript" src="js/sea.js"></script>
<script type="text/javascript" src="js/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>





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

<script type="text/javascript" src='../js/jquery-1.9.1.js'></script>
    <script type="text/javascript">
        $.ready($('.switch').click(function(){
            if($(this).attr('class')=="switch js-switch"){
//                $(this).attr("class",'switch js-switch on ')
                location.href='waitreply?is_look=1'
            }else{
                location.href='waitreply'
            }
        }))
    </script>






</div>

@include('layouts.foot')
</body>

</html>
