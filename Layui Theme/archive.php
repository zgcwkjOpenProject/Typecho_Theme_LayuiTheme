<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
  <div class="wrap min">
    <section class="home-title">
		<div class="main mood message  mood-details article1">
		<div class="top_title"><?php $this->archiveTitle(array(
      'category'  =>  _t('文章分类:“%s”'),
      'search'    =>  _t('含关键词“%s”的文章'),
      'tag'       =>  _t('含标签“%s”的文章'),
      'author'    =>  _t('“%s”发布的文章')
    ), '', ''); ?></div>
    <?php if ($this->is('category')) : ?><span><?php echo $this->getDescription(); ?><?php endif; ?>
    </div>
  </section>
  <section class="home-posts">
  <?php if ($this->have()): ?>
	<div class="main article">
    <?php while($this->next()): ?>
    <div class="item">
      <div class="item-content">
        <h3><?php $this->title() ?></h3>
        <?php array_map(function($v){ echo '<span class="Subtitle moe-fl-css"><a href="'.$v['permalink'].'">'.$v['name'].'</a></span>&nbsp;';},$this->categories)?><br />
        <p><?php $this->excerpt(50); ?></p>
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
  </div>
  <?php else: ?> 
  <div class="main article">
    <div class="item">
      <h3>很抱歉，暂时没有搜索到任何内容！</h3>
    </div>
  </div>
  <?php endif; ?>
  </section>
  <?php $this->pageNav('上一页', '下一页'); ?>
  </div>
</main>
</div>

<?php $this->need('footer.php'); ?>