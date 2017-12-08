<?php

/*
	Plugin Name: Category/Tag Email Notification
	Plugin URI: https://github.com/PublicityPort/q2a-email-notification
	Plugin Description: Notifies a user when a new question is asked in his favorite tag or category. Forked from, https://github.com/amiyasahu/q2a-email-notification
	Plugin Version: 1.3
	Plugin Date: 2017-12-08
	Plugin Author: Publicity Port
	Plugin Author URI: https://publicityport.com/
	Plugin License: MIT License
	Plugin Minimum Question2Answer Version: 1.7.5
	Plugin Update Check URI: https://raw.githubusercontent.com/PublicityPort/q2a-email-notification/master/qa-plugin.php
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('event', 'qa-email-notifications-event.php', 'qa_email_notifications_event', 'Category/Tag Email Notifications');
qa_register_plugin_phrases('language/qa-email-notification-lang-*.php', 'notify');

/*
        Omit PHP closing tag to help avoid accidental output
*/

