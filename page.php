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
                <h1> <?php the_title(); ?> </h1>
                <p> <?php the_content(); ?> </p>



            </main>
            <aside class="sidebar_right">
            </aside>
        </div>
      <?php get_footer(); ?>
