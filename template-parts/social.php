<div class="socials">
    <?php if( have_rows('social_links', 'options') ):
    while( have_rows('social_links', 'options') ): the_row();?>
    <a href="<?php the_sub_field('url');?>"><?php the_sub_field('icon');?></a>
    <?php endwhile; endif;?>
</div>
