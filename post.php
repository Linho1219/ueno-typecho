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

<style>
  article table {
    display: block;
    border-collapse: collapse;
    margin: 20px 0;
    overflow-x: auto
  }

  article tr {
    background-color: #8881;
    border-top: 1px solid #8885;
    transition: background-color .5s
  }

  article tr:nth-child(2n) {
    background-color: transparent
  }

  article th,
  article td {
    border: 1px solid #8885;
    padding: 8px 16px
  }

  article th {
    text-align: left;
    font-size: 15px;
    font-weight: 600;
    background-color: #8881
  }

  article td {
    font-size: 15px
  }
</style>

<?php $this->need('footer.php'); ?>