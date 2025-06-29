<?php
/**
 * Default theme for Typecho
 *
 * @package Ueno
 * @author 上野 / Linho1219
 * @version 0.8
 * @link https://github.com/Linho1219/ueno-typecho
 */

if (!defined('__TYPECHO_ROOT_DIR__'))
    exit;
$this->need('header.php');
$this->need('sidebar.php');
?>

<div class="main" role="main">
    <div class="inner main_mark">
        <?php while ($this->next()): ?>
            <div class="item Article Cover" lang="zh">
                <a class="item-cover" href="<?php $this->permalink() ?>">
                    <div class="item-cover_image">
                        <div class="js-cover" style="background-image:url(<?php echo getPostImg($this); ?>)">
                        </div>
                    </div>
                    <div class="item-cover_inner">
                        <time class="js-time"><?php echo formatTimestampToText($this->date->timeStamp); ?></time>
                        <h3><?php $this->title() ?></h3>
                        <?php if ($this->fields->subtitle()): ?>
                            <h4><?php $this->fields->subtitle() ?></h4>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>