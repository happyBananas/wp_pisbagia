                <?php if( is_attachment() ):?>
                    <div class="article-body ft-os article-bd anim-loader-skeleton">
                        <div class="main-img-ar w-100" style="margin-top:1em">
                            <img src="<?=wp_get_attachment_image_url( $post->ID, 'full' ); ?>" class="anim-loader-skeleton">
                        </div>
                        <?= $post->post_content;?>
                    </div>


                <?php else:?>
                    <?php if( is_singular() ):?>

                        <div class="article-body ft-os article-bd anim-loader-skeleton">
                            <?= the_content();?>
                        </div>

                    <?php else: ?>

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
                                        <?php if( !empty( get_the_author_meta( 'user_firstname', $post->post_author ) ) && !empty( get_the_author_meta( 'user_lastname', $post->post_author )) ):?>
                                            <?=get_the_author_meta( 'user_firstname', $post->post_author );?>
                                        <?php else:?>
                                            <?=get_the_author_meta( 'nickname', $post->post_author );?>
                                        <?php endif;?>
                                    </a> &sdot; <?=get_the_date( 'd M Y' );?> &sdot;
                                    <?=pisgia_read_time() . " Menit Baca";?>
                                </p>
                            </div>
                            <div class="wrap-ctn-content anim-loader-skeleton">
                                <p class="ft ctn-content"><?=get_the_excerpt()?></p>
                            </div>
                        </div>
                    </div>

                    <?php endif;?>

                <?php endif;?>
