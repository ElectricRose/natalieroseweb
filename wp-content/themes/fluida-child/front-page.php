<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays the home page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * @package Fluida
 */
if ( is_page_template() ) {
	load_template( get_page_template() );
	return true;
}

get_header();

function fluida_lp_layoutclass () {
	$lp = cryout_get_option ('fluida_landingpage');
	if ( $lp ) {
		echo 'fluida-landing-page one-column';
	} else {
		echo fluida_get_layout_class();
	}
} // fluida_lp_layoutclass()
?>

<div id="container" class=" <?php fluida_lp_layoutclass() ?>">
	<main id="main" role="main" class="main">
	<?php
	cryout_before_content_hook();

	$fluida_landingpage = cryout_get_option ('fluida_landingpage');

	if ( $fluida_landingpage ) {
		fluida_lpslider();
		fluida_lpblocks();
		fluida_lptext('one');
		fluida_lpboxes(1);
		fluida_lptext('two');
		fluida_lpboxes(2);
		fluida_lptext('three');
		fluida_lpindex();
		fluida_lptext('four');
	} else {
		fluida_lpindex();
	}

    cryout_after_content_hook();
	?>

  <div class="front-work">
		<div class="front-work-section">
      <h3>Do you need a website?</h3>
      <p><span id="problems">Are you a small business or individual with a product, service, or idea to share?<br><br>
			Are you looking for something elegant, dynamic, and easy to use?<br><br>
			Are you struggling to create a website and stay within your budget?</p></span><br>
			<p><span id="front-solutions">I have solutions!</span></p>
			<p><span id="i-build">I build websites for small businesses, blogs, and start-ups.</span></p><br>
			<p><strong>You work hard, and you need your website to work hard for you!</strong></p>
			<p>Your business is as unique as you are. </p>
			<p>I work closely with my clients to create a truly one of a kind website tailored to your specific needs.</p>
        <div id="work-more">
					<div class="frontworkBox">
						<a href="http://natalierose.net/work/">Learn More
							<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
								<rect x='0' y='0' fill='none' width='130' height='65'/>
							</svg></a>
					</div>
        </div>
			</div>
  </div>

  <div class="front-about">
      <div class="front-about-text">
        <h3>I'm dedicated to supporting small businesses by helping them to reach a wider audience through an online presence.</h3>
          <p>I'm a busy 30-something millennial, currently living on beautiful Vancouver Island, Canada. I love to create powerful, easy to use, and fully responsive websites that stand out from the crowd. I build websites from scratch and have experience editing and updating existing websites and dynamic web applications.</p>
			</div>
			<div id="front-about-img">
	      <img src="/wp-content/uploads/2017/06/natalierose-about-img2.png" alt="Photo of Natalie Rose">
	    </div>
					<div id="about-more">
						<div class="aboutBox">
							<a href="http://natalierose.net/about/"> About Me
								<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
									<rect x='0' y='0' fill='none' width='130' height='65'/>
								</svg></a>
						</div>
        </div><!--about-more-->
  	</div><!--front-about-->

	<div class="front-contact">
		<h5>Want to work with me?</h5>
		<p>I'm available:<br>
			Mon - Fri<br>
			9am - 5pm<br>
			Weekends and holidays I'll be in the woods!<br>
			</p>
		<div id="work-with-me">
			<div class="basicBox">
				<a href="http://natalierose.net/contact/">
					Contact Me
				  <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
				    <rect x='0' y='0' fill='none' width='130' height='65'/>
				  </svg></a>
			</div>
	</div><!--work-with-me-->
</div><!--front-contact-->
	</main><!-- #main -->
	<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
</div><!-- #container -->

<?php get_footer(); ?>
