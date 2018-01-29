<?php
/**
 * Plugin Name: UCF Header Bar Plugin DISABLER
 * Description: Prevent the UCF Header Bar from loading. Useful for network-activating the UCF Header Bar, then disabling it on specific sites by activating this plugin on those sites.
 * Version: 1.0
 * Author: Stephen Schrauger
 */

/**
 * Created by PhpStorm.
 * User: stephen
 * Date: 2018-01-29
 * Time: 12:45 PM
 */


/**
 * Disable the JS loading from the UCF Header Bar plugin.
 * This will prevent the header from loading.
 */
add_action('plugins_loaded', 'ucf_header_bar_disabler');
function ucf_header_bar_disabler() {
    remove_action ('wp_enqueue_scripts', 'ucf_header_script');
    remove_filter('clean_url', 'add_id_to_ucfhb', 10, 3);
}