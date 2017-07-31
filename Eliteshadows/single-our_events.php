<?php
/**
 * Sample template for displaying single our_events posts.
 * Save this file as as single-our_events.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$post_thumbnail_id_events = get_post_thumbnail_id(get_the_id());
$image_attributes_events = wp_get_attachment_image_src($post_thumbnail_id_events,'full',true);
$eventslogo = get_post_meta(get_the_id(),'event_logo',true);
$events_logo = wp_get_attachment_image_src($eventslogo,'full',true);
?>
	

	<article>
    <section class="inner_slider event-slider event-main-detail"> <img src="<?php echo get_template_directory_uri(); ?>/img/event_slider.jpg">
      <div class="container">
        <div class="inner-slider-caption">
          <h3><?php echo get_the_title();?></h3>
                  </div>
      </div>
    </section>
    <section class="event-detail-page mid-warper">
      <div class="container">
        <div class="event-detail-container inner-container-bg">
          <div class="event-heading">
            <h3><?php echo get_the_title();?></h3>
            <h4><?php echo $event_start_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_start_date',true)));?>-<?php echo $event_last_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_last_date',true)));?></h4>
			 <?php $ticket_price= get_post_meta(get_the_id(),'ticket_price',true);
			  
			    $ticket_price_strpe = $org_ticket_price*100;
						if($ticket_price){
							echo'<h4>Ticket Price : £ '.$ticket_price.'</h4>';
						}?>
			
			
          </div>
          <div class="event-full-detail">
		  <?php if($eventslogo){?>
        <div class="event-logo">  
          <img src="<?php echo $events_logo[0];?>">
          </div>
		  <?php } ?>
    <div class="product-content"><?php the_content();?></div>
          
          </div>
          
          
          
      </div>
      <div class="single_event_promo" id="payment_url"><div class="how-we-work">
          <div class="hww-content">
           <div class="single-event-promo-contact">
          <h4>Contact Event Organiser</h4>
          <div class="event-organiser-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo get_post_meta(get_the_id(),'contact_event_organiser',true);?>"><?php echo get_post_meta(get_the_id(),'contact_event_organiser',true);?></a> </div>
		  <?php $venue= get_post_meta(get_the_id(),'venue',true);
						if($venue){
							echo' <div class="event-organiser-email"><i class="fa fa-map-marker" aria-hidden="true"></i>'.$venue.'</div>';
						}?>
         <div class="reg-promo-button" >
		   <h4>Payment Methods</h4>
  <div class="row">
<div class="col-md-6 col-sm-5 col-xs-6">
  <?php
echo '<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sales@eliteshadows.co.uk">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="item_name" value="'.get_the_title().'">
<input type="hidden" name="amount" value="'.$ticket_price.'">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="'.get_permalink().'">
<input type="hidden" name="cancel_return" value="'.get_permalink().'">
<input type="image" class="paypal_btn" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_buynow_pp_142x27.png" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!">
</form>';?></div>
<div class="col-md-6 col-sm-5 col-xs-6">

<?php echo do_shortcode('[accept_stripe_payment name="'.get_the_title().'" price='.$ticket_price.' ]');?></div>	 
      </div>	    

          </div>
          
          </div>
          </div>
          <div class="hww-img">
            <figure><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo $image_attributes_events[0]; ?>"></figure>
          </div>
        </div></div>
		
		       <section class="inner-full-width-event-footer  inner-container-bg">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-6">
              <div class="opening-time">
                <h3 class="in-event-footer-heading">Opening Times</h3>
                <div class="ot-table">
                  <div class="cmn-list day-list">
                    <ul>
					<?php 
$day=explode(",",str_replace(array('"', "[", "]"),  array("", "", ""),get_post_meta(get_the_id(),'day',true)));	
foreach($day as $key_day=>$val_day){
	echo '<li>'.$val_day.'</li>';
}
?></ul>
                  </div>
                  <div class="cmn-list date-list">
                    <ul>
					<?php 
$date=explode(",",str_replace(array('"', "[", "]"),  array("", "", ""),get_post_meta(get_the_id(),'date',true)));	
foreach($date as $key_date=>$val_date){
echo '<li>'.$val_date.'</li>';
}
?>
                    </ul>
                  </div>
                  <div class="cmn-list month-list">
                    <ul>
					<?php 
$month=explode(",",str_replace(array('"', "[", "]"),  array("", "", ""),get_post_meta(get_the_id(),'month',true)));	
foreach($month as $key_month=>$val_month){
echo '<li>'.$val_month.'</li>';
}
?>                  </ul>
                  </div>
                  <div class="cmn-list time-list">
                    <ul>
					<?php 
$timing=explode(",",str_replace(array('"', "[", "]"),  array("", "", ""),get_post_meta(get_the_id(),'timing',true)));	
foreach($timing as $key_timing=>$val_timing){
echo '<li>'.$val_timing.'</li>';
}
?></ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
			 <?php $facebook_follow_url=get_post_meta(get_the_id(),'facebook_follow_url',true);
				   $twitter_follow_url=get_post_meta(get_the_id(),'twitter_follow_url_copy',true);
				   $linkedin_follow_url=get_post_meta(get_the_id(),'linkedin_follow_url',true);?>
              <div class="follow-event">
                <h3 class="in-event-footer-heading">Follow Event</h3>
                <ul>
				<?php if($facebook_follow_url){
					echo '<li><a href="'.$facebook_follow_url.'" target="_blank"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>';
				}
				 if($twitter_follow_url){
					echo '<li><a href="'.$twitter_follow_url.'" target="_blank"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>';
				}
				 if($linkedin_follow_url){
					echo '<li><a href="'.$linkedin_follow_url.'" target="_blank"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>';
				}?>
                
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-3">
              <?php $recommended_entrance=get_post_meta(get_the_id(),'recommended_entrance',true);
		if($recommended_entrance){?>
        <div class="recommended">
         <h3 class="in-event-footer-heading">Recommended Entrance</h3>
         <p><?php echo $recommended_entrance; ?></p>
                 </div>
        <?php } ?>
            </div>
          </div>
        </section>
		
      	
      </div>
    </section>
  </article>
  <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>