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
                    
                    <div class="col-md-8 mt-4">

                        <div class="row h-100">

                            <div class="col-12">

                                <div class="h-100 d-flex flex-column justify-content-center u-bg-folk-squid-ink py-5 px-3 px-md-0">

                                    <div class="row justify-content-center">

                                        <div class="col-md-7">

                                            <h4 class="l-several__newsletter__title u-line-height-100 u-font-weight-bold u-color-folk-white mb-4">
                                                Inscreva-se em  <br>
                                                nossa Newsletter!       
                                            </h4>

                                            <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-medium u-color-folk-white mb-4">
                                                Acompanhe tudo o que está acontecendo na <br>
                                                Copiosa Redenção e receba materiais exclusivos.
                                            </p>

                                            <form>

                                                <div class="row">

                                                    <div class="col-10 my-2">
                                                        <input
                                                        class="w-100 border-0 d-block u-font-size-12 u-font-weight-regular u-font-family-lato p-3"
                                                        type="text"
                                                        placeholder="Seu nome">
                                                    </div>

                                                    <div class="col-10 my-2">
                                                        <input
                                                        class="w-100 border-0 d-block u-font-size-12 u-font-weight-regular u-font-family-lato p-3"
                                                        type="email"
                                                        placeholder="Seu e-mail">
                                                    </div>

                                                    <div class="col-6 my-2">
                                                        <input
                                                        class="w-100 border-0 d-block u-font-size-20 u-font-weight-bold text-center u-color-folk-bold-electric-blue u-bg-folk-golden py-3"
                                                        type="submit"
                                                        value="Enviar">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">

                        <div class="row">

                            <div class="col-12">

                                <div class="border py-4 px-3">

                                    <h6 class="l-several__shop__title u-font-weight-semibold u-color-folk-bold-electric-blue">
                                        Materiais <br>
                                        exclusivos
                                    </h6>

                                    <div class="row">

                                        <!-- loop -->
                                        <?php 
                                            $args = array(
                                                'posts_per_page' => 4,
                                                'post_type'      => 'ebook',
                                                'order'          => 'DESC'
                                            );

                                            $ebooks = new WP_Query( $args );

                                            if( $ebooks->have_posts() ) :
                                                while( $ebooks->have_posts() ) : $ebooks->the_post();
                                        ?>
                                                    <div class="col-12 my-3">

                                                        <div class="row">

                                                            <div class="col-4">
                                                                <!-- <img
                                                                class="img-fluid"
                                                                src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup.png' ) ?>"
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

                                                            <div class="col-8 pl-0">
                                                                
                                                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-semibold u-color-folk-golden mb-0">
                                                                    E-book
                                                                </p>

                                                                <h6 class="u-font-size-18 xxl:u-font-size-19 u-font-weight-semibold u-color-folk-bold-electric-blue mb-2">
                                                                    <!-- Oração pessoal
                                                                    Guia para iniciantes -->
                                                                    <?php the_title() ?>
                                                                </h6>
                                                            </div>

                                                            <div class="col-12 mt-3">

                                                                <div class="l-several__line"></div>

                                                                <div class="row justify-content-center">

                                                                    <div class="col-7 offset-2">

                                                                        <a
                                                                        class="w-100 u-box-shadow-pattern d-block u-font-size-12 xxl:u-font-size-16 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-electric-blue hover:u-color-folk-golden u-bg-folk-golden hover:u-bg-folk-squid-ink py-2"
                                                                        href="<?php echo get_field( 'link' ) ?>" target="_blank">
                                                                            Baixar
                                                                        </a>
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
                                        <!-- end loop -->
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-7 mt-3">

                                        <a
                                        class="w-100 u-box-shadow-pattern d-block u-font-size-15 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-squid-ink py-2"
                                        href="<?php echo get_home_url( null, 'nossos-materiais' ) ?>">
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