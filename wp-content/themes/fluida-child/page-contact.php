<?php /* Template Name: Contact */ ?>
<?php
/**
 * The template for displaying the contact page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Fluida
 */

get_header(); ?>

	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">

		<main id="main" role="main" class="main">
			<?php cryout_before_content_hook(); ?>

		<div class="con-content">
      <div class="contactform">
        <?php echo do_shortcode('[formidable id=3]'); ?>
      </div><!--contactform -->

      <div class="con-text1">
        <h3>I'm available to chat!</h3>
        <p>Mon - Fri<br>
          9am - 5pm</p>

      </div>


    </div><!--con-content -->

      <?php cryout_after_content_hook(); ?>
    </main><!-- #main -->
    <?php fluida_get_sidebar(); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
