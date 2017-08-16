<?php /* Template Name: Packages */ ?>
<?php
/**
 * The template for displaying the packages page.
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

	<div class="content">
		<div class="pack-content">
			<div class="pack-intro-container">
				<div class="pack-intro">
					<h2>I offer a variety of WordPress packages to choose from.</h2>
					<div id="p-intro-box">
						<p>I can build a site from scratch, customize an existing site, transfer your old content to a brand new site, or simply help you customize a WordPress theme you already love.</p>
						<p>Below you'll find the 3 most popular packages I offer.</p>
						<p>If you need help choosing what’s right for you, or if you want to discuss adding on other custom extras, please reach out for a free 30-minute phone or video consultation. I’d love to talk through your project with you!</p>
					</div>
				</div>
			</div>

				<div class="canadian-container">
						<div class="canadian">
							<img src="/wp-content/uploads/2017/06/canadaflag.jpg" alt="Canadian Flag">
						</div>
					<div id="can-txt">
						<h4>All prices are in Canadian Dollars!</h4>
					</div>
						<div class="canadian2">
							<img src="/wp-content/uploads/2017/06/canadaflag.jpg" alt="Canadian Flag">
						</div>
					</div>

				<div class="pack-intro2">
					<p>Not Canadian? No worries! I work internationally as well!</p>
					<a href="http://www.xe.com/currencyconverter/" target="_blank">Check out the current exchange rates here!</a>
				</div>

				<div class="pack-container">
					<div class="red-rose">
						<h1>Red Rose</h1>
						<p>A Red Rose Package is perfect for small businesses and bloggers who want to upgrade an existing site or build a simple site based on a theme you already love.</p>
						<h4>What You Get:</h4>
							<ul>
								<li>Customized new WordPress theme or customized existing WordPress site</li>
								<li>Installation of chosen WordPress theme</li>
								<li>Entry for up to 5 pages</li>
								<li>Light branding, including custom header and social media icons</li>
								<li>Email integrated contact form</li>
								<li>Fully responsive website, that looks great on all devices</li>
							</ul>
						<h3>$785</h3>

					</div>
					<div class="blue-rose">
						<h1>Blue Rose</h1>
						<p>A Blue Rose Package is great for you if you have a medium sized website or a very specific site design in mind, and you want to take your site to the next level with your social media accounts.</p>
						<h4>What You Get:</h4>
							<ul>
								<li>Customized new WordPress theme or customized existing WordPress site</li>
								<li>Installation of chosen WordPress theme</li>
								<li>Entry for up to 7 pages</li>
								<li>Light branding, including custom header and social media icons</li>
								<li>Email integrated contact form</li>
								<li>Fully responsive website, that looks great on all devices</li>
								<li>Social media integration, including share & like buttons, social based comment systems, social logins & customized instagram feed.</li>
								<li>Basic SEO plugin integration and setup</li>
							</ul>
						<h3>$985</h3>
					</div>
					<div class="gold-rose">
						<h1>Gold Rose</h1>
						<p>A Gold Rose Package is for you if you are a business or individual looking to build a unique, custom site and have very specific designs in mind. If you are looking to integrate a shop on your site, this is the package you should choose.</p>
						<h4>What You Get:</h4>
							<ul>
								<li>Customized new WordPress theme or customized existing WordPress site</li>
								<li>Installation of chosen WordPress theme</li>
								<li>Entry for up to 10 pages</li>
								<li>Light branding, including custom header and social media icons</li>
								<li>Email integrated contact form</li>
								<li>Fully responsive website, that looks great on all devices</li>
								<li>Social media integration, including share & like buttons, social based comment systems, social logins & customized instagram feed.</li>
								<li>Basic SEO plugin integration and setup</li>
								<li>An eCommerce plugin
								<li>Entry of up to 3 products</li>
								<li>Payment processing, setup, & testing.</li>
							</ul>
						<h3>$2505</h3>
					</div>
				</div><!-- pack-container-->

			<div class="small-pack">
				<h2>Just need a simple & elegant one page website?</h2>
				<h4>Try my Mini Rose Package!</h4>
					<div class="mini-container">
						<h1>Mini Rose</h1>
						<h4>What You Get:</h4>
							<ul>
								<li>Customized new WordPress theme or customized existing WordPress site</li>
								<li>Installation of chosen WordPress theme</li>
								<li>Entry for 1 page</li>
								<li>Light branding, including custom header and social media icons</li>
								<li>Email integrated contact form</li>
								<li>Fully responsive website, that looks great on all devices</li>
							</ul>
						<h3>Only $300!</h3>
					</div>
				</div>

				<div class="pack-outtro">
					<h2>Don't see what you're looking for?</h2>
					<h5>I offer a large variety of options and additional services, such as:</h5>
						<ul>
							<li>Handling site migrations and domain changes</li>
							<li>Transforming and upgrading existing static websites into fully responsive designs</li>
							<li>Monthly or quarterly maintenance packages</li>
							<li>I also build HTML websites if you don't want WordPress!</li>
							<li>And more!..</li>
						</ul>
						<p>I can also create a custom package depending on your needs!<br>
							Just ask me!</p>
				</div>

				<div class="pack-contact">
					<h5>Please contact me with any inquiries, offers, or requests for more info!</h5>
					<div id="work-with-me">
						<p><div id="button">
							<a href="http://natalierose.net/contact/">
								<img src="/wp-content/uploads/2017/06/button.png" alt="contact me button" class="center"></a></p>
						</div>
				</div><!--work-with-me-->
			</div><!--pack-contact-->

			</div><!--pack-content -->
		</div><!-- all-content -->

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer();
