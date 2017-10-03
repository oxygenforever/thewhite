<footer id="footer">
    <div class="container">
        <div class="divider">
            <span><?php _e('Categories'); ?></span>
        </div>
        <ul>
            <?php
            foreach (get_categories() as $category) { ?>
                <li class="brackets">
                    <a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a>
                </li>
            <?php } ?>
        </ul>
        <div class="divider">
            <span><?php _e('Tags') ?></span>
        </div>
        <div id="cloud-tags">
            <?php $args = array(
                'smallest' => 8,
                'largest' => 12,
                'unit' => 'pt',
                'number' => 99,
                'format' => 'flat',
                'orderby' => 'name',
                'link' => 'view',
                'taxonomy' => 'post_tag',
            ); ?>
            <?php wp_tag_cloud($args); ?>
        </div>
        <div class="divider"></div>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'nav-menu')); ?>
        <?php get_option('footer_text') ?>
        <div class="divider"></div>
        <p id="copyright-stuff">
            <a href="https://github.com/TheYahya/thewhite">قالب سفید</a> اثر <a href="http://theyahya.com/">یحیی</a>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>