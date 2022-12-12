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


get_header();
?>

<div id="primary">
<main id="main">

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
<section class="mt-2 mb-5 pb-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-md-9">
                        <?php
                            $alt_title = get_the_title();

                            the_post_thumbnail( 'post-thumbnail', 
                                array(
                                    'class' => 'img-fluid w-100 u-object-fit-cover',
                                    'alt'   => $alt_title
                            ));
                        ?>

                        <div class="l-template-menu__content mt-4">
                        <?php $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'video',
                                        'order'          => 'DESC',
                                        'post_status' => 'publish',
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'cat',
                                                'field'    => 'slug',
                                                'terms'    => 'suporte',
                                            )
                                            ));
                                        

                            $videos = new WP_Query( $args );

                            if( $videos->have_posts() ) :
                                while( $videos->have_posts() ) : $videos->the_post();

                        ?>
                            <div style="padding:56.25% 0 0 0;position:relative;" class="mb-5">
                                <iframe src="https://player.vimeo.com/video/<?php echo get_field('video_id')?>" 
                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" 
                                style="position:absolute;top:0;left:0;width:100%;height:100%;" title="123123">
                                </iframe>
                            </div>

                            <?php 
                                    endwhile;
                                endif;
                                
                                wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<?php endwhile; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
