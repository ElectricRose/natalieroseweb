<?php /* Template Name: Socials */ ?>
<?php
/**
 * The template for displaying the socials page.
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

      <div class="social-header">
        <h1>Digital & Print Design</h1>
        <p>When you need to rock it online through your advertising campaigns and social media, you need a design that's true to your brand and turns heads. Make a lasting impression with printables such as business cards and postcards at your next networking event.</p>
        <p>Click below to book design services</p>
      </div>


      <div class="social-section">

        <div class="social-block1">
          <img src="">
          <h1>Social Media Ad</h1>
          <p>Promote your business or next sale or event with a custom branded ad for social media. Perfect for Facebook or Instagram!</p>
          <p>$45</p>

          <div class="social-book-button">
              <a href="">
            <button class="btn socials">BOOK NOW</button></a>
          </div><!--social-book-button-->
        </div>

        <div class="social-block2">
          <img src="">
          <h1>Social Media Package</h1>
          <p>Have a large sale or event coming up?<br>Grab a bundle of 6 social media ads for your next big promotion. I'll create completed ads with all of your info ready to go. Or you can get creative with a set of templates that are easy to transform and use multiple times.</p>
          <p>$145</p>

          <div class="social-book-button">
              <a href="">
            <button class="btn socials">BOOK NOW</button></a>
          </div><!--social-book-button-->
        </div>

        <div class="social-block3">
          <img src="">
          <h1>Facebook Cover</h1>
          <p>Grab a custom designed Facebook cover for your next business or group event. Stand out and grow your following!</p>
          <p>$45</p>

          <div class="social-book-button">
              <a href="">
            <button class="btn socials">BOOK NOW</button></a>
          </div><!--social-book-button-->
        </div>


        <div class="social-block4">
          <img src="">
          <h1>Business Card</h1>
          <p>Rock your next networking event with a custom designed business card. Make an impression with an awesome two sided design that pops!<br>Price does not include printing.</p>
          <p>$40</p>

          <div class="social-book-button">
              <a href="">
            <button class="btn socials">BOOK NOW</button></a>
          </div><!--social-book-button-->
        </div>

        <div class="social-block5">
          <img src="">
          <h1>Postcard</h1>
          <p>Getting married?<br>Hosting a party or big event?<br>Need promotional postcards for your products?<br>Wow your audience with beautiful double sided postcard designs!<br>Price does not include printing</p>
          <p>$65</p>

          <div class="social-book-button">
              <a href="">
            <button class="btn socials">BOOK NOW</button></a>
          </div><!--social-book-button-->
        </div>



      </div><!--social-section-->

      <div class="something-else">
        <h1>Need something else?</h1>
        <p><span id="orders">I do custom orders!<br>
        Let's have a chat!</span></p>
      </div>







    </div><!--all-content-->
      <?php cryout_after_content_hook(); ?>
    </main><!-- #main -->
    <?php fluida_get_sidebar(); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
