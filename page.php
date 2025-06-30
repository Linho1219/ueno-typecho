<?php if (!defined('__TYPECHO_ROOT_DIR__'))
  exit; ?>
<?php $this->need('header.php'); ?>

<div class="body">
  <?php $this->need('sidebar.php'); ?>
  <div class="main" role="main">
    <div class="inner main_mark">
      <article role="main" class="h-entry" itemscope itemtype="http://schema.org/Article">
        <h1 class="p-name" itemprop="headline"><?php $this->title() ?></h1>
        <?php if ($this->fields->subtitle): ?>
          <h2 class="p-summary"><?php $this->fields->subtitle() ?></h2>
        <?php endif; ?>
        <div class="e-content js-content yue dark-code" itemprop="articleBody">
          <?php $this->content(); ?>
        </div>
      </article>
    </div>
  </div>
</div>

<?php $this->need('footer.php'); ?>