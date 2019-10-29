<?php

/**
 * Template Name: Contact Form Page
 *
 * The template for displaying Contact Form includes Google Map.
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>

<?php
  $banner_img = (has_post_thumbnail()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/";
  $banner_pattern = get_template_directory_uri() . "/images/white-triangle.png";
  $taco_violet_button = get_field("taco_violet_button");
  $map = get_template_directory_uri()."/images/map.png";
?>

<section id="inner-banner" style="background-image: linear-gradient(#000000, transparent), url(<?php echo $banner_img ?>)">
  <div class="container">
    <?php the_title('<h1>', '</h1>'); ?>
  </div>
</section>
<section id="banner-pattern" style="background-image: url(<?php echo $banner_pattern ?>)">
</section>
<main class="container contact">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article class="post" id="post-<?php the_ID(); ?>">
    <div class="row">
      <div class="contact-form col-sm-6">
        <!-- <?php the_content(); ?> -->
        <form method="post" action="">
          <h1 class="inner-page-title" style="color: #EB332C; text-align: center">Send us a message</h1>
          
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name.." autocomplete="off" required="">

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off" required="">

          <label for="email">Message</label>
          <textarea placeholder="Enter your message" autocomplete="off" required=""></textarea>  
        </form>
        <div class="btn-container">
          <input type="button" name="button" value="Send" class="taco-button" style="background-image: url(<?php echo $taco_violet_button ?>)" />
        </div>
      </div>
      <div class="contact-info col-sm-6">
        <h1 class="inner-page-title" style="color: #EB332C; text-align: center">Visit Us</h1>
        <img src="<?php echo $map ?>" class="map" />
      </div>
    </div>

    </article>

  <?php endwhile;
  endif; ?>

</main>

<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>