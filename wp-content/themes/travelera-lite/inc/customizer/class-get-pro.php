<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Travelera_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'inc/customizer/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Travelera_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Travelera_Lite_Customize_Section_Pro(
				$manager,
				'get_pro',
				array(
					'title'    => esc_html__( 'Get more options in Travelera Pro!', 'travelera-lite' ),
					'pro_text' => esc_html__( 'Go Pro',         'travelera-lite' ),
					'pro_url'  => 'https://www.bloompixel.com/wordpress-themes/travelera/?utm_source=customizer&utm_medium=pro-link&utm_campaign=get-pro',
					'priority' => 1,
				)
			)
		);
	}
}

// Doing this customizer thang!
Travelera_Lite_Customize::get_instance();