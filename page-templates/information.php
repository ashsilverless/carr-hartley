<?php
/**
 * ============== Template Name: Information
 *
 * @package carr-hartley
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right info-hero content">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>

</div>
<div class="outer-container info-content">
    <div class="container">

        <div class="contact-details sub-menu">
            <?php wp_nav_menu(array(
                    'theme_location'  => 'info-menu',
                    'container_class' => 'sticky'
                ));?>
        </div>


        <div class="text-content">
            <h3 class="heading heading__2 heading__light"><?php the_field('heading');?></h3>
            <?php the_field('copy');?>
            <?php get_template_part("inc/img/scrollarrow");?>
            <div class="text-content mt5">

                <?php if( have_rows('page_copy') ):
    			while( have_rows('page_copy') ): the_row();?>
                <p class="sub-heading"><?php the_sub_field('sub_heading');?></p>
                <?php the_sub_field('copy');?>
                <?php endwhile; endif;?>
            </div>
        </div>


        <?php if( have_rows('info_content') ): ?>
    <?php while( have_rows('info_content') ): the_row(); ?>
        <?php if( get_row_layout() == 'text_area' ): ?>
            <div class="text-content mt5">
            <?php the_sub_field('additional_copy'); ?>
            </div>
        <?php elseif( get_row_layout() == 'file_download' ): 
            $file = get_sub_field('download_file');
            if( $file ):?>
                <div class="text-content download-file mt2">
                <p class="sub-heading"><a href="<?php echo $file['url']; ?>" ><?php the_sub_field('file_title');?></a></p>
            <p><?php the_sub_field('file_description');?></p>
            <a class="download-link" href="<?php echo $file['url']; ?>" ><?php get_template_part("inc/img/arrow");?><span class="download-text">Download</span></a>
            </div>
        <?php endif; ?><?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>



<?php if( have_rows('accordian') ): 
    $counter = 0; ?>
    <div class="text-content accordion-outer mt5">
    <?php while( have_rows('accordian') ): the_row();
    $counter++; ?>
        <button class="info-accordion"><span class="auto-counter"><?php echo sprintf("%'.02d\n",$counter);?>.</span> <span><?php the_sub_field('accordian_header');?></span><?php get_template_part("inc/img/arrow");?></button>
<div class="info-panel">
<?php the_sub_field('accordian_text');?>
</div>
    <?php endwhile; ?>
</div>
<?php endif; ?>







       

        <div class="text-content mt5">

            <?php if( have_rows('page_copy') ):
    			while( have_rows('page_copy') ): the_row();?>
            <p><?php the_sub_field('additional_copy');?></p>
            <?php endwhile; endif;?>
        </div>

        <?php get_template_part('template-parts/flexible-gallery');?>
    </div>
</div>

<?php get_template_part('template-parts/latestnews');?>

</div>
<!--wrapper-->

<?php get_footer();?>