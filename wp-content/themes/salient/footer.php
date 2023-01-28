<?php

/**
 * The template for displaying the footer.
 *
 * @package Salient WordPress Theme
 * @version 12.2
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = (!empty($nectar_options['header_format'])) ? $nectar_options['header_format'] : 'default';

nectar_hook_before_footer_open();

?>

<div id="footer-outer" <?php nectar_footer_attributes(); ?>>

	<?php

	nectar_hook_after_footer_open();

	get_template_part('includes/partials/footer/call-to-action');

	get_template_part('includes/partials/footer/main-widgets');

	get_template_part('includes/partials/footer/copyright-bar');

	?>

</div><!--/footer-outer-->

<?php

nectar_hook_before_outer_wrap_close();

get_template_part('includes/partials/footer/off-canvas-navigation');

?>

</div> <!--/ajax-content-wrap-->

<?php

// Boxed theme option closing div.
if (
	!empty($nectar_options['boxed_layout']) &&
	'1' === $nectar_options['boxed_layout'] &&
	'left-header' !== $header_format
) {

	echo '</div><!--/boxed closing div-->';
}

get_template_part('includes/partials/footer/back-to-top');

nectar_hook_after_wp_footer();
nectar_hook_before_body_close();

wp_footer();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		// section-sport
		// Get all elements which have class findByScroll
		var elementsToFindByScroll = Array.prototype.slice.call(document.getElementsByClassName("section-sport"));

		// Sort them by their position
		var sorted = elementsToFindByScroll.sort(function(a, b) {
			return a.getBoundingClientRect().top - b.getBoundingClientRect().top;
		});


		// Map their ids to their positions so we can reference them later
		var positionsToIdsMap = sorted.reduce(function(result, item) {
			var top = item.getBoundingClientRect().top;
			result[top] = item.id;
			return result;
		}, {});


		// When we scroll find which is the element we have scrolled past and log its id to console
		document.addEventListener("scroll", function() {
			var scrollValue = window.pageYOffset;
			var elementId = undefined;

			var keys = Object.keys(positionsToIdsMap);
			for (var i = 0; i < keys.length; i++) {
				if (keys[i] > scrollValue) {
					elementId = positionsToIdsMap[keys[i]];
					break;
				}
			}
			// this.window.location.hash = "#" + elementId;
			console.log(this.window);
			console.log(elementId);
		});


		function animate(hashed) {
			// setTimeout(function () {


			console.log(hashed);
			if (hashed.length > 0) {
				console.log($(hashed).offset().top);
				$('html, body').animate({
					scrollTop: $(hashed).offset().top
				}, 800, function() {
					window.location.hash = hashed;
				});
			}
			// }, 3000);
		}


		///Quand on clique sur la croix
		$('.slide_out_area_close').click(function(event) {
			setTimeout(function() {
				if (this.window.location.hash) {
					event.preventDefault();
					var hash = this.window.location.hash;
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {
						window.location.hash = hash;
					});
				}

			}, 1000);

		});

		//Quand on clique sur le layout
		// $('#ajax-content-wrap').click(function(event) {
		// 	setTimeout(function() {
		// 		if (this.window.location.hash) {
		// 			event.preventDefault();
		// 			var hash = this.window.location.hash;
		// 			$('html, body').animate({
		// 				scrollTop: $(hash).offset().top
		// 			}, 800, function() {
		// 				window.location.hash = hash;
		// 			});
		// 		}
		// 	}, 1000);
		// });



		$('.sub-menu a[href*="#"]').click(function(event) {
			document.querySelectorAll(".slide_out_area_close")[0].click();
			// setTimeout(() => {
			animate(event.target.hash);
			// }, 800)

			console.log(event);

		});
	});
</script>
</body>

</html>