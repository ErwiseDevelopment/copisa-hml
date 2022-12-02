<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 *
 * Template Name: Modelo Página Onde Estamos com Menu Lateral
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    Onde estamos
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="mt-2 mb-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-3">
                        
                        <?php
                            $child_pages = wp_list_pages( array(
                                'post_type'   => 'page',
                                'title_li'    => '',
                                'child_of'    => $post->post_parent,
                                'sort_column' => 'menu_order', //campo alterado por raphael
                                'echo'        => 0
                            ));
                        ?>

                        <ul class="l-template-menu__menu pl-0 js-pages">
                            <!-- loop -->
                            <?php echo $child_pages; ?>
                            <!-- end loop -->
                        </ul>
                    </div>

                    <div class="col-lg-9">
                        
                        <div class="row">
                            
                            <!-- loop -->
                            <?php for( $i = 0; $i < 3; $i++ ) { ?>
                                <div class="col-12 my-3 my-lg-2">

                                    <div class="row">

                                        <div class="col-lg-8">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/DSC01860-958x718-1.png' ) ?>"
                                            alt="">
                                        </div>

                                        <div class="col-lg-4">

                                            <div class="l-template-community__box u-bg-folk-white">

                                                <div>

                                                    <p class="d-inline-block u-font-size-10 u-font-weight-semibold text-center u-color-folk-bold-electric-blue u-bg-folk-golden py-1 px-3">
                                                        Comunidade Terapêutica
                                                    </p>

                                                    <h3 class="l-our-communities__title u-line-height-100 u-font-weight-bold u-color-folk-bold-electric-blue">
                                                        Comunidade
                                                        Lar Dom Bosco
                                                    </h3>

                                                    <div class="d-flex align-items-center">
                                                        <span class="px:u-w-32 px:u-h-32 u-border-2 u-border-color-medium-electric-blue rounded-pill u-icon__free u-icon__phone-alt d-flex justify-content-center align-items-center u-font-size-0 u-font-weight-semibold before::u-font-size-18 u-color-folk-medium-electric-blue">
                                                            Ícone telefone
                                                        </span>

                                                        <p class="u-line-height-100 ml-2 mb-0">
                                                            <span class="u-font-size-12 u-font-weight-regular u-font-family-lato u-color-folk-aluminium">Telefone</span> <br>
                                                            <span class="u-font-size-14 u-font-weight-semibold u-font-family-lato u-color-folk-medium-electric-blue">044 3523 8582</span>
                                                        </p>
                                                    </div>

                                                    <p class="u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-color-folk-aluminium mt-4">
                                                        BR 369 Km 02, Saída para Cascavel <br>
                                                        Cx. Postal 288 <br>
                                                        Cep: 85370 000 – Campo Mourão PR
                                                    </p>

                                                    <div class="row justify-content-center">

                                                        <div class="col-8">

                                                            <a 
                                                            class="l-template-community__info w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-10 u-font-weight-bold u-font-family-nunito text-center text-decoration-none text-uppercase u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                                                            href="#">
                                                                Mais informações
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<!-- institutional newsletter -->
<?php echo get_template_part( 'template-parts/content', 'institutional-newsletter' ) ?>
<!-- end institutional newsletter -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
