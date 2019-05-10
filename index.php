<?php get_header(); ?>

    <body>
        <nav>
            <ul>
                <?php if (has_site_icon()) { ?>
                  <li><a href="/"><img class="logo" src="/media/dvln-logo.png" alt=""></a></li>
                <?php } else { ?>
                  <li><a href="/">Home</a></li>
                <?php } ?>

                <li><a href="/">Home</a></li>
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
                      <p> <?php the_excerpt(); ?></p>
                      <p><a href="<?php echo get_permalink(); ?>">Read More</a> </p>
                      <div class="tags">
                          <p>
                            <?php
                            $categories = get_categories();
                            foreach($categories as $category) {
                              echo '<a href="' . get_category_link($category->term_id) . '">#' . $category->name . '</a>';
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
