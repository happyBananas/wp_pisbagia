<?php get_header(); ?>

    <div class="container main">
        <!-- <div class="banner">
            <div class="banner-wrap lg anim-loader-skeleton" id="banner-wrap-lg">
                <div class="banner-arrow">
                    <i class="fa fa-chevron-left" id="arrow-left"></i>
                    <i class="fa fa-chevron-right" id="arrow-right"></i>
                </div>
                <div class="banner-content ">
                    <a href="article.html">
                        <div class="ft banner-ctn lg">
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates facilis iste et.</p>
                            <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">Lorem Ipsum, 25 Januari 2020 19:00</small>
                        </div>
                        <img class="banner-img-lg" src="<?=bloginfo('template_url');?>/assets/img/1.jpg">
                    </a>
                </div>
                <div class="banner-content">
                    <a href="article.html">
                        <div class="ft banner-ctn lg">
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">Lorem , 25 Januari 2020 19:00</small>
                        </div>
                        <img class="banner-img-lg" src="<?=bloginfo('template_url');?>/assets/img/2.jpg">
                    </a>
                </div>
                <div class="banner-content">
                    <a href="article.html">
                        <div class="ft banner-ctn lg">
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quae ipsam eum reiciendis eos!</p>
                            <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">Lorem , 25 Januari 2020 19:00</small>
                        </div>
                        <img class="banner-img-lg" src="<?=bloginfo('template_url');?>/assets/img/3.jpg">
                    </a>
                </div>
                <div class="banner-content">
                    <a href="article.html">
                        <div class="ft banner-ctn lg">
                            <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos facilis ratione cupiditate.</p>
                            <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">Lorem , 25 Januari 2020 19:00</small>
                        </div>
                        <img class="banner-img-lg" src="<?=bloginfo('template_url');?>/assets/img/4.jpg">
                    </a>
                </div>
            </div>
            <div class="banner-wrap sm">
                <div class="banner-content-half anim-loader-skeleton">
                    <a href="article.html">
                        <p class="ft banner-ctn sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt?</p>
                        <img class="banner-img-sm" src="<?=bloginfo('template_url');?>/assets/img/5.jpg">
                    </a>
                </div>
                <div class="banner-content-half anim-loader-skeleton">
                    <a href="article.html">
                        <p class="ft banner-ctn sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatibus velit culpa.</p>
                        <img class="banner-img-sm" src="<?=bloginfo('template_url');?>/assets/img/6.jpg">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="content">
            <div class="main-content full">
                <div class="header-section">
                    <div class="hs-p">
                        <span class="ft ft-header-section">Terbaru</span>
                    </div>
                    <div class="hs-bar">
                        <div class="bar"></div>
                    </div>
                </div>

                <?php
                    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $page
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

                <?php get_template_part( 'template-parts/pagination' ); ?>

                <?php wp_reset_postdata(); ?>

            </div>

            <?php if( is_active_sidebar( 'sidebar-1' ) ):?>

            <div class="side-content">
                <?php dynamic_sidebar('sidebar-1');?>
            </div>

            <?php endif;?>

        </div>
    </div>

<?php get_footer(); ?>