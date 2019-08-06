<?php /* Template Name: Front Page */ ?>
 
<?php get_header(); ?>
 
<!--Banner Starts here-->
    <section class="banner">
        <div class="container">
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/yAoLSRbwxL8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <div class="banner-text">
                <h3>Signature Streams</h3>
                <p>Cheapest Way To Watch TV, 24/7 Sports, Movies,<br>Series, Adult Full HD Extra Backup Server And Two Days To Think!</p>
                <a href="javascript:void(0);" class="banner-btn">
                    24 Hour iptv Trail
                </a>
                <a href="javascript:void(0);" class="banner-btn">
                    Sat and try
                </a>
            </div>
        </div>
    </section>

    <!--Banner Starts here-->

    <!--Logo Listing section Starts here-->
    <section class="logos">
        <div class="container">
		    <ul class="owl-carousel owl-theme logo-owl">

			    <?php 
					//Custom WP query query
					$args_query = array(
						'post_type' => array('chanellogo'),
						'post_status' => array('publish'),
						'posts_per_page' => 20,
						'order' => 'DESC',
						'orderby' => 'date',
					);

					$query = new WP_Query( $args_query );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();

                            echo '<li>';
								$featured_img_url=get_the_post_thumbnail_url(get_the_ID(),'full');
								echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
						            the_post_thumbnail('thumbnail');
						        echo '</a>';
					        echo '</li>';
						}
					} else {

					}

					wp_reset_postdata();
			    ?>
		    </ul>
		</div>
	</section>

    <!-- <section class="logos">
        <div class="container">
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-01.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-02.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-03.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-01.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-02.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/images/logo-03.png" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </section> -->

    <!--Logo Listing section Ends here-->

    <!--Smart Tv section Starts here-->
    <?php $smartTV_post = get_post( 37 );?>
    <section class="smart-tv">
        <div class="container">
            <div class="heading">

                <h3><?php echo $smartTV_post->post_title; ?></h3>
                <p><?php echo $smartTV_post->post_excerpt; ?></p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-sx-12">
                    <?php echo $smartTV_post->post_content; ?>
                    <a href="<?php echo get_permalink( 38 ); ?>" class="common-button">
                        More Information
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-sx-12">
                    <figure>
                    	<?php $featured_img_url = get_the_post_thumbnail_url(37,'full'); ?>
                        <img src="<?= $featured_img_url;?>" alt="" />
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!--Smart Tv section Starts here-->

    <!--Benefits Section starts here-->
    <section class="benefits">
        <div class="container">
            <div class="heading">
                <h3>What Are Your Benefits?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
            <!--Tabs Section starts here-->
             

                 
      
            <div class="tabs">
             
                <ul id="myTab" class="nav nav-tabs">
                    <?php
                        $terms = get_terms( array('taxonomy' => 'tab_category') );
                        foreach ($terms as $key => $term) {?>
                            <li class="<?php if($key==0){echo 'active'.' '.$term->slug.'-'.$key; }else{ echo $term->slug.'-'.$key;}?>">
                                <a href="#<?php echo $term->slug;?>" data-toggle="tab"><?php echo $term->name;?></a>
                            </li>
                           <?php  
                        }
                    ?>
                </ul>


                <div id="myTabContent" class="tab-content">
                <?php
                     $terms = get_terms( array('taxonomy' => 'tab_category') );
                        foreach ($terms as $key => $term) {?>
                            <div class="tab-pane fade in <?php if($key==0){echo 'active';}?>" id="<?php echo $term->slug;?>">
                                <div class="owl-carousel owl-theme benefits-owl">

                                    <?php 
                                        $arr_posts = new WP_Query('post_type=signature_tab&tab_category='.$term->slug.'&posts_per_page=12'); 
                                     
                                    if ( $arr_posts->have_posts() ) {
                                        while ( $arr_posts->have_posts() ) {
                                            $arr_posts->the_post(); ?>

                                            <div class="item">
                                                <div class="benefit-box">
                                                    <?php echo get_field('font_awesome_icon'); ?>
                                                    <h3><?php the_title(); ?></h3>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                        
                                           
                                 <?php   } // end while
                                 wp_reset_postdata(); 
                                    } ?>
                                </div>
                            </div>

                  <?php    }
                ?>
                    <!-- <div class="tab-pane fade in active" id="benefits">
                        <div class="owl-carousel owl-theme benefits-owl">

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="channel">
                        <div class="owl-carousel owl-theme benefits-owl">

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-tv"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-laptop"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-cogs"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="benefit-box">
                                    <i class="fas fa-wifi"></i>
                                    <h3>Lorem ipsum dolor Sit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
            <!--Tabs Section ends here-->
        </div>
    </section>

    <!--Benefits Section ends here-->

    <!--View All section starts here-->
    <section class="view-all">
        <div class="container">
            <div class="heading">
                <h3>Sed Ut Perspiciatis Unde</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                            <div class="shadow">

                            </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                            <div class="shadow">

                            </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                            <div class="shadow">

                            </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                            <div class="shadow">

                            </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                             <div class="shadow">
                                         
                                    </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div onclick="location.href='javascript:void(0);';" class="view-box">
                        <div class="outer-line"></div>
                        <span class="icons">
                            <div class="border">
                                <div class="inner-area">
                                    <i class="fas fa-tv"></i>
                                </div>
                            </div>
                        </span>
                        <div class="text">
                             <div class="shadow">
                                         
                                    </div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="javascript:void(0);" class="common-button btn1">
                View All
            </a>

        </div>
    </section>
    <!--View All section ends here-->

    <!--Testimonial section starts here-->
    <section class="testimonial">
        <div class="container">
            <div class="heading">
                <h3>Testimonials</h3>
            </div>
            <div class="owl-carousel owl-theme test-owl">
                <?php
                    $args = array(
                      'post_type'   => 'testimonial',
                      'post_status' => 'publish',
                      
                     );
                     
                    $testimonials = new WP_Query( $args );
                    if( $testimonials->have_posts() ) :
                    ?>
                     
                        <?php
                          while( $testimonials->have_posts() ) :
                            $testimonials->the_post();
                            ?>
                                <div class="item">
                                    <div class="wrap">
                                        <figure>
                                            <img class="commas" src="<?= get_stylesheet_directory_uri();?>/assets/images/commas.png" alt="" />
                                            <?php $testimonial_img_url = get_the_post_thumbnail_url(); ?>
                                            <img src="<?php echo $testimonial_img_url; ?>" alt="" />
                                        </figure>
                                        <p><?php the_content(); ?></p>
                                        <p class="name"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            <?php
                          endwhile;
                          wp_reset_postdata();
                        ?>
                   
                    <?php
                    else :
                      esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
                    endif;
                    ?>
                
            </div>
        </div>
    </section>

    <!--Testimonial section starts here-->

    <!--Tryout section Starts here-->
    <section class="tryout">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="try-box">
                        <div class="cust-height">
                            <img src="<?= get_stylesheet_directory_uri();?>/assets/images/customer.svg" alt="" />
                        </div>
                        <h4>2507</h4>
                        <p>Customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="try-box">
                        <div class="cust-height">
                            <i class="far fa-heart"></i>
                        </div>
                        <h4>4702</h4>
                        <p>Likes</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="try-box">
                        <div class="cust-height">
                            <i class="far fa-flag"></i>
                        </div>
                        <h4>36</h4>
                        <p>Nations</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="try-box">
                        <div class="cust-height">
                            <img src="<?= get_stylesheet_directory_uri();?>/assets/images/transmitter.svg" alt="" />
                        </div>
                        <h4>2507</h4>
                        <p>Transmitters</p>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="common-button btn1">
                Try out 24 hours
            </a>
        </div>
    </section>

    <!--Tryout section Starts here-->
 

