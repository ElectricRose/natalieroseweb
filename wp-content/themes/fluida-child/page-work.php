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
				<div class="port-intro">
			<img src="http://natalierose.net/wp-content/uploads/2018/02/build-something-better4.png" alt="welcome web design">
				</div>


		<div class="pic-js-box-border">
			<div class="pic-js-box">
				<div class="js-pic-holder">
						<img class="port-pic" src="http://natalierose.net/wp-content/uploads/2018/01/natalieRoseCircle1-450.png">
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
					<div class="desc-gold">
			<div class="port-desc">
				<h3>Is your website working for you?</h3>
				<p><span>If you want to maximise your website's potential and make sure that everything is working perfectly, let me take a deeper look.</span><br> From simple spelling and content errors to design & functionality issues, I'll help you discover what is and isn't working on your website. I'll dive into your website's inner workings to create a comprehensive report on your website's strengths and weaknesses with actionable steps you can take to improve it.<br>Make sure your website is working to the best of it's ability and serving you and your customers well.<br>Invest in solid solutions for $195 for up to 6 pages.</p>

				<div class="brandweb-button">
					<a href="http://natalierose.net/contact/">
				<button class="btn-webwoe">REQUEST A REVIEW!</button></a>
			</div><!--button-box-->

			</div><!--port-desc-->
		</div><!--desc-gold-->
		</div><!--desc-hire-holder-->

		<div class="work-container">
			<div class="work-text1">
				<h4>Do you run a shop, eatery, or studio?</h4>
				<p><span id="hours">Are your hours of operation, location, and contact info easy to find?</span></p>
				<p>If not you are loseing customers!</p>
				<p>If you run a business with a physical location this important information is essential. If your customers can't find your address or hours of operation easily, typically from a mobile device, they will often move on and look elsewhere. This common and frustrating error can cost you a lot of business. Don't miss out on opportunities because of simple website mistakes or design flaws.</p>
				<p>I can make quick and easy changes to your website for a small fee. Contact me to request a free quote. <br>No job is too small!</p>
				<div class="workBox">
					<a href="http://natalierose.net/schedule-a-call/">
						Let's Chat!
						<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
							<rect x='0' y='0' fill='none' width='130' height='65'/>
						</svg></a>
				</div><!--workBox-->

			</div><!--work-text1-->

				<div class="shop-pic">
					<img src="http://natalierose.net/wp-content/uploads/2018/02/shop-700.jpg" alt="shop front">
				</div>
		</div><!--work-container-->


		<div class="brandweb-work-all">
			<div class="brandweb-inner">
				<div class="brandweb-title">
					<img src="http://natalierose.net/wp-content/uploads/2018/02/brandingandwebdesign2.png" alt="branding and web design title">
				</div>
				<div class="brandweb-header">
					<div class="brandweb-header-gold">
						<div class="brandweb-header-text">
					<p><div id="areyouready">Are you ready to stand out with a fresh new look?</div><br>With my full branding & web design packages we will work together to create something truly unique! We will dig deep to find a look & style that truly reflects you and your business.<br>Take your business to new heights with a captivating brand style, including graphics, logos, and icons. Then top it all of with a sleek new website designed to intrigue your visitors and capture customers.<br>
					<strong>It doesn't have to stop at design!</strong><br>I'll craft & code your website by hand. Built with integrity, I'll add custom functionalities and features that streamline your lead flow and capture new customers with ease. I'll make sure you know exactly how things work on your website, so you can make updates and add content quickly and easily.</p>
				</div><!--brandweb-header-text-->
			</div><!--brandweb-header-gold-->
				</div><!--brandweb-header-->

				<div class="brandweb-content">

					<div class="brandweb-box1">
						<div id="brandweb-product-title">
						<img src="http://natalierose.net/wp-content/uploads/2018/02/brandbrilliance2.png" alt="brand brilliance"></div>
						<div class="brandweb-firstp">
						<p>You need a brand that speaks to your true purpose and represents your business perfectly. You know that a strong and cohesive brand style will be a game changer for you and your business. Transform your brand from blah to brilliant with my customizable branding packages.</p>
					</div>
						<p>What you get</p>
							<ul>
								<li>Business personality discovery</li>
								<p>Through a series of discovery questions we will get to the root of your business and what makes you unique. From there we can craft a brand that truly reflects your vision and appeals to your ideal audience.</p>
								<li>Customized Colour Pallete</li>
								<p>Crafted to keep you consistent, we will use colour theory to align your brand with the message you want to project.</p>
								<li>Logo creation</li>
								<p>I will craft 2 unique and memorable logo designs based on your brand personality and vision.</p>
								<li>Typography pairings</li>
								<p>Thoughtfully paired typography that will keep your brand consistent.</p>
								<li>Style guide</li>
								<p>All good brands have a great style guide. Your style guide will catalogue the specific colours, typeography, logos, imagery, & patterns that define your brand.</p>
							</ul>

							<p>Instead of giving you a bunch of things that you won't use, I tailor my packages to suit your individual needs. Whether you need digital designs, printed materials, or a combination of both I will work with you to create a package that works best for you!</p>

							<p>Options Include, but are not limited to:</p>
							<ul>
								<li>Social Media Graphics</li>
								<li>Social Media Templates</li>
								<li>Facebook or linkedIn Covers</li>
								<li>Business Card Design</li>
								<li>Postcard Design</li>
								<li>Poster Design</li>
								<li>Letterheads</li>
								<li>Brochure Design</li>
							</ul>

					<div class="timebox">
						<p>Timeline: 4+ Weeks<br>
						Average Investment: $825+<br>
						Payment intallment options available.</p>
					</div>

						<div class="brandweb-button">
								<a href="http://natalierose.net/contact/">
							<button class="btn-brandweb">BUILD MY BRAND</button></a>
						</div><!--brandweb-button-->
					</div><!--brandweb-box1-->


					<div class="brandweb-box2">
						<div id="brandweb-product-title">
						<img src="http://natalierose.net/wp-content/uploads/2018/02/wonderful-web-design2.png" alt="wonderful web design"></div>
						<div class="brandweb-firstp">
						<p>You already have your branding on lock and now you need a website to compliment your style. You need a website that is beautifully designed with your business' needs in mind. Attract more customers, increase your sales, and grow your business online with a fresh new website.<br></p>
					</div>
						<p>What I offer</p>
						<ul>
							<li>Stylish Web Design</li>
							<p>A customized, branded web design that will captivate your audience and help increase sales.</p>
							<li>Customized WordPress Website</li>
							<p>An easy to use WordPress theme will allow you the freedom to control your content without sacrificing performance. Starting with a basic theme, I'll code in special functionalities and designs by hand to ensure your website is one of a kind and is tailored to your needs.</p>
							<li>Social Media Integration</li>
							<p>Stay connected with your social media channels through streamlined WordPress integration.</p>
							<li>Email List Integration</li>
							<p>Build your email lists easily with enticing opt-in offers directly from your website.</p>
							<li>Website Launch Plan</li>
							<p>Prepare for your website launch with promotional social media graphics to entice your eagerly awaiting audience.</p>
						</ul>

					<div class="timebox">
						<p>Timeline: 6+ weeks<br>
						Average Investment: $1045+<br>
						Payment intallment options available<br>
						Both the timeline and investments are dependant on website size and complexity.<br>
						ECommerce options for an additional $500+</p>
					</div>

						<div class="brandweb-button">
								<a href="http://natalierose.net/contact/">
							<button class="btn-brandweb">I WANT A WEBSITE</button></a>
						</div><!--brandweb-button-->
					</div><!--brandweb-box2-->


					<div class="brandweb-box3">
						<div id="brandweb-product-title">
						<img src="http://natalierose.net/wp-content/uploads/2018/02/dynamic-development2.png" alt="dynamic development"></div>
						<div class="brandweb-firstp">
						<p>You already have your brand on point and your designs ready to rock. All you need is the web development to bring it all together. I'll hand code your WordPress or HTML website from scratch so you can be assured of perfect performance and flawless functionality. I'll work with your chosen designs to create the website that you want.</p>
					</div>

						<ul>
						<li>Lovingly Hand Crafted</li>
							<p>I will carefully code the entire website from start to finish using the best practices and close attention to detail, respecting your chosen design.</p>
							<li>Website development</li>
							<p>WordPress websites start from $645 for a simple website with 1-5 pages.<br>ECommerce websites start at $985+</p>
							<li>Receive Online Tech Support for 3 months</li>
							<p>If things go wrong or if you need help, there's no need to worry! I've got you covered with prompt solutions!</p>
						</ul>

					<div class="timebox">
						<p><span id="notinclude">This package does not include branding or design work!</span></p>
						<p>Timeline: 4+ weeks<br>
						Average Investment: $645+<br>
						Payment installment options available.<br>
						Both the timeline and investments are dependant on website size and complexity.</p>
					</div>

						<div class="brandweb-button">
								<a href="http://natalierose.net/contact/">
							<button class="btn-brandweb">CODE MY WEBSITE </button></a>
						</div><!--brandweb-button-->
					</div><!--brandweb-box3-->


					<div class="brandweb-box4">
						<div id="brandweb-product-title">
						<img src="http://natalierose.net/wp-content/uploads/2018/02/the-whole-enchilada2.png" alt="the whole enchilada"></div>
						<div class="brandweb-firstp">
						<p>Need a full package that includes everything from start to finish?<br>This is the solution for you!<br> With a full branding, web design, & web development package we will build your brand and website from the ground up.</p>
					</div>

						<ul>
							<li>All Inclusive</li>
							<p>Includes everything from the Brand Brilliance & Wonderful Web Design packages all rolled into one large project.</p>
							<li>Fully Branded</li>
							<p>You will leave with a fully realized brand & style guide complete with logos, graphics, and optional deliverables.</p>
							<li>Web Design & Development</li>
							<p>Your website will be completely designed and developed from start to finish.</p>
							<li>Marketing Plan & Launch Strategy</li>
							<p>Together we will put together a marketing plan and launch strategy to start you off right.</p>
							<li>Website Maintenance</li>
							 <p>You can also rest easy, knowing that I will have your back with tech support if any issues arise for the first 3 months.</p>

					<div class="timebox">
						<p>Timeline 12+ weeks<br>
							Average Investment: $2400+<br>
							Payment installment options available.<br>
							Both the timeline and investments are dependant on website size and complexity.</p>
						</div>

						<div class="brandweb-button">
								<a href="http://natalierose.net/contact/">
							<button class="btn-brandweb">I WANT IT ALL</button></a>
						</div><!--brandweb-button-->
					</div><!--brandweb-box4-->

					<div class="brandweb-footer">
					<h1>How does it all work?</h1>
					<p><strong>Looking for more info?</strong><br>Find out how the process works and find answers to the most frequently asked questions here!</p>

					<div class="brandweb-button">
							<a href="http://natalierose.net/faq/">
						<button class="btn-brandweb">FIND OUT MORE</button></a>
					</div><!--brandweb-button-->

				</div>



		</div><!--brandweb-content-->
			</div><!--brandweb-inner-->
		</div><!--brandweb-work-all-->



		<div class="specialties">
			<div id="special-title">
				<h4>Specialty Services</h4>
			</div>

			<div class="special-all">

				<div id="special1">
					<h5>Digital & Print Design</h5>
						<p>You need awesome graphics for social media. Maybe you need business cards, postcards, or posters.<br> I've got you covered!</p>
						<p>Promote your business or event with custom designed printed or digital materials.</p>
						<div id="special1-con"><img src="http://natalierose.net/wp-content/uploads/2018/02/Insta1.jpg" alt="instagram ad">
						</div><!--special1-con-->

						<div class="button-box">
							<a href="http://natalierose.net/socials/">
						<button class="btn slay">SLAY THOSE SOCIALS!</button></a>
					</div><!--button-box-->
					</div><!--special1-->

					<div id="special2">
						<h5>Site Transfers</h5>
							<p>You want to move on to better things.<br> Your current platform is dragging you down.<br>You wouldn't be the first.<br>
							Many businesses start off with cheap, pre-made, or drag and drop websites.<br>If you are tired of limitations & extra add-on expenses, it's time to move on to something better.<br>Transfers can be complicated, but no need to worry. I'm here for ya! I'll take care of the entire process so you don't have to stress.<br>Ditch that dumpy old host, you're ready for something fabulous!
						</p>
						<div id="special2-con"><img src="http://natalierose.net/wp-content/uploads/2018/02/webTransfers.png" alt="desktop computer with website transfers on the screen">
						</div><!--special3-con-->

						<div class="button-box">
							<a href="http://natalierose.net/contact/">
						<button class="btn slay">MOVING ON UP!</button></a>
					</div><!--button-box-->
				</div><!--special2-->

			</div><!--special-all-->


				<div class="promotions">
					<div class="inner-promo">
					<h5>Special Offer</h5>
					<?php
					$image = get_field('promotional_image');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>

					<?php the_field( 'promotional_text' ); ?>
				</div>
				</div><!--promotions-->

		</div><!--specialties-->



			<div class="do-list">
				<div class="inner-dolist">
					<h4>What I do</h4>

					<div id="dobox1">
						<div id="docon1">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/paintBoard200.png" alt="design icon">
						</div>
						<div id="dotext1">
							<p><span id="do-title">Branding, Web & Graphic Design</span></p>
								<p><strong>Allow your brand to shine!</strong><br> A great brand is distinct, memorable, and cohesive.<br> Things change and businesses grow.<br> If your brand doesn't represent your business well you may want to consider a brand refresh or re-design. I can help tweak or completely overhaul your brand identity. Working together, we will get your typography on point & redesign your logos, graphics, icons, & website.<br><strong>Just starting out?</strong><br> I can make the branding process easy, so you have an exciting brand that starts off strong and captures the essence of your business.<br>Need a website or social media graphics that speak to your audience?<br> I design visually stunning websites, graphics, and ads that will take your website or promotion to the next level.</p>
						</div>
					</div>

					<div id="dobox2">
						<div id="dotext2">
							<p><span id="do-title">Web Development</span></p>
								<p><strong>Custom coded websites? That's my jam!</strong><br>I craft, code, and customize unique websites for all types of small businesses. If you need something truly unique that stands out and functions flawlessly, consider me for your web development needs. Don't settle for a boring "cookie cutter" website that looks like all the others. You can have something lovelingly hand crafted just for you!
								<br><strong>Already have a website?</strong><br> I can fix bugs, update your info, or make quick functionality fixes. From completely new projects to small fixes on existing sites, I'm ready to dig in! No job is too big or too small.</p>
						</div>
						<div id="docon2">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/webDev200.png" alt="development icon">
						</div>
					</div>

					<div id="dobox3">
						<div id="docon3">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/diamond200.png" alt="diamond icon">
						</div>
						<div id="dotext3">
							<p><span id="do-title">Custom WordPress Themes</span></p>
								<p>Do you find the out-of-the-box WordPress themes boring and limiting? Want to add your own flair to make your website really stand out? I can build you a completely new theme from scratch or customize an existing WordPress theme that you love. With a custom WordPress child theme, the options are limitless. You will be in complete control of the content you add, while I handle the custom layout options to make your website truly unique.</p>
						</div>
					</div>

					<div id="dobox4">
						<div id="dotext4">
							<p><span id="do-title">Responsive Design Transitions</span></p>
								<p>No one likes a website that's frustrating to use on a tablet or mobile, especially when your competitors is easy to use. If your website is static or functions poorly on mobile devices, I can give it a thorough responsive overhaul to keep it current and competitive. Don't lose money over poor design! I have solutions!</p>
						</div>
						<div id="docon4">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/responsive200.png" alt="responsive icon">
						</div>
					</div>

					<div id="dobox5">
						<div id="docon5">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/cart200.png" alt="ecommerce icon">
						</div>
						<div id="dotext5">
							<p><span id="do-title">E-Commerce Solutions</span></p>
								<p>If you have products to sell there's no better way to reach a large audience than online. Setting up an E-Commerce website doesn't have to be daunting or unaffordable. I can install, add products, and set up your shipping and payment options for you so you can get those products in front of and out to the people who need them. Reach a wider audience, sell more products, & ultimately make more money. Let me make ECommerce easy!</p>
						</div>
					</div>

					<div id="dobox6">
						<div id="dotext6">
							<p><span id="do-title">Site Transfers</span></p>
								<p>Tired of your old platform? Need something better? Transfering a current website and migrating content to another hosting platform can be time-consuming and complicated. But there's no need to struggle on your own! I am here when you need website transfer help, and will take care of the entire process for you. </p>
						</div>
						<div id="docon6">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/transfer200.png" alt="transfer icon">
						</div>
					</div>

					<div id="dobox7">
						<div id="docon7">
							<img src="http://natalierose.net/wp-content/uploads/2018/02/bug200.png" alt="bug fix icon">
						</div>
						<div id="dotext7">
							<p><span id="do-title">Website Maintenance</span></p>
								<p>I offer optional monthly or quarterly maintenance packages to my customers. With my website maintenance packages, you will never have to worry that your website will be out of date or stop working because of changing technologies. If you have any issues or problems with your website I am only a phone call or email away and will be there with technical support promptly. If a website that I built or worked on crashes I will be there to fix it right away. I've got your back!</p>
						</div>
					</div>
				</div><!--inner-dolist-->
				</div><!--do list -->

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
