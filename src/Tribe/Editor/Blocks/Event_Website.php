<?php
class Tribe__Events__Editor__Blocks__Event_Website
extends Tribe__Editor__Blocks__Abstract {

	/**
	 * Which is the name/slug of this block
	 *
	 * @since TBD
	 *
	 * @return string
	 */
	public function slug() {
		return 'event-website';
	}

	/**
	 * Set the default attributes of this block
	 *
	 * @since TBD
	 *
	 * @return string
	 */
	public function default_attributes() {

		$defaults = array(
			'urlLabel' => esc_html__( 'Add Button Text', 'the-events-calendar' ),
			'href'     => tribe_get_event_website_url(),
		);

		return $defaults;
	}

	/**
	 * Since we are dealing with a Dynamic type of Block we need a PHP method to render it
	 *
	 * @since TBD
	 *
	 * @param  array $attributes
	 *
	 * @return string
	 */
	public function render( $attributes = array() ) {
		$args['attributes'] = $this->attributes( $attributes );

		// Add the rendering attributes into global context
		tribe( 'events.editor.template' )->add_template_globals( $args );

		return tribe( 'events.editor.template' )->template( array( 'blocks', $this->slug() ), $args, false );
	}

	/**
	 * Register the Assets for when this block is active
	 *
	 * @since TBD
	 *
	 * @return void
	 */
	public function assets() {
		tribe_asset(
			tribe( 'tec.main' ),
			'tribe-events-block-' . $this->slug(),
			'app/' . $this->slug() . '/frontend.css',
			array(),
			'wp_enqueue_scripts',
			array(
				'conditionals' => array( $this, 'has_block' ),
			)
		);
	}
}
