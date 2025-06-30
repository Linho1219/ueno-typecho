<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/yue.css'); ?>">
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
        </div>
        <h1 class="p-name" itemprop="headline"><?php $this->title() ?></h1>
        <?php if ($this->fields->subtitle): ?>
          <h2 class="p-summary"><?php $this->fields->subtitle() ?></h2>
        <?php endif; ?>
        <div class="e-content js-content yue dark-code" itemprop="articleBody">
          <?php $this->content(); ?>
        </div>
        <?php if ($this->tags): ?>
          <div class="entry-tags">
            <?php $this->tags(' ', true, 'none'); ?>
          </div>
        <?php endif; ?>
        <?php if ($this->options->endHTML): ?>
          <?php $this->options->endHTML() ?>
        <?php endif; ?>
      </article>
    </div>
  </div>
</div>