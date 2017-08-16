<?php /* Template Name: Accelerate */ ?>
<?php
/**
 * The template for displaying the accelerate page.
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
			<div class="acc-content">

				<div id="acc1">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-1502912005340.jpg" alt="Accelerate Project Home">
				</div>
				<div id="acc2">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-case-studies-1502912090191.jpg" alt="Accelerate Work Page">
				</div>
				<div id="acc3">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-about-1502912077332.jpg" alt="Accelerate About Page">
				</div>
				<div id="acc4">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-case-studies-my-test-case-study-1502912121494.jpg" alt="Accelerate Mailchimp Case Study">
				</div>
				<div id="acc5">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-case-studies-coroflot-advertising-1502912144533.jpg" alt="Accelerate Coroflot Case Study">
				</div>
				<div id="acc6">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-case-studies-zurb-foundation-project-1502912164146.jpg" alt="Accelerate Zurb Case Study">
				</div>
				<div id="acc7">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-blog-1502912178294.jpg" alt="Accelerate Blog Page">
				</div>
				<div id="acc8">
					<img src="http://localhost:8888/natalierose/wp-content/uploads/2017/08/screencapture-localhost-8888-accelerate-contact-1502912103647.jpg" alt="Accelerate Contact Form">
				</div>


			</div><!-- all-content -->
		</div><!-- acc-content -->
	</div><!-- main -->

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer(); ?>
