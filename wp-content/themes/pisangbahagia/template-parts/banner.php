<div class="banner">
    <div class="banner-wrap lg anim-loader-skeleton" id="banner-wrap-lg">
        <div class="banner-arrow">
            <i class="fa fa-chevron-left" id="arrow-left"></i>
            <i class="fa fa-chevron-right" id="arrow-right"></i>
        </div>
        <?php
            $posts_per_page_setting = 3;

            $args = array(
                'posts_per_page' => $posts_per_page_setting,
            );

            $query = new WP_Query( $args );

            if( $query->have_posts() ):
                while( $query->have_posts() ):
                    $query->the_post();

                    get_template_part( 'template-parts/content', 'bannerlg' );

                endwhile;

            else:

                get_template_part( 'template-parts/content', '404' );

            endif;
        ?>

        <?php wp_reset_postdata(); ?>

    </div>
    <div class="banner-wrap sm">

        <?php
            $offset = $posts_per_page_setting;
            global $pb_banner_offset;
            $pb_banner_offset = $offset + 2;

            $args = array(
                'posts_per_page' => 2,
                'offset' => $offset
            );

            $query = new WP_Query( $args );

            if( $query->have_posts() ):
                while( $query->have_posts() ):
                    $query->the_post();

                    get_template_part( 'template-parts/content', 'bannersm' );

                endwhile;

            else:

                get_template_part( 'template-parts/content', '404' );

            endif;
        ?>

        <?php wp_reset_postdata(); ?>

    </div>
</div>