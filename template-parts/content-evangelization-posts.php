<section class="pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Fique informado!</span> <br>
                    Notícias da nossa Evangelização
                </h2>
            </div>

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php 
                        $args = array(
                            'posts_per_page' => 4,
                            'post_type'      => 'post',
                            'category_name'  => 'evangelizacao+noticias',
                            'order'          => 'DESC'
                        );

                        $institutional_posts = new WP_Query( $args );

                        if( $institutional_posts->have_posts() ) :
                            while( $institutional_posts->have_posts() ) : $institutional_posts->the_post();
                    ?>
                                <div class="col-md-6 col-lg-3 my-3 px-2">

                                    <a 
                                    class="card h-100 rounded-0 text-decoration-none"
                                    href="<?php the_permalink() ?>">

                                        <div class="card-img">
                                            <!-- <img
                                            class="l-posts__thumbnail img-fluid w-100 u-object-fit-cover"
                                            src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/posts-image.png' ) ?>"
                                            alt="Post image"> -->

                                            <?php
                                                $alt_title = get_the_title();

                                                the_post_thumbnail( 'post-thumbnail',
                                                    array(
                                                        'class' => 'l-posts__thumbnail img-fluid w-100 u-object-fit-cover',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body d-flex flex-column justify-content-between px-4">
                                            
                                            <div>
                                                <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-color-folk-medium-electric-blue mb-0">
                                                    <!-- Institucional -->
                                                    <?php
                                                            $cats = array();
                                                            $categories_current = array();
                                                            $count = 0;

                                                            foreach (get_the_category($post_id) as $c) {
                                                                $cat = get_category($c);
                                                                array_push($cats, $cat->name);
                                                            }
                                                            
                                                            foreach( $cats as $cat ) {
                                                                foreach( get_categories_highlight() as $editorial ) {
                                                                    if( $cat == $editorial )
                                                                        $editorial_current = $cat;
                                                                }
                                                            }

                                                            foreach( $cats as $cat ) {
                                                                if( $editorial_current ) {
                                                                    if( $cat != $editorial_current ) {
                                                                        array_push($categories_current, $cat);
                                                                        $count++;
            
                                                                        if( $count == 1 )
                                                                            break;
                                                                    }
                                                                } else {
                                                                    array_push($categories_current, $cat);
                                                                    $count++;
            
                                                                    if( $count == 3 )
                                                                        break;
                                                                }
                                                            }

                                                            if (sizeOf($categories_current) > 0) {
                                                                $post_categories = implode(', ', $categories_current);
                                                            } 

                                                            echo $editorial_current ? $editorial_current . ', ' . $post_categories : $post_categories;
                                        ?>
                                                </p>

                                                <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue">
                                                    <!-- 10 de dezembro de 2021 -->
                                                    <?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) );?>
                                                </p>

                                                <h4 class="u-font-size-16 xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                    <!-- Workshop reúne religiosos
                                                    sobre os benefícios e os 
                                                    males da vida online -->
                                                    <?php the_title() ?>
                                                </h4>

                                                <span class="d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                    <!-- O Centro Âncora promoveu no dia 14 de
                                                    outubro, um workshop, intitulado “Teu 
                                                    Olhar” voltado para os religiosos (as) [...] -->
                                                    <?php the_excerpt(); ?>
                                                </span>
                                            </div>

                                            <div class="row">

                                                <div class="col-6 mt-3">

                                                    <p
                                                    class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2">
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
                    ?>
                    <!-- end loop -->

                    <div class="col-12">

                        <div class="row justify-content-center">

                            <div class="col-8 col-md-3 mt-5">

                                <a
                                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                href="<?php echo get_home_url( null, 'noticias/?cat=evangelizacao' ) ?>">
                                    <span class="u-font-size-22 pr-2">+</span>Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>