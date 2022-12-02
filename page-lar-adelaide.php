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
                    Nossos Materiais
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="my-5 pt-4">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-md-9">
                       <a href="<?php echo get_field('link_banner_materiais', 'option') ?>"> <img
                        class="img-fluid"
                        src="<?php echo get_field('banner_materiais','option') ?>"
                        alt="destaque"></a>
                    </div>
                    
                    <div class="col-md-3 mt-3 mt-md-0">

                        <div>
                            <form class="js-search-form" method="GET" action="/">

                                <div class="row">

                                    <div class="col-12">
                                        <input
                                        class="w-100 border-0 d-block u-font-size-14 u-font-weight-semibold u-color-folk-bold-eletric-blue u-bg-folk-light-gray py-4 pl-3 pr-5"
                                        type="search"
                                        name="s"
                                        placeholder="Procurar">
                                        <span class="l-page-news__icon js-search-submit"></span>
                                    </div>
                                </div>
                            </form>                            
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="border mt-4 p-4">

                                    <h6 class="xxl:u-font-size-20 u-font-weight-bold u-color-folk-medium-electric-blue">
                                        Categorias
                                    </h6>

                                    <ul class="pl-0">
                                        <?php foreach( get_categories_highlight() as $category ) : ?>
                                                <li class="l-page-news__categories u-list-style-none my-3">
                                                
                                                    <a 
                                                    class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular text-decoration-none u-color-folk-aluminium"
                                                    href="<?php echo get_home_url( null, '/noticias/?cat=' . strtolower( $category ) ); ?>">
                                                        <!-- Institucional -->
                                                        <?php echo $category; ?>
                                                    </a>

                                                    <span class="l-page-news__categories__circle"></span>
                                                </li>
                                        <?php endforeach; ?>

                                        <li class="l-page-news__categories u-list-style-none my-3">
                                            
                                            <a 
                                            class="u-font-size-13 xxl:u-font-size-16 u-font-weight-semibold text-decoration-none u-color-folk-bold-electric-blue"
                                            href="<?php echo get_home_url( null, 'noticias' ); ?>">
                                                Todas as Notícias
                                            </a>

                                            <span class="l-page-news__categories__circle"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-11">

                <div class="row">

                    <?php 
                        $args = array(
                            'posts_per_page' => 24,
                            'post_type'      => 'ebook',
                            'order'          => 'DESC',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'ebook-categoria',
                                    'field'    => 'slug',
                                    'terms'    => array( 'lar-adelaide' ),
                                )
                            )
                        );
                       
                        $ebooks = new WP_Query( $args );

                        if( $ebooks->have_posts() ) :
                            while( $ebooks->have_posts() ) : $ebooks->the_post();
                    ?>
                                <div class="col-md-6 col-lg-4 my-3">

                                    <a 
                                    class="card border-0 text-decoration-none"
                                    href="<?php echo get_field( 'link' ) ?>" target="_blank">

                                        <div class="l-our-materials__card-img card-img d-flex justify-content-center align-items-center p-3">
                                            <!-- <img
                                            class="img-fluid"
                                            src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup-1.png' ) ?>"
                                            alt=""> -->

                                            <?php 
                                                $alt_title = get_the_title();

                                                the_post_thumbnail( 'post-thumbnail',
                                                    array(
                                                        'class' => 'img-fluid',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body">

                                            <p class="l-our-materials__category u-font-weight-semibold text-center u-color-folk-medium-electric-blue">
                                                E-book
                                            </p>

                                            <h4 class="l-our-materials__title u-font-weight-bold text-center u-color-folk-dark-grayish-navy">
                                                <!-- Oração Pessoal - Guia
                                                para Iniciantes -->
                                                <?php the_title() ?>
                                            </h4>

                                            <div class="row justify-content-center">

                                                <div class="col-8 mt-3">

                                                    <p class="w-100 u-box-shadow-pattern u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2">
                                                        Baixar
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
</section>

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
