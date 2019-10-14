<?php
/**
 * [WeEngine System] Copyright (c) 2014 W7.CC
 * $sn$.
 */
defined('IN_IA') or exit('Access Denied');

/**
 * 微信平台公众号业务操作类.
 */
class ToutiaoappAccount extends WeAccount {
	protected $tablename = 'account_toutiaoapp';
	protected $menuFrame = 'wxapp';
	protected $type = ACCOUNT_TYPE_TOUTIAOAPP_NORMAL;
	protected $typeName = '头条小程序';
	protected $typeTempalte = '-toutiaoapp';
	protected $typeSign = TOUTIAOAPP_TYPE_SIGN;
	protected $supportVersion = STATUS_ON;

	protected function getAccountInfo($acid) {
		return table('account_toutiaoapp')->getAccount($acid);
	}
}
