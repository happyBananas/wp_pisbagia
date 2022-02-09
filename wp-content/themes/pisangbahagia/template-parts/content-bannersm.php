        <div class="banner-content-half anim-loader-skeleton">
            <a href="<?=the_permalink();?>">
                <div class="ft banner-ctn sm">
                    <p class="ft my-sm-1"><?=the_title();?></p>
                    <small class="ft-po m-0 ft-b-4 ft-sz-12 cl-ligrey">
                        <?=get_the_author_meta( 'user_firstname', $post->post_author );?>,&nbsp;
                        <?=get_the_date( 'd F Y' );?>
                    </small>
                </div>
                <img class="banner-img-sm" src="<?=get_the_post_thumbnail_url();?>">
            </a>
        </div>