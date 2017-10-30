<?php /* Template Name: Work */ ?>
<?php
/**
 * The template for displaying the portfolio page.
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
			<div class="port-content">
				<div class="port-intro-box">
					<div class="port-intro">
						<h1>Hello and Welcome!</h1>
						<h4>I'm Natalie Rose, your web solution specialist.</h4>
					</div>
				</div>

			<div class="port-desc">
					<h5>I offer individually tailored services for your web development needs.</h5>
					<p>If you are a small business or an individual with products, services, ideas, or inspiration to share there is no better way to reach people around the world than with a website or blog. I specialize in crafting websites for an affordable price. I work with HTML5, CSS3, PHP, WordPress, and a touch of JavaScript & JQuery to create high-end custom websites. </p>
					<p>My services include front end & WordPress development, site transfers, responsive design transitions, E-commerce solutions, and website maintenance.</p>
			</div>

				<div class="do-list">
					<p><strong>What I do..</strong></p>
						<ul>
							<li><strong>Website development.</strong> I craft, code, and customize unique websites for small businesses, individuals, and start-ups.
							<li><strong>Custom WordPress themes.</strong> I can build you a completely new theme or customize existing WordPress themes, depending on your needs and budget.</li>
							<li><strong>Responsive design transitions.</strong> If your website is static or functions poorly on mobile devices, I can give it a thorough responsive overhaul to keep it current and competitive.</li>
							<li><strong>Site Transfers.</strong> Transfering a current website and migrating content to another hosting platform can be time consuming and complicated. I am here when you need website transfer help, and will take care of the entire process. </li>
							<li><strong>Website Maintenance.</strong> I offer monthly or quarterly maintenance packages to my customers. With my website maintenance packages, you will never have to worry that your website will be out of date or stop working because of changing technologies. If you have any issues or problems with your website I am only a phone call or email away, and will be there with technical support promptly.</li>
						</ul>
					</div>

					<div class="hire-me">
						<p>If you are an individual or business seeking a web presence or an employer looking to hire you can get in touch with me here.</p>
						<div class="workBox">
							<a href="http://natalierose.net/contact/">
								Contact Me!
								<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
									<rect x='0' y='0' fill='none' width='130' height='65'/>
								</svg></a>
						</div>
					</div>
				</div>


					<div class="specialties">
						<div id="special-title">
							<h4>Specialty Services</h4>
						</div>

						<div class="special-all">
							<div id="special1">
								<h5>Responsive Design Transitions</h5>
									<p>Most websites these days are responsive, and for good reason. As more people switch to using mobile devices such as cell phones and tablets to make their online purchases, it’s more important than ever to have an excellent mobile friendly website. Nothing loses potential customers faster than a poorly designed website that glitches or is hard to read on a mobile device. If your website is static or needs responsive design updating I can give it a thorough responsive overhaul to keep it current and competitive.<p>
								</div>

								<div id="special2">
									<h5>Site Transfers</h5>
										<p>Many small businesses and individuals such as bloggers initially start out with a cheap, pre-made website such as Blogger, Weebly, Wix, etc. Often they quickly outgrow these websites and get tired of their built-in limitations. When a customer wishes to switch to a more flexible, custom, and better designed platform, such as WordPress.org I’m here to offer site transfer services. The transfer of domain names, hosting platforms, and migration of content can take a few weeks and can be incredibly complicated for inexperienced users. I am here when a customer needs website transfer help, and will take care of the entire process easly and affordably. </p>
								</div>
							</div>
					</div>

						<div class="projects">
							<h4>Projects</h4>

							<div id="pro1">
								<a href="http://natalierose.net/accelerate-2/">
								<img src="http://natalierose.net/wp-content/uploads/2017/08/Accelerate.png" alt="Accelerate Project">
							</a>
							</div>

							<div id="pro2">
								<a href="http://natalierose.net/unplugged/">
								<img src="http://natalierose.net/wp-content/uploads/2017/08/Untitled-design.png" alt="Unplugged Project">
							</a>
						</div>

					<div class="outtro">
						<h3><strong>Interested in learning more?</strong></h3>
							<div class="container borderXwidth">
								<h4><a href="http://natalierose.net/packages/">Check out my packages and pricing options here!</a></h4>
							</div>
						</div>
					</div>
			</div>
		</div>

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer(); ?>
