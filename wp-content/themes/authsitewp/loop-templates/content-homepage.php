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
                        <?php $the_query = new WP_Query( array( // the query
                            'posts_per_page' => 3,
                        ));	?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <article <?php post_class('post-content'); ?> id="post-<?php the_ID(); ?>">
                                    <div class="row">
	                                    <?php if (has_post_thumbnail() ) : ?>
                                            <div class="col-md-12 post-thumbnail-wrap">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <div class="post-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>')"></div>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <div class="col-md-12">
                                            <div class="blog-feed-content">
                                                <header class="entry-header">
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <div class="entry-meta">
                                                        <h5 class="entry-date"><time class="entry-date" datetime="<?php echo get_the_date(); ?>"><?php the_date(); ?></time>
                                                        </h5>
                                                    </div><!-- .entry-meta -->
                                                </header><!-- .entry-header -->
                                                <div class="entry-summary">
                                                    <a class="text-decoration-none" href="<?php echo get_permalink(); ?>">
	                                                    <?php the_excerpt(); ?>
                                                    </a>
                                                </div><!-- .entry-summary -->
                                            </div>
                                        </div>
                                    </div>
                                </article><!-- #post-## -->
                            <?php endwhile; ?>
                            <?php echo wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php __('No News'); ?></p>
                        <?php endif; ?>
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