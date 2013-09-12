<?php get_header(); ?>
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- Start The Loop -->
      <div class="span12">
      <center><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></center>
      <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
      <?php the_content() ?>
    </div><!-- End Span 4-->
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?><!-- End the Loop -->
  </div><!-- End "content" -->
  <div class="span12">
    <!--Start Nav-->
    <?php previous_posts_link( 'Newer Episodes' ); ?>//
    <?php next_posts_link( 'Older Episodes' , $max_pages ); ?>
    <!--End Nav-->
  </div><!-- End 12 span -->
<?php get_footer(); ?>