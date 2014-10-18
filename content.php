<?php
/**
 * @package deerful
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="publishedpost">

		<h5 class="post-info">

			<div class="entry-meta">
			<?php deerful_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'deerful' ) );
				if ( $categories_list && deerful_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'in %1$s', 'deerful' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		<?php endif; // End if 'post' == get_post_type() ?>
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'deerful' ), __( '1 comment', 'deerful' ), __( '% comments', 'deerful' ) ); ?></span>
		<?php endif; ?>
	</h5><!--post-info-->
</div>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
<?php 
if ( has_post_thumbnail() ) {
		echo '<figure class="aligncenter wp-caption">';
		the_post_thumbnail('post-thumbnail', array( 'class'	=> "featured-image attachment-post-thumbnail"));
		echo '<figcaption class="wp-caption-text">'; echo get_post(get_post_thumbnail_id())->post_excerpt; echo'</figcaption>
	</figure>';
} else {
	// nothing here
}
?>


		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'deerful' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'deerful' ),
				'after'  => '</div>',
			) );
		?>

		<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'deerful' ) );
				if ( $tags_list ) :
			?>
			<div class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'deerful' ), $tags_list ); ?>
			</div>
			<?php endif; // End if $tags_list ?>
			<div class="addtoany-wrapper">
		<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
			</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'deerful' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
