<?php
/**
 * Plugin review class.
 * Prompts users to give a review of the plugin on WordPress.org after a period of usage.
 *
 * Heavily based on code by Rhys Wynne
 * https://winwar.co.uk/2014/10/ask-wordpress-plugin-reviews-week/
 *
 * @package   Travelera Lite
 * @author    BloomPixel
 * @link      https://www.bloompixel.com
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main Travelera Lite Feedback Notice Class
 */
class Travelera_Lite_Feedback {

	/**
	 * Slug.
	 *
	 * @var string $slug
	 */
	private $slug;

	/**
	 * Name.
	 *
	 * @var string $name
	 */
	private $name;

	/**
	 * Time limit.
	 *
	 * @var string $time_limit
	 */
	private $time_limit;

	/**
	 * No Bug Option.
	 *
	 * @var string $nobug_option
	 */
	public $nobug_option;

	/**
	 * Activation Date Option.
	 *
	 * @var string $date_option
	 */
	public $date_option;

	/**
	 * Class constructor.
	 *
	 * @param string $args Arguments.
	 */
	public function __construct( $args ) {

		$this->slug = $args['slug'];
		$this->name = $args['name'];

		$this->date_option  = $this->slug . '_activation_date';
		$this->nobug_option = $this->slug . '_no_bug';

		if ( isset( $args['time_limit'] ) ) {
			$this->time_limit = $args['time_limit'];
		} else {
			$this->time_limit = WEEK_IN_SECONDS;
		}

		// Add actions.
		add_action( 'admin_init', array( $this, 'check_installation_date' ) );
		add_action( 'admin_init', array( $this, 'set_no_bug' ), 5 );
	}

	/**
	 * Seconds to words.
	 *
	 * @param string $seconds Seconds in time.
	 */
	public function seconds_to_words( $seconds ) {

		// Get the years.
		$years = ( intval( $seconds ) / YEAR_IN_SECONDS ) % 100;
		if ( $years > 1 ) {
			/* translators: Number of years */
			return sprintf( __( '%s years', 'travelera-lite' ), $years );
		} elseif ( $years > 0 ) {
			return __( 'a year', 'travelera-lite' );
		}

		// Get the weeks.
		$weeks = ( intval( $seconds ) / WEEK_IN_SECONDS ) % 52;
		if ( $weeks > 1 ) {
			/* translators: Number of weeks */
			return sprintf( __( '%s weeks', 'travelera-lite' ), $weeks );
		} elseif ( $weeks > 0 ) {
			return __( 'a week', 'travelera-lite' );
		}

		// Get the days.
		$days = ( intval( $seconds ) / DAY_IN_SECONDS ) % 7;
		if ( $days > 1 ) {
			/* translators: Number of days */
			return sprintf( __( '%s days', 'travelera-lite' ), $days );
		} elseif ( $days > 0 ) {
			return __( 'a day', 'travelera-lite' );
		}

		// Get the hours.
		$hours = ( intval( $seconds ) / HOUR_IN_SECONDS ) % 24;
		if ( $hours > 1 ) {
			/* translators: Number of hours */
			return sprintf( __( '%s hours', 'travelera-lite' ), $hours );
		} elseif ( $hours > 0 ) {
			return __( 'an hour', 'travelera-lite' );
		}

		// Get the minutes.
		$minutes = ( intval( $seconds ) / MINUTE_IN_SECONDS ) % 60;
		if ( $minutes > 1 ) {
			/* translators: Number of minutes */
			return sprintf( __( '%s minutes', 'travelera-lite' ), $minutes );
		} elseif ( $minutes > 0 ) {
			return __( 'a minute', 'travelera-lite' );
		}

		// Get the seconds.
		$seconds = intval( $seconds ) % 60;
		if ( $seconds > 1 ) {
			/* translators: Number of seconds */
			return sprintf( __( '%s seconds', 'travelera-lite' ), $seconds );
		} elseif ( $seconds > 0 ) {
			return __( 'a second', 'travelera-lite' );
		}
	}

	/**
	 * Check date on admin initiation and add to admin notice if it was more than the time limit.
	 */
	public function check_installation_date() {

		if ( ! get_site_option( $this->nobug_option ) || false === get_site_option( $this->nobug_option ) ) {

			add_site_option( $this->date_option, time() );

			// Retrieve the activation date.
			$install_date = get_site_option( $this->date_option );

			// If difference between install date and now is greater than time limit, then display notice.
			if ( ( time() - $install_date ) > $this->time_limit ) {
				add_action( 'admin_notices', array( $this, 'display_admin_notice' ) );
			}
		}
	}

	/**
	 * Display the admin notice.
	 */
	public function display_admin_notice() {

		$no_bug_url = wp_nonce_url( admin_url( 'themes.php?' . $this->nobug_option . '=true' ), 'travelera-lite-feedback-nounce' );
		$time       = $this->seconds_to_words( time() - get_site_option( $this->date_option ) );
		?>

		<style>
		.notice.travelera-lite-notice {
			border-left-color: #f26a44 !important;
			padding: 20px;
		}
		.rtl .notice.travelera-lite-notice {
			border-right-color: #f26a44 !important;
		}
		.notice.notice.travelera-lite-notice .travelera-lite-notice-inner {
			display: table;
			width: 100%;
		}
		.notice.travelera-lite-notice .travelera-lite-notice-inner .travelera-lite-notice-content,
		.notice.travelera-lite-notice .travelera-lite-notice-inner .travelera-lite-install-now {
			display: table-cell;
			vertical-align: middle;
		}
		.notice.travelera-lite-notice .travelera-lite-notice-content {
			padding: 0 40px 0 20px;
		}
		.notice.travelera-lite-notice p {
			padding: 0;
			margin: 0;
		}
		.notice.travelera-lite-notice h3 {
			margin: 0 0 5px;
		}
		.notice.travelera-lite-notice .travelera-lite-install-now {
			text-align: center;
		}
		.notice.travelera-lite-notice .travelera-lite-install-now .travelera-lite-install-button {
			padding: 6px 50px;
			height: auto;
			line-height: 20px;
			background: #f26a44;
			border-color: #c15233 #c15233 #c15233;
			box-shadow: 0 1px 0 #c15233;
			text-shadow: 0 -1px 1px #c15233, 1px 0 1px #c15233, 0 1px 1px #c15233, -1px 0 1px #c15233;
		}
		.notice.travelera-lite-notice .travelera-lite-install-now .travelera-lite-install-button:hover {
			background: #182b96;
		}
		.notice.travelera-lite-notice a.no-thanks {
			display: block;
			margin-top: 10px;
			color: #72777c;
			text-decoration: none;
		}

		.notice.travelera-lite-notice a.no-thanks:hover {
			color: #444;
		}

		@media (max-width: 767px) {

			.notice.notice.travelera-lite-notice .travelera-lite-notice-inner {
				display: block;
			}
			.notice.travelera-lite-notice {
				padding: 20px !important;
			}
			.notice.travelera-lite-noticee .travelera-lite-notice-inner {
				display: block;
			}
			.notice.travelera-lite-notice .travelera-lite-notice-inner .travelera-lite-notice-content {
				display: block;
				padding: 0;
			}
			.notice.travelera-lite-notice .travelera-lite-notice-inner .travelera-lite-notice-icon {
				display: none;
			}

			.notice.travelera-lite-notice .travelera-lite-notice-inner .travelera-lite-install-now {
				margin-top: 20px;
				display: block;
				text-align: left;
			}

			.notice.travelera-lite-notice .travelera-lite-notice-inner .no-thanks {
				display: inline-block;
				margin-left: 15px;
			}
		}
		</style>
		<div class="notice updated travelera-lite-notice">
			<div class="travelera-lite-notice-inner">
				<div class="travelera-lite-notice-content">
					<?php /* translators: 1. Name */ ?>
					<h3><?php printf( esc_html__( 'Are you enjoying %s?', 'travelera-lite' ), esc_html( $this->name ) ); ?></h3>
					<p>
						<?php /* translators: 1. Name, 2. Time */ ?>
						<?php printf( esc_html__( 'You have been using %1$s for %2$s now. Mind leaving a review to let us know what you think? We\'d really appreciate it!', 'travelera-lite' ), esc_html( $this->name ), esc_html( $time ) ); ?>
					</p>
				</div>
				<div class="travelera-lite-install-now">
					<?php printf( '<a href="%1$s" class="button button-primary travelera-lite-install-button" target="_blank">%2$s</a>', esc_url( 'https://wordpress.org/support/theme/travelera-lite/reviews/#new-post' ), esc_html__( 'Leave a Review', 'travelera-lite' ) ); ?>
					<a href="<?php echo esc_url( $no_bug_url ); ?>" class="no-thanks"><?php echo esc_html__( 'No thanks / I already have', 'travelera-lite' ); ?></a>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Set the plugin to no longer bug users if user asks not to be.
	 */
	public function set_no_bug() {

		// Bail out if not on correct page.
		if ( ! isset( $_GET['_wpnonce'] ) || ( ! wp_verify_nonce( $_GET['_wpnonce'], 'travelera-lite-feedback-nounce' ) || ! is_admin() || ! isset( $_GET[ $this->nobug_option ] ) || ! current_user_can( 'manage_options' ) ) ) {
			return;
		}

		add_site_option( $this->nobug_option, true );
	}
}

/*
* Instantiate the Travelera_Lite_Feedback class.
*/
new Travelera_Lite_Feedback(
	array(
		'slug'       => 'travelera-lite',
		'name'       => __( 'Travelera Lite', 'travelera-lite' ),
		'time_limit' => WEEK_IN_SECONDS,
	)
);
