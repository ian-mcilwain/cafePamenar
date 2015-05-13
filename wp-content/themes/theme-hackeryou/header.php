<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Pamenar</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="icon" href="http://pamenar.ianmcilwain.com/wp-content/themes/theme-hackeryou/images/pamenar.png">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<?php if(is_front_page()) : ?>
  <div class="header">

    <div class="headerOverlay">

    
    <?php  dynamic_sidebar( 'logo-widget-area' ); ?>
    <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
    </div>
    
  </div> <!-- header ends here -->

<?php endif; ?>