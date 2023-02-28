<?php
get_header(); 
the_post();
?>


	<!-- Start Shop Blog  -->
<?php get_sidebar();?>
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
		     <div class=" col-12"> 
					<!-- Start Single Blog  -->

                    <?php
                    
                    $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                    ?>
					  <a href="<?php the_title()?>" class="title-single-page"><h6><?php the_title()?></h6></a>
					<div class="shop-single-blog">
					<img src="<?php echo $imagepath[0];?>"/>
                  
						<div class="content-single-page">
							<div class="date-single-page"> <p><?php echo get_the_date();?></p></div>
                            <div class="author-single-page">  <?php the_author();?>
                             <?php the_content();?>
							<div> <?php comments_template();?></div>
						
							
						</div>
					</div>
					<!-- End Single Blog  -->
					</div>

				
<!-- 					
				</div> -->
				
			</div>
	</section>


<?php
get_footer();
?>