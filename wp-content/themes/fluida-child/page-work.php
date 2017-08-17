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
						<h1>Hello! Welcome to Natalie Rose.</h1>
						<h4>I'm a freelance WordPress and front-end developer.<br>I enjoy building websites for blogs and small businesses.</h4>
					</div>
				</div>

			<div class="port-desc">
					<h5>I am experienced in responsive design and specialize in developing custom WordPress themes.</h5>
					<p>Websites are essential for small businesses these days, especially mobile responsive sites. If you are an individual with ideas and inspiration to share, there is no better way to reach people around the world than with your own website or blog.</p>
					<p>You want a website that is unique to you or your business, so you stand out from the crowd. You want a website that is user-friendly and easily conveys the information you need to share. But if you don’t know where to start, and you don’t want to go at it alone, I'm here to help!</p>
			</div>

				<div class="do-list">
					<p><strong>What I do..</strong></p>
						<ul>
							<li>Develop and customize websites for individuals and businesses.
							<li>Build custom WordPress themes or customize existing themes, depending on your needs and budget.</li>
							<li>Bring expertise in responsive design, so your site will look great on every device that accesses it.</li>
							<li>I convert designs to high-performance code whilst respecting your designer’s compositions.</li>
							<li>Handle site transfers to easily move your existing site to a new host and/or WordPress platform.</li>
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
							<h4>Specialties</h4>
						</div>

						<div class="special-all">
							<div id="special1">
								<h5>Front-End Development</h5>
									<p>HTML5, CSS3, Responsive design, and a little JavaScript & JQuery.</p>
									<p>I create responsive websites that allow the user to experience your website in the best and most appropriate way suited to the device they are using. I convert designs to high-performance code whilst respecting your designer’s compositions.<p>
								</div>

								<div id="special2">
									<h5>WordPress Development</h5>
										<p>Theme customization, admin & plugin setup, custom functionality.<p>
										<p>In many projects, clients require the ability to manage the content of their website. This is best done through WordPress and appropriate plugins. I can customize your existing WordPress theme with the unique features you desire, or help you to choose and move to a new theme to better suit your needs. I can also work with your designer to create an entirely new theme from scratch for a one-of-a-kind website tailored especially for you.</p>
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
