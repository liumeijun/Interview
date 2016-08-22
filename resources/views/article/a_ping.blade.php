<div id="js-feedback-list">
    @foreach($aping as $key => $v)
        <input type="hidden" name="article_id" id="article_id" value="<?= $v['ap_id']?>">
        <div class="comment-box">
            <div class="comment clearfix">
                <div class="feed-author l">
                    <a href="/u/1938237/articles">
                        <img width="40" alt="用户头像" src="<?= $v['img']?>">
                    </a>
                    <a target="_blank" href="/u/1938237/articles" class="nick"><?= $v['user_name']?></a><span class="com-floor r"><?= count($aping)-$key?>F</span>
                </div>
                <div class="feed-list-content">
                    <p></p><p><?=$v['ap_con']?></p><p></p>
                    <div class="comment-footer">
                        <?php
                        $now_time = time();
                        $a_time = strtotime($v['a_addtime'])

                        ?>

                        <span class="feed-list-times"><?=intval($now_time-$a_time);?>秒</span>
                        <?php
                        if(empty($_SESSION['username'])){
                        $user_name = 0; ?>
                        <span data-username="qq_青枣工作室_0" data-uid="1938237" data-commentid="23493" class="reply-btn")><a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" >回复</a></span>
                        <span data-username="qq_青枣工作室_0" data-uid="1938237" data-commentid="23493" class="agree-with r"><b><a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" >赞同</a></b><em>1</em></span>
                        <?php }else{
                        $user_name = 1; ?>
                        <span data-username="qq_青枣工作室_0" data-uid="1938237" data-commentid="23493" class="reply-btn" onclick="reply(<?= $v['ap_id']?>)">回复</span>
                        <span data-username="qq_青枣工作室_0" data-uid="1938237" data-commentid="23493" class="agree-with r"><b>赞同</b><em>1</em></span>
                        <?php  } ?>
                    </div>
                </div>
            </div>
            <div style="margin-left: 60px;">
                @if(isset($v['answer']))
                    @foreach($v['answer'] as $k => $vv)
                        <img width="40" alt="用户头像" src="<?= $vv['img']?>">
                        <span style="color: red"><?= $vv['user_name']?></span>:&nbsp;&nbsp;
                        <?=$vv['ap_cont']?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?=$vv['article_addtime'] ?><br><br>
                    @endforeach
                @endif
            </div>
            <div class="reply-box" id="tr_<?= $v['ap_id']?>"></div>
        </div>
    @endforeach
</div>