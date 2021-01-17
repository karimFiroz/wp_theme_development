</div>

<div class="col-md-3">

  
  <?php get_sidebar();?>

  </div>
</div>
</div>



	<footer>


	<container class="cr-nav">
<ul class="menu">

<?php
wp_nav_menu(
array(
'theme_location' =>'footer_menu',
'container_class' =>'cr-nav',
'items_wrap' =>'<ul coass="menu">%3$s</ul>'
)
);
?>
</ul>
</container>

	
		
</div>
<div class="container">
<div class="row">
		
			<div class="col-md-3">
			<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>

			<div class="col-md-3">
			<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>

			<div class="col-md-3">
			<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
			
			<div class="col-md-3">
			<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
			</div>


		</div>

		</div>
<h5>Home | About | Contact</h5>
	</footer>
	
<!--js start-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/asset/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/asset/js/bootstrap.bundle.min.js"></script>
<!--js end-->
<script src="<?php echo get_template_directory_uri();?>/asset/jQuery/jquery-3.3.1.min.js"></script>

	<script typt="text/javascript">
	$('.carousel').carousel();
	</script>


	<?php wp_footer(); ?>
	</div>
</body>
</html>