<?php
/**
 * ============== Template Name: Country
 *
 * 
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('banner_image');?>
<div class="single single-safari">
    <div class="outer-container hero">
        <div class="container">
            <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
            </div>

            <div class="content">
                <h3 class="heading heading__2"><?php the_field('heading');?></h3>
                <p><?php the_field('copy');?></p>
                <?php get_template_part("inc/img/scrollarrow");?>
            </div>

        </div>
    </div>
</div>
<div class="outer-container mb10">
    <div class="container content">
        <div class="toggle-list work-detail">
            <div class="sticky sidebar-map">
                <div class="<?php echo basename(get_permalink()); ?>">

                    <?php get_template_part("inc/img/mastermap");?>

                    <style>
                    .sidebar-map <?php echo '#'. basename(get_permalink());

                    ?> {
                        fill: #454545;
                    }
                    </style>
                </div>
            </div>
        </div>
        <div class="safari-content">
            <h3 class="heading heading__5 mt3"><?php the_field('sub_heading');?></h3>
            <p><?php the_field('main_copy');?></p>
            <?php get_template_part('template-parts/flexible-gallery');?>
        </div>

        <?php if (get_field('quote')):?>
        <div class="quote">
            <?php get_template_part("inc/img/quote"); ?>
            <p class="copy"><?php the_field('quote');?></p>
            <p class="attrib"><?php the_field('quote_attrib');?></p>
        </div>
        <?php endif;?>
    </div>
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



<div class="container-overflow-right mb2">
    <div class="content-wrapper light-wrapper">
        <div class="country-leaders">
            <div class="container">
                <div id="east" class="region-map"><?php get_template_part("inc/img/mastermap");?></div>
                <div class="region-title accordion_tab">
                    <div class="top-bar">
                        <h3 class="heading heading__4">Eastern Africa</h3><span
                            class="button__arrowright"><?php get_template_part("inc/img/arrow");?></span>
                    </div>



                    <?php echo term_description( '27','description' ); ?>
                </div>
                <div class="country-feed">

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

<div class="container-overflow-right mb2">
    <div class="content-wrapper light-wrapper">
        <div class="country-leaders">
            <div class="container">
                <div id="southern" class="region-map"><?php get_template_part("inc/img/mastermap");?></div>
                <div class="region-title accordion_tab">
                    <div class="top-bar">
                        <h3 class="heading heading__4">Southern Africa</h3><span
                            class="button__arrowright"><?php get_template_part("inc/img/arrow");?></span>
                    </div>



                    <p class="region-copy"><?php echo term_description( '28','description' ); ?></p>
                    <div class="country-feed">

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
</div>

<div class="container-overflow-right mb2">
    <div class="content-wrapper light-wrapper">
        <div class="country-leaders">
            <div class="container">
                <div id="central" class="region-map"><?php get_template_part("inc/img/mastermap");?></div>
                <div class="region-title accordion_tab">
                    <div class="top-bar">
                        <h3 class="heading heading__4">Central Africa</h3><span
                            class="button__arrowright"><?php get_template_part("inc/img/arrow");?></span>
                    </div>



                    <p class="region-copy"><?php echo term_description( '29','description' ); ?></p>
                    <div class="country-feed">

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
</div>

<div class="container-overflow-right mb2">
    <div class="content-wrapper light-wrapper">
        <div class="country-leaders">
            <div class="container">
                <div id="ocean" class="region-map"><?php get_template_part("inc/img/mastermap");?></div>
                <div class="region-title accordion_tab">

                    <div class="top-bar">
                        <h3 class="heading heading__4">Indian
                            Ocean</h3><span
                            class="button__arrowright"><?php get_template_part("inc/img/arrow");?></span>
                    </div>


                    <p class="region-copy"><?php echo term_description( '30','description' ); ?></p>
                    <div class="country-feed">

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
</div>


</div>
<!--wrapper-->

<?php get_footer();?>