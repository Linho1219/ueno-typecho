<?php if (!defined('__TYPECHO_ROOT_DIR__'))
  exit; ?>
<?php $this->need('header.php'); ?>

<div class="body">
  <?php $this->need('sidebar.php'); ?>
  <div class="main" role="main">
    <div class="inner main_mark">
      <section class="main_head">
        <h1><?php $this->archiveTitle([
          'category' => _t('%s'),
          'search' => _t('%s'),
          'tag' => _t('%s'),
          'author' => _t('%s')
        ], '', ''); ?></h1>
        <h2><?php $this->archiveTitle([
          'category' => _t('分类 %s 下的文章'),
          'search' => _t('包含关键字 %s 的文章'),
          'tag' => _t('标签 %s 下的文章'),
          'author' => _t('%s 发布的文章')
        ], '', ''); ?></h2>
      </section>
      <?php while ($this->next()): ?>
        <div class="item Article Cover" lang="zh">
          <a class="item-cover" href="<?php $this->permalink() ?>">
            <div class="item-cover_image">
              <div class="js-cover" style="background-image:url(<?php echo getPostImg($this); ?>)">
              </div>
            </div>
            <div class="item-cover_inner">
              <time class="js-time"><?php $this->date('M j, Y'); ?></time>
              <h3><?php $this->title() ?></h3>
              <?php if ($this->fields->subtitle): ?>
                <h4><?php $this->fields->subtitle() ?></h4>
              <?php endif; ?>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="navigation">
      <?php $this->pageNav('←', '→', 8, '...'); ?>
    </div>
  </div>
</div>


<?php $this->need('footer.php'); ?>