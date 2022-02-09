                <div class="list-main-content w-100">
                    <?php if( has_post_thumbnail() ): ?>
                        <div class="wrap-media-thumbnail">
                            <a href="<?=the_permalink();?>" class="anim-loader-skeleton">
                                <?= get_the_post_thumbnail( null, array( '200', '120' ) ); ?>
                            </a>
                        </div>
                    <?php endif;?>
                    <div class="wrap-media-content">
                        <div class="wrap-ctn-header anim-loader-skeleton">
                            <a href="<?=the_permalink();?>" class="ctn-header"><?=the_title();?></a>
                        </div>
                        <div class="wrap-ctn-info anim-loader-skeleton">
                            <p class="ft-po ctn-info">
                                <a href="<?=get_author_posts_url( $post->post_author )?>" class="ctn-info-cat">
                                    <?=get_the_author_meta( 'user_firstname', $post->post_author );?>
                                </a> &sdot; <?=get_the_date( 'd M Y' );?> &sdot;
                                <?=pisgia_read_time() . " Menit Baca";?>
                            </p>
                        </div>
                        <div class="wrap-ctn-content anim-loader-skeleton">
                            <p class="ft ctn-content"><?=get_the_excerpt()?></p>
                        </div>
                    </div>
                </div>