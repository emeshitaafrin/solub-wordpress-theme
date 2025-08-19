<?php get_header(); ?>





 
         <!-- postbox area start -->
         <section class="tp-postbox-ptb p-relative pt-130 pb-120">
            <div class="container">
               <div class="row justyfy-content-center">
                  <div class="col-lg-8">
                     <div class="tp-postbox-wrapper">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                          <?php get_template_part('template-parts/content',get_post_format());?>

                        <?php endwhile; else : ?>
	                       <p><?php esc_html__( 'Sorry, no posts matched your criteria.','solub' ); ?></p>
                        <?php endif; ?>
                      

                        <div class="tp-pagination pt-30">
                           <?php solub_pagination(); ?>
                        </div>

                     </div>
                  </div>
                 
                  </div>
               </div>
            </div>
         </section>
         <!-- postbox area end -->















<?php get_footer(); 






























