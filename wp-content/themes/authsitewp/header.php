<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Hero Banner Container ******************* -->
    <div class="wrapper homepage-hero-banner has-background-dim-20 has-background-dim" id="wrapper-hero" itemscope itemtype="http://schema.org/WebSite">

	    <!-- ******************* The Navbar Area ******************* -->
        <div class="container" id="wrapper-navbar">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <nav class="navbar navbar-dark navbar-expand-md px-0">
                            <!-- Your site title as branding in the menu -->
                            <!-- start custom logo -->
                            <?php if ( ! has_custom_logo() ) { ?>
                                <?php if ( is_front_page() && is_home() ) : ?>
                                    <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php else : ?>
                                    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                            <?php endif; ?>

                            <?php } else {
                                the_custom_logo();
                            } ?>
                            <!-- end custom logo -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                                <!-- The WordPress Menu goes here -->
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location'  => 'primary',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'navbarNavDropdown',
                                        'menu_class'      => 'navbar-nav ml-auto',
                                        'fallback_cb'     => '',
                                        'menu_id'         => 'main-menu',
                                        'depth'           => 2,
                                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                    )
                                ); ?>
                    </nav><!-- .site-navigation -->
                </div>
            </div>
        </div><!-- #wrapper-navbar end -->

        <!-- ******************* The Hero Info Area ******************* -->
        <div class="container homepage-hero-info id="wrapper-hero-info">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>This Is The Heading</h1>
                    <span class="hero-description">This is the strapline describing the website</span>
                </div>
            </div>
        </div>

<!--        <div class="wp-block-cover has-background-dim-20 has-background-dim" style="background-image:url(https://authoritysite.dev/wp-content/uploads/2019/11/hero-banner.jpg);background-position:30.87557603686636% 36.0655737704918%"><div class="wp-block-cover__inner-container">-->
<!--            <h2 style="text-align:center">Learning How To Stream</h2>-->
<!--        </div></div>-->
        <!-- #wrapper-hero-info end -->

	</div><!-- #wrapper-hero end -->
