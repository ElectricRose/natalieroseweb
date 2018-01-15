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
		<div class="front-rainbow">
		<div class="front-work-section">
      <h3>Do you need a website?</h3>
      <p><span id="problems">Are you a small business or individual with a product, service, or idea to share?<br><br>
			Are you looking for something elegant, dynamic, and easy to use?<br><br>
			Are you struggling to create a website and stay within your budget?</p></span><br>
			<p><span id="front-solutions">I have solutions!</span></p>
			<p><span id="i-build">I build websites for small businesses, blogs, and start-ups.</span></p><br>
			<p><strong>You work hard, and you need your website to work hard for you!</strong></p>
			<p>Your business is as unique as you are. </p>
			<p>I work closely with my clients to create a truly one-of-a-kind website tailored to you and your business.</p>
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
</div>

  <div class="front-about">
      <div class="front-about-text">
        <h3>Reach a wider audience online with a custom website.</h3>
          <p>If you need a website that is powerful, easy to use, and fully responsive that won't break the bank consider Natalie Rose for your web design & development needs.<br>
					Designing and building websites is my passion.
					I craft custom websites from scratch so you can focus on what you do best. Grow your business online with a custom website and experience the unlimited possibilities the online business world has to offer. Stand out in your local community or reach potential customers from all over the world. From Ecommerce to brick and mortar businesses, I've got web solutions for you!<p>
			</div>
			<div id="front-about-img">
	      <img src="http://natalierose.net/wp-content/uploads/2018/01/profile-circle3.png">
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
