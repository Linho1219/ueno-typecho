# UENO-Typecho

![screenshot](./screenshot.png)

[UENO](https://github.com/typlog/ueno) 是 [Typlog](https://typlog.com/) 的默认主题。本项目为 UENO 在 [Typecho](https://typecho.org/) 上的移植版本。

如需快速开始，请转到 [开始使用](#开始使用)。

## 主题介绍

### 提供的额外功能或选项

#### 全局展示选项

- 站点主要色、次要色
- 站点 logo、favicon 地址
- 侧边栏社交媒体按钮（邮件、Github、Telegram、Instagram）
- 侧边栏链接（最多 3 个）
- 自定义 CSS
- 自定义页尾
- 自定义页脚链接
- 自定义页脚

#### 全局功能

- 亮 / 暗主题切换（文章暗色模式仅在 Yue 主题下生效）
- （可选）基于 [Highlight.js](https://highlightjs.org/) 的代码高亮，在前端执行
- （可选）基于 [Mathjax3](https://www.mathjax.org/) 的公式渲染，在前端执行

#### 文章

- 副标题
- 文章封面图（留空则使用文章中的第一张图片）
- 版式（三个选项分别对应 Typlog 中的 Yue、Snow、Lotus 三个主题）

### 相比原主题的改动

- Typlog 没有「分类」与「标签」之分，只提供了标签；而 Typecho 有分类和标签两个整理系统。移植主题时调整了这部分的样式，将分类与标签统一防止在标题附近，突出分类，弱化标签，并在文章列表页面的卡片左上角显示分类。
- 原主题中亮色 / 暗色模式数据保存在 `sessionStorage` 中，关闭浏览器后清除；移植时改为使用 `localStorage`，下次打开时仍保持此前的设置。

### 限制与未提供的功能

- 未移植评论区的样式。评论区始终不会显示。
- 若文章没有设定封面图，且全文没有图片，显示会发生错误。

## 开始使用

将本仓库克隆至 Typecho 的主题目录下（`path/to/typecho/usr/themes/`），Typecho 会自动识别。然后，在顶栏的 控制台 → 设置外观 → 可以使用的外观 面板中可以切换主题，在「设置外观」面板中可以设置上述选项。**调整设置后，不要忘记点击「保存设置」按钮。**

## 授权模式

由于上游仓库 [typlog/ueno](https://github.com/typlog/ueno) 未提供协议，为尊重原作者，本项目保持无协议状态。您可在此项目基础上二次修改或分发，但由此产生的潜在版权或商业纠纷与本仓库作者无关。

如您是上游仓库的作者并认为此仓库侵权，请联系 [@Linho1219](https://github.com/Linho1219) 删除。
