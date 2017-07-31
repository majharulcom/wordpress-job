<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway|Roboto" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
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
   <div class="container-fluid header_dashboard">
     <div class="container-custom-header">

      <div class="row">
          <div class="col-md-3">
                  <div class="custom"  >
	<p>
	<a href="<?php bloginfo('home');?>">&nbsp; <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo_other.png" /></a></p>
</div>
          </div>
          <div class="col-md-9">
            <div class="profile_pic_in pull-right">
              <form action="/adviser-centre/document-search/" method="get" class="fm_n_ser">
                  <input type="text" name="usersearch" value="<?php echo $st; ?>" class="header_search" placeholder="SEARCH" />
              </form>
                <!--input type="text" class="header_search" placeholder="SEARCH" /-->

              <img src="<? echo get_avatar_url(get_avatar( $curauth->ID, 90 )); ?>" align="left" class="authorimage" />
            </div>
          </div>
      </div>
       </div>
   </div>
