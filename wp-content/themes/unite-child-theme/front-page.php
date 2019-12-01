<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

get_header(); 

$args = array('post_type' => 'film', 
	   		  'posts_per_page' => 6,);
$property = new WP_Query( $args ); ?>


	<section id="primary" class="content-area col-sm-12 col-md-12 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( $property->have_posts() ) : ?>

			<div class="row">
				<?php /* Start the Loop */ ?>
				<?php while ( $property->have_posts() ) : $property->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php unite_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
	get_footer();
}
?>