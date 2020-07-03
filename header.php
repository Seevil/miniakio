<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="keywords" content="<?php $this->keywords() ?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
    <link href="<?php $this->options->themeUrl('static/style/style.css'); ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php $this->options->themeUrl('static/style/solarized.css'); ?>" rel="stylesheet" type="text/css">
  </head>

  <body>
    <img class="bg-image" src="<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('static/bg.jpg'); ?><?php endif; ?>" />
    <header id="header" class="clearfix header-fixed-top">
      <div class="nav">
       <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<ul>
	  <li><a href="<?php $this->options->siteUrl(); ?>">主页</a></li>
	  <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
    <?php while($categories->next()): ?>
	<li><a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a></li>
    <?php endwhile; ?>
	  <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
	</ul>

      </div>
    </header>