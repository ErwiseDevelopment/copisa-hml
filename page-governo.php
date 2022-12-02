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
                    Governo
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 6; $i++ ) { ?>
                        <div class="col-md-6 col-lg-4 my-3">

                            <div class="card h-100 border-0">

                                <div class="card-img">
                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/team5.jpg' ) ?>"
                                    alt="">
                                </div>

                                <div class="card-body">

                                    <h3 class="u-font-weight-bold u-color-folk-bold-electric-blue">
                                        Kevin Martin
                                    </h3>

                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
                                        Founder
                                    </p>

                                    <ul class="d-flex pl-0">

                                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                            <a class="u-icon__brands u-icon__facebook w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-facebook" href="#" target="_blank" rel="noreferrer noopener">
                                                Link do Facebook
                                            </a>
                                        </li>

                                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                            <a class="u-icon__brands u-icon__instagram w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram" href="#" target="_blank" rel="noreferrer noopener">
                                                Link do Instagram
                                            </a>
                                        </li>

                                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                            <a class="u-icon__brands u-icon__youtube w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-youtube" href="#" target="_blank" rel="noreferrer noopener">
                                                Link do Youtube
                                            </a>
                                        </li>

                                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                            <a class="u-icon__free u-icon__envelope w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue" href="#" target="_blank" rel="noreferrer noopener">
                                                Link do E-mail
                                            </a>
                                        </li>

                                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                            <a class="u-icon__brands u-icon__whatsapp w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-whatsapp" href="#" target="_blank" rel="noreferrer noopener">
                                                Link do Whatsapp
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<!-- institutional newsletter -->
<?php echo get_template_part( 'template-parts/content', 'institutional-newsletter' ) ?>
<!-- end institutional newsletter -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->


<?php

get_footer();
