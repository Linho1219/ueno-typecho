<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<?php $this->need('header.php'); ?>

<style>
    body,
    h1 {
        color: rgba(0, 0, 0, 0.86);
        text-align: center;
        font-family: "Helvetica Neue", Aria, sans-serif;
    }

    h1 {
        margin: 200px 0 80px;
    }

    a {
        color: rgba(0, 0, 0, 0.98);
    }

    .logo {
        display: inline-block;
        margin-top: 100px;
        width: 80px;
    }

    .logo img {
        max-width: 100%;
    }

    .logo+h1 {
        margin-top: 100px;
    }

    .site-foot,
    .typlog-foot {
        display: none;
    }
</style>

<body>
    <?php if ($this->options->logoUrl): ?>
        <a class="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->logoUrl() ?>" alt="logo">
        </a>
    <?php endif; ?>
    <h1>Not Found</h1>
    <p>This page does not exist.</p>
    <a href="<?php $this->options->siteUrl(); ?>" class="href">Back to Home</a>
</body>

<?php $this->need('footer.php'); ?>