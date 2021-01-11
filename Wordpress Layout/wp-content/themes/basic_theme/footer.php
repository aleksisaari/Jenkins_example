<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Basic_theme
 */
?>

<footer id="colophon" class="site-footer">
	<div class="site-info" align="center">
		<h3>
			<p>Your name here</p>
		</h3>
		<p>
			Aliquam efficitur dolor id dolor
			<br>
			Aliquam sed lorem
			<br>
			Praesent nibh dui, porttitor ut accumsan non
		</p>
	</div>
	<div class="social-container">
		<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>
	<?php wp_footer(); ?>
	
	<style>
		.site-footer {
			color: #f2f2f2;
			background-color: #1a1717;
			font-size: 14px;
			padding-bottom: 50px;
		}
		
		/*Someikonien siirtäminen keskelle*/
		.sfsi_shortcode_container {
			width: 100%;
		}
		.norm_row {
			width: 100%!important;
			text-align: center!important;
			float: none!important;
		}
	</style>