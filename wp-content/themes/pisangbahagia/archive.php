<?php get_header(); ?>

    <div class="container main">
        <div class="content">
            <div class="main-content">
                <ul class="breadcrumb nim-loader-skeleton">
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

                <?php if( is_category() ): ?>
                    <h2 class="ft ft ft-page-section m-auto py-1"><?=single_cat_title();?></h2>
                <?php endif;?>

                <?php if( is_author() ): ?>
                    <div class="writer-banner">
                        <div class="d-flex justify-content-center">
                            <div class="anim-loader-skeleton">
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
                    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'paged' => $page
                    );

                    if( is_category() ) { $args = array( 'category_name' => single_cat_title('', false) ); }
                    if( is_author() ) { $args = array( 'author' => get_the_author_meta( 'ID' ) ); }

                    $query = new WP_Query( $args );

                    if( $query->have_posts() ):
                        while( $query->have_posts() ):
                            $query->the_post();

                            get_template_part( 'template-parts/content', 'archive' );

                        endwhile;
                    else:
                ?>
                    <div class="list-main-content">
                        <a href="article.html" class="anim-loader-skeleton">
                            <img src="<?=bloginfo('template_url');?>/assets/img/image404.png">
                        </a>
                        <div class="wrap-media-content">
                            <div class="wrap-ctn-header anim-loader-skeleton">
                                <a href="#" class="ctn-header">Title of The Post</a>
                            </div>
                            <div class="wrap-ctn-info anim-loader-skeleton">
                                <p class="ft ctn-info"><a href="#" class="ft ctn-info-cat">Author</a> / Date / <a href="#" class="ft ctn-info-cat">#Archives</a></p>
                            </div>
                            <div class="wrap-ctn-content anim-loader-skeleton">
                                <p class="ft ctn-content">This section will be a place for the post content</p>
                            </div>
                        </div>
                    </div>
                <?php
                    endif;
                ?>

                <?php get_template_part( 'template-parts/pagination' ); ?>

                <?php wp_reset_postdata(); ?>

            </div>
            <div class="side-content">
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