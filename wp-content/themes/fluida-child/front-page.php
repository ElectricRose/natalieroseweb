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
      <h3>Welcome! My name is Natalie Rose.</h3>
      <p><strong>I'm a freelance WordPress and front-end developer.</strong><br>I build websites for blogs and small businesses.<br>
      I am experienced in responsive design and specialize in developing custom WordPress themes.<br>

      <p>Websites are essential for small businesses these days, especially mobile responsive sites.<br>
      If you are an individual with services, products, or inspiration to share, there is no better way to reach people around the world than with your own website or blog.</p>
			<p>Web development can be tricky if you don't know a lot of code.<br>
				If you are stuggling with WordPress themes and customizations, or you want a custom website tailored specifically to you, I'm here to help!<br>
			Running a business or blog takes a lot of time and dedication.</p>
			<p><strong>You work hard. You're busy. I get that!</strong></p>
			<p>Let me build or customize your website so you can get back to the work you love!</p>
        <div id="work-more">
					<p><a href="http://natalierose.net/work/">Learn more..</a></p>
        </div>
  </div>

  <div class="front-about">
    <div id="front-about-img">
      <img src="/wp-content/uploads/2017/06/natalierose-about-img2.png" alt="Photo of Natalie Rose">
    </div>
      <div id="front-about-text">
        <h3>I craft dynamic custom websites so you can turn your dreams into a profitable reality.</h3>
          <p>I'm a busy 30-something millenial, currently living on beautiful Vancouver Island, Canada. I love to create powerful, easy to use, and fully responsive websites that stand out among the crowd. I build websites from scratch and have experience editing and updating existing websites and dynamic web applications.
          <div id="about-more">
            <p><a href="http://natalierose.net/about/"> Learn more about me.. </a></p>
          </div>
        </div>
  	</div><!--front-about-->

	<div class="front-contact">
		<h5>Want to work with me?</h5>
		<div id="work-with-me">
			<p><div id="button">
				<a href="http://natalierose.net/contact/">
					<img src="/wp-content/uploads/2017/06/button.png" alt="contact me button" class="center"></a></p>
			</div>
	</div><!--work-with-me-->
</div><!--front-contact-->




	</main><!-- #main -->
	<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
</div><!-- #container -->

<?php get_footer(); ?>
