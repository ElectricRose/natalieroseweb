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
			<h1>Welcome!</h1>
			<h4>I'm Natalie Rose, your web solution specialist.</h4>
					</div>
				</div>


				<div class="js-pic-holder">
				<div class="port-js">
					<h2> What can I help you with today?</h2>
					<h3>I do
							<span
							class="txt-rotate"
							data-period="2000"
							data-rotate='[ "web & graphic design!", "web development!", "custom WordPress themes!", "responsive design transitions!", "E-Commerce solutions!", "site transfers!", "website maintenance!" ]'></span>
					</h3>

				<script type="text/javascript">

										var TxtRotate = function(el, toRotate, period) {
				  this.toRotate = toRotate;
				  this.el = el;
				  this.loopNum = 0;
				  this.period = parseInt(period, 10) || 2000;
				  this.txt = '';
				  this.tick();
				  this.isDeleting = false;
				};

				TxtRotate.prototype.tick = function() {
				  var i = this.loopNum % this.toRotate.length;
				  var fullTxt = this.toRotate[i];

				  if (this.isDeleting) {
				    this.txt = fullTxt.substring(0, this.txt.length - 1);
				  } else {
				    this.txt = fullTxt.substring(0, this.txt.length + 1);
				  }

				  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

				  var that = this;
				  var delta = 300 - Math.random() * 100;

				  if (this.isDeleting) { delta /= 2; }

				  if (!this.isDeleting && this.txt === fullTxt) {
				    delta = this.period;
				    this.isDeleting = true;
				  } else if (this.isDeleting && this.txt === '') {
				    this.isDeleting = false;
				    this.loopNum++;
				    delta = 500;
				  }

				  setTimeout(function() {
				    that.tick();
				  }, delta);
				};

				window.onload = function() {
				  var elements = document.getElementsByClassName('txt-rotate');
				  for (var i=0; i<elements.length; i++) {
				    var toRotate = elements[i].getAttribute('data-rotate');
				    var period = elements[i].getAttribute('data-period');
				    if (toRotate) {
				      new TxtRotate(elements[i], JSON.parse(toRotate), period);
				    }
				  }
				  // INJECT CSS
				  var css = document.createElement("style");
				  css.type = "text/css";
				  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
				  document.body.appendChild(css);
				};
				</script>
				</div>
				<div class="port-pic">
<<<<<<< HEAD
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/natrose-green2300.png">
=======
					<img src="/wp-content/uploads/2017/12/natrose-green2300.png">
>>>>>>> projects
				</div>
			</div>

				<div class="desc-hire-holder">
			<div class="port-desc">
					<h5>I offer individually tailored services for your web development needs.</h5>
					<p>If you are a small business or an individual with products, services, ideas, or inspiration to share there is no better way to reach people around the world than with a website or blog.</p>
					<p>I specialize in crafting websites for an affordable price. I work with HTML5, CSS3, PHP, WordPress, and a touch of JavaScript & JQuery to create unique custom websites. </p>
			</div>
			<div class="hire-me">
				<h4>Want to hire me?</h4>
				<p>Have some questions?<br> I'd be happy to answer them for you!</p>
				<p>If you are a business owner, individual, or company looking to hire please contact me here!<p>
				<div class="workBox">
					<a href="http://natalierose.net/contact/">
						Contact Me!
						<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
							<rect x='0' y='0' fill='none' width='130' height='65'/>
						</svg></a>
				</div>
			</div>
		</div>


			<div class="do-list">
					<h4>What I Do</h4>

					<div id="dobox1">
						<div id="docon1">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/dropper230.png" alt="design icon">
=======
							<img src="/wp-content/uploads/2017/12/dropper230.png" alt="design icon">
>>>>>>> projects
						</div>
						<div id="dotext1">
							<p><strong>Web & Graphic Design</strong></p>
								<p>I design elegant & stylish websites with a modern edge. I can design your entire website from start to finish. I also do graphic design, and can design your printed materials, such as posters, brochures, and business cards.</p>
						</div>
					</div>

					<div id="dobox2">
						<div id="dotext2">
							<p><strong>Web Development</strong></p>
								<p>I craft, code, and customize unique websites for small businesses, individuals, and start-ups. I can code everything up from scratch, or work on your existing website easily.</p>
						</div>
						<div id="docon2">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/051-laptop230.png" alt="development icon">
=======
							<img src="/wp-content/uploads/2017/12/051-laptop230.png" alt="development icon">
>>>>>>> projects
						</div>
					</div>

					<div id="dobox3">
						<div id="docon3">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/051-crown230.png" alt="crown icon">
=======
							<img src="/wp-content/uploads/2017/12/051-crown230.png" alt="crown icon">
>>>>>>> projects
						</div>
						<div id="dotext3">
							<p><strong>Custom WordPress Themes</strong></p>
								<p>I can build you a completely new theme from scratch or customize an existing WordPress theme, depending on your needs and budget.</p>
						</div>
					</div>

					<div id="dobox4">
						<div id="dotext4">
							<p><strong>Responsive Design Transitions</strong></p>
								<p>If your website is static or functions poorly on mobile devices, I can give it a thorough responsive overhaul to keep it current and competitive.</p>
						</div>
						<div id="docon4">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/051-responsive230.png" alt="responsive icon">
=======
							<img src="/wp-content/uploads/2017/12/051-responsive230.png" alt="responsive icon">
>>>>>>> projects
						</div>
					</div>

					<div id="dobox5">
						<div id="docon5">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/032-online-shop230.png" alt="ecommerce icon">
=======
							<img src="/wp-content/uploads/2017/12/032-online-shop230.png" alt="ecommerce icon">
>>>>>>> projects
						</div>
						<div id="dotext5">
							<p><strong>E-Commerce Solutions</strong></p>
								<p>If you have products to sell there's no better way to reach a large audience than online. Setting up an E-Commerce website doesn't have to be daunting or unaffordable. I can install, add products, test, and set up your shipping and payment options for you so you can get those products in front of and out to the people who need them.</p>
						</div>
					</div>

					<div id="dobox6">
						<div id="dotext6">
							<p><strong>Site Transfers</strong></p>
								<p>Transfering a current website and migrating content to another hosting platform can be time-consuming and complicated. I am here when you need website transfer help, and will take care of the entire process. </p>
						</div>
						<div id="docon6">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/051-networking230.png" alt="transfer icon">
=======
							<img src="/wp-content/uploads/2017/12/051-networking230.png" alt="transfer icon">
>>>>>>> projects
						</div>
					</div>

					<div id="dobox7">
						<div id="docon7">
<<<<<<< HEAD
							<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/11/051-browser-230.png" alt="bug fix icon">
=======
							<img src="/wp-content/uploads/2017/12/051-browser-230.png" alt="bug fix icon">
>>>>>>> projects
						</div>
						<div id="dotext7">
							<p><strong>Website Maintenance</strong></p>
								<p>I offer optional monthly or quarterly maintenance packages to my customers. With my website maintenance packages, you will never have to worry that your website will be out of date or stop working because of changing technologies. If you have any issues or problems with your website I am only a phone call or email away, and will be there with technical support promptly.</p>
						</div>
					</div>
				</div><!--do list -->


					<div class="specialties">
						<div id="special-title">
							<h4>Specialty Services</h4>
						</div>

						<div class="special-all">
							<div id="special1">
								<h5>Responsive Design Transitions</h5>
									<p>Most websites these days are responsive and for good reason. As more people switch to using mobile devices such as cell phones and tablets to make their online purchases, it’s more important than ever to have an excellent mobile-friendly website. Nothing loses potential customers faster than a poorly designed website that glitches or is hard to read on a mobile device. If your website is static or needs responsive design updating I can give it a thorough responsive overhaul to keep it current and competitive.<p>
								</div>

								<div id="special2">
									<h5>Site Transfers</h5>
										<p>Many small businesses and individuals such as bloggers initially start out with a cheap, pre-made website such as Blogger, Weebly, Wix, etc. Often they quickly outgrow these websites and get tired of their built-in limitations. When a customer wishes to switch to a more flexible, custom, and better-designed platform such as WordPress.org I’m here to offer site transfer services. The transfer of domain names, hosting platforms, and migration of content can take a few weeks and can be incredibly complicated for inexperienced users. I am here when a customer needs website transfer help, and will take care of the entire process easily and affordably. </p>
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
