
<?php
// Template Name: Sub-Categories
?>

<?php get_header();?>


	<!--header part-->

	<!--	********-->

	<div class="cat-breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo get_home_url();?>">Home</a></li>
				<li>Categories</a></li>

			</ul>
		</div>
	</div>

	<!--	catagories section starts-->
	<section class="catagories-sec">
		<div class="container">
			<div class="inner-heading">
				<h3><?php the_field('category_heading');?></h3>
				<p><?php the_field('categories_page_top_content');?></p>
			</div>
			<div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>
 	         <div class="cat-content-outer">

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<?php the_post_thumbnail();?>
							</figure>
							<figcaption>
								<button class="accordion-cat"><?php the_title();?></button>
							</figcaption>
						</div>
					</div>

 	         </div>

		</div>
		
	</section>
		
<?php get_footer();?>

