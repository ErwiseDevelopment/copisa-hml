<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    <?php the_title() ?>
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-3">

                <div class="row">

                    <?php 
                        if( isset( $_GET[ 'cat' ] ) ) {
                            $editorial_slug_current = $_GET[ 'cat' ];

                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'Galeria',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'galeria-categoria',
                                        'field'    => 'slug',
                                        'terms'    => array( $editorial_slug_current )
                                    )
                                )
                            );
                        } else {
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'Galeria',
                            );
                        }

                        $gallery = new WP_Query( $args );
                        $count = -1;

                        if( $gallery->have_posts() ) :
                            while( $gallery->have_posts() ) : $gallery->the_post();

                                $photos = get_field( 'galeria' );

                                if( $photos ) :
                                    foreach( $photos as $photo ) :     
                                        $count++;
                    ?>
                                        <div class="col-md-6 col-lg-3 js-photos my-2 px-2" data-value="<?php echo $count; ?>">
                                            <img
                                            class="img-fluid w-100 h-100 u-object-fit-cover"
                                            src="<?php echo $photo['url'] ?>"
                                            alt="<?php echo $photo['title']; ?>">
                                        </div>
                    <?php
                                    endforeach;
                                endif;
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<!-- modal -->
<div class="l-modal-photos js-modal-photos">

    <div class="l-modal-photos__overlay js-modal-photos-close"></div>

    <div class="container">

        <div class="row justify-content-center">
                        
            <div class="col-lg-10">

                <div class="row justify-content-end">
                
                    <div class="col-lg-3">
                        <p class="w-100 rounded u-font-size-14 u-font-weight-bold text-center hover:u-color-folk-white u-bg-folk-white hover:u-bg-folk-golden js-modal-photos-close u-cursor-pointer py-2">
                            Fechar
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-1 d-none d-lg-block">
                <div class="l-our-communities__buttons__item swiper-button-prev d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-photos" style="overflow:visible;position:absolute!important">
                    <img class="img-fluid" src="https://copiosa.erwisedev-hml.com.br/wp-content/themes/wp-bootstrap-starter/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png" alt="Ícone Seta Esquerda">
                </div>
            </div>

            <div class="col-10">

                <!-- swiper -->
                <div class="swiper-container js-swiper-photos">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            $count = -1;

                            foreach( $photos as $photo ) : 
                                $count++;
                        ?>
                            <div class="swiper-slide" data-value="<?php echo $count; ?>">
                                <img
                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                src="<?php echo $photo['url'] ?>"
                                alt="<?php echo $photo['title']; ?>">
                            </div>
                        <?php endforeach; ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-1 d-none d-lg-block">
                <div class="l-our-communities__buttons__item swiper-button-next d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-photos" style="overflow:visible;position:absolute!important">
                    <img class="img-fluid" src="https://copiosa.erwisedev-hml.com.br/wp-content/themes/wp-bootstrap-starter/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png" alt="Ícone Seta Direita">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
