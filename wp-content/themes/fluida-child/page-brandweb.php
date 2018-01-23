<?php /* Template Name: Brandweb */ ?>
<?php
/**
 * The template for displaying the brandweb page.
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

		<div class="all-content">
      <div class="brandweb-header">
        <h1>Branding & Web Design</h1>
        <p>Are you ready to stand out with a fresh new look?<br>With my full branding & web design packages we will work together to create something truly unique! We will dig deep to find a look & style that truly reflects you and your business.<br>Take your business to new heights with a captivating brand style, including graphics, logos, and icons. Then top it all of with a sleek new website designed to intrigue your visitors and capture leads.</p>
        <p>It doesn't have to stop at design!<br>I'll craft & code your website by hand.</p>
      </div><!--brandweb-header-->

      <div class="brandweb-content">

        <div class="brandweb-box1">
          <h1>Brand Excellence</h1>
          <p></p>
          <p>timeline</p>
          <p>price</p>

          <div class="brandweb-button">
              <a href="">
            <button class="btn brandweb">TELL ME MORE</button></a>
          </div><!--brandweb-button-->
        </div><!--brandweb-box1-->


        <div class="brandweb-box2">
          <h1>Blue Rose</h1>
          <p>blurb blurb blurb</p>
          <p>price</p>

          <div class="brandweb-button">
              <a href="">
            <button class="btn brandweb">TELL ME MORE</button></a>
          </div><!--brandweb-button-->
        </div><!--brandweb-box2-->


        <div class="brandweb-box3">
          <h1>Gold Rose</h1>
          <p>blurb blurb blurb</p>
          <p>price</p>

          <div class="brandweb-button">
              <a href="">
            <button class="btn brandweb">TELL ME MORE</button></a>
          </div><!--brandweb-button-->
        </div><!--brandweb-box3-->


      </div><!--bandweb-content-->














    </div><!--all-content-->
      <?php cryout_after_content_hook(); ?>
    </main><!-- #main -->
    <?php fluida_get_sidebar(); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
