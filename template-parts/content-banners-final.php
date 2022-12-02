<section class="pb-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-4">

                <div class="row">

                    <div class="col-md-8">

                        <div class="row h-100">

                            <!-- loop -->
                            <?php  
                                if( have_rows( 'banners_finais', 'option' ) ) :
                                    while( have_rows( 'banners_finais', 'option' ) ) : the_row();
                            ?>
                                        <div class="l-several__col col-lg-6 mb-3 mb-lg-0">
                                            
                                            <a 
                                            class="h-100 d-block"
                                            href="https://copiosa.erwisedev-hml.com.br/irma-zelia-uma-missionaria-da-redencao-do-senhor/ ?>">
                                                <img
                                                class="img-fluid h-100 u-object-fit-cover"
                                                src="<?php echo get_sub_field( 'banner' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>

                                            <ul class="l-several__social-media d-flex justify-content-center align-items-center mb-0 pl-0">
                                                
                                                <?php if( get_sub_field( 'instagram' ) ) : ?>
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_sub_field( 'instagram' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Instagram
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if( get_sub_field( 'facebook' ) ) : ?>
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_sub_field( 'facebook' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if( get_sub_field( 'facebook' ) ) : ?>
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_sub_field( 'facebook' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            
                                            </ul>
                                        </div>
                            <?php
                                    endwhile;
                                endif;
                            ?>

                            <!-- <div class="col-lg-6">
                                
                                <a 
                                class="h-100 d-block"
                                href="#">
                                    <img
                                    class="img-fluid h-100 u-object-fit-cover"
                                    src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/banner-irmazelia.png' ) ?>"
                                    alt="">
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-md-4 mt-4 mt-md-0">

                        <div class="row">

                            <div class="col-12">

                                <div class="border p-3">

                                    <h6 class="l-several__shop__title u-font-weight-semibold u-color-folk-bold-electric-blue mb-0">
                                        Mais vendidos <br>
                                        em nossa loja
                                    </h6>

                                    <div class="row">

                                        <!-- loop -->
                                        <?php
                                            if( have_rows( 'produtos', 'option' ) ) :
                                                while( have_rows( 'produtos', 'option' ) ) : the_row();
                                        ?>
                                                    <div class="col-12 my-1">

                                                        <div class="row">

                                                            <div class="col-4">
                                                                <img
                                                                class="img-fluid"
                                                                src="<?php echo get_sub_field( 'imagem' ) ?>"
                                                                alt="<?php echo get_sub_field( 'nome_descr' ) ?>">
                                                            </div>

                                                            <div class="col-8 pl-0">
                                                                
                                                                <h6 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-semibold u-color-folk-bold-electric-blue mb-2">
                                                                    <!-- Planejamento
                                                                    Espiritual 2022 -->
                                                                    <?php echo get_sub_field( 'nome_descr' ) ?>
                                                                </h6>

                                                                <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-semibold u-color-folk-golden">
                                                                    <!-- R$ 26,90 -->
                                                                    R$ <?php echo get_sub_field( 'valor' ) ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-12 mt-1">

                                                                <div class="l-several__line"></div>

                                                                <div class="row justify-content-center">

                                                                    <div class="col-7 offset-2">

                                                                        <a
                                                                        class="w-100 u-box-shadow-pattern d-block u-font-size-12 xxl:u-font-size-16 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-electric-blue hover:u-color-folk-golden u-bg-folk-golden hover:u-bg-folk-squid-ink py-2"
                                                                        href="<?php echo get_sub_field( 'link_do_produto' ) ?>">
                                                                            Comprar
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php
                                                endwhile;
                                            endif;
                                        ?>
                                        <!--- end loop -->
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-7 mt-3">

                                        <a
                                        class="w-100 u-box-shadow-pattern d-block u-font-size-15 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-squid-ink py-2"
                                        href="#">
                                            Ver mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>