<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_theme</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
</head>
<body>
    <div class="main_wrap">
        <header class="header">
            <div class="container header_container"> 
               <div class="header_logo logo">
				    <a href="<?php echo get_home_url(); ?>">
					   <img src="<?php bloginfo('template_directory')?>/img/header_logo.svg" alt="">
					</a>
                      </div>
                       <div class="burger">
                           <div></div> 
                       </div>
                <div class="menu header_menu">
 
                 
				<?php wp_nav_menu( array(
					'menu'            => '',    			
					'container'       => 'ul',           
					'container_class' => 'menu_list',               
					'menu_class'      => 'menu_list',               
					'echo'            => true,             
					'fallback_cb'     => 'wp_page_menu',                
				) );
				?> 
                    <div class="sing_block">
                    <a href="#" class="btn empty_btn">sing in</a>
                    <a href="#" class="btn full_btn">sing up</a>
                </div>
                </div>

                
            </div>
        </header>