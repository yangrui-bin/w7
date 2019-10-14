<?php
/**
 * [WeEngine System] Copyright (c) 2014 W7.CC
 * $sn$.
 */
defined('IN_IA') or exit('Access Denied');

/**
 * 微信平台公众号业务操作类.
 */
class AliappAccount extends WeAccount {
	protected $tablename = 'account_aliapp';
	protected $menuFrame = 'wxapp';
	protected $type = ACCOUNT_TYPE_ALIAPP_NORMAL;
	protected $typeName = '支付宝小程序';
	protected $typeTempalte = '-aliapp';
	protected $typeSign = ALIAPP_TYPE_SIGN;
	protected $supportVersion = STATUS_ON;

	protected function getAccountInfo($acid) {
		return table('account_aliapp')->getAccount($acid);
	}
}
