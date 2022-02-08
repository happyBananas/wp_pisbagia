<?php get_header(); ?>

    <div class="container main">

        <?php get_template_part( 'template-parts/banner' );?>

        <div class="content">
            <div class="main-content <?php echo is_active_sidebar( 'sidebar-1' ) ? '': 'full';?>">
                <div class="header-section">
                    <div class="hs-p">
                        <span class="ft ft-header-section">Terbaru</span>
                    </div>
                    <div class="hs-bar">
                        <div class="bar"></div>
                    </div>
                </div>

                <?php
                    $paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;

                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $paged,
                        'offset' => $pb_banner_offset
                    );

                    $query = new WP_Query( $args );

                    if( $query->have_posts() ):
                        while( $query->have_posts() ):
                            $query->the_post();

                            get_template_part( 'template-parts/content', 'main' );

                        endwhile;

                    else:

                        get_template_part( 'template-parts/content', '404' );

                    endif;
                ?>

                <?php wp_reset_postdata(); ?>

            </div>

            <?php if( is_active_sidebar( 'sidebar-1' ) ):?>

            <?php get_sidebar( 'sidebar-1' ); ?>

            <?php endif;?>

        </div>
    </div>

<?php get_footer(); ?>