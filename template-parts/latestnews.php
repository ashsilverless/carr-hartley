<div class="outer-container">
    <div class="container news-feed mt5">
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
                <span class="dark-highlight"></span>
                <a href="<?php the_permalink(); ?>" class="button button__arrowright">Read
                    More<?php get_template_part("inc/img/arrow");?></a>
        </div>
        <?php endwhile; wp_reset_postdata();endif; ?>
    </div>
</div>