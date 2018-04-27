<?php /* Template Name: GridTest */ ?>
<?php
/**
 * The template for displaying the gridtest page.
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

      <div class="grid-main">
        <div class="grid1">
          <div class="item-a">
            <img src="http://localhost:8888/natalierose/wp-content/uploads/2018/04/lake2.jpg">
          </div>

        </div><!--grid1-->

      </div><!--grid-main-->







		<?php cryout_after_content_hook(); ?>
	</main><!-- #main -->
	<?php fluida_get_sidebar(); ?>
	</div><!-- #container -->
	<?php get_footer(); ?>



<!-- css for grid test
/*==========gridtest==========*/
.grid1{
  display: grid;
  grid-template-columns: [line1] 25% [line2] 25% [line3] 25% [line4] 25%;
  grid-template-rows: auto;
  grid-template-areas:
  "header header header header"
  "main main . sidebar"
  "footer footer footer footer";
}
.item-a {
  grid-area: header;
}
.item-b {
  grid-area: main;
}
.item-c {
  grid-area: sidebar;
}
.item-d {
  grid-area: footer;
}

.item-a {
  grid-column-start: 2;
  grid-column-end: five;
  grid-row-start: row1-start
  grid-row-end: 3
}

-->
