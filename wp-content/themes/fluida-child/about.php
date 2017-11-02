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
        <div class="about-intro">
          <h2>From passion to profit</h2>
          <h3>I craft unique custom websites so you can turn dreams into a profitable reality.</h3>
              <div id="about-break">
                <img src="/wp-content/uploads/2017/06/break2.png" alt="Swirly Line Break" class="center">
              </div>
            <h6>Hello, I’m Natalie Rose.</h6>
            <p>If you are running a small business or blog, you know that a great website is one of the most important investments you can make. A solid online presence is essential these days, especially if you have products, services, or ideas to share.</h3>
            <p>Nothing loses potential clients, customers, or subscribers faster than a poorly crafted, slow, or hard to navigate website. With a huge amount of users now accessing the web on mobile devices, having a responsive website that scales properly can make or break your business. Don't be one of those websites that is too slow to load or so frustrating to use on a mobile that people give up and look elsewhere.<br> I have simple solutions for you!</p>
          </div>
        </div>

        <div id="about-img">
          <img src="/wp-content/uploads/2017/06/natalierose-img.jpg" alt="Photo of Natalie Rose">
        </div>

        <div class="about-desc">
          <div id="work-img1">
            <img src="/wp-content/uploads/2017/06/green-computer1.jpg" alt="computer desk with coffee cup and forest screensaver">
        </div>

        <div class="about-text1">
          <h4>My Mission</h4>
          <p>My mission is to provide affordable, accessible, and beautifully functional web development services to small businesses and individuals. I am an independent freelance service provider that offers a personal experience by working closely on-one-one to create a custom website tailored to your specific needs and budget.</p><br>

          <h4>Have you struggled with website creation in the past?</h4>
          <h5>Building a website doesn't have to be hard!</h5><br>
          <p>I can make you a website quickly and easily!</p>
          <p>While there are many types of do-it-yourself website builders available, many of them have limited design capabilities that can leave the website looking bland and similar to all the others.</p>
          <p> Many drag and drop build-it-yourself type websites have glitches, errors, and functionality issues that can lose a business customers and money. The free version of WordPress.com is built for bloggers, not small business owners. Many small businesses make the mistake of starting out on these types of services, but quickly realize that they have to pay large amounts to customize it to their needs, and can have severely limited options for monetizing their website. Often the add-ons can end up costing much more than a customized website on WordPress.org.</p>
          <p>If you find WordPress customization and PHP hard to understand you aren't alone. But...</p><br>
          <h6>Don't worry!</h6>

            <div id="can-help">
              <div class="container borderXwidth">
                <p><a href="http://natalierose.net/work/">I can help!</a></p><br>
              </div>
            </div>
        </div>

      <div class="about-container">
        <div class="about-text2">
          <h4>Do you run a retail store or restaurant?</h4>
          <p>The most common thing people look for on a website for a store or restaurant is the hours of operation and contact info.</p>
          <p>I can't tell you how many times I've had to shop or dine elsewhere because I couldn't find this important information.</p>
          <p>Don't miss out on business because of simple errors like this!</p>
          <p>I can make quick and easy changes to your website for a small fee. Contact me to request a free quote.</p>

        </div>
            <div id="about-work-with-me">
              <div id="teacup">
                <img src="/wp-content/uploads/2017/06/teacup1.png" alt="Cup of tea">
              </div>
              <p>Let's chat!<br> I'm available to meet in-person or online.</p><br>
              <div class="basicBox">
                <a href="http://natalierose.net/contact/">
                  Contact Me!
                  <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                    <rect x='0' y='0' fill='none' width='130' height='65'/>
                  </svg></a>
              </div>
            </div>
          </div>

        <div class="about-container2">
          <div class="about-text3">
            <h4>A little about me..</h4>
            <h5>I chose to blaze my own path to freedom!</h5>
            <p>After many years of working for other companies, I'd had enough. I decided I would break out of the rat race and charge head first onto the path of self-employment. I couldn't be happier that I did!</p><br>
            <p>I have been working hard and taking a variety of web development and coding courses since 2016. I have recently started learning more advanced Javascript and hope to offer design services in the near future as well. I'm continuously learning and challenging myself to be able to offer you more and better services.</p><br>
            <h5>I am passionate about what I do.</h5>
             <p>I love to support small businesses, individuals, and start-ups to achieve their own goals by providing them with an instrumental tool to success. I understand the financial pressures of self-employment and small business. That's why I keep my prices lower than average. I want to serve my local and wider communities well, while also being able to feed my family.</p><br>
            <h5>I love this beautiful planet.</h5>
            <p>I strive to be as sustainable and environmentally friendly as possible. When I’m not online or neck deep in code, I spend as much time as possible exploring the wild nooks and spectacular vistas nature has to offer.</p><br>
            <p>On my off time, you can find me wandering the forests, climbing mountains, swimming in the ocean, and tubing down rivers. <br>If you want to see more of this side of me check out my lifestyle blog filled with my adventures, my love of the outdoors, and self-sustainability tips like working with essential oils, gardening, cooking, and DIY projects.</p>
            <p>Give me some love on social media or browse my pics on Instagram!</p><br>
            <h5>Want to see more of me?</h5>
            <div class="container borderXwidth">
            <h5><a href="http://www.natalieroseblog.com">Check out my blog!</h5></p>
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
