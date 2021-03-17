<?php
/**
 * ============== Template Name: Home Page
 *
 * @package carr-hartley
 */
get_header();?>

<div class="container content">
    <div class="col">
        <div class="slide-wrapper">
            <?php if( have_rows('top_carousel') ):
			$i = 1;
			while( have_rows('top_carousel') ): the_row();
			$slideType = get_sub_field('slide_type');
			if (get_sub_field('background_image')):
			$slideImage = get_sub_field('background_image');
			elseif (get_sub_field('background_colour')):
			$slideColor = get_sub_field('background_colour');
			endif;?>

            <div class="pad"></div>

            <div id="slide<?php echo $i;?>" class="slide slide<?php echo $i;?> <?php echo $slideType;?>"
                ref-slide="<?php echo $i;?>"
                style="background:url(<?php echo $slideImage['url'];?>); background-color:<?php echo $slideColor;?>">
                <div class="container">
                    <!-- <?php

					$video = get_sub_field("background_video");

					if($video): ?>

                    <video autoplay muted id="myVideo">
                        <source src="<?php echo $video['url'];?>" type="video/mp4">
                    </video>

                    <?php endif; ?> -->
                    <?php if($slideType == 'first'):?>
                    <h3 class="heading heading__1"><?php the_sub_field('heading');?></h3>
                    <div class="inner-content">
                        <h2 class="heading heading__5 mb2"><?php the_sub_field('copy');?></h2>


                        <div class="first-page-nav">
                            <a href="#slide2"
                                class="heading__4 button button__arrowdown button__light"><?php get_template_part("inc/img/arrow");?>Explore
                                With Us</a>
                        </div>
                    </div>
                    <?php elseif ($slideType == 'work'):?>
                    <div class="inner-content">
                        <h2 class="heading heading__2"><?php the_sub_field('heading');?></h2>
                        <p><?php the_sub_field('copy');?></p>
                        <a href="<?php the_sub_field('button_target');?>"
                            class="heading__4 button button__arrowright button__light button__lg"><?php the_sub_field('button_text');?><?php get_template_part("inc/img/arrow");?></a>
                    </div>
                    <?php elseif ($slideType == 'cta'):?>
                    CTA
                    <?php endif;?>

                </div>
                <!--container-->
            </div>
            <!--slide-->

            <?php $i++; endwhile; endif;?>
        </div>

    </div>
</div>

</div>
<!--outer-container-->

<?php get_template_part('template-parts/_testimonial-section');?>

<?php get_template_part('template-parts/latestnews');?>

</div>
<!--wrapper-->

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/io-compiled.js"></script>

<script>
const slides = document.querySelectorAll(".slide");
const nav = document.querySelectorAll(".slide-nav__item");
observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            var currentSlide = entry.target.getAttribute('ref-slide');
            var currentNav = nav[(currentSlide - 1)];
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                currentNav.classList.add('hit');
            } else {
                entry.target.classList.remove("active");
                currentNav.classList.remove('hit');
            }
        });
    }, {
        threshold: [0.5],
        trackVisibility: true,
        delay: 100
    });
var s = 0;
slides.forEach(slide => {
    observer.observe(slide);
});

const navSwitch = document.querySelector('.slide-wrapper');
const navWrapper = document.querySelector('.slide-nav');
navObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            navWrapper.classList.add('active');
        } else {
            navWrapper.classList.remove('active');
        }
    });
});

navObserver.observe(navSwitch);
</script>

<?php get_footer();?>