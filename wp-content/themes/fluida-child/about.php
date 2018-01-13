<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page.
 *
 *
 * @package Fluida
 */


 get_header(); ?>

 	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">

 	<div class="about-content">
    <div class="about-me">
      <div class="about-intro-box">
      <div class="about-inner-box">
        <div class="about-intro">
          <h2>From passion to profit</h2>
          <h3>I craft custom websites to turn your dreams into a reality.</h3>
              <div id="about-break">
                <img src="/wp-content/uploads/2017/06/break2.png" alt="Swirly Line Break" class="center">
              </div>
            <h6>Hello, I’m Natalie Rose.</h6>
            <p>If you are running a small business or blog, you know that a great website is one of the most important investments you can make. A solid online presence is essential these days, especially if you have products, services, or ideas to share.</h3>
            <p>Nothing loses potential clients, customers, or subscribers faster than a poorly crafted, slow, or hard to navigate website. With a huge amount of users now accessing the web on mobile devices, having a responsive website that scales properly can make or break your business. Don't be one of those websites that is too slow to load or so frustrating to use on a mobile that people give up and look elsewhere.<br> <span id="about-solutions">I have solutions for you!</span></p>
          </div><!--about-intro-->
        </div><!--about-intro-inner-box-->
      </div><!--about-intro-box-->

        <div id="about-img">
          <img src="http://localhost:8888/natalierose/wp-content/uploads/2018/01/natalieRoseCircle1-450.png" alt="Photo of Natalie Rose">
        </div>

        <div id="about-work-with-me">
          <div class="basicBox">
            <a href="http://natalierose.net/contact/">
              Let's Chat!
              <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                <rect x='0' y='0' fill='none' width='130' height='65'/>
              </svg></a>
          </div>
          <p>I'm available to answer all your questions! <br> Schedule a FREE 30 min consultation now.</p>
        </div>

        <div class="about-desc">
        <div class="about-text1">
          <h4>My Mission</h4>
          <p>My mission is to provide affordable, accessible, and beautifully functional web solutions to small businesses and individuals. I am an independent freelance service provider that offers a personal experience by working closely on-one-one to create a custom website tailored to your specific needs and budget.</p><br>

          <h4>Have you struggled with website creation in the past?</h4>
          <h5>Building a website doesn't have to be hard!</h5>
          <p>When you need custom designs, features, and functionalities</p>
            <div id="can-help">
              <div class="container borderXwidth">
                <p><a href="http://natalierose.net/work/">I'm here to help!</a></p><br>
              </div>
            </div>
        </div><!--about-text1-->
      </div><!--about-desc-->

      <div class="about-container">
        <div class="about-text2">
          <h4>Do you run a retail store or restaurant?</h4>
          <p><span id="hours">Are your hours of operation, location, and contact info easy to find?</span></p>
          <p>How many times have you had to shop or dine elsewhere because you couldn't look up this simple info online? <br>It happens far too often to me.</p>
          <p>This common and frustrating error can cost you a lot of business. Don't miss out on opportunities because of simple website mistakes or oversights.</p>
          <p>I can make quick and easy changes to your website for a small fee. Contact me to request a free quote. <br>No job is too small!</p>

        </div><!--about-text2-->

          <div class="shop-pic">
            <img src="http://localhost:8888/natalierose/wp-content/uploads/2018/01/rest-plate700.jpg" alt="">
          </div>

      </div><!--about-container-->

        <div class="about-container2">
          <div class="about-text3">
            <h4>A little about me</h4>
            <h5>I chose to blaze my own path to freedom!</h5>
            <p>After many years of working for other companies, I'd had enough. I decided I would break out of the rat race and charge head first onto the path of self-employment. I couldn't be happier that I did!</p><br>
            <p>I have been working hard and taking a variety of web development and coding courses since 2016. I have recently started learning more advanced Javascript and am pleased to now offer design services as well. I'm continuously learning and challenging myself to be able to offer you more and better services.</p><br>
            <h5>I am passionate about what I do.</h5>
             <p>I love to support small businesses, individuals, and start-ups to achieve their own goals by providing them with an instrumental tool to success. I understand the financial pressures of self-employment and small business. That's why I keep my prices lower than average. I want to serve my local and wider communities well, while also being able to feed my family.</p><br>
            <h5>I love this beautiful planet.</h5>
            <p>I strive to be as sustainable and environmentally friendly as possible. When I’m not online or neck deep in code, I spend as much time as possible exploring the wild nooks and spectacular vistas nature has to offer.</p><br>
            <p>On my off time, you can find me wandering the forests, climbing mountains, swimming in the ocean, and tubing down rivers. <br>If you want to see more of this side of me check out my lifestyle blog filled with my adventures, my love of the outdoors, and self-sustainability tips like working with essential oils, gardening, cooking, and DIY projects.</p><br>
            <h5>Want to see more of me?</h5>
            <p>Give me some love on social media or browse my pics on Instagram!</p><br>

            <div class="icons center-block">
          		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          		<a href="https://www.facebook.com/Natalie-Rose-191345558020334/" target="_blank" class="fa fa-facebook fa-2x"></a>
          		<a href="https://twitter.com/ElectricRose4" target="_blank" class="fa fa-twitter fa-2x"></a>
          		<a href="https://www.instagram.com/electric._.rose/?hl=en" target="_blank"  class="fa fa-instagram fa-2x"></a>
          		<a href="https://www.linkedin.com/in/natalie-rose-b43632143/" target="_blank"  class="fa fa-linkedin fa-2x"></a>
          		<a href="https://github.com/ElectricRose" target="_blank" class="fa fa-github fa-2x"></a>
          	</div>
          </div>
        </div>

            </div><!--about-desc-->
          </div><!--about-me-->
      </div><!--about-content-->
 		</div><!--container-->

 			<?php cryout_after_content_hook(); ?>
 		</main><!-- #main -->

 		<?php fluida_get_sidebar(); ?>

 	</div><!-- #container -->

 <?php get_footer();
