<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>

</div>

<div class="site-foot">
    <div class="site-foot_content">

        <div class="site-foot_home">
            <?php if ($this->options->logoUrl): ?>
                <a class="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" height="32">
                </a>
            <?php endif; ?>
            <?php if ($this->options->footerHTML): ?>
                <div class="custom-footer">
                    <?php $this->options->footerHTML(); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="site-foot_links">
            <a href="/archive/">Archive</a>
            <a href="/moments/">Moments</a>
        </div>
    </div>


</div>
<div class="typlog-foot">
    <div>Powered by <a class="title" href="https://typecho.org/">Typecho</a></div>
</div>
</body>

</html>