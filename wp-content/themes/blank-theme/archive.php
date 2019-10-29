<?php

/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>

<?php
  $banner_img = (has_post_thumbnail()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/";
  $banner_pattern = get_template_directory_uri() . "/images/white-triangle.png";
?>


<section id="inner-banner" style="background-image: linear-gradient(#000000, transparent), url(<?php echo $banner_img ?>)">
  <div class="container">
    <?php echo the_archive_title('<h1>', '</h1>'); ?>
  </div>
</section>

<section id="banner-pattern" style="background-image: url(<?php echo $banner_pattern ?>)">
</section>

<div class="container">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
      <div class="product">
        <?php if (has_post_thumbnail()) { ?>
          <a title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?>
          </<a>
        <?php } ?>
  
        <a title="<?php the_title_attribute(); ?>">
          <?php the_title("<h4>", "</h4>"); ?>
        </a>
      </div>
    <?php endwhile; ?>

    <?php if (function_exists('wp_bootstrap_pagination')) wp_bootstrap_pagination(); ?>

  <?php else : ?>

    <h2>Nothing Found</h2>

  <?php endif; ?>

</div>

<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>