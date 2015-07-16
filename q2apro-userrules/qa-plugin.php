<?php

/*
	Plugin Name: Q2APRO User Rules Overrides
	Plugin URI: 
	Plugin Description: Set custom rules for editing
	Plugin Version: 0.1
	Plugin Date: 2015-07-16
	Plugin Author: Question2Answer
	Plugin Author URI: http://www.q2apro.com
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Update Check URI:
	
	Licence: Copyright © q2apro.com - All rights reserved
	
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	// core function overrides 
	qa_register_plugin_overrides('q2apro-userrules-overrides.php');

/*
	Omit PHP closing tag to help avoid accidental output
*/