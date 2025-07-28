<?php
/**
 * Plugin Name: Solub Contact Info Widget
 * Description: A simple widget to show phone, email, and address with SVG icons.
 * Author: Your Name
 * Version: 1.1
 */

class Solub_Contact_Info_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'solub_contact_info_widget',
            __('Solub Contact Info', 'solub'),
            ['description' => __('Display phone, email, and address with SVG icons.', 'solub')]
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Contact Us', 'solub');

        $phone = !empty($instance['phone']) ? $instance['phone'] : '';
        $phone_url = !empty($instance['phone_url']) ? $instance['phone_url'] : 'tel:' . $phone;

        $email = !empty($instance['email']) ? $instance['email'] : '';
        $email_url = !empty($instance['email_url']) ? $instance['email_url'] : 'mailto:' . $email;

        $address = !empty($instance['address']) ? $instance['address'] : '';
        $address_url = !empty($instance['address_url']) ? $instance['address_url'] : '#';

        echo $args['before_widget'];

        // Display widget title if exists
        if (!empty($title)) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }

        ?>
        <div class="tp-footer-widget-contact">
            <div class="tp-footer-widget-contact">
                <?php if ($phone): ?>
                    <a href="<?php echo esc_url($phone_url); ?>">
                        <span>
                            <!-- Phone SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path d="M12.1108 1C12.1108 1 14.5553 1.22222 17.6664 4.33332C20.7775 7.44442 20.9997 9.88886 20.9997 9.88886" stroke="#FF7029" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12.3413 4.92822C12.3413 4.92822 13.4412 5.24249 15.0912 6.8924C16.7411 8.54231 17.0553 9.64225 17.0553 9.64225" stroke="#FF7029" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7.70841 4.68653L8.42954 5.97867C9.08031 7.14475 8.81907 8.67446 7.7941 9.69943C7.79398 9.69955 6.55095 10.9428 8.80499 13.1968C11.0584 15.4502 12.3016 14.2086 12.3024 14.2077C13.3274 13.1828 14.8571 12.9215 16.0232 13.5723L17.3153 14.2934C19.0761 15.2761 19.2841 17.7455 17.7364 19.2932C16.8064 20.2232 15.6671 20.9468 14.4076 20.9946C12.2875 21.0749 8.68695 20.5384 5.07521 16.9266C1.46347 13.3149 0.926905 9.71435 1.00728 7.5942C1.05502 6.33478 1.77867 5.19549 2.70867 4.26549C4.25638 2.71777 6.72573 2.92572 7.70841 4.68653Z" stroke="#FF7029" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>

                <?php if ($email): ?>
                    <a href="<?php echo esc_url($email_url); ?>">
                        <span>
                            <!-- Email SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 10.2797 1.30049 11.4893 1.83477 12.562C1.97675 12.847 2.02401 13.1729 1.94169 13.4805L1.46521 15.2613C1.25836 16.0344 1.96561 16.7416 2.73868 16.5348L4.51951 16.0583C4.82715 15.976 5.15297 16.0233 5.43802 16.1652C6.51069 16.6995 7.72025 17 9 17Z" stroke="#FF7029" stroke-width="1.5"/>
                                <path d="M5.7998 7.80054H12.1998" stroke="#FF7029" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M5.7998 10.6006H10.1998" stroke="#FF7029" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <?php echo esc_html($email); ?>
                    </a>
                <?php endif; ?>

                <?php if ($address): ?>
                    <a href="<?php echo esc_url($address_url); ?>" target="_blank">
                        <span>
                            <!-- Address SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M3.7002 6.86317C3.7002 3.62503 6.5208 1 10.0002 1C13.4796 1 16.3002 3.62503 16.3002 6.86317C16.3002 10.0759 14.2895 13.8249 11.1523 15.1656C10.4209 15.4781 9.57947 15.4781 8.84814 15.1656C5.71094 13.8249 3.7002 10.0759 3.7002 6.86317Z" stroke="#FF7029" stroke-width="1.5"/>
                                <path d="M11.8002 7.3C11.8002 8.29411 10.9943 9.1 10.0002 9.1C9.00608 9.1 8.2002 8.29411 8.2002 7.3C8.2002 6.30589 9.00608 5.5 10.0002 5.5C10.9943 5.5 11.8002 6.30589 11.8002 7.3Z" stroke="#FF7029" stroke-width="1.5"/>
                                <path d="M18.0645 13.1501C18.6633 13.6924 19 14.3036 19 14.9501C19 17.1869 14.9706 19.0001 10 19.0001C5.02944 19.0001 1 17.1869 1 14.9501C1 14.3036 1.33671 13.6924 1.93552 13.1501" stroke="#FF7029" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <?php echo esc_html($address); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance) {
        $fields = [
            'title' => 'Widget Title:',
            'phone' => 'Phone Number:',
            'phone_url' => 'Phone Number URL:',
            'email' => 'Email:',
            'email_url' => 'Email URL:',
            'address' => 'Address:',
            'address_url' => 'Address URL:'
        ];

        foreach ($fields as $key => $label) {
            $value = !empty($instance[$key]) ? $instance[$key] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id($key)); ?>"><?php echo esc_html($label); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id($key)); ?>"
                       name="<?php echo esc_attr($this->get_field_name($key)); ?>" type="text"
                       value="<?php echo esc_attr($value); ?>">
            </p>
            <?php
        }
    }

    public function update($new_instance, $old_instance) {
        $instance = [];
        foreach (['title', 'phone', 'phone_url', 'email', 'email_url', 'address', 'address_url'] as $key) {
            $instance[$key] = (!empty($new_instance[$key])) ? strip_tags($new_instance[$key]) : '';
        }
        return $instance;
    }
}

function solub_register_contact_info_widget() {
    register_widget('Solub_Contact_Info_Widget');
}
add_action('widgets_init', 'solub_register_contact_info_widget');
