<?php
/**
 * Шаблон шапки (header.php)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="header">
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="topnav">
                    <?php $args = array( 
                        'theme_location' => 'top',
                        'container'=> false,
                        'menu_id' => 'top-nav-ul',
                        'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                        'menu_class' => 'top-menu',	  		
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
            </nav>

		</div>
	</header>