<?php get_header(); ?>
    <div class="container">

        <?php
        $slug = (get_queried_object()) ? get_queried_object()->slug : null;
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'post',
            'nopaging' => true,
        );
        if (is_category()) {
            $args['category_name'] = $slug;
        } elseif (is_tag()) {
            $args['tag_slug__in'] = $slug;
        }
        $myposts = get_posts($args);

        $the_year = null;
        $the_month = null;
        $first_year = true;
        $first_month = true;
        foreach ($myposts as $post) : setup_postdata( $post );
            if ($the_year != get_the_date('Y')) {
                $the_year = get_the_date('Y');
                echo ($first_year) ?
                    '<div class="date-year-divider"><span>' . $the_year . '</span></div>' :
                    '<div class="date-year-divider"><span>' . $the_year . '</span></div>';

                $first_year = false;
            }

            if (get_option('showing_months_in_archive') && $the_month != get_the_date('F')) {
                $the_month = get_the_date('F');
                echo $the_month . '<br>';
            }
            ?>

            <article>
                <span class="date date-month-day"><?php (get_option('showing_months_in_archive')) ? the_date('d') : the_date('m/d') ?></span>
                <h3 class="archive__post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                &nbsp;
                <?php if (get_option('showing_comments_count_in_archive')) : ?>
                    <span class="archive-comment-count">(<?php comments_number(0, 1, '%') ?> <?php __('Comment') ?>
                        )</span>
                <?php endif; ?>
            </article>
            <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
<?php get_footer(); ?>