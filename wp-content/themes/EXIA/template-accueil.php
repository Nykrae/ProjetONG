<?php
/*
Template Name: Accueil
*/
get_header();
wp_enqueue_script( 'search', get_bloginfo('stylesheet_directory').'/js/search.js', array( 'jquery' ), '1.0', true ); 
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

					</div><!-- .entry-content -->

					<div class="entry-accueil">
						<div id="animal_mois" class="clear">
							<?php $posts = get_posts('category_name=animal-du-mois&numberposts=1'); 
							foreach($posts as $post) : 
								setup_postdata($post);?>

								<div class="photo_mois">
									<?php the_post_thumbnail('thumbnail');?>
								</div>

								<div class="desc_mois">
									<h2>L'animal du mois</h2>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									<?php the_excerpt();?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="fr">Découvrir sa fiche</a>
								</div>
								
							<?php endforeach; 
							wp_reset_postdata();?>
						</div>

						<div class="search_animal clear">
							<h2>Rechercher un animal</h2>
							<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<table>
									<tr>
										<td><label>Vous recherchez :</label></td>
										<td><label>Sexe : </label></td>
										<td><label>Age : </label></td>
										<td></td>
									</tr>

									<tr>
										<td>
										<input type="radio" name="type" class="type" value="chien" /> Un chien
										<input type="radio" name="type" class="type" value="chat" /> Un chat</td>
										<td>
										<input type="radio" name="sexe" value="femelle"/> Femelle
										<input type="radio" name="sexe" value="male"/> Male
										</td>
										<td><input type="text" name="age" size="2" maxlength="2" /> ans</td>
										<td class="center"><input id="search" type="button" value="Rechercher"/></td>
									</tr>
								</table>
							</form>

							<?php //get_search_form(); ?>
						</div>

						<div id="infos_accueil" class="clear">

							<div id="bloc_urgences">
								<h3>Les urgences</h3>
								<?php $urgences = get_post(12); 
								$content = $urgences->post_content ; 
								echo $content ; ?>
							</div>

							<div id="bloc_don">
								<h3>Faire un don en ligne</h3>
								<?php $don = get_post(9); 
								$content_don = $don->post_content ; 
								echo $content_don ; ?>
							</div>

							<div id="bloc_facebook">
								<h3>Retrouvez nous sur Facebook</h3>
							<div class="fb-like-box" data-href="https://www.facebook.com/pages/Les-Ptites-Pattes-76/184892541664395?fref=ts" 
							data-colorscheme="light" data-width="250" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
							</div>

						</div>
					</div>

				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php //get_footer(); ?>

</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				© Les P'tites Pattes 76, association d'aide aux animaux en difficultés - <?php echo date('Y'); ?> - <a href="./mentions-legales">Mentions légales</a>
				<?php do_action( 'twentythirteen_credits' ); ?>
				</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>