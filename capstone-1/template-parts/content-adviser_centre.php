<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */

?>
<?php
  $auth = SwpmAuth::get_instance();
  $setting = SwpmSettings::get_instance();
  $password_reset_url = $setting->get_value('reset-page-url');
  $join_url = $setting->get_value('join-us-page-url');
  ?>

  <?php
    $auth = SwpmAuth::get_instance();
    ?>
<div class="jf_content_main">
                <div class="parallax pr1" data-velocity="-.1"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100"></div>

                 <div class="container">
                    <div class="row-fluid jfx_showcase">
                        			<div class="moduletable">
						<div class="autotitle">
</div>
		</div>

                    </div>
                </div>
    	                       <!--Main Content-->
                <div class="container">
    	            <div class="jfx_main_content">
                        <div class="row-fluid">
							<div id="content" role="main" class="jf_inner_page span8">
								<!-- Begin Content -->
							<?php// the_content(); ?>
              <?php  if ( current_user_can( 'administrator' ) || SwpmMemberUtils::is_member_logged_in()) { ?>
							<?php //sb_view_breadcrumb(); ?>
              <?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
							<div class="item-page">
								<div class="page-header">
								<h2><?php the_title(); ?></h2>
								</div>
								<div class="icons">
								<div class="btn-group pull-right">
								</div>
								</div>
								<div>
								<div class="content">
									<?php the_content(); ?>
								</div>
								<div class="adviser">
								<div>
                  <!-- Widget -->
                  <div>
                    <?php
                      global $post;
                      $protected = SwpmProtection::get_instance();
                      $attachments = get_posts($args);
                          class Cusslinkss extends SwpmAccessControl {
                            public $lastError;
                            public $moretags;
                            public static $_this;
                            public function __construct(){
                              $this->lastError = '';
                              $this->moretags  = array();
                            }
                          }
                      $check_if_this_member_can_see_this_links = new Cusslinkss();


                        $pages = get_pages('child_of=' .$post->ID .'&parent='.$post->ID.'');


                      if ( $pages ) {
                        echo '<ul class="nav menuadviser">';
                        foreach($pages as $child) {
                          if(current_user_can( 'administrator' ) || $check_if_this_member_can_see_this_links->can_i_read_post($child->ID)){
                          echo '<li><a href="'.get_permalink($child).'">' .$child->post_title. '</a></li>';
                        }
                        }
                        echo '</ul>';
                      }

                    ?>

                  </div>
  									<!-- End Widget -->
								</div>
								</div>
								</div>
								</div>

							<div class="docman_block">
								<h3 class="koowa_header">Documents</h3>
              </div>
              <?php }else{?>
                <div class="alert alert-message">
                  <a class="close" data-dismiss="alert">(X)</a>
                    <h4 class="alert-heading">Please login as Admin or Member to view this section.</h4>
                </div>
                <?php }?>
							<?php wp_reset_query();
									global $post;
									// Get the queried object and sanitize it
									$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
									// Get the page slug
									$post_slug = $current_page->post_name;
									$category_by_slugs = get_category_by_slug($post_slug);
									$child_cats = (array) get_term_children( $category_by_slugs->term_id, 'category' );
									//$post_slug=$post->post_name;
									//$cat = get_query_var('cat');

									$args = array(
										'post_type' => 'attachment',
										'numberposts' => -1,
										'category_name' => $post_slug,
										'category__not_in' => $child_cats,
										'order'=>'DESC'
										);
										$protected = SwpmProtection::get_instance();
										$attachments = get_posts($args);
												class Cuss extends SwpmAccessControl {
													public $lastError;
													public $moretags;
													public static $_this;
													public function __construct(){
														$this->lastError = '';
														$this->moretags  = array();
													}
												}
                                    $check_if_this_member_can = new Cuss();
									if ($attachments) {
										foreach ($attachments as $post) {
                                          if($check_if_this_member_can->can_i_read_post($post->ID) || current_user_can( 'administrator' )){
											setup_postdata($post); ?>
											<div class="docman_document">
												<ul class="docc">
													<li><span class="modified-on-label"> Uploaded On: <?php the_date();?></span><span> By: <?php the_author(); ?></span></li>
                                                    <li><p class="attachment"><a href="<?php echo wp_get_attachment_url(); ?>" target="_blank"><?php the_title(); ?></a> </p><span style="width: 30%; display: block; float: right;"><a href="<?php echo wp_get_attachment_url(); ?>" class="btn btn-large btn-default btn-block docman_download__button docman_track_download" target="_blank"> Download</a></span><span> <?php edit_post_link('Edit', '<p class="btn btn-default btn-small edit_btn_custom">', '</p>'); ?></span></li>
													<hr/>
												</ul>
											</div>
								<?php }}} wp_reset_query(); ?>
								<!-- End Content -->
							</div>
							<div id="aside" class="span4">
        					<!-- Begin Right Sidebar -->
                  <?php  if ( current_user_can( 'administrator' ) || SwpmMemberUtils::is_member_logged_in()) { ?>
        							<div class="moduletable">
							<h3>Document Search</h3>
						<div class="search mod_search180">
						<?php $st = (isset($_GET['usersearch']) ? $_GET['usersearch'] : '' ); ?>
							<form role="search" method="get" id="searchform" class="form-inline" action="<?php echo home_url( '/adviser-centre/document-search/' ); ?>">
									<input type="text" name="usersearch" class="inputbox search-query" id="usersearch" value="<?php echo $st; ?>" placeholder="Search ..." />
									<button class="button btn btn-primary" type="submit" id="searchsubmit" onclick="this.form.searchword.focus();">Search</button>
									<?php// $query_types = get_query_var('post_type'); ?>
							</form>
							</div>
									</div>
                  
                  <div class="moduletable">
                    <h3>New Documents</h3>
                  <div id="scroll-div" style="overflow-y: scroll; height:300px;">
                    <div class="docman_document">
                      <ul class="docc-new">
                        <?php
                            $new_doc_args=array(
                              'post_type' => 'attachment',
                              'category__not_in' => array(1),
          										'numberposts' => -1,
                              'date_query' => array(
                                  array(
                                      'after' => '1 month ago'
                                  )
                              ),
                              'orderby'=>'title',
          										'order'=>'ASC'
                            );
                            $categories = get_the_category();
                            $new_doc_query = get_posts($new_doc_args);
                            if ($new_doc_query) {

          										foreach ($new_doc_query as $post) {
                              if($check_if_this_member_can->can_i_read_post($post->ID) || current_user_can( 'administrator' )){
                                if(has_category($categories)){ ?>
                                                      <li><a href="<?php echo wp_get_attachment_url(); ?>" target="_blank"><?php the_title(); ?> </a><?php edit_post_link('Edit', '<span class="btn btn-default btn-small">', '</span>'); ?></li>
                              <?php }}}} wp_reset_query(); ?>
                        <hr/>
                      </ul>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <br/>
                <br/>
            <?php if(SwpmMemberUtils::is_member_logged_in()) { ?>
				      <div class="moduletable-profile">
  							<div class="custom-profile">
  								<div class="right-profile">
  								<a href="<?php bloginfo('home');?>/profile/" title="Edit Profile">Edit My Profile</a></div>
  							</div>
							</div>
              <div class="moduletable">
                  <ul class="pagenav sidebar_login_links"><li class="logout-links"><a href="<?php bloginfo('home');?>/?swpm-logout=true"><?php echo  SwpmUtils::_('Logout') ?></a></li></ul>
                <?php }else{ ?>
                  <div class="swpm-login-widget-form">
              <form id="swpm-login-form" class="form-validate form-horizontal well" name="swpm-login-form" method="post" action="">
                <div class="swpm-login-form-inner">
                  <div class="swpm-username-input">
                    <input type="text" class="swpm-text-field swpm-username-field" id="swpm_user_name" placeholder="Username" value="" size="25" name="swpm_user_name" />
                  </div>
                  <div class="swpm-password-input">
                    <input type="password" class="swpm-text-field swpm-password-field" id="swpm_password" placeholder="Password" value="" size="25" name="swpm_password" />
                  </div>
                  <div class="swpm-remember-me">
                    <span class="swpm-remember-checkbox"><input type="checkbox" name="rememberme" value="checked='checked'"></span>
                    <span class="swpm-rember-label"> <?php echo SwpmUtils::_('Remember Me') ?></span>
                  </div>
                  <br/>
                  <div class="swpm-login-submit">
                    <input type="submit" class="swpm-login-form-submit" name="swpm-login" value="<?php echo SwpmUtils::_('Login') ?>"/>
                  </div>
                  <div class="swpm-forgot-pass-link">
                    <a id="forgot_pass" class="swpm-login-form-pw-reset-link"  href="<?php echo $password_reset_url; ?>"><?php echo SwpmUtils::_('Forgot Password') ?>?</a>
                  </div>
                  <div class="swpm-login-action-msg">
                    <span class="swpm-login-widget-action-msg"><?php echo $auth->get_message(); ?></span>
                  </div>
                </div>
              </form>
              </div>
              </div>
                  <?php } ?>
        					<!-- End Right Sidebar -->
        				</div>
							<?php //get_sidebar(); ?>
        				        			<!--<div class="container">
                                        	<div class="row-fluid">

                        </div>
                                        </div>	-->
                    </div>
                </div>
    		  </div>
              <!--End main Content-->
                        </div>
                         	</div>
