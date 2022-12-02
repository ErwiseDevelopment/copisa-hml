<section class="u-bg-folk-bold-electric-blue pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-4">

                <div class="row justify-content-center">

                    <div class="col-8 col-lg-4">
                        <img
                        class="img-fluid"
                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/simbolo_azul.png' ) ?>"
                        alt="">
                    </div>

                    <div class="col-lg-6">

                        <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-white mb-5 pb-3">
                            <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-white">Conheça a nossa</span> <br>
                            Congregação
                        </h2>

                        <p class="l-congregation__description u-font-weight-bold u-color-folk-white">
                            O carisma da Copiosa Redenção foi colocado 
                            por Deus no coração do fundador Pe. Wilton 
                            Moraes Lopes, CSsR,  para ser luzna vida de 
                            pessoas que se encontram nas drogas e em 
                            profundo processo de destruição.
                        </p>

                        <p class="l-congregation__description u-font-weight-regular u-color-folk-white">
                            Nossa missão é minimizar a dor, o sofrimento e 
                            resgatar a dignidade humana através da 
                            Adoração e o trabalho de recuperação.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 px-0 px-md-3">

                <div class="row">

                    <!-- loop -->
                    <?php
                        $args = array(
                            'post_type'   => 'page',
                            'post_parent' => 110,
                            'post__in' => array(
                                '112', //Historia
                                '114', //Fundador
                                '523', //Carisma
                                '339'), //Cofundadores
                            'order'  => 'ASC',
                        );

                        $child_pages = new WP_Query( $args );

                        if( $child_pages->have_posts() ) :
                            while( $child_pages->have_posts() ) : $child_pages->the_post();
                    ?>
                                <div class="co-sm-6 col-md-3">
                                    
                                    <div 
                                    class="l-congregation__item d-flex justify-content-center align-items-center py-3 js-item-congregation"
                                    data-value="<?php the_title() ?>">
                                        <p class="u-font-weight-bold mb-0">
                                            <!-- História -->
                                            <?php the_title() ?>
                                        </p>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                    <!-- end loop -->

                    <!-- <div class="co-sm-6 col-md-3">
                        
                        <div 
                        class="l-congregation__item d-flex justify-content-center align-items-center py-3 js-item-congregation"
                        data-value="Fundador">
                            <p class="u-font-weight-bold mb-0">
                                Fundador
                            </p>
                        </div>
                    </div>

                    <div class="co-sm-6 col-md-3">
                        
                        <div 
                        class="l-congregation__item d-flex justify-content-center align-items-center py-3 js-item-congregation"
                        data-value="Cofundadores">
                            <p class="u-font-weight-bold mb-0">
                                Cofundadores
                            </p>
                        </div>
                    </div>

                    <div class="co-sm-6 col-md-3">
                        
                        <div 
                        class="l-congregation__item d-flex justify-content-center align-items-center py-3 js-item-congregation"
                        data-value="Vocacional">
                            <p class="u-font-weight-bold mb-0">
                                Vocacional
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-bg-folk-light-gray">

    <div class="container">
        
        <div class="row">
            
            <!-- loop -->
            <?php while( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
            <div 
            class="l-congregation__col col-12 mt-4 pt-4 js-section-congregation"
            data-value="<?php the_title() ?>">
                
                <div class="row">

                    <div class="col-md-7 order-2 order-md-1">

                        <h3 class="l-congregation__title u-font-weight-extrabold u-color-folk-bold-electric-blue mb-4">
                            <!-- Conheça a história da <br>
                            Copiosa Redenção -->
                            <?php echo get_field( 'subtitulo' ) ?>
                        </h3>

                        <p class="l-congregation__content u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                            <!-- O carisma da Copiosa Redenção foi colocado por Deus 
                            no coração do fundador Pe. Wilton Moraes Lopes, CsSR,  
                            para ser luz na vida de pessoas que se encontram nas 
                            drogas e em profundo processo de destruição. -->
                            <?php echo get_field( 'resumo' ) ?>
                        </p>

                        <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                            <!-- A ideia de fundar uma congregação já havia passado pelos 
                            pensamentos de Pe. Wilton Moraes Lopes, sacerdote redentorista 
                            da província de Campo Grande, contudo, sem objetivos e sem 
                            metas. No ano de 1987, sentiu-se tocado por uma ação 
                            extraordinária do amor de Deus. Sentia-se inquieto por um 
                            chamado do Senhor, do qual ele não possuía nenhum 
                            discernimento e compreensão. -->
                            <?php echo get_field( 'texto' ) ?>
                        </p>

                        <div class="row justify-content-center">

                                <div class="col-7 col-md-4 mt-3 pt-3">

                                    <a
                                    class="w-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-3"
                                    href="<?php the_permalink() ?>">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-5 order-1 order-md-2 mb-3 mb-md-0">
                        <!-- <img
                        class="l-congregation__image img-fluid w-100 u-object-fit-cover"
                        src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/congregation-image.png' ) ?>"
                        alt=""> -->

                        <?php
                            $alt_title = get_the_title();

                            the_post_thumbnail( 'post-thumbail',
                                array(
                                    'class' => 'l-congregation__image img-fluid w-100 u-object-fit-cover',
                                    'alt'   => $alt_title
                            ));
                        ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- end loop -->

            <!-- <div 
            class="l-congregation__col col-12 mt-4 pt-4 js-section-congregation"
            data-value="Fundador">
                
                <div class="row">

                    <div class="col-md-7 order-2 order-md-1">

                        <h3 class="l-congregation__title u-font-weight-extrabold u-color-folk-bold-electric-blue mb-4">
                            Fundador
                        </h3>

                        <p class="l-congregation__content u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                            O carisma da Copiosa Redenção foi colocado por Deus 
                            no coração do fundador Pe. Wilton Moraes Lopes, CsSR,  
                            para ser luz na vida de pessoas que se encontram nas 
                            drogas e em profundo processo de destruição.
                        </p>

                        <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                            A ideia de fundar uma congregação já havia passado pelos 
                            pensamentos de Pe. Wilton Moraes Lopes, sacerdote redentorista 
                            da província de Campo Grande, contudo, sem objetivos e sem 
                            metas. No ano de 1987, sentiu-se tocado por uma ação 
                            extraordinária do amor de Deus. Sentia-se inquieto por um 
                            chamado do Senhor, do qual ele não possuía nenhum 
                            discernimento e compreensão.
                        </p>

                        <div class="row justify-content-center">

                                <div class="col-7 col-md-4 mt-3 pt-3">

                                    <a
                                    class="w-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-3"
                                    href="#">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-5 order-1 order-md-2 mb-3 mb-md-0">
                        <img
                        class="l-congregation__image img-fluid w-100 u-object-fit-cover"
                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/congregation-image.png' ) ?>"
                        alt="">
                    </div>
                </div>
            </div>

            <div 
            class="l-congregation__col col-12 mt-4 pt-4 js-section-congregation"
            data-value="Cofundadores">
                
                <div class="row">

                    <div class="col-md-7 order-2 order-md-1">

                        <h3 class="l-congregation__title u-font-weight-extrabold u-color-folk-bold-electric-blue mb-4">
                            Cofundadores
                        </h3>

                        <p class="l-congregation__content u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                            O carisma da Copiosa Redenção foi colocado por Deus 
                            no coração do fundador Pe. Wilton Moraes Lopes, CsSR,  
                            para ser luz na vida de pessoas que se encontram nas 
                            drogas e em profundo processo de destruição.
                        </p>

                        <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                            A ideia de fundar uma congregação já havia passado pelos 
                            pensamentos de Pe. Wilton Moraes Lopes, sacerdote redentorista 
                            da província de Campo Grande, contudo, sem objetivos e sem 
                            metas. No ano de 1987, sentiu-se tocado por uma ação 
                            extraordinária do amor de Deus. Sentia-se inquieto por um 
                            chamado do Senhor, do qual ele não possuía nenhum 
                            discernimento e compreensão.
                        </p>

                        <div class="row justify-content-center">

                                <div class="col-7 col-md-4 mt-3 pt-3">

                                    <a
                                    class="w-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-3"
                                    href="#">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-5 order-1 order-md-2 mb-3 mb-md-0">
                        <img
                        class="l-congregation__image img-fluid w-100 u-object-fit-cover"
                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/congregation-image.png' ) ?>"
                        alt="">
                    </div>
                </div>
            </div>

            <div 
            class="l-congregation__col col-12 mt-4 pt-4 js-section-congregation"
            data-value="Vocacional">
                
                <div class="row">

                    <div class="col-md-7 order-2 order-md-1">

                        <h3 class="l-congregation__title u-font-weight-extrabold u-color-folk-bold-electric-blue mb-4">
                            Vocacional
                        </h3>

                        <p class="l-congregation__content u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                            O carisma da Copiosa Redenção foi colocado por Deus 
                            no coração do fundador Pe. Wilton Moraes Lopes, CsSR,  
                            para ser luz na vida de pessoas que se encontram nas 
                            drogas e em profundo processo de destruição.
                        </p>

                        <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium">
                            A ideia de fundar uma congregação já havia passado pelos 
                            pensamentos de Pe. Wilton Moraes Lopes, sacerdote redentorista 
                            da província de Campo Grande, contudo, sem objetivos e sem 
                            metas. No ano de 1987, sentiu-se tocado por uma ação 
                            extraordinária do amor de Deus. Sentia-se inquieto por um 
                            chamado do Senhor, do qual ele não possuía nenhum 
                            discernimento e compreensão.
                        </p>

                        <div class="row justify-content-center">

                                <div class="col-7 col-md-4 mt-3 pt-3">

                                    <a
                                    class="w-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-3"
                                    href="#">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-5 order-1 order-md-2 mb-3 mb-md-0">
                        <img
                        class="l-congregation__image img-fluid w-100 u-object-fit-cover"
                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/congregation-image.png' ) ?>"
                        alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>