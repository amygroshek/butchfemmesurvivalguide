<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google Fonts for front page styling -->
<link href="https://fonts.googleapis.com/css?family=Dynalight|Rye|Assistant" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-dark p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" title="<?php esc_url(bloginfo('name')); ?>" href="<?php echo esc_url( home_url( '/' )); ?>">
                            <span id="circlebutch" class="butch-femme">
                                <span class="butch">BUTCH</span>
                                <i class="fa fa-compass fa-flip-horizontal" aria-hidden="true"></i>
                                <span class="femme">Femme</span>
                            </span>
                        </a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => '',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" class="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                    <?php
                    // if(get_theme_mod( 'header_banner_title_setting' )){
                    //     echo get_theme_mod( 'header_banner_title_setting' );
                    // }else{
                    //     echo 'Wordpress + Bootstrap';
                    // }
                    ?>
                <h1 class="cover-heading arc-1" id="circletop">
                    <!-- <span id="circlebutch" class="butch-femme">BUTCH &diams; Femme</span> -->
                    <span id="circlebutch" class="butch-femme">
                        <span class="butch">BUTCH</span>
                        <i class="fa fa-compass fa-flip-horizontal" aria-hidden="true"></i>
                        <span class="femme">Femme</span>
                    </span>
                </h1>

                <h2 class="cover-heading arc-2">Survival Guide</h2>
                <button href="" class="btn btn-default btn-lg">SUBMIT</button>
                <!-- <p>
                    <?php
                    // if(get_theme_mod( 'header_banner_tagline_setting' )){
                    //     echo get_theme_mod( 'header_banner_tagline_setting' );
                    // }else{
                    //     echo esc_html__('Your source for information, community, and art. Celebrating butch, femme, and stud culture since forever.','wp-bootstrap-starter');
                    // }
                    ?>
                </p> -->
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
