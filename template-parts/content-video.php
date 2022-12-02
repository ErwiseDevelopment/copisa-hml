<section class="my-5 pb-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-11 mt-3">

                <!-- swiper -->
                <div class="swiper-container js-swiper-videos">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            if( have_rows( 'videos', 'option' ) ) :
                                while( have_rows( 'videos', 'option' ) ) : the_row();
                        ?>
                                    <div class="swiper-slide">

                                        <div class="l-video__iframe w-100">
                                            <?php echo get_sub_field( 'link_do_video' ) ?>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <div class="l-video__buttons__item swiper-button-prev d-none d-lg-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-videos">
                    <img class="img-fluid" src="<?php echo get_home_url( null, '/wp-content/themes/wp-bootstrap-starter/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png' ) ?>" alt="Ícone Seta Esquerdo">
                </div>

                <div class="l-video__buttons__item swiper-button-next d-none d-lg-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-videos">
                    <img class="img-fluid" src="<?php echo get_home_url( null, '/wp-content/themes/wp-bootstrap-starter/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png' ) ?>" alt="Ícone Seta Direita">
                </div>
                <!-- end swiper -->
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-8 col-md-3 mt-5">

                <a 
                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                href="<?php echo get_field( 'botao_videos', 'option' ) ?>"
                target="_blank"
                rel="noreferrer noopener">
                    <span class="u-font-size-22 pr-2">+</span>Videos
                </a>
            </div>
        </div>
    </div>
</section>