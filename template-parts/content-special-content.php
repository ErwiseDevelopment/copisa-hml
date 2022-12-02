<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Aprofunde-se com nossos</span> <br>
                    Conteúdos
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-special-content">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'post',
                                'category_name'  => 'blog-destaque',
                                'order'          => 'DESC'
                            );

                            $posts_special_content = new WP_Query( $args );

                            if( $posts_special_content->have_posts() ) :
                                while( $posts_special_content->have_posts() ) : $posts_special_content->the_post();
                        ?>
                                    <div class="swiper-slide">

                                        <a 
                                        class="card border-0 text-decoration-none"
                                        href="<?php the_permalink() ?>">

                                            <div class="card-img">
                                                <!-- <img
                                                class="l-special-content__thumbnail img-fluid w-100 u-object-fit-cover"
                                                src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/special-content-image.png' ) ?>"
                                                alt="<php the_title() ?>"> -->

                                                <?php
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thubmnail',
                                                        array(
                                                            'class' => 'l-special-content__thumbnail img-fluid w-100 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                        ));
                                                ?>
                                            </div>

                                            <div class="card-body">
                                                
                                                <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-font-family-myriad-pro text-center u-color-folk-squid-ink">
                                                    <?php
                                                        $categories = get_the_category( get_the_ID() );

                                                        echo get_category_editorials( $categories );
                                                    ?>
                                                    <!-- Evangelização -->
                                                </p>

                                                <h4 class="l-special-content__title u-font-weight-bold text-center u-color-folk-medium-electric-blue">
                                                    <!-- O que Deus quer neste novo ano? -->
                                                    <?php the_title() ?>
                                                </h4>

                                                <div class="row justify-content-center">

                                                    <div class="col-8 mt-3">

                                                        <p
                                                        class="w-100 u-box-shadow-pattern u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-3">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                        <?php 
                                endwhile;
                            endif;
                            
                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- pagination -->
                <div class="swiper-pagination swiper-pagination-special-content w-100 js-swiper-pagination-special-content"></div>
                <!-- end swiper -->
            </div>

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                        href="<?php echo get_home_url( null, 'blog' ) ?>">
                            <span class="u-font-size-22 pr-2">+</span>Conteúdos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>