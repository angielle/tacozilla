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
        <!-- <img src="images/misc/flag-left.png" class="flag-left img-responsive" width="500" /> -->
        <div class="row flex-row">
          <div class="col-sm-4 item">
            <ul>
              <li>
                <a href='#about' class='link'>About</a>
              </li>    
              <li>
                <a href='#featured' class='link'>Featured</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 item">
            <a href="#">
              <img src="<?php header_image()?>" class="img-responsive" width="150" />
            </a>
          </div>
          <div class="col-sm-4 item">
            <ul>
              <li>
                <a href="#reservations" class="link">Reservations</a>
              </li>  
              <li>
                <a href="#footer" class="link">Contact</a>
              </li>  
            </ul>
          </div>
        </div>  
      </div>
      <!-- <img src="images/misc/flag-right.png" class="flag-right img-responsive" width="500" /> -->
  </div> 
  <div class='clearfix'></div>

    <!--<?php 

    $defaults = array( 
        'theme_location'=> 'header-navigation', 
        'menu' => 'header-navigation', 
        'container' => false, 
        'container_class' => '', 
        'container_id' => '', 
        'menu_class' => 'nav navbar-nav navbar-right', 
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
    ?>  -->
</header>
