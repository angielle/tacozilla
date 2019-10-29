<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header();

?>

<?php
  $banner = get_field('banner');
  $banner_text = get_field('banner_text');
  $taco_orange_button = get_field('taco_orange_button');
  $tagline = get_field('tagline');
  $about = get_field('about');
  $about_plate_left = get_field('about_plate_left');
  $about_plate_right = get_field('about_plate_right');
  $about_decor = get_field('about_decor');
  $desc = get_field('description');
  $taco_violet_outline_button = get_field('taco_violet_outline_button');
  $maracas_top = get_field('maracas_top');
  $maracas_bottom = get_field('maracas_bottom');
  $chicken_taco = get_field('chicken_taco');
  $quesadilla = get_field('quesadilla');
  $chicken_taco_decor = get_field('chicken_taco_decor');
  $quesadilla_decor = get_field('quesadilla_decor');
  $taco_violet_button = get_field('taco_violet_button');
  $nachos = get_field('nachos');
  $taco_white_outline_button = get_field('taco_white_outline_button');
  $banner_pattern = get_field('banner_pattern');
?>

<section id="banner" style="background: linear-gradient(#000000, transparent), url(<?php echo $banner ?>)">
  <div class="container">
    <div class="banner-container">
      <img src="<?php echo $banner_text ?>" style="width: 1100px" />
      <h5 class="subheading text-center"><?php echo $tagline ?></h5>
      <input type="button" name="button" value="Menu" class="taco-button" style="background-image: url(<?php echo $taco_orange_button ?>)" />
    </div>
  </div>
</section>
<div class='clearfix'></div>

<section id="banner-pattern" style="background-image: url(<?php echo $banner_pattern ?>)">
</section>

<section id="about" style="background-image: url(<?php echo $about_plate_left ?>), url(http://localhost/tacozilla/wp-content/uploads/2019/10/flag-about-2.png), url(<?php echo $about_plate_right ?>), url(<?php echo $about_decor ?>);">
  <div class="container">
    <div class="about-container">
      <h1 class="section-title" style="color: #EB332C; text-align: left"><?php echo $about ?></h1>
      <!-- <img src="svg/zigzag.svg" class='hdstyle' style="width: 120px" /> -->
      <p><?php echo $desc ?></p>
      <input type="button" name="button" value="Menu" class="taco-button" style="background-image: url(<?php echo $taco_violet_outline_button['url'] ?>)" />
    </div>
  </div>
</section>

<section id="featured" style="background-image: url(<?php echo $maracas_top ?>), url(<?php echo $maracas_bottom ?>);">
  <div class="featured-container">
    <h1 class="section-title" style="color: #EB332C; text-align: center">Featured</h1>
    <div class="grid-container">
      <div class="grid">
        <div class="chicken-taco" style="positon: relative;">
          <div class="chicken-taco-desc" style="background-image: url(<?php echo $chicken_taco_decor ?>)">
            <div>
              <h5 class="food-title-label" style="color: #AD0410" >Our Bestseller</h5>
              <h3 class="food-title" style="color: #AD0410">Chicken Taco</h5>
                <p class="body">Our simple yet flavorful chicken tacos are perfect for dinner nights. These chicken thighs are marinated and grilled to perfection and served with corn tortillas.</p>
            </div>
            <input type="button" name="button" value="Menu" class="taco-button" style="background-image: url(<?php echo $taco_violet_button ?>)" onclick="location.href=<?php echo get_site_url('', '/menu/'); ?>" />
          </div>
          <a class="chicken-taco-img" href="<?php echo get_site_url('', '/menu/'); ?>">
            <div class="featured-image" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <div class="fake-image" style="background-image: url(<?php echo $chicken_taco ?>)"></div>
            </div>
            <div class="overlay">
              <p>View other bestsellers</p>
            </div>
          </a>
        </div>
        <div class="quesadilla">
          <a class="quesadilla-img" href="<?php echo get_site_url('', '/menu/'); ?>">
            <div class="featured-image" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <div class="fake-image" style="background-image: url(<?php echo $quesadilla ?>)"></div>
            </div>
            <div class="overlay">
              <p>View other new additions</p>
            </div>
          </a>
          <div class="quesadilla-desc" style="background-image: url(<?php echo $quesadilla_decor ?>">
            <h5 class="food-title-label" style="color: #EBAC39">Newest Addition</h5>
            <h3 class="food-title" style="color: #EBAC39">Quesadilla</h5>
              <p class="body">Take a delight with our quesadilla with gooey melted cheese and a flavorful fajita style chicken and pepper filling. Our quesadilla is the perfect appetizer for every meal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="reservations" style="background: linear-gradient(rgba(20,20,20, 0.8),rgba(20,20,20, 0.8)), url(<?php echo $nachos ?>);">
  <div class="container">
    <div class="reservations-container">
      <h2>Reservations</h2>
      <p>Save time and save money! We accept reservations beforehand to save you time from waiting.</p>
      <input type="button" name="button" value="Reserve" class="taco-button" style="background-image: url(<?php echo $taco_white_outline_button ?>)" />
      <!-- <div class="taco-button">
        <img src="svg/taco-white.svg" alt="accent" style="width: 130px"/>
        <h7>INQUIRE</h7>
      </div> -->
    </div>
  </div>
</section>
<div class="clearfix"></div>

<?php get_footer(); ?>