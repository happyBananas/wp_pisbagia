<?php get_header(); ?>

    <div class="container main">
        <ul class="breadcrumb anim-loader-skeleton">
            <li class="breadcrumb-item"><a href="<?=home_url();?>">Beranda</a></li>

            <?php if( is_category() ): ?>
                <li class="breadcrumb-item"><a href="<?=home_url().'/kategori';?>">Kategori</a></li>
                <li class="breadcrumb-item active"><?=single_cat_title();?></li>
            <?php endif;?>

            <?php if( is_author() ): ?>
                <li class="breadcrumb-item">Author /&nbsp;</li>
                <li class="breadcrumb-item active"><?=get_the_author_meta( 'first_name' );?></li>
            <?php endif;?>

        </ul>
        <div class="content">
            <div class="main-content full">

                <?php if( is_category() ): ?>
                    <h2 class="ft ft ft-page-section m-auto py-1"><?=single_cat_title();?></h2>
                <?php endif;?>

                <?php if( is_author() ): ?>
                    <div class="writer-banner">
                        <div class="d-flex justify-content-center">
                            <div class="avatar-div anim-loader-skeleton">
                               <?=get_avatar( get_the_author_meta( 'ID' ), '', '', '', array( 'class' => 'article-pp') );?>
                            </div>
                        </div>
                        <div class="px-5 writer-info">
                            <div class="anim-loader-skeleton"><h2 class="ft m-0"><?=get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );?></h2></div>
                            <div class="anim-loader-skeleton"><small class="ft-ro cl-lidarkred m-0"><?=count_user_posts( get_the_author_meta( 'ID' ) ) ?>&nbsp;Artikel</small></div>
                            <div class="anim-loader-skeleton"><small class="ft cl-grey">" <?=get_the_author_meta( 'description' );?> "</small></div>
                        </div>
                    </div>
                <?php endif;?>

                <?php
                    if( have_posts() ):
                        while( have_posts() ):
                            the_post();

                            get_template_part( 'template-parts/content', 'archive' );

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