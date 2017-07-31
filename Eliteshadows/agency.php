<?php
/**
Template name:AGENCY
 */

get_header(); ?>

	<article>
    <section class="inner-slider inner-image" >
      <div class="overlap-lcr-sec">
        <div class="container">
        <h1 class="cmn-heading" ><?php echo get_the_title();?></h1>
        </div>
      </div>
    </section>
               <section class="mid-warper contact-us">
      <div class="contact-us-warper">
        <div class="container">
          <div class="inner-container-bg">
            <div class="row">
			<?php 
$attachment_id=get_post_thumbnail_id(233);
$attachment=wp_get_attachment_image_src( $attachment_id,'full',true);
?>
<img src="<?php  echo $attachment[0];?>" class="angency_img">
			<div id="accordion-1472795957253370" class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
<h3 id="ui-id-1" class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all how-its-works-slider" role="tab" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0">
<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
How it works
</h3>
<div id="ui-id-2" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true">
<p style="text-align: justify;"><?php $post=get_post(233);
			echo $post->post_content;?></p>
</div>
</div>
			
              <div class="col-md-8 col-sm-9 col-xs-12 col-xs-offset-2">
                <div class="contact-form dib100">
                  <div class="contat-top-heading">
				  <?php $post=get_post(235);?>
 <h1 class="cmn-heading" style="margin-bottom: 15px;margin-top: 20px;"><?php echo $post->post_title;?></h1>
                  
                    <p style="text-align: justify;"><?php echo $post->post_content;?></p>
                  </div>
				  <label id="agency"></label>

                 <form id="agency_form" method="post" action="" class="form-horizontal">	
                    <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input-group full-name">
                              <input type="text" class="form-control" placeholder="Full name" id="fullname" name="fullname" autocomplete="off" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="email" class="form-control" placeholder="Email address" id="email" name="email" autocomplete="off" required>
                        </div>
                      </div>
                    </div>
					 <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Phone Number" id="phone_number" name="phone_number" autocomplete="off" required>
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Postcode" id="postcode" name="postcode" autocomplete="off"  required>
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Company or Current Employer" id="company_or_current_employer" name="company_or_current_employer" autocomplete="off" required>
                        </div>
                      </div>
                    </div>
					 <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Current Position held" id="current_position_held" name="current_position_held" autocomplete="off" required>
                        </div>
                      </div>
                    </div>
		             <div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" autocomplete="off" placeholder="Your ideal position" id="ideal_position" name="ideal_position" required>
                        </div>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-md-12">
                        <div class="input-group">
                          <textarea  type="text" class="form-control"  autocomplete="off" placeholder="Your message" id="message" name="message" required></textarea >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
					  <input type="submit" class="common-btn" id="agency_submit" name="agency_submit" value="Send"/>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
	
</article>

<script>
	 $( document ).ready(function() {
	$("#agency_btn").click();  
	});
	</script>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModals" id="agency_btn" style="display:none" >Open Modal</button>

 <div class="modal fade" id="myModals" role="dialog">
 <div class="container">
<div class="row">
    <div class="modals_dialog maodel_welcom">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <!--  <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">WELCOME</h4>
        </div>
        <div class="modal-body">
          <?php $my_postid = 244;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 </div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="design_model_btn" style="display:none" >Open Modal</button>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" id="modal_dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <!--  <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
          <h6>Thank you. Your message has been sent. A member of the Elite Shadows team will be in touch to help you with your booking enquiry.</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
        </div>
      </div>
      
    </div>
  </div>

<?php get_footer(); ?>
