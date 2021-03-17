<?php
/**
 * ============== Template Name: Destinations
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
        </div>
    </div>
</div>
<div class="container-overflow-right mb3">
    <div class="map-content-wrapper">

        <div class="map-wrapper">
            <div class="contact-details sticky">
                <div class="mapimage">
                    <div id="ocean" class="map4 hideme">
                        <?php get_template_part("inc/img/mastermap");?>
                    </div>
                    <div id="central" class="map3 hideme">
                        <?php get_template_part("inc/img/mastermap");?>
                    </div>
                    <div id="southern" class="map2 hideme">
                        <?php get_template_part("inc/img/mastermap");?>
                    </div>
                    <div id="east" class="map1 hideme">
                        <?php get_template_part("inc/img/mastermap");?>
                    </div>



                </div>
            </div>
        </div>
        <div class="destinations-wrapper">
            <div class="destinations-content-wrapper light-wrapper">
                <div class="container">
                    <div class="destination-copy">
                        <h4 class="heading heading__4">Eastern Africa</h4>
                        <span id="sec1" class="dark-highlight"></span>
                        <div class="main-text"><?php echo term_description( '27','description' ); ?></div>
                        <a class="more-link">Read more</a>
                    </div>
                </div>
                <div class="container">

                    <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'country',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'region',
                                    'field' => 'slug',
                                    'terms' => 'eastern-africa',
                                ),
                            ),
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
                    <div class="news-feed__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>
                        </a>
                        <div class="content">
                            <h3 class="heading heading__7"><a href="<?php the_permalink(); ?>"
                                    class="button button__arrowright"
                                    alt="Carr Hartley | <?php the_title(); ?>"><?php the_title(); ?><?php get_template_part("inc/img/arrow");?></a>
                                <span id="sec2" class="dark-highlight"></span>
                                </h3>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div class="destinations-content-wrapper light-wrapper">
                <div class="container">
                    <div class="destination-copy">
                        <h4 class="heading heading__4">Southern Africa</h4>
                        <span class="dark-highlight"></span>
                        <div class="main-text"><?php echo term_description( '28','description' ); ?></div>
                        <a class="more-link">Read more</a>
                    </div>
                </div>
                <div class="container">

                    <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'country',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'region',
                                    'field' => 'slug',
                                    'terms' => 'southern-africa',
                                ),
                            ),
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
                    <div class="news-feed__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>
                        </a>
                        <div class="content">
                            <h3 class="heading heading__7">
                                <a href="<?php the_permalink(); ?>"
                                    class="button button__arrowright"
                                    alt="Carr Hartley | <?php the_title(); ?>"><?php the_title(); ?><?php get_template_part("inc/img/arrow");?></a>
                                <span id="sec3" class="dark-highlight"></span>
                                </h4>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div class="destinations-content-wrapper light-wrapper">
                <div class="container">
                    <div class="destination-copy">
                        <h4 class="heading heading__4">Central & West Africa</h4>
                        <span class="dark-highlight"></span>
                        <div class="main-text"><?php echo term_description( '29','description' ); ?></div>
                        <a class="more-link">Read more</a>
                    </div>
                </div>
                <div class="container">

                    <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'country',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'region',
                                    'field' => 'slug',
                                    'terms' => 'central-west-africa',
                                ),
                            ),
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
                    <div class="news-feed__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>
                        </a>
                        <div class="content">
                            <h3 class="heading heading__7"><a href="<?php the_permalink(); ?>"
                                    class="button button__arrowright"
                                    alt="Carr Hartley | <?php the_title(); ?>"><?php the_title(); ?><?php get_template_part("inc/img/arrow");?></a>
                                <span id="sec4" class="dark-highlight"></span>
                                </h4>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div class="destinations-content-wrapper light-wrapper">
                <div class="container">
                    <div class="destination-copy">
                        <h4 class="heading heading__4">Indian Ocean Islands</h4>
                        <span class="dark-highlight"></span>
                        <div class="main-text"><?php echo term_description( '30','description' ); ?></div>
                        <a class="more-link">Read more</a>
                    </div>
                </div>
                <div class="container">

                    <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'country',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'region',
                                    'field' => 'slug',
                                    'terms' => 'indian-ocean-islands',
                                ),
                            ),
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
                    <div class="news-feed__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>
                        </a>
                        <div class="content">
                            <h3 class="heading heading__7"><a href="<?php the_permalink(); ?>"
                                    class="button button__arrowright"
                                    alt="Carr Hartley | <?php the_title(); ?>"><?php the_title(); ?><?php get_template_part("inc/img/arrow");?></a>
                                <span class="dark-highlight"></span>
                                </h4>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>



    </div>
</div>


<script>
// init controller
var controller = new ScrollMagic.Controller({
    // globalSceneOptions: {
    //     triggerHook: 0,
    //     duration: 450
    // }
});

// build scenes
// new ScrollMagic.Scene({
//         triggerElement: "#sec1",
//     })
//     .setClassToggle("#high1", "showme") // add class toggle
//     .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#sec1",
        triggerHook: 1,
        duration: '100%'
    })
    .setClassToggle("#east", "showme") // add class toggle
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#sec2",
        triggerHook: 0,
        duration: 450
    })
    .setClassToggle("#southern", "showme") // add class toggle
    .addTo(controller);
new ScrollMagic.Scene({
        triggerElement: "#sec3",
        triggerHook: 0,
        duration: 450
    })
    .setClassToggle("#central", "showme") // add class toggle
    .addTo(controller);
new ScrollMagic.Scene({
        triggerElement: "#sec4",
        triggerHook: 0,
        duration: 450
    })
    .setClassToggle("#ocean", "showme") // add class toggle
    .addTo(controller);
</script>





<?php get_template_part('template-parts/_testimonial-section');?>
</div>
</div>

</div>
<!--wrapper-->

<?php get_footer();?>