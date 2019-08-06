<?php /* Template Name: Related */?>
<?php get_header(); ?>
     
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
     <h1>Related</h1>

     <?php  $post_tags = get_the_tags();
 		$page_Title = the_title();
if ( $post_tags ) {

    foreach( $post_tags as $tag ) {
    echo "Tags on this page: ".$tag->name . ', ';
    echo "<br>"; 

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
                            	
                            
                            
                             ?>
                           			
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> 
                                <p><?php the_content(); ?></p>
                            
                       <?php }
                    } 

                    wp_reset_postdata();
                    
             } }  ?> 
    </section>
    <!--//shipping-->
<?php get_footer(); ?>





$articles = new WP_Query( array(
    'showposts' => -1,
    'tag' => $tag,
    'meta_key' => 'date',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'post_type' => array( 'post', 'page' )
)