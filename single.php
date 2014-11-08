<?php get_header(); ?>

<div class="container-fluid">
     <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail('full', array("class" => "img-responsive")) ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php comments_template('/comments.php', true); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo "no posts"; ?>
    <?php endif; ?>



</div>

<?php get_footer(); ?>