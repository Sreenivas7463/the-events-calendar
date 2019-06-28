<?php
/**
 * View: Top Bar - Date Picker
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/top-bar/datepicker.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */
?>
<button
	class="tribe-common-h3 tribe-common-h3--alt tribe-events-c-top-bar__datepicker-button"
	data-js="tribe-events-top-bar-datepicker-button"
>
	<?php esc_html_e( 'Now', 'the-events-calendar' ); ?> &mdash; <time datetime="<?php echo esc_attr( date( 'Y-m-d', time() ) ); ?>"><?php echo date( 'F jS, Y', time() ); ?></time>
</button>
