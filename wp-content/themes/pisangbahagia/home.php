<?php get_header(); ?>

    <div class="container main">
        <ul class="breadcrumb nim-loader-skeleton">
            <li class="breadcrumb-item"><a href="<?=home_url();?>">Beranda</a></li>
            <li class="breadcrumb-item active"><?=ucfirst( wp_title('') );?></li>
        </ul>
        <div class="content">
            <div class="main-content">
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
            </div>
        </div>
    </div>

<?php get_footer(); ?>