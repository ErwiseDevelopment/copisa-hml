<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-4">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    Galeria
                </h2>
            </div>

            <div class="col-12 mt-3">

                <div class="row">

                    <?php 
                        $editorial_slug_current = strtolower(get_the_title());

                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'Galeria',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'galeria-categoria',
                                    'field'    => 'slug',
                                    'terms'    => array( $editorial_slug_current )
                                )
                            )
                        );

                        $gallery = new WP_Query( $args );
                        $count = 0;

                        if( $gallery->have_posts() ) :
                            while( $gallery->have_posts() ) : $gallery->the_post();

                                $photos = get_field( 'galeria' );

                                if( $photos ) :
                                    foreach( $photos as $photo ) :     
                                        $count++;
                    ?>
                                        <div class="col-md-6 col-lg-3 my-2 px-2">
                                            <img
                                            class="img-fluid w-100 h-100 u-object-fit-cover"
                                            src="<?php echo $photo['url'] ?>"
                                            alt="<?php echo $photo['title']; ?>">
                                        </div>
                    <?php
                                        if( $count == 8 )
                                            break;
                                    endforeach;
                                endif;
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                </div>

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a 
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                        href="<?php echo get_home_url( null, 'fotos/?cat=' . $editorial_slug_current ) ?>">
                            <span class="u-font-size-22 pr-2">+</span>Fotos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>