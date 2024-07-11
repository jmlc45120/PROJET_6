<?php

/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
	if (hello_elementor_display_header_footer()) {
		if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
			get_template_part('template-parts/dynamic-footer');
		} else {
			get_template_part('template-parts/footer');
		}
	}
}
?>

<?php wp_footer(); ?>

<div class="custom-footer-images">
	<?php for ($i = 0; $i < 16; $i++) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>http://planty.local/wp-content/uploads/2024/07/Planty6-1.png" alt="Custom Image">
	<?php endfor; ?>
</div>

</body>

</html>