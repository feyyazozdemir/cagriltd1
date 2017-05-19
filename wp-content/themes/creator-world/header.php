<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Creator World
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="pagewrap">
<div class="headertop">
 <div class="container">
      <?php if ( ! dynamic_sidebar( 'header-info' ) ) : ?>
      <?php endif; // end header widget area ?>
 </div><!-- .container -->  
</div><!-- .headertop -->  


<div class="header">
  <div class="container">
    <div class="logo">
      <?php creator_world_the_custom_logo(); ?>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo('name'); ?>
        </a></h1>
      <p>
        <?php bloginfo('description'); ?>
      </p>
    </div><!-- logo -->
    <div class="toggle"> <a class="toggleMenu" href="#">
      <?php _e('Menu','creator-world'); ?>
      </a> </div> <!-- toggle -->
    <div class="sitenav">
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </div>
    <!-- site-nav -->
    <div class="clear"></div>
  </div><!-- container -->
</div><!--.header -->

<?php if ( is_front_page() && !is_home() ) { ?>
	<?php $hideslide = get_theme_mod('disabled_slides', '1'); ?>
		<?php if($hideslide == ''){ ?>               
                <?php for($sld=7; $sld<10; $sld++) { ?>
                	<?php if( get_theme_mod('page-setting'.$sld)) { ?>
                	<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
                	<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
                			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                			$img_arr[] = $image;
               				$id_arr[] = $post->ID;
                		endwhile;
                	}
                }
                ?>
<?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
            <?php 
            $i=1;
            foreach($img_arr as $url){ ?>
            <?php if(!empty($url)){ ?>
            <img src="<?php echo $url; ?>" title="#slidecaption<?php echo $i; ?>" />
            <?php }else{ ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" />
            <?php } ?>
            <?php $i++; }  ?>
        </div>   
<?php 
	$i=1;
		foreach($id_arr as $id){ 
		$title = get_the_title( $id ); 
		$post = get_post($id); 
		$content = esc_html( wp_trim_words( $post->post_content, 20, '' ) );
?>                 
<div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
    <div class="slide_info">
    	<h2><?php echo $title; ?></h2>
    	<p><?php echo $content; ?></p>        
    </div>
</div>      
    <?php $i++; } ?>       
 <?php wp_reset_postdata(); ?>
<div class="clear"></div>        
<?php } ?>
<?php } } ?>


<?php if ( is_front_page() && ! is_home() ) { ?>
 <?php $hidewelcome = get_theme_mod('disabled_welcome', '1'); ?>
		<?php if($hidewelcome == ''){ ?>  
<section id="welcomesection">
  <div class="container">
    <div class="welcomebx">
      <?php if( get_theme_mod('page-setting1')) { ?>
      <?php $queryvar = new WP_query('page_id='.get_theme_mod('page-setting1' ,true)); ?>
      <?php while( $queryvar->have_posts() ) : $queryvar->the_post();?>     
     <h2 class="headingtitle">
        <?php the_title(); ?>
      </h2>
      <?php the_content(); ?>
      <div class="clear"></div>
      <?php endwhile;
			wp_reset_postdata(); ?>                            
       <?php } ?>
    </div> <!-- welcomewrap-->
    <div class="clear"></div>
  </div> <!-- container -->
</section>
<?php } ?> 


 <?php $hidepgbxes = get_theme_mod('disabled_pageboxes', '1'); ?>
		<?php if($hidepgbxes == ''){ ?>  
<section id="wrapsecond">
  <div class="container">
    <div class="services-wrap">
      <?php for($p=1; $p<5; $p++) { ?>
      <?php if( get_theme_mod('page-column'.$p,false)) { ?>
      <?php $querymy = new WP_query('page_id='.get_theme_mod('page-column'.$p,true)); ?>
      <?php while( $querymy->have_posts() ) : $querymy->the_post(); ?>
      <div class="fourbox <?php if($p % 4 == 0) { echo "last_column"; } ?>">           
            <?php if(has_post_thumbnail() ) { ?>
                  <div class="thumbbx"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a> </div>
            <?php } ?>
           <div class="pagecontent">          
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                <p><?php echo wp_trim_words( get_the_content(), 20, '...' );  ?></p>           
                <a class="pagemore" href="<?php the_permalink(); ?>">
                 <?php _e('Read More','creator-world'); ?>
                </a>
           </div>
        </div>
       <?php endwhile;
             wp_reset_postdata(); ?>
        <?php } } ?>      
      <div class="clear"></div>
    </div>   <!-- services-wrap-->
  </div> <!-- container -->
</section>
<?php } ?>
<?php } ?>