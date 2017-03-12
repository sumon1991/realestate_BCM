<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div>
  </div></div>
  <!--site-footer-->
  <footer class="site-footer globalClr clearfix">
    <div class="footerCont">
      <div class="footerMain globalClr clearfix">
        <div class="social rtCls">
          <ul>
          <?php dynamic_sidebar('Footer Social Media');?>            
          </ul>
        </div>
        <?php dynamic_sidebar('Footer Copyright section');?>
        
      </div>
    </div>
  </footer>
  <!--/site-footer--> 
  


<!-- jQuery library (served from Google) --> 


<?php wp_footer();?>

<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/html5.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/functions.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/customScript.js"></script>




</body>
</html>
