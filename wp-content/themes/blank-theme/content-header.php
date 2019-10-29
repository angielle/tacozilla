<?php 
/** 
 * Content for displaying Header 
 * 
 * @package cad-wp-theme 
 * @author marcelbadua 
 */ 
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'./style.css'; ?>" type="text/css" media="screen">

<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4fd189acc8.js" crossorigin="anonymous"></script>

<header>
  <div id='header'>
    <div class="container">
      <div class="row flex-row">
        
        <div class="col-sm-4 item">
          <?php 
            $defaults = array( 
              'theme_location'=> 'header-navigation-left', 
              'menu' => 'header-navigation-left', 
              'container' => false, 
              'container_class' => '', 
              'container_id' => '', 
              'menu_class' => '', 
              'menu_id' => '', 
              'echo' => true, 
              'before' => '', 
              'after' => '', 
              'link_before' => '', 
              'link_after' => '', 
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
              'depth' => 2, 
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
              'walker' => new wp_bootstrap_navwalker()
              ); 
              wp_nav_menu( $defaults ); 
            ?>      
        </div>

        <div class="col-sm-4 item">
          <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('name'); ?>">
            <?php if ( get_header_image() != '' ) { ?>
            <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
            <?php } else { ?>
            <?php bloginfo( 'name' ); ?>
            <?php } ?>
          </a>
        </div>

        <div class="col-sm-4 item">
          <?php 
            $defaults = array( 
              'theme_location'=> 'header-navigation-right', 
              'menu' => 'header-navigation-right', 
              'container' => false, 
              'container_class' => '', 
              'container_id' => '', 
              'menu_class' => '', 
              'menu_id' => '', 
              'echo' => true, 
              'before' => '', 
              'after' => '', 
              'link_before' => '', 
              'link_after' => '', 
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
              'depth' => 2, 
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
              'walker' => new wp_bootstrap_navwalker()
              ); 
              wp_nav_menu( $defaults ); 
            ?>    
        </div>

      </div>  
    </div>
  </div> 
  <div class='clearfix'></div>

</header>
