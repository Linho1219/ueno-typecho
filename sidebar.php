<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>


<div class="theme-toggle">
    <input type="checkbox" id="js-theme-toggle">
    <label for="js-theme-toggle">
        <span class="theme-toggle_handle"></span>
        <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-label="Light theme icon (sun)">
            <circle cx="12" cy="12" r="5" fill="currentColor"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>
        <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-label="Dark theme icon (moon)">
            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" fill="currentColor"
                stroke="none"></path>
        </svg>
    </label>
</div>
<aside class="side">
    <div class="inner">
        <?php if ($this->options->logoUrl): ?>
            <a class="side_logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logoUrl() ?>"
                    alt="<?php $this->options->title() ?>" width="120" height="120"></a>
        <?php endif; ?>
        <h1 class="side_title"><a class="h-card" rel="me"
                href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>

        <h2 class="side_subtitle"><?php $this->options->description() ?></h2>

        <div class="side_subscribe">
            <a href="<?php $this->options->feedUrl(); ?>" target="_blank" rel="noopener noreferrer">
                <button class="js-subscribe"><?php _e('文章 RSS'); ?></button>
            </a>
        </div>



        <ul class="side_links">
            <?php if ($this->options->sideLinkText1): ?>
                <li><a href="<?php $this->options->sideLinkUrl1() ?>"
                        target="_blank"><?php $this->options->sideLinkText1() ?></a></li>
            <?php endif; ?>
            <?php if ($this->options->sideLinkText2): ?>
                <li><a href="<?php $this->options->sideLinkUrl2() ?>"
                        target="_blank"><?php $this->options->sideLinkText2() ?></a></li>
            <?php endif; ?>
            <?php if ($this->options->sideLinkText3): ?>
                <li><a href="<?php $this->options->sideLinkUrl3() ?>"
                        target="_blank"><?php $this->options->sideLinkText3() ?></a></li>
            <?php endif; ?>
        </ul>

        <!-- <nav class="side_social">
            {% if site.podcast and site.podcast.email %}
            {{ render_social_icons(site, site.podcast.email) }}
            {% else %}
            {{ render_social_icons(site, site.socials.email) }}
            {% endif %}
        </nav> -->
        <div class="side_search">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <!-- <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label> -->
                <input type="text" class="js-search" id="s" name="s" class="text"
                    placeholder="<?php _e('输入关键字搜索'); ?>" />
                <!-- <button type="submit" class="submit"><?php _e('搜索'); ?></button> -->
            </form>
        </div>
    </div>
</aside>