<?php
    the_posts_pagination(
        array(
            'mid_size' => 2,
            'prev_text' => __( '<i class="fa fa-chevron-left"></i>', 'textdomain' ),
            'next_text' => __( '<i class="fa fa-chevron-right"></i>', 'textdomain' ),
        )
    );