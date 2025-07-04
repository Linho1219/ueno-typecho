<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/lotus.css'); ?>">
<style>
  .entry-cover {
    margin-bottom: 0;
    max-height: 100vh;
    padding-bottom: 0;
  }

  .typlog-foot {
    margin-top: 0;
  }

  .entry-tags a {
    box-shadow: none;
  }

  .entry-tags.category a::before {
    content: none;
  }

  .entry-tags.category {
    margin: 15px 0;
  }

  .entry-tags.category a {
    background-color: #eee;
  }

  .entry-tags.category a:hover {
    background-color: var(--un-c-accent);
    text-decoration: none;
  }

  .entry-tags.tags a {
    padding: 0;
    background: none;
  }

  .entry-tags.tags a:hover {
    color: var(--un-c-accent);
  }

  .entry-tags a+a {
    margin-left: 0.8em;
  }
</style>
<article role="main" class="h-entry has-cover" itemscope="" itemtype="http://schema.org/Article">
  <aside class="entry-cover js-cover" style="background-image:url(<?php echo getPostImg($this); ?>);">
    <div class="site-nav has-cover">
      <a class="site-link" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
    </div>
    <div class="entry-head">
    </div>
  </aside>
  <div class="entry-main">
    <div class="inner">
      <div class="entry-meta">
        <time class="js-time dt-published" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
          <?php $this->date('M j, Y'); ?>
        </time>
      </div>
      <?php if ($this->category): ?>
        <p class="entry-tags category">
          <?php $this->category(''); ?>
        </p>
      <?php endif; ?>
      <h1 class="p-name" itemprop="headline"><?php $this->title() ?></h1>
      <?php if ($this->fields->subtitle): ?>
        <h2 class="p-summary"><?php $this->fields->subtitle() ?></h2>
      <?php endif; ?>
      <?php if ($this->tags): ?>
        <div class="entry-tags tags">
          <?php $this->tags(' ', true, 'none'); ?>
        </div>
      <?php endif; ?>
      <div class="e-content js-content yue markdown" itemprop="articleBody">
        <?php $this->content(); ?>
      </div>
      <?php if ($this->options->endHTML): ?>
        <?php $this->options->endHTML() ?>
      <?php endif; ?>
      <?php $relatedPosts = \Widget\Contents\Related\Author::alloc(
        ['cid' => $this->cid, 'type' => 'post', 'author' => $this->author->uid, 'limit' => 1]
      ); ?>
      <section class="entry-section prev-subject">
        <h2>Read This</h2>
        <div class="item" lang="zh">
          <a class="item-main" href="<?php $relatedPosts->permalink(); ?>">
            <h3><?php $relatedPosts->title(); ?></h3>
            <div class="item-subtitle"><?php $relatedPosts->fields->subtitle(); ?></div>
          </a>
        </div>
      </section>
    </div>
    <?php $this->need('footer-content.php');
    $this->__THEME_NO_FOOTER__ = true
      ?>
  </div>
</article>