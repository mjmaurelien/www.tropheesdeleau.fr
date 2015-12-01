<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<article>
	<h2><?php the_category() ?></h2>
	<?php the_post_thumbnail('accueil'); ?>
	<div class="gallery">
		<?php the_post_thumbnail('gallery'); ?>
	</div>
	<h1><?php the_title() ?></h1>
	<?php the_excerpt()?>
	<a href="<?php the_permalink(); ?>">Lire la suite</a>

	<ul class="social_media">
		<li><a href="<?php the_permalink(); ?>"><img src="http://placehold.it/18x18"></a></li>
		<li><a href="<?php the_permalink(); ?>"><img src="http://placehold.it/18x18"></a></li>
		<li><a href="<?php the_permalink(); ?>"><img src="http://placehold.it/18x18"></a></li>
	</ul>
</article>
<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	ICI CONTENU normal !!!!
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
*/
