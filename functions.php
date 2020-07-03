<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    $logoimg = new Typecho_Widget_Helper_Form_Element_Text('logoimg', NULL, NULL, _t('头像地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用站点名称'));
    $form->addInput($logoimg->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('一般为http://www.yourblog.com/image.ico,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($favicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $appleicon = new Typecho_Widget_Helper_Form_Element_Text('appleicon', NULL, NULL, _t('背景图片'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则使用默认背景图片'));
    $form->addInput($appleicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
}

function themeInit($archive) {
    if ($archive->is('index')) {
        $archive->parameter->pageSize = 16; // 自定义条数
    }
}

function parseContent($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
    }
    echo trim($obj->content);
}
