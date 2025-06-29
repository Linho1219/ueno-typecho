<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<?php $this->need('header.php'); ?>

<?php
if ($this->fields->layoutType == 'normal'):
    $this->need('post-normal.php');
elseif ($this->fields->layoutType == 'topimage'):
    $this->need('post-topimage.php');
elseif ($this->fields->layoutType == 'leftimage'):
    $this->need('post-leftimage.php');
endif;
?>

<?php $this->need('footer.php'); ?>