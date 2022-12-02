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
                    <?php 
                        $editorial_slug_current = 'comissoes-departamentos';
                        $editorial_id_current = 27;
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'governo',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'governo-categoria',
                                    'field'    => 'slug',
                                    'terms'    => array( $editorial_slug_current )
                                )
                                ),
                            'order'          => 'DESC'
                        );

                        $posts_gov = new WP_Query( $args );

                        if( $posts_gov->have_posts() ) :
                            while( $posts_gov->have_posts() ) : $posts_gov->the_post();
                    ?>
                        <div class="col-md-6 col-lg-4 my-3">

                            <div class="card h-100 border-0">

                                <div class="card-img">
                                    <!-- <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/team5.jpg' ) ?>"
                                    alt=""> -->

                                    <?php 
                                        $alt_title = get_the_title();

                                        the_post_thumbnail( 'post-thumbnail',
                                            array(
                                                'class' => 'img-fluid w-100 u-object-fit-cover',
                                                'alt'   => $alt_title
                                        ));
                                    ?>
                                </div>

                                <div class="card-body">

                                    <h3 class="u-font-weight-bold u-color-folk-bold-electric-blue">
                                        <!-- Kevin Martin -->
                                        <?php the_title() ?>
                                    </h3>

                                   <!--<p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
                                        
                                        <?php
                                            $category_current = get_the_terms( get_the_ID(), 'governo-categoria' );
                                            echo $category_current[0]->name;
                                        ?>
                                    </p>
                                    -->
                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
                                        <!-- Founder -->
                                        <?php
                                            echo get_field('funcao')
                                        ?>
                                    </p>
                                    <ul class="d-flex pl-0">
                                        

                                        <?php if( get_field( 'facebook' ) ) : ?>
                                            <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                                <a 
                                                class="u-icon__brands u-icon__facebook w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-facebook" 
                                                href="<?php echo get_field( 'facebook' ) ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Facebook
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if( get_field( 'instagram' ) ) : ?>
                                            <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                                <a 
                                                class="u-icon__brands u-icon__instagram w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram" 
                                                href="<?php echo get_field( 'instagram' ) ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Instagram
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if( get_field( 'youtube' ) ) : ?>
                                            <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                                <a 
                                                class="u-icon__brands u-icon__youtube w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-youtube" 
                                                href="<?php echo get_field( 'youtube' ) ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Youtube
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if( get_field( 'e-mail' ) ) : ?>
                                            <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                                <a 
                                                class="u-icon__free u-icon__envelope w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue" 
                                                href="<?php echo get_field( 'e-mail' ) ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do E-mail
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if( get_field( 'whatsapp' ) ) : ?>
                                            <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                                                <a 
                                                class="u-icon__brands u-icon__whatsapp w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-whatsapp" 
                                                href="<?php echo get_field( 'whatsapp' ) ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Whatsapp
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php 
                            endwhile;
                        endif;
                        
                        wp_reset_query();
                    ?>
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
