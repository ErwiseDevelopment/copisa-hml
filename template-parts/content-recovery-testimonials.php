<section class="l-testimonials position-relative u-bg-folk-light-gray my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5 pb-5">
                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Quem passou por aqui:</span> <br>
                    Depoimentos
                </h2>
            </div>
            
            <div class="col-12 mt-5">

                <div class="row">

                    <div class="col-lg-5 py-5" style="z-index:1">

                        <!-- swiper -->
                        <div class="swiper-container js-swiper-testimonials-photos">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php 
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'depoimentos',
                                        'order'          => 'DESC'
                                    );

                                    $posts_testimonials = new WP_Query( $args );

                                    if( $posts_testimonials->have_posts() ) :
                                        while( $posts_testimonials->have_posts() ) : $posts_testimonials->the_post();
                                ?>
                                            <div class="swiper-slide">
                                                <?php
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thumbnail',
                                                        array(
                                                            'class' => 'img-fluid w-100 h-100 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                        ));
                                                ?>
                                            </div>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>

                    <div class="col-lg-7">
                        
                        <div class="l-our-communities__box l-our-communities__box--recovery l-testimonials__box u-bg-folk-white">

                            <div class="l-our-communities__buttons d-flex">

                                <div class="l-our-communities__buttons__item swiper-button-prev d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-testimonials">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png"
                                    alt="Ícone Seta Esquerda">
                                </div>

                                <div class="l-our-communities__buttons__item swiper-button-next d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-testimonials">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png"
                                    alt="Ícone Seta Direita">
                                </div>
                            </div>

                            <!-- swiper -->
                            <div class="swiper-container mt-4 js-swiper-testimonials">

                                <div class="swiper-wrapper">

                                    <!-- slide -->
                                    <?php
                                        if( $posts_testimonials->have_posts() ) :
                                            while( $posts_testimonials->have_posts() ) : $posts_testimonials->the_post();
                                    ?>
                                                <div class="swiper-slide js-testimonial">

                                                    <div>

                                                        <p class="d-inline-block u-font-size-10 u-font-weight-semibold text-center text-uppercase u-color-folk-bold-electric-blue u-bg-folk-golden py-1 px-5">
                                                            <?php
                                                                $categories_current = get_the_terms( get_the_ID(), 'depoimentos_categoria' );
                                                                echo $categories_current[0]->name;
                                                            ?>
                                                        </p>

                                                        <h3 class="l-our-communities__title u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                            <?php the_title() ?>
                                                        </h3>

                                                        <span class="d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-color-folk-aluminium mt-4">
                                                            <?php echo limit_words( get_the_content(), 40); ?>
                                                        </span>

                                                        <span class="d-none js-testimonial-content">
                                                            <?php the_content() ?>
                                                        </span>
                                                        
                                                        <div class="row">
                                                            
                                                            <div class="col-5 mt-3">
                                                                <p class="u-font-size-12 u-font-weight-semibold text-center text-uppercase u-color-folk-bold-electric-blue hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink u-cursor-pointer py-1 px-5">
                                                                    Ler mais
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php
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
            </div>
        </div>
    </div>
</section>

<!-- modal testimonial -->
<div class="l-modal-testimonial js-modal-testimonial">

    <div class="l-modal-testimonial__overlay js-modal-testimonial-close"></div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-8 mb-3">

                <div class="row justify-content-end">
                        
                    <div class="col-lg-3">
                        <button class="w-100 border-0 rounded d-block u-font-size-14 u-font-weight-medium text-center u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-golden py-2 js-modal-testimonial-close">
                            Fechar
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                
                <div class="shadow rounded d-flex justify-content-center align-items-center u-bg-folk-white p-4 p-lg-5">
                    <span class="d-block u-font-size-13 md:u-font-size-15 xxl:u-font-size-18 u-font-weight-regular text-center u-color-folk-aluminium js-modal-content">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal testimonial -->