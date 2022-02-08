<?php get_header(); ?>

    <div class="container main">
        <ul class="breadcrumb anim-loader-skeleton">
            <li class="breadcrumb-item"><a href="<?=home_url();?>">Beranda</a></li>
            <li class="breadcrumb-item active"><?=ucfirst( wp_title('') );?></li>
        </ul>
        <div class="content">
            <div class="main-content <?php echo is_active_sidebar( 'sidebar-1' ) ? '': 'full';?>">
                <h2 class="ft ft ft-page-section m-auto py-1"><?=wp_title('')?></h2>
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

            <?php get_sidebar( 'sidebar-1' ); ?>

            <?php endif;?>

        </div>
    </div>

<?php get_footer(); ?>