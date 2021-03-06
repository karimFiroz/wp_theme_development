

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>


		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">

    

	
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!--bootstrap Start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet"href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap.min.css" type="text/css"/>
	<link rel="stylesheet"href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap-grid.min.css" type="text/css"/>
  <link rel="stylesheet"href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap-reboot.min.css" type="text/css"/>
  <link rel="stylesheet"href="<?php echo get_template_directory_uri();?>/asset/style.css" type="text/css"/>
  <!--bootstrap end->
  <div class="container">
  <div class="row">
  
  </div>
  </div>
  <?php wp_head(); ?>
</head>
<body class="<?php body_class();?>">
<div class="body_control_news-times">
<h1></h1><?php bloginfo( 'name' ); ?></h1>
 







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





<!--slider start-->
<div class="container">

<div class="row">




	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri();?>/asset/images/0.jpg" class="d-block w-100" alt="..."height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/asset/images/1.jpg" class="d-block w-100" alt="..."height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/asset/images/2.jpg" class="d-block w-100" alt="..."height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>



</div>

</div>
</div>
<!--end of slider-->


<div class="container">
<div class="row">
<!--navbar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--end of navbar-->
</div>
</div>

<div class="container">
  <div class="row">

          <div class="col-md-9">



         