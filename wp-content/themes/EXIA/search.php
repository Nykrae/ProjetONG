<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();
wp_enqueue_script( 'search', get_bloginfo('stylesheet_directory').'/js/search.js', array( 'jquery' ), '1.0', true ); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1>
			</header>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<div class="page-content">
				<div class="search_animal clear">
					<h2>Rechercher un animal</h2>
					<form method="get" action="<?php bloginfo('url'); ?>">
						<table>
							<tr>
								<td><label>Vous recherchez :</label></td>
								<td><label>Sexe</label></td>
								<td><label>Age</label></td>
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
								<td><input id="search" type="button" value="Rechercher"/></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>