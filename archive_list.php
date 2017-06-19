<?php
/**
* 归档模板
*
* @package custom
*/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="main" role="main">
    <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
	</h1>
	<div class="post-content" itemprop="articleBody">
	    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li><i>{year}-{month}-{day}</i> : <a href="{permalink}">{title}</a></li>'); ?>
	</div>
    </div>	
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>