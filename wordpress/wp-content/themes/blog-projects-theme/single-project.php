<?php
get_header();
?>


<div class="page-banner">
   <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
   <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
   </div>
</div>

<div id="primary" class="content-area" style="margin-left: 50px;">
   <main id="main" class="site-main">
      <?php
while (have_posts()):
    the_post();
    ?>
      <h1><?php the_title();?></h1>
      <?php the_content();?>
      <?php
endwhile; // fim do loop
?>
   </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>