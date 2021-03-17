<?php
/**
 * ============== Template Name: About Us
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
            <h3 class="heading heading__2 heading__light"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/scrollarrow");?>
        </div>
    </div>
</div>







<div class="container-overflow-right">
    <div id="tabs-wrapper">
        <div class="w3-row">
            <a href="javascript:void(0)" onclick="openCity(event, 'heritage');">
                <div class="tablink active">Heritage</div>
            </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'different');">
                <div class="tablink">Why We Are Different</div>
            </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'team');">
                <div class="tablink">Our Guides</div>
            </a>
        </div>
    </div>

</div>

<div class="container-overflow-right mb10">
    <div id="heritage" class="content-wrapper tabbed-wrapper tabcontent">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3"><?php the_field('tab1_heading');?></h3>
                <div class="tab-copy"><?php the_field('tab1_copy');?></div>
                <div class="gallery-captions">
                    <?php if (get_field('left_image_caption')) {?>
                    <h3 class="heading heading__6"><?php get_template_part("inc/img/quote"); ?>Picture Captions</h3>
                    <ol>
                        <li><?php the_field('left_image_caption'); ?></li>
                        <li><?php the_field('right_image_caption'); ?></li>
                        <li><?php the_field('main_image_caption'); ?></li>
                    </ol>
                    <?php }?>
                </div>
                <div class="gallery">
                    <div class="gallery__halves">
                        <a href="<?php the_field('left_image'); ?>" class="lightbox-gallery"
                            alt="<?php the_field('left_image_caption'); ?>"
                            style="background-image: url(<?php the_field('left_image'); ?>); height:30vh;">
                            <!--<?php echo $rightImage['caption']; ?>-->
                            <?php if (get_field('left_image_caption')) {?>    
                                <span class="caption-count">1</span>
                            <?php }?>
                        </a>
                        <a href="<?php the_field('right_image'); ?>" class="lightbox-gallery"
                            alt="<?php the_field('right_image_caption'); ?>"
                            style="background-image: url(<?php the_field('right_image'); ?>); height:30vh;">
                            <!--<?php echo $rightImage['caption']; ?>-->
                            <?php if (get_field('right_image_caption')) {?>    
                                <span class="caption-count">2</span>
                            <?php }?>
                        </a>
                    </div>
                    <div class="gallery__fullwidth">
                        <div class="inline-wrapper">
                            <a href="<?php the_field('large_image'); ?>" class="lightbox-gallery"
                                alt="<?php the_field('main_image_caption'); ?>"
                                style="background-image: url(<?php the_field('large_image'); ?>); height:30vh;">
                                <!--<?php echo $rightImage['caption']; ?>-->
                                <?php if (get_field('main_image_caption')) {?>    
                                    <span class="caption-count">3</span>
                                <?php }?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="different" class="content-wrapper tabbed-wrapper tabcontent" style="display:none">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3"><?php the_field('tab2_heading');?></h3>
                <div class="tab-copy"><?php the_field('tab2_copy');?></div>
                <div class="gallery-captions">
                <?php if (get_field('2left_image_caption')) {?>
                    <h3 class="heading heading__6"><?php get_template_part("inc/img/quote"); ?>Picture Captions</h3>
                    <ol>
                        <li><?php the_field('2left_image_caption'); ?></li>
                        <li><?php the_field('2right_image_caption'); ?></li>
                        <li><?php the_field('2main_image_caption'); ?></li>
                    </ol>
                <?php }?>
                </div>
                <div class="gallery">
                    <div class="gallery__halves">
                        <a href="<?php the_field('2left_image'); ?>" class="lightbox-gallery"
                            alt="<?php the_field('2left_image_caption'); ?>"
                            style="background-image: url(<?php the_field('2left_image'); ?>); height:30vh;">
                            <!--<?php echo $rightImage['caption']; ?>-->
                            <?php if (get_field('2left_image_caption')) {?>    
                                <span class="caption-count">1</span>
                            <?php }?>
                        </a>
                        <a href="<?php the_field('2right_image'); ?>" class="lightbox-gallery"
                            alt="<?php the_field('2right_image_caption'); ?>"
                            style="background-image: url(<?php the_field('2right_image'); ?>); height:30vh;">
                            <!--<?php echo $rightImage['caption']; ?>-->
                            <?php if (get_field('2right_image_caption')) {?>    
                                <span class="caption-count">2</span>
                            <?php }?>
                        </a>
                    </div>
                    <div class="gallery__fullwidth">
                        <div class="inline-wrapper">
                            <a href="<?php the_field('2large_image'); ?>" class="lightbox-gallery"
                                alt="<?php the_field('2main_image_caption'); ?>"
                                style="background-image: url(<?php the_field('2large_image'); ?>); height:30vh;">
                                <!--<?php echo $rightImage['caption']; ?>-->
                                    <?php if (get_field('2large_image_caption')) {?>    
                                    <span class="caption-count">3</span>
                                <?php }?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="team" class="content-wrapper tabbed-wrapper tabcontent" style="display:none">

        <div class="container team">
            <div class="lead-copy">
                <h3 class="heading heading__3"><?php the_sub_field('headline');?></h3>

            </div>
            <div class="members">
                <div class="container">
                    <?php if( have_rows('team_section') ):
                        while( have_rows('team_section') ): the_row();
                        $teamImage = get_sub_field('image');?>
                    <div class="team-member">
                        <?php if(get_sub_field('image')):?>
                        <div class="image" style="background:url(<?php echo $teamImage['url'];?>);"></div>
                        <?php endif;?>

                    </div>
                    <div class="guide-copy">
                        <h4 class="heading heading__4"><?php the_sub_field('name');?></h4>
                        <p><?php the_sub_field('bio');?></p>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/latestnews');?>
</div>
<!--wrapper-->
<script>
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("tabcontent");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "grid";
    evt.currentTarget.firstElementChild.className += " active";
}
</script>
<?php get_footer();?>