<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
Typecho_Widget::widget('Widget_Stat')->to($stat);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<!-- 移动端自适应 -->
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<!-- 浏览器小图标 -->
<?php if ($this->options->faviconUrl): ?>
<link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
<?php else: ?>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>">
<?php endif; ?>
<title><?php $this->archiveTitle(array(
  'category'  =>  _t('分类 %s 下的文章'),
  'search'    =>  _t('包含关键字 %s 的文章'),
  'tag'       =>  _t('标签 %s 下的文章'),
  'author'    =>  _t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- Css -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/index.min.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.min.css'); ?>">
<!-- Typecho自带head输出 -->
<?php $this->header(); ?>
</head>
<?php if ($this->options->backgroundImage): ?>
<body style="background:url(<?php $this->options->backgroundImage(); ?>) no-repeat;background-size:cover;">
<?php else: ?>
<body style="background:url(<?php $this->options->themeUrl('img/bg.jpg'); ?>) no-repeat;background-size:cover;">
<?php endif; ?>
<!-- 侧边内容 -->
<div class="sidebar-content">
  <div class="layui-card">
    <div class="layui-card-header">
      <a href="<?php $this->options->siteUrl(); ?>">
      <?php if ($this->options->avatarUrl): ?>
      <img class="moe-headimg moe-headimg-xz" src="<?php $this->options->avatarUrl(); ?>">
      <?php else: ?>
      <img class="moe-headimg moe-headimg-xz" src="<?php $this->options->themeUrl('img/avatar.png'); ?>">
      <?php endif; ?>
      <br />
      <span><?php $this->options->title(); ?></span>
      </a>
    </div>
    <div class="layui-card-body">
      <ul>
        <li class="txt">
          <span><?php $stat->publishedPostsNum() ?></span><br />
          <span>文章</span>
        </li>
        <li class="item">
          <span><?php echo $stat->categoriesNum ?></span><br />
          <span>分类</span>
        </li>
        <li class="visitors">
          <span><?php $stat->publishedCommentsNum() ?></span><br />
          <span>评论</span>
        </li>
      </ul>
    </div>
  </div>
  <ul class="layui-nav">
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <li  class="layui-nav-item last" style="background:rgba(255,255,255,0.2);">
      <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
    </li>
    <?php endwhile; ?>
    <?php if($this->options->searchPage): ?>
    <li  class="layui-nav-item last" style="background:rgba(255,255,255,0.2);">
      <a href="<?php $this->options->searchPage(); ?>"></a>
    </li>
    <?php endif;?>
  </ul>
</div>
<!-- 搜索框 -->
<div class="seach">
  <form class="layui-form seach-box" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button class="layui-btn"><i class="layui-icon layui-icon-search"></i></button>
        <input type="text"  name="s" lay-verify="required" placeholder="搜索相关" autocomplete="off" class="layui-input">
      </div>
    </div>
  </form>
</div>
<!-- 主要内容 -->
<div id="moe-body">