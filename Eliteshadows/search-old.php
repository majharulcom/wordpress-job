<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<article>
<?php if ( have_posts() ) : ?>
    <section class="inner-slider">
	
     <div class="overlap-lcr-sec"><div class="container"> <h1 class="cmn-heading"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1>
      </div></div>
    </section>
    <section class="mid-warper about-us">
      <div class="abt-us-warper">
      <div class="container">
    <div class="row" >
 
     	  <?php  while ( have_posts() ) : the_post();
$post_thumbnail_id_events = get_post_thumbnail_id(get_the_id());
$image_attributes_events = wp_get_attachment_image_src($post_thumbnail_id_events,'thumbnail',true);
$event_last_date_1=strtotime(get_post_meta(get_the_id(),'event_last_date',true));
 $current_date=strtotime(date('m/d/Y')); 
 if($event_last_date_1>=$current_date){?>
            <div class="col-md-6 col-md-6 col-xs-12">
              <div class="event">
                <div class="row">
                  <div class="col-md-7 col-sm-6 col-xs-6">
                    <div class="event-img"><a href="<?php echo get_permalink();?>"><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo $image_attributes_events[0]; ?>"></a></div>
                  </div>
                   <div class="col-md-5 col-sm-6 col-xs-6">
                   <div class="event-detail"> <div class="event-title">
                      <h4><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h4>
                      <ul>
					  
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event_start_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_start_date',true)));?>-<?php echo $event_last_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_last_date',true)));?></li>
                       <?php $venue= get_post_meta(get_the_id(),'venue',true);
						if($venue){
							//echo' <li><i class="fa fa-map-marker" aria-hidden="true"></i>'.$venue.'</li>';
						}?>
                      <!--
                        <li><i class="fa fa-shopping-bag" aria-hidden="true"></i>$354</li>-->
                      </ul>
                    </div>
                    <div class="event-info">
                      <p><?php echo get_the_excerpt();?></p>
					   <span class="view-mor-btn" > <a class="common-btn" href="<?php echo get_permalink();?>">View More</a> </span>
                    </div>
                    <div class="buy-ticket"> <a  title="" href="<?php echo get_permalink();?>/#payment_url" >BUY TICKET</a> </div></div>
                  </div>
                </div>
              </div>
                      </div>
 <?php } ?>
		 <?php endwhile; ?>	
			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
	
          </div>
        
        
      </div></div>
    </section>
    
    <?php endif; ?>
  </article>

	
<?php get_footer(); ?>