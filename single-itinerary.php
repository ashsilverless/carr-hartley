<?php
/**
 * ============== Template Name: Itinerary
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
                <h3 class="heading heading__2 heading__light"><?php the_field('heading');?></h3>
                <p><?php the_field('copy');?></p>
                <?php get_template_part("inc/img/scrollarrow");?>
            </div>

        </div>
    </div>
</div>
<div class="outer-container mb5">
    <div class="container">
        <div class="toggle-list work-detail sticky">
            <div class="sticky sidebar-quote">
                <?php get_template_part("inc/img/quote"); ?>
                <?php get_template_part('template-parts/_testimonial-sidebar');?>
            </div>
        </div>
        <div class="itin-copy">
            <h3 class="heading heading__5"><?php the_field('sub_heading');?></h3>
            <p><?php the_field('main_copy');?></p>
        </div>
        <div class="accordion-wrapper">
            <?php

// check if the repeater field has rows of data
if( have_rows('accordion_repeater') ):
	
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('accordion_repeater') ) : the_row();
		
        $days = get_sub_field('day_numbers');    
        $header = get_sub_field('accordion_header');
		$content = get_sub_field('accordion_content');
        $image = get_sub_field('planner_image');
	?>
            <div class="accordion-inner">
                <button class="accordion"><span class="itin-days-title heading__6"><?php echo $days; ?></span><span
                        class="itin-heading-title heading__7"><?php echo $header; ?></span><?php get_template_part("inc/img/arrow");?></button>
                <div class="panel">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $content; ?></p>
                    <div class="panel__content">
                        <p class="panel__link">Contact Us To Find Out More About This Itinerary</p>
                        <?php get_template_part("inc/img/arrow");?>
                    </div>

                </div>
            </div>

            <?php
	endwhile; //End the loop 

else :

    // no rows found
    echo 'Come back tomorrow';

endif; ?>
        </div>
        <script type='text/javascript'>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
        </script>

        <?php get_template_part('template-parts/flexible-gallery');?>

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
            <span class="dark-highlight"></span>
        </div>
    </div>
</div>


<?php get_template_part('template-parts/othersafaris');?>



</div>
<!--wrapper-->

<?php get_footer();?>