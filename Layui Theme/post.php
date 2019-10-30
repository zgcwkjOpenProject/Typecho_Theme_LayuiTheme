<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main mood message  mood-details article1">
 <div class="top_title"><a href="<?php $this->options->siteUrl(); ?>">主页</a> &raquo;</li>
	<?php if ($this->is('index')): /*页面为首页时*/?>
		上一篇
	<?php elseif ($this->is('post')): /*页面为文章单页时*/?>
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: /*页面为其他页时*/?>
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?></div>
  <div class="item1">
  <div class="item-content">
    <h3><?php $this->title() ?></h3>
    <p class="label"><?php array_map(function($v){ echo '<span class="Subtitle moe-fl-css"><a href="'.$v['permalink'].'">'.$v['name'].'</a></span>&nbsp;';},$this->categories)?><span><?php $this->date('Y-m-d'); ?></span></p>
    <p class="txt"><?php $this->content(); ?></p>
    <div class="btn-box"><?php if ($this->options->htmlAdvertis){ _e($this->options->htmlAdvertis()); }; ?></div>
  </div>
 </div>
 <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>