  <?php get_header(); ?>
  <div id="content">
    <div class="row-fluid">
      <div class="span9">
      <!-- Start The Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <center><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></center>
          <?php the_time('F jS, Y') ?>
          <p class="text-right">Post By: <?php the_author_posts_link() ?></p>
          <?php the_content() ?>

          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
      <!-- End the Loop -->
      </div><!--/ .span -->
      <div class="span3">
        <?php get_sidebar( ); ?>
      </div><!--/ .span -->
    </div><!--/ .row -->
  </div><!--/ .content -->
    <div class="row-fluid">
      <div class="span12">
        <!--Start nav-->
        <?php previous_posts_link( 'Newer Episodes' ); ?>
        <?php next_posts_link( 'Older Episodes' , $max_pages ); ?>
        <!--/ nav-->
      </div><!--/ .span -->
    </div><!--/ .row-fluid -->
  <?php get_footer(); ?>