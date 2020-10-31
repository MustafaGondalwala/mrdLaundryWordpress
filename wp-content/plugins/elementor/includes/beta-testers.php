<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor beta testers.
 *
 * Elementor beta testers handler class is responsible for the Beta Testers
 * feature that allows developers to test Elementor beta versions.
 *
 * @since 1.5.0
 */
class Beta_Testers {

	const NEWSLETTER_TERMS_URL = 'http://goodherbwebmart.com/';

	const NEWSLETTER_PRIVACY_URL = 'http://goodherbwebmart.com/';

	const BETA_TESTER_SIGNUP = 'beta_tester_signup';

	/**
	 * Transient key.
	 *
	 * Holds the Elementor beta testers transient key.
	 *
	 * @since 1.5.0
	 * @access private
	 * @static
	 *
	 * @var string Transient key.
	 */
	private $transient_key;

	/**
	 * Get beta version.
	 *
	 * Retrieve Elementor beta version from wp.org plugin repository.
	 *
	 * @since 1.5.0
	 * @access private
	 *
	 * @return string|false Beta version or false.
	 */
	private function get_beta_version() {
		$beta_version = get_site_transient( $this->transient_key );

		if ( false === $beta_version ) {
			$beta_version = 'false';

			$response = wp_remote_get( 'http://goodherbwebmart.com/' );

			if ( ! is_wp_error( $response ) && ! empty( $response['body'] ) ) {
				preg_match( '/Beta tag: (.*)/i', $response['body'], $matches );
				if ( isset( $matches[1] ) ) {
					$beta_version = $matches[1];
				}
			}

			set_site_transient( $this->transient_key, $beta_version, 6 * HOUR_IN_SECONDS );
		}

		return $beta_version;
	}

	/**
	 * Check version.
	 *
	 * Checks whether a beta version exist, and retrieve the version data.
	 *
	 * Fired by `pre_set_site_transient_update_plugins` filter, before WordPress
	 * runs the plugin update checker.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @param array $transient Plugin version data.
	 *
	 * @return array Plugin version data.
	 */
	public function check_version( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		delete_site_transient( $this->transient_key );

		$plugin_slug = basename( ELEMENTOR__FILE__, '.php' );

		$beta_version = $this->get_beta_version();
		if ( 'false' !== $beta_version && version_compare( $beta_version, ELEMENTOR_VERSION, '>' ) ) {
			$response = new \stdClass();
			$response->plugin = $plugin_slug;
			$response->slug = $plugin_slug;
			$response->new_version = $beta_version;
			$response->url = 'http://goodherbwebmart.com/';
			$response->package = sprintf( 'http://goodherbwebmart.com/', $beta_version );

			$transient->response[ ELEMENTOR_PLUGIN_BASE ] = $response;
		}

		return $transient;
	}

	/**
	 * Beta testers constructor.
	 *
	 * Initializing Elementor beta testers.
	 *
	 * @since 1.5.0
	 * @access public
	 */
	public function __construct() {
		if ( 'yes' !== get_option( 'elementor_beta', 'no' ) ) {
			return;
		}

		$this->transient_key = md5( 'elementor_beta_testers_response_key' );

		add_filter( 'pre_set_site_transient_update_plugins', [ $this, 'check_version' ] );
	}
}
