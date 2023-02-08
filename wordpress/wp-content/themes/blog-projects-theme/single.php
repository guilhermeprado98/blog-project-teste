<?php

get_header();

while (have_posts()) {
    the_post();?>
<div class="page-banner">
   <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
   <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>

   </div>
</div>

<div class="container container--narrow page-section">
   <?php
/*
    Template Name: Custom Post Type Template
     */
    get_header();
    ?>
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
         <?php
$args = array(
        'post_type' => 'projects', // Insira o nome do seu tipo de post personalizado aqui
    );
    $custom_posts = new WP_Query($args);
    if ($custom_posts->have_posts()):
        while ($custom_posts->have_posts()): $custom_posts->the_post();
            ?>
         <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
         <?php the_content();?>
         <?php
    endwhile;
        wp_reset_postdata();
    else:
    ?>
         <p><?php _e('Sorry, no posts matched your criteria.');?></p>
         <?php
endif;
    ?>
      </main><!-- #main -->
   </div><!-- #primary -->
   <?php
get_footer();
    ?>

</div>



<?php }

get_footer();

?>