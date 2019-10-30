<?php
/**
 * Link
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
 
<?php $this->need('header.php'); ?>

<style>*{padding:0;margin:0;font-family:Microsoft Yahei,"微软雅黑","Helvetica Neue",Helvetica,Hiragino Sans GB,WenQuanYi Micro Hei,sans-serif}.container{max-width:1100px;margin:0 auto}.more-title{text-align:center;font-weight:normal;font-size:25px;margin:20px 0 0 0}.link-box-area{padding-top:35px;overflow:hidden;zoom:1}.link-box{width:30%;display:inline-block;background:rgba(238,238,238,0.18);height:140px;margin-left:2.5%;margin-bottom:15px;float:left;text-decoration:none!important;overflow:hidden;-webkit-transition:all .2s linear;transition:all .2s linear}.link-box:hover{z-index:2;-webkit-box-shadow:0 15px 30px rgba(0,0,0,0.1);box-shadow:0 15px 30px rgba(0,0,0,0.1);-webkit-transform:translate3d(0,-2px,0);transform:translate3d(0,-2px,0)}.link-box .link-name{font-size:20px;color:#15aaea;width:100%;display:inline-block;text-align:center;margin:18px 0;text-overflow:-o-ellipsis-lastline;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical}.link-box .link-name .link-favicon{display:inline-block;max-width:30px;height:30px;vertical-align:middle;border:0}.link-box .link-direction{display:inline-block;padding:0 10px;font-size:15px;line-height:20px;color:rgba(209,170,86,0.66);text-overflow:-o-ellipsis-lastline;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical}@media screen and (min-width:900px){.link-box[data-role=.link-box-area]:nth-child(1n){clear:both}}@media screen and (max-width:900px) and (min-width:600px){.link-box[data-role=.link-box-area]:nth-child(2n){clear:both}.link-box{width:40%;height:150px;margin-left:6.5%}}@media screen and (max-width:600px){.link-box{width:90%;height:150px;margin-left:5%;clear:both}}</style>
<div class="main mood">
  <li class="layui-nav-item  layui-this"><a><h2># 友情链接</h2></a></li>
  <div class="link-box-area">
    <a class="link-box" href="http://blog.zgcwkj.top" target="_blank">
      <span class="link-name">
        <img class="link-favicon" src="http://blog.zgcwkj.top/favicon.ico"/>
        zgcwkj 博客
      </span>
      <span class="link-direction">
        过来人告诉你，博主超可爱！
      </span>
    </a>
    <?php $this->content(); ?>
   </div>
</div>
  
<?php $this->need('footer.php'); ?>