<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package office-forms
 */

?>

<html>
	<head>

<?php
	if($_REQUEST['css'])
	{
		?>
		<link href="<?php echo urldecode($_REQUEST['css']); ?>" rel="stylesheet">
	<?php
	}
	?>
<style type="text/css">
	body { display: block; }
	button, [type="button"], [type="reset"], [type="submit"] { margin-top: 1em; }
	h3.Row__title { 
	color: #861f41;
	margin: 1em 0;
    font-family: "Source Sans Variable";
    font-weight: 600;
    font-variation-settings: "wght" 600;
    font-size: 1.6em;
    line-height: 1;
}
.gfield_required {
    color: #9E0B0F;
    margin-left: 4px;
}
	.gfield_label {margin-bottom: .5em; font-weight: bold; font-size: 1.2em;}
	.formEmbed {
		width: 100%;
		max-width: 960px;
		margin: 1em auto;
	}
	form ul {
    list-style: none;
    list-style-image: none;
    padding: 0 !important;
    margin: 0;
	}
	input.button {
	color: #861f41;
    font-family: "Source Sans Variable";
	    
	}
	
		</style>
	</head>
	<body>
		<div id="post-<?php the_ID(); ?>" <?php post_class('formEmbed'); ?>>

			<?php
	$title = isset( $post->post_title ) ? $post->post_title : '';
	if($title != "Home") :
		if ( is_singular() ) :
			the_title( '<h3 class="Row__title">', '</h3>' );
		else :
			the_title( '<h3 class="Row__title">', '</h3>' );
		endif;
		endif;
		?>

	<?php // office_forms_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'office_forms' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'office_forms' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
<!-- #post-<?php the_ID(); ?> -->
		</div>
	</body>
</html> 
	
