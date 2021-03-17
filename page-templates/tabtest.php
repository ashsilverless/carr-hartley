<?php
/**
 * ============== Template Name: Tab Test
 *
 * @package carr-hartley
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero content">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>
    <div class="container">
        <div class="content">
            <h3 class="heading heading__2"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>







<div class="container-overflow-right">
    <div id="tabs-wrapper">
        <div class="w3-row">
            <a href="javascript:void(0)" onclick="openCity(event, 'Heritage');">
                <div class="tablink active">Community</div>
            </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'Different');">
                <div class="tablink">Conservation</div>
            </a>
        </div>
    </div>

</div>

<div class="container-overflow-right mb10">
    <div id="Heritage" class="content-wrapper tabbed-wrapper tabcontent">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3">Sub Headline Heritage</h3>
                <?php get_template_part('template-parts/flexible-gallery');?>

            </div>
        </div>
        <div class="container team">
            <?php if( have_rows('team_section') ):
    			while( have_rows('team_section') ): the_row();?>
            <div class="lead-copy">
                <h3 class="heading heading__3"><?php the_sub_field('headline');?></h3>

            </div>
            <div class="members">
                <div class="container">
                    <?php if( have_rows('team_members') ):
                        while( have_rows('team_members') ): the_row();
                        $teamImage = get_sub_field('image');?>
                    <div class="team-member">
                        <div class="image" style="background:url(<?php echo $teamImage['url'];?>);"></div>

                    </div>
                    <div class="guide-copy">
                        <h4 class="heading heading__4"><?php the_sub_field('name');?></h4>
                        <p><?php the_sub_field('position');?></p>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
    <div id="Different" class="content-wrapper tabbed-wrapper tabcontent">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3">Sub Headline Different</h3>
                <?php get_template_part('template-parts/flexible-gallery');?>
            </div>
        </div>
        <div class="container team">
            <?php if( have_rows('team_section') ):
    			while( have_rows('team_section') ): the_row();?>
            <div class="lead-copy">
                <h3 class="heading heading__3"><?php the_sub_field('headline');?></h3>

            </div>
            <div class="members">
                <div class="container">
                    <?php if( have_rows('team_members') ):
                        while( have_rows('team_members') ): the_row();
                        $teamImage = get_sub_field('image');?>
                    <div class="team-member">
                        <div class="image" style="background:url(<?php echo $teamImage['url'];?>);"></div>

                    </div>
                    <div class="guide-copy">
                        <h4 class="heading heading__4"><?php the_sub_field('name');?></h4>
                        <p><?php the_sub_field('position');?></p>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
    <div id="Team" class="content-wrapper tabbed-wrapper tabcontent">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3">Sub Headline Team</h3>
                <?php get_template_part('template-parts/flexible-gallery');?>
            </div>
        </div>
        <div class="container team">
            <?php if( have_rows('team_section') ):
    			while( have_rows('team_section') ): the_row();?>
            <div class="lead-copy">
                <h3 class="heading heading__3"><?php the_sub_field('headline');?></h3>

            </div>
            <div class="members">
                <div class="container">
                    <?php if( have_rows('team_members') ):
                        while( have_rows('team_members') ): the_row();
                        $teamImage = get_sub_field('image');?>
                    <div class="team-member">
                        <div class="image" style="background:url(<?php echo $teamImage['url'];?>);"></div>

                    </div>
                    <div class="guide-copy">
                        <h4 class="heading heading__4"><?php the_sub_field('name');?></h4>
                        <p><?php the_sub_field('position');?></p>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</div>
<div class="outer-container">
    <div class="container news-feed">
        <h4 class="heading heading__3">Latest News</h4>
        <?php $silverlessPosts = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=>3
			));
			if ( $silverlessPosts->have_posts() ) :
			while ( $silverlessPosts->have_posts() ) :
			$silverlessPosts->the_post();
			$postThumbImage = get_field('thumbnail_image'); ?>
        <div class="news-feed__item">
            <div class="image" style="background:url(<?php echo $postThumbImage['url'];?>);"><a
                    href="<?php the_permalink(); ?>"></a></div>
            <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
            <h3 class="heading heading__7"><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="button button__arrowright">Read
                    More<?php get_template_part("inc/img/arrow");?></a>
        </div>
        <?php endwhile; wp_reset_postdata();endif; ?>
    </div>
</div>
</div>
<!--wrapper-->

<?php get_footer();?>