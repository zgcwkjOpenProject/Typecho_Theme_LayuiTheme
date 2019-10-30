<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
  function themeConfig($form) {
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点 favicon.ico 地址'), _t('站点 favicon.ico 地址'));
    $form->addInput($faviconUrl);

    $backgroundImage = new Typecho_Widget_Helper_Form_Element_Text('backgroundImage', NULL, NULL, _t('背景图片地址'), _t('请输入背景图片地址'));
    $form->addInput($backgroundImage);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像地址'), _t('输入头像地址'));
    $form->addInput($avatarUrl);

    $socialQQ = new Typecho_Widget_Helper_Form_Element_Text('socialQQ', NULL, NULL, _t('QQ'), _t('请输入QQ号码'));
    $form->addInput($socialQQ);

    $socialWechat = new Typecho_Widget_Helper_Form_Element_Text('socialWechat', NULL, NULL, _t('微信'), _t('请输入微信二维码图片地址'));
    $form->addInput($socialWechat);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text('socialGithub', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($socialGithub);

    $socialGitee = new Typecho_Widget_Helper_Form_Element_Text('socialGitee', NULL, NULL, _t('Gitee'), _t('请输入 Gitee 地址'));
    $form->addInput($socialGitee);

    $htmlAdvertis = new Typecho_Widget_Helper_Form_Element_Text('htmlAdvertis', NULL, NULL, _t('文章广告'), _t('每篇文章内放置广告，填写 html 格式'));
    $form->addInput($htmlAdvertis);
  }
  
  /*
   * 后台编辑文章时，为主题增加一个自动绑定的输入框
   * 添加浏览数字段到内容
   */
  function themeFields($layout) {
    $viewsNum = new Typecho_Widget_Helper_Form_Element_Text('viewsNum', NULL, 0, _t('文章浏览数'), _t('文章浏览数统计'));
    $layout->addItem($viewsNum);
  
    $wzimg = new Typecho_Widget_Helper_Form_Element_Text('wzimg', NULL, NULL, _t('文章封面图'), _t('仅文章有效 不填不显示'));
    $layout->addItem($wzimg);
  }
  
  /*
   * 在初始化皮肤函数时调用
   */
  function themeInit($archive){
      // 判断是否为文章或页面
      if($archive->is('single')){
          viewCounter($archive);
      }
  }

  /*
   * 统计文章浏览数
   */
  function viewCounter($archive){
      $cid = $archive->cid;
      $views = Typecho_Cookie::get('__typecho_views');
      $views = !empty($views) ? explode(',', $views) : array();
      if(!in_array($cid,$views)){
          $db = Typecho_Db::get();
          $field = $db->fetchRow($db->select()->from('table.fields')->where('cid = ? AND name = ?', $cid , 'viewsNum'));
          if(empty($field)){
              $db->query($db->insert('table.fields')
              ->rows(array('cid' => $cid, 'name' => 'viewsNum', 'type' => 'str', 'str_value' => 1, 'int_value' => 0, 'float_value' => 0)));
          }else{
              $db->query($db->update('table.fields')->expression('str_value', 'str_value + 1')->where('cid = ? AND name = ?', $cid , 'viewsNum'));
          }
          array_push($views, $cid);
          $views = implode(',', $views);
          Typecho_Cookie::set('__typecho_views', $views);//记录到cookie
      }
  }
?>