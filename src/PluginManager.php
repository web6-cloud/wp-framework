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
	
/**
 * Plugin Management Class.
 */
class PluginManager {

	/**
	 * Class Constructor.
	 */
	public function __construct() {
		add_action( 'tgmpa_register', [ $this, 'registerRequiredPlugins' ] );
	}

	/**
	 * Register Required Plugins.
	 */
	public function registerRequiredPlugins()
	{
	}
}
