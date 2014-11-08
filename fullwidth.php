<?php
/*
Template Name: Full Width
*/
?>


<?php get_header(); ?>
  <div class="container" style="background-color: black;">
    <div class="row">
      <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
      <?php edit_post_link(); ?>

    <?php endwhile; ?>

    <?php
      if ( get_next_posts_link() ) {
        next_posts_link();
      }
    ?>

    <?php
      if ( get_previous_posts_link() ) {
        previous_posts_link();
      }
    ?>

<?php else: ?>
  <p>No posts found. :(</p>

<?php endif; ?>
    </div>
  </div> <!-- container-fluid -->

  
<?php get_footer(); ?>