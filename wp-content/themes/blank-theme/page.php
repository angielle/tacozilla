<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php
    $banner_img = (has_post_thumbnail()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/images/";
    $banner_pattern = get_template_directory_uri() . "/images/white-triangle.png";
  ?>

  <section id="inner-banner" style="background-image: linear-gradient(#000000, transparent), url(<?php echo $banner_img ?>)">
    <div class="container">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </section>
  <section id="banner-pattern" style="background-image: url(<?php echo $banner_pattern ?>)">
  </section>
  <div class="container">
    <div class="row">
      <?php
        switch (get_post_meta($post->ID, 'sidebar_meta', true)) {
          case 'left_sidebar':
            $col = 'col-sm-9';
            ?>
          <div class="col-sm-3">
            <?php get_sidebar(); ?>
          </div>
        <?php
            break;

          case 'right_sidebar':
            $col = 'col-sm-9 col-sm-pull-3';
            ?>
          <div class="col-sm-3 col-sm-push-9">
            <?php get_sidebar(); ?>
          </div>
        <?php
            break;

          default:
            $col = 'col-sm-12';
            break;
        }

        ?>

        <main id="main" class="site-main <?php echo $col; ?> " role="main">

          <?php get_template_part('content', 'page'); ?>

          <div class="clearfix">&nbsp;</div>

        </main> <!-- #main -->

    </div>
  </div>

<?php endwhile; ?>

<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>