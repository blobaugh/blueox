<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div id="article post-<?php the_ID(); ?>" <?php post_class() ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div> <!-- #article -->

		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
