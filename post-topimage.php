<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/snow.css'); ?>">
<style>
  .entry-cover>img {
    display: block;
    width: 100vw;
  }

  .h-entry .entry-cover {
    height: auto;
    overflow: hidden;
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
    <?php if ($this->tags): ?>
      <div class="entry-tags">
        <?php $this->tags(' ', true, 'none'); ?>
      </div>
    <?php endif; ?>
    <p class="category">
      <?php $this->category(' | '); ?>
    </p>
  </div>
  <h1 class="p-name inner" itemprop="headline"><?php $this->title() ?></h1>
  <?php if ($this->fields->subtitle): ?>
    <h2 class="p-summary inner"><?php $this->fields->subtitle() ?></h2>
  <?php endif; ?>
  <div class="e-content js-content yue dark-code" itemprop="articleBody">
    <?php $this->content(); ?>
  </div>
  <section class="entry-section">
    <div class="inner">
      <?php if ($this->options->endHTML): ?>
        <?php $this->options->endHTML() ?>
      <?php endif; ?>
    </div>
  </section>
  <?php $relatedPosts = \Widget\Contents\Related\Author::alloc(
    ['cid' => $this->cid, 'type' => 'post', 'author' => $this->author->uid, 'limit' => 1]
  ); ?>
  <section class="entry-section prev-subject">
    <div class="inner">
      <h2>Read This</h2>
      <div class="item" lang="zh">
        <a class="item-main" href="<?php $relatedPosts->permalink(); ?>">
          <h3><?php $relatedPosts->title(); ?></h3>
          <div class="item-subtitle"><?php $relatedPosts->fields->subtitle(); ?></div>
        </a>
      </div>
    </div>
  </section>
</article>