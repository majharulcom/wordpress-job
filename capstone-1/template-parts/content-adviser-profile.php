<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */
if( isset( $_POST['clieked_id'] ) ){
   $clieked_id= $_POST['clieked_id'];
    //$wpdb needs to be made global, this lets us use it on a page template
    global $wpdb;
    //some cleanup to the search term, as well as caching it to $clieked_id
      $clieked_stmt = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
        WHERE um.member_id='%s'",
        $clieked_id, $clieked_id );
    //results are cached in the variable $results using get_col()
    $clieked_result = $wpdb->get_results( $clieked_stmt );
	
}
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
							<div id="content" role="main" class="jf_inner_page span12">
								<!-- Begin Content -->
								
									<?php if(isset($clieked_result)){?>
											<?php foreach($clieked_result as $cu){ ?>
												<div id="SobiPro" class="SobiPro">			
													<div class="SPDetails">
													  <div class="clearfix"></div>
													  <div class="SPDetailEntry">
														<h1><?php 
															$new_var_company = $cu->company_list;
															global $post;
															$args = array(
																'post_type' 			 => 'company_name',
																'p' => $new_var_company, // id of a page, post, or custom type
																'order'					 => 'ASC',
																'post_status'			 => 'publish',
																'post_per_post' 		 => 1
															);

															$profile_company_name = new WP_Query( $args );
															
															if(isset($new_var_company)){?>
																<?php while ( $profile_company_name->have_posts() ) : $profile_company_name->the_post(); ?>
																	<?php esc_html( the_title() ); ?>
															<?php endwhile; }?></h1>
														<p>
														  <strong>Address</strong>
														</p>
														<p><?php echo $cu->address_street; ?></p>
														<p><?php echo $cu->address_city; ?>, <?php echo esc_html($cu->address_state); ?>, <?php echo esc_html($cu->address_zipcode); ?></p>
														<br>
														<div class="spField"></div>
														<div class="spFieldsData field_street"><?php echo esc_html($cu->address_street); ?></div>
														<div class="spFieldsData field_city"><?php echo esc_html($cu->address_city); ?></div>
														<div class="spFieldsData field_country"><?php echo esc_html($cu->country); ?></div>
														<div class="spFieldsData field_zip"><?php echo esc_html($cu->address_zipcode); ?></div>
														<div class="spFieldsData field_phone"><strong>Phone: </strong><?php echo esc_html($cu->phone); ?></div>
														<div class="spFieldsData field_fax"><strong>Fax: </strong><?php echo esc_html($cu->fax); ?></div>
														<div class="spFieldsData field_contact"><strong>Contact Person: </strong><?php echo esc_html($cu->first_name); ?> <?php echo esc_html($cu->last_name); ?></div>
														<div class="spFieldsData field_email"><strong>Email: </strong><?php echo esc_html($cu->email); ?></div>
														<div class="field_website"></div>
														<h2>Contact Person: <strong><?php echo $cu->first_name; ?> <?php echo esc_html($cu->last_name); ?></strong></h2>
														<p>Email: <a href="mailto:<?php echo $cu->email; ?>"><?php echo esc_html($cu->email); ?></a></p>
														<p><a href="<?php echo $cu->website;?>"><?php echo esc_html($cu->website); ?></a></p>
														<p><strong>User Type:</strong>
															<?php 
															$new_var = $cu->membership_user_type;
															global $post;
															$args = array(
																'post_type' 			 => 'user_type',
																'p' => $new_var, // id of a page, post, or custom type
																'order'					 => 'ASC',
																'post_status'			 => 'publish',
																'post_per_post' 		 => 1
															);

															$user_type = new WP_Query( $args );
															
															?>
																<?php while ( $user_type->have_posts() ) : $user_type->the_post(); ?>
																	<span style="color: red;"><?php esc_html( the_title() ); ?></span>
																<?php endwhile; ?>														</p>
														<p>
														  <a target="_blank" href="/"></a>
														</p>
													  </div>
													  <div class="clearfix"></div>
													</div>
												</div>
											<div class="row-fluid">
												<div class="span12">
													<div class="spField"><strong>Name: </strong><?php echo $cu->first_name; ?> <?php echo $cu->last_name; ?></div><br/>
												</div>
											</div>
									<?php }}  ?>
									<?php //var_dump($clieked_id);?>
								<!-- End Content -->
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