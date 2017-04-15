<?php
/**
 * Creator World About Theme
 *
 * @package Creator World
 */

//about theme info
add_action( 'admin_menu', 'creator_world_abouttheme' );
function creator_world_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'creator-world'), __('About Theme Info', 'creator-world'), 'edit_theme_options', 'creator_world_guide', 'creator_world_mostrar_guide');   
} 

//guidline for about theme
function creator_world_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<style type="text/css">
@media screen and (min-width: 800px) {
.wrap-GT{ display:table;}
.gt-left {float:left; width: 55%; padding: 2%; margin:10px 0 0 15px; background-color:#fff;}
.heading-gt{font-size:18px; color:#0073AA; font-weight:bold; padding-bottom:10px; border-bottom:1px solid #ccc;}
.gt-right {float:right; width: 32%; padding:2%; margin:10px 0 0 15px; background-color:#fff;}
.clear{ clear:both;}
.wrap-GT ul{ margin:0; padding:0;}
.wrap-GT ul li{ list-style: disc inside none;}
.wrap-GT ul li:hover{ color:#0073AA; cursor:pointer;}
}
</style>

<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <?php _e('About Theme Info', 'creator-world'); ?>
		   </div>
          <p><?php _e('Creator World is a 100% Multipurpose WordPress theme it is clean codes and modern Construction WordPress theme. this theme use for your construction,corporate, restaurant, photography, wedding, industrial, hotels or any type of business. this Theme  build in customizer it is very easy to use and user friendly. also theme is translation ready. ','creator-world'); ?></p>
<div class="heading-gt"><?php _e('Theme Features', 'creator-world'); ?></div>
 

<div class="col-2">
  <h4><?php _e('Theme Customizer', 'creator-world'); ?></h4>
  <div class="description"><?php _e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'creator-world'); ?></div>
</div>

<div class="col-2">
  <h4><?php _e('Responsive Ready', 'creator-world'); ?></h4>
  <div class="description"><?php _e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'creator-world'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('Cross Browser Compatible', 'creator-world'); ?></h4>
<div class="description"><?php _e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE8 and above.', 'creator-world'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('E-commerce', 'creator-world'); ?></h4>
<div class="description"><?php _e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'creator-world'); ?></div>
</div>

</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div style="font-weight:bold;">				
				<a href="<?php echo creator_world_live_demo; ?>" target="_blank"><?php _e('Live Demo', 'creator-world'); ?></a> | 
				<a href="<?php echo creator_world_pro_theme_url; ?>"><?php _e('Purchase Pro', 'creator-world'); ?></a> | 
				<a href="<?php echo creator_world_theme_doc; ?>" target="_blank"><?php _e('Documentation', 'creator-world'); ?></a>
                <div style="height:5px"></div>
				<hr />  
                <ul>
                 <li><?php _e('Theme Customizer', 'creator-world'); ?></li>
                 <li><?php _e('Responsive Ready', 'creator-world'); ?></li>
                 <li><?php _e('Cross Browser Compatible', 'creator-world'); ?></li>
                 <li><?php _e('E-commerce', 'creator-world'); ?></li>
                 <li><?php _e('Contact Form 7 Plugin Compatible', 'creator-world'); ?></li>  
                 <li><?php _e('User Friendly', 'creator-world'); ?></li> 
                 <li><?php _e('Translation Ready', 'creator-world'); ?></li>
                 <li><?php _e('Many Other Plugins  Compatible', 'creator-world'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>