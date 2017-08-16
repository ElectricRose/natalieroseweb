<?php /* Template Name: Contest */ ?>
<?php
/**
 * The template for displaying the contest page.
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
	<div class="con-content">

    <div class="prizes">
      <div id="rose-img">
        <img src="/wp-content/uploads/2017/06/rainbowrose-left.png" alt="rainbow roses">
      </div>
      <h1>Win a FREE WordPress Website!</h1>
      <h2>Prizes</h2>

      <div id="prize1">
        <h3>Grand Prize</h3>
        <h4>One FREE WordPress website!*</h4>
        <h5>Based off my <a href="http://natalierose.net/packages/">Red Rose Package</a></h5><br>
        <p>* Recipient must pay for their own web hosting and domain name.</p>
        <p>** Must meet eligibility requirements.</p>
        <p>*** May be eligible for an upgrade with purchase of the difference in price for another package.</p>
      </div>

      <div id="prize2">
        <h3>2nd Prize</h3>
        <h4>One FREE Mini WordPress Website OR Two Website Pages!*</h4>
        <h5>Based off my <a href="http://natalierose.net/packages/">Mini Rose Package</a></h5>
        <h6>Winner may choose between a simple one page website based on my Mini Rose package, or custom work to any TWO pages of an existing WordPress website.</h6><br>
        <p>* Recipient must pay for their own web hosting and domain name.</p>
        <p>** Must meet eligibility requirements.</p>
        <p>*** May be eligible for an upgrade with purchase of the difference in price for another package.</p>
      </div>

      <div id="prize3">
        <h3>3rd Prize</h3>
        <h4>One FREE Website Page Upgrade* OR $100 off any package!</h4>
        <h6>Winner may choose between custom work and upgrades to any ONE existing website page of choice. OR $100 off any package price if you choose to work with me.</h6><br>
        <p>*Recipient must pay for their own web hosting and domain name.</p>
        <p>** Must meet eligibility requirements.</p>
        <p>*** May be eligible for an upgrade with purchase of the difference in price for another package.</p>
      </div>
    </div><!--prizes -->

      <div class="elig">
        <h2>Eligibility</h2>
        <h4> To be eligible for these prizes you MUST meet these requirements. Winners who do not meet ALL requirements will forfeit their prize.</h4>
        <ol>
          <li>Winners MUST pay for their own web hosting and domain name. I can help you set it up if required, but the purchases must be made and held by you.</li><br>
          <li>You MUST have a WordPress.org website, or be planning to start a WordPress.org website. WordPress.com websites are not eligible; unless you want to migrate and switch to a WordPress.org site and are willing to pay me for the transfer at additional cost.</li><br>
          <li>Squarespace, WIX, Weebly, Shopify, etc websites are NOT eligible. Sorry!</li><br>
          <li>You MUST have your website design clearly in mind and ready to implement. I am NOT offering design services, only web development for this contest.</li><br>
          <li>You MUST be able to provide me with your:
                <ul>
                  <li>Site content</li>
                  <li>Design mockups</li>
                  <li>Links, brand colours, & images</li><br>
                </ul>
          <li>You MUST be ready to build your website <strong>as of the draw date</strong> and have all the designs, files, & branding finished and ready for me to work with.</li><br>
          <li>This contest is open to everyone from every country! But you MUST be able to easily communicate with me in English.</li><br>
          <li>You MUST have access to a decent computer in order to properly communicate with me, send and receive files, and review the website.</li>
      </div>

      <div class="rules">
        <h2>Rules</h2>
        <ol>
          <li>Winners must meet all eligibility requirements. If a winner does not meet the requirements that prize will be re-drawn.</li><br>
          <li>Winners will be announced and contacted within 2 days of the draw date. Save the date!</li><br>
          <li>Winners will have two weeks to respond and accept prizes after the draw date. If no response is received after two weeks, that prize will be forfeited and re-drawn. Please make sure to check your emails, including spam/junk folders!</li><br>
          <li>If an original winner forfeits their prize for any reason, secondary prize winners will be contacted within 2 days of second draw date, and will have two weeks to respond.</li><br>
          <li>Prizes will be re-drawn until all 3 prizes are claimed and all winners are verified as eligible.</li><br>
          <li>Winners may choose to upgrade their package by paying the difference in price for another package. Winners may choose to add additional services to their prizes at my standard prices.</li><br>
          <li>Packages may not be substituted for a package of higher price without payment and request to do so.</li><br>
          <li>Prizes do not include complicated setups such as ecommerce, a fully responsive re-design from a static website and do not include maintenance packages. These options can be purchased, but are not included in these prizes.</li><br>
          <li>I reserve the right to say no to unreasonable demands or finish the website at my discretion. I pride myself on quality, service and satisfaction, but don't try to take advantage of me just because it's free.</li><br>
          <li>I reserve the right to terminate web development without finishing the website in the extreme case of harrassment, threats, or abuse. (I know you guys are awesome so I'll never have to do this, right?! Just saying!)</li><br>
          <li>Winners must sign a standard web development contract before work begins, to protect both parties legally. If you can't do this, we can't work together unfortunately. Don't worry, it's quick & painless!</li><br>
        </ol>
      </div>

			<div class="enter">
				<h1>Enter Here!</h1>
				<a class="e-widget" href="https://gleam.io/LTLp4/win-a-free-wordpress-website" rel="nofollow">Win A Free WordPress Website!</a>
				<script type="text/javascript" src="https://js.gleam.io/e.js" async="true"></script>
			</div>

      <div class="luck">
        <h1>Good Luck!</h1>
      </div>

    </div><!--con-content -->
		</div><!-- all-content -->

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer();
