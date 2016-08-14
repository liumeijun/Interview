<!DOCTYPE html>
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



    <link rel="stylesheet" href="../css/3dd38c5eb19043548362b1f191b56a92.css" type="text/css" />
</head>
<body >

@include('layouts.master')



<script>
    var isLogin=1
</script>
<div class="opus-wrap clearfix">
<form action="add" method="post" enctype="multipart/form-data">
    <div class="article-left l">
        <h1 class="article-title">发布文章</h1>
        <div class="article-form">
            <div class="form-group clearfix">
                <label for="art-title" class="form-label l"><span>*</span>标题</label>
                <div class="form-ipt-wrap">
                    <input id="art-title" name="a_title" class="art-title" placeholder="请输入标题" type="text">
                    <p class="form-ipt-error"></p>
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="" class="form-label l"><span>&nbsp;</span>封面</label>
                <div class="form-ipt-wrap">
                    <div class="face-upload clearfix">

                                <input type="file" name="a_logo">


                       </div>
                    <div id="js-face-reault" class="face-result">
                    </div>
                    <input id="art-face" type="hidden">
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="art-cat" class="form-label l"><span>*</span>栏目</label>
                <div class="form-ipt-wrap">
                    <select name="a_type" id="art-cat">
                        <option selected="selected"  name="a_type">请选择栏目</option>
                        <?php foreach($ar_type as $k=>$v){?>
                        <option value="<?php echo $v['at_id']?>"><?php echo $v['at_type']?></option>
                        <?php } ?>
                    </select>
                    <p class="form-ipt-error"></p>
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="" class="form-label l"><span>*</span>内容</label>
                <div class="form-ipt-wrap edit-area">
                    <div class="tip">本地保存成功 <i class="icon-close"></i></div>
                    <div id="js-mk" class="mk-container">
                        <div id="js-wmd-wrap-js-mk" class="wmd-wrap">

                            <div id="js-wmd-input-wrap-js-mk" class="wmd-input-wrap">
                                <textarea id="wmd-input-js-mk" name="a_con"></textarea>
                            </div>
                            <div id="js-wmd-preview-wrap-js-mk" class="wmd-preview-wrap">
                                <div id="wmd-preview-js-mk" class="wmd-preview"></div>
                            </div>
                        </div>
                    </div>
                    <p class="form-ipt-error"></p>
                </div>
            </div>
            <div class="tag-selector">
                <label>标签</label>
                <div class="tag-selector-wrap">
                    <div class="target-box clearfix" id="biao">
                    </div>
                    <p class="tip">您最多可以从以下选择3个标签哟！</p>
                    <div class="tag-box clearfix">
                    <?php foreach($a_lei as $k=>$v){?>
                        <span tag-id="12" name="al_name" id="al_name" value="<?php echo $v['al_name']?>"><?php echo $v['al_name']?></span>
                    <?php } ?>
                    </div>
                </div><!--tag-selector-wrap end-->
            </div><!--tag-selector end-->
            <div class="form-group form-bottom">
                <label for="" class="form-label l"></label>
                <div class="form-ipt-wrap">
                    <input type="submit" class="btn btn-green" value="提交"><span class="submit-tip js-submit-tip"></span>        <p id="js-msg" class="form-ipt-error"></p>
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="article-right r">
        <div class="article-help">
            <h1 class="article-title">投稿须知</h1>
            <ol>
                <li>文章类型：技术、设计/交互、产品、与IT相关的任何学习心得、技术分享、职场经验、项目案例、甚至慕课网自学的励志故事等类型均可；</li>
                <li>拒绝广告：文章内容必须健康，符合国家相关法律法规规定，谢绝任何形式软文、公关稿、新闻稿；</li>
                <li>尊重版权：投稿作品必须为原创，否则慕课网有权拒绝发表或在发表后协助原版权所有者追究其法律责任；</li>
                <li>排版：正文配图务必从本地上传，并保证清晰，请勿超过2M（图片不得添加任何形式广告水印，否则审稿工作人员有权删除）；</li>
                <li>审核时间：您发布的文章均需经工作人员审核；审核通过后，如需再修改，文章将再次进入审核；我们承诺会在投稿后的2个工作日内审核完毕；</li>
                <li>其他：审核通过后，请勿随意编辑文章，若编辑文章过于频繁，慕女神将拒绝发布哦（如果是软文/新闻稿/公关稿，小编将直接删除），谢谢理解。</li>
            </ol>
        </div>
    </div>





</div><!--opus-wrap end-->

<div id="main">

</div>

        @include('layouts.foot')
        <div id="J_GotoTop" class="elevator">
            <a class="elevator-weixin" href="javascript:;">
                <div class="elevator-weixin-box"></div>
            </a>
            <a class="elevator-msg" href="#" target="_blank" id="feedBack"></a>
            <a class="elevator-app" href="#">
                <div class="elevator-app-box"></div>
            </a>
            <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>
        </div>

        <script src="js/pMarkdown.js"></script>
        <script src="js/pMarkdown_002.js"></script>
        <script src="js/pMarkdown_003.js"></script>

        <!--script-->
        <script src="js/pssologin.js"></script>
        <script type="text/javascript" src="js/psea.js"></script>
        <script type="text/javascript" src="js/psea_config.js"></script>
        <script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

        <div style="display: none">
            <script src="js/jquery-1.9.1.min.js"></script>
            <script>
                $(document).on("click","#al_name",function(){
                    var a=$(this).attr("value")
                    $("#biao").append(a)
                })
            </script>
        </div>
    </body>
</html>