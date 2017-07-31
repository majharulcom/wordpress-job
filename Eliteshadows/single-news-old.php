<?php
/**
* Sample template for displaying single our_events posts.
* Save this file as as single-our_events.php in your current theme.
*
* This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
*/

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$post_thumbnail_id_news = get_post_thumbnail_id(get_the_id());
$image_attributes_news = wp_get_attachment_image_src($post_thumbnail_id_news,array(626,552),true);
?>
 <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php the_title();?>" />

    <meta property="og:image"         content="<?php echo $image_attributes_news[0]; ?>" />
<article>
<section class="inner_slider event-slider event-main-detail"> <img src="<?php echo get_template_directory_uri(); ?>/img/event_slider.jpg">
<div class="container">
<div class="inner-slider-caption">
<h3><?php echo get_the_title();?></h3>
</div>
</div>
</section>
<section class="event-detail-page mid-warper news-detail-page">
<div class="container">
<div class="event-detail-container inner-container-bg">
<div class="event-full-detail">
<div class="product-content"><?php the_content();?></div>
</div>
<div class="footer-social">
<span class='st_facebook_large' st_image="<?php echo $image_attributes_news[0];?>" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'  st_via="" ></span>
						<span class='st_twitter_large' st_image="<?php echo $image_attributes_news[0];?>"  st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' st_via=""></span>
						<span class='st_linkedin_large' st_image="<?php echo $image_attributes_news[0];?>"  st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' st_via=""></span>
</div>
</div>
<section class="inner-full-width-event-footer  inner-container-bg comment_list">
<div class="row">
<?php $comments_count = wp_count_comments(get_the_id()); ?> 	
<h3 class="in-event-footer-heading">Comments (<?php echo $comments_count->approved; ?> ) </h3>

<?php
$args = array(
'post_id' => get_the_id(), // use post_id, not post_ID

);
$comments = get_comments($args);
foreach($comments as $comment) :
if($comment->comment_approved=='1'){
?>
<div class="post-list-bx table table-striped ">
<div class="row">
<div class="col-md-1 col-sm-6 col-xs-5 ">
<div class="event-img">
<div class="comment-author vcard">
<img width="74" height="74" class="avatar avatar-74 photo" srcset="http://0.gravatar.com/avatar/974268eb750d5a009fe14e1000cb4dc2?s=148&amp;d=mm&amp;r=g 2x" src="http://0.gravatar.com/avatar/974268eb750d5a009fe14e1000cb4dc2?s=74&amp;d=mm&amp;r=g" alt=""></div>
</div>
</div>
<div class="col-md-5 col-sm-6 col-xs-5">
<h4><?php echo $comment->comment_author;?></h4>
<p><?php echo  $comment->comment_content;?></p>
<p><?php echo  $comment->comment_date;?></p>		 	
</div></div></div>
<?php } endforeach;?>	
</div>
</section>
<section class="inner-full-width-event-footer  inner-container-bg">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="opening-time">
<div class="ot-table">
<?php
if ( !is_user_logged_in() ) { 
echo '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), get_page_link(156) ) . '</p>';

} else{?>
<?php if(isset($_POST['submit_comment'])){

$time = current_time('mysql');

$data = array(
'comment_post_ID' => get_the_id(),
'comment_author' => $_POST['comment_user'],
'comment_author_email' => $_POST['comment_user'],
'comment_author_url' => $_POST['comment_website'],
'comment_content' => $_POST['comment'],
'user_id' => get_current_user_id(),
'comment_date' => $time,
'comment_approved' => 0,
);

wp_insert_comment($data); ?>
<script>
setTimeout(function () {
document.getElementById("sucess_btton").click();
//window.location.href="<?php echo get_permalink();?>";

setTimeout(function () {
window.location.href="<?php echo get_permalink();?>";
}, 3000);
}, 1000);
</script>
<?php }
$current_user = wp_get_current_user();
?>
<form id="contact_form" method="post" action="" class="form-horizontal">
<div class="form-group">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row">
<?php
if ( !is_user_logged_in() ) { ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="input-group first-name">
<input type="text" class="form-control" placeholder="Enter Username" name="comment_user" required >
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="input-group">
<input type="email" class="form-control" placeholder="Enter Email address" name="comment_email" required>
</div>
</div>
<?php } else{ ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="input-group first-name">
<input type="text" class="form-control" placeholder="Enter Username" name="comment_user" value="<?php echo $current_user->user_login;?>" readonly  >
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="input-group">
<input type="email" class="form-control" placeholder="Enter Email address" name="comment_email" value="<?php echo $current_user->user_email ;?>" readonly >
</div>
</div>
<?php }?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter Website Url" name="comment_website">
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-12 inputGroupContainer">
<div class="input-group">
<textarea placeholder="Write comment" name="comment" class="form-control" required></textarea>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input  class="common-btn" type="submit" name="submit_comment" value="Send Comment">
</div>
</div>
</form>       
<?php } ?>
</div>
</div>
</div>
</div>
</section>
</div>
</section>
</article>
<?php endwhile; // end of the loop. ?>
<div class="modal fade" id="success_button" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Success Message Box</h4>
</div>
<div class="modal-body">
Your Comment is sucessfully submit. Please Wait for website admin approval .
</div>
</div>
</div>
</div>
<input type="button" id="sucess_btton" data-target="#success_button" data-toggle="modal" style="display:none">
<?php get_footer(); ?>