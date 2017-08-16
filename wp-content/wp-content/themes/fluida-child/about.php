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
            <h3>I craft dynamic custom websites so you can turn dreams into a profitable reality.</h3>
                <div id="about-break">
                  <img src="../wp-content/uploads/2017/05/break2.png" alt="Swirly Line Break" class="center">
                </div>
            <h6>Hello, I’m Natalie Rose.</h6>
            <p>If you are running a small business or blog, you know that a great website is paramount and one of the most important investments you can make in yourself.</h3>
            <p>Nothing loses potential clients or subscribers faster than a poorly crafted, slow, or hard to navigate website. With a huge amount of users now accessing the web on mobile devices, having a responsive website that scales properly can be make or break for your business. Don't be one of those websites that is too slow to load or so frustrating to use on a mobile that people give up and look elsewhere.<br> I have solutions!</p>
          </div>
        </div>

        <div id="about-img">
          <img src="../wp-content/uploads/2017/05/natalierose-img.jpg" alt="Photo of Natalie Rose" class="center">
        </div>

            <div class="about-desc">
              <div class="about-text1">
                <p>Websites are relatively easy to create. There are so many templates and do-it-yourself tutorials online. You could spend years perusing all of the info on the web. I admire people who can start with no knowledge and build themselves a great website from scratch, and I know how much work it takes to learn tech skills!</p><br>
                <p>If you are struggling to understand the code, or can’t figure out how to add features not standard in a plugin or WordPress theme you may need some professional help. I know how complicated it can be to add what seems like should be an easy addition to your blog, or how frustrating it can get to try to organize searches for the products you sell. If you want to change your static HTML or WordPress website to a responsive design, that can be an incredible amount of work, especially if you are not comfortable with code.</p><br>
                  <div id="can-help">
                    <p><a href="/wordpress/portfolio/">I can help!</a></p><br>
                  </div>
                <p>I specialize in custom wordpress themes and responsive development! I can add almost any feature you desire to your HTML or WordPress website, optimize your images to help speed up your load time and transform your static site into a fully responsive one that works beautifully across all devices. </p><br>
                <p>I believe in the freedom lifestyle and work hard to help transform your dreams into a profitable reality. I have the knowledge and experience that you need to take your website to the next level. I work with all sorts of amazing people. From lifestyle, cooking, and travel bloggers who want their blogs to inspire and provide income; to coaches, designers, and shop owners who need an easy to use and fully functional website that attracts the right clients or customers. I can update existing sites or create you a completely new customized website.</p><br>
                  <div id="work-with-me">
                    <p>Want to work with me?</p><br>
                      <p><div id="button">
                        <a href="/wordpress/contact/">
                          <img src="../wp-content/uploads/2017/05/button.png" alt="contact me button" class="center"></a></p><br>
                      </div>
                  </div>
              </div>

              <div class="about-text2">
                <p>This is my passion and my own path to freedom. It’s what I love to do. I decided to embrace my own dreams of working for myself back in 2016 and have since completed a year of front-end development and WordPress development. I have many plans for the future including learning web and UI/UX design. I love supporting small businesses and the blogging community and strongly believe in co-operation and self-sustainability. I’d love to see more people break free from the current 9-5 work structure and am thrilled when I can help people do just that! </p><br>
                <p>I love this beautiful planet and strive to be as sustainable and environmentally friendly as possible. When I’m not online or neck deep in code, I spend as much time as possible exploring the wild nooks and spectacular vistas nature has to offer. On my off time you can find me wandering the forests, climbing mountains, swimming in the ocean, and tubing down rivers. <br>If you want to see more of this side of me check out my lifestyle blog filled with my adventures, my love of the outdoors, and self-sustainability tips like working with essential oils, gardening, and DIY projects. Give me some love on social media or browse my pics on instagram!</p><br>

                <div id="work-with-me">
                    <p>Let's chat! I'm available to meet in-person or online.</p><br>
                    <p><div id="button">
                      <a href="/wordpress/contact/">
                        <img src="../wp-content/uploads/2017/05/button.png" alt="contact me button" class="center"></a></p><br>
                    </div>
                  </div>
                </div>
            </div><!--about-desc-->

              <div class="insta">
                <div class="insta-text">
                  <p>Find me on Instagram! <a href="https://www.instagram.com/electric._.rose/?hl=en" target="_blank"> @electric._.rose </a></p>
                </div>
                <?php echo do_shortcode('[instagram-feed]'); ?>
              </div>

          </div><!--about-me-->
      </div><!--about-content-->
 		</div><!--container-->

 			<?php cryout_after_content_hook(); ?>
 		</main><!-- #main -->

 		<?php fluida_get_sidebar(); ?>

 	</div><!-- #container -->

 <?php get_footer();
