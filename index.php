<?php get_header();?>







<?php 
if(have_posts()):

while(have_posts()): 
the_post();
?>
<div>
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<p><?php the_time();?></p>
<p><?php the_category();?></p>
<p><?php the_author();?></p>
<p><?php the_excerpt();?></p>
<a href="<?php the_permalink();?>">Read more...</a>
</div>

<?php
endwhile;
else:
 endif;

 ?>

 <!-- <?php wp_reset_quary();?> -->

<?php get_footer();?>