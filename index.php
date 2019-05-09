<?php get_header(); ?>

    <body>
        <nav>
            <ul>
                <?php if (has_site_icon()) { ?>
                  <li><a href="/"><img class="logo" src="/media/dvln-logo.png" alt=""></a></li>
                <?php } else { ?>
                  <li><a href="/">Home</a></li>
                <?php } ?>


                <li><a href="#">About</a></li>
                <li><a href="#">CV</a></li>
            </ul>
        </nav>
        <div class="container">
            <aside class="sidebar_left">
            </aside>
            <main class="main_col">
              <?php

                while(have_posts()) {
                  the_post(); ?>
                  <article class="post">
                      <div class="post_image_heading">
                          <img alt='test' src=" <?php the_post_thumbnail();?> " >
                          <div class="image-text">
                              <h3><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a></h3>
                          </div>
                      </div>
                      <p> <?php the_content(); ?> </p>
                      <div class="tags">
                          <p>
                            <?php
                            //Loop through the $posts array IF it is an array.
                            if(is_array($cats)){
                                foreach($cats as $cat){ ?>
                                  <a href="<?php echo get_category_link($cat->cat_ID); ?>">
                                    #<?php echo $cat->name; ?>
                                  </a>
                              <?php }
                            }
                            ?>
                          </p>
                      </div>
                  </article>
                  <hr>
                <?php }


               ?>
            </main>
            <aside class="sidebar_right">
            </aside>
        </div>
      <?php get_footer(); ?>
