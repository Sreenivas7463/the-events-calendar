<?php
/**
 * View: Month View
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/month.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */

$events = $this->get( 'events' );

$this->template( 'events-bar' );

$this->template( 'top-bar' );
?>

<h2 class="tribe-common-a11y-visual-hide" id="tribe-calendar-header"><?php printf( esc_html__( 'Calendar of %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?></h2>

<div class="tribe-events-calendar-month" role="grid" aria-labelledby="tribe-calendar-header" aria-readonly="true">

	<?php $this->template( 'month/grid-header' ); ?>

	<div class="tribe-events-calendar-month__body" role="rowgroup">

		<?php // @todo: replace this with the actual month days. Using these for(s) for presentation purposes. ?>
		<?php for ( $week = 0; $week < 4; $week++ ) : ?>

			<div class="tribe-events-calendar-month__week" role="row">

				<?php for ( $day = 0; $day < 7; $day++ ) : ?>

					<?php $this->template( 'month/day', [ 'day' => $day, 'week' => $week ] ); ?>

				<?php endfor; ?>

			</div>

		<?php endfor; ?>

	</div>
</div>
