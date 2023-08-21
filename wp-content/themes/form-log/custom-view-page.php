<?php

/**
 * Template Name: Custom Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Form_log
 */

get_header();

$args = array(
'post_type' => 'form_log', 
'posts_per_page' => -1,  
);

$query = new WP_Query($args);

?>

<div class="container mt-5 mb-3">
<div class="row">
	<?php
		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
		
				// Retrieve ACF field values for each post
				$name = get_field('name');
				$phone = get_field('phone');
				$email = get_field('email');
				$message = get_field('message');
		
				// Display the ACF field values within the loop
			?>
	
	<div class="col-md-4 col-sm-12 col-xs-12 ">
		<div class="card p-3 mb-2">
			<div class="d-flex justify-content-between">
				<div class="d-flex flex-row align-items-center">
					<div class="icon"> <img src="https://img.icons8.com/?size=512&id=48325&format=png" alt="/"> </div>
					<div class="ms-2 c-details">
						<h6 class="mb-0"><?php echo esc_html($name) ?></h6> <span><?php echo esc_html($email) ?></span>
					</div>
				</div>
				<div class="badge"> <span><?php echo esc_html($phone) ?></span> </div>
			</div>
			<div class="mt-5">
				<h5 class="heading"><?php echo esc_html($message) ?></h5>
				<div class="mt-5">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
				</div>
			</div>
		</div>
	</div>
		<?php

			endwhile;

			// Restore the global post data
			wp_reset_postdata();

		    else :
				// No posts found
				echo 'No Form Log entries found.';
		    endif;
		?>

	</div>
</div>
</div>



<?php
get_footer();

