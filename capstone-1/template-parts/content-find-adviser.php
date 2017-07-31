<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */
 global $wpdb;
    //some cleanup to the search term, as well as caching it to $usersearch
      $stmt =("SELECT * FROM wp_swpm_members_tbl AS um
        WHERE um.membership_level='5' OR um.membership_level='4' ORDER BY um.first_name");
    //results are cached in the variable $results using get_col()
    $adviser_members = $wpdb->get_results( $stmt );
    $id_based_on_level = array();
    foreach($adviser_members as $ups){
      $id_based_on_level[]= $ups->company_list;
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
							<div id="content" class="jf_inner_page span12"><!-- Begin Content -->
							<div id="system-message-container"></div>
							<!-- Start of SobiPro component-->
							<div id="SobiPro" class="SobiPro">
							<div class="clearfix"></div>
							<div id="sobipro-message" class="alert hide"><button class="close" type="button" data-dismiss="alert">�</button></div>
							<!-- categories loop - start -->
							<div class="category-container"></div>
							<!-- categories loop - end -->
							<!--entries loop - start-->
							<div class="entry-container">
							<div class="row-fluid">
							<?php

										global $post;
										$args = array(
											'post_type' 			 => 'company_name',
											'post__in' => $id_based_on_level,
											//'p' => $id_based_on_level, // id of a page, post, or custom type
                      'orderby'=>'title',
											'order'					 => 'ASC',
											'post_status'			 => 'publish',
											'posts_per_page' 		 => -1
										);

										$company_type = new WP_Query( $args );
										//if(isset($new_var)){?>
										<?php while ( $company_type->have_posts() ) : $company_type->the_post(); ?>
                      <?php //if(isset($adviser_members)){?>
                      <?php //foreach($adviser_members as $au){ ?>
                      <?php $new_var = esc_html( get_the_id() ); ?>
                        <?php //some cleanup to the search term, as well as caching it to $usersearch
                        $stmt_name =("SELECT * FROM wp_swpm_members_tbl AS umn
                        WHERE (umn.company_list=$new_var AND umn.membership_level='5') OR (umn.company_list=$new_var AND umn.membership_level='4') ORDER BY umn.first_name");
                        //results are cached in the variable $results using get_col()
                        $adviser_members_name = $wpdb->get_results( $stmt_name );
                        $clieked_id= $post->ID;
                        //$wpdb needs to be made global, this lets us use it on a page template

                        //some cleanup to the search term, as well as caching it to $clieked_id
                          $clieked_stmt = $wpdb->prepare("SELECT * FROM wp_swpm_members_tbl AS um
                          WHERE (um.company_list='%s' AND um.membership_level='5') OR (um.company_list='%s' AND um.membership_level='4') LIMIT 1",
                          $clieked_id, $clieked_id );
                        //results are cached in the variable $results using get_col()
                        $clieked_result = $wpdb->get_results( $clieked_stmt );
                        ?>
											<div class="half">
												<h2 class="lead page-header"><a href="<?php the_permalink();?>"><?php esc_html( the_title() ); ?></a></h2>
												<div class="spField"></div>
												<div class="spField"></div>
													<div class="spFieldsData field_email"><strong>Email: </strong><?php echo $au->email; ?></div>

															<?php if(isset($adviser_members_name)){?>
															<?php foreach($adviser_members_name as $aun){ ?>
															<?php if(isset($aun->first_name)){?>
																	<?php foreach($clieked_result as $cu){
																	if($cu->address_street === $aun->address_street && $cu->company_list === $aun->company_list){?>
																	<span class="comma"><?php echo $aun->first_name.' '.$aun->last_name;?></span>
																<?php }}?>
															<?php } ?>
															<?php }}?>
															<br/>

												<?php// }}?>
											</div>
                      <?php if(isset($adviser_members_name)){?>
                      <?php foreach($adviser_members_name as $aun){ ?>
                      <?php if(isset($aun->first_name)){?>
                          <?php foreach($clieked_result as $cu){
                          if($cu->address_street != $aun->address_street){?>
                        <div class="half">
                          <h2 class="lead page-header"><a href="<?php echo esc_url( add_query_arg( 'c', $aun->member_id, get_permalink() ) ); ?>"><?php esc_html( the_title() ); ?></a></h2>
                          <div class="spField"></div>
                          <div class="spField"></div>
                            <div class="spFieldsData field_email"><strong>Email: </strong><?php echo $au->email; ?></div>
                                    <span class="comma"><?php echo $aun->first_name.' '.$aun->last_name;?></span>
                                <br/>
                        </div>
                      <?php }}}}}?>
								<?php endwhile; //}?>

</div>
</div>
<!--entries loop - end-->
<div class="clearfix"></div>
</div>
<!-- End of SobiPro component Copyright (C) 2011-2015 Sigsiu.NET GmbH -->
<script type="text/javascript">// <![CDATA[
SobiPro.Ready();

// ]]></script>



<!-- End Content -->

</div>
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

               <div class="jf_content_bottom">
                    <div class="container">
                    <div class="row-fluid">
                        			<div class="moduletable jf_products span4">


<div class="custom jf_products span4"  >
	<div class="jf_product">
	<div class="jf_header">
		<h3>
			<a href="/about-us/" title="About us">About Us</a></h3>
		<div class="jf_date jf_new">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/about-us/" title="About us"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/img_product.png" /></a></div>
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
			<a href="/blog/" title="Blog">The Blog</a></h3>
		<div class="jf_date">
			<p>NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/blog/" title="Blog"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_blog.png" /></a></div>
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
			<a href="/contact-us/" title="Contact Us">Contact Us</a></h3>
		<div class="jf_date">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="/contact-us/" title="Contact Us"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_capstone.png" /></a></div>
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
