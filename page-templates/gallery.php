<?php
/**
 * ============== Template Name: Gallery
 *
 * @package carr-hartley
 */
get_header();?>

</div>
<!--outer-container-->
<div class="outer-container">
    <div class="container">
        <div class="controls">
            <!-- Get a list of all categories in the database, excluding those not assigned to posts -->
            <span class="filter-heading">Filter</span>
            <ul>
                <li type="button" data-filter="all">All</li>
                <li type="button" data-filter=".nature">Nature</li>
                <li type="button" data-filter=".scenery">Scenery</li>
                <li type="button" data-filter=".birds">Birds</li>
            </ul>
        </div>
    </div>
</div>
<div class="outer-container mb10">
    <div class="container content main-gallery">
        <?php get_template_part('template-parts/filtered-gallery');?>
    </div>
</div>
<script>
var mixer = mixitup('.gallery', {
    controls: {
        toggleLogic: 'and'
    }
});
</script>
</div>
<!--wrapper-->

<?php get_footer();?>