<?php get_header(); ?>

    <div class="container main">
        <ul class="breadcrumb anim-loader-skeleton">
            <li class="breadcrumb-item"><a href="<?=home_url();?>">Beranda</a></li>
            <li class="breadcrumb-item active">Search Result</li>
        </ul>
        <div class="content">
            <div class="main-content full">
                <h2 class="ft ft-page-section m-auto py-1">Search Result</h2>
                <p class="ft-po m-auto py-1"><?='Search Result for "' . get_search_query() . '"'?></p>
                <div class="writer-banner">
                    <form method="get" class="search-form-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" name="s" class="input-search-page" value="<?=get_search_query()?get_search_query():''?>" placeholder="Cari Disini..."/>
                        <button type="submit" class="btn-nav-search-page">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <?php
                    if( have_posts() ):
                        while( have_posts() ):
                            the_post();

                            get_template_part( 'template-parts/content', 'main' );

                        endwhile;

                    else:

                        get_template_part( 'template-parts/content', '404' );

                    endif;

                ?>

                <?php get_template_part( 'template-parts/pagination' ); ?>

            </div>

            <?php if( is_active_sidebar( 'sidebar-1' ) ):?>

            <div class="side-content">
                <?php dynamic_sidebar('sidebar-1');?>
            </div>

            <?php endif;?>

        </div>
    </div>

<?php get_footer(); ?>