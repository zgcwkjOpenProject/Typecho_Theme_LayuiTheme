<?php
/**
 * Layui 主题 邵先森 提供初始版
 * 
 * @package Layui Theme
 * @author zgcwkj
 * @version 1.8.1.1
 * @link https://blog.zgcwkj.top
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('header.php'); ?>

<div class="main article">
  <?php while($this->next()): ?>
  <?php if ($this->fields->wzimg): ?>
  <div class="item" style="background-image:url(<?php echo $this->fields->wzimg; ?>);background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed;">
  <?php else: ?>
  <div class="item">
  <?php endif; ?>
    <div class="item-content">
      <h3><?php $this->title() ?></h3>
      <?php array_map(function($v){ echo '<span class="Subtitle moe-fl-css"><a href="'.$v['permalink'].'">'.$v['name'].'</a></span>&nbsp;';}, $this->categories)?>
      <?php if ($this->fields->viewsNum): ?>
      <?php _e('<span class="Subtitle moe-fl-css">'. $this->fields->viewsNum .'个阅读</span>&nbsp;'); ?>
      <?php endif; ?>
      <br />
      <p><?php $this->excerpt(100); ?></p>
      <a href="<?php $this->permalink() ?>"><button class="layui-btn">阅读全文</button></a>
    </div>
    <div class="date-box">
      <div class="date">
        <h4><?php $this->date('d'); ?></h4>
        <span><?php $this->date('Y-m'); ?></span>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php $this->pageNav('上一页', '下一页'); ?>
  </div>
</div>
<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
<!-- 右侧标签 -->
<div class="article-right-content">
  <div>
    <h3>关于博主</h3>
    <hr>
    <ul>
      <?php if ($this->options->socialQQ): ?>
      <li><a class="layui-icon layui-icon-login-qq" target="_blank" itemtype="url" href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"></a></li>
      <?php endif; ?>
      <?php if ($this->options->socialWechat): ?>
      <li><a class="layui-icon layui-icon-login-wechat" target="_blank" itemtype="url" href="<?php $this->options->socialWechat(); ?>"></a></li>
      <?php endif; ?>
      <?php if ($this->options->socialGithub): ?>
      <li><a class="layui-icon layui-icon-senior" target="_blank" itemtype="url" href="<?php $this->options->socialGithub(); ?>"></a></li>
      <?php endif; ?>
      <?php if ($this->options->socialGitee): ?>
      <li><a class="layui-icon layui-icon-senior" target="_blank" itemtype="url" href="<?php $this->options->socialGitee(); ?>"></a></li>
      <?php endif; ?>
    </ul>
  </div>
  <div>
    <h3>标签</h3>
    <hr>
    <ul>
      <?php if($tags->have()): ?>
      <?php while ($tags->next()): ?>
      <?php
        $tag_color_n = rand(0,4);
        $tag_color = array('layui-btn layui-bg-cyan','layui-btn layui-bg-orange','layui-btn layui-bg-red','layui-btn','layui-btn layui-bg-blue');
      ?>
      <li><a href="<?php $tags->permalink(); ?>"><button class="<?php echo $tag_color[$tag_color_n]; ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></button></a></li>
      <?php endwhile; ?>
      <?php else: ?>
      <li><button class="layui-btn layui-bg-red">没有任何标签</button></li>
      <?php endif; ?>
    </ul>
  </div>
</div>

 <?php $this->need('footer.php'); ?>