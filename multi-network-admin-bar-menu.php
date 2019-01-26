<?php
/*
Plugin Name: Plugin Update Checker
Plugin URI: https://hegeman.me
Description: Plugin Update Checker
Version: 0.2
Author: Jeff Hegeman
Author URI: https://hegeman.me
Text Domain: plugin-update-checker
*/

class Plugin_Update_Checker {
    function __construct() {
        add_action('init', array( $this, 'action_init' ));
        require 'plugin-update-checker/plugin-update-checker.php';
        $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/hegemanjr/plugin-update-test',
            __FILE__,
            'plugin-update-checker'
        );
        $myUpdateChecker->setBranch('master');
//        $myUpdateChecker->setBranch('develop');
    }

    function action_init(){
    }
}
new Plugin_Update_Checker();