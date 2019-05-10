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

	<style>
  	body {
  		background-color: white;
  	}
	</style>
            <?php
            while(have_posts()) {
              the_post(); ?>
            <article class="post post_detail">
                <div class="post_image_heading">
                    <img src=" <?php the_post_thumbnail_url();?> " alt="chris-arock-199799-unsplash_J7R3sga.jpg">
                    <div class="image-text">
                        <h3> <?php the_title(); ?> </h3>
                    </div>
                </div>
                <p>  <?php the_content(); ?> </p>
                <!-- Feb. 17, 2019, 10:29 a.m. -->
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
          <?php }


         ?>

            </main>
            <aside class="sidebar_right">
            </aside>
        </div>
<?php get_footer(); ?>
