<?php
/*
 * Standard hero banner.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container hero-info" id="wrapper-hero-info">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if ( ! is_home()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
		            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <span class="hero-description"><?php understrap_posted_on(); ?></span>
                <?php endwhile; // end of the loop. ?>
            <?php endif; ?>
        </div>
    </div>
</div>
