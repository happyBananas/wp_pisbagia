        <div class="banner-content-half anim-loader-skeleton">
            <a href="<?=the_permalink();?>">
                <div class="ft banner-ctn sm">
                    <p class="ft my-sm-1"><?=the_title();?></p>
                    <small class="ft-po m-0 ft-b-4 ft-sz-12 cl-ligrey">
                        <?php if( !empty( get_the_author_meta( 'user_firstname', $post->post_author ) ) && !empty( get_the_author_meta( 'user_lastname', $post->post_author )) ):?>
                            <?=get_the_author_meta( 'user_firstname', $post->post_author );?>,&nbsp;
                        <?php else:?>
                            <?=get_the_author_meta( 'nickname', $post->post_author );?>,&nbsp;
                        <?php endif;?>
                        <?=get_the_date( 'd F Y' );?>
                    </small>
                </div>
                <?php if( has_post_thumbnail() ) :?>
                    <img class="banner-img-sm" src="<?=get_the_post_thumbnail_url();?>">
                <?php endif;?>
            </a>
        </div>