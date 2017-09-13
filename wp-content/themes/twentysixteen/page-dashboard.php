<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<center>
		<h1>Dashboard</h1>
		<li class="signOut"><a href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a></li>
	</center>
</div><!-- .content-area -->



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
