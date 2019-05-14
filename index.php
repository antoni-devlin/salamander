<?php get_header(); ?>

<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

 ?>

    <body>
        <nav>
            <ul>
                <?php if (has_custom_logo()): ?>
                <li><a href="/"><img class="logo" src=" <?php echo $image[0]; ?> " alt=""></a></li>
                <?php else: ?>
                <li> <a href="/">Home</a></li>
                <?php endif; ?>
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
                        <?php if (has_post_thumbnail()): ?>
                          <img alt='' src=" <?php the_post_thumbnail();?> " >
                        <?php endif; ?>
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
