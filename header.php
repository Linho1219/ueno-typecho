<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
        'category' => _t('分类 %s 下的文章'),
        'search' => _t('包含关键字 %s 的文章'),
        'tag' => _t('标签 %s 下的文章'),
        'author' => _t('%s 发布的文章')
    ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('ueno.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('typlog.css'); ?>">

    <style>
        :root {
            --t-rc-primary: 0, 0, 0;
            --primary-color-hex: #000000;
            --primary-color-rgb: 0, 0, 0;
            --t-on-primary: 255, 255, 255;
            --primary-text-rgb: 255, 255, 255;
            --t-rc-secondary: 0, 0, 0;
            --secondary-color-hex: #000000;
            --secondary-color-rgb: 0, 0, 0;
            --t-on-secondary: 255, 255, 255;
            --secondary-text-rgb: 255, 255, 255;
        }

        body {
            margin: 0;
        }
    </style>
    <?php if ($this->options->cssCode): ?>
        <style>
            <?php $this->options->cssCode(); ?>
        </style>
    <?php endif; ?>
    <?php $this->header(); ?>
</head>

<body>
    <div class="body">