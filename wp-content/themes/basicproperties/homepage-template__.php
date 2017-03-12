<?php
/*
* Template Name: Home page Template
*/
get_header(); ?>
		
<!--site-main-->
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="site-main  rtCls">
			  <div class="homeBox">
				<?php if(have_posts()): while(have_posts()): the_post();?>
                <?php the_content();?>
                <?php endwhile; endif; wp_reset_query();?>
			  </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
    
	
<?php get_footer(); ?>