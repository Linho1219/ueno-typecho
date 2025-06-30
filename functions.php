<?php
if (!defined('__TYPECHO_ROOT_DIR__'))
  exit;

function getPostImg($archive)
{
  if ($archive->fields->coverImg) {
    return $archive->fields->coverImg();
  }
  $img = array();
  //  匹配 img 的 src 的正则表达式
  preg_match_all("/<img.*?src=\"(.*?)\".*?\/?>/i", $archive->content, $img);
  //  判断是否匹配到图片
  if (count($img) > 0 && count($img[0]) > 0) {
    //  返回图片
    return $img[1][0];
  } else {
    //  如果没有匹配到就返回 none
    return 'none';
  }
}

function hexToRgb(string $hex): array
{
  $hex = ltrim($hex, '#');

  if (strlen($hex) === 3) {
    $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
  }

  return [
    hexdec(substr($hex, 0, 2)),
    hexdec(substr($hex, 2, 2)),
    hexdec(substr($hex, 4, 2))
  ];
}

function getTextColor(string $hex): string
{
  $rgb = hexToRgb($hex);
  $yiq = ($rgb[0] * 299 + $rgb[1] * 587 + $rgb[2] * 114) / 1000;
  return ($yiq >= 128) ? '0, 0, 0' : '255, 255, 255';
}

function themeConfig($form)
{
  $accentColor = new \Typecho\Widget\Helper\Form\Element\Text(
    'accentColor',
    null,
    null,
    _t('站点亮色主题色'),
    _t('在这里填入 HEX (#RRGGBB) 颜色值，作为站点在亮色模式下的主题色')
  );
  $form->addInput($accentColor);

  $secondaryColor = new \Typecho\Widget\Helper\Form\Element\Text(
    'secondaryColor',
    null,
    null,
    _t('站点暗色主题色'),
    _t('在这里填入 HEX (#RRGGBB) 颜色值，作为站点在暗色模式下的主题色')
  );
  $form->addInput($secondaryColor);

  $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'logoUrl',
    null,
    null,
    _t('站点 logo 地址'),
    _t('在这里填入一个图片 URL 地址，以在网站标题前加上一个 LOGO')
  );
  $form->addInput($logoUrl);

  $faviconUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'faviconUrl',
    null,
    null,
    _t('站点 favicon 地址'),
    _t('在这里填入一个图片 URL 地址，在浏览器标签页前显示一个小图标。若未设置，将使用站点 logo 地址作为 favicon')
  );
  $form->addInput($faviconUrl);

  $emailAddr = new \Typecho\Widget\Helper\Form\Element\Text(
    'emailAddr',
    null,
    null,
    _t('邮箱地址'),
    _t('填写后在侧边栏显示邮箱图标')
  );
  $form->addInput($emailAddr);

  $githubUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'githubUrl',
    null,
    null,
    _t('Github 链接'),
    _t('填写后在侧边栏显示 Github 图标')
  );
  $form->addInput($githubUrl);

  $telegramUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'telegramUrl',
    null,
    null,
    _t('Telegram 链接'),
    _t('填写后在侧边栏显示 Telegram 图标')
  );
  $form->addInput($telegramUrl);

  $twitterUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'twitterUrl',
    null,
    null,
    _t('Twitter 链接'),
    _t('填写后在侧边栏显示 Twitter 图标')
  );
  $form->addInput($twitterUrl);

  $instagramUrl = new \Typecho\Widget\Helper\Form\Element\Text(
    'instagramUrl',
    null,
    null,
    _t('Instagram 链接'),
    _t('填写后在侧边栏显示 Instagram 图标')
  );
  $form->addInput($instagramUrl);

  $sideLinkText1 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkText1',
    null,
    null,
    _t('侧边栏链接 1 - 文本'),
    _t('在这里填入链接文本')
  );
  $form->addInput($sideLinkText1);

  $sideLinkUrl1 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkUrl1',
    null,
    null,
    _t('侧边栏链接 1 - 链接'),
    _t('在这里填入链接 URL')
  );
  $form->addInput($sideLinkUrl1);

  $sideLinkText2 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkText2',
    null,
    null,
    _t('侧边栏链接 2 - 文本'),
    _t('在这里填入链接文本')
  );
  $form->addInput($sideLinkText2);

  $sideLinkUrl2 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkUrl2',
    null,
    null,
    _t('侧边栏链接 2 - 链接'),
    _t('在这里填入链接 URL')
  );
  $form->addInput($sideLinkUrl2);

  $sideLinkText3 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkText3',
    null,
    null,
    _t('侧边栏链接 3 - 文本'),
    _t('在这里填入链接文本')
  );
  $form->addInput($sideLinkText3);

  $sideLinkUrl3 = new \Typecho\Widget\Helper\Form\Element\Text(
    'sideLinkUrl3',
    null,
    null,
    _t('侧边栏链接 3 - 链接'),
    _t('在这里填入链接 URL')
  );
  $form->addInput($sideLinkUrl3);

  $cssCode = new \Typecho\Widget\Helper\Form\Element\Textarea(
    'cssCode',
    null,
    null,
    _t('自定义 CSS'),
    _t('向网站插入自定义样式表。')
  );
  $form->addInput($cssCode);

  $endHTML = new \Typecho\Widget\Helper\Form\Element\Textarea(
    'endHTML',
    null,
    null,
    _t('自定义页尾'),
    _t('向网站插入自定义页尾。页尾显示在文章的结尾处，支持 HTML。')
  );
  $form->addInput($endHTML);

  $footerHTML = new \Typecho\Widget\Helper\Form\Element\Textarea(
    'footerHTML',
    null,
    null,
    _t('自定义页脚'),
    _t('向网站插入自定义页脚。页脚显示在任何页面的底部。支持 HTML。')
  );
  $form->addInput($footerHTML);
}


function themeFields($layout)
{
  $subtitle = new \Typecho\Widget\Helper\Form\Element\Text(
    'subtitle',
    null,
    null,
    _t('文章副标题'),
    _t('副标题将会显示在文章列表页')
  );
  $layout->addItem($subtitle);

  $layoutType = new \Typecho\Widget\Helper\Form\Element\Select('layoutType', array(
    'normal' => '普通',
    'topimage' => '顶部大头图',
    'leftimage' => '左侧大图',
  ), 'normal', _t('文章页面展示形式'));
  $layout->addItem($layoutType);

  $coverImg = new \Typecho\Widget\Helper\Form\Element\Text(
    'coverImg',
    null,
    null,
    _t('文章封面图'),
    _t('若未设置，默认使用文章首图作为封面图')
  );
  $layout->addItem($coverImg);
}

