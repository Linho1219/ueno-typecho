<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/snow.css'); ?>">
<style>
    .entry-cover>img {
        display: block;
        width: 100vw;
    }

    .h-entry .entry-cover {
        height: auto;
    }
</style>
<div class="site-nav has-cover">
    <a class="site-link" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
</div>
<article role="main" class="h-entry post has-cover" itemscope="" itemtype="http://schema.org/Article">
    <div class="entry-cover js-cover">
        <img class="u-photo" src="<?php echo getPostImg($this); ?>" alt="<?php $this->title() ?>">
    </div>
    <div class="entry-meta inner">
        <time class="js-time dt-published" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
            <?php $this->date('M j, Y'); ?>
        </time>
        <div class="entry-tags">
            <?php $this->tags(' ', true, 'none'); ?>
        </div>
    </div>
    <h1 class="p-name inner" itemprop="headline"><?php $this->title() ?></h1>
    <?php if ($this->fields->subtitle): ?>
        <h2 class="p-summary inner"><?php $this->fields->subtitle() ?></h2>
    <?php endif; ?>
    <div class="e-content js-content yue dark-code" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>