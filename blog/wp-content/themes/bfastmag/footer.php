<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bfastmag
 */

?>

<?php

/**
 * bfastmag_action_site_content_end hook
 *
 * @hooked bfastmag_footer_container_start - 10
 */ 
	bfastmag_action_site_content_end();
	bfastmag_action_widget_before_footer();
 /**
 * bfastmag_action_footer_container_start hook
 *
 * @hooked bfastmag_footer_container_start - 10
 */
	bfastmag_action_footer_container_start();

/**
 * bfastmag_action_footer_container_start hook
 *
 * @hooked bfastmag_footer - 10
 */

	//bfastmag_action_footer_content();

/**
 * bfastmag_action_footer_container_end hook
 *
 * @hooked bfastmag_footer_container_end - 10
 */
	bfastmag_action_footer_container_end();
/**
 * bfastmag_action_page_end hook
 *
 * @hooked bfastmag_page_end - 10
 */
	
	bfastmag_action_page_end();
?>	  
	
<?php wp_footer(); ?>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "e066cf63671c9098cd096d6f29888dcd"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
</body>
</html>