<?php /** Header @package silverlessstudio */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $blog_title = get_bloginfo(); ?></title>

    <link rel="stylesheet" href="https://use.typekit.net/ibi2glu.css">
    <!--TYPEKIT INJECT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="cta-contact-header">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <div class="col">
                        <a href="/contact" class="button button__global">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.97 38.86">
                                <defs>
                                    <style>
                                    .cls-1 {
                                        fill: #707070;
                                    }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1"
                                            d="M0,38.86l2.52-9.22c-.64-2.61-1.36-5-1.79-7.41C-1.12,11.76,5.59,2.48,16.07.38A19.13,19.13,0,0,1,38.53,15.11C40.73,26,34.44,35.32,24.86,37.92c-3.55,1-7.26,1.23-10.75-.27a12.37,12.37,0,0,0-9.61,0C3.3,38.06,2,38.31,0,38.86Zm2.54-2.14,2.86-1c2.87-1,5.58-1.52,8.57.21a11,11,0,0,0,6.22,1.25C32.56,36,38.71,25.83,37,16.38S25.61-.22,16.58,1.71C6.15,3.93,0,13.67,2.64,23.74,3.1,25.5,3.75,27.2,4.35,29Z" />
                                        <path class="cls-1"
                                            d="M25.89,21.48c4-.35,5.75,1.44,4.86,4.78-.64,2.43-2.42,3.37-4.87,2.66-8.22-2.37-13-8.16-15.68-15.94-.59-1.7-.47-3.21,1.14-4.42a3.82,3.82,0,0,1,4.17-.67c1.59.79,2.83,2.36,2.21,4.05-1.36,3.73.74,5.91,3,8.12C22.21,21.47,23.76,22.7,25.89,21.48ZM11.73,10.69c1.56,10.16,11.49,17.08,16.69,16.59l1.2-2.56-2.3-2c-4.73,1.3-6.61.62-9.45-3.09-1.69-2.21-2.6-4.51-2-7.37.18-.82-.4-1.8-.76-3.22Z" />
                                    </g>
                                </g>
                            </svg>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-offscreen">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <span class="accent"></span>
                    <div class="col">
                        <?php wp_nav_menu(array(
						'theme_location'  => 'top-bar-menu',
						'container_class' => 'topBarMenu'
					));?>
                        <?php wp_nav_menu(array(
						'theme_location'  => 'main-menu',
						'container_class' => 'mainMenu'
					));?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main>
        <!--main closes in footer-->

        <div class="wrapper">

            <div class="outer-container mobile-nav">
                <div class='sidebar'>
                    <div class="nav-trigger">
                        <div class="hamburger-menu"></div>
                    </div>
                    <div class="quick-links">
                    
                    <a href="<?php echo get_home_url(); ?>" class="icon">
                            <i class="fas fa-home"></i>
                        </a>
                        <a href="/contact" class="icon">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="mailto:hello@silverless.co.uk" class="icon">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <?php get_template_part("template-parts/social");?>
                    </div>
                </div>
                <div class="container content">
                    <a href="<?php echo get_home_url(); ?>" alt="" title="">
                        <?php get_template_part("template-parts/mobilelogo"); ?>
                    </a>
                </div>
            </div>



            <div class="outer-container">
                <div class='sidebar'>
                    <div class=sidebar__top>
                        <a href="<?php echo get_home_url(); ?>" alt="" title="" class="header-logo__link">

                            <?php get_template_part("template-parts/logo"); ?>
                        </a>
                        <div class="nav-trigger">
                            <div class="hamburger-menu"></div>
                            <span>Menu</span>
                        </div>
                    </div>
                    <div class="sidebar__bottom">
                        <div class="slide-nav">
                            <?php if( have_rows('top_carousel') ):
						$i = 1;
						while( have_rows('top_carousel') ): the_row();?>
                            <div id="slide<?php echo $i;?>" class="slide-nav__item" ref-slide="<?php echo $i;?>">0
                                <?php echo $i;?>.</div>

                            <?php $i++; endwhile; endif;?>

                        </div>
                    </div>
                </div>