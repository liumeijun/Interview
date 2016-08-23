

    <div class="evaluation-con" id="list">
        <?php foreach($ping as $k=>$v){?>

        <div class="content-box">
            <a href="#" class="img-box"><span><img src="<?php if(empty($v['img'])){ echo "images/u.jpg"; }else{ echo $v['img']; }?>" width="40px" height="40px" alt="518000"></span></a>
            <div class="user-info clearfix">
                <a href="#" class="username"><?php echo $v['user_phone']?></a>

                <div class="star-box">
                    @if($v['e_score'] == 1)
                        <img src="images/xing.jpg" width="20" height="20">
                    @elseif($v['e_score'] == 2)
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                    @elseif($v['e_score'] == 3)
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                    @elseif($v['e_score'] == 4)
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                    @else
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                        <img src="images/xing.jpg" width="20" height="20">
                    @endif
                </div>
            </div>
            <p class="content"><?php echo $v['p_con']?></p>
            <div class="info">
                <span class="time">时间：<?php echo $v['e_addtime']?></span>
            </div>
        </div>
        <?php } ?><!--content end-->
    </div><!--evaluation-con end-->



