<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                    Fale conosco
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <ul class="d-flex justify-content-center pl-0">

                    <?php if( get_field( 'Twitter', 'option' ) ) : ?>
                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__twitter w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-twitter" 
                            href="<?php echo get_field( 'Twitter', 'option' ) ?>" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                Link do Twitter
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field( 'facebook', 'option' ) ) : ?>
                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__facebook w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-facebook" 
                            href="<?php echo get_field( 'facebook', 'option' ) ?>" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                Link do Facebook
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field( 'youtube', 'option' ) ) : ?>
                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__youtube w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-youtube" 
                            href="<?php echo get_field( 'youtube', 'option' ) ?>" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                Link do Youtube
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field( 'instagram', 'option' ) ) : ?>
                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__instagram w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram" 
                            href="<?php echo get_field( 'instagram', 'option' ) ?>" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                Link do Instagram
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field( 'spotify', 'option' ) ) : ?>
                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__spotify w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram" 
                            href="<?php echo get_field( 'spotify', 'option' ) ?>" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                Link do Spotify
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="col-12 mb-5">

                <div class="row">

                    <div class="col-md-6 mb-4 mb-md-0">

                        <h4 class="u-font-weight-bold u-color-folk-squid-ink mb-4">
                            Fale conosco
                        </h4>

                        <!-- <p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat consectetur eos est nemo eligendi, commodi quibusdam 
                            iusto odio quia in corrupti culpa inventore, nam sequi earum, 
                            non nesciunt obcaecati saepe!
                        </p> -->

                        <span class="d-block u-font-size-14 u-font-weight-regular u-color-folk-aluminium">
                            <?php the_content() ?>
                        </span>
                    </div>

                    <div class="col-md-6">

                        <!-- <form>

                            <div class="row justify-content-end">

                                <div class="col-md-6 my-2">
                                    <input class="w-100 border-0 rounded d-block u-font-size-12 u-font-weight-regular u-bg-folk-light-gray p-3" type="text" placeholder="Primeiro nome:">
                                </div>

                                <div class="col-md-6 my-2">
                                    <input class="w-100 border-0 rounded d-block u-font-size-12 u-font-weight-regular u-bg-folk-light-gray p-3" type="text" placeholder="último nome:">
                                </div>

                                <div class="col-md-6 my-2">
                                    <input class="w-100 border-0 rounded d-block u-font-size-12 u-font-weight-regular u-bg-folk-light-gray p-3" type="email" placeholder="E-mail:">
                                </div>

                                <div class="col-md-6 my-2">
                                    <input class="w-100 border-0 rounded d-block u-font-size-12 u-font-weight-regular u-bg-folk-light-gray p-3" type="text" placeholder="Telefone:">
                                </div>

                                <div class="col-12 my-2">
                                    <textarea class="w-100 border-0 rounded d-block u-font-size-12 u-font-weight-regular u-bg-folk-light-gray p-3" style="height:180px" placeholder="Telefone:"></textarea>
                                </div>

                                <div class="col-6 col-md-4 my-2">
                                    <input class="w-100 border-0 rounded d-block u-font-size-15 u-font-weight-bold text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3" type="submit" value="Enviar"> 
                                </div>
                            </div>
                        </form> -->

                        <?php echo do_shortcode( '[contact-form-7 id="12" title="Fale conosco"]' ); ?>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <iframe class="w-100 "src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d638.702406333728!2d-50.12486562302182!3d-25.10028988982298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81ba08536021f%3A0x6fcb650a99d496fd!2sR.%20Doral%C3%ADcio%20Correia%2C%20357%20-%20Uvaranas%2C%20Ponta%20Grossa%20-%20PR%2C%2084031-190!5e0!3m2!1spt-BR!2sbr!4v1655956105383!5m2!1spt-BR!2sbr" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
