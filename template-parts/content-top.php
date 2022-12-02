<section class="position-relative u-box-shadow-pattern py-3">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-4 order-3 order-lg-1 d-flex justify-content-center align-items-center">

                        <ul class="d-flex mb-0">
                       
                            <li class="u-list-style-none mx-3">
                                <a
                                class="u-icon__brands u-icon__facebook-square u-font-size-0 before::u-font-size-22 text-decoration-none u-color-folk-medium-electric-blue"
                                href="<?php echo get_field('facebook', 'option')?>"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Facebook
                                </a>
                            </li>
                           
                            <li class="u-list-style-none mx-3">
                                <a
                                class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-22 text-decoration-none u-color-folk-medium-electric-blue"
                                href="<?php echo get_field( 'instagram', 'option' ) ?>"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Instagram
                                </a>
                            </li>

                            <li class="u-list-style-none mx-3">
                                <a
                                class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-22 text-decoration-none u-color-folk-medium-electric-blue"
                                href="<?php echo get_field( 'youtube', 'option' ) ?>"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Youtube
                                </a>
                            </li>

                            <li class="u-list-style-none mx-3">
                                <a
                                class="u-icon__brands u-icon__twitter u-font-size-0 before::u-font-size-22 text-decoration-none u-color-folk-medium-electric-blue"
                                href="<?php echo get_field( 'Twitter', 'option' ) ?>"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Twitter
                                </a>
                            </li>

                            <li class="u-list-style-none mx-3">
                                <a
                                class="u-icon__brands u-icon__spotify u-font-size-0 before::u-font-size-22 text-decoration-none u-color-folk-medium-electric-blue"
                                href="<?php echo get_field( 'spotify', 'option' ) ?>"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Spotify
                                </a>
                            </li>

                            <li class="u-list-style-none mx-3">
                                <span class="u-icon__free u-icon__search u-font-size-0 before::u-font-size-22 u-font-weight-semibold u-cursor-pointer u-color-folk-golden js-search-icon">
                                    Pesquisa
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4  order-2 d-flex justify-content-center align-items-center">

                        <a href="<?php echo get_home_url( null, '/'  ) ?>">
                            <img 
                            class="img-fluid"
                            src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" 
                            alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-3 ">

                        <ul class="d-md-flex d-lg-block justify-content-around pl-0 pl pl-md-3">
                            <li class="d-flex align-items-center u-list-style-none mb-2">
                                <span class="px:u-w-32 px:u-h-32 u-border-2 u-border-color-medium-electric-blue rounded-pill u-icon__free u-icon__envelope d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-color-folk-medium-electric-blue">
                                    Ícone e-mail
                                </span>

                                <p class="u-line-height-100 ml-2 mb-0">
                                    <span class="u-font-size-12 u-font-weight-regular u-font-family-lato u-color-folk-aluminium">Email</span> <br>
                                    <span class="u-font-size-14 u-font-weight-semibold u-font-family-lato u-color-folk-medium-electric-blue"><?php echo get_field('e-mail_head', 'option')?></span>
                                </p>
                            </li>

                            <li class="d-flex align-items-center u-list-style-none">
                                <span class="px:u-w-32 px:u-h-32 u-border-2 u-border-color-medium-electric-blue rounded-pill u-icon__free u-icon__phone-alt d-flex justify-content-center align-items-center u-font-size-0 u-font-weight-semibold before::u-font-size-18 u-color-folk-medium-electric-blue">
                                    Ícone telefone
                                </span>

                                <p class="u-line-height-100 ml-2 mb-0">
                                    <span class="u-font-size-12 u-font-weight-regular u-font-family-lato u-color-folk-aluminium">Telefone</span> <br>
                                    <span class="u-font-size-14 u-font-weight-semibold u-font-family-lato u-color-folk-medium-electric-blue"><?php echo get_field('telefone_head', 'option')?></span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo get_template_part( 'template-parts/content', 'search-box' ) ?>
</section>