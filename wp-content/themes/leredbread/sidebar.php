<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">

	<h2>Contact info</h2>
<p>(555) 343 456 7891</p>
<p>info@leredbread.com</p>
<p>123 Hastings Street</p>
<p>Vancouver, BC V61 2T9, CA</p>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
