<?php
/*
Template Name: Adviser Profile
 */
get_header('other'); ?>

	<div id="primary" class="content-area">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */
 global $post;
   $clieked_id= $post->ID;
    	global $wpdb;
			if(isset($_GET['c'])){
				$ss= $_GET['c'];
			$clieked_stmts = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
				WHERE (um.member_id= '%s'  AND um.company_list='%s' AND um.membership_level='5') OR (um.member_id= '%s'  AND um.company_list='%s' AND um.membership_level='4')",
				$ss, $clieked_id, $ss, $clieked_id );
				//results are cached in the variable $results using get_col()
		$clieked_result_same_address = $wpdb->get_results( $clieked_stmts );
			}


      $clieked_stmt = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
        WHERE (um.company_list='%s' AND um.membership_level='5') OR (um.company_list='%s' AND um.membership_level='4') LIMIT 1",
        $clieked_id, $clieked_id);
    //results are cached in the variable $results using get_col()
    $clieked_result = $wpdb->get_results( $clieked_stmt );

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

									<?php if(isset($_GET['c'])){ ?>
										<?php foreach ($clieked_result_same_address as $single_member) { ?>




											<?php
												$new_var_company = $single_member->company_list;
												global $post;
												$args = array(
													'post_type' 			 => 'company_name',
													'p' => $new_var_company, // id of a page, post, or custom type
													'order'					 => 'ASC',
													'post_status'			 => 'publish'
												);
												$profile_company_name = new WP_Query( $args );

												if(isset($new_var_company)){?>

													<?php while ( $profile_company_name->have_posts() ) : $profile_company_name->the_post(); ?>
														<div id="SobiPro" class="SobiPro">
															<div class="SPDetails">
																<div class="clearfix"></div>
																<div class="SPDetailEntry">
														<h1><?php esc_html( the_title() ); ?></h1>
														<p>
															<strong>Address</strong>
														</p>
														<p><?php echo $single_member->address_street; ?></p>
														<p><?php echo $single_member->address_city; ?>, <?php echo esc_html($single_member->address_state); ?>, <?php echo esc_html($single_member->address_zipcode); ?></p>
														<br>
														<div class="spField"></div>
														<div class="spFieldsData field_street"><?php echo esc_html($single_member->address_street); ?></div>
														<div class="spFieldsData field_city"><?php echo esc_html($single_member->address_city); ?></div>
														<div class="spFieldsData field_country"><?php echo esc_html($single_member->country); ?></div>
														<div class="spFieldsData field_zip"><?php echo esc_html($single_member->address_zipcode); ?></div>
														<div class="spFieldsData field_phone"><?php if (isset($single_member->phone) && $single_member->phone != '   ') { echo '<strong>Phone: </strong>'. esc_html($single_member->phone);}?></div>
														<div class="spFieldsData field_fax"><?php if (isset($single_member->fax)) { echo '<strong>Fax: </strong>'. esc_html($single_member->fax);}?></div>
														<div class="spFieldsData field_mobile"><?php if (isset($single_member->mobile)) { echo '<strong>Mobile: </strong>'. esc_html($single_member->mobile);}?></div>
														<div class="spFieldsData field_contact"><strong>Contact Person: </strong><?php echo esc_html($single_member->first_name); ?> <?php echo esc_html($single_member->last_name); ?></div>
														<div class="spFieldsData field_email"><strong>Email: </strong><?php echo esc_html($single_member->email); ?></div>
														<div class="field_website"></div>
														<h2>Contact Person: <strong><?php echo $single_member->first_name; ?> <?php echo esc_html($single_member->last_name); ?></strong></h2>
														<p>Email: <a href="mailto:<?php if ($single_member->gender == 'female'){ }else{ echo $single_member->email; }?>"><?php if ($single_member->gender == 'female') {
														}else{ echo esc_html($single_member->email); }?></a></p>
														<p><a href="http://<?php echo esc_html($single_member->website); ?>" target="_blank"><?php echo esc_html($single_member->website); ?></a></p>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="row-fluid">
												<?php endwhile; }}?>
											<?php// echo 'Single' ; ?>
									<?php }else { ?>
										<?php foreach($clieked_result as $cu){ ?>
										<?php
											$new_var_company = $cu->company_list;
											global $post;
											$args = array(
												'post_type' 			 => 'company_name',
												'p' => $new_var_company, // id of a page, post, or custom type
												'order'					 => 'ASC',
												'post_status'			 => 'publish'
											);
											$profile_company_name = new WP_Query( $args );

											if(isset($new_var_company)){?>

												<?php while ( $profile_company_name->have_posts() ) : $profile_company_name->the_post(); ?>
													<div id="SobiPro" class="SobiPro">
														<div class="SPDetails">
															<div class="clearfix"></div>
															<div class="SPDetailEntry">
													<h1><?php esc_html( the_title() ); ?></h1>
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
													<div class="spFieldsData field_phone"><?php if (isset($cu->phone) && $cu->phone != '   ') { echo '<strong>Phone: </strong>'. esc_html($cu->phone);}?></div>
													<div class="spFieldsData field_fax"><?php if (isset($cu->fax)) { echo '<strong>Fax: </strong>'. esc_html($cu->fax);}?></div>
													<div class="spFieldsData field_mobile"><?php if (isset($cu->mobile)) { echo '<strong>Mobile: </strong>'. esc_html($cu->mobile);}?></div>
													<div class="spFieldsData field_contact"><strong>Contact Person: </strong><?php echo esc_html($cu->first_name); ?> <?php echo esc_html($cu->last_name); ?></div>
													<div class="spFieldsData field_email"><strong>Email: </strong><?php echo esc_html($cu->email); ?></div>
													<div class="field_website"></div>
													<h2>Contact Person: <strong><?php echo $cu->first_name; ?> <?php echo esc_html($cu->last_name); ?></strong></h2>
													<p>Email: <a href="mailto:<?php if ($cu->gender == 'female'){ }else{ echo $cu->email; }?>"><?php if ($cu->gender == 'female'){ }else{ echo esc_html($cu->email); }?></a></p>
													<p><a href="http://<?php echo esc_html($cu->website); ?>" target="_blank"><?php echo esc_html($cu->website); ?></a></p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="row-fluid">
											<?php endwhile; }} ?>
											<?php// echo 'multi' ?>
									<?php }	?>

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

		<?php	endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div><!-- #primary -->

<?php
get_footer('other');
