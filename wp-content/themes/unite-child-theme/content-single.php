<?php
/**
 * @package unite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row"> 
		<div class="col-md-4"> 
			<?php 
	        if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
	            the_post_thumbnail( 'film_thumb', array( 'class' => 'thumbnail' )); 
	        endif; ?>
	    </div>
		<div class="col-md-8"> 
			<header class="entry-header page-header">
				<h1 class="entry-title "><?php the_title(); ?></h1>
				<div class="entry-meta">
					<?php unite_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
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
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-meta">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', 'unite' ) );

					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', 'unite' ) );

					if ( ! unite_categorized_blog() ) {
						// This blog only has 1 category so we just need to worry about tags in the meta text
						if ( '' != $tag_list ) {
							$meta_text = '<i class="fa fa-folder-open-o"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
						} else {
							$meta_text = '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
						}

					} else {
						// But this blog has loads of categories so we should probably display them here
						if ( '' != $tag_list ) {
							$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s <i class="fa fa-tags"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
						} else {
							$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
						}

					} // end check for categories on this blog

					printf(
						$meta_text,
						$category_list,
						$tag_list,
						get_permalink()
					);
				?>

				<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
				<?php unite_setPostViews(get_the_ID()); ?>
				<hr class="section-divider">
			</footer><!-- .entry-meta -->
		</div>
	</div>
</article><!-- #post-## -->
