<?php get_header(); ?>


    <div class="container">
      <div class="row">

        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- post -->

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          <!-- no posts found -->
          <div class="page-header">
            <h1>Whoops!</h1>
          </div>

          <p>There's no content!</p>

          <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

     </div>   

<?php get_footer(); ?>