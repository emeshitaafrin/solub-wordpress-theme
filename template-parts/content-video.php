                       
                      <?php
                      $format_link = function_exists('get_field')  ?  get_field('format_url'): '';
                      
                      
                      ?> 


                       <?php if(is_single()):?>

                       

                     <article class="postbox-details-wrapper">
                        <div class="postbox-details-thumb mb-30">
                         <div class="tp-postbox-thumb p-relative">
                              <a href="<?php the_permalink();?>">
                               <?php the_post_thumbnail();?>
                              </a>
                              <?php if(!empty($format_link)):?>
                              <div class="tp-postbox-thumb-video">
                                 <a class="tp-video-btn popup-video text-center" href="<?php echo esc_url($format_link);?>">
                                    <span class="tp-text-theme-primary"><svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                              <?php endif;?>
                           </div>
                           
                          
                        </div>
                        <div class="postbox-details-content mb-25">
                            <?php get_template_part('template-parts/blog/meta');?>
                           <h4 class="postbox-details-title"><?php the_title();?></h4>
                             <?php the_content();?>
                        </div>
                        <div class="postbox-details-list mb-60">
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                 <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              <p>Say goodbye to bank fees.</p>
                           </div>
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                 <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              <p>Leverage agile frameworks to provide</p>
                           </div>
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                 <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              <p>Capitalize on low hanging fruit</p>
                           </div>
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                 <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              <p>Deposit funds easily, securely.</p>
                           </div>
                        </div>
                        <div class="postbox-details-content mb-55">
                           <h4 class="postbox-details-title">Working in the fields of UX design</h4>
                           <p>IT company content is important for a number of reasons. First, it can help you attract potential customers. When you create content that is relevant to your target audience, you position yourself as an expert in your field and increase</p>
                        </div>
                        <div class="postbox-details-thumb-wrap d-flex align-items-center mb-65">
                           <div class="postbox-details-thumb-sm mr-30">
                              <img src="assets/img/blog/blog-details/blog-details-2.jpg" alt="">
                           </div>
                           <div class="postbox-details-thumb-sm">
                              <img src="assets/img/blog/blog-details/blog-details-3.jpg" alt="">
                           </div>
                        </div>
                        <div class="postbox-details-content mb-40">
                           <h4 class="postbox-details-title">Learning from failure</h4>
                           <p>The European languages are members of the same family. Their separate existence is a myth. For science europe uses the same vocabulary.</p>
                        </div>
                        <div class="postbox-details-list mb-60">
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                    <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </span>
                              <p>Get yourself comfortable.</p>
                           </div>
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                    <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </span>
                              <p>Manage your workspace and organize your desk.</p>
                           </div>
                           <div class="postbox-details-list-item d-flex align-items-start">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                                    <path d="M9 1L3.5 6.5L1 4" stroke="#3A954F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </span>
                              <p>Keep In touch with your co-workers.</p>
                           </div>
                        </div>
                        <div class="postbox-details tagcloud mb-50">
                           <span><?php echo esc_html__('Tags:','solub');?></span>
                         <?php solub_tags(); ?>
                          
                        </div>

                     </article>

                        <?php else:?>

                      
                      
                      
                      
                      <article id="post-<?php the_ID();?>"<?php post_class('tp-postbox-item mb-75');?> >
                           <div class="tp-postbox-thumb p-relative">
                              <a href="<?php the_permalink();?>">
                               <?php the_post_thumbnail();?>
                              </a>
                              <?php if(!empty($format_link)):?>
                              <div class="tp-postbox-thumb-video">
                                 <a class="tp-video-btn popup-video text-center" href="<?php echo esc_url($format_link);?>">
                                    <span class="tp-text-theme-primary"><svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                              <?php endif;?>
                           </div>
                           <div class="tp-postbox-content">
                              <?php get_template_part('template-parts/blog/meta');?>
                              <h3 class="tp-postbox-title">
                                 <a href="<?php the_permalink();?>"><?php the_title();?></a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <?php the_excerpt();?>
                              </div>
                              <div class="tp-postbox-read-more">
                                 <a class="tp-btn btn-text-flip" href="<?php the_permalink();?>"><span data-text="Read More"><?php echo esc_html__('Read More','solub');?></span></a>
                              </div>
                           </div>
                        </article>

                        <?php endif;?>