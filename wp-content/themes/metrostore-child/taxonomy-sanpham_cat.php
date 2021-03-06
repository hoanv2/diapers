<?php

get_header(); ?>

<?php do_action( 'breadcrumb-woocommerce' ); ?>

    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="content-area center_column col-xs-12 col-sm-9" id="center_column">
                    <main id="main" class="site-main" role="main">
                        <div class="blog-posts">
                            <?php
                            if ( have_posts() ) : ?>
                                <header class="page-header">
                                    <h1 class="page-title">
                                        <?php
                                        if( is_tax('sanpham_cat') ) {
                                            global $wp_query;
                                            $term = $wp_query->get_queried_object();
                                            $title = $term->name;
                                            echo $title;
                                        }
                                        ?>
                                    </h1>
                                    <?php
                                    // Show an optional term description.
                                    $term_description = term_description();
                                    if ( ! empty( $term_description ) ) :
                                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                                    endif;
                                    ?>
                                </header>

                                <?php
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;

                                the_posts_pagination(
                                    array(
                                        'prev_text' => esc_html__( 'Prev', 'metrostore' ),
                                        'next_text' => esc_html__( 'Next', 'metrostore' ),
                                    )
                                );

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif; ?>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer();
