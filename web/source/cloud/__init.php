<?php
/**
 * 云服务相关
 * [WeEngine System] Copyright (c) 2014 W7.CC.
 */
defined('IN_IA') or exit('Access Denied');

if (in_array($action, array('sms', 'sms-sign'))) {
	define('FRAME', 'system');
}
if ('process' == $action) {
	define('FRAME', '');
} else {
	define('FRAME', 'site');
}

if (in_array($action, array('device', 'callback', 'appstore'))) {
	$do = $action;
	$action = 'redirect';
}

if ('touch' == $action) {
	exit('success');
}
