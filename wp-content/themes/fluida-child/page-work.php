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
			<h4>I'm Natalie Rose,<br> your web solution specialist.</h4>
					</div>
				</div>


		<div class="pic-js-box-border">
			<div class="pic-js-box">
				<div class="js-pic-holder">
						<img class="port-pic" src="http://natalierose.net/wp-content/uploads/2017/12/natrose-green2300.png">
					</div>

				<div class="port-js">
					<h2> What can I help you with today?</h2>
					<h3>I do
							<span
							class="txt-rotate"
							data-period="2000"
							data-rotate='[ "web & graphic design!", "branding & logo design!", "web development!", "custom WordPress themes!", "responsive design transitions!", "E-Commerce solutions!", "site transfers!", "website maintenance!" ]'></span>
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
			</div><!--pic-js-box-->
		</div><!--pic-js-box-border-->

				<div class="desc-hire-holder">
			<div class="port-desc">
					<h5>I tailor all of my services to suit your individual needs.</h5>
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
				<div class="inner-dolist">
					<h4>What I Do</h4>

					<div id="dobox1">
						<div id="docon1">
							<img src="/wp-content/uploads/2017/12/dropper230.png" alt="design icon">
						</div>
						<div id="dotext1">
							<p><strong>Web & Graphic Design</strong></p>
								<p>I design elegant & stylish websites with a modern edge. I can design your entire website from start to finish. Need a set of graphics for your social media ads? I can do that for you! I also do print media and can design your printed materials, such as posters, brochures, and business cards. Need a fresh new look on your website or an updated logo? I do branding and re-design work to keep your site sleek and on trend.</p>
						</div>
					</div>

					<div id="dobox2">
						<div id="dotext2">
							<p><strong>Web Development</strong></p>
								<p>I craft, code, and customize unique websites for all types of businesses. I can code everything up from scratch and build you a one-of-a-kind website from the ground up. Already have a website? I can fix bugs, update your info, or make quick functionality fixes. From completely new projects to small fixes on existing sites, I'm ready to dig in! No job is too big or small.</p>
						</div>
						<div id="docon2">
							<img src="/wp-content/uploads/2017/12/051-laptop230.png" alt="development icon">
						</div>
					</div>

					<div id="dobox3">
						<div id="docon3">
							<img src="/wp-content/uploads/2017/12/051-crown230.png" alt="crown icon">
						</div>
						<div id="dotext3">
							<p><strong>Custom WordPress Themes</strong></p>
								<p>Do you find the out-of-the-box WordPress themes boring and limiting? Want to add your own flair to make your website really stand out? I can build you a completely new theme from scratch or customize an existing WordPress theme that you love. With a custom WordPress child theme, the options are limitless. You will be in complete control of the content you add, while I handle the custom layout options to make your website truly unique.</p>
						</div>
					</div>

					<div id="dobox4">
						<div id="dotext4">
							<p><strong>Responsive Design Transitions</strong></p>
								<p>No one likes a website thats frustrating to use on a tablet or mobile, especially when your competitor's is easy to use. If your website is static or functions poorly on mobile devices, I can give it a thorough responsive overhaul to keep it current and competitive. Don't lose money over poor design! I have solutions!</p>
						</div>
						<div id="docon4">
							<img src="/wp-content/uploads/2017/12/051-responsive230.png" alt="responsive icon">
						</div>
					</div>

					<div id="dobox5">
						<div id="docon5">
							<img src="/wp-content/uploads/2017/12/032-online-shop230.png" alt="ecommerce icon">
						</div>
						<div id="dotext5">
							<p><strong>E-Commerce Solutions</strong></p>
								<p>If you have products to sell there's no better way to reach a large audience than online. Setting up an E-Commerce website doesn't have to be daunting or unaffordable. I can install, add products, test, and set up your shipping and payment options for you so you can get those products in front of and out to the people who need them. Reach a wider audience, sell more products & make more money. The investment is worth it and you will thank yourself in the future!</p>
						</div>
					</div>

					<div id="dobox6">
						<div id="dotext6">
							<p><strong>Site Transfers</strong></p>
								<p>Tired of your old platform? Need something better? Transfering a current website and migrating content to another hosting platform can be time-consuming and complicated. But there's no need to struggle on your own! I am here when you need website transfer help, and will take care of the entire process for you. </p>
						</div>
						<div id="docon6">
							<img src="/wp-content/uploads/2017/12/051-networking230.png" alt="transfer icon">
						</div>
					</div>

					<div id="dobox7">
						<div id="docon7">
							<img src="/wp-content/uploads/2017/12/051-browser-230.png" alt="bug fix icon">
						</div>
						<div id="dotext7">
							<p><strong>Website Maintenance</strong></p>
								<p>I offer optional monthly or quarterly maintenance packages to my customers. With my website maintenance packages you will never have to worry that your website will be out of date or stop working because of changing technologies. If you have any issues or problems with your website I am only a phone call or email away, and will be there with technical support promptly. If a website that I built or worked on crashes I will be there to fix it right away. I've got your back!</p>
						</div>
					</div>
				</div><!--inner-dolist-->
				</div><!--do list -->


					<div class="specialties">
						<div id="special-title">
							<h4>Specialty Services</h4>
						</div>

						<div class="special-all">

							<div id="special1">
								<h5>Promotional Graphics</h5>
									<p>Does your business have an upcoming sale, promotion or ad campaign? Don't want to spend countless hours designing graphics for all your social media, website & print ads? I offer custom graphic design packages for just those occasions! I'll create banner images for your website and social media accounts. I'll also design a series of promotional graphics that can easily be schedualed into your social media platforms of choice. Only want a couple of simple ads? No job is too small! Need a large series for many months worth of promotions? I can do that too! Ask me about my promotional graphic packages.</p>
								</div>

							<div id="special2">
								<h5>Responsive Design Transitions</h5>
									<p>Most websites these days are responsive and for good reason. As more people switch to using mobile devices such as cell phones and tablets to make their online purchases, it’s more important than ever to have an excellent mobile-friendly website. Nothing loses potential customers faster than a poorly designed website that glitches or is hard to read on a mobile device. If your website is static or needs responsive design updating I can give it a thorough responsive overhaul to keep it current and competitive.<p>
								</div>

								<div id="special3">
									<h5>Site Transfers</h5>
										<p>Many small businesses and individuals such as bloggers initially start out with a cheap, pre-made website such as Blogger, Weebly, Wix, etc. Often they quickly outgrow these websites and get tired of their built-in limitations. When a customer wishes to switch to a more flexible, custom, and better-designed platform such as WordPress.org I’m here to offer site transfer services. The transfer of domain names, hosting platforms, and migration of content can take a few weeks and can be incredibly complicated for inexperienced users. I am here when a customer needs website transfer help, and will take care of the entire process easily and affordably. </p>
								</div>
							</div><!--special-all-->
					</div><!--specialties-->

					<div class="popup">
					<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"68a463293d4bcdc94fbadb219","lid":"cb7778fe44"}) })</script>
				</div>

			</div><!--port-content-->
		</div><!--all-content-->
			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->
		<?php fluida_get_sidebar(); ?>
	</div><!-- #container -->
<?php get_footer(); ?>
