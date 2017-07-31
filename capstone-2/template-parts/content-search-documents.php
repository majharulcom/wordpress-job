<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */

if( !empty( $_GET['usersearch'] ) ){
	$usersearch = preg_replace('!\s+!', '-', $_GET['usersearch']);
   //$usersearch= str_replace(' ', '-', $_GET['usersearch']);
    //$wpdb needs to be made global, this lets us use it on a page template
    global $wpdb;
	$querystr =$wpdb->prepare("
    SELECT $wpdb->posts.*
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE ($wpdb->posts.ID = $wpdb->postmeta.post_id AND $wpdb->posts.post_type = 'attachment' AND $wpdb->posts.post_name LIKE '%%%s%%')
    ORDER BY $wpdb->posts.post_name
 ",$usersearch);
 $pageposts = $wpdb->get_results($querystr);
  $uniques = array(); ?>
    <?php foreach($pageposts as $ups){
         $uniques[] = $ups->ID;
   }

    $up_without_dup=  array_unique($uniques);
    //echo "<pre>";
    //var_dump($pageposts);
    // echo "</pre>";
    //$pageposts = $wpdb->get_results(implode(',',array_unique(explode(',', $querystr))));
}
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
							<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
<br/>
<?php  if ( current_user_can( 'administrator' ) || SwpmMemberUtils::is_member_logged_in()) { ?>
              <div class="search">
                  <?php $st = (isset($_GET['usersearch']) ? $_GET['usersearch'] : '' ); ?>

              <form id="searchForm" action="" method="get">

              	<div class="btn-toolbar">
              		<div class="btn-group pull-left">
              			<input type="text" name="usersearch" placeholder="Search Keyword:" id="usersearch" size="30" maxlength="200" value="<?php echo $st; ?>" class="inputbox">
              		</div>
              		<div class="btn-group pull-left">
              			<button type="submit" onclick="this.form.submit()" class="btn hasTooltip" title="" data-original-title="Search"><span class="icon-search"></span></button>
              		</div>

              		<div class="clearfix"></div>
              	</div>

              	<div class="searchintro">
              				<p><?php
							if(count(up_without_dup)>0){
                      $categoriese = get_the_category();
                      $argss = array(
                        'post_type' => 'attachment',
                        'post__in' => $up_without_dup, // id of a page, post, or custom type
												'category__not_in' => array(1),
                        'order'					 => 'ASC',
                        'posts_per_page' 		 => -1
                      );
                      $categoriess = array();
                      $attachmentss = get_posts($argss);
                      foreach ($attachmentss as $post) {
                        if(has_category($categoriese)){
                          $categoriess[] = $post;
                      }} wp_reset_query();

							if(count($up_without_dup)>0){echo '<strong>Total: <span class="badge badge-info">'; echo count($categoriess); echo "</span> results found.</strong>";}else{echo "No Results Found";}}?></p>

                </div>

              </form>

              <dl class="search-results">
                <?php
                $protected = SwpmProtection::get_instance();
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
                if(count($up_without_dup)>0){
                   global $post;
                   $categories = get_the_category();
                   $args = array(
                     'post_type' => 'attachment',
                     'post__in' => $up_without_dup, // id of a page, post, or custom type
					 'category__not_in' => array(1),
                     'order'					 => 'ASC',
                     'posts_per_page' 		 => -1
                   );

                 $attachments = get_posts($args);

                  if ($attachments) {
                    foreach ($attachments as $post) {
                        if($check_if_this_member_can_see_this_links->can_i_read_post($post->ID) || current_user_can( 'administrator' )){
                      setup_postdata($post);

                      if(has_category($categories)){ ?>
                      <div class="docman_document">
                        <ul class="docc">
                          <li><span class="modified-on-label"> Uploaded On: <?php the_date();?></span><span> By: <?php the_author(); ?></span></li>
                                                    <li><p class="attachment"><a href="<?php echo wp_get_attachment_url(); ?>" target="_blank"><?php the_title(); ?></a> </p> <span style="width: 30%; display: block; float: right;"><a href="<?php echo wp_get_attachment_url(); ?>" class="btn btn-large btn-default btn-block docman_download__button docman_track_download" target="_blank"> Download</a></span><span> <?php edit_post_link('Edit', '<p class="btn btn-default btn-small edit_btn_custom">', '</p>'); ?></span></li>
													<li><?php foreach( get_the_category($post->ID) as $cat ) { ?> <strong style ="color: red;"></strong> <a href="<?php echo get_category_link($cat->term_id); ?>" class="btn btn-default btn-small" target="_blank"><?php echo esc_html('Go This File Location'); ?></a><?php }?></li>
                          <hr/>
                        </ul>
                      </div>
                <?php }}}}} wp_reset_query();?>
              	</dl>
              </div>
              <?php }else{?>
                <div class="alert alert-message">
                  <a class="close" data-dismiss="alert">(X)</a>
                    <h4 class="alert-heading">Please login as Admin or Member to view search result.</h4>
                </div>
                <?php }?>
								<!-- End Content -->
							</div>
							<div id="aside" class="span4">
        					<!-- Begin Right Sidebar -->
									<?php  if ( current_user_can( 'administrator' ) || SwpmMemberUtils::is_member_logged_in()) { ?>
        							<div class="moduletable">
							<h3>Document Search</h3>
						<div class="search mod_search180">
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
                              if($check_if_this_member_can_see_this_links->can_i_read_post($post->ID) || current_user_can( 'administrator' )){
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
