    <html>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    		<?php wp_head(); ?>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71205219-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>
    <body <?php body_class(); ?>>
        <div class="s_header_con s_header_con_f">
            <div class="container-fluid pos_rel">
              <div class="manu_static_con">
              <div class="col-md-3">
                <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"><span class="beta_logo">Beta</span></a>
              </div>
                 <div class="col-md-9 mb_m">
                   <div class="menu_con">
                             <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                             <!--ul class="nav navbar-nav s_cus_menu">
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#" class="report">Report <img src="<?php echo get_template_directory_uri(); ?>/images/report_icon.png"  class="menu_icon" alt="menu_link"></a></li>
                                 <li><a href="#" class="tarck">Track <img src="<?php echo get_template_directory_uri(); ?>/images/track_icon.png"  class="menu_icon" alt="menu_link"></a></li>
                                 <li><a href="#" class="upkeep">Upkeep <img src="<?php echo get_template_directory_uri(); ?>/images/report_icon.png"  class="menu_icon" alt="menu_link"></a></li>
                                 <li><a href="#" class="host">Host <img src="<?php echo get_template_directory_uri(); ?>/images/host_icon.png"  class="menu_icon" alt="menu_link"></a></li>
                                 <li><a href="#">Blog</a></li>
                             </ul-->
                   </div>
                 </div>
               </div>
            </div>
        </div>
