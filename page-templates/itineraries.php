<?php
/**
 * ============== Template Name: Itineraries
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
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/scrollarrow");?>
            <h3 class="heading heading__2"><?php the_field('sub_heading');?></h3>
            <p><?php the_field('main_copy');?></p>
        </div>
    </div>
</div>
<div class="outer-container mb10">
    <div class="itin-outer">

        <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'itinerary',
                            'posts_per_page' => -1,
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
        <div class="itin-block">
            <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>
            <div class="copy">
                <p class="days-count"><?php the_field('number_of_nights');?></p>
                <h3 class="heading heading__7"><?php the_title(); ?><span
                        class="country-tag"><?php the_field('country_tag');?></span></h4>
                    <p><?php echo $text; ?></p>
                    <span class="dark-highlight"></span>
                    <a href="<?php the_permalink(); ?>" class="button button__arrowright"
                        alt="silverless studio | <?php the_title(); ?>">Read
                        More<?php get_template_part("inc/img/arrow");?></a>
            </div>

        </div>
        <?php endwhile;
                    wp_reset_postdata();
                    ?>


    </div>
</div>



<div class="outer-container">
    <?php $ctaBackground = get_field('cta_background_image');?>
    <div class="container content cta" style="background:url(<?php echo $ctaBackground['url'];?>);">
        <div class="content">
            <h3 class="heading heading__4"><?php the_field('cta_heading');?></h3>
            <a href="<?php the_permalink(); ?>" class="button button__arrowright button__light">Read
                More<?php get_template_part("inc/img/arrow");?></a>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/othersafaris');?>

</div>
<!--wrapper-->

<?php get_footer();?>