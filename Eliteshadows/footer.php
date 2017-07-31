<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<footer>
    <div class="footer-top">
      <div class="container">
        <div class="heading-footer">
          <h5>Get In Touch </h5>
        </div>
        <div class="contact-content">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6">
              <div class="c-sub-sec contact-us"> <span class="sub-head">Contact Us</span>
                <p style="color:#fff"><a href="mailto:<?php echo get_option('admin_email'); ?>" style="color:#fff"><?php echo get_option('admin_email'); ?></a></br>
                                  <?php
$Company_Contact = get_option( 'Company_Contact');
			if($Company_Contact){
				echo $Company_Contact;
			}?></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
              <div class="c-sub-sec visit-us"> <span class="sub-head">Visit Us</span>
                <?php
$Company_Address = get_option( 'Company_Address');
			if($Company_Address){
				echo ' <p>'.$Company_Address.'</p>';
			}?>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="c-sub-sec join-us"> <span class="sub-head">Join Us</span>
                <div class="footer-social">
                  <ul>
			<?php $Facebook =get_option( 'Facebook', '' );
$Twitter=get_option( 'Twitter', '' );
$Linkedin=get_option( 'Linkedin', '' );
$GPlus=get_option( 'GPlus', '' );
$Pinterest=get_option( 'Pinterest', '' );
$Instagram=get_option( 'Instagram', '' );
if($Facebook){
	echo '<li><a href="'.$Facebook.'" target="_blank" title="Facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>';
}
if($Twitter){
	echo '<li><a href="'.$Twitter.'" target="_blank" title="Twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>';
}
if($Linkedin){
	echo '<li><a href="'.$Linkedin.'" target="_blank" title="Linkedin"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>';
}
if($GPlus){
	echo '<li><a href="'.$GPlus.'" target="_blank" title="Google Plus"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>';
}
if($Pinterest){
	echo '<li><a href="'.$Pinterest.'" target="_blank" title="Pinterest"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a></li>';
}
if($Instagram){
	echo '<li><a href="'.$Instagram.'" target="_blank" title="Instagram"><i aria-hidden="true" class="fa fa-instagram"></i></a></li>';
}
?>
</ul>
                </div>
              </div>
            </div>
			          <div class="col-sm-8 col-md-6 col-xs-12 col-xs-offset-3">

        <div class="subscribe-news">
 <script type="text/javascript" src="https://signup.ymlp.com/signup.js?id=gwjsbyjgmgj"></script>
			 
        </div>
	</div>
		
	
			
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="col-md-5 col-sm-8 col-xs-12">
          <div class="copyright-sec">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="" title=""/> </figure>
			<?php
$CopyRight = get_option( 'CopyRight');
			if($CopyRight){
				echo ' <p>'.$CopyRight.'</p>';
			}?>
           
          </div>
        </div>
		<div class="col-md-4 col-sm-4 col-xs-12">
         <div class="copyright-sec compay_logo">
            <p>Designed & Developed By <a href="https://www.arkasoftwares.com/" target="_blank" style="color:#fff">Arka Softwares</a>. </p>
          </div>
        </div>
		
        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="footer-link">
            <ul>
              <li><a href="<?php echo home_url();?>">HOME</a> </li>
              <li><a href="<?php echo get_page_link(93); ?>"><?php echo get_the_title(93);?></a> </li>
              <li><a href="<?php echo get_page_link(6); ?>"><?php echo get_the_title(6);?></a> </li>
              <li><a href="<?php echo get_page_link(8); ?>"><?php echo get_the_title(8);?></a> </li>
	      <li><a href="<?php echo get_page_link(223); ?>"><?php echo get_the_title(223);?></a> </li>
		<li><a href="<?php echo get_page_link(225); ?>"><?php echo get_the_title(225);?></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
</main>

<div class="tu-overlay" id="loading_1" style="display:none"> 
<div class="container">
<div class="loader-gif">
<img src="<?php echo get_template_directory_uri(); ?>/img/ajax_loader.gif">
</div>
</div>
</div>
<!-- OWL CAROUSEL JS --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script> 
<!-- CUSTOM JS --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
<script language="javascript">
$(document).ready(function(){ 

  $("#username").attr("onkeyup", "validate_username($(this).val());");
   
});
function validate_username(username){
	if (username.match(/\s/g)){
 
		 $("#show_pie_register_error_js").html("<p style='color:red;margin-bottom:0'>Please remove space in username.You can use underscore(_).</p>");
		 $("input[name=pie_submit]").attr("disabled", "disabled");

 } else{
	  $("#show_pie_register_error_js").html("");
	  $("input[name=pie_submit]").removeAttr("disabled", "disabled");
 }

}
</script>
<script>


 var ID=$('#filter').val(); 
			
			var rowId = $(this);
			var answer = true;
			
			if (answer){
				    jQuery.ajax({
				    url: '<?= admin_url( 'admin-ajax.php' )?>',
						type: "POST",
						data: { action: 'filter', id: ID },
						success: function($result){
						 
							$('#LaDIV').html($result);
								
							}
							    
						});
			}
				
 $('#filter').change(function(){
 var ID=$('#filter').val(); 
			$('#loading_1').show();
			var rowId = $(this);
			var answer = true;
			
			if (answer){
				    jQuery.ajax({
				    url: '<?= admin_url( 'admin-ajax.php' )?>',
						type: "POST",
						data: { action: 'filter', id: ID },
						success: function($result){
						 
							$('#LaDIV').html($result);
								
							},
      complete: function(){
        $('#loading_1').hide();
      }
							    
						});
			}
				    }); 
										$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$(document).ready(function(){

$('#agency_form').each(function(key, form) {
$(this).validate({
rules: {

fullname: {
required: true,
maxlength: 30,

},
email_address: {
required :true,
email: true
},
postcode: {
required: true,
maxlength: 30,

},
company_or_current_employer: {
required: true,
maxlength: 30,

},
current_position_held: {
required: true,
maxlength: 30,

},
ideal_position: {
required: true,
maxlength: 30,

},
message: {
required: true,
maxlength: 500,

},
phone_number: {
required: true,
number: true,
minlength: 10,
maxlength: 14,

},



},

messages:{

fullname:{
required: "This field is required.",
maxlength: "Your  name length must be less then 30 characters",
},
email:{
required: "This field is required.",
email: "Please enter valid email address",
},
postcode:{
required: "This field is required.",
},
company_or_current_employer:{
required: "This field is required.",
},
current_position_held:{
required: "This field is required.",
},
ideal_position:{
required: "This field is required.",
},

message:{
required: "This field is required.",
maxlength: "Your  Message length must be less then 500 characters",
},
phone_number:{
required: "This field is required.",
maxlength: "Your  phone number length must be less then 14 number",
minlength: "Your  phone number length must be greater then 10 number",
number:"Please enter valid number",
},


},
  submitHandler: function (form) {
	  
	var fullname=$('#fullname').val();
	var email=$('#email').val();
	var postcode=$('#postcode').val();
	var phone_number=$('#phone_number').val();
	var current_position_held=$('#current_position_held').val();
	var company_or_current_employer=$('#company_or_current_employer').val();
	var ideal_position=$('#ideal_position').val();
	var message=$('#message').val();
                         jQuery.ajax({
				    url: '<?= admin_url( 'admin-ajax.php' )?>',
						type: "POST",
					data: { action: 'agnecy_form',fullname:fullname,email:email,postcode:postcode,current_position_held:current_position_held,company_or_current_employer:company_or_current_employer,ideal_position:ideal_position,message:message,phone_number:phone_number },
						success: function($result){
						 $('#agency_form')[0].reset();
						 		$("#design_model_btn").click();
					$("#modal_dialog").click(function(){
				window.location.href = "<?php echo get_permalink(10);?>";
				});
								 							   
							}
							    
						});
                          }

});


});
});
					</script>
	<?php wp_footer(); ?>
</body>
</html>