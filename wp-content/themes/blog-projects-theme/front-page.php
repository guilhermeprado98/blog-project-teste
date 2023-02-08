<?php get_header();?>

<div class="page-banner">
   <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
   <div class="page-banner__content container t-center c-white">

   </div>
</div>

<div class="full-width-split group">


   <?php
$homepageEvents = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'project',
));
?>
   <div class="full-width-split__two">
      <div class="full-width-split__inner">
         <h2 class="headline headline--small-plus t-center">Blog Projects</h2>
         <?php
$args = array(
    'post_type' => 'project', // Insira o nome do seu tipo de post personalizado aqui
    'posts_per_page' => 2, // Número de posts a serem exibidos
);
$custom_posts = new WP_Query($args);
if ($custom_posts->have_posts()):
    while ($custom_posts->have_posts()): $custom_posts->the_post();
        ?>
         <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
         <?php the_excerpt();?>
         <?php
    endwhile;
    wp_reset_postdata();
else:
?>
         <p><?php _e('Sorry, no posts matched your criteria.');?></p>
         <?php
endif;
?>




         <p class="t-center no-margin"><a href="<?php echo site_url('/project'); ?>" class="btn btn--yellow">Ver todos
               os
               Projetos</a></p>
      </div>
   </div>
</div>


<?php get_footer();

?>