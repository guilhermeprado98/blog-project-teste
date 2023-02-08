<?php

get_header();?>

<div class="page-banner">
   <div class="page-banner__bg-image"
      style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
   <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Bem vindo!</h1>
      <div class="page-banner__intro">
         <p>Confira os últimos projetos.</p>
      </div>
   </div>
</div>

<div class="container container--narrow page-section">
   <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

</div>

<?php get_footer();

?>