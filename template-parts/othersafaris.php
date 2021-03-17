<div class="container-overflow-right mb10">
    <div class="content-wrapper light-wrapper">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3">Other Safaris</h3>
                <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'safari',
                            'posts_per_page' => -1,
                            'orderby' => 'menu_order',
                            'order' => 'DESC',
                            'post__not_in' => array($currentID),
                        )
                    );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $leaderImage = get_field('thumbnail_image', $post->ID);
                    $text = get_field('copy', $post->ID);
                    if ( '' != $text ) {
                        $text = strip_shortcodes( $text );
                        $text = apply_filters('the_content', $text);
                        $text = str_replace(']]>', ']]>', $text);
                        $excerpt_length = 22; // 20 words
                        $excerpt_more = apply_filters('excerpt_more', '' . '...');
                        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
                    }?>

                <div class="content">
                    <h3 class="heading heading__7"><?php the_title(); ?></h4>
                        <p><?php echo $text; ?></p>
                        <span class="dark-highlight"></span>
                        <a href="<?php the_permalink(); ?>" class="button button__arrowright"
                            alt="silverless studio | <?php the_title(); ?>">Read
                            More<?php get_template_part("inc/img/arrow");?></a>
                </div>
                <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>

                <?php endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </div>
</div>