<?php 
/**
* 文章归档
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
        <div id="container">
            <div class="content clearfix">
			
			<section class="archives">

			<?php
			$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
				$year=0; $mon=0; $i=0; $j=0;  
				while($archives->next()):   
					$year_tmp = date('Y',$archives->created);   
					$mon_tmp = date('m',$archives->created);   
					$y=$year; $m=$mon;   
					if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
					if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
					if ($year != $year_tmp) {   
						$year = $year_tmp;   
						@$output .= '<h4 class="downarch">'. $year .'+</h4><ul class="posts-list">'; //输出年份   
					}    
					$output .= '<li class="archiveli"><span>'.date('Y.m.d ',$archives->created).'</span> <a href="'.$archives->permalink .'">'. $archives->title .'</a> </li>'; //输出文章日期和标题   
				endwhile;   
				$output .= '</ul></li></ul>';
				echo $output;
			?>
			  </section>

                <blockquote>
                    <small>
                        <a href="<?php $this->options->siteUrl(); ?>" title="Posts"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->publishedPostsNum() ?>+</a>
                    </small>
                </blockquote>
            </div>
			<script type="text/javascript" src="<?php $this->options->themeUrl('static/style/jquery.min.js'); ?>"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(document).ready(function() {
                        $(".archives ul.hidearch").hide();
                        $(".archives h4.downarch").click(function() {
                            $(this).next().slideToggle('fast');
                            return false;
                        });
                    });
                })
            </script>
 <?php $this->need('footer.php'); ?>