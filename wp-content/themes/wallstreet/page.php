<?php get_header(); ?>
<div class="page-mycarousel">
	<div class="page-title-col">
		<div class="container">
			<div class="row">
				<div class="page-header-title">
					<h1><?php the_title(); ?></h1>		
				</div>
			</div>	
		</div>
		<?php get_template_part('index', 'breadcrumb'); ?>
	</div>	
</div>
<!-- /Page Title Section -->
<!-- Blog & Sidebar Section -->
<div class="container">
	<div class="row">		
		<!--Blog Area-->
		<div class="<?php if(is_active_sidebar('sidebar_primary')){ echo 'col-md-8'; } else { echo 'col-md-12'; } ?>" >
		<?php
		the_post();
		?>
			<div class="blog-detail-section">
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive"); ?>
				<div class="blog-post-img">
					<?php the_post_thumbnail('',$defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="clear"></div>
				<div class="blog-post-title">
					<div class="blog-post-title-wrapper" style="width:100%";>
						<?php the_content(); ?>
					</div>
				</div>	
			</div>
			<?php comments_template('',true); ?>
		</div>
		<?php get_sidebar(); ?>
		<!--/Blog Area-->
</div>
</div>
<?php get_footer(); ?>	