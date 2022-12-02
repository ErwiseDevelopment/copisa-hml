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
                    Parceiros
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-partners">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            $args = array(
                                'post_type'   => 'page',
                                'page_id'     => 48,
                                'order'       => 'ASC',
                            );
    
                            $child_pages = new WP_Query( $args );

                            if( $child_pages->have_posts() ) :
                                while( $child_pages->have_posts() ) : $child_pages->the_post();
                                    if( have_rows( 'parceiros' ) ) : 
                                        while( have_rows( 'parceiros' ) ) : the_row();
                        ?>
                                            <a 
                                            class="swiper-slide"
                                            href="<?php echo get_sub_field( 'link' ) ?>">
                                                <img
                                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                                src="<?php echo get_sub_field( 'logo' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>
                        <?php
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;

                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
