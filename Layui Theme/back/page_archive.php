<?php
/**
 * Archive
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<?php $this->need('header.php'); ?>

<div class="main about">
  <div class="item">
    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
    <fieldset>
      <legend><font color="#ec9217">统计信息</font></legend>
      <table class="archives-count">
        <tbody>
          <tr>
            <td>
              <span>
                <font color="#ec9217"> <?php $stat->categoriesNum() ?></font>
              </span>
              <font color="#ec9217">分类</font>
            </td>
            <td>
              <span>
                <font color="#ec9217"><?php $stat->publishedPostsNum() ?></font>
              </span>
              <font color="#ec9217">文章 </font>
            </td>
            <td>
              <span>
                <font color="#ec9217"><?php $stat->publishedCommentsNum() ?></font>
              </span>
              <font color="#ec9217">留言</font>
            </td>
          </tr>
        </tbody>
      </table>
    </fieldset>
    <br />
    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=100000')->parse('<legend><ul class="post-list"><li>{year}-{month}-{day} </strong> <a class="links" href="{permalink}"><font color="#ec9217">{title}</font></a></li></ul></legend>'); ?>
  </div>
</div>
<!--归档-->

<?php $this->need('footer.php'); ?>