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
      <h3>Future growth by design</h3>
      <p><span id="blue">Let me guess, you are here because you need some help to grow your business.</span><br><span id="green-bold">You have the passion and the skills.<br> You have the drive and the ambition.<br> You have amazing gifts that you want to share with the people who need them.<br> But what you lack is the steady stream of customers begging for your help.</span><br>Am I right?<br> Maybe you have tried on your own for a while now, or maybe you are just getting started. You are overwhelmed and frustrated and your website or lack-there-of isn’t working for you.<br> You need a change, something different, and just building a website isn’t going to solve all of your problems.<br><span id="green-bold"> Sure you can throw your money at the problem, and hope it works out.<br> Or you can invest in someone who wants to see you succeed.</span><br><span id="blue">You need a plan, an amazing website, and a brand that captures your customer’s imagination.</span><br> You need someone who can see who you are and what you have to offer the world. Someone who can unearth the essence of your business and deliver it in a meaningful and captivating way.
			<br><span id="green-bold">You need Natalie Rose.</span>
			<br>When you are ready to dig deep and invest in yourself to grow your business I’m here to help.<br>
			I can help you by designing and providing you with a signature style and cohesive brand that speaks to the true essence of your business. We can work together to develop a strategy to promote your business and capture leads through branded graphics and advertising. And I can build you a website that functions flawlessly and helps to turn those leads into paying customers.<br><span id="green-bold"> The future is yours. Are you ready to grab it?</span></p>
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
        <h3>Reach a wider audience online</h3>
          <p>I build solid brands & craft engaging websites.<br>I design & develop for the freedom seekers, the holistic healers, health & wellness providers, and the creative entrepreneurs. I also love to work with businesses and organizations focused on nature, outdoor adventure, and eco-tourism.<br>If you want to grow your business online and attract more customers, I can help you to stand out in your local community or reach potential customers from all over the world. From Ecommerce to brick and mortar businesses, I've got web solutions for you! You don't have to struggle alone, I'm here to take this journey with you.<p>
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
		<h5>Interested? Want to know more?</h5>
		<p>I'm available:<br>
			Mon - Fri<br>
			9am - 5pm<br>
			Weekends and holidays I'll be in the woods!<br>
			</p>
		<div id="work-with-me">
			<div class="basicBox">
				<a href="http://natalierose.net/contact/">
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
