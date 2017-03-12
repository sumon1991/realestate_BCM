<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Welcome To BASIS PROPERTIES ::</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri()?>/assets/css/full-slider.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri()?>/assets/style.css" rel="stylesheet" type="text/css">
<!--[if gte IE 9]> <style type="text/css"> .gradient { filter: none; } </style> <![endif]-->
<?php wp_head();?>
</head>

<body class="home">

<?php if(is_home() || is_front_page()){?>
<div class="banner">
  <div id="owl-example" class="owl-carousel">
  
  <?php query_posts(array('post_type' => 'slider'));?>
  <?php if(have_posts()): while(have_posts()): the_post();?>
  
  
  
    <div class="owl-slide" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;"> </div>
    
    <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_query();?>
    
      <!--<div class="owl--text">This is a full height Owl slider. There is nothing else interesting here!</div>--> 
    
   <?php /*?> <div class="owl-slide" style="background-image:url(<?php echo get_template_directory_uri()?>/assets/images/banner2.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;"> </div>
    <div class="owl-slide" style="background-image:url(<?php echo get_template_directory_uri()?>/assets/images/banner3.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;"> </div>
    <div class="owl-slide" style="background-image:url(<?php echo get_template_directory_uri()?>/assets/images/banner4.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;"> </div><?php */?>
  </div>
</div>
<?php } ?>

<div class="page">
  <div class="mainWrap clearfix"> 
    
    <!--site-header-->
    <header class="site-header  ltCls">
      <div class="siteHeader ltCls">
        <div class="headerUp clearfix globalClr">
          <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="logo" /></a> </div>
          
                  <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

            <!-- #site-navigation --> 
          
       
        	 
        </div>
        <?php if(is_home() || is_front_page()){?>
        <div class="headerDown clearfix globalClr">
           		<?php dynamic_sidebar('Header welcome section');?>
          	</div>
        <?php }?>
      </div>
    </header>
    <!--/site-header--> 

	<div class="site-main  rtCls">