<?php get_header();
/**
 * Default Page Template
 *
 * @package silverlessstudio
 */
?>
<h1 class="heading heading__5 special">ATOMS</h1>

<div>
    <h1 class="heading heading__1">Heading 1</h1>
    <h1 class="heading heading__2">Heading 2</h1>
    <h1 class="heading heading__3">Heading 3</h1>
    <h1 class="heading heading__4">Heading 4</h1>
    <h1 class="heading heading__5">Heading 5</h1>
    <h1 class="heading heading__6">Heading 6</h1>
    <h1 class="heading heading__7">Heading 7</h1>

    <p style="width:500px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <?php get_template_part("inc/img/arrow"); ?>
    <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"></i>
</div>

<div>
    <a href="" class="button" target="_blank">Standard Button</a>
    <a href="" class="button button__ghost" target="_blank">Ghost Button</a>
</div>

<h1 class="heading heading__5 special">MOLECULES</h1>

<div style="width:500px;">
    <div class="list">
      <div class="list__item">
        <p>This is a standard list</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

        <div class="list__item">
        <p>This is a bulleted list</p>
        <ul>
          <li>Lorem ipsum</li>
          <li>Ut enim ad minim</li>
          <li>Lorem ipsum</li>
        </ul>
      </div>

          <div class="list__item">
        <p>This is a bulleted list</p>
        <ul>
          <li>Lorem ipsum</li>
          <li>Ut enim ad minim</li>
          <li>Lorem ipsum</li>
        </ul>
      </div>

    </div>
</div>

<div class="lightbox-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464); width:400px;">
<span>Image Title</span><span><i class="fas fa-search-plus"></i></span>
</div>


<h1 class="heading heading__5 special">ORGANISMS</h1>

<div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464); min-height:30vh;">
    <div class="content arrow--down">
        <h1 class="heading heading__1">This is the Header</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="" class="button" target="_blank">Standard Button</a>
        <?php get_template_part("inc/img/arrow"); ?>
    </div>
</div>

<div class="tab-section" style="width:1300px; margin:0 auto; margin-top:5em; margin-bottom:5em;">
    <div class="tab-section__upper">
        <div class="tab-section__upper__item tab-trigger active" data-tab="one">
            <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);">
                <div class="content">
                    <h1 class="heading heading__3">This is the Header</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consequat.</p>
                </div>
            </div>
        </div>
        <div class="tab-section__upper__item tab-trigger" data-tab="two">
            <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);">
                <div class="content">
                    <h1 class="heading heading__3">This is the Header</h1>
                    <p>Ut enim ad minim veniam, quis nomodo consequat.</p>
                </div>
            </div></div>
        <div class="tab-section__upper__item tab-trigger" data-tab="three">
            <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);">
                <div class="content">
                    <h1 class="heading heading__3">This is the Header</h1>
                    <p>Quis nostrud eminim veniam, quis nostrudxercitation ullamco laboris nisi ut. </p>
                </div>
            </div></div>
    </div>
    <div class="tab-section__lower">
        <div class="tab-section__lower__item tab-target one active">
            <div class="content">
                <h1 class="heading heading__5">Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="tab-section__lower__item tab-target two">
            <div class="content">
                <h1 class="heading heading__5">Ut enim ad minim veniam</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="tab-section__lower__item tab-target three">
            <div class="content">
                <h1 class="heading heading__5">This is the Header (three)</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</div>

<div class="" style="width:1100px; margin:0 auto; margin-top:5em; margin-bottom:5em;">
    <div class="carousel-wrapper">
        <div class="owl-carousel detail-carousel">
            <div class="detail-carousel__item">
                <div class="detail-carousel__item__upper">
                    <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                </div>
                <div class="detail-carousel__item__lower">
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
            <div class="detail-carousel__item">
                <div class="detail-carousel__item__upper">
                    <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                </div>
                <div class="detail-carousel__item__lower">
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
            <div class="detail-carousel__item">
                <div class="detail-carousel__item__upper">
                    <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                </div>
                <div class="detail-carousel__item__lower">
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
            <div class="detail-carousel__item">
                <div class="detail-carousel__item__upper">
                    <div class="image-overlay" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                </div>
                <div class="detail-carousel__item__lower">
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
        </div>
        <div class="detail-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
        <div class="detail-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
    </div>
</div>

<div class="" style="width:1100px; margin:0 auto; margin-top:5em; margin-bottom:5em;">

    <div class="feature-toggle">
        <div class="feature-toggle__item">
            <div class="feature-toggle__item__upper">
                <div class="toggle-overlay">
                    <h1 class="heading heading__2">Classic Luxury Safaris</h1>
                    <div class="open-feature">
                        <div class="button button__ghost">See more</div>
                    </div>
                </div>

                <div class="owl-carousel feature-toggle-carousel">
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>




                </div>
                <div class="feature-toggle-carousel__buttons">
                    <div class="feature-toggle-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
                    <div class="feature-toggle-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
                </div>
            </div>
            <div class="feature-toggle__item__lower">
                <div class="map-section">
                    <?php get_template_part("inc/img/map"); ?>
                </div>
                <div class="content">
                    <div class="close-feature">
                        <?php get_template_part("inc/img/arrow"); ?>
                        <span>CLOSE</span>
                    </div>
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
        </div><!--item-->
        <div class="feature-toggle__item">
            <div class="feature-toggle__item__upper">
                <div class="toggle-overlay">
                    <h1 class="heading heading__2">Classic Luxury Safaris</h1>
                    <div class="open-feature">
                        <div class="button button__ghost">See more</div>
                    </div>
                </div>

                <div class="owl-carousel feature-toggle-carousel">
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>




                </div>
                <div class="feature-toggle-carousel__buttons">
                    <div class="feature-toggle-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
                    <div class="feature-toggle-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
                </div>
            </div>
            <div class="feature-toggle__item__lower">
                <div class="map-section">
                    <?php get_template_part("inc/img/map"); ?>
                </div>
                <div class="content">
                    <div class="close-feature">
                        <?php get_template_part("inc/img/arrow"); ?>
                        <span>CLOSE</span>
                    </div>
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
        </div><!--item-->
        <div class="feature-toggle__item">
            <div class="feature-toggle__item__upper">
                <div class="toggle-overlay">
                    <h1 class="heading heading__2">Classic Luxury Safaris</h1>
                    <div class="open-feature">
                        <div class="button button__ghost">See more</div>
                    </div>
                </div>

                <div class="owl-carousel feature-toggle-carousel">
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>
                    <div class="carousel-image" style="background:url(https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1920/1080/75/dam/wdpro-assets/gallery/attractions/animal-kingdom/kilimanjaro-safaris/kilimanjaro-safaris-gallery02.jpg?1550821096464);"></div>




                </div>
                <div class="feature-toggle-carousel__buttons">
                    <div class="feature-toggle-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
                    <div class="feature-toggle-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
                </div>
            </div>
            <div class="feature-toggle__item__lower">
                <div class="map-section">
                    <?php get_template_part("inc/img/map"); ?>
                </div>
                <div class="content">
                    <div class="close-feature">
                        <?php get_template_part("inc/img/arrow"); ?>
                        <span>CLOSE</span>
                    </div>
                    <h1 class="heading heading__5">Classic Luxury Safaris</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="" class="button button__ghost button__ghost--accent" target="_blank">Ghost Button</a>
                </div>
            </div>
        </div><!--item-->
    </div>

</div>







<?php get_footer();?>
