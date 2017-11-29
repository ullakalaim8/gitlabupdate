<?php 
/*
	Plugin Name: Gitlab
	Description: This is for updating your Wordpress plugin.
	Version: 8.0.6
	Author: Mohammed kalimulla
	Author URI: http://www.lsnsoft.com/
*/

include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );

$updater = new Gitlab_Updater( __FILE__ );
//$updater->set_username( 'rayman813' );
$updater->set_repository( 'gitlab-test' );
$updater->api('http://172.161.0.102');
$updater->set_repository(4);
$updater->authorize( 'DsknQsX81pWQD342WK1H' ); // Your auth code goes here for private repos
$updater->initialize();
