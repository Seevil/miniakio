<?php
/**
* 全部标签
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

    <div id="container">
      <div class="content clearfix">
      <h3>所有标签</h3>
    <section class="group-tags">
      <ul class="tag-box">
	  <?php $this->widget('Widget_Metas_Tag_Cloud')->to($taglist); ?><?php while($taglist->next()): ?>
<li><a href="<?php $taglist->permalink(); ?>"><?php $taglist->name(); ?> <span>{{tag.num}}</span></a></li>
<?php endwhile; ?>

      </ul>
    </section>
    <hr>

      </div>
<?php $this->need('footer.php'); ?>