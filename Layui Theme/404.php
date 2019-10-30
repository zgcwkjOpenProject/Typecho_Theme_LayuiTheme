<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<!--404-->
<div class="main about">
  <div class="item">
    <h4 class="personal">404错误页</h4>
    <h3 class="personal">很抱歉，您访问的资源不存在！</h3>
    </br>
    <a href="<?php $this->options->siteUrl(); ?>	" class="layui-btn">返回首页</a>
  </div>
</div>

<?php $this->need('footer.php'); ?>