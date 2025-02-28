<?php

/**
 * WordPress Plugin
 *
 * @package     WordPressPlugin
 * @author      dxw
 * @copyright   2020
 * @license     MIT
 *
 * @wordpress-plugin
 * Plugin Name: Nelio AB On Staging
 * Plugin URI: https://github.com/dxw/nelio-ab-on-staging
 * Description: Enable full Nelio AB Testing functionality on staging environments. Not required on prod.
 * Author: dxw
 * Version: 1.0.0
 */

add_filter('nab_staging_urls', function () {
	return [];
});