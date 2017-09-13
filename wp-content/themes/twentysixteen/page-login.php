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


<div class="login-form">
<?php
// Error Message
$login = (isset($_GET['login']) ) ? $_GET['login'] : 0;
if ( $login === "failed" ) {
  echo '<p class="login-msg" style="color:red"><strong>ERROR:</strong> Invalid username and/or password.</p>';
} elseif ( $login === "empty" ) {
  echo '<p class="login-msg" style="color:red"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
} elseif ( $login === "false" ) {
  echo '<p class="login-msg" style="color:red"><strong>ERROR:</strong> You are logged out.</p>';
}
?>

<?php
$args = array(
  'redirect' => get_permalink(get_page_by_path('dashboard')),
  'id_username' => 'user',
  'id_password' => 'pass',
  )
;?>
<?php wp_login_form( $args ); ?>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