<?php get_footer(); ?>

<!-- Buttons -->
                    <?php if (is_user_logged_in()) {
                        echo '<li><a class="cust-btn" href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';
                      }
                      elseif (!is_user_logged_in()) {
                        echo '<li><a class="cust-btn" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';
                        echo '<li><a class="cust-btn" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Sign Up</a></li>';
                       
                      } ?>
                   <!--  <li>
                        <a href="javascript:void();" class="cust-btn">
                            login
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void();" class="cust-btn">
                            Sign up
                        </a>
                    </li> -->
                   <!--  <li>
                        <a href="javascript:void();">
                            <i class="fas fa-shopping-basket"></i>Cart
                        </a>
                    </li> -->

                    <li>

                        <a class="cart-mainmenu" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            <i class="fas fa-shopping-basket"></i>
                            Basket
                            <?php echo '<div id="signaturestreams-cart-count"></div>'; ?> 
                        </a>
                        send_mail_to_admin


<!-- Loop for data with sub categories & sub categories are added by ACF -->

  <!--                       <?php  $args = array( 'post_type' => 'WHATS YOUR PROBLEM', 'posts_per_page' => -1 , 'order'=>'ASC');
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            $i = 1; $j=0;
            while($new_query->have_posts()){

              $new_query->the_post();
              if($j%3 == 0 ) {
                echo '<div class="row">';   
            }
                $j++;
              ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="cat-content">
                            <figure>
                                <?php the_post_thumbnail();?>
                            </figure>
                            <figcaption>
                                <button class="accordion-cat"><?php the_title();?></button>
                                <div class="panel">
    <ul>                        
<?php the_field('sub_categories');?>
        </ul>                                   

                                </div>
                            </figcaption>
                        </div>
                    </div>
 <?php
            if($i%3 == 0 ) {
                echo "  </div>";    
            }
                $i++;
            
        }
    }
    
