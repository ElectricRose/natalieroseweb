<?php /* Template Name: Unplugged */ ?>
<?php
/**
 * The template for displaying the unplugged page.
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

		<div class="pro-content">
			<div class="unplugged-content">
				<div id="plug1">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-index-html-1502912238783.png" alt="Unplugged Project Home">
				</div>
				<div id="plug2">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-news-news-detail-html-1502912253907.png" alt="Unplugged News Detail Page">
				</div>
				<div id="plug3">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-reviews-reviews-index-html-1502912288645.png" alt="Unplugged Reviews Page">
				</div>
				<div id="plug4">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-reviews-reviews-detail-html-1502912304925.png" alt="Unplugged Reviews Detail Page">
				</div>
				<div id="plug5">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-concerts-concerts-index-html-1502912340400.png" alt="Unplugged Concert Page">
				</div>
				<div id="plug6">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-about-about-index-html-1502928545399.png" alt="Unplugged About Page">
				</div>
				<div id="plug7">
					<img src="/wp-content/uploads/2017/08/screencapture-file-Users-Fireandsurf-Documents-Atom-files-UNPLUGGED-about-faq-html-1502912317410.png" alt="Unplugged FAQ Page">
				</div>


			</div><!-- unplugged-content -->
		</div><!-- all-content -->
	</div><!-- main -->

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer(); ?>
