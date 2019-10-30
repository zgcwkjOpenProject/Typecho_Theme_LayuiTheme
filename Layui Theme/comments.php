<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
  $commentClass = '';
  if ($comments->authorId) {
    if ($comments->authorId == $comments->ownerId) {
      $commentClass .= '(博主)';
    } else {
      $commentClass .= '';
    }
  }
  $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
<ul class="list-item" id="<?php $comments->theId(); ?>">
  <li>
    <div class="moe-comments-headimg"><?php $comments->gravatar('640', ''); ?></div>
    <div class="list-txt">
      <p class="max-title"><span class="name"><?php $comments->author(false); ?><?php echo $commentClass; ?></span><span class="time"><?php $comments->date('Y-m-d H:i'); ?> <?php $comments->reply('<span class="moe-comments-hf">回复</span>'); ?></span></p>
      <p class="list-content">
      <?php $comments->content(); ?>
      </p>
    </div>
    <?php if ($comments->children) { ?>
    <?php $comments->threadedComments($options); ?>
    <?php } ?>
  </li>
</ul>
<?php } ?>
<?php $this->comments()->to($comments); ?>
<div id="<?php $this->respondId(); ?>">
  <div class="item">
    <div class="layui-card">
      <?php if($this->allow('comment')): ?>
      <?php if($this->user->hasLogin()): ?>
      <div class="layui-card-header">
      <span class="moe-comments-login">已经作为 <span class="moe-comments-login-name"><?php $this->user->screenName(); ?></span> 登录，如果不是请<a href="<?php $this->options->logoutUrl(); ?>"> 退出登录</a> 。</span>
        <form class="layui-form" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
          <div class="layui-form-item layui-form-text">
            <div class="layui-input-block">
              <textarea name="text" placeholder="既然来了,就说几句吧" class="layui-textarea" id="LAY-msg-content" style="resize: none;"><?php $this->remember('text'); ?></textarea>
              <div class="btn-box">
                <?php $comments->cancelReply('<button type="button" class="layui-btn layui-bg-red">取消回复</button>'); ?>
                <button class="layui-btn" type="submit">发表评论</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <?php else: ?>
      <div class="layui-card-header">
        <form class="layui-form" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
          <div class="layui-form-item layui-form-text">
            <div class="layui-input-block">
              <input class="layui-input moe-input-name" placeholder="昵称(必填)" type="text" name="author" value="<?php $this->remember('author'); ?>" required />
              <input class="layui-input moe-input-email" placeholder="EMail(必填)" type="email" name="mail" value="<?php $this->remember('mail'); ?>" required />
              <br>
              <input class="layui-input moe-input-url" placeholder="网站(选填)" type="url" name="url" value="<?php $this->remember('url'); ?>" />
              <div style="margin-bottom: 5px;"></div>
              <textarea name="text" placeholder="既然来了,就说几句吧" class="layui-textarea" id="LAY-msg-content" style="resize: none;"><?php $this->remember('text'); ?></textarea>
              <div class="btn-box">
                <?php $comments->cancelReply('<button type="button" class="layui-btn layui-bg-red">取消回复</button>'); ?>
                <button class="layui-btn" type="submit">发表评论</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <?php endif; ?>
      <?php else: ?>
      <div class="layui-card-header">
        <center><h3 style="color: #F44336; font-weight: 800px;">该文章的评论已经关闭！</h3></center>
      </div>
      <?php endif; ?>
      <div class="layui-card-body">
        <div class="title">
          <p><span>全部评论</span><em id="count"><?php $this->commentsNum(_t('暂时没有评论'), _t('只有 1 条评论'), _t('已有 %d 条评论')); ?></em></p>
       </div>
        <?php if ($comments->have()): ?>
        <?php $comments->listComments(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>