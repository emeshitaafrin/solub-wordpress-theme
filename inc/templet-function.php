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