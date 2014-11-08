
<?php get_header(); ?>

  <section id="home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
           <?php if (have_posts()) : ?>
            <?php $counter = 0; ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="col-md-4">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array("class" => "img-responsive home-picture")); ?></a>
                <section>
                  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                  <?php the_excerpt(); ?>
                </section>
              </div> <!-- closes col-md-4 -->

              <?php $counter += 1; ?>
              <?php if ($counter % 3 == 0) {
                echo '</div><div class="star">
          <span><i class="fa fa-star yellow"></i></span>
        </div><div class="row">';
                } ?>
            <?php endwhile; ?>
          <?php else : ?>
            <?php echo "no posts"; ?>
          <?php endif; ?>
        </div> <!-- closes row -->
      </div> <!-- fermeture col-md-9 -->


        <div class="col-md-3">
          <aside>
            <ul id="sidebar">
               <?php dynamic_sidebar( 'Main Sidebar' ); ?>
            </ul>        
          </aside>
        </div>
      </div>
    </div>
    



    </div> <!-- container-fluid -->
  </section>

  
<?php get_footer(); ?>