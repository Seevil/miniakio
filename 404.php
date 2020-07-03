<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="container">
<div class="content clearfix">

<h2>Page Not Found</h2>
<img src="<?php $this->options->themeUrl('static/notfound.png'); ?>">
<hr>
<blockquote>
<small>页面没有找到，你可以返回<a href="<?php $this->options->siteUrl(); ?>">首页</a>或者搜索其他</small>
</blockquote>

</div>

<?php $this->need('footer.php'); ?>
