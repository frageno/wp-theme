<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page">

    <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e('Skip to content', 'wphierarchy'); ?>
    </a>

    <header id="masthead" class="site-header" role="banner">
        <?php 
                    if(NAVIGATION_LAYOUT == 'Normal'){
                        $args = [
                            'theme_location' => 'main-menu'
                        ];
                        wp_nav_menu($args);
                    }else if(NAVIGATION_LAYOUT == 'Mega menu'){
                        echo get_template_part( '/front/views/navigation/megamenu/index' );
                    }
        ?>
        <nav id="site-navigation" class="main-navigation" role="navigation">
        </nav>
    </header>

    <div id="content" class="site-content">

    