<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <div class="row">
            <!-- start #primary -->
            <div class="col-md-6 offset-md-1 content-area" id="primary">
                <main class="site-main" id="main">
                    <article class="post-2 page type-page status-publish hentry" id="post-2">

                        <?php $the_query = new WP_Query( array( // the query
                            'posts_per_page' => 3,
                        ));	?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                </header>
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div><!-- .entry-content -->
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php __('No News'); ?></p>
                        <?php endif; ?>
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- closing #primary -->

            <!-- start #right-sidebar -->
            <div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
                <aside id="recent-posts-2" class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>		<ul>
                        <li>
                            <a href="https://authoritysite.dev/uncategorized/hello-world">Hello world!</a>
                        </li>
                    </ul>
                </aside>
            </div><!-- #right-sidebar -->
    </div><!-- close .row -->
</div><!-- close .container -->