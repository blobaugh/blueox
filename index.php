<?php get_header(); ?>

<div class="container_12">
    <div class="blog-main listing grid_8 alpha">
      <div class="posts">
        <?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
          <div class="post">
            <div class="image">
              <a href="<?php the_permalink(); ?>">
                <?php if( get_the_post_thumbnail($post->ID) != '' ) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>  
                <?php else : ?>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/PH-thumbnail.png">
                <?php endif; ?>
              </a>
            </div>
            <div class="content">
              <h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
              <a href="#" class="share">+ Share</a>
              <a href="<?php the_permalink(); ?>" class="more">Read More ></a>
            </div> <!-- .content -->
            <div style="clear:both;"></div>
          </div>  <!-- .post -->
          <hr>
        <?php endwhile; endif; ?>
      </div> <!-- .posts -->
    
    </div>  <!-- .home-main.grid_8 -->

    <div class="sidebar grid_4 omega">
      <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
