        <div class="banner-content">
            <a href="<?=the_permalink();?>" class="bg-dark">
                <div class="ft banner-ctn lg">
                    <div class="banner-cat-wrap">
                        <?php foreach( get_the_category( get_post()->ID ) as $category ):?>
                        <label class="ft-po"><?=$category->name;?></label>
                        <?php endforeach; ?>
                    </div>
                    <p class="m-0"><?=the_title();?></p>
                    <small class="ft-po m-0 ft-b-4 ft-sz-13 cl-ligrey">
                        <?php if( !empty( get_the_author_meta( 'user_firstname', $post->post_author ) ) && !empty( get_the_author_meta( 'user_lastname', $post->post_author )) ):?>
                            <?=get_the_author_meta( 'user_firstname', $post->post_author );?>,&nbsp;
                        <?php else:?>
                            <?=get_the_author_meta( 'nickname', $post->post_author );?>,&nbsp;
                        <?php endif;?>
                        <?=get_the_date( 'd F Y' );?>
                    </small>
                </div>
                <?php if( has_post_thumbnail() ) :?>
                    <img class="banner-img-lg" src="<?=get_the_post_thumbnail_url();?>">
                <?php endif;?>
            </a>
        </div>