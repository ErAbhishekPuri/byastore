<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	 <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="<?= get_stylesheet_directory_uri();?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

	<link rel="profile" href="https://gmpg.org/xfn/11" />
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src= "//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>


<script type="text/javascript">
    
    
   jQuery(document).ready(function(){

jQuery('#cal').on('click', function(){

});
//calculation Time limits form
    jQuery("#input_5_4").change(function(){
    if (jQuery(this).val()=="") {
    jQuery("#field_5_13").html("");
    return;
    }
    var deadline = getDeadlineBase(jQuery(this).val());
    populateDeadline(deadline);
    });

    jQuery("#input_5_9, #input_5_10, #input_5_11").change(function(){
    if (jQuery("#input_5_9").val()=="" || jQuery("#input_5_10").val()=="" || jQuery("#input_5_11").val()=="") {
    jQuery("#field_5_13").html("");
    return;
    }


    var deadlinebase = getDeadlineBase(jQuery("#input_5_9").val()); // end of employment +3 months -1 day
    var startDate = jQuery("#input_5_10").val();
    var endDate = jQuery("#input_5_11").val();

      //alert(jQuery("#input_5_9").val());

  //alert(endDate);


    var tmp = startDate.split("-");
    startDate = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
    tmp = endDate.split("-");
    endDate = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
    var diff = Math.abs(endDate.getTime()-startDate.getTime());
    var days = Math.ceil(diff/(1000 * 3600 * 24));
    var deadline1 = deadlinebase;
    deadline1.setDate(deadline1.getDate()+days);
    var deadline2 = endDate;
    deadline2.setDate(deadline2.getDate()+30);
    var deadline = Math.max(deadline1.getTime(),deadline2.getTime());
    //alert(deadline);
    populateDeadline(new Date(deadline));
    //alert(populateDeadline);
    });


function getDeadlineBase(startDate) {
var tmp = startDate.split("-");

//console.log(tmp);

var deadline = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
deadline.setMonth(deadline.getMonth()+3);
deadline.setDate(deadline.getDate()-1);
//alert(deadline);


return deadline;
}

function populateDeadline(deadline) {
var day = deadline.getDate();
day = day<10?"0"+day:day;
var month = deadline.getMonth()+1;
month = month<10?"0"+month:month;
var year = deadline.getFullYear();
var full_date = day + '/' + month + '/' + year;
//alert(full_date);
jQuery('#bomb').show();
jQuery("#field_5_13").html(full_date);
}


});
</script>






	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="<?php echo get_home_url(); ?>"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <?php if(!is_user_logged_in()){
                            ?>
                            <a href="<?php get_permalink(wc_get_page_id('myaccount')); ?>" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                            <a href="<?php get_permalink(wc_get_page_id('myaccount')); ?>" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                            <a class="cart-mainmenu" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            <i class="fa fa-shopping-basket"></i>
                            Basket
                            <?php echo '<div id="signaturestreams-cart-count"></div>'; ?> 
                        </a>
                        
                      <?php   } 
                        else{
                         echo '<a class="cust-btn" href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a>'; 
                         ?>
                         <a class="cart-mainmenu" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            <i class="fa fa-shopping-basket"></i>
                            Basket <?php echo WC()->cart->get_cart_contents_count(); ?>
                                    </a>
                          <?php                              
                           }

                      ?>

                      <!-- Cart on Lee SS -->
                     <!--  <a class="cart-mainmenu" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                        <i class="fas fa-shopping-basket"></i>
                        Basket
                        <?php echo '<div id="signaturestreams-cart-count"></div>'; ?> 
                      </a>   -->
                        </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">                        
                          <li><?php wp_nav_menu( array ('menu'=>'top-menu' , 'menu_class'=>'nav navbar') );?></li> 
                        </ul>

                    </nav>
                    <!-- //nav -->
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                 <?php  echo do_shortcode('[ivory-search id="112" title="Default Search Form"]'); ?>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>


    <!-- Screen Shots -->
<!--     https://prnt.sc/o4u86r

    https://prnt.sc/o4uaxp

    https://prnt.sc/o4ubvt
         -->

          <?php
            $args = array(
              'post_type'   => 'prod',
              'post_status' => 'publish',
              
             );
             
            $tutorials = new WP_Query( $args );
            if( $tutorials->have_posts() ) :
            
                  while( $tutorials->have_posts() ) :
                    $tutorials->the_post();
                    ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID();?>">
                            <?php the_title();?>  <i class="fas fa-angle-down rotate-icon"></i></a> 
                          </h4>
                        </div>
                        <div id="collapse<?php the_ID();?>" class="panel-collapse collapse">
                          <div class="panel-body"><?php the_content();?></div>
                        </div>
                      </div>
                    <?php
                  endwhile;
                  wp_reset_postdata();
                ?>
             
            <?php
            else :
              esc_html_e( 'No deft exists', 'text-domain' );
            endif;
            ?>
     <!--        <?php  $args = array( 'post_type' => 'Calculators', 'posts_per_page' => -1,'order'=>'ASC' );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();
              
              // $description = $post->post_content;
               
              ?> 


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="cat-content cal-content">
              <figure>
                <img src="<?php the_post_thumbnail_url(); ?>">
              </figure>
              <figcaption>
                <?php the_content();?>
              </figcaption>
            </div>
    

          </div>


 <?php
        }
    }
    ?>

<! ************************* loop ends here *************************** -->

    <!-- <?php wp_reset_query(); ?> -->
   
