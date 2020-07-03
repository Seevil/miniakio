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
<div class="tag-list">Tags: <?php $this->tags(' ', true, 'None'); ?> &nbsp;&nbsp; Post on <?php $this->category(' '); ?> | <?php if($this->user->hasLogin()): ?><a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php $this->cid(); ?>">Edit</a><?php endif; ?>
</div>

<div class="navigation clearfix">
<span class="prevs maxtxet">
<?php $this->theNext('上一篇： %s', '', array('title' => '', 'tagClass' => 'previous')); ?>
</span>
<span class="next maxtxet">
<?php $this->thePrev('下一篇： %s', '', array('title' => '', 'tagClass' => '')); ?>
</span>
</div>
</div>
<div class="content clearfix">
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>