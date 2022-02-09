<?php
class Pisgia_popular_post_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            // widget ID
            'pisgia_popular_post_widget',
            // widget name
            __('Pisangbahagia Popular Post Widget', 'pisgia_popular_post_widget_domain'),
            // widget description
            array ( 'description' => __( 'Pisangbahagia Popular Post Widget', 'pisgia_popular_post_widget_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before widget'];

        if ( ! empty ( $title ) ){
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '
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
        ';
        $n=0;

        $args = array(
            'posts_per_page' => 5,
            'orderby' => 'meta_value_num',
            'meta_key' => 'pisgia_post_views_count',
            'order' => 'DESC'
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ):
            while( $query->have_posts() ):
                $query->the_post();
                $n++;
                echo '<li><span>'. $n .'</span><a href="'. get_permalink() .'" class="ft ft-list-trend">'. get_the_title() .'</a></li>';

            endwhile;

        else:

            get_template_part( 'template-parts/content', '404' );

        endif;

        echo '
                </ul>
            </div>
        ';

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ){
            $title = $instance[ 'title' ];
        }
        // else{
        //     $title = __( 'Default Title', 'pisgia_popular_post_widget_domain' );
        // }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Titlex:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

}