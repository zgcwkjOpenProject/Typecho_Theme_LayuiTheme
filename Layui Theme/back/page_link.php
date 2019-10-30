<?php
/**
 * Link
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
 
<?php $this->need('header.php'); ?>

<style>
*{
    padding: 0;margin: 0;
    font-family: Microsoft Yahei, "微软雅黑", "Helvetica Neue", Helvetica, Hiragino Sans GB, WenQuanYi Micro Hei, sans-serif;
}
.container{
    max-width: 1100px;
    margin: 0 auto;
}
.more-title{
    text-align: center;
    font-weight: normal;
    font-size: 25px;
    margin: 20px 0 0 0;
}
/*放置链接框的区域*/
.link-box-area{
    padding-top: 35px;
    overflow: hidden;
    zoom: 1;
}
/*链接框*/
.link-box{
    width: 30%;
    display: inline-block;
    background: rgba(238, 238, 238, 0.18);
    height: 140px;
    margin-left: 2.5%;
    margin-bottom: 15px;
    float: left;
    text-decoration: none!important;/*这里这么处理是因为受下面的display: -webkit-box;影响，下划线又会回来*/
    overflow: hidden;
    -webkit-transition: all .2s linear;/*渐变效果*/
    transition: all .2s linear;
}
/*链接区域鼠标滑动浮起效果*/
.link-box:hover{
    z-index: 2; /*设置在顶层显示*/
    -webkit-box-shadow: 0 15px 30px rgba(0,0,0,0.1);/*添加阴影*/
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    -webkit-transform: translate3d(0, -2px, 0);/*向上浮动*/
    transform: translate3d(0, -2px, 0);
}
/*链接名字*/
.link-box .link-name{
    font-size: 20px;
    color: #15AAEA;
    width: 100%;
    display: inline-block;
    text-align: center;
    margin: 18px 0;
    /*超过一行的内容被自动截断并加上省略号*/
    text-overflow: -o-ellipsis-lastline;    /*最后一行加省略号*/
    overflow: hidden;
    text-overflow: ellipsis;    /*无法容纳的被加上省略号*/
    display: -webkit-box;
    -webkit-line-clamp: 1;  /*超出三行截断*/
    -webkit-box-orient: vertical;
}
/*链接小图标*/
.link-box .link-name .link-favicon{
    display: inline-block;
    max-width: 30px;
    height: 30px;
    vertical-align: middle;
    border: none;
}
/*链接描述*/
.link-box .link-direction{
    display: inline-block;
    padding: 0 10px;
    font-size: 15px;
    line-height: 20px;
    color: rgba(209, 170, 86, 0.66);
    /*超过三行的内容被自动截断并加上省略号*/
    text-overflow: -o-ellipsis-lastline;/*最后一行加省略号*/
    overflow: hidden;
    text-overflow: ellipsis;/*无法容纳的被加上省略号*/
    display: -webkit-box;
    -webkit-line-clamp: 3;/*超出三行截断*/
    -webkit-box-orient: vertical;
}
/*网页宽度大于900px,每列显示3个*/
  @media screen and (min-width:900px){
    .link-box[data-role=.link-box-area]:nth-child(1n)
    {
        clear:both;
    }
}
/*网页宽度在900px到600px之间,每列显示2个*/
@media screen and (max-width:900px) and (min-width:600px){
    .link-box[data-role=.link-box-area]:nth-child(2n)
    {
        clear:both;
    }
    .link-box{
        width: 40%;
        height: 150px;
        margin-left: 6.5%;
    }
}
/*网页宽度小于600px,每列显示1个*/
@media screen and (max-width:600px){
    .link-box{
        width: 90%;
        height: 150px;
        margin-left: 5%;
        clear:both;
    }
}
</style>
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