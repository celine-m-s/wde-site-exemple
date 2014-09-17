
<?php get_header(); ?>

  <section id="home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
           <?php if (have_posts()) : ?>
            <?php $counter = 2; ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="col-md-6">
                <article class="home-article">
                  <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full', array("class" => "img-responsive rounded centered home-picture")); ?></a>
                  <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                 <p>
                  <?php the_excerpt(); ?>
                 </p>
               </article>
             </div>

             <?php $counter++;
             if ($counter % 2 == 0) {
             echo '</div><div class="star">
          <span><i class="fa fa-star yellow"></i></span>
        </div><div class="row">';
             }
             ?>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>



























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