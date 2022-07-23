<?php
/**
 * Plugin Manager.
 *
 * @category Utils
 * @package W6/WpFramework
 *
 * @author WEB6 <hello@web6.cloud>
 * @license https://web6.cloud Private License
 * @link web6.cloud
 *
 * @version GIT: <git_id>
 *
 * @source https: //github.com/web6-cloud/wp-framework/
 * @since  1.0
 */

namespace W6\WpFramework;

use \W6\Singleton\SingletonTrait;

/**
 * Plugin Management Class.
 */
class PluginManager {

	use SingletonTrait;

	/**
	 * Required Plugins
	 *
	 * @var array
	 */
	protected $required = [];

	/**
	 * Class Constructor.
	 */
	public function __construct() {
		add_action( 'tgmpa_register', static::registerRequiredPlugins );
	}

	/**
	 * Require Plugin
	 *
	 * Adds a plugin to the required plugins array.
	 *
	 * @param string $name Plugin name.
	 * @param string $slug The Plugin Alias.
	 * @param array  $conf The configuration array.
	 * @return void
	 */
	public static function require( string $name, string $slug, array $conf = [] ):void {
		$t                    = static::instance();
		$conf['required']     = true;
		$t->required[ $slug ] = [
			'name' => $name,
			'conf' => $conf,
		];
	}

	/**
	 * Register Required Plugins.
	 *
	 * - Reads the requirements
	 */
	public static function registerRequiredPlugins() {
		$t = static::instance();
		tgmpa( $t->plugins, $t->config );
	}
}
