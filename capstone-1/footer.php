<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?>

 <div class="p_licence_area">
           <div class="container">
               <div class="p_licence_title">
                   <h2>Discover the benefits of an independently owned Licensee.</h2>
                   <div class="p_licence_line">

                   </div>
                   <p>Experience the Capstone difference</p>
                   <div class="p_about_find p_licence_apply">
                   <a href="#">Apply Online</a>
               </div>
               </div>
           </div>
       </div>

       <div class="testi_area">
           <div class="container">
               <div class="row">
                   <div id="owl">
                            <div class="items">
                                    <img class="testi_image" src="<?php echo get_template_directory_uri(); ?>/images/testi_image.png" alt="">
                                    <h3 class="testimonial_name">Katherine</h3>
                                    <p class="testi_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply
dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="items">
                                    <img class="testi_image" src="<?php echo get_template_directory_uri(); ?>/images/testi_image.png" alt="">
                                    <h3 class="testimonial_name">Katherine</h3>
                                    <p class="testi_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply
dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="items">
                                    <img class="testi_image" src="<?php echo get_template_directory_uri(); ?>/images/testi_image.png" alt="">
                                    <h3 class="testimonial_name">Katherine</h3>
                                    <p class="testi_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply
dummy text of the printing and typesetting industry.</p>
                            </div>
                    </div>
               </div>
           </div>
       </div>

       <div class="h_advisor_impsum_area">
           <div class="container">
               <div class="p_show_off">
                   <div class="row">
                     <h4 class="search_home_head">FIND A CAPSTONE ADVISER</h4>
                     <?php if( !empty( $_GET['usersearch'] ) ){
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
                     <?php $st = (isset($_GET['usersearch']) ? $_GET['usersearch'] : '' ); ?>

                     <form action="/find-an-adviser/search/" method="get" id="spSearchForm">
                         <input type="text" name="usersearch" value="<?php echo $st; ?>" class="search_home_input" placeholder="Enter first name or last name">
                         <button type="submit" class="h_advisor_find">SEARCH</button>
                     </form>
                   </div>
               </div>
           </div>
       </div>

       <div class="p_show_off_area">
           <div class="container">
               <div class="p_show_off">
                   <div class="row">
                      <div class="p_show_area1">
                       <div class="col-md-4">
                           <div class="p_show_img1">
                              <a href="#" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/images/BGL-logo.png" alt="" width="190"> </a>
                           </div>
                       </div>
                       </div>
                       <div class="col-md-4">
                           <div class="p_show_img2">

                             <a href="#" target="_blank">   <img src="<?php echo get_template_directory_uri(); ?>/images/Layer-13.png" alt="">  </a>

                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="p_show_img3">
                            <a href="#" target="_blank">    <img src="<?php echo get_template_directory_uri(); ?>/images/Layer-21.png" alt="">  </a>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="p_footer_area">
           <div class="container">
               <div class="p_menues">
                   <p><a href="#">Financial Services Guide</a>     <a href="#">Privacy Policy</a>      <a href="#">Disclaimer</a>      <a href="#">Contact us</a></p>
               </div>
               <div class="p_footer_info">
                   <p>Level 14, 461 Bourke St, Melbourne VIC, 3000 | Tel 1300 306 900</p>
                   <p>© Copyright 2013. Capstone Financial Planning Pty Ltd. All rights reserved.
                   ABN 24 093 733 969. Australian Financial Services / Australian Credit Licence No. 223135</p>
               </div>
           </div>
       </div>


<?php wp_footer(); ?>
</body>
</html>
