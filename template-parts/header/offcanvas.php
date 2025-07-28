
<?php 

$defaults = [
[
				'icon_class'   => 'fa-sharp fa-solid fa-location-dot',
				'info_name'    => '86 Road Broklyn Street, 600',
				'link_url' => '_#',
				'checkbox'    => false,
			],

			[
				'icon_class'   => 'fa-solid fa-envelope',
				'info_name'    => 'Needhelp@company.com ',
				'link_url' => '_#',
				'checkbox'    => false,
			],

			[
				'icon_class'   => 'fa-solid fa-phone',
				'info_name'    => '+92 666 888 0000, 600',
				'link_url' => '_#',
				'checkbox'    => false,
			],
];


$info_list = get_theme_mod( 'offcanvas_info_repeater', $defaults );


?>;



<!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
               <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40">
                  <div class="offcanvas__logo">
                     <?php solub_header_offcanvas_logo();?>
                  </div>
               </div>

               <div class="tp-offcanvas-menu fix d-xl-none mb-30">
                  <nav></nav>
               </div>

               
               <div class="offcanvas-info mb-30">
                  <h4 class="offcanvas__title">Contacts</h4>
                  <?php foreach($info_list as $item):?>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="<?php echo esc_attr($item['icon_class']);?>"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="<?php echo esc_url( $item['link_url'] ); ?>"> <?php echo esc_html( $item['info_name'] ); ?> </a>
                     </div>
                  </div>
                  <?php endforeach;?>
                 
                  </div>
                  
               </div>
               <div class="offcanvas__social">
               <?php solub_header_social();?>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->
