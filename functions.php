<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $disqusID = new Typecho_Widget_Helper_Form_Element_Text('disqusID', NULL, NULL, _t('Disqus'), _t('输入您的 Dnsqus ID'));
    $googleAnalytics = new Typecho_Widget_Helper_Form_Element_Text('googleAnalytics', NULL, NULL, _t('Google Analytics'), _t('输入您的 Google Analytics 跟踪 ID'));
    $form->addInput($disqusID);
    $form->addInput($googleAnalytics);
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

