<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

				<div class="site-info clear">

					<div id="bloc_footer">
					<div class="bloc fl clear center random_footer">
						<h3>Nos animaux</h3>
						<?php $posts = get_posts('category_name=adoptez-moi&numberposts=1&orderby=rand'); 
							foreach($posts as $post) : 
								setup_postdata($post);?>
								<div class="photo_random">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	<?php the_post_thumbnail('thumbnail');?> </a>
								</div>
							<?php endforeach; 
						wp_reset_postdata();?>
					</div>

					<div class="fl bloc">
						<h3>Faire un don en ligne</h3>
						<?php $don = get_post(9); 
						$content_don = $don->post_content ; 
						echo $content_don ; ?>
					</div>

					<div class="fl bloc">
						<h3>Contactez-nous</h3>
						<?php $contact = get_post(102); 
						$content_contact = $contact->post_content ; 
						echo $content_contact ; ?>
					</div>

					<div class="fl bloc">
						<h3>Retrouvez-nous sur Facebook</h3>
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Les-Ptites-Pattes-76/184892541664395" 
						data-width="250" data-height="220" 
						data-colorscheme="light" data-show-faces="true" 
						data-header="false" data-stream="false" data-show-border="false"></div>
					</div>
				</div>

				<div class="clear">
					© Les P'tites Pattes 76, association d'aide aux animaux en difficultés - <?php echo date('Y'); ?> - <a href="./mentions-legales">Mentions légales</a>
					<?php do_action( 'twentythirteen_credits' ); ?>
				</div>	
			</div><!-- .site-info -->

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>