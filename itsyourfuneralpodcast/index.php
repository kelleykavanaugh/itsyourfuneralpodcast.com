<?php get_header(); ?>
  <div id="content">
    <div class="row">
      <div class="span12">
      <!-- Start The Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <center><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></center>
          <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
          <?php the_content() ?>
      </div><!-- End Span-->
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
      <!-- End the Loop -->
    </div><!-- End Row -->
  </div><!-- End "content" -->
  <div class="span12">
    <!--Start Nav-->
    <?php previous_posts_link( 'Newer Episodes' ); ?>//
    <?php next_posts_link( 'Older Episodes' , $max_pages ); ?>
    <!--End Nav-->
  </div><!-- End 12 span -->
<?php get_footer(); ?>