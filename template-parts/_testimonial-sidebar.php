<div class="carousel-wrapper">
    <div class="sidequote-nav">
        <div class="testimonial-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
        <div class="testimonial-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
    </div>
    <div class="owl-carousel detail-carousel">

        <?php if( have_rows('testimonial', 'options') ):
					while( have_rows('testimonial', 'options') ): the_row();?>

        <div class="quote">
            <p class="sidebar-copy"><?php the_sub_field('quote');?></p>
            <p class="sidebar-attrib"><?php the_sub_field('attrib');?></p>

        </div>
        <?php endwhile; endif;?>
    </div>

</div>