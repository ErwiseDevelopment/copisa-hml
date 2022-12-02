<?php if( get_field( 'exibir_campanha', 'option' ) == 'Sim' ) : ?>
    <section class="l-vocation-campaign py-5" style="background-image: url(<?php echo get_field( 'imagem_de_fundo_campanha', 'option' ) ?>)">

        <div class="container">

            <div class="row">

                <div class="col-12 my-5">

                    <div class="row justify-content-center">

                        <div class="col-lg-7">

                            <div class="row">

                                <div class="col-12 mb-5">

                                    <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-white mb-3 pb-2">
                                        <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-white">Campanha</span> <br>
                                        <!-- Vocacional 2022 -->
                                        <?php echo get_field( 'titulo_campanha', 'option' ) ?>
                                    </h2>

                                    <span class="l-vocation-campaign__description d-block u-font-weight-medium text-center u-color-folk-white mt-5">
                                        <!-- Neste ano vamos viver um tema muito caro para todo 
                                        consagrado no carisma da Copiosa Redenção. Inspirado 
                                        nos escritos da vocação, onde nosso fundador, Padre 
                                        Wilton, fala do ser peregrino.

                                        <br><br>

                                        Não só nós somos peregrinos neste mundo, como o 
                                        próprio Deus também se fez peregrino.Por isso, em 2022 
                                        vamos aprofundar este tema e queremos convidar você a 
                                        caminhar conosco nessa aventura que é ser Peregrino na 
                                        vontade de Deus.   -->
                                        <?php echo get_field( 'descricao_campanha', 'option' ) ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-5 mb-4 mb-lg-0">
                            <img
                            class="img-fluid w-100 h-100 u-object-fit-cover"
                            src="<?php echo get_field( 'imagem_campanha', 'option' ) ?>"
                            alt="<?php echo get_field( 'titulo_campanha', 'option' ) ?>">
                        </div>

                        <div class="col-lg-7 mt-4">
                            <!-- <iframe class="l-vocation-campaign__iframe w-100" src="https://www.youtube.com/embed/8-OaPYt3e0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            <div class="l-vocation-campaign__iframe">
                                <?php echo get_field( 'video_campanha', 'option' ) ?>
                            </div>
                        </div>

                        <div class="col-8 col-md-5 d-flex flex-column justify-content-center mt-4 mt-lg-0">
                            
                            <div class="row justify-content-center">

                                <div class="col-md-10">
                                    <a
                                    class="l-vocation-campaign__link w-100 u-line-height-100 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-medium-electric-blue hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                    href="<?php echo get_field( 'link_campanha', 'option' ) ?>">
                                        Saiba mais <br>
                                        sobre a nossa <br>
                                        campanha!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>