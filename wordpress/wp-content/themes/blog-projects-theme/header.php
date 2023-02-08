<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <meta charset="<?php bloginfo('charset');?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head();?>
</head>

<body <?php body_class();?>>
   <header class="site-header">
      <div class="container">
         <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Blog</strong> Projects</a>
         </h1>
         <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
               aria-hidden="true"></i></span>
         <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
         <div class="site-header__menu group">
            <nav class="main-navigation">
               <ul>
                  <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) {
    echo 'class="current-menu-item"';
}
?>><a href="<?php echo site_url('/') ?>">Home</a></li>
                  <li><a href="/contact">Contato</a></li>

                  <li <?php if (get_post_type() == 'post') {
    echo 'class="current-menu-item"';
}
?>><a href="<?php echo site_url('/project'); ?>">Listagem de Projetos</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </header>