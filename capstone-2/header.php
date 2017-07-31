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

  <link href="/templates/onecaptstone/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <!--link rel="stylesheet" href="/plugins/editors/jckeditor/typography/typography2.php" type="text/css" /-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/full-slider.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/caption.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/template.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrolly.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
  </script>

			<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: 'Open Sans', sans-serif;
			}
		</style>
			<style type="text/css">
		body.site
		{
			border-top: 3px solid #0088cc;
			background-color: #f4f6f7		}
		a
		{
			color: #0088cc;
		}
		.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
		.btn-primary
		{
			background: #0088cc;
		}
		.navbar-inner
		{
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
		}
	</style>
		<!--[if lt IE 9]>
		<script src="/media/jui/js/html5.js"></script>
	<![endif]-->    

<script>
     
     if(readcok('capstone'))
	 {
	      window.location.href= readcok('capstone') ;
	 }
	 function reachme(link)
	 {
	     if(readcok('capstone'))
		 {
		   window.location.href= link ;
		 }
		 else
		 {
		    creatcok('capstone', link ,1);
			window.location.href=link;
		 }
	 }
	function creatcok(name,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toGMTString();}
	else var expires="";document.cookie=name+"="+value+expires+"; path=/";}
	function readcok(name){var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)===0)return c.substring(nameEQ.length,c.length);}return null;}
</script>

<script type="text/javascript"> 
    jQuery(document).ready(function(){
       jQuery('.parallax').scrolly({bgParallax: true});
    });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46747811-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<body class="site com_content view-article no-layout no-task itemid-248">
	<!-- Body -->
	<div class="body">
        <header class="jf-header" role="banner">
			<div class="jf-header-inner clearfix">
				<a class="jf-brand pull-left" href="<?php bloginfo('home');?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Capstone" /> 				</a>					
			</div>
		</header>