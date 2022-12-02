<?php if( get_field('secao_noticias','option') == 'sessao-noticia-destaque'):?>
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Fique informado!</span> <br>
                    Notícias da Congregação
                </h2>
            </div>

            <?php
                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => 'destaque-home'
                );

                $post_highlight = new WP_Query( $args );

                if( $post_highlight->have_posts() ) :
                    while( $post_highlight->have_posts() ) : $post_highlight->the_post();
            ?>
                        <div class="col-12">

                            <div class="row">

                                <div class="col-lg-8">
                                    <!-- <img
                                    class="img-fluid"
                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/post-highlight-image.png' ) ?>"
                                    alt="Imagem destacada"> -->

                                    <?php
                                        $alt_title = get_the_title();

                                        the_post_thumbnail( 'post-thumbnail',
                                            array(
                                                'class' => 'img-fluid',
                                                'alt'   => $alt_title
                                        ));
                                    ?>
                                </div>

                                <div class="col-lg-4 mt-3 mt-lg-0">

                                    <div class="l-post-highlight__box u-box-shadow-pattern u-bg-folk-white p-3 p-lg-5">
                                        
                                        <h2 class="l-post-highlight__title u-font-weight-bold u-color-folk-squid-ink">
                                            <!-- Irmãs professam
                                            votos temporários e
                                            perpétuos em festa dos
                                            32 anos da Congregação -->

                                            <?php the_title() ?>
                                        </h2>

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden">
                                            <!-- 10 DE DEZEMBRO DE 2021 -->
                                            <?php echo get_date_format( get_the_date( 'd/m/Y', $post_highlight->ID ) ) ?>
                                        </p>

                                        <span class="d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium mt-4">
                                            <!-- Aconteceu no dia 07 de dezembro na nossa chácara, 
                                            no distrito de Uvaia, em Ponta Grossa, a celebração 
                                            dos Votos Temporários das Irmãs Amanda, Irmã Bruna, 
                                            Irmã Criciele, Irmã Gabriele, [...] -->
                                            <?php the_excerpt(); ?>
                                        </span>

                                        <div class="row">

                                            <div class="col-7 mt-3 pt-3">

                                                <a
                                                class="w-100 u-box-shadow-pattern d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                                href="<?php the_permalink() ?>">
                                                    Ler mais
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    endwhile;
                endif;

                wp_reset_query();
            ?>
        </div>
    </div>
</section>
<?php endif; ?>