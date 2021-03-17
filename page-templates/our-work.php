<?php
/**
 * ============== Template Name: Our Work
 *
 * @package carr-hartley
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>
    <div class="container">
        <div class="content">
            <h3 class="heading heading__2 heading__light"><?php the_field('heading');?></h3>
            <div class="main-text"><?php the_field('copy');?></div>

            <a class="more-link">Read more</a>
            <?php get_template_part("inc/img/scrollarrow");?>
            <h3 class="heading heading__2"><?php the_field('sub_heading');?></h3>
            <p><?php the_field('main_copy');?></p>
        </div>
    </div>
</div>

<div class="outer-container leaders">


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
    <div class="container">
        <div class="copy">
            <h3 class="heading heading__7"><?php the_title(); ?></h4>
                <p><?php echo $text; ?></p>
                <span class="dark-highlight"></span>
                <a href="<?php the_permalink(); ?>" class="button button__arrowright"
                    alt="silverless studio | <?php the_title(); ?>">Read
                    More<?php get_template_part("inc/img/arrow");?></a>
        </div>
        <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>

    </div>
    <?php endwhile;
                    wp_reset_postdata();
                    ?>


</div>

<div class="outer-container">
    <?php $ctaBackground = get_field('cta_background_image');?>
    <div class="container content cta" style="background:url(<?php echo $ctaBackground['url'];?>);">
        <div class="content">
            <h3 class="heading heading__4"><?php the_field('cta_heading');?></h3>
            <span class="link-highlight"></span>
            <a href="<?php the_field('cta_button_target');?>"
                class="button button__arrowright button__light"><?php the_field('cta_button_text');?><?php get_template_part("inc/img/arrow");?></a>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/_testimonial-section');?>

</div>
<!--wrapper-->

<?php get_footer();?>