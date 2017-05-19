<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Creator World
 */
?>

  <div class="footer">     
    	   <div class="container">            
               <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>             
               <?php endif; // end footer widget area ?>    
                        
               <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>                                  	
               <?php endif; // end footer widget area ?>   
            
               <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>                
               <?php endif; // end footer widget area ?>  
              
               <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>                 
               <?php endif; // end footer widget area ?>
            <div class="clear"></div>
         </div><!--end .container-->
        </div><!--end .footer--> 
        
        <div class="copyright-wrapper">
          <div class="container">
             <div class="footerleft">				
                  <?php _e('&copy; 2016','creator-world');?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved', 'creator-world');?>                
             </div>
             <div class="footerright">				
			   <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'creator-world' ) ); ?>">
			     <?php printf( __( 'Proudly Powered by %s', 'creator-world' ), 'WordPress' ); ?>
               </a>
              </div>
             <div class="clear"></div>   
          </div><!--end .container-->
          
     </div><!--end .copyright-wrapper--> 
</div><!--end .header page wrap-->  
<?php wp_footer(); ?>
</body>
</html>