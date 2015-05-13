 

<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">
	
  <div class="container">

    <div class="wrapper">
 
    	<div class="about">

    		<h1> <?php  dynamic_sidebar( 'title-widget-area' ); ?></h1>
    		
    		<p><?php  dynamic_sidebar( 'about-widget-area' ); ?></p>

    	</div> <!-- about ends here -->

    	<div class="menus clearfix	">
    		<h2>Menus</h2>

    		<div class="coffeeAndTea menu">
            <div class="overlay">
            <a class="iframe colorbox" href="http://pamenar.ianmcilwain.com/whatever/coffee-menu/"><img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg"></a>    
            <h3>Coffee And Tea</h3>
            </div>
            </div>

    		<div class="food menu">
    		<a class="iframe colorbox" href="http://pamenar.ianmcilwain.com/whatever/food-menu/"><img src="<?php echo get_template_directory_uri(); ?>/images/Pastries.jpg"></a>
    		<h3>Food</h3>
    		</div>

    		<div class="beer menu">
    		<a class="iframe colorbox" href="http://pamenar.ianmcilwain.com/whatever/beer-menu/"><img src="<?php echo get_template_directory_uri(); ?>/images/Beer.jpg"></a>
    		<h3>Beer</h3>
    		</div>

    		<div class="wine menu">
    		<a class="iframe colorbox" href="http://pamenar.ianmcilwain.com/whatever/wine-menu/"><img src="<?php echo get_template_directory_uri(); ?>/images/Wine.jpg"></a>
    		<h3>Wine</h3>
    		</div>


        
    		
    	</div><!-- menus end here -->
        <?php  dynamic_sidebar('openTable-widget-area'); ?>
    </div> <!-- wrapper ends here -->
   
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>