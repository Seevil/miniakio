<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div id="container">
<div class="content clearfix">

<article>
<h2 class="content-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
 <?php $this->content(); ?>
</article>
 <hr>
    <blockquote>
     <small><?php $this->date('Y-m-d H:i'); ?></small>
    </blockquote>

</div>
<footer id="footer" class="top-box clearfix">
© <?php echo date('Y'); ?> | Powered by <a href="http://www.typecho.org" target="_blank" rel="nofollow">Typecho</a> Theme <a href="http://www.xde.io" target="_blank">Xingr</a>.
<a href="javascript:scroll(0,0)" class="to-top">TOP</a>
</footer>
</div>
</body></html>