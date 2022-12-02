<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    Eventos
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h1 class="u-font-weight-bold u-color-folk-bold-electric-blue">
					<?php the_title() ?>
				</h1>

				<div class="row">

                    <div class="col-12">
                        <p class="u-font-size-14 u-font-weight-bold u-color-folk-golden mb-0">
							Horário: <?php echo get_field( 'hora' ) ?>
						</p>

						<p class="u-font-size-14 u-font-weight-bold u-color-folk-golden mb-0">
							Data: <?php echo get_field( 'data_evento' ) ?>
						</p>

                        <p class="u-font-size-14 u-font-weight-bold u-color-folk-golden">
							Local: <?php echo get_field( 'local' ) ?>
						</p>
                    </div>

					<div class="col-md-6">

						<?php 
							$alt_title = get_the_title();

							the_post_thumbnail( 'post-thumbnail',
								array(
									'class' => 'img-fluid w-100 u-object-fit-cover',
									'alt'   => $alt_title
							));
                        ?>
					</div>

					<div class="col-md-6 mt-3 mt-md-0">
						<span class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
							<?php the_content() ?>
						</span>

                        <div class="row">

                            <div class="col-4 my-4">

                                <a 
                                class="w-100 rounded d-block u-font-size-12 u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-medium-electric-blue py-2"
                                href="<?php echo get_field( 'ver_mais' ) ?>">
                                    Participar do evento
                                </a>
                            </div>
                        </div>
					</div>
				</div>

                <hr class="mt-5">
			</div>
		</div>
	</div>
</section>

<section>

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">
						
					<?php 
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'evento',
                            // 'order'          => 'DESC',
                            'orderby'        => array(
                                                    'date'        => 'DESC',
                                                    'date_update' => 'DESC'
                             ),
							'post__not_in'   => array(
                                                    $post->ID
                            )
                        );

                        $events = new WP_Query( $args );

                        if( $events->have_posts() ) :
                            while( $events->have_posts() ) : $events->the_post();
                    ?>
                        <div class="col-lg-6 my-3">

                            <div class="row">

                                <div class="col-md-4">

                                    <!-- <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/Image.png' )?>"
                                    alt=""> -->

                                    <?php 
                                        $alt_title = get_the_title();

                                        the_post_thumbnail( 'post-thumbnail',
                                            array(
                                                'class' => 'img-fluid w-100 u-object-fit-cover',
                                                'alt'   => $alt_title
                                        ));
                                    ?>

                                    <p class="u-font-size-12 u-font-weight-bold u-color-folk-golden mt-1 mb-0">
                                        <!-- 16 de março, 2022 -->
                                        <?php echo get_field( 'data' ) ?>
                                    </p>
                                </div>

                                <div class="col-md-8">

                                    <div class="row">

                                        <div class="col-md-2">
                                            <p class="u-font-size-12 u-font-weight-bold u-color-folk-golden mb-1">
                                                <!-- 19:00 -->
                                                <?php echo get_field( 'horario' ) ?>
                                            </p>
                                        </div>

                                        <div class="col-md-10">
                                            <p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium mb-1">
                                                <!-- Lorem ipsum dolor sit amet consectetur. -->
                                                <?php echo get_field( 'endereco' ) ?>
                                            </p>
                                        </div>
                                    </div>

                                    <h3 class="u-font-weight-bold u-color-folk-bold-electric-blue">
                                        <!-- Lorem ipsum dolor sit -->
                                        <?php the_title() ?>
                                    </h3>
                               
                                    <div class="row">

                                        <div class="col-5">

                                            <a 
                                            class="w-100 rounded d-block u-font-size-12 u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-medium-electric-blue py-2"
                                            href="<?php the_permalink() ?>">
                                                Ver evento
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
				</div>

                <div class="row justify-content-center">
                            
                    <div class="col-4 my-4">

                        <a 
                        class="w-100 rounded d-block u-font-size-12 u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-medium-electric-blue py-2"
                        href="<?php echo get_home_url( null, 'eventos' ) ?>">
                            voltar a página de Eventos
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
