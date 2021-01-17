<?php
global $post;
$args =array(
    'posts_per_page'=>-1,
    'post_type' =>'slider-item',
    'page'      =>$paged,
    'order'     =>'ASC'
);
$allInfo = get_posts($args);
foreach($allInfo as $post):setup_postdata($post);
?>
$bannerImageURL = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider-item');
<?php the_title();?>
<?php the_content();?>
<?php endforeach; ?>

<a href="<?php echo $bannerImageURL[0];?>"></a>
<a href="<?php the_permalink();?>"></a>
<a href="<?php the_author();?>"></a>
<a href="<?php comments_popup_link('No comments','1 comment','% comments');?>"></a>


