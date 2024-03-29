<?php
/**
 * The main front page file.
 *
 *
 * @package roxymarie
 */
get_header(); ?>

    <div id="page">
        <div class="city-container">
            <div class="col-top">

                <div class="service">
                    <h2 class="title">Photograpy Retouching</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>

                <div class="service">
                    <h2 class="title">Product Photography</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>

                <div class="service">
                    <h2 class="title">Archiving/Digitalization</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>

            </div>


            <div class="col-bottom">

                <div class="service">
                    <h2 class="title">Digital Photo Restoration</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>

                <div class="service">
                    <h2 class="title">Real Estate Photography</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>

                <div class="service">
                    <h2 class="title">Photo and Video Sessions</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-images.jpg" alt="Logo" class="service-img">
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>