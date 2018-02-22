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
		<div id="optin-pic">
			<img src="http://natalierose.net/wp-content/uploads/2018/02/improve-your-website2.png" alt="Improve your website, increase your profits.">
		</div>
			<div class="optin-text">
				<p><span id="opt-firstline">Improve your website<br>Increase your profits</span></p>
				<p><span id="opt-secondline">Is your website the best that it can be? Are you struggling to attract the right clients or customers?<br> Is your website slow, glitchy, or so far down in the search engine rankings no one finds it?</span></p>
				<p>Find out how you can improve your website's performance and see the results you need with my free website guide.</p>
			</div>
			<div class="signup-box">
				<a href="http://natalierose.net/sign-up/">
			<button id="signup-btn">GRAB THE GUIDE</button></a>
		</div><!--button-box-->
	</div><!--opting-section-->


  <div class="front-work">
		<div class="front-gold">
		<div class="front-work-section">
      <h3>You deserve more!</h3>
			<h4>More clients, more wealth, & more freedom to live the life you deserve.</h3>
      <p><span id="blue">You need your business to grow and thrive.</span><br><span id="green-bold">You have the passion and the skills.<br> You have the drive and the ambition.<br> You have amazing gifts that you want to share with the people who need them.<br>But what you lack is the steady stream of customers begging for your help.<br>Am I right?</span><br><br> Maybe you have tried on your own for a while now, or maybe you are just getting started. You are overwhelmed and frustrated and your website or lack-there-of isn’t working for you.<br> You need a change, something different, and just building a website isn’t going to solve all of your problems.<br><br><span id="green-bold"> Sure you can throw your money at the problem, and hope it works out.<br> Or you can invest in yourself and trust in someone who wants to see you succeed.</span><br><span id="blue">You need a game plan, an amazing website, and a brand that captures your customer’s imagination.</span>
				<br> You need someone who can see who you are and what you have to offer the world. Someone who can unearth the essence of your business and deliver it in a meaningful and captivating way.
			<br><span id="green-bold">You need Natalie Rose.</span><br>
			<br>Are you ready for something better?<br>
			<span id="green-bold">Let's build your empire together!</span></p>
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
        <h3>Hello, I'm Natalie Rose.</h3>
          <p>I'm a designer, developer, and creative entrepreneur.<br>I help build solid brands & craft beautiful and engaging websites for the soulful small business.<br>I help the heart and eco-centered entrepreneurs and the creative minds encourage wealth and grow their businesses through creative web solutions and memorable marketing strategies. <br>If you want to grow your business online and attract more customers, more wealth, and more prosperity you need a solid plan and the proper tools to work with. I can help you to stand out in your local community or reach potential customers from all over the world. From Ecommerce to tourism to brick and mortar businesses, I can help you take your business to the next level.<p>
			</div>
			<div id="front-about-img">
	      <img src="http://natalierose.net/wp-content/uploads/2018/02/peacock-circle-photo3-1.png" alt="Natalie Rose - Small business websites">
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
		<h5>Are you ready for something better?</h5>
		<h4>Let's chat about your business.</h4>
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
