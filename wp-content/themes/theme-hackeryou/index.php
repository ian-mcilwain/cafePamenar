<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
	<p>this is index.php</p>
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

