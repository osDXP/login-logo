<?php
/**
 * File holding logic related to the DXP Dashboard.
 *
 * @package cf-dxpct
 */

// Hook Custom Updater
add_action('plugins_loaded', function () {
	new OSDXP_Dashboard\OsdxpModuleUpdateChecker(
		OSDXP_LL_UPDATE_URL,
		OSDXP_LL_PLUGIN_FILE,
		OSDXP_LL_PLUGIN_SLUG
	);
});

// Change button text
add_filter('osdxp_manage_button_module_osdxp-login-logo', function () {
	return 'View Website';
});
