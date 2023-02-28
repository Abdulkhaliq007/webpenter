<?php

get_header();

$catData = get_queried_object();
// print_r($catData);
?>


<div class="middle-right">
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2><?php echo $catData->name;?></h2>
					</div>
				</div>
			</div>
		


			<div class="row">
<?php
            $wpnew=array(
							'post_type'=>'news',
							'post_status'=>'publish',
							'tax_query'=>array(
								array('taxonomy'=>'category_trending_item',
								'field'=>'term_id',
								'terms'=>$catData->term_id)

							),
						);
						$newsquery= new Wp_Query($wpnew);
						while($newsquery->have_posts()){
							$newsquery->the_post();
						
							$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
						
						?>
				
				 <div class="col-lg-4 col-md-6 col-12"> 
					<!-- Start Single Blog  -->
					
					 <div class="shop-single-blog">
						
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
                    <?php } ?>
					
					
				 </div>
				
			</div> 
			
	</section>
	</div>
	</div>

<?php
get_footer();
?>


