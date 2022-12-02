<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5 pb-3">
                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Nossos</span> <br>
                    Parceiros
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-partners">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            if( have_rows( 'parceiros' ) ) : 
                                while( have_rows( 'parceiros' ) ) : the_row();
                        ?>
                                    <a 
                                    class="swiper-slide"
                                    href="<?php echo get_sub_field( 'link' ) ?>"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        <img
                                        class="img-fluid w-100 h-100 u-object-fit-cover"
                                        src="<?php echo get_sub_field( 'logo' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev-partners d-none d-lg-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-partners">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png"
                    alt="Ícone Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-partners d-none d-lg-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-partners">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png"
                    alt="Ícone Seta Direita">
                </div>
                <!-- end swiper -->
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-8 col-md-3 mt-5">

                <a 
                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                href="#">
                    Seja um parceiro
                </a>
            </div>
        </div>
    </div>
</section>