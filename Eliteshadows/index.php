<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
 <article>
    <section class="slider">
      <div id="myCarousel"  class="carousel slide myCarousel " data-ride="carousel">
        <ol class="carousel-indicators">
<?php
$i=0;
$args = array('posts_per_page' => -1,'post_type' => array('slider'),'post_status'=>'publish','paged' => $paged,);$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
if($i==0){
echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>'	;
}else{
echo'<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
} $i++;}?>


        </ol>
        <div class="carousel-inner">
		<?php
$i=1;
$args = array('posts_per_page' => -1,'post_type' => array('slider'),'post_status'=>'publish','paged' => $paged,'orderby'=>'menu_order','order'=>'ASC');$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
$post_thumbnail_id = get_post_thumbnail_id(get_the_id());
$image_attributes = wp_get_attachment_image_src($post_thumbnail_id,'full',true);
$content_post_slider = get_post($post_id_hows);
$content_slider = $content_post_slider->post_content;
 $content_slider = strip_tags($content_slider);
  $content_slider = substr($content_slider, 0, 300);
 $content_slider = apply_filters('the_content', $content_slider);
if($i==1){?>
 <div class="item active"> <img src="<?php echo $image_attributes[0]?>" style="width:100%" data-src="" alt="<?php echo $image_attributes[0]?>">
            <div class="container">
              <div class="carousel-caption">
                <!-- <div class="round-bx">
                  <h1 class="cmn-heading"><?php the_title()?></h1>
                  <?php echo $content_slider;?>
                </div>-->
              </div>
            </div>
          </div>
<?php }else{?>
 <div class="item"> <img src="<?php echo $image_attributes[0]?>" style="width:100%" data-src="" alt="<?php echo $image_attributes[0]?>">
            <div class="container">
              <div class="carousel-caption">
                 <!--<div class="round-bx">
                  <h1 class="cmn-heading"><?php the_title()?></h1>
                <?php echo $content_slider;?>
                </div>-->
              </div>
            </div>
          </div>
<?php } $i++;}?>

        </div>
        <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>--> </div>
    </section>
    <section class="welcome-warper mid-warper">
      <div class="container">
        <div class="top-wel-head">
          <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12 col-xs-offset-2">
						  <?php $post_id=59;
$content_post = get_post($post_id);
$content = $content_post->post_content;
 $content = apply_filters('the_content', $content);
//$content = str_replace(']]>', ']]&gt;', $content);
echo '<h2 class="cmn-heading">'.$content_post->post_title.'</h2><div class="wel-sub-content">'.$content.'</div>';
?>
            </div>
          </div>
        </div>
        <div class="how-we-work">
          <div class="hww-content">
		  <?php $post_id_hows=152;
$content_post_hows = get_post($post_id_hows);
$content_hows = $content_post_hows->post_content;
 $content_hows = strip_tags($content_hows);
  $content_hows = substr($content_hows, 0, 800);
 $content_hows = apply_filters('the_content', $content_hows);
echo '<h3>Latest News</h3>'.$content_hows;
?>
<span class="view-mor-btn" > <a class="common-btn" href="<?php echo get_permalink($post_id_hows);?>">View More</a> </span>
          </div>
          <div class="hww-img">
            <figure>
			<?php $post_thumbnail_id_hows = get_post_thumbnail_id($post_id_hows);
$image_attributes_hows = wp_get_attachment_image_src($post_thumbnail_id_hows,'full',true);?>
			<img src="<?php echo $image_attributes_hows[0]?>" alt="<?php echo $image_attributes_hows[0]?>"/></figure>
          </div>
        </div>
      </div>
    </section>
    <section class="pro-speakers"  id="testimonials">
      <div class="container">
        <div id="testimonial" class="owl-carousel">
<?php $args = array('posts_per_page' => -1,'post_type' => array('testimonials'),'post_status'=>'publish','paged' => $paged,);$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
$post_thumbnail_id_testimonial = get_post_thumbnail_id(get_the_id());
$image_attributes_testimonial = wp_get_attachment_image_src($post_thumbnail_id_testimonial,'full',true);?>
          <div class="item">
            <div class="test_content">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-5">
                  <div class="speaker-img">

                    <figure><img src="<?php echo $image_attributes_testimonial[0]?>" alt="<?php echo $image_attributes_testimonial[0]?>"/></figure>
                  </div>
                </div>
               <div class="col-md-6 col-sm-6 col-xs-7">
                  <div class="speaker-content">
                    <p><?php echo get_the_content();?></p>
                    <span><?php $auhor_name=get_post_meta(get_the_id(),'author_name',true);
					if($auhor_name){
						echo'-'.$auhor_name;
					}?>
					</span> </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
    <section class="our-events mid-warper">
      <div class="container">
        <div class="event-content">
          <h2 class="cmn-heading">Our Events</h2>
          <div class="row">
		  <?php $args = array('posts_per_page' => 2,'post_type' => array('our_events'),'post_status'=>'publish','paged' => $paged,'order'=>'desc');$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
$post_thumbnail_id_events = get_post_thumbnail_id(get_the_id());
$image_attributes_events = wp_get_attachment_image_src($post_thumbnail_id_events,'thumbnail',true);
?>
            <div class="col-md-6 col-md-6 col-xs-12">
              <div class="event">
                <div class="row">
                  <div class="col-md-7 col-sm-6 col-xs-6">
                    <div class="event-img"><a href="<?php echo get_permalink();?>" ><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo $image_attributes_events[0]; ?>"></a></div>
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

                      <!-- <li><i class="fa fa-shopping-bag" aria-hidden="true"></i>$354</li>-->
                      </ul>
                    </div>
                    <div class="event-info">
                      <p><?php echo get_the_excerpt();?></p>
					  <span class="view-mor-btn" > <a class="common-btn" href="<?php echo get_permalink();?>">View More</a> </span>

                    </div>
                    <div class="buy-ticket"> <a class="cmn-btn" title="" href="<?php echo get_permalink();?>/#payment_url" >BUY TICKET</a> </div>

					</div>
                  </div>
                </div>
              </div>
                      </div>
		  <?php } ?>

          </div>
          <div class="all-event-button"> <a class="cmn-btn" href="<?php echo get_page_link(12); ?>">See all events</a> </div>
        </div>
      </div>
    </section>
  </article><?php get_footer(); ?>
