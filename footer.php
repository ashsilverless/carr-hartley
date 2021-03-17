<?php
/**
 * The template for displaying the footer
 * @package silverlessstudio
 */
?>
</main>
<?php $footerImage = get_field('background_image', 'options');?>
<footer class="footer">
    <div class="wrapper">
        <div class="container-overflow-right">
            <div class="content-wrapper image-wrapper dark-overlay"
                style="background:url(<?php echo $footerImage['url'];?>);">
                <div class="container">
                    <div class="footer-upper-content">
                        <h2 class="heading heading__2">We'd Love To Talk<span class="no-wrap"> Safari With You</span>
                        </h2>
                        <span class="link-highlight"></span>
                        <a href="/contact" class="button button__arrowright button__light">Please Get In
                            Touch<?php get_template_part("inc/img/arrow");?></a>

                    </div>
                </div>
            </div>
            <div class="content-wrapper dark-wrapper">
                <div class="container">
                    <div class="footer-contact">
                        <h2 class="heading heading__6">Support</h2>
                        <p>Phone: <a href="tel:<?php the_field('phone_number', 'options');?>"><?php the_field('phone_number', 'options');?></a>
                        </p>
                        <p>Email: <a href="mailto:<?php the_field('email_-_general', 'options');?>" target="_blank"><?php the_field('email_-_general', 'options');?></a>
                        </p>

                        <?php get_template_part("template-parts/social");?>


                    </div>
                    <div class="footer-links">
                        <h2 class="heading heading__6">Links</h2>
                        <?php wp_nav_menu(array(
                    'theme_location'  => 'footer-menu',
                    'container_class' => 'footerMenu'
                ));?>
                    </div>
                </div>
            </div>
            <div class="content-wrapper darkest-wrapper">
                <div class="container">
                    <div class="mandatory">
                        <p>© Carr-Hartley Safaris <?php echo date('Y');?> All Rights Reserved
                            <span class="no-wrap">
                                <a href="/privacy-policy/">Privacy policy</a>
                                <a href="/terms-conditions/">Terms & Conditions</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>