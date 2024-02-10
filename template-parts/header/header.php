<!DOCTYPE html>
<html <?php language_attributes(); ?> class='dark'>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
    <header class="dark:bg-dc_black bg-white py-3">
     <div class="container mx-auto flex items-center justify-between px-4 max-w-3xl">
         <div class="flex items-center">
             <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                 <div class="w-auto max-w-40">
                     <?php the_custom_logo(); ?>
                 </div>
             <?php else : ?>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-lg font-bold"><?php bloginfo( 'name' ); ?></a>
             <?php endif; ?>
         </div>
            <nav class="hidden md:block">
             <?php
                 wp_nav_menu( array(
                     'header-menu' => 'header-menu',
                     'menu_class' => 'flex space-x-4 dark:text-dc_white text-dc_blue font-semibold',
                     'container' => false,
                 ) );
             ?>
            </nav>
        </div>
    </header>
