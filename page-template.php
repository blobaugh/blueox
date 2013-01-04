<?php get_header(); ?>

<div class="container_12 page">
	<h2 class="letterpress"><span><?php the_title(); ?></span></h2>
	<div class="page-main grid_8 alpha omega">
		<?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
			<?php if ( get_the_post_thumbnail( $post->ID ) != '' ) the_post_thumbnail( 'page-full' ); ?>
			<div class="post">
				<?php the_content(); ?>&nbsp;
			</div>
		<?php endwhile; endif; ?>
	</div>


	<div class="sidebar grid_4 omega">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
