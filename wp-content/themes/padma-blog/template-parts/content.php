<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Padma Blog
 */
if ( ! is_singular( ) ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row align-items-center">
		<?php if ( has_post_thumbnail ()): ?>
	    <div class="col-md-6">
	        <div class="blog-img">
	            <?php padma_post_thumbnail(); ?>
	        </div>
	    </div>
		<?php endif; ?>
	    <div class="<?php if ( has_post_thumbnail () ): ?>col-md-6<?php else: ?> col-md-12 <?php endif; ?>">
	        <div class="blog-text">
	            <?php the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
	            <span>
	            <?php
		            padma_posted_by(); 
		            padma_posted_on(); 
	            ?>	
	            </span>
	            <?php
	            the_excerpt();
	            echo'<a href="'.esc_url ( get_the_permalink( $post->ID ) ).'" class="underline-text">'.esc_html__('Read More','padma-blog').'</a>'; ?>
	        </div>
	    </div>
	</div>
</article>
<?php else: ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php padma_post_thumbnail(); ?>
		<div class="post-content">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );

				endif;

				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php 
							padma_posted_on();
							padma_posted_by(); 
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php

				if(is_single( )){
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'padma-blog' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
				}
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'padma-blog' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<?php if ( is_singular() ) : ?>
				<footer class="entry-footer">
					<?php padma_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>