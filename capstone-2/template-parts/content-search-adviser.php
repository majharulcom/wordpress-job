<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */
//check permissions first!


if( !empty( $_GET['usersearch'] ) ){
	$usersearch = preg_replace('!\s+!', '-', $_GET['usersearch']);
   //$usersearch= str_replace(' ', '-', $_GET['usersearch']);
    //$wpdb needs to be made global, this lets us use it on a page template
    global $wpdb;
	$querystr =$wpdb->prepare("
    SELECT $wpdb->posts.*
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE ($wpdb->posts.ID = $wpdb->postmeta.post_id AND $wpdb->posts.post_type = 'company_name' AND $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_name LIKE '%%%s%%')
    ORDER BY $wpdb->posts.post_name
 ",$usersearch);
 $pageposts = $wpdb->get_results($querystr);
  $uniques = array(); ?>
    <?php foreach($pageposts as $ups){
         $uniques[0] = $ups;
   }

    $up_without_dup=  array_unique($uniques);
 //$pageposts = $wpdb->get_results(implode(',',array_unique(explode(',', $querystr))));


    //some cleanup to the search term, as well as caching it to $usersearch
      $stmt = $wpdb->prepare("
		SELECT *
		FROM wp_swpm_members_tbl AS um
    WHERE (um.membership_level='5' AND um.first_name LIKE '%%%s%%')
    OR (um.membership_level='4' AND um.first_name LIKE '%%%s%%')
		OR (um.membership_level='5' AND um.last_name LIKE '%%%s%%')
    OR (um.membership_level='4' AND um.last_name LIKE '%%%s%%')
    OR (um.membership_level='5' AND concat_ws('-',um.first_name,um.last_name) LIKE '%%%s%%')
    OR (um.membership_level='4' AND concat_ws('-',um.first_name,um.last_name) LIKE '%%%s%%')
		ORDER BY um.first_name",
        $usersearch, $usersearch, $usersearch, $usersearch, $usersearch, $usersearch);
    //results are cached in the variable $results using get_col()
    $results = $wpdb->get_results( $stmt );
}
?>
<div class="jf_content_main">
                <div class="parallax pr1" data-velocity="-.1"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100"></div>

                 <div class="container">
                    <div class="row-fluid jfx_showcase">
					   <div class="moduletable">
						<div class="autotitle">
							<div class="jf_top_about">
							<div class="jf_content_about">
								<h1 style="line-height:60px"><?php the_title(); ?></h1>
								   <div class="jf_about">
									<?php
									$second_title = get_field('second_title');
									$short_description = get_field('short_description');
									$header_right_image = get_field('header_right_image');
									?>
										<?php if($second_title) : ?>
										<p><strong><?php echo $second_title; ?></p></strong>
										<?php else : ?>
										<p><strong>Available Options</strong></p>
										<?php endif; ?>
										<?php if($short_description) : ?>
										<p><?php echo $short_description; ?></p>
										<?php else : ?>
										<p>Capstone has a comprehensive in-house solution.</p>
										<?php endif; ?>
										<?php if($header_right_image) : ?>
										<img src="<?php echo $header_right_image['url']; ?>" alt="" />
										<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/header-support.png" alt="" />
										<?php endif; ?>
									</div>
							</div>
							</div>
						</div>
					</div>
                    </div>
                </div>
    	                       <!--Main Content-->
                <div class="container">
    	            <div class="jfx_main_content">
                        <div class="row-fluid">
							<div id="content" role="main" class="jf_inner_page span8">
							<div id="system-message-container">
							</div>
								<!-- Start of SobiPro component-->
								<div id="SobiPro" class="SobiPro">
								<?php $st = (isset($_GET['usersearch']) ? $_GET['usersearch'] : '' ); ?>
								<form action="" method="get" id="spSearchForm"><div style="font-size: 25px; line-height: 30px; padding-top: 31px; font-weight: bold;">Capstone Financial Advisers</div>
								<div class="SPSearch" style="padding-top: 0px;"><div></div>
								  <div style="margin: 0px auto; font-size: 18px; font-weight: normal; color: rgb(229, 0, 61); padding-top: 32px; padding-bottom: 0px;">Enter First Name or Surname</div>
								  <div id="SPSearchForm" class="form-horizontal control-group">
									<div class="control-group">
									  <div class="controls" style="margin-left: 0px; padding-top:15px;">
										<input type="text" name="usersearch" value="<?php echo $st; ?>" class="input-medium" id="SPSearchBox usersearch" style="width: 55%; height: 30px;"> <button type="submit" class="btn btn-success" style="height: 39px !important; margin-top: -2px;">Start Search</button>
									  </div>
									</div>
								  </div>
									<?php if(isset($results) && count($results)> 0)
								  { ?>
								  <div class="alert alert-info">Found
									<?php  echo count($results); ?>
									result(s)!</div>
									<?php }else{
										if(isset($up_without_dup)){ ?>
											<div class="alert alert-info">Found
											<?php echo count($up_without_dup); ?>
											result(s)!</div>
										<?php	}}	?>
								</div>
								<div>
								</form>

								</div>
								<!-- End of SobiPro component Copyright (C) 2011-2015 Sigsiu.NET GmbH -->
								<script type="text/javascript">SobiPro.Ready();</script>
							</div>
							<!--entries loop - start-->
								  <div class="entry-container">
								  <?php
											//$metanames a simple array containing the names of the meta values
											//It will allow us to loop through them to keep the code simple and clean
											 $metanames = array("first_name", "last_name")
											 ?>
											<?php if(isset($results) && count($results)> 0){?>
											  <?php foreach($results as $u){ ?>
                          <?php 	$new_var_search = $u->company_list;
														global $post;
														$args = array(
															'post_type' 			 => 'company_name',
															'p' => $new_var_search, // id of a page, post, or custom type
															'order'					 => 'ASC',
															'post_status'			 => 'publish',
															'posts_per_page' 		 => 1
														);
                            //some cleanup to the search term, as well as caching it to $usersearch
                            $stmt =("SELECT * FROM wp_swpm_members_tbl AS um
                            WHERE um.membership_level='5' OR um.membership_level='4' ORDER BY um.first_name");
                                              //results are cached in the variable $results using get_col()
                                            $adviser_members = $wpdb->get_results( $stmt );
													  	$company_type_query = new WP_Query( $args );

														if(isset($new_var_search)){?>
															<?php while ( $company_type_query->have_posts() ) : $company_type_query->the_post(); ?>
																<?php $clieked_id= get_the_id();
																//some cleanup to the search term, as well as caching it to $clieked_id
																	$clieked_stmt = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
																	WHERE um.company_list='%s' LIMIT 1",
																	$clieked_id );
																		//results are cached in the variable $results using get_col()
																	$clieked_result = $wpdb->get_results( $clieked_stmt );  ?>
																<?php foreach($clieked_result as $cu){ ?>
															<?php if($u->address_street  != $cu->address_street && $new_var_search  === $cu->company_list){?>
																<div class="row-fluid">
																	<div class="span12">
																		<h2 class="lead page-header page-header-new" style="color: #0088cc;">
																			<h2 class="lead"><a href="<?php echo esc_url( add_query_arg( 'c', $u->member_id, get_permalink() ) ); ?>"><?php esc_html( the_title() ); ?></a></h2>
																						<span class="spField"><?php echo $u->first_name.' '.$u->last_name;?></span>
																		</h2>
																	<div class="spField"></div><div class="spField"></div>
																</div>
															</div>
																<?php }}?>
                                <?php foreach($adviser_members as $uno){ ?>
                                <?php foreach($clieked_result as $cu){
                                  if($u->address_street  === $cu->address_street && $u->company_list  === $cu->company_list && $u->address_street  === $cu->address_street){
                                    $false_result = 1;
                                  }}
                                  }?>
                                <?php if ($false_result === 1) { ?>
                                  <div class="row-fluid">
                                    <div class="span12">
                                      <h2 class="lead page-header page-header-new" style="color: #0088cc;">
                                        <h2 class="lead"><a href="<?php the_permalink();?>"><?php esc_html( the_title() );?></a></h2>
                                            <?php foreach($adviser_members as $uno){ ?>
                                            <?php foreach($clieked_result as $cu){
                                              if($uno->address_street  === $cu->address_street && $uno->company_list  === $cu->company_list){?>

                                              <span class="comma"><?php echo $uno->first_name.' '.$uno->last_name;?></span>
                                            <?php }} ?>
                                            <?php }?></h2>
                                      <div class="spField"></div><div class="spField"></div>
                                    </div>
                                  </div>
                              <?php  } ?>
														<?php endwhile; }?>
											<?php }} else{?>
											<?php if(isset($pageposts)){?>


                           <?php foreach($up_without_dup as $up){ ?>
											<div class="row-fluid">
												<div class="span12">
													<h2 class="lead page-header page-header-new" style="color: #0088cc;"><?php
														$new_var_search = $up->ID;
														global $post;
														$args = array(
															'post_type' 			 => 'company_name',
															'p' => $new_var_search, // id of a page, post, or custom type
															'order'					 => 'ASC',
															'post_status'			 => 'publish'

														);

														$company_type_query = new WP_Query( $args );

														if(isset($new_var_search)){?>
															<?php while ( $company_type_query->have_posts() ) : $company_type_query->the_post(); ?>
																<h2 class="lead"><a href="<?php the_permalink();?>"><?php esc_html( the_title() ); ?></a></h2>
																<?php $clieked_id= get_the_id();
																	    //some cleanup to the search term, as well as caching it to $usersearch
																		  $stmt =("SELECT * FROM wp_swpm_members_tbl AS um
																			WHERE um.membership_level='5' OR um.membership_level='4' ORDER BY um.first_name");
																		//results are cached in the variable $results using get_col()
																		$adviser_members = $wpdb->get_results( $stmt );

																	//some cleanup to the search term, as well as caching it to $clieked_id
                                  $clieked_stmt = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
                                  WHERE um.company_list='%s' LIMIT 1",
                                  $clieked_id );
																	//results are cached in the variable $results using get_col()
																	$clieked_result = $wpdb->get_results( $clieked_stmt );

																	?>
																	<?php foreach($adviser_members as $uno){ ?>
																	<?php foreach($clieked_result as $cu){ ?>
                                    <?php if ($uno->address_street  === $cu->address_street && $uno->company_list  === $cu->company_list) { ?>
																		<span class="comma"><?php echo $uno->first_name.' '.$uno->last_name;?></span>
																	<?php }?>
																	<?php } var_dump($uno->company_list); }?>

														<?php endwhile; } //var_dump($up->ID);?></h2>
													<div class="spField"></div><div class="spField"></div>




												</div>
											</div>
                      <?php foreach($adviser_members as $uno){ ?>
                      <?php foreach($clieked_result as $cu){ ?>
                      <?php if($uno->address_street  != $cu->address_street && $uno->company_list  === $cu->company_list){?>
                      <div class="row-fluid">
                        <div class="span12">
                          <h2 class="lead page-header page-header-new" style="color: #0088cc;">
                            <h2 class="lead"><a href="<?php echo esc_url( add_query_arg( 'c', $uno->member_id, get_permalink() ) ); ?>"><?php esc_html( the_title() ); ?></a></h2>
                                  <span class="spField"><?php echo $uno->first_name.' '.$uno->last_name;?></span>
                          </h2>
                        <div class="spField"></div><div class="spField"></div>
                      </div>
                      </div>
                      <?php }}}?>

											<?php } ?>
											<?php }}//var_dump($u);?>
											<hr/>
											<div style="font-size: 14px; padding-top: 0px; font-weight: 100;">If you require assistance in locating an Adviser, please <a href="mailto:info@capstonefp.com.au">email us</a> with your query and we will let you know their contact details.</div>

								 </div>
								<!--entries loop - end-->
							</div>
							<?php get_sidebar(); ?>
        				        			<!--<div class="container">
                                        	<div class="row-fluid">

                        </div>
                                        </div>	-->
                    </div>
                </div>
    		  </div>
              <!--End main Content-->

               <div class="jf_content_bottom">
                    <div class="container">
                    <div class="row-fluid">
                        			<div class="moduletable jf_products span4">


<div class="custom jf_products span4"  >
	<div class="jf_product">
	<div class="jf_header">
		<h3>
			<a href="/about-us-investors/" title="About us">About Us</a></h3>
		<div class="jf_date jf_new">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/about-us-investors/" title="About us"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/img_product.png" /></a></div>
		<div class="jf_text">
			<p>
				Our Story</p>
		</div>
	</div>
</div>
</div>
		</div>
			<div class="moduletable jf_blog span4">


<div class="custom jf_blog span4"  >
	<div class="jf_blog">
	<div class="jf_header">
		<h3>
			<a href="/blog-investors/" title="Blog">The Blog</a></h3>
		<div class="jf_date">
			<p>NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/blog-investors/" title="Blog"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_blog.png" /></a></div>
		<div class="jf_text">
			<span style="font-size:12px;"><span style="color: rgb(255, 255, 255);">Read our latest posts </span></span><!-- <p>Voluptas sit aspernatur aut odit aut fugit, sed quiconsequuntur magni dolores eos qui ration...</p>--></div>
	</div>
</div>
<div id="ckimgrsz" style="left: 0px; top: 30px;">
	<div class="preview">
		&nbsp;</div>
</div>
</div>
		</div>
			<div class="moduletable jf_Process span4">


<div class="custom jf_Process span4"  >
	<div class="jf_capstone">
	<div class="jf_header">
		<h3>
			<a href="/contact-us-investors/" title="Contact Us">Contact Us</a></h3>
		<div class="jf_date">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/contact-us-investors/" title="Contact Us"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_capstone.png" /></a></div>
		<div class="jf_text">
			<p>
				Discover more about Capstone today</p>
		</div>
	</div>
</div>
<div id="ckimgrsz" style="left: 0px; top: 30px;">
	<div class="preview">
		&nbsp;</div>
</div>
</div>
		</div>

                    </div>
                 </div>
                </div>
                        </div>
                         	</div>
                          <style media="screen">
                          .comma ~ .comma:not(:empty):before {
                              content: "& ";
                          }

                          .span {
                              margin: 0;
                              padding: 0;
                          }

                          </style>
