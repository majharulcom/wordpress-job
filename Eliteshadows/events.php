<?php
/**
Template name: Event
 */

get_header(); ?>

	<article>
    <section class="inner_slider event-slider"> <img src="<?php echo get_template_directory_uri(); ?>/img/event_slider.jpg">
      <div class="container">
        <div class="inner-slider-caption">
          <h3>Search events</h3>
		 
  <div class="event-search">
		   <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<input type="text" value=""  name="s" placeholder="Search  here..." class="form-control event-search-box" id="s" autocomplete="off">
				<button type="submit" class="btn btn-default searech-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
			 </form>

          </div>
        </div>
      </div>
    </section>
    <section class="our-events mid-warper">
      <div class="container">
        <div class="event-content inner-container-bg">
          <h2 class="cmn-heading">Our Events</h2>
          <div class="date-wise-filtter">
                 <div class="label-select ">
              <select class="month_select" name="filter" id="filter">
               <option value="all">All</option>
		<?php
$terms = get_terms( array(
    'taxonomy' => 'event-year-category',
    'hide_empty' => false,
	'order'=>'desc'
) );
foreach($terms as $term){
echo '<option value="'.$term->term_id.'">'.$term->name.'</option>';
}
?>
              </select>
            </div>         
          </div>
          <div class="clearfix"></div>
          <div class="row" id="LaDIV">
 
     	  <?php $args = array('posts_per_page' => -1,'post_type' => array('our_events'),'post_status'=>'publish','paged' => $paged,'order'=>'desc');$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
$post_thumbnail_id_events = get_post_thumbnail_id(get_the_id());
$image_attributes_events = wp_get_attachment_image_src($post_thumbnail_id_events,'thumbnail',true);
$event_last_date_1=strtotime(get_post_meta(get_the_id(),'event_last_date',true));
 $current_date=strtotime(date('m/d/Y')); 
 if($event_last_date_1>=$current_date){
?>
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
                      <p><?php echo get_the_excerpt();?></p> <span class="view-mor-btn" > <a class="common-btn" href="<?php echo get_permalink();?>">View More</a> </span>
                    </div>
                    <div class="buy-ticket"> <a  title="" href="<?php echo get_permalink();?>/#payment_url" >BUY TICKET</a> </div></div>
                  </div>
                </div>
              </div>
                      </div>
				
		  <?php } } ?>	
			
          </div>
        </div>
      </div>
    </section>
  </article>
<?php get_footer(); ?>