wp_reset_query(); 
?> -->

<!-- WooCommerce Archive Page for editing SHOP PAGE in WooCommerce -->
<!-- <?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * 
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<!--
<section class="shop-banner">
    <div class="shop-text"></div>
    <div class="shop-banner-img">
    <img src="<?php bloginfo('template_url');?>../assets/images/shop-banner-img.png"></div>
        <div class="container">
            <div class="content-wrap">
            </div>
        </div>
    </section>
-->

<header class="woocommerce-products-header">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
    <?php endif; ?>

    <?php
    /**
     * Hook: woocommerce_archive_description.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action( 'woocommerce_archive_description' );
    ?>

    
    <!--    archive section starts-->
    <section class="catagories-sec shop-sec">
        <div class="container">
            <div class="inner-heading">
                
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
            </div>
            <div class=" shop-outer">



<!-- ************************* loop starts here ************************************* -->

<?php  $args = array( 'post_type' => 'WHATS YOUR PROBLEM', 'posts_per_page' => 3, 'order'=>'ASC');
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            $i = 1; $j=0;
            while($new_query->have_posts()){

              $new_query->the_post();
              if($j%3 == 0 ) {
                echo '<div class="row">';   
            }
                $j++;
              ?>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="shop-content">
                            <figure>
                                <?php the_post_thumbnail();?>
                            </figure>
                             <figcaption> 
                                <!-- <button class="accordion-cat"> --><a href=""><?php the_title();?></a><!-- </button> -->
                            <!--    <div class="panel">
    <ul>                        
<?php the_field('sub_categories');?>
        </ul>                                   

                                </div>
 -->                            </figcaption>
                        </div>
                    </div>
 <?php
            if($i%3 == 0 ) {
                echo "  </div>";    
            }
                $i++;
            
        }
    }
    
wp_reset_query(); 
?>

            </div>
        </div>
    </section>


</header>










<?php if ( is_active_sidebar( 'sidebar-12' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-12' ); ?>
<?php endif; ?>


<div class="title">


<?php
if ( woocommerce_product_loop() ) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action( 'woocommerce_before_shop_loop' );

    woocommerce_product_loop_start();

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             *
             * @hooked WC_Structured_Data::generate_product_data() - 10
             */
            do_action( 'woocommerce_shop_loop' );

            wc_get_template_part( 'content', 'product' );
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );?>

</div>
<?php get_footer( 'shop' );?>
 





 <!-- Slider and read more style  -->


 <?php  $args = array( 'post_type' => 'WHATS YOUR PROBLEM', 'posts_per_page' => 6,'order'=>'ASC' );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();
              
              // $description = $post->post_content;
               
              ?>

            <div class="col-md-4 col-sm-6">
                <div class="new-jack">
                <figure>
                <img src="<?php the_field('whats_your_problem_image_1');?>" alt="" class="home-one">
                 <img src="<?php the_field('whats_your_problem_image_2');?>" alt="" class="home">
        
                </figure>
                <div class="new-about-text">
                    <h4><?php the_title();?></h4>
                    <p><?php the_excerpt();?></p>
                     <div class="btn-wrap new read">
                  <!-- <a href="javascript:void(0);" class="view-btn"> --><?php the_field('read_more_button');?><!-- </a> -->
 </div>
                </div>

        </div>
    </div>

 <?php
        }
    }
    ?>

<?php wp_reset_query(); ?>
  <div class="col-md-12">
    <div class="text-center">
                <a href="<?php the_permalink(175);  ?>" class="btn form-control">VIEW ALL CATEGORIES</a>
            </div>

            </div>



<!-- Slider with elements -->

<div class="carousel-inner">
                <?php
                    global $post;
                    $count=0;
                    $arg=array('post_type'=>'EBOOKS TODAY!','posts_per_page'=>3);
                    $myposts=get_posts($arg);

                    foreach($myposts as $post):setup_postdata($post);?>

    <div class="item <?php echo $count==0? 'active':'';?>">
    <?php the_post_thumbnail();?>
    </div>

<?php $count++;endforeach;wp_reset_postdata($post);?>
    
  </div>


  <!-- Slider Ends -->

<!-- Post Meta Data Saving -->

  global $wpdb;
$wpdb->insert('wpdmo_6_postmeta', array(
    'meta_id' => '',
    'post_id' => $prop_id,
    'meta_key' => 'favorite_of_',
    'meta_value' => $user_id
));

<!-- Can Also Use -->
<?php
$user_id = 1;
$awesome_level = 1000;
add_user_meta( $user_id, '_level_of_awesomeness', $awesome_level);
?>
<!--  -->

<!-- Post Meta Ends -->


<!-- To get the current user logged in -->
<?php
  $user = new WP_User(get_current_user_id());
echo $user->roles[0];
?>

<!-- Current user ends -->


<!-- Nav  Menu in function -->

add_action('init', 'register_my_menus');

function register_my_menus() {
  register_nav_menus(array(
    'main-menu' => 'Main Menu',
    'head-menu' => 'Head Menu'
        
  ));
}
<!--  -->

<!-- Nav Menu Code in header -->
wp_nav_menu(array(
         'theme_location' => 'main-menu',
         'container' => '',
       'menu_class' => 'inline',
         'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',

      ));

      <!--  -->



      <!-- Footer -->
        <!--footer-->
   <footer class="myfooter">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                   <div class="footer-content-p">
  <h2>DO YOU NEED HELP?</h2>
                 <?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-11' ); ?>
<?php endif; ?>
                 
                   
                   <a href="<?php the_permalink(115);?>" class="btn form-control">
                       Advice now 
                   </a>
               </div>
               </div>
               <div class="col-md-2 col-sm-6">
                   <div class="footer-content-p">
                   <h2>QUICK LINKS</h2>
                   <ul class="listing">
                   

                 <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
<?php endif; ?>


                   </ul>
               </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="footer-content-p">
                   <h2>Problem at Work?</h2>
                   <ul class="listing">

             <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
<?php endif; ?>

                
                   </ul>
               </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="footer-content-p">
                   <h2>Head Office</h2>
                   <address>
                    <ul>


 <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-4' ); ?>
<?php endif; ?>

                  
                    </ul>
                   </address>
               </div>
               </div>
           </div>
       </div>
        <section class="footer-bar">
       <div class="container">
           <div class="col-sm-4 text-left">
                <ul>

<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-6' ); ?>
<?php endif; ?>



        </ul>
           </div>
           <div class="col-sm-8 text-right">
            <ul class="copyright">


<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-5' ); ?>
<?php endif; ?>
                
               
            </ul>
           </div>
       </div>
   </section>
   <?php wp_footer();?>
   </footer>

   <!--footer-->



<!-- Time Limit Calculator Ends -->

      
</body>
</html>
<!--  -->



<!-- Nav Menu Official Site -->
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


<!-- Function.php registration -->

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

<!--  -->


<!--Calling of the menu  -->

<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) ); ?>

<!--  -->

$re = '/^[a-zA-Z0-9]+$/';

/*Custom Validation for Contact Us form*/

add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 20, 2 );

function custom_text_validation_filter( $result, $tag ) {
    if ( 'first-name' == $tag->name ) {
        
        $re = '/^[a-zA-Z]+$/';

        if (!preg_match($re, $_POST['first-name'], $matches)) {
            $result->invalidate($tag, "First name is not valid!" );
        }
    }
    if ( 'last-name' == $tag->name ) {
        
        $re = '/^[a-zA-Z]+$/';

        if (!preg_match($re, $_POST['last-name'], $matches)) {
            $result->invalidate($tag, "Last name is not valid!" );
        }
    }
    if ( 'subject' == $tag->name ) {
       
        $re = '/^[a-zA-Z0-9]+$/';

        if (!preg_match($re, $_POST['subject'], $matches)) {
            $result->invalidate($tag, "Invalid Subject!" );
        }
    }

    return $result;
}





<!-- Custom Posts -->

register_post_type( 'WHATS YOUR PROBLEM 

',
  
        array(

            'labels' => array(

             'name' => __( 'WHATS YOUR PROBLEM

' ),
             

             'singular_name' => __( 'WHATS YOUR PROBLEM

' ),
             'menu_name' =>_('WHATS YOUR PROBLEM

'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'taxonomies'          => array( 'category' ),
       


         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )

       );


       <!-- custom Posts Ends -->
<!-- View Custom post on the base of Category -->

       <?php  $args = array( 'post_type' => 'product', 'posts_per_page' => -1 ,'product_cat' => 'Health and safety');
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();
              
              // $description = $post->post_content;
               
              ?>





        
        <div class="emp-content">
        <a href="<?php the_permalink();?>">
    
            <figcaption>
            <h3><?php the_title();?></h3>
            </figcaption></a>
            </div>
        


 <?php
        }
    }
    ?>

<?php wp_reset_query(); ?>


<!-- Get Related Pages by Tags -->\
  <?php  $post_tags = get_the_tags();
 
if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo "Tags on this page: ".$tag->name . ', ';
    echo "<br>"; 

    }

                      $args_query = array(
                        'showposts' => -1,
                        'tag' => $tag->name,
                        'post_type' => array('pages'),
                        'order' => 'DESC',
                        'orderby' => 'date',
                    );

                    $query = new WP_Query( $args_query );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            global $product;
                         
                            ?>
                           
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
 

                              

 
                                <p><?php the_content(); ?></p>
                            

                                <br>
                                <br>
                       <?php }
                    } 

                    wp_reset_postdata();
                    
             }   ?> 



<!-- Also add this in functions.php -->
add_filter( 'gform_review_page', 'wpmonks_add_review_page', 10, 3 );
// add tag support to pages
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

<!-- funcitons.php code ends here -->

             <!-- Related Pages Code ends here -->

             <!-- Validation -->
             $(document).ready(function () {
        $(".formToValidate").validate();
        $(".a, .b, .c, .d, .e, .f, .g, .h, .i, .j, .k, .l, .m ").each(function (item) {
            $(this).rules("add", {
                //required: true,
                number:true
            });
        });
    });
    <!-- Validatiop done -->



    <!--  Custom Posts-->
    add_action( 'init', 'advice_init' );

function advice_init() {
    $labels = array(
        'name'             => _x( 'advice', 'post type general name' ),
        'singular_name'   => _x( 'Advice', 'post type singular name' ),
        'menu_name'       => _x( 'Advice', 'admin menu' ),
        'name_admin_bar'     => _x( 'Advice Page', 'add new on admin bar' ),
        'add_new'           => _x( 'Add New Advice Page', 'add new' ),
        'add_new_item'     => __( 'Add New Advice Page' ),
        'new_item'         => __( 'New Advice Page' ),
        'edit_item'       => __( 'Edit Advice Page' ),
        'view_item'       => __( 'View Advice Page' ),
        'all_items'       => __( 'All Advice' ),
        'search_items'     => __( 'Search Advice' ),
        'parent_item_colon'  => __( 'Parent Advice Pages:' ),
        'not_found'       => __( 'No advice pages found.' ),
        'not_found_in_trash' => __( 'No advice pages found in trash.' )
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'query_var'           => true,
        'menu_icon'           => 'dashicons-book-alt',
        'rewrite'             => array( 'slug' => 'advice' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => true,
        'supports'            => array( 'title', 'thumbnail', 'revisions','editor', 'page-attributes' )
    );

    register_post_type( 'advice', $args );
}






add_filter( 'post_updated_messages', 'advice_updated_messages' );








function create_post_type() {
   register_post_type( 'banner_slider',
  
        array(

            'labels' => array(

             'name' => __( 'banner_slider' ),
             

             'singular_name' => __( 'banner_slider' ),
             'menu_name' =>_('Banner_Slider'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
       
         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )



       );


       <!-- Custom Posts end -->