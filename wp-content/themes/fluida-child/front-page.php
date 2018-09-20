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

	<div class="optin-section">
			<div class="optin-text">
				<p><span id="opt-secondline">Does your website have you feeling a little..   lost?<p>
				<span id="opt-thirdline">Let me point you in the right direction!</p></span>
					<div class="compass">
						<img src="http://natalierose.net/wp-content/uploads/2018/05/compass1.png" alt="compass">
					</div>
			<div class="signup-box">
				<a href="http://natalierose.net/sign-up/">
			<button id="signup-btn">GRAB THE FREE GUIDE!</button></a>
		</div><!--signup-box-->
	</div><!--optin-text-->
	</div><!--optin-section-->

  <div class="front-work">

		<div class="front-gold-hold">
		<div class="front-gold">
		<div class="front-work-section">
      <h3>Your journey starts here.</h3>
      <p><strong>Because it’s hard to go it alone out there in the wilderness of online business,<br> I’m here to help!</strong><br><br><strong>I’m Natalie Rose, Designer of Success.</strong><br> Through custom-built websites we will show your customers that YOU are the one they are looking for.<br> Publish a custom, high-end website and begin building that foundation of trust that all businesses MUST have to succeed. <br><br><strong>Business is an adventure, and adventures are more fun with a friend who can help you carry the load.</strong><br>Let me help you create your success story so that your adventures can continue for a lifetime!
			<br><br><strong>Lace ‘em up and let's get on the trail!</strong></p>
			<div id="work-more">
				<div class="frontworkBox">
					<a href="http://natalierose.net/design-and-development/">Learn More
						<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
							<rect x='0' y='0' fill='none' width='130' height='65'/>
						</svg></a>
				</div><!--frontworkBox-->
			</div><!--work-more-->
		</div><!--front-work-section-->
	</div><!--front-gold-->
</div><!--front-gold-hold-->

		<div class="front-boots">
			<img src="http://natalierose.net/wp-content/uploads/2018/05/boots2.png" alt="man lacing up hiking boots">
		</div><!--front-boots-->
  </div>
</div>

  <div class="front-about1">
		<div class="front-about-inner">
      <div class="front-about-text">
        <h3>Hello, I'm Natalie Rose.</h3>
          <p><strong>A great website should do a lot of the work for you!</strong></p><p>I design and build solid brands & engaging websites for small businesses and entrepreneurs. If you need a polished and professional website, cleverly designed to attract more customers or clients, I'm your girl!</p><br>

					<p><strong>As a business owner you have a lot on your plate.</strong><br> I see you hustlin' over there!<br><br><strong>Don't let a bad website bring you down and waste your time and efforts.</strong><br> Your website should be built with both grit and grace, reflect who you are, and help you crush your goals.<br>
					Let me help you lighten the load with customized web solutions individually tailored to your unique business and needs.
					<br>Whether you're a startup with a shoestring budget, or a master of the game ready for an upgrade, I'll build something special just for you!</p>

					<div id="about-more">
						<div class="aboutBox">
							<a href="http://natalierose.net/about/"> About Me
								<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
									<rect x='0' y='0' fill='none' width='130' height='65'/>
								</svg></a>
						</div>
        </div><!--about-more-->
			</div>
			<div class="front-nat1">
				<img src="http://natalierose.net/wp-content/uploads/2018/05/natalie_rose2.jpg" alt="natalie rose web design">
			</div>

			</div><!--front-about-inner-->
  	</div><!--front-about1-->

		<div class="front-testimonials">
			<div class="front-test-goldhold">
				<div class="front-test-box">
			<h1>What others are saying</h1>
				<div class="testi-block">
				<?php echo do_shortcode('[sp_testimonial id="137"]'); ?>
			</div><!--testi-block-->
		</div><!--front-test-goldhold-->
	</div><!--front-test-box-->
		</div><!--front-testimonials-->

	<div class="front-contact">
		<h4>Are you ready for something better?</h4>
		<h5>Let's chat about your business.</h5>
		<p>I'm available:<br>
			Mon - Fri<br>
			9am - 5pm<br>
			Weekends and holidays I'll be in the woods!<br>
			</p>
		<div id="work-with-me">
			<div class="basicBox">
				<a href="http://natalierose.net/schedule-a-call/">
					Let's Chat!
				  <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
				    <rect x='0' y='0' fill='none' width='130' height='65'/>
				  </svg></a>
			</div>
	</div><!--work-with-me-->

	<div class="icons center-block">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<a href="https://www.facebook.com/Natalie-Rose-191345558020334/" target="_blank" class="fa fa-facebook fa-2x"></a>
		<a href="https://twitter.com/ElectricRose4" target="_blank" class="fa fa-twitter fa-2x"></a>
		<a href="https://www.instagram.com/electric._.rose/?hl=en" target="_blank"  class="fa fa-instagram fa-2x"></a>
		<a href="https://www.linkedin.com/in/natalie-rose-b43632143/" target="_blank"  class="fa fa-linkedin fa-2x"></a>
		<a href="https://github.com/ElectricRose" target="_blank" class="fa fa-github fa-2x"></a>
	</div>

</div><!--front-contact-->
	</main><!-- #main -->
	<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
</div><!-- #container -->

<?php get_footer(); ?>
