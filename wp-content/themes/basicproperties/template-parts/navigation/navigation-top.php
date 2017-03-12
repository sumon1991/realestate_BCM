<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div id="navbar" class="navbar">
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'twentyseventeen' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'container' => 'div', 
		'container_class' => 'menu-main-nav-container',
		'menu_id'        => 'top-menu',
		'items_wrap' => '<ul id="primary-menu" class="nav-menu">%3$s</ul>'
	) ); ?>

	
</nav><!-- #site-navigation -->
</div>
