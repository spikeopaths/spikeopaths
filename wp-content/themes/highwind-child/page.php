<?php
/**
 * The page template.
 * @package highwind
 * @since 1.0
 *
 * Template name: Season
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly
get_header();

?>

<?php highwind_content_before(); ?>

<section class="content" role="main">

	<?php highwind_content_top(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<section class="article-content">

				<h1><?php the_title(); ?><small><?php the_field("season_dates"); ?></small></h1>

				<?php the_content(); ?>

			</section>

			<?php highwind_entry_bottom(); ?>

		</article>

	<?php endwhile; ?>

</section>

<?php highwind_content_after(); ?>

<?php get_footer(); ?>