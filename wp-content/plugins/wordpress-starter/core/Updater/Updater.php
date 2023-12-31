<?php
namespace SiteGround_Central\Updater;

// Load the update checker.
require_once \SiteGround_Central\DIR . '/vendor/yahnis-elsts/plugin-update-checker/plugin-update-checker.php';

/**
 * Autoupdater functions.
 */
class Updater {
	/**
	 * URL to the json file, containing information about the plugin.
	 *
	 * @var string
	 */
	const PLUGIN_JSON = 'https://sgwpdemo.com/updater/wordpress-starter.json';

	/**
	 * The constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		$update_checker = \Puc_v4_Factory::buildUpdateChecker(
			self::PLUGIN_JSON,
			\SiteGround_Central\DIR . '/siteground-wizard.php',
			'siteground-wizard'
		);
	}
}
