<?php

/*
	Template Name: Food Menu
*/

get_header();  ?>



<div class="menuTitleBar">

<div class="menuLogo"> <a href="http://pamenar.ianmcilwain.com/"> <?php  dynamic_sidebar( 'logo-widget-area' ); ?></a> <h2>Food Menu</h2> </div>
</div>

<div class="wineMenu widgetMenu"><ul><?php  dynamic_sidebar( 'wine-menu-widget-area' ); ?></ul></div>
<div class="menuContent">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
</div>

<?php get_footer(); ?>
