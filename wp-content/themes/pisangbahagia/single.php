<?php get_header(); ?>
    
    <div class="container main">
        <ul class="breadcrumb anim-loader-skeleton">
            <li class="breadcrumb-item">
                <a href="<?=home_url();?>">Beranda</a>
                <span class="ft-po cl-grey ft-b-4"><?=get_post()->post_title;?></span>
            </li>
        </ul> 
        <div class="content">
            <div class="main-content">
                <!-- judul artikel -->
                <div class="anim-loader-skeleton">
                    <p class="ft article-title py-1">
                        <?=get_post()->post_title;?>
                    </p>    
                </div>
                    
                <!-- div penulis, tanggal dan media sosial -->
                <div class="article-head">
                    <div class="article-le-tp anim-loader-skeleton">
                    <?=get_avatar( get_post()->post_author, '', '', '', array( 'class' => 'article-pp' )  );?>
                        <div class="article-au-ti-wrap">
                            <a href="writer.html" class="ft-ro article-author active"><b><?=get_the_author_meta( 'user_firstname', get_post()->post_author )?>&nbsp;<?=get_the_author_meta( 'user_lastname', get_post()->post_author )?></b></a>
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
                        <?php echo get_the_post_thumbnail( null, array( '650', '350' ) );?>
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