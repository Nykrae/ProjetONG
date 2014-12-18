<?php
/*
Template Name: Accueil
*/
get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=164344320290833&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
							<?php $posts = get_posts('category=animal-du-mois&numberposts=1'); 
							foreach($posts as $post) : 
								setup_postdata($post);?>

								<div class="photo_mois">
									<?php the_post_thumbnail('thumbnail');?>
								</div>

								<div class="desc_mois">
									<h2>L'animal du mois</h2>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									<?php the_excerpt();?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Lire la suite</a>
								</div>
								
							<?php endforeach; 
							wp_reset_postdata();?>
						</div>

						<div id="search_animal" class="clear">
							<h2>Rechercher un animal</h2>
							<?php get_search_form(); ?>
						</div>

						<div id="infos_accueil" class="clear">

							<div id="bloc_urgences">
								<h3>Les urgences</h3>
								<?php $post = get_post(56); 
								$content = $post->post_content ; 
								echo $content ; ?>
							</div>

							<div id="bloc_don">
								<h3>Faire un don en ligne</h3>
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
<?php get_footer(); ?>