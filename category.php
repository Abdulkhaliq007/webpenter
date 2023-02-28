<?php
get_header();
echo "khaliq";

?>

	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<?php
				while(have_posts()){
				the_post();
				$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
				?>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					
					<div class="shop-single-blog">
						<!-- <img src="https://via.placeholder.com/370x300" alt="#"> -->
						<img src="<?php echo $imagepath[0];?>"/>
						<p><?php the_excerpt();?></p>
						<div class="content">
							<!-- <p class="date">22 July , 2020. Monday</p> -->
							<p class="<?php echo get_the_date();?>"><?php echo get_the_date();?></p>
							<a href="<?php the_title()?>" class="title"><h6><?php the_title()?></h6></a>
							<a href="<?php the_permalink();?>" input type="button" class="more-btn">Read More</a>
						</div>
					</div>
					<!-- End Single Blog  -->
					</div>
					<?php }?>
					<?php echo wp_pagenavi();?>
				</div>
				
			</div>
	</section>
	<!-- End Shop Blog  -->

	<?php get_footer();?>
	
	
 