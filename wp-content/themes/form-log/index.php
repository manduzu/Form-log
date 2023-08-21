<?php
/**
 * TTemplate Name: Home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Form_log
 */

get_header();
?>

<section class="get-in-touch">
<h1 class="title">Form Log</h1>
<div class="container">
<form class="contact-form row" id="form-log-form" >
	<div class="form-field col-lg-6 col-md-6 col-sm-12">
		<input id="name" name="name" class="input-text js-input" type="text" required>
		<label class="label" for="name">Name</label>
	</div>
	<div class="form-field col-lg-6 col-md-6 col-sm-12">
		<input id="phone" name="phone" class="input-text js-input" type="number" required>
		<label class="label" for="phone">Contact Number</label>
	</div>
	<div class="form-field col-lg-12 col-md-12 col-sm-12">
		<input id="email" name="email" class="input-text js-input" type="email" required>
		<label class="label" for="email">E-mail</label>
	</div>
	<div class="form-field col-lg-12 col-md-12 col-sm-12">
		<textarea id="message" name="message" class="input-text js-input" type="text" required></textarea>
		<label class="label" for="message">Message</label>
	</div>
	<div class="form-field col-lg-12 col-lg-12  col-md-12 col-sm-12">
		<input class="submit-btn" type="submit" value="Submit">
	</div>
</form>
</div>
</section>

<?php
get_footer();
