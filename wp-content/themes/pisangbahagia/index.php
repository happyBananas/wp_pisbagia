<?php get_header(); ?>

    <div class="container main">
        <div class="banner">
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
        </div>
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
                    if( have_posts() ):                    
                        while( have_posts() ):
                            the_post();

                            get_template_part( 'template-parts/content', 'main' );

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
            </div>
        </div>
    </div>

    <!-- <script>document.querySelectorAll('.wrap-ctn-content>p img').forEach(function(e){e.remove()});</script> -->
<?php get_footer(); ?>