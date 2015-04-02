<?php get_header(); ?>


    <div class="container">
      <div class="row">

        <div class="col-md-9">

          <div class="page-header">
            <h1><?php wp_title(''); ?></h1>
          </div>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- post -->

          <article class="page-header">

            <h1><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h1>
            <p>By <?php the_author(); ?> 
              on <?php echo the_time('l, F, jS, Y') ?>
              in <?php the_category( ', ' ); ?>.
              <br>
              <a href="<?php comments_link(); ?>"><?php comments_number( 'No comments' );?></a>
            </p>

          </article>

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