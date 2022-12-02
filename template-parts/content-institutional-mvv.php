<section class="l-mvv py-5">

    <div class="container">

        <div class="row">

            <?php 
                if( have_rows( 'mvv' ) ) : 
                    while( have_rows( 'mvv' ) ) : the_row();
            ?>
                        <div class="l-mvv__col-child col-12 py-4">

                            <div class="row">

                                <div class="l-mvv__item-child col-lg-3">

                                    <h4 class="l-mvv__title u-font-weight-regular text-center mb-0">
                                        Nossa
                                        <span class="u-font-weight-extrabold u-bg-folk-golden px-4">Missão</span>
                                    </h4>
                                </div>

                                <div class="l-mvv__item-child col-lg-9 d-flex align-items-end mt-4 mt-md-3 mt-lg-0">
                                    <p class="l-mvv__description u-font-weight-medium text-center text-md-left mb-0">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis lacus ac nulla luctus congue eu eget purus. Phasellus eget ex quis diam rhoncus euismod vel eu metus. In hac habitasse platea dictumst.  -->
                                        <?php echo get_sub_field( 'missao' ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="l-mvv__col-child col-12 py-4">

                            <div class="row">

                                <div class="l-mvv__item-child col-lg-3">

                                    <h4 class="l-mvv__title u-font-weight-regular text-center mb-0">
                                        Nossa
                                        <span class="u-font-weight-extrabold u-bg-folk-golden px-4">Visão</span>
                                    </h4>
                                </div>

                                <div class="l-mvv__item-child col-lg-9 d-flex align-items-end mt-4 mt-md-3 mt-lg-0">
                                    <p class="l-mvv__description u-font-weight-medium text-center text-md-left mb-0">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis lacus ac nulla luctus congue eu eget purus. Phasellus eget ex quis diam rhoncus euismod vel eu metus. In hac habitasse platea dictumst.  -->
                                        <?php echo get_sub_field( 'visao' ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="l-mvv__col-child col-12 py-4">

                            <div class="row">

                                <div class="l-mvv__item-child col-lg-3">

                                    <h4 class="l-mvv__title u-font-weight-regular text-center mb-0">
                                        Nossa
                                        <span class="u-font-weight-extrabold u-bg-folk-golden px-4">Valores</span>
                                    </h4>
                                </div>

                                <div class="l-mvv__item-child col-lg-9 d-flex align-items-end mt-4 mt-md-3 mt-lg-0">
                                    <p class="l-mvv__description u-font-weight-medium text-center text-md-left mb-0">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis lacus ac nulla luctus congue eu eget purus. Phasellus eget ex quis diam rhoncus euismod vel eu metus. In hac habitasse platea dictumst.  -->
                                        <?php echo get_sub_field( 'valores' ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
            <?php 
                    endwhile;
                endif;
            ?>
        </div>

        <div class="row justify-content-center">

            <div class="col-8 col-md-4 mt-4 mb-5">

                <a 
                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                href="<?php echo get_field( 'mvv_saiba_mais' ) ?>">
                    Saiba<span class="u-font-size-22 pl-2">+</span>
                </a>
            </div>
        </div>
    </div>
</section>