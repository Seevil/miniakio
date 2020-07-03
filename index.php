<?php
/**
 * 很简单的一款主题 Miniakio  
 * <a href="https://github.com/Seevil/serholiu.com " target="_blank" rel="noopener noreferrer">原主题</a>有5、6年了吧，之前就想移植过来的一直没动，原作者都已经不用这个主题了。之前无事打开书签点开里面收藏的网站发现半数已经不存在了这个主题就当是一场怀旧吧。
 *
 * @package Miniakio Theme
 * @author Xingr
 * @version 1.0
 * @link https://www.xde.io
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <div id="home-container">
      <div class="curtain">
        <div class="avater">
          <a href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('static/avater.jpg'); ?><?php endif; ?>"/>
          </a>
        </div>
        <h2>Recent Post</h2>
        <ul>
          <?php while($this->next()): ?>
          <li>
            <span><?php $this->date("m-d"); ?></span> &raquo; <a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title(19,'...') ?></a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="footer">
          &copy; <?php echo date('Y'); ?> Powered by <a href="http://www.typecho.org" target="_blank" rel="nofollow">Typecho</a> Theme <a href="http://www.xde.io" target="_blank">Xingr</a>.
        </div>
      </div>
    </div>
  </body>
</html>
