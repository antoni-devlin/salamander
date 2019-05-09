<?php get_header(); ?>

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
            <img alt='test' src=" <?php the_post_thumbnail();?> " >
            <div class="image-text">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>
        <p><?php the_content(); ?></p> 
        <div class="tags">
            <p>
                    <a href="#">#TestCategory</a>
            </p>
        </div>
    </article>

  <?php }


 ?>

 <?php get_footer();?>
