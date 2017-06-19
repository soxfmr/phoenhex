<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time></li>
            <li itemprop="author" itemscope itemtype="http://schema.org/Person">By <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php $this->category(', '); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <?php if($this->options->disqusID): ?>
        <div id="disqus_thread"></div>
    <?php endif ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','ない'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','ない'); ?></li>
    </ul>
</div><!-- end #main-->

<?php if($this->options->disqusID): ?>
<script>
var disqus_config = function () {
    this.page.url = '<?php $this->permalink() ?>';
    this.page.identifier = '<?php $this->permalink(); ?>';
};
(function() {
    var d = document, s = d.createElement('script');
    s.src = 'https://<?php $this->options->disqusID() ?>.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<?php endif ?>

<?php $this->need('footer.php'); ?>
