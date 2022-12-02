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
<section>
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">
                <?php echo do_shortcode( '[rev_slider alias="recuperacao"][/rev_slider]' ); ?> 
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- our communities -->
<?php echo get_template_part( 'template-parts/content', 'recovery-our-communities' ) ?>
<!-- end our communities -->

<!-- institutional posts -->
<?php echo get_template_part( 'template-parts/content', 'recovery-posts' ) ?>
<!-- end institutional posts -->

<!-- institutional special content -->
<?php echo get_template_part( 'template-parts/content', 'recovery-special-content' ) ?>
<!-- end institutional special content -->

<!-- recovery phase -->
<?php echo get_template_part( 'template-parts/content', 'recovery-phase' ) ?>
<!-- end recovery phase -->

<!-- recovery testimonials -->
<?php echo get_template_part( 'template-parts/content', 'recovery-testimonials' ) ?>
<!-- end recovery testimonials -->

<!-- help -->
<?php echo get_template_part( 'template-parts/content', 'help' ) ?>
<!-- end help -->

<!-- gallery -->
<?php echo get_template_part( 'template-parts/content', 'gallery' ) ?>
<!-- end gallery -->

<!-- video -->
<?php echo get_template_part( 'template-parts/content', 'video' ) ?>
<!-- end video -->

<!-- partners -->
<?php echo get_template_part( 'template-parts/content', 'partners' ) ?>
<!-- end partners -->

<!-- institutional newsletter -->
<?php echo get_template_part( 'template-parts/content', 'institutional-newsletter' ) ?>
<!-- end institutional newsletter -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
