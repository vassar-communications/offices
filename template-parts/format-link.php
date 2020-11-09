<?php
/**
 * Template part for displaying posts that have no content and link elsewhere
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vassar
 */

?>

<?php

if(cfg('POST__THUMB_URL_INLINE')) {
	$article_data_attr = 'data-image-url="'.get_the_post_thumbnail_url().'"';
}	
	
?>


<?php
	if(cfg('POST__THUMB_URL_CSSVAR')) {
		echo '<style>#post-'.get_the_ID().' { --article-featured-img: url('.get_the_post_thumbnail_url().'); }</style>';
	}
?>

<article id="post-<?php the_ID(); ?>" <?php echo $article_data_attr; post_class(); ?>>

	<header class="post__header">
		<?php
		the_title( '<h2 class="post__title"><a class="post__titleLink" href="' . $post->post_override_link . '" rel="bookmark">', '</a></h2>' );
		?>

    <b>
        <?php
        $parse = parse_url($post->post_override_link);
        echo $parse['host'];
        ?>
    </b>

	</header><!-- .entry-header -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post__meta">
			<?php
				
				vassar_posted_on();
				if(cfg('POST__SHOW_AUTHOR')) vassar_posted_by();
				vassar_entry_meta();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

		<div class="post__image">
<?php 
the_post_thumbnail( 'news-thumbnail-size', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
				?>
		</div><!-- .post-thumbnail -->


	<div class="entry__content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->

	<?php
		if(cfg('SITE__ALLOW_COMMENTS')) {
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		}
	?>
	
</article><!-- #post-<?php the_ID(); ?> -->
