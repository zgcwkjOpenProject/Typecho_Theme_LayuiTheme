<?php
/**
 * About
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<?php $this->need('header.php'); ?>

<div class="main about">
  <div class="item">
    <h4 class="personal">个人简介</h4>
    <img class="portrait" src="https://cdn.ayceo.com/ico.png" alt="">
    <p class="Introduction">90后,  爱生活, 爱艺术, 爱书画, 爱音乐<br>勤奋是学习的枝叶,当然很苦,智慧是学习的花朵,当然香郁</p>
    <h4 class="personal">我的技能</h4>
    <div class="layui-progress layui-progress-big" lay-showpercent="true">
      <em>HTML</em>
      <div class="layui-progress-bar layui-bg-red" lay-percent="80%" style="width: 80%;"><span class="layui-progress-text">80%</span></div>
    </div>
    <div class="layui-progress layui-progress-big" lay-showpercent="true">
    <em>C++</em>
    <div class="layui-progress-bar layui-bg-orange" lay-percent="60%" style="width: 60%;"><span class="layui-progress-text">60%</span></div>
  </div>
  <div class="layui-progress layui-progress-big" lay-showpercent="true">
    <em>JAVA</em>
    <div class="layui-progress-bar layui-bg-blue" lay-percent="80%" style="width: 80%;"><span class="layui-progress-text">80%</span></div>
  </div>
  <div class="layui-progress layui-progress-big" lay-showpercent="true">
    <em>PHP</em>
    <div class="layui-progress-bar" lay-percent="50%" style="width: 50%;"><span class="layui-progress-text">50%</span></div>
  </div>
  <h4 class="contact">与我联系</h4>
  <img class="code" src="/1234567.png" alt="">
  <p class="qq-number">扫码加微信<br>QQ</p>
  </div>
</div>
  
<?php $this->need('footer.php'); ?>