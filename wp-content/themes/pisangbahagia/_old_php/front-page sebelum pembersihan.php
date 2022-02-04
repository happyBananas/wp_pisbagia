<?php get_header(); ?>

    <div class="container main">

        <?php get_template_part( 'template-parts/banner' );?>

        <div class="content">
            <div class="main-content">
                <div class="header-section">
                    <div class="hs-p">
                        <span class="ft ft-header-section">Terbaru</span>
                    </div>
                    <div class="hs-bar">
                        <div class="bar"></div>
                    </div>
                </div>

                <?php
                    //$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                    // if ( get_query_var( 'paged' ) ) {
                    //     $paged = get_query_var( 'paged' );
                    // }elseif ( get_query_var( 'page' ) ) {
                    //     $paged = get_query_var( 'page' );
                    // }else {
                    //     $paged = 1;
                    // }

                    $paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;

                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $paged
                    );

                    $query = new WP_Query( $args );

                    // echo "<pre>";
                    // print_r( $query );
                    // echo "<pre>";

                    if( $query->have_posts() ):
                        while( $query->have_posts() ):
                            $query->the_post();

                            get_template_part( 'template-parts/content', 'main' );

                        endwhile;

                    else:

                        get_template_part( 'template-parts/content', '404' );

                    endif;
                ?>
                <nav class="navigation pagination" role="navigation" aria-label="Posts">
		            <h2 class="screen-reader-text">Posts navigation</h2>
                        <div class="nav-links">

                            <?php
                                echo paginate_links( array(
                                        'total' => $query->max_num_pages,
                                        'mid_size' => 2,
                                        'current' => $paged,
                                        'prev_text' => __( '<i class="fa fa-chevron-left"></i>', 'textdomain' ),
                                        'next_text' => __( '<i class="fa fa-chevron-right"></i>', 'textdomain' ),
                                    )
                                );
                            ?>
                        </div>
                </nav>

                <?php wp_reset_postdata(); ?>

            </div>
            <div class="side-content">
                <div class="weather">
                </div>
                <div class="trending">
                    <div class="header-section anim-loader-skeleton">
                        <div class="hs-p">
                            <p class="ft ft-header-section">Trending</p>
                        </div>
                        <div class="hs-bar">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <ul class="trending-section anim-loader-skeleton">
                        <li><span>1.</span><a href="#" class="ft ft-list-trend">Lorem ipsum dolor sit amet consectetur adipisicing.</a></li>
                        <li><span>2.</span><a href="#" class="ft ft-list-trend">Lorem ipsum dolor sit.</a></li>
                        <li><span>3.</span><a href="#" class="ft ft-list-trend">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nemo beatae numquam!</a></li>
                        <li><span>4.</span><a href="#" class="ft ft-list-trend">Lorem ipsum dolor sit amet consectetur.</a></li>
                        <li><span>5.</span><a href="#" class="ft ft-list-trend">Lorem ipsum dolor sit amet consectetur adipisicing.</a></li>
                    </ul>
                </div>
                <div class="category">
                    <div class="header-section anim-loader-skeleton">
                        <div class="hs-p">
                            <p class="ft ft-header-section">Kategori</p>
                        </div>
                        <div class="hs-bar">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <ul class="category-section anim-loader-skeleton">
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Pemrograman</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Opini</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Sepak Bola</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Game</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#PHP</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Javascript</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Kehidupan</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Tanaman</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Traveling</button></a></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Kerja</button></a></li>
                        <li><a href="#"><button type="button" class="ft btn-sd-cat">#Kuliah</button></a></li>
                    </ul>
                </div>
                <?php dynamic_sidebar('sidebar-1');?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>