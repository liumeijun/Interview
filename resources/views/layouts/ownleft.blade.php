
<div class="setting-left l">
    <ul class="wrap-boxes">
        <li>
            <a href="/setprofile">个人资料</a>
        </li>

        <li >
            <a href="/my_house">我的收藏</a>
        </li>
        <li >
            <a href="/my_ping">我的评价</a>
        </li>
        <li >
            <a href="/mycompany">我的应聘</a>
        </li>
        <li >
            <a href="/setavator">头像设置</a>
        </li>

        <li >
            <a href="/setphone">手机设置</a>
            <span class='unbound'>未绑定</span>
        </li>

        <li >
            <a href="/setverifyemail" >邮箱验证</a>
            <span class='unbound'>未绑定</span>
        </li>
        <li >
            <a href="/setresetpwd">修改密码</a>
        </li>
        <li >
            <a no-pjajx href="/setbindsns">绑定帐号</a>
        </li>
    </ul>
</div>
<script>
    $('.wrap-boxes li a').each(function(){

        if($(this).attr('href') =="<?php $re=Request::fullurl();  $a=substr($re,(strripos($re,'/'))); if($a=='/my_house_article'){echo '/my_house';}else{
                    echo $a;
                };?>"){

            $(this).addClass("onactive");
            $(this).parent().addClass("active")
        }
    })
</script>