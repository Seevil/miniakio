<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

    <div id="container">
      <div class="content clearfix">
      <h3><?php $this->archiveTitle(array(
            'category'  =>  _t('分类「 %s」下的文章'),
            'search'    =>  _t('包含关键字「 %s」的文章'),
            'tag'       =>  _t('标签「 %s」下的文章'),
            'author'    =>  _t('「 %s」发布的文章')
        ), '', ''); ?></h3>
<section>
  <ul class="posts-list">
   <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <li>
      <span><?php $this->date("m-d"); ?></span><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </li>
   <?php endwhile; ?>
   <?php else: ?>
   <?php _e('没有找到内容'); ?>
       
        <?php endif; ?>
  </ul>
</section>

      </div>
<?php $this->need('footer.php'); ?>