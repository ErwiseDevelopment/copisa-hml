<?php if( get_field('secao_noticias','option') == 'sessao-noticia'):?>
<section class="l-posts">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-8">

                        <div class="row">

                            <!-- loop -->
                            <?php
                            $args = array(
                                'posts_per_page' => 4,
                                'post_type'      => 'post',
                                'category_name'  => 'noticias',
                                'order'          => 'DESC'
                            );

                            $posts_current = array();

                            $editorials = new WP_Query($args);

                            if ($editorials->have_posts()) :
                                while ($editorials->have_posts()) : $editorials->the_post();
                                    array_push($posts_current, get_the_ID());
                            ?>
                                    <div class="col-md-6 my-3">

                                        <a class="card rounded-0 text-decoration-none" href="<?php the_permalink() ?>">

                                            <div class="card-img">
                                                <!-- <img
                                                    class="l-posts__thumbnail img-fluid w-100 u-object-fit-cover"
                                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/posts-image.png' ) ?>"
                                                    alt="Post image"> -->

                                                <?php
                                                $alt_title = get_the_title();

                                                the_post_thumbnail(
                                                    'post-thumbnail',
                                                    array(
                                                        'class' => 'l-posts__thumbnail img-fluid w-100 u-object-fit-cover',
                                                        'alt'   => $alt_title
                                                    )
                                                );
                                                ?>
                                            </div>

                                            <div class="card-body px-4">

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

                                                    foreach ($cats as $cat) {
                                                        foreach (get_categories_highlight() as $editorial) {
                                                            if ($cat == $editorial)
                                                                $editorial_current = $cat;
                                                        }
                                                    }

                                                    foreach ($cats as $cat) {
                                                        if ($editorial_current) {
                                                            if ($cat != $editorial_current) {
                                                                array_push($categories_current, $cat);
                                                                $count++;

                                                                if ($count == 1)
                                                                    break;
                                                            }
                                                        } else {
                                                            array_push($categories_current, $cat);
                                                            $count++;

                                                            if ($count == 3)
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
                                                    <?php echo get_date_format(get_the_date('d/m/Y', $editorials->ID)) ?>
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
                                                        <?php
                                                        the_excerpt();
                                                    ?>
                                                </span>

                                                <div class="row">

                                                    <div class="col-5 mt-3">

                                                        <p class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2">
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
                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-lg-4 pt-5">

                        <div class="row">

                            <div class="col-12 pt-5">

                                <div class="l-posts__other-post__box py-5 px-4">

                                    <h4 class="l-posts__read-more-title u-font-weight-semibold text-center u-color-folk-squid-ink">
                                        Mais lidas
                                    </h4>

                                    <div class="row">

                                        <!-- loop -->
                                        <?php
                                        $args = array(
                                            'posts_per_page' => 4,
                                            'post_type'      => 'post',
                                            'category_name'  => 'noticias',
                                            'order'          => 'DESC',
                                            'post__not_in'   => $posts_current
                                        );

                                        $other_editorials = new WP_Query($args);

                                        if ($other_editorials->have_posts()) :
                                            while ($other_editorials->have_posts()) : $other_editorials->the_post();
                                        ?>
                                                <a class="l-posts__other-post__col-child col-12 d-block text-decoration-none my-3" href="<?php the_permalink() ?>">

                                                    <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue">
                                                        <?php echo get_date_format(get_the_date('d/m/Y', $other_editorials->ID)) ?>
                                                    </p>

                                                    <h5 class="l-posts__other-post__title u-font-size-15 xxl:u-font-size-18 u-font-weight-bold u-color-folk-medium-electric-blue mb-0 pb-3">
                                                        <!-- Workshop reúne religiosos sobre os 
                                                            benefícios e os males da vida online -->
                                                        <?php the_title() ?>
                                                    </h5>
                                                </a>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                        <!-- end loop -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-5">

                                <div class="row justify-content-between mx-0">

                                                                            <!-- loop comentado todo esse bloco pois não estava agindo de acordo, deixar o campo fixo como esta atualmente - Raphael 
                                                                            <?php
                                                                            $all_categories = get_categories();
                                                                            $categories_highlight = get_categories_highlight();

                                                                            foreach ($all_categories as $category) :
                                                                                foreach ($categories_highlight as $category_highlight) :
                                                                                    if ($category->name == $category_highlight) :
                                                                                        $category_link = get_category_link($category->term_id);
                                                                            ?>

                                                                                        <a class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3" href="<?php echo $category_link; ?>">
                                                                                        
                                                                                            <span class="l-posts__item__icon"><?php echo $category->name; ?></span>
                                                                                        </a>
                                                                            <?php
                                                                                    endif;
                                                                                endforeach;
                                                                            endforeach;
                                                                            ?>
                                                                            end loop -->

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias/?cat=evangeliza%C3%A7%C3%A3o">
                                        <span class="l-posts__item__icon">Evangelização</span>
                                    </a>
                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias/?cat=institucional">
                                        <span class="l-posts__item__icon">Institucional</span>
                                    </a>       
                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias/?cat=recupera%C3%A7%C3%A3o">
                                        <span class="l-posts__item__icon">Recuperação</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias/?cat=vocacional">
                                        <span class="l-posts__item__icon">Vocacional</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias/?cat=juventude">
                                        <span class="l-posts__item__icon">Juventude</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="https://copiosa.erwisedev-hml.com.br/noticias">
                                        <span class="l-posts__item__icon">Notícias</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>