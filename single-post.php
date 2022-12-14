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

<!-- banner -->a
<?php
	$categories_post = array();

	$categories_pattern = [
		'Notícias',
		'Blog'
	];

	$single_post_categories = get_the_category( $post->ID );
	
	foreach( $single_post_categories as $category ) {
		foreach( $categories_pattern as $category_pattern ) {
			if( $category->name == $category_pattern )
				array_push( $categories_post, $category->name );
		}
	}
	 $posts_current = array();
 		array_push($posts_current, get_the_ID()); 
	
?>
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
					<?php 
						echo $categories_post[0] ? $categories_post[0] : 'Últimas Notícias';
					?>
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

				<div class="row">

					<div class="col-lg-9">

						<?php 
							$alt_title = get_the_title();

							the_post_thumbnail( 'post-thumbnail', 
								array(
									'class' => 'img-fluid w-100 u-object-fit-cover',
									'alt'   => $alt_title
							));
						?>

						<p class="u-font-size-13 xxl:u-font-size-15 u-font-weight-bold u-color-folk-golden mt-4 mb-2">
							<!-- 15 de março, 2022 -->
							<?php echo get_date_format( get_the_date( 'd/m/Y', $editorials->ID ) ) ?>
						</p>

						<h2 class="l-single-post__title u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
							<?php the_title() ?>
						</h2>

						<span class="d-block u-font-size-14 xxl:u-font-size-18 all:u-color-folk-aluminium">
							<?php the_content() ?>
						</span>

						<span class="l-single-post__excerpt d-block u-font-weight-bold text-center u-color-folk-white u-bg-folk-bold-electric-blue my-4 p-2">
							<?php the_excerpt() ?>
						</span>

						<div class="row">

							
						</div>
					</div>

					<div class="col-lg-3 mt-5 mt-lg-0">

						<div>
                            <form class="js-search-form" method="GET" action="/">

                                <div class="row">

                                    <div class="col-12">
                                        <input
                                        class="w-100 border-0 d-block u-font-size-14 u-font-weight-semibold u-color-folk-bold-eletric-blue u-bg-folk-light-gray py-4 pl-3 pr-5"
                                        type="search"
                                        name="s"
                                        placeholder="Procurar">
                                        <span class="l-page-news__icon js-search-submit"></span>
                                    </div>
                                </div>
                            </form>                            
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="border mt-4 p-4">

                                    <h6 class="xxl:u-font-size-20 u-font-weight-bold u-color-folk-medium-electric-blue">
                                        Categorias
                                    </h6>

                                    <ul class="pl-0">
									<?php foreach( get_categories_highlight() as $category ) : ?>
                                                <li class="l-page-news__categories u-list-style-none my-3">
                                                
                                                    <a 
                                                    class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular text-decoration-none u-color-folk-aluminium"
                                                    href="<?php echo get_home_url( null, '/noticias/?cat=' . strtolower( $category ) ); ?>">
                                                        <!-- Institucional -->
                                                        <?php echo $category; ?>
                                                    </a>

                                                    <span class="l-page-news__categories__circle"></span>
                                                </li>
                                        <?php endforeach; ?>

                                        <li class="l-page-news__categories u-list-style-none my-3">
                                            
                                            <a 
                                            class="u-font-size-13 xxl:u-font-size-16 u-font-weight-semibold text-decoration-none u-color-folk-bold-electric-blue"
                                            href="<?php echo get_home_url( null, 'noticias' ); ?>">
                                                Todas as Notícias
                                            </a>

                                            <span class="l-page-news__categories__circle"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

						<div class="row">

                            <div class="col-12">

                                <div class="border mt-4 p-4">

									<h6 class="xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue">
                                        Notícias recentes
                                    </h6>

									<div class="row">
											
										<!-- loop -->
										<?php
											$categories = array();

											foreach( get_the_category( get_the_ID() ) as $cat ) {
												array_push($categories, $cat->slug);	
											}

											$args = array(
												'posts_per_page' => 3,
												'post_type'      => 'post',
												'category_name'  => $categories_pattern,
												'order'          => 'DESC',
												'post__not_in' =>  $posts_current,
												
											);

											$other_news_posts = new WP_Query( $args );

											if( $other_news_posts->have_posts() ) :
												while( $other_news_posts->have_posts() ) : $other_news_posts->the_post();
										?>
													<a 
													class="col-12 u-border-b-1 last-child:u-border-b-1 border-light d-block text-decoration-none my-3 pb-3"
													href="<?php the_permalink() ?>">

														<div class="row">
															
															<div class="col-3 pr-0">
																<!-- <img
																class="img-fluid w-100 h-100 u-object-fit-cover"
																src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/Image.png') ?>"
																alt=""> -->

																<?php
																	$alt_title = get_the_title();

																	the_post_thumbnail( 'post-thumbnail',
																		array(
																			'class' => 'img-fluid w-100 h-100 u-object-fit-cover',
																			'alt'   => $alt_title
																	));
																?>
															</div>

															<div class="col-9">
																
																<p class="u-font-size-10 xxl:u-font-size-12 u-font-weight-bold u-color-folk-golden mb-1">
																	<!-- 15 de março, 2022 -->
																	<?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) );?>
																</p>

																<h4 class="u-font-size-13 u-font-weight-bold u-color-folk-dark-grayish-navy">
																	<!-- Título da Notícia -->
																	<?php the_title() ?>
																</h4>
															</div>
														</div>
													</a>
										<?php
												endwhile;
											endif;
											
											wp_reset_query();
										?>
										<!-- end loop -->
									</div>
								</div>
							</div>
						</div>

						<div class="row">

                            <div class="col-12 mt-3">
								<?php if( get_field( 'banner_pagina_noticias', 'option' ) ) : ?>
									<a href="<?php echo get_field( 'link_banner', 'option' ) ?>">
										<img
										class="img-fluid"
										src="<?php echo get_field( 'banner_pagina_noticias', 'option' ) ?>"
										alt="<?php the_title() ?>">
									</a>
								<?php endif; ?>
                            </div>
                        </div>
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
