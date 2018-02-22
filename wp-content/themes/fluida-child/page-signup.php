<?php /* Template Name: Signup */ ?>
<?php
/**
 * The template for displaying the signup page.
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

				<div class="signup-content">

						<div class="signup-header">
						 <img src="http://natalierose.net/wp-content/uploads/2018/02/header4.png">
					 </div>

					 <div class="signup-text">
						 <h1>Is your website working for you?</h1>
						 <h2>Are you struggling to grow your business?</h2>
						 <p>If your website is failing to attract the right customers and make you money, something might be seriously wrong.<br> Make sure your website is tweaked to perfection for the best chance of success!</p>
						 <p>Download this FREE website guide and learn the tricks to make your website work for you!<br> I've included a tonne of useful information that you can put into action right away.</p>
						 <p><span id="onlyVIP">This exclusive offer is only available to my VIP members.</span></p>
						 <p><span id="signup-now">Sign up to become a VIP member now!</span><br> In addition to this must-have guide, as a member you will be eligible for exclusive discounts only available to my VIPs, as well as be among the first to know about limited offers and deals.</p>
					 </div>

					<div class="signup-form">
					 <!-- Begin MailChimp Signup Form -->
					 <div id="mc_embed_signup">
					 <form action="https://natalierose.us15.list-manage.com/subscribe/post?u=68a463293d4bcdc94fbadb219&amp;id=cb7778fe44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					     <div id="mc_embed_signup_scroll">
								 <h2>Become a VIP</h2>
					 <div class="mc-field-group">
					 	<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
					 </label>
					 	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
					 </div>
					 <div class="mc-field-group">
					 	<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
					 </label>
					 	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
					 </div>
					 <div class="mc-field-group">
					 	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					 </label>
					 	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					 </div>
					 <div class="mc-field-group input-group">
					     Email Format
					     <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">html</label></li>
					 <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label></li>
					 </ul>
					 </div>
					 	<div id="mce-responses" class="clear">
					 		<div class="response" id="mce-error-response" style="display:none"></div>
					 		<div class="response" id="mce-success-response" style="display:none"></div>
					 	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					     <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_68a463293d4bcdc94fbadb219_cb7778fe44" tabindex="-1" value=""></div>
					     <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					     </div>
					 </form>
					 </div>
					 <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					 <!--End mc_embed_signup-->
					</div>

				 </div><!--signup-content-->


		<div class="signup-thank-you">
			<p>A link to your download has been sent to your email address.<br>If you don't see it please be sure to check your spam or junk folders!</p>
		</div>

		<div class="prohelp">
			<div class="prohelp-gold">
			<div class="prohelp-inner">
			<h1>Dig Deeper!</h1>
			<p>If you want to maximise your website's potential and make sure that everything is working perfectly, let me take a deeper look!</p>
			<p>I'll dive into your website's inner workings to create a comprehensive report on your website's strengths and weaknesses.</p>
			<p>I'll look at the branding and design to see if your visuals are truly reflecting the look and feel your are trying to achieve.<br>I'll also look at the flow of your website, to make sure that visitors are easly directed to your products and services in an enticing and captivating rhythm.<br>I'll dig into the code and functionalities to make sure everything is running smoothly and point out any problems or bugs that could be slowing your site speed or creating issues for your viewers.<br>I'll run an SEO audit to make sure your site is ranked well and reaching your target audience.<br>Then I'll write up a full report for you, so you know exactly where to focus your energy and make improvements.</p>
			<p>Make sure your website is working to the best of it's ability and serving you and your customers well.</p>
			<p>Invest in a website review for only $145!</p>

			<div class="prohelp-box">
				<a href="http://natalierose.net/contact/">
			<button id="signup-btn">REVIEW MY SITE</button></a>

		</div><!--button-box-->
		</div><!--prohelp-inner-->
	</div><!--prohelp-gold-->
	</div><!--prohelp-->

				</div><!--all-content-->




			</div><!--signup-content-->
		</div><!--all-content-->
		<?php cryout_after_content_hook(); ?>
	</main><!-- #main -->
	<?php fluida_get_sidebar(); ?>
	</div><!-- #container -->
	<?php get_footer(); ?>
