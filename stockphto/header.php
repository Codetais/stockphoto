<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
	<?php wp_head();?>
</head>
<body<?php body_class();?>>
<!--Header section start-->
<header id="header">
	<div class="containers">
		<div class="header_left">
			<?php
            if (has_custom_logo()){
                the_custom_logo();
            }
            ?>
		</div>
		<div class="header_right">
			<i class="nav_ico fa fa-bars"></i>
			<nav class="main_nav">
                <?php
                if (has_nav_menu('primary')){
                    wp_nav_menu([
                      'theme_location'       =>'primary'
                    ]);
                }
                ?>
			</nav>
		</div>

	</div>
</header>
<!--Header section end-->