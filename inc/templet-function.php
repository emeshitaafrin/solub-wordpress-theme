<?php

// solub header logo

function solub_header_logo() {
    $logo = get_theme_mod('solub_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.png');
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">
        <img data-width="130" src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
    </a>
    <?php

}
// solub header offcanvas logo
function solub_header_offcanvas_logo() {
    $solub_offcanvas_logo = get_theme_mod('solub_offcanvas_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png');
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">
        <img data-width="130" src="<?php echo esc_url($solub_offcanvas_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
    </a>
    <?php

}








    
                     



// solub header social
function solub_header_social(){
    $fb_url=get_theme_mod('fb_URL',__('#','solub'));
    $tw_url=get_theme_mod('tw_URL',__('#','solub'));
    $in_url=get_theme_mod('in_URL',__('#','solub'));
    $p_url=get_theme_mod('p_URL',__('#','solub'));

    ?>
                          <?php if(!empty($fb_url)) : ?>
                           <a class="icon facebok" href="<?php echo esc_url($fb_url);?>"><i class="fa-brands fa-facebook"></i></a>
                          <?php endif; ?>

                           <?php if(!empty($tw_url)) : ?>
                           <a class="icon twitter" href="<?php echo esc_url($tw_url);?>"></a>
                                <?php endif; ?>

                           <?php if(!empty($in_url)) : ?>
                           <a  class="icon instragram"href="<?php echo esc_url($in_url);?>"><i class="fa-brands fa-instagram"></i></a>
                            <?php endif; ?>

                           <?php if(!empty($p_url)) : ?>
                           <a href="<?php echo esc_url($p_url);?>"><i class="fa-brands fa-pinterest"></i></a>
                            <?php endif; ?>


               <?php            
}


// footer social
function solub_footer_social(){
    $f_fb_url=get_theme_mod('f-fb_URL',__('#','solub'));
    $f_tw_url=get_theme_mod('f_tw_URL',__('#','solub'));
    $f_in_url=get_theme_mod('f_in_URL',__('#','solub'));
    $f_p_url=get_theme_mod('f_p_URL',__('#','solub'));

    ?>
                          <?php if(!empty($f_fb_url)) : ?>
                           <a class="icon facebok" href="<?php echo esc_url($f_fb_url);?>"><i class="fa-brands fa-facebook"></i></a>
                          <?php endif; ?>
                          <?php if(!empty($f_tw_url)) : ?>
                           <a class="icon facebok" href="<?php echo esc_url($f_tw_url);?>"><i class="fa-brands fa-twitter"></i></a>
                          <?php endif; ?>

                           <?php if(!empty($f_in_url)) : ?>
                           <a  class="icon instragram"href="<?php echo esc_url($f_in_url);?>"><i class="fa-brands fa-instagram"></i></a>
                            <?php endif; ?>

                           <?php if(!empty($f_p_url)) : ?>
                           <a href="<?php echo esc_url($f_p_url);?>"><i class="fa-brands fa-pinterest"></i></a>
                            <?php endif; ?>


               <?php            
}





function solub_header_menu(){
    
wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'container' => '',
     'menu_class' =>'',
     'menu_id' =>'',
    
     'fallback_cb' => 'solub_Walker_Nav_Menu::fallback',
    'walker' => new Solub_Walker_Nav_Menu()
    
    
));
    


}

  
// exdos_navigation
function solub_pagination() {
    $pages = paginate_links( array(
        'type'      => 'array',
        'prev_text' => __('<i class="fal fa-long-arrow-left"></i>', 'harry'),
        'next_text' => __('<i class="fal fa-long-arrow-right"></i>', 'harry'),
    ) );

    if ( $pages ) {
        echo '<nav><ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}



// exdos_tags
function solub_tags(){
    $post_tags = get_the_tags();
    
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>">
                <?php echo esc_html($tag->name); ?>
            </a>
            <?php
        }
    } else {
        ?>
        <i><?php echo esc_html__('solub_tags', 'solub'); ?></i>
        <?php
    }
}




/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function solub_blog_search_form( $form ) {
	$form = '
    
        <div class="tp-sidebar-search">
       <form action="' . home_url( '/' ) . '" method="get">
           <div class="tp-sidebar-search-input p-relative">
         <input type="text" value="' . get_search_query() . '" name="s"  placeholder="' .esc_attr( 'Enter your keywords...' ) . '">
        <button class="tp-sidebar-search-btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
         <path d="M9.55005 18.1001C14.2721 18.1001 18.1001 14.2721 18.1001 9.55005C18.1001 4.82799 14.2721 1 9.55005 1C4.82799 1 1 4.82799 1 9.55005C1 14.2721 4.82799 18.1001 9.55005 18.1001Z" stroke="#1F2220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
         <path d="M18.9992 19L17.1992 17.2" stroke="#1F2220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
         </svg></button>
            </div>
         </form>
         </div>';

	return $form;
}
add_filter( 'get_search_form', 'solub_blog_search_form' );
   


/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function solub_kses( $html_tags = '' ) {
    $allowed_html = [
        'span' => [
           
        'class' => [],
        'id'     => [],
        ]

     
        ];

    return wp_kses( $html_tags, $allowed_html );
}