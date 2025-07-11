<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/yue.css'); ?>">
<style>
  .entry-tags.category a::before {
    content: none;
  }

  .entry-tags.tags {
    margin: 10px 0;
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

<div class="body">
  <?php $this->need('sidebar.php'); ?>
  <div class="main" role="main">
    <div class="inner main_mark">
      <article role="main" class="h-entry" itemscope itemtype="http://schema.org/Article">
        <div class="entry-cover">
          <img class="u-photo" src="<?php echo getPostImg($this); ?>" alt="<?php $this->title() ?> cover">
        </div>
        <div class="entry-meta">
          <time class="dt-published" datetime="<?php $this->date('c'); ?>"
            itemprop="datePublished"><?php $this->date('M j, Y'); ?></time>
          <?php if ($this->category): ?>
            <p class="entry-tags category">
              <?php $this->category(''); ?>
            </p>
          <?php endif; ?>
        </div>
        <h1 class="p-name" itemprop="headline"><?php $this->title() ?></h1>
        <?php if ($this->fields->subtitle): ?>
          <h2 class="p-summary"><?php $this->fields->subtitle() ?></h2>
        <?php endif; ?>
        <?php if ($this->tags): ?>
          <div class="entry-tags tags">
            <?php $this->tags(' ', true, 'none'); ?>
          </div>
        <?php endif; ?>
        <div class="e-content js-content yue dark-code" itemprop="articleBody">
          <?php $this->content(); ?>
        </div>
      </article>
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
  </div>
</div>