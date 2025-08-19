<?php get_header(); ?>


         <section class="tp-error-ptb pt-130">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-error-content pt-100">
                        <h3 class="tp-error-title"><?php echo esc_html__('404','solub'); ?></h3>
                        <h4 class="tp-error-subtitle"><?php echo esc_html__('Oops! Page not found','solub'); ?></h4>
                        <p><?php echo esc_html__("Whoops, this is embarassing. Looks like the page you <br>
                           were looking for wasn't found.","solub"); ?></p>
                        <a class="tp-btn btn-text-flip" href="<?php echo home_url(); ?>">
                           <span data-text="Back to Home"><?php echo esc_html__('Back to Home','solub'); ?></span>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tp-error-thumb text-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/others/error.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </section>

<?php get_footer(); 