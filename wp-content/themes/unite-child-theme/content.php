<?php
/**
 * @package unite
 */
?>
	<div class="col-md-4">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header page-header">

				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( 'film_thumb', array( 'class' => 'thumbnail' )); ?>
				</a>

				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php unite_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<p><a class="btn btn-primary read-more" href="<?php the_permalink(); ?>"><?php _e( 'Continue reading', 'unite' ); ?> <i class="fa fa-chevron-right"></i></a></p>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="row">
				<div class="col-md-12">
					<span class="tax-item"><?php _e( 'Страна:', 'unite' ); ?></span>
					<?php
					$country = get_terms('country_taxonomy');
					if($country){
						foreach ($country as $c){
							echo '<span class="tax-item__val">'.$c->name.'</span>';
						}
					} ?>
				</div>	
				<div class="col-md-12">
					<span class="tax-item"><?php _e( 'Жанр:', 'unite' ); ?></span>
					<?php
					$genre = get_terms('genre_taxonomy');
					if($genre){
						foreach ($genre as $g){
							echo $g->name.' ';
						}
					} ?>
				</div>
				<div class="col-md-12">
					<span class="tax-item"><i class="fa fa-money" aria-hidden="true"></i> <?php _e( 'Стоимость сеанса:', 'unite' ); ?></span> <?php echo get_field('films_session-cost') ?><?php _e( ' руб', 'unite' ); ?> 
				</div>
				<div class="col-md-12">
					<span class="tax-item"><i class="fa fa-calendar" aria-hidden="true"></i> <?php _e( 'Дата выхода в прокат:', 'unite' ); ?></span> <?php echo get_field('films_date') ?>
				</div>
			</div>
			<div class="entry-content">

				<?php if(of_get_option('blog_settings') == 1 || !of_get_option('blog_settings')) : ?>
					<?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
				<?php elseif (of_get_option('blog_settings') == 2) :?>
					<?php the_excerpt(); ?>
				<?php endif; ?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		</article><!-- #post-## -->
	</div>
