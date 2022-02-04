        <div class="banner-content ">
            <a href="<?=the_permalink();?>" class="bg-dark">
                <div class="ft banner-ctn lg">
                    <p class="m-0"><?=the_title();?></p>
                    <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">
                        <?=get_the_author_meta( 'user_firstname', $post->post_author );?>,&nbsp;
                        <?=get_the_date( 'd F Y' );?>
                    </small>
                </div>
                <img class="banner-img-lg" src="<?=get_the_post_thumbnail_url();?>">
            </a>
        </div>