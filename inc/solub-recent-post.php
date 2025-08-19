<?php
// Register widget
function solub_register_recent_posts_widget() {
    register_widget( 'Solub_Recent_Posts_Widget' );
}
add_action( 'widgets_init', 'solub_register_recent_posts_widget' );

class Solub_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'solub_recent_posts', // Widget ID
            __( 'Solub Recent Post', 'solub' ), // Widget Name
            array( 'description' => __( 'Displays recent posts with Solub markup.', 'solub' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title      = apply_filters( 'widget_title', $instance['title'] ?? __( 'Solub Recent Post', 'solub' ) );
        $order      = $instance['order'] ?? 'DESC';
        $post_count = ! empty( $instance['post_count'] ) ? absint( $instance['post_count'] ) : 3;

        echo $args['before_widget'];

        if ( ! empty( $title ) ) {
            echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
        }

        $recent_posts = new WP_Query( array(
            'posts_type' => 'post',
            'posts_per_page' => $post_count,
            'orderby'        => 'date',
            'order'          => $order,
            'post_status'    => 'publish'
        ) );

        if ( $recent_posts->have_posts() ) {
            while ( $recent_posts->have_posts() ) {
                $recent_posts->the_post();
                ?>
                <div class="tp-recent-post-item d-flex align-items-center">
                    <div class="tp-recent-post-thumb mr-20">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/blog/blog-sidebar/default-thumb.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="tp-recent-post-content">
                        <h3 class="tp-recent-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="tp-recent-post-meta">
                            <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( get_the_date() ); ?></span>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title      = $instance['title'] ?? __( 'Solub Recent Post', 'solub' );
        $order      = $instance['order'] ?? 'DESC';
        $post_count = $instance['post_count'] ?? 3;
        ?>
        <!-- Title Field -->
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'solub' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>">
        </p>

        <!-- Order Field -->
        <p>
            <label for="<?php echo $this->get_field_id( 'order' ); ?>"><?php _e( 'Order:', 'solub' ); ?></label>
            <select id="<?php echo $this->get_field_id( 'order' ); ?>"
                    name="<?php echo $this->get_field_name( 'order' ); ?>">
                <option value="DESC" <?php selected( $order, 'DESC' ); ?>><?php _e( 'Descending', 'solub' ); ?></option>
                <option value="ASC" <?php selected( $order, 'ASC' ); ?>><?php _e( 'Ascending', 'solub' ); ?></option>
            </select>
        </p>

        <!-- Post Number Field -->
        <p>
            <label for="<?php echo $this->get_field_id( 'post_count' ); ?>"><?php _e( 'Number of Posts:', 'solub' ); ?></label>
            <select id="<?php echo $this->get_field_id( 'post_count' ); ?>"
                    name="<?php echo $this->get_field_name( 'post_count' ); ?>">
                <?php for ( $i = 1; $i <= 10; $i++ ) : ?>
                    <option value="<?php echo $i; ?>" <?php selected( $post_count, $i ); ?>><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance                = array();
        $instance['title']       = sanitize_text_field( $new_instance['title'] );
        $instance['order']       = in_array( $new_instance['order'], array( 'ASC', 'DESC' ) ) ? $new_instance['order'] : 'DESC';
        $instance['post_count']  = absint( $new_instance['post_count'] );
        return $instance;
    }
}
