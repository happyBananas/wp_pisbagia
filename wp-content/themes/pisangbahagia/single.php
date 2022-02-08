<?php get_header(); ?>

    <div class="container main">
        <ul class="breadcrumb anim-loader-skeleton">
            <li class="breadcrumb-item">
                <a href="<?=home_url();?>">Beranda</a>
                <span class="ft-po cl-grey ft-b-4"><?=get_post()->post_title;?></span>
            </li>
        </ul>
        <div class="content">
            <div class="main-content <?php echo is_active_sidebar( 'sidebar-1' ) ? '': 'full';?>">
                <!-- judul artikel -->
                <div class="anim-loader-skeleton">
                    <p class="ft article-title py-1">
                        <?=get_post()->post_title;?>
                    </p>
                </div>

                <!-- div penulis, tanggal dan media sosial -->
                <div class="article-head">
                    <div class="article-le-tp anim-loader-skeleton">
                        <div class="avatar-img-div-article">
                            <?=get_avatar( get_post()->post_author, '', '', '', array( 'class' => 'article-pp' )  );?>
                        </div>
                        <div class="article-au-ti-wrap">
                            <a href="<?=get_author_posts_url( $post->post_author )?>" class="ft-ro article-author active"><b><?=get_the_author_meta( 'user_firstname', get_post()->post_author )?>&nbsp;<?=get_the_author_meta( 'user_lastname', get_post()->post_author )?></b></a>
                            <p class="ft-ro article-time"><?=substr( get_post()->post_date, 0, 16 );?></p>
                        </div>
                    </div>
                    <div class="article-ri-bt anim-loader-skeleton">
                        <button type="button" class="medsos bg-white">
                            <i class="fa fa-facebook-official"></i>
                        </button>
                        <button type="button" class="medsos bg-white">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button type="button" class="medsos bg-white">
                            <i class="fa fa-whatsapp"></i>
                        </button>
                    </div>
                </div>

                <!-- isi artikel -->
                <div class="article-body ft-os article-bd anim-loader-skeleton">
                    <div class="main-img-ar w-100">
                        <?php
                            if( is_active_sidebar( 'sidebar-1' ) ) :
                                echo get_the_post_thumbnail( null, array( '650', '350' ) );
                            else:
                                echo get_the_post_thumbnail( null, array( '950', '650' ) );
                            endif;
                        ?>
                    </div>
                    <!--<p class="ft img-inform">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#">Sumber</a></p> -->
                    <?= the_content();?>
                </div>

                <div class="article-footer anim-loader-skeleton">
                    <p class="ft ft-article-cat">Kategori:</p>
                    <ul>
                        <?php foreach( get_the_category( get_post()->ID ) as $category ):?>
                        <li><a href="<?=get_category_link( $category->cat_ID );?>"><button type="button" class="ft btn-article-cat"><?=$category->name;?></button></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php
                    // echo "<pre>";
                    // // print_r( get_the_category( get_post()->ID ) );
                    // //echo get_avatar( get_post()->post_author, '', '', '', array( 'class' => 'article-pp' ) );
                    // echo "</pre>";
                ?>

            </div>

            <?php if( is_active_sidebar( 'sidebar-1' ) ):?>

            <?php get_sidebar( 'sidebar-1' ); ?>

            <?php endif;?>

        </div>
    </div>
<?php get_footer(); ?>