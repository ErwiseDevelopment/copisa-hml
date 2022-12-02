<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-4">

                <div class="row">

                    <div class="col-md-8">

                        <div class="row h-100">

                            <!-- loop -->
                            
                                        <div class="l-several__col col-lg-6 mb-3 mb-lg-0">
                                            
                                            <a 
                                            class="h-100 d-block"
                                            href="https://copiosa.erwisedev-hml.com.br/irma-zelia-uma-missionaria-da-redencao-do-senhor/">
                                                <img
                                                class="img-fluid h-100 u-object-fit-cover"
                                                src="<?php echo get_field( 'imagem_destaque_esquerdo', 'option' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>

                                            <ul class="l-several__social-media d-flex justify-content-center align-items-center mb-0 pl-0">
                                                
                                                
                                                   
                                            <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'instagram_instagram', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Instagram
                                                        </a>
                                                    </li>
                                          

                                             
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'facebook_facebook','option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'Youtube_Youtube','option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Youtube
                                                        </a>
                                                    </li>
                                                    <li class="l-several__social-media__item u-list-style-none mx-3">
                                                        <a
                                                        class="u-icon__free u-icon__plus u-font-size-0 before::u-font-size-44 u-font-weight-semibold text-center text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'vermais_vermais','option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link ver mais
                                                        </a>
                                                    </li>
                                                </ul>
                                        </div>
                                        <div class="l-several__col col-lg-6 mb-3 mb-lg-0">
                                            
                                            <a 
                                            class="h-100 d-block"
                                            href="<?php echo get_field('vermais_vermais_link', 'option')?>">
                                                <img
                                                class="img-fluid h-100 u-object-fit-cover"
                                                src="<?php echo get_field( 'imagem_destaque_direito', 'option' ) ?>"
                                                alt="<?php the_title() ?>">
                                            </a>
                                        </div>

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
                                        href="https://loja.copiosaredencao.org.br">
                                            Ver mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
</section>