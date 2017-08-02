<?php

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) 
	exit();

$ams_hppt_option = 'ams-hide-page-and-post-title';
delete_post_meta_by_key( $ams_hppt_option );
?>