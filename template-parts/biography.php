
<?php


// Get the post author ID
$author_id = get_the_author_meta('ID');

// Get the author's avatar size
$author_avatar = 80;

// Get the author's name
$author_name = get_the_author_meta('display_name');

// Get the author's bio/description
$author_bio = get_the_author_meta('description');

// Get social profile links
$facebook_url  = get_the_author_meta('facebook_url');
$linkedin_url  = get_the_author_meta('linkedin_url');
$vimeo_url_    = get_the_author_meta('vimeo_url_');







?>
   



<div class="postbox-details-author-box mb-55 d-flex align-items-start">
    <div class="postbox-details-author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), $author_avatar, '', '', array( 'class' => 'media-object img-circle' ) ); ?>
    </div>

    <div class="postbox-details-author-content">
        <h5 class="postbox-details-author-name"><?php echo esc_attr($author_name); ?></h5>
        <p><?php echo esc_html($author_bio); ?></p>
        <div class="postbox-details-author-social">
            <?php if ( !empty($facebook_url) ) : ?>
            <a href="<?php echo esc_url($facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
             <?php endif; ?>

             <?php if ( !empty($linkedin_url) ) : ?>
            <a href="<?php echo esc_url($linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php endif; ?>

            <?php if ( !empty($vimeo_url_) ) : ?>
            <a href="<?php echo esc_url($vimeo_url_); ?>"><i class="fab fa-vimeo-v"></i></a>
             <?php endif; ?>
        </div>
    </div>
</div>
