<!--#colophon -->
<footer id="colophon" class="site-footer">

    <!--site-info -->
    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', '_s')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', '_s'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', '_s'), 'Cloud Theme', '<a href="https://github.com/sanjay-np/">Sanjay NP</a>');
        ?>
    </div>
    <!-- .site-info -->
</footer>
<!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body>

</html>
