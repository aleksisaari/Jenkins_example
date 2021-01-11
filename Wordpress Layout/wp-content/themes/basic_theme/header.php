<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Basic_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
	</head>
	
	<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
				.site-logo {
					display: block;
					float: left;
					width: 250px;
				}
				
				.topnav {
					overflow: hidden;
					background-color: #1a1717;
					padding: 35px 35px;
				}
				
				.topnav li {
					display: block;
					margin: 7px;
				}
				
				.topnav li a {
					float: right;
					color: #f2f2f2;
					text-align: center;
					text-decoration: none;
					font-size: 19px;
					padding-right: 50px;
					margin:auto;
				}
				
				.topnav li a:hover {
					text-decoration: underline;
					text-decoration-color:#ff0505;
				}
				
				.topnav .current_page_item a {
					text-decoration: underline;
					text-decoration-color:#ff0505;
				}
				
				.topnav .icon {
					display: none;
				}
				
				.menu {
					margin: 0;
				}
				
				@media screen and (max-width: 850px) {
					.topnav li a {display: none;}
					.topnav li a.icon {
						float: right;
						display: block;
					}
				}
				
				@media screen and (max-width: 850px) {
					.topnav.responsive {
						position: relative;
					}
					.topnav.responsive .icon {
						position: absolute;
						right: 42px;
						top: 42px;;
					}
					.topnav.responsive li a {
						float: none;
						display: block;
						text-align: left;
					}
					.topnav.responsive ul {
						padding-top: 90px;
					}
				}
				
			</style>
		</head>
		<body>
			
			<div class="topnav" id="menuTopnav">
				<a href="http://localhost/basiclayout">
				<img src="http://localhost/basiclayout/wp-content/uploads/2020/04/Placeholder_logo.png" class="site-logo">
					</a>
				<li>
			<?php
				wp_nav_menu( array(
					'menu_id'        => 'primary-menu',
				) );
			?>
						<a href="javascript:void(0);" class="icon" onclick="menuFunction()">
							<i class="fa fa-bars"></i> 
						</a>
				</li>
			</div>
			
			<script> /*Script for menu toggle*/
				function menuFunction() {
					var x = document.getElementById("menuTopnav");
					if (x.className === "topnav") {
						x.className += " responsive";
					} else {
						x.className = "topnav";
					}
				}
			</script>

</body>
</html>
