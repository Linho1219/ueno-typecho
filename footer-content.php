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
      <?php if ($this->options->footerLinks):
        $this->options->footerLinks(); endif; ?>
    </div>
  </div>
</div>

<div class="typlog-foot">
  <div>
    Powered by <a href="https://typecho.org/" target="_blank">Typecho</a>
    · <a href="https://github.com/Linho1219/ueno-typecho" target="_blank">Ueno</a> theme by <a
      href="https://github.com/Linho1219" class="title" target="_blank">Linho</a>
  </div>
</div>