<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">	

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<!-- Image à la une ? -->
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if( function_exists( 'easy_image_gallery' ) ) : ?>
    		<div class="center">
    		<?php echo easy_image_gallery(); ?>
    		<div>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">
		<p><b>Nom</b> : <?php echo get_post_meta($post->ID, 'nom', true) ?></p>

		<p><b>Type</b> : <?php echo get_post_meta($post->ID, 'type', true) ?><br/>
		<b>Sexe</b> : <?php echo get_post_meta($post->ID, 'sexe', true) ?><br/>
		<b>Age</b> : <?php echo get_post_meta($post->ID, 'age', true) ?><br/>
		<b>Race</b> : <?php echo get_post_meta($post->ID, 'race', true) ?></p>
		</p>
			<?php if ( $post->post_content != "" ) : ?>
			<h3>En savoir plus : </h3>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			<?php endif; ?>
		<h3>" Je veux adopter cet animal ! "</h3>
		<p>Vous souhaitez accueillir cet animal chez vous ? Contactez-nous pour que l'on puisse se rencontrer !</p>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php //edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

