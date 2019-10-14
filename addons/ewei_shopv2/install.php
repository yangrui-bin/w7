<?php
$installSql = <<<sql
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_abonus_bill` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billno` varchar(100) DEFAULT '' COMMENT '',
`paytype` int(11) DEFAULT '0' COMMENT '',
`year` int(11) DEFAULT '0' COMMENT '',
`month` int(11) DEFAULT '0' COMMENT '',
`week` int(11) DEFAULT '0' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`aagentcount1` int(11) DEFAULT '0' COMMENT '',
`aagentcount2` int(11) DEFAULT '0' COMMENT '',
`aagentcount3` int(11) DEFAULT '0' COMMENT '',
`bonusmoney1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_send1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_pay1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_send2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_pay2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_send3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_pay3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`confirmtime` int(11) DEFAULT '0' COMMENT '',
`ceshi` int(11) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_paytype` (`paytype`),
KEY `idx_createtime` (`createtime`),
KEY `idx_paytime` (`paytime`),
KEY `idx_status` (`status`),
KEY `idx_month` (`month`),
KEY `idx_week` (`week`),
KEY `idx_year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_abonus_billo` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_abonus_billp` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`payno` varchar(255) DEFAULT '' COMMENT '',
`paytype` tinyint(3) DEFAULT '0' COMMENT '',
`bonus1` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`bonus2` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`bonus3` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`money1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`money2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`money3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`chargemoney1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`chargemoney2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`chargemoney3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`reason` varchar(255) DEFAULT '' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_abonus_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`levelname` varchar(50) DEFAULT '' COMMENT '',
`bonus1` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`bonus2` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`bonus3` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`bonusmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`downcount` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_address_applyfor` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`openid` varchar(11) COMMENT '',
`data` text COMMENT '',
`orderid` int(11) COMMENT '',
`ordersn` varchar(255) COMMENT '',
`isdispose` tinyint(1) DEFAULT '0' COMMENT '',
`message` varchar(255) COMMENT '',
`createtime` int(11) COMMENT '',
`ispass` tinyint(1) DEFAULT '0' COMMENT '',
`isdelete` tinyint(4) DEFAULT '0' COMMENT '',
`isall` tinyint(4) DEFAULT '0' COMMENT '',
`old_address` text COMMENT '',
`cycleid` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
`iswxapp` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_area_config` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`new_area` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`address_street` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`article_title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`resp_desc` text NOT NULL COMMENT '',
`resp_img` text NOT NULL COMMENT '',
`article_content` longtext COMMENT '',
`article_category` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_date_v` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`article_date` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`article_mp` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`article_author` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`article_readnum_v` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_readnum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_likenum_v` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_likenum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_linkurl` varchar(300) NOT NULL DEFAULT '' COMMENT '',
`article_rule_daynum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_allnum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_credit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`page_set_option_nocopy` int(1) NOT NULL DEFAULT '0' COMMENT '',
`page_set_option_noshare_tl` int(1) NOT NULL DEFAULT '0' COMMENT '',
`page_set_option_noshare_msg` int(1) NOT NULL DEFAULT '0' COMMENT '',
`article_keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_report` int(1) NOT NULL DEFAULT '0' COMMENT '',
`product_advs_type` int(1) NOT NULL DEFAULT '0' COMMENT '',
`product_advs_title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`product_advs_more` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`product_advs_link` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`product_advs` text NOT NULL COMMENT '',
`article_state` int(1) NOT NULL DEFAULT '0' COMMENT '',
`network_attachment` varchar(255) DEFAULT '' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_credittotal` int(11) DEFAULT '0' COMMENT '',
`article_rule_moneytotal` decimal(10,2) DEFAULT '0.00' COMMENT '',
`article_rule_credit2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_money2` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`article_rule_creditm` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_moneym` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`article_rule_creditm2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_rule_moneym2` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`article_readtime` int(11) DEFAULT '0' COMMENT '',
`article_areas` varchar(255) DEFAULT '' COMMENT '',
`article_endtime` int(11) DEFAULT '0' COMMENT '',
`article_hasendtime` tinyint(3) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`article_keyword2` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_advance` int(11) DEFAULT '0' COMMENT '',
`article_virtualadd` tinyint(3) DEFAULT '0' COMMENT '',
`article_visit` tinyint(3) DEFAULT '0' COMMENT '',
`article_visit_level` text COMMENT '',
`article_visit_tip` varchar(500) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_article_title` (`article_title`),
KEY `idx_article_content` (`article_content`),
KEY `idx_article_keyword` (`article_keyword`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`category_name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`isshow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_category_name` (`category_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_comment` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`articleid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`nickname` varchar(50) DEFAULT '' COMMENT '',
`headimgurl` varchar(255) DEFAULT '' COMMENT '',
`content` varchar(500) DEFAULT '' COMMENT '',
`reply_createtime` int(11) COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`reply_content` varchar(500) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`aid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`read` int(11) NOT NULL DEFAULT '0' COMMENT '',
`like` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_aid` (`aid`),
KEY `idx_openid` (`openid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_report` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`mid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`aid` int(11) DEFAULT '0' COMMENT '',
`cate` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`cons` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_share` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`aid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`share_user` int(11) NOT NULL DEFAULT '0' COMMENT '',
`click_user` int(11) NOT NULL DEFAULT '0' COMMENT '',
`click_date` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`add_credit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`add_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_aid` (`aid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_article_sys` (
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_message` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_image` varchar(300) NOT NULL DEFAULT '' COMMENT '',
`article_shownum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_temp` int(11) NOT NULL DEFAULT '0' COMMENT '',
`article_source` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`article_close_advanced` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
PRIMARY KEY (`uniacid`),
KEY `idx_article_message` (`article_message`),
KEY `idx_article_keyword` (`article_keyword`),
KEY `idx_article_title` (`article_title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_bill` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billno` varchar(100) DEFAULT '' COMMENT '',
`paytype` int(11) DEFAULT '0' COMMENT '',
`year` int(11) DEFAULT '0' COMMENT '',
`month` int(11) DEFAULT '0' COMMENT '',
`week` int(11) DEFAULT '0' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusrate` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_send` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`partnercount` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`confirmtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_paytype` (`paytype`),
KEY `idx_createtime` (`createtime`),
KEY `idx_paytime` (`paytime`),
KEY `idx_status` (`status`),
KEY `idx_month` (`month`),
KEY `idx_week` (`week`),
KEY `idx_year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_billo` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`authorid` int(11) COMMENT '',
`orderid` text COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_billp` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`payno` varchar(255) DEFAULT '' COMMENT '',
`paytype` tinyint(3) DEFAULT '0' COMMENT '',
`bonus` decimal(10,2) DEFAULT '0.00' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`chargemoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`reason` varchar(255) DEFAULT '' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`levelname` varchar(50) DEFAULT '' COMMENT '',
`bonus` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`commissionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`downcount` int(11) DEFAULT '0' COMMENT '',
`bonus_fg` varchar(500) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_team` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`teamno` varchar(50) DEFAULT '' COMMENT '',
`year` int(11) DEFAULT '0' COMMENT '',
`month` int(11) DEFAULT '0' COMMENT '',
`team_count` int(11) DEFAULT '0' COMMENT '',
`team_ids` longtext COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `teamno` (`teamno`),
KEY `year` (`year`),
KEY `month` (`month`),
KEY `status` (`status`),
KEY `createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_author_team_pay` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`teamid` int(11) DEFAULT '0' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`payno` varchar(255) DEFAULT '' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_teamid` (`teamid`),
KEY `idx_mid` (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_banner` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`bannername` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
`iswxapp` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_account` (
`id` int(11) NOT NULL COMMENT '',
`mall_name` varchar(255) COMMENT '',
`banner` varchar(255) COMMENT '',
`mall_title` varchar(255) COMMENT '',
`mall_content` varchar(255) COMMENT '',
`mall_logo` varchar(255) COMMENT '',
`message` int(11) DEFAULT '0' COMMENT '',
`partin` int(11) DEFAULT '0' COMMENT '',
`rule` text COMMENT '',
`end_message` int(11) DEFAULT '0' COMMENT '',
`follow_swi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`sharestyle` tinyint(1) NOT NULL DEFAULT '0' COMMENT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_actor` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`goods_id` int(11) NOT NULL COMMENT '',
`now_price` decimal(9,2) NOT NULL COMMENT '',
`created_time` datetime NOT NULL COMMENT '',
`update_time` datetime NOT NULL COMMENT '',
`bargain_times` int(10) NOT NULL COMMENT '',
`openid` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`nickname` varchar(20) NOT NULL COMMENT '',
`head_image` varchar(200) NOT NULL COMMENT '',
`bargain_price` decimal(9,2) NOT NULL COMMENT '',
`status` tinyint(2) NOT NULL COMMENT '',
`account_id` int(11) NOT NULL COMMENT '',
`initiate` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
`order` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_openid` (`openid`),
KEY `idx_account_id` (`account_id`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`account_id` int(11) NOT NULL COMMENT '',
`goods_id` varchar(20) NOT NULL COMMENT '',
`end_price` decimal(10,2) NOT NULL COMMENT '',
`start_time` datetime NOT NULL COMMENT '',
`end_time` datetime NOT NULL COMMENT '',
`status` tinyint(2) NOT NULL COMMENT '',
`type` tinyint(2) NOT NULL COMMENT '',
`user_set` text COMMENT '',
`rule` text COMMENT '',
`act_times` int(11) NOT NULL COMMENT '',
`mode` tinyint(4) NOT NULL COMMENT '',
`total_time` int(11) NOT NULL COMMENT '',
`each_time` int(11) NOT NULL COMMENT '',
`time_limit` int(11) NOT NULL COMMENT '',
`probability` text NOT NULL COMMENT '',
`custom` varchar(255) COMMENT '',
`maximum` int(11) COMMENT '',
`initiate` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
`myself` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_record` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`actor_id` int(11) NOT NULL COMMENT '',
`bargain_price` decimal(9,2) NOT NULL COMMENT '',
`openid` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`nickname` varchar(20) NOT NULL COMMENT '',
`head_image` varchar(200) NOT NULL COMMENT '',
`bargain_time` datetime NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_openid` (`openid`),
KEY `idx_actor_id` (`actor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_carrier` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`realname` varchar(50) DEFAULT '' COMMENT '',
`mobile` varchar(50) DEFAULT '' COMMENT '',
`address` varchar(255) DEFAULT '' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_deleted` (`deleted`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`catename` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_clearing` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`clearno` varchar(64) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`remark` varchar(500) DEFAULT '' COMMENT '',
`orderids` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`paytype` tinyint(1) DEFAULT '0' COMMENT '',
`payinfo` varchar(1000) DEFAULT '' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `storeid` (`cashierid`),
KEY `status` (`status`),
KEY `createtime` (`createtime`),
KEY `deleted` (`deleted`),
KEY `clearno` (`clearno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_goods` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(10) unsigned DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`image` varchar(255) DEFAULT '' COMMENT '',
`categoryid` tinyint(1) DEFAULT '0' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`goodssn` varchar(50) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `cashierid` (`cashierid`),
KEY `goodssn` (`goodssn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_goods_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`catename` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_cashierid` (`cashierid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_operator` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`manageopenid` varchar(50) DEFAULT '' COMMENT '',
`username` varchar(255) DEFAULT '' COMMENT '',
`password` varchar(50) DEFAULT '' COMMENT '',
`salt` varchar(8) DEFAULT '' COMMENT '',
`perm` text COMMENT '',
`createtime` int(10) unsigned DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `cashierid` (`cashierid`),
KEY `manageopenid` (`manageopenid`),
KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_order` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`ordersn` varchar(255) DEFAULT '' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`payopenid` varchar(50) DEFAULT '' COMMENT '',
`createtime` int(10) unsigned DEFAULT '0' COMMENT '',
`status` tinyint(4) DEFAULT '0' COMMENT '',
`paytime` int(10) unsigned DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_pay_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`operatorid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`paytype` tinyint(3) COMMENT '',
`logno` varchar(255) DEFAULT '' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`is_applypay` tinyint(1) DEFAULT '0' COMMENT '',
`randommoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`enough` decimal(10,2) DEFAULT '0.00' COMMENT '',
`mobile` varchar(20) DEFAULT '' COMMENT '',
`deduction` decimal(10,2) DEFAULT '0.00' COMMENT '',
`discountmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`discount` decimal(5,2) DEFAULT '0.00' COMMENT '',
`isgoods` tinyint(1) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`orderprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goodsprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`couponpay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`payopenid` varchar(50) DEFAULT '' COMMENT '',
`nosalemoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`coupon` int(11) DEFAULT '0' COMMENT '',
`usecoupon` int(11) DEFAULT '0' COMMENT '',
`usecouponprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`present_credit1` int(11) DEFAULT '0' COMMENT '',
`refundsn` varchar(50) DEFAULT '' COMMENT '',
`refunduser` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`paytype`),
KEY `idx_createtime` (`createtime`),
KEY `idx_status` (`status`),
KEY `idx_storeid` (`cashierid`),
KEY `idx_logno` (`logno`),
KEY `is_applypay` (`is_applypay`),
KEY `orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_pay_log_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`cashierid` int(11) DEFAULT '0' COMMENT '',
`logid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `logid` (`logid`),
KEY `goodsid` (`goodsid`),
KEY `cashierid` (`cashierid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_qrcode` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cashierid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`goodstitle` varchar(255) DEFAULT '' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(10) unsigned COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `cashierid` (`cashierid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cashier_user` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`storeid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`setmeal` tinyint(3) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`manageopenid` varchar(50) DEFAULT '' COMMENT '',
`isopen_commission` tinyint(1) DEFAULT '0' COMMENT '',
`name` varchar(50) DEFAULT '' COMMENT '',
`mobile` varchar(50) DEFAULT '' COMMENT '',
`categoryid` int(11) DEFAULT '0' COMMENT '',
`wechat_status` tinyint(1) DEFAULT '0' COMMENT '',
`wechatpay` text COMMENT '',
`alipay_status` tinyint(1) DEFAULT '0' COMMENT '',
`alipay` text COMMENT '',
`withdraw` decimal(10,2) DEFAULT '0.00' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`diyformfields` text COMMENT '',
`diyformdata` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`username` varchar(255) DEFAULT '' COMMENT '',
`password` varchar(32) DEFAULT '' COMMENT '',
`salt` char(8) DEFAULT '' COMMENT '',
`lifetimestart` int(10) unsigned DEFAULT '0' COMMENT '',
`lifetimeend` int(10) unsigned DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`set` longtext COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`can_withdraw` tinyint(1) DEFAULT '0' COMMENT '',
`show_paytype` tinyint(1) DEFAULT '0' COMMENT '',
`couponid` varchar(255) DEFAULT '' COMMENT '',
`management` varchar(1000) DEFAULT '' COMMENT '',
`notice_openids` varchar(500) COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `openid` (`manageopenid`),
KEY `username` (`username`),
KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`parentid` int(11) DEFAULT '0' COMMENT '',
`isrecommand` int(10) DEFAULT '0' COMMENT '',
`description` varchar(500) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`ishome` tinyint(3) DEFAULT '0' COMMENT '',
`advimg` varchar(255) DEFAULT '' COMMENT '',
`advurl` varchar(500) DEFAULT '' COMMENT '',
`level` tinyint(3) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`),
KEY `idx_parentid` (`parentid`),
KEY `idx_isrecommand` (`isrecommand`),
KEY `idx_ishome` (`ishome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_city_express` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`start_fee` decimal(10,2) DEFAULT '0.00' COMMENT '',
`start_km` int(11) DEFAULT '0' COMMENT '',
`pre_km` int(11) DEFAULT '0' COMMENT '',
`pre_km_fee` decimal(10,2) DEFAULT '0.00' COMMENT '',
`fixed_km` int(11) DEFAULT '0' COMMENT '',
`fixed_fee` decimal(10,2) DEFAULT '0.00' COMMENT '',
`receive_goods` int(11) COMMENT '',
`lng` varchar(255) DEFAULT '' COMMENT '',
`lat` varchar(255) DEFAULT '' COMMENT '',
`range` int(11) DEFAULT '0' COMMENT '',
`zoom` int(11) NOT NULL DEFAULT '13' COMMENT '',
`express_type` int(11) NOT NULL DEFAULT '0' COMMENT '',
`config` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`tel1` varchar(255) DEFAULT '' COMMENT '',
`tel2` varchar(255) DEFAULT '' COMMENT '',
`is_sum` tinyint(1) DEFAULT '0' COMMENT '',
`is_dispatch` tinyint(1) DEFAULT '1' COMMENT '',
`enabled` tinyint(1) DEFAULT '0' COMMENT '',
`geo_key` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_apply` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`applyno` varchar(255) DEFAULT '' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`orderids` longtext COMMENT '',
`commission` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`content` text COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`applytime` int(11) DEFAULT '0' COMMENT '',
`checktime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`invalidtime` int(11) DEFAULT '0' COMMENT '',
`refusetime` int(11) DEFAULT '0' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`beginmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`endmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`alipay` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`realname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`repurchase` decimal(10,2) DEFAULT '0.00' COMMENT '',
`alipay1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`sendmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`senddata` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_mid` (`mid`),
KEY `idx_checktime` (`checktime`),
KEY `idx_paytime` (`paytime`),
KEY `idx_applytime` (`applytime`),
KEY `idx_status` (`status`),
KEY `idx_invalidtime` (`invalidtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_bank` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`bankname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_clickcount` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`from_openid` varchar(255) DEFAULT '' COMMENT '',
`clicktime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_from_openid` (`from_openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`levelname` varchar(50) DEFAULT '' COMMENT '',
`commission1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission3` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commissionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`downcount` int(11) DEFAULT '0' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`withdraw` decimal(10,2) DEFAULT '0.00' COMMENT '',
`repurchase` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goodsids` varchar(1000) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`applyid` int(11) DEFAULT '0' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`commission` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`commission_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_applyid` (`applyid`),
KEY `idx_mid` (`mid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_rank` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
`num` int(11) NOT NULL COMMENT '',
`status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` text COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_relation` (
`id` int(10) unsigned NOT NULL COMMENT '',
`pid` int(10) unsigned NOT NULL COMMENT '',
`level` tinyint(1) unsigned NOT NULL COMMENT '',
UNIQUE KEY `id_pid` (`id`,`pid`),
KEY `id` (`id`),
KEY `pid` (`pid`),
KEY `level` (`level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_repurchase` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`year` int(4) DEFAULT '0' COMMENT '',
`month` tinyint(2) DEFAULT '0' COMMENT '',
`repurchase` decimal(10,2) DEFAULT '0.00' COMMENT '',
`applyid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `applyid` (`applyid`),
KEY `openid` (`openid`),
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_shop` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`img` varchar(255) COMMENT '',
`desc` varchar(255) DEFAULT '' COMMENT '',
`selectgoods` tinyint(3) DEFAULT '0' COMMENT '',
`selectcategory` tinyint(3) DEFAULT '0' COMMENT '',
`goodsids` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_mid` (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`catid` int(11) DEFAULT '0' COMMENT '',
`couponname` varchar(255) DEFAULT '' COMMENT '',
`gettype` tinyint(3) DEFAULT '0' COMMENT '',
`getmax` int(11) DEFAULT '0' COMMENT '',
`usetype` tinyint(3) DEFAULT '0' COMMENT '',
`returntype` tinyint(3) DEFAULT '0' COMMENT '',
`bgcolor` varchar(255) DEFAULT '' COMMENT '',
`enough` decimal(10,2) DEFAULT '0.00' COMMENT '',
`timelimit` tinyint(3) DEFAULT '0' COMMENT '',
`coupontype` tinyint(3) DEFAULT '0' COMMENT '',
`timedays` int(11) DEFAULT '0' COMMENT '',
`timestart` int(11) DEFAULT '0' COMMENT '',
`timeend` int(11) DEFAULT '0' COMMENT '',
`discount` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deduct` decimal(10,2) DEFAULT '0.00' COMMENT '',
`backtype` tinyint(3) DEFAULT '0' COMMENT '',
`backmoney` varchar(50) DEFAULT '' COMMENT '',
`backcredit` varchar(50) DEFAULT '' COMMENT '',
`backredpack` varchar(50) DEFAULT '' COMMENT '',
`backwhen` tinyint(3) DEFAULT '0' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`desc` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`respdesc` text COMMENT '',
`respthumb` varchar(255) DEFAULT '' COMMENT '',
`resptitle` varchar(255) DEFAULT '' COMMENT '',
`respurl` varchar(255) DEFAULT '' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`usecredit2` tinyint(3) DEFAULT '0' COMMENT '',
`remark` varchar(1000) DEFAULT '' COMMENT '',
`descnoset` tinyint(3) DEFAULT '0' COMMENT '',
`pwdkey` varchar(255) DEFAULT '' COMMENT '',
`pwdsuc` text COMMENT '',
`pwdfail` text COMMENT '',
`pwdurl` varchar(255) DEFAULT '' COMMENT '',
`pwdask` text COMMENT '',
`pwdstatus` tinyint(3) DEFAULT '0' COMMENT '',
`pwdtimes` int(11) DEFAULT '0' COMMENT '',
`pwdfull` text COMMENT '',
`pwdwords` text COMMENT '',
`pwdopen` tinyint(3) DEFAULT '0' COMMENT '',
`pwdown` text COMMENT '',
`pwdexit` varchar(255) DEFAULT '' COMMENT '',
`pwdexitstr` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`pwdkey2` varchar(255) DEFAULT '' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`limitgoodtype` tinyint(1) DEFAULT '0' COMMENT '',
`limitgoodcatetype` tinyint(1) DEFAULT '0' COMMENT '',
`limitgoodcateids` varchar(500) DEFAULT '' COMMENT '',
`limitgoodids` varchar(500) DEFAULT '' COMMENT '',
`islimitlevel` tinyint(1) DEFAULT '0' COMMENT '',
`limitmemberlevels` varchar(500) DEFAULT '' COMMENT '',
`limitagentlevels` varchar(500) DEFAULT '' COMMENT '',
`limitpartnerlevels` varchar(500) DEFAULT '' COMMENT '',
`limitaagentlevels` varchar(500) DEFAULT '' COMMENT '',
`tagtitle` varchar(20) DEFAULT '' COMMENT '',
`settitlecolor` tinyint(1) DEFAULT '0' COMMENT '',
`titlecolor` varchar(10) DEFAULT '' COMMENT '',
`limitdiscounttype` tinyint(1) DEFAULT '1' COMMENT '',
`quickget` tinyint(1) DEFAULT '0' COMMENT '',
`templateid` varchar(60) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_coupontype` (`coupontype`),
KEY `idx_timestart` (`timestart`),
KEY `idx_timeend` (`timeend`),
KEY `idx_timelimit` (`timelimit`),
KEY `idx_status` (`status`),
KEY `idx_givetype` (`backtype`),
KEY `idx_catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_data` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`gettype` tinyint(3) DEFAULT '0' COMMENT '',
`used` int(11) DEFAULT '0' COMMENT '',
`usetime` int(11) DEFAULT '0' COMMENT '',
`gettime` int(11) DEFAULT '0' COMMENT '',
`senduid` int(11) DEFAULT '0' COMMENT '',
`ordersn` varchar(255) DEFAULT '' COMMENT '',
`back` tinyint(3) DEFAULT '0' COMMENT '',
`backtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`isnew` tinyint(1) DEFAULT '1' COMMENT '',
`nocount` tinyint(1) DEFAULT '1' COMMENT '',
`shareident` varchar(50) COMMENT '',
`textkey` int(11) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_couponid` (`couponid`),
KEY `idx_gettype` (`gettype`),
KEY `idx_used` (`used`),
KEY `idx_gettime` (`gettime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_goodsendtask` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`sendnum` int(11) DEFAULT '1' COMMENT '',
`num` int(11) DEFAULT '0' COMMENT '',
`sendpoint` tinyint(1) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_guess` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`times` int(11) DEFAULT '0' COMMENT '',
`pwdkey` varchar(255) DEFAULT '' COMMENT '',
`ok` tinyint(3) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_couponid` (`couponid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`logno` varchar(255) DEFAULT '' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`paystatus` tinyint(3) DEFAULT '0' COMMENT '',
`creditstatus` tinyint(3) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`paytype` tinyint(3) DEFAULT '0' COMMENT '',
`getfrom` tinyint(3) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_couponid` (`couponid`),
KEY `idx_status` (`status`),
KEY `idx_paystatus` (`paystatus`),
KEY `idx_createtime` (`createtime`),
KEY `idx_getfrom` (`getfrom`),
KEY `idx_logno` (`logno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_sendshow` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`showkey` varchar(20) NOT NULL COMMENT '',
`uniacid` int(11) NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL COMMENT '',
`coupondataid` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_sendtasks` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`enough` decimal(10,2) DEFAULT '0.00' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`sendnum` int(11) DEFAULT '1' COMMENT '',
`num` int(11) DEFAULT '0' COMMENT '',
`sendpoint` tinyint(1) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_taskdata` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`openid` varchar(50) COMMENT '',
`taskid` int(11) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`sendnum` int(11) DEFAULT '0' COMMENT '',
`tasktype` tinyint(1) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`parentorderid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`sendpoint` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_coupon_usesendtasks` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`usecouponid` int(11) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`sendnum` int(11) DEFAULT '1' COMMENT '',
`num` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`advimg` varchar(255) DEFAULT '' COMMENT '',
`advurl` varchar(500) DEFAULT '' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_comment` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`logid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`logno` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(50) COMMENT '',
`nickname` varchar(50) COMMENT '',
`headimg` varchar(255) COMMENT '',
`level` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`content` varchar(255) COMMENT '',
`images` text COMMENT '',
`time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reply_content` varchar(255) COMMENT '',
`reply_images` text COMMENT '',
`reply_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`append_content` varchar(255) COMMENT '',
`append_images` text COMMENT '',
`append_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`append_reply_content` varchar(255) COMMENT '',
`append_reply_images` text COMMENT '',
`append_reply_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`istop` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`checked` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`append_checked` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`virtual` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`deleted` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`totalday` int(11) DEFAULT '0' COMMENT '',
`chance` int(11) DEFAULT '0' COMMENT '',
`chanceday` int(11) DEFAULT '0' COMMENT '',
`detail` text COMMENT '',
`rate1` int(11) DEFAULT '0' COMMENT '',
`rate2` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`joins` int(11) DEFAULT '0' COMMENT '',
`views` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`showlevels` text COMMENT '',
`buylevels` text COMMENT '',
`showgroups` text COMMENT '',
`buygroups` text COMMENT '',
`vip` tinyint(3) DEFAULT '0' COMMENT '',
`istop` tinyint(3) DEFAULT '0' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
`istime` tinyint(3) DEFAULT '0' COMMENT '',
`timestart` int(11) DEFAULT '0' COMMENT '',
`timeend` int(11) DEFAULT '0' COMMENT '',
`share_title` varchar(255) DEFAULT '' COMMENT '',
`share_icon` varchar(255) DEFAULT '' COMMENT '',
`share_desc` varchar(500) DEFAULT '' COMMENT '',
`followneed` tinyint(3) DEFAULT '0' COMMENT '',
`followtext` varchar(255) DEFAULT '' COMMENT '',
`subtitle` varchar(255) DEFAULT '' COMMENT '',
`subdetail` text COMMENT '',
`noticedetail` text COMMENT '',
`usedetail` varchar(255) DEFAULT '' COMMENT '',
`goodsdetail` text COMMENT '',
`isendtime` tinyint(3) DEFAULT '0' COMMENT '',
`usecredit2` tinyint(3) DEFAULT '0' COMMENT '',
`area` varchar(255) DEFAULT '' COMMENT '',
`dispatch` decimal(10,2) DEFAULT '0.00' COMMENT '',
`storeids` text COMMENT '',
`noticeopenid` varchar(255) DEFAULT '' COMMENT '',
`noticetype` tinyint(3) DEFAULT '0' COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`goodstype` tinyint(3) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`productprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`mincredit` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`minmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`maxcredit` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`maxmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`dispatchtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`dispatchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`verifytype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`verifynum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`grant1` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`grant2` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`goodssn` varchar(255) NOT NULL COMMENT '',
`productsn` varchar(255) NOT NULL COMMENT '',
`weight` int(11) NOT NULL COMMENT '',
`showtotal` tinyint(3) NOT NULL COMMENT '',
`totalcnf` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`usetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`hasoption` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`noticedetailshow` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`detailshow` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`surplusmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`packetlimit` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`packettype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`minpacketmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`packettotal` int(11) NOT NULL DEFAULT '0' COMMENT '',
`packetsurplus` int(11) NOT NULL DEFAULT '0' COMMENT '',
`maxpacketmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_endtime` (`endtime`),
KEY `idx_createtime` (`createtime`),
KEY `idx_status` (`status`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_deleted` (`deleted`),
KEY `idx_istop` (`istop`),
KEY `idx_isrecommand` (`isrecommand`),
KEY `idx_istime` (`istime`),
KEY `idx_timestart` (`timestart`),
KEY `idx_timeend` (`timeend`),
KEY `idx_goodstype` (`goodstype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`logno` varchar(255) DEFAULT '' COMMENT '',
`eno` varchar(255) DEFAULT '' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`paystatus` tinyint(3) DEFAULT '0' COMMENT '',
`paytype` tinyint(3) DEFAULT '-1' COMMENT '',
`dispatchstatus` tinyint(3) DEFAULT '0' COMMENT '',
`creditpay` tinyint(3) DEFAULT '0' COMMENT '',
`addressid` int(11) DEFAULT '0' COMMENT '',
`dispatchno` varchar(255) DEFAULT '' COMMENT '',
`usetime` int(11) DEFAULT '0' COMMENT '',
`express` varchar(255) DEFAULT '' COMMENT '',
`expresssn` varchar(255) DEFAULT '' COMMENT '',
`expresscom` varchar(255) DEFAULT '' COMMENT '',
`verifyopenid` varchar(255) DEFAULT '' COMMENT '',
`storeid` int(11) DEFAULT '0' COMMENT '',
`realname` varchar(255) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`dupdate1` tinyint(3) DEFAULT '0' COMMENT '',
`transid` varchar(255) DEFAULT '' COMMENT '',
`dispatchtransid` varchar(255) DEFAULT '' COMMENT '',
`address` text COMMENT '',
`optionid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`time_send` int(11) NOT NULL DEFAULT '0' COMMENT '',
`time_finish` int(11) NOT NULL DEFAULT '0' COMMENT '',
`iscomment` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`dispatchtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`verifynum` int(11) NOT NULL DEFAULT '1' COMMENT '',
`verifytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`remarksaler` text COMMENT '',
`dispatch` decimal(10,2) DEFAULT '0.00' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`goods_num` int(11) DEFAULT '0' COMMENT '',
`merchapply` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_option` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`thumb` varchar(60) DEFAULT '' COMMENT '',
`credit` int(10) NOT NULL DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`weight` decimal(10,2) DEFAULT '0.00' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`specs` text COMMENT '',
`skuId` varchar(255) DEFAULT '' COMMENT '',
`goodssn` varchar(255) DEFAULT '' COMMENT '',
`productsn` varchar(255) DEFAULT '' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
`exchange_stock` int(11) NOT NULL DEFAULT '-1' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_spec` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`description` varchar(1000) DEFAULT '' COMMENT '',
`displaytype` tinyint(3) DEFAULT '0' COMMENT '',
`content` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`propId` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_spec_item` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`specid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`show` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`valueId` varchar(255) DEFAULT '' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_verify` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(45) DEFAULT '0' COMMENT '',
`logid` int(11) DEFAULT '0' COMMENT '',
`verifycode` varchar(45) COMMENT '',
`storeid` int(11) DEFAULT '0' COMMENT '',
`verifier` varchar(45) DEFAULT '0' COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`verifytime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_customer` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`kf_id` varchar(255) COMMENT '',
`kf_account` varchar(255) DEFAULT '' COMMENT '',
`kf_nick` varchar(255) DEFAULT '' COMMENT '',
`kf_pwd` varchar(255) DEFAULT '' COMMENT '',
`kf_headimgurl` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_customer_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_customer_guestbook` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`realname` varchar(11) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`weixin` varchar(255) DEFAULT '' COMMENT '',
`images` text COMMENT '',
`content` text COMMENT '',
`remark` text COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_customer_robot` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`keywords` varchar(500) DEFAULT '' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`content` longtext COMMENT '',
`url` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_cate` (`cate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_cycelbuy_periods` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`orderid` int(11) NOT NULL COMMENT '',
`cycelsn` varchar(255) NOT NULL COMMENT '',
`sendtime` int(11) COMMENT '',
`receipttime` int(11) COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`remark` varchar(255) COMMENT '',
`addressid` int(11) COMMENT '',
`dispatchprice` decimal(10,2) COMMENT '',
`dispatchid` int(11) COMMENT '',
`createtime` int(11) COMMENT '',
`dispatchtype` tinyint(3) COMMENT '',
`finishtime` int(11) COMMENT '',
`expresscom` varchar(255) COMMENT '',
`expresssn` varchar(255) COMMENT '',
`express` varchar(255) COMMENT '',
`address` text COMMENT '',
`updatelog` text COMMENT '',
`ispostpone` tinyint(4) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_datatransfer` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`fromuniacid` int(11) COMMENT '',
`touniacid` int(11) COMMENT '',
`status` tinyint(1) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_designer` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pagename` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`pagetype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`pageinfo` text NOT NULL COMMENT '',
`createtime` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`keyword` varchar(255) DEFAULT '' COMMENT '',
`savetime` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`setdefault` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`datas` text NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_pagetype` (`pagetype`),
KEY `idx_keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_designer_menu` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`menuname` varchar(255) DEFAULT '' COMMENT '',
`isdefault` tinyint(3) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`menus` text COMMENT '',
`params` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_dispatch` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`dispatchname` varchar(50) DEFAULT '' COMMENT '',
`dispatchtype` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`firstprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`secondprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`firstweight` int(11) DEFAULT '0' COMMENT '',
`secondweight` int(11) DEFAULT '0' COMMENT '',
`express` varchar(250) DEFAULT '' COMMENT '',
`areas` longtext COMMENT '',
`carriers` text COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`calculatetype` tinyint(1) DEFAULT '0' COMMENT '',
`firstnum` int(11) DEFAULT '0' COMMENT '',
`secondnum` int(11) DEFAULT '0' COMMENT '',
`firstnumprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`secondnumprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`isdefault` tinyint(1) DEFAULT '0' COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`nodispatchareas` text COMMENT '',
`nodispatchareas_code` longtext COMMENT '',
`isdispatcharea` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`freeprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_dividend_apply` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`applyno` varchar(255) DEFAULT '' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`orderids` longtext COMMENT '',
`dividend` decimal(10,2) DEFAULT '0.00' COMMENT '',
`dividend_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`content` text COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`applytime` int(11) DEFAULT '0' COMMENT '',
`checktime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`invalidtime` int(11) DEFAULT '0' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`beginmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`endmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`alipay` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`alipay1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard1` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`realname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`sendmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`senddata` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_mid` (`mid`),
KEY `idx_checktime` (`checktime`),
KEY `idx_paytime` (`paytime`),
KEY `idx_applytime` (`applytime`),
KEY `idx_status` (`status`),
KEY `idx_invalidtime` (`invalidtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_dividend_bank` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`bankname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_dividend_init` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`headsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_dividend_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`applyid` int(11) DEFAULT '0' COMMENT '',
`mid` int(11) DEFAULT '0' COMMENT '',
`dividend` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`dividend_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`type1` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_applyid` (`applyid`),
KEY `idx_mid` (`mid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diyform_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diyform_data` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`typeid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`cid` int(11) DEFAULT '0' COMMENT '',
`diyformfields` text COMMENT '',
`fields` text NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` tinyint(2) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_typeid` (`typeid`),
KEY `idx_cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diyform_temp` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`typeid` int(11) DEFAULT '0' COMMENT '',
`cid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`diyformfields` text COMMENT '',
`fields` text NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` tinyint(1) DEFAULT '0' COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`carrier_realname` varchar(255) DEFAULT '' COMMENT '',
`carrier_mobile` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diyform_type` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`fields` text NOT NULL COMMENT '',
`usedata` int(11) NOT NULL DEFAULT '0' COMMENT '',
`alldata` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '1' COMMENT '',
`savedata` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_cate` (`cate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diypage` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`data` longtext NOT NULL COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`diymenu` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merch` int(11) NOT NULL DEFAULT '0' COMMENT '',
`diyadv` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_keyword` (`keyword`),
KEY `idx_lastedittime` (`lastedittime`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diypage_menu` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`data` text NOT NULL COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merch` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_lastedittime` (`lastedittime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diypage_plu` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`data` text NOT NULL COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merch` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_lastedittime` (`lastedittime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diypage_template` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`data` longtext NOT NULL COMMENT '',
`preview` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`tplid` int(11) DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`merch` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_cate` (`cate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_diypage_template_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`merch` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_cart` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`openid` varchar(100) COMMENT '',
`goodsid` int(11) COMMENT '',
`total` int(10) DEFAULT '1' COMMENT '',
`marketprice` decimal(10,2) COMMENT '',
`optionid` int(11) COMMENT '',
`selected` tinyint(1) DEFAULT '1' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) COMMENT '',
`groupid` int(11) COMMENT '',
`serial` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_code` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`groupid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`endtime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00' COMMENT '',
`status` int(2) NOT NULL DEFAULT '1' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`count` int(11) NOT NULL DEFAULT '0' COMMENT '',
`key` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` int(11) NOT NULL DEFAULT '0' COMMENT '',
`scene` int(11) NOT NULL DEFAULT '0' COMMENT '',
`qrcode_url` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`serial` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`balancestatus` int(11) DEFAULT '1' COMMENT '',
`redstatus` int(11) DEFAULT '1' COMMENT '',
`scorestatus` int(11) DEFAULT '1' COMMENT '',
`couponstatus` int(11) DEFAULT '1' COMMENT '',
`goodsstatus` int(11) COMMENT '',
`repeatcount` int(11) NOT NULL DEFAULT '1' COMMENT '',
PRIMARY KEY (`id`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_group` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` int(2) NOT NULL DEFAULT '0' COMMENT '',
`endtime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00' COMMENT '',
`mode` int(2) NOT NULL DEFAULT '0' COMMENT '',
`status` int(2) NOT NULL DEFAULT '0' COMMENT '',
`max` int(2) NOT NULL DEFAULT '0' COMMENT '',
`value` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`starttime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00' COMMENT '',
`goods` text COMMENT '',
`score` int(11) NOT NULL DEFAULT '0' COMMENT '',
`coupon` text COMMENT '',
`use` int(11) NOT NULL DEFAULT '0' COMMENT '',
`total` int(11) NOT NULL DEFAULT '0' COMMENT '',
`red` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`balance_left` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`balance_right` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`red_left` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`red_right` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`score_left` int(11) NOT NULL DEFAULT '0' COMMENT '',
`score_right` int(11) NOT NULL DEFAULT '0' COMMENT '',
`balance_type` int(11) NOT NULL COMMENT '',
`red_type` int(11) NOT NULL COMMENT '',
`score_type` int(11) NOT NULL COMMENT '',
`title_reply` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`img` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`rule` text NOT NULL COMMENT '',
`coupon_type` varchar(255) COMMENT '',
`basic_content` varchar(500) NOT NULL DEFAULT '' COMMENT '',
`reply_type` int(11) NOT NULL DEFAULT '0' COMMENT '',
`code_type` int(11) NOT NULL DEFAULT '0' COMMENT '',
`binding` int(11) NOT NULL DEFAULT '0' COMMENT '',
`showcount` int(11) DEFAULT '0' COMMENT '',
`postage` decimal(10,2) DEFAULT '0.00' COMMENT '',
`postage_type` int(11) DEFAULT '0' COMMENT '',
`banner` varchar(800) DEFAULT '' COMMENT '',
`keyword_reply` int(11) DEFAULT '0' COMMENT '',
`reply_status` int(11) DEFAULT '1' COMMENT '',
`reply_keyword` varchar(255) DEFAULT '' COMMENT '',
`input_banner` varchar(255) DEFAULT '' COMMENT '',
`diypage` int(11) NOT NULL DEFAULT '0' COMMENT '',
`sendname` varchar(255) DEFAULT '' COMMENT '',
`wishing` varchar(255) DEFAULT '' COMMENT '',
`actname` varchar(255) DEFAULT '' COMMENT '',
`remark` varchar(255) DEFAULT '' COMMENT '',
`repeat` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`koulingstart` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`koulingend` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`kouling` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`chufa` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`chufaend` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_query` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`querykey` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`querytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`unfreeze` int(11) NOT NULL DEFAULT '0' COMMENT '',
`errorcount` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`,`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_record` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`key` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`uniacid` int(11) COMMENT '',
`goods` text COMMENT '',
`orderid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`time` int(11) NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`mode` int(11) NOT NULL DEFAULT '0' COMMENT '',
`balance` decimal(10,2) DEFAULT '0.00' COMMENT '',
`red` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`coupon` text COMMENT '',
`score` int(11) NOT NULL DEFAULT '0' COMMENT '',
`nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`groupid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`serial` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`ordersn` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`goods_title` varchar(255) COMMENT '',
PRIMARY KEY (`id`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_setting` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`freeze` int(11) NOT NULL DEFAULT '0' COMMENT '',
`mistake` int(11) NOT NULL DEFAULT '0' COMMENT '',
`grouplimit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`alllimit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`no_qrimg` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`rule` text COMMENT '',
PRIMARY KEY (`id`,`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exhelper_esheet` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`express` varchar(50) DEFAULT '' COMMENT '',
`code` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`datas` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exhelper_esheet_temp` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`esheetid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`esheetname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`customername` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`customerpwd` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`monthcode` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`sendsite` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`paytype` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`templatesize` varchar(10) NOT NULL DEFAULT '' COMMENT '',
`isnotice` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`issend` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`isdefault` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exhelper_express` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`type` int(1) NOT NULL DEFAULT '1' COMMENT '',
`expressname` varchar(255) DEFAULT '' COMMENT '',
`expresscom` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`express` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`width` decimal(10,2) DEFAULT '0.00' COMMENT '',
`datas` text COMMENT '',
`height` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bg` varchar(255) DEFAULT '' COMMENT '',
`isdefault` tinyint(3) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_isdefault` (`isdefault`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exhelper_senduser` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`sendername` varchar(255) DEFAULT '' COMMENT '',
`sendertel` varchar(255) DEFAULT '' COMMENT '',
`sendersign` varchar(255) DEFAULT '' COMMENT '',
`sendercode` int(11) COMMENT '',
`senderaddress` varchar(255) DEFAULT '' COMMENT '',
`sendercity` varchar(255) COMMENT '',
`isdefault` tinyint(3) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`province` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`city` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`area` varchar(30) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_isdefault` (`isdefault`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exhelper_sys` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`ip` varchar(20) NOT NULL DEFAULT 'localhost' COMMENT '',
`port` int(11) NOT NULL DEFAULT '8000' COMMENT '',
`ip_cloud` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`port_cloud` int(11) NOT NULL DEFAULT '8000' COMMENT '',
`is_cloud` int(1) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`ebusiness` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`apikey` varchar(50) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_express` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(50) DEFAULT '' COMMENT '',
`express` varchar(50) DEFAULT '' COMMENT '',
`status` tinyint(1) DEFAULT '1' COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`code` varchar(30) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_express_cache` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`expresssn` varchar(50) COMMENT '',
`express` varchar(50) COMMENT '',
`lasttime` int(11) NOT NULL COMMENT '',
`datas` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_expresssn` (`expresssn`),
KEY `idx_express` (`express`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_feedback` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '0' COMMENT '',
`type` tinyint(1) DEFAULT '1' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`feedbackid` varchar(100) DEFAULT '' COMMENT '',
`transid` varchar(100) DEFAULT '' COMMENT '',
`reason` varchar(1000) DEFAULT '' COMMENT '',
`solution` varchar(1000) DEFAULT '' COMMENT '',
`remark` varchar(1000) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_feedbackid` (`feedbackid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_transid` (`transid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_form` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`isrequire` tinyint(3) DEFAULT '0' COMMENT '',
`key` varchar(255) DEFAULT '' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`type` varchar(255) DEFAULT '' COMMENT '',
`values` text COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_form_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_fullback_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`titles` varchar(255) NOT NULL COMMENT '',
`thumb` varchar(255) NOT NULL COMMENT '',
`marketprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`minallfullbackallprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`maxallfullbackallprice` decimal(10,2) NOT NULL COMMENT '',
`minallfullbackallratio` decimal(10,2) COMMENT '',
`maxallfullbackallratio` decimal(10,2) COMMENT '',
`day` int(11) NOT NULL DEFAULT '0' COMMENT '',
`fullbackprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`fullbackratio` decimal(10,2) COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`hasoption` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`optionid` text NOT NULL COMMENT '',
`startday` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refund` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_fullback_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`openid` varchar(50) NOT NULL COMMENT '',
`orderid` int(11) NOT NULL COMMENT '',
`price` decimal(10,2) NOT NULL COMMENT '',
`priceevery` decimal(10,2) NOT NULL COMMENT '',
`day` int(10) NOT NULL COMMENT '',
`fullbackday` int(10) NOT NULL COMMENT '',
`createtime` int(10) NOT NULL COMMENT '',
`fullbacktime` int(10) NOT NULL COMMENT '',
`isfullback` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_funbar` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`datas` text COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_gift` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`thumb` varchar(255) NOT NULL COMMENT '',
`activity` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`orderprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`goodsid` varchar(255) NOT NULL COMMENT '',
`giftgoodsid` varchar(255) NOT NULL COMMENT '',
`starttime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`endtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`share_title` varchar(255) NOT NULL COMMENT '',
`share_icon` varchar(255) NOT NULL COMMENT '',
`share_desc` text NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_globonus_bill` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billno` varchar(100) DEFAULT '' COMMENT '',
`paytype` int(11) DEFAULT '0' COMMENT '',
`year` int(11) DEFAULT '0' COMMENT '',
`month` int(11) DEFAULT '0' COMMENT '',
`week` int(11) DEFAULT '0' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_send` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`partnercount` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`confirmtime` int(11) DEFAULT '0' COMMENT '',
`bonusordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusrate` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_paytype` (`paytype`),
KEY `idx_createtime` (`createtime`),
KEY `idx_paytime` (`paytime`),
KEY `idx_status` (`status`),
KEY `idx_month` (`month`),
KEY `idx_week` (`week`),
KEY `idx_year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_globonus_billo` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_globonus_billp` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`billid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`payno` varchar(255) DEFAULT '' COMMENT '',
`paytype` tinyint(3) DEFAULT '0' COMMENT '',
`bonus` decimal(10,2) DEFAULT '0.00' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paymoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`chargemoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`reason` varchar(255) DEFAULT '' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_billid` (`billid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_globonus_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`levelname` varchar(50) DEFAULT '' COMMENT '',
`bonus` decimal(10,4) DEFAULT '0.0000' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ordercount` int(11) DEFAULT '0' COMMENT '',
`commissionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`bonusmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`downcount` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`pcate` int(11) DEFAULT '0' COMMENT '',
`ccate` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(1) DEFAULT '1' COMMENT '',
`status` tinyint(1) DEFAULT '1' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`title` varchar(100) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`unit` varchar(5) DEFAULT '' COMMENT '',
`description` varchar(1000) COMMENT '',
`content` text COMMENT '',
`goodssn` varchar(50) DEFAULT '' COMMENT '',
`productsn` varchar(50) DEFAULT '' COMMENT '',
`productprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`marketprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`costprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`originalprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(10) DEFAULT '0' COMMENT '',
`totalcnf` int(11) DEFAULT '0' COMMENT '',
`sales` int(11) DEFAULT '0' COMMENT '',
`salesreal` int(11) DEFAULT '0' COMMENT '',
`spec` varchar(5000) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`weight` decimal(10,2) DEFAULT '0.00' COMMENT '',
`credit` varchar(255) COMMENT '',
`maxbuy` int(11) DEFAULT '0' COMMENT '',
`usermaxbuy` int(11) DEFAULT '0' COMMENT '',
`hasoption` int(11) DEFAULT '0' COMMENT '',
`dispatch` int(11) DEFAULT '0' COMMENT '',
`thumb_url` text COMMENT '',
`isnew` tinyint(1) DEFAULT '0' COMMENT '',
`ishot` tinyint(1) DEFAULT '0' COMMENT '',
`isdiscount` tinyint(1) DEFAULT '0' COMMENT '',
`isrecommand` tinyint(1) DEFAULT '0' COMMENT '',
`issendfree` tinyint(1) DEFAULT '0' COMMENT '',
`istime` tinyint(1) DEFAULT '0' COMMENT '',
`iscomment` tinyint(1) DEFAULT '0' COMMENT '',
`timestart` int(11) DEFAULT '0' COMMENT '',
`timeend` int(11) DEFAULT '0' COMMENT '',
`viewcount` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`hascommission` tinyint(3) DEFAULT '0' COMMENT '',
`commission1_rate` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission1_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission2_rate` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission2_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission3_rate` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission3_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`score` decimal(10,2) DEFAULT '0.00' COMMENT '',
`taobaoid` varchar(255) DEFAULT '' COMMENT '',
`taotaoid` varchar(255) DEFAULT '' COMMENT '',
`taobaourl` varchar(255) DEFAULT '' COMMENT '',
`updatetime` int(11) DEFAULT '0' COMMENT '',
`share_title` varchar(255) DEFAULT '' COMMENT '',
`share_icon` varchar(255) DEFAULT '' COMMENT '',
`cash` tinyint(3) DEFAULT '0' COMMENT '',
`commission_thumb` varchar(255) DEFAULT '' COMMENT '',
`isnodiscount` tinyint(3) DEFAULT '0' COMMENT '',
`showlevels` text COMMENT '',
`buylevels` text COMMENT '',
`showgroups` text COMMENT '',
`buygroups` text COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`storeids` text COMMENT '',
`noticeopenid` varchar(255) DEFAULT '' COMMENT '',
`tcate` int(11) DEFAULT '0' COMMENT '',
`noticetype` text COMMENT '',
`needfollow` tinyint(3) DEFAULT '0' COMMENT '',
`followtip` varchar(255) DEFAULT '' COMMENT '',
`followurl` varchar(255) DEFAULT '' COMMENT '',
`deduct` decimal(10,2) DEFAULT '0.00' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
`ccates` text COMMENT '',
`discounts` text COMMENT '',
`nocommission` tinyint(3) DEFAULT '0' COMMENT '',
`hidecommission` tinyint(3) DEFAULT '0' COMMENT '',
`pcates` text COMMENT '',
`tcates` text COMMENT '',
`cates` text COMMENT '',
`artid` int(11) DEFAULT '0' COMMENT '',
`detail_logo` varchar(255) DEFAULT '' COMMENT '',
`detail_shopname` varchar(255) DEFAULT '' COMMENT '',
`detail_btntext1` varchar(255) DEFAULT '' COMMENT '',
`detail_btnurl1` varchar(255) DEFAULT '' COMMENT '',
`detail_btntext2` varchar(255) DEFAULT '' COMMENT '',
`detail_btnurl2` varchar(255) DEFAULT '' COMMENT '',
`detail_totaltitle` varchar(255) DEFAULT '' COMMENT '',
`saleupdate42392` tinyint(3) DEFAULT '0' COMMENT '',
`deduct2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ednum` int(11) DEFAULT '0' COMMENT '',
`edmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`edareas` text COMMENT '',
`diyformtype` tinyint(1) DEFAULT '0' COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`diymode` tinyint(1) DEFAULT '0' COMMENT '',
`dispatchtype` tinyint(1) DEFAULT '0' COMMENT '',
`dispatchid` int(11) DEFAULT '0' COMMENT '',
`dispatchprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`manydeduct` tinyint(1) DEFAULT '0' COMMENT '',
`shorttitle` varchar(255) DEFAULT '' COMMENT '',
`isdiscount_title` varchar(255) DEFAULT '' COMMENT '',
`isdiscount_time` int(11) DEFAULT '0' COMMENT '',
`isdiscount_discounts` text COMMENT '',
`commission` text COMMENT '',
`saleupdate37975` tinyint(3) DEFAULT '0' COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
`allcates` text COMMENT '',
`minbuy` int(11) DEFAULT '0' COMMENT '',
`invoice` tinyint(3) DEFAULT '0' COMMENT '',
`repair` tinyint(3) DEFAULT '0' COMMENT '',
`seven` tinyint(3) DEFAULT '0' COMMENT '',
`money` varchar(255) DEFAULT '' COMMENT '',
`minprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`maxprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`province` varchar(255) DEFAULT '' COMMENT '',
`city` varchar(255) DEFAULT '' COMMENT '',
`buyshow` tinyint(1) DEFAULT '0' COMMENT '',
`buycontent` text COMMENT '',
`saleupdate51117` tinyint(3) DEFAULT '0' COMMENT '',
`virtualsend` tinyint(1) DEFAULT '0' COMMENT '',
`virtualsendcontent` text COMMENT '',
`verifytype` tinyint(1) DEFAULT '0' COMMENT '',
`diyfields` text COMMENT '',
`diysaveid` int(11) DEFAULT '0' COMMENT '',
`diysave` tinyint(1) DEFAULT '0' COMMENT '',
`quality` tinyint(3) DEFAULT '0' COMMENT '',
`groupstype` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '',
`showtotal` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '',
`subtitle` varchar(255) DEFAULT '' COMMENT '',
`minpriceupdated` tinyint(1) DEFAULT '0' COMMENT '',
`sharebtn` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`catesinit3` text COMMENT '',
`showtotaladd` tinyint(1) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`checked` tinyint(3) DEFAULT '0' COMMENT '',
`thumb_first` tinyint(3) DEFAULT '0' COMMENT '',
`merchsale` tinyint(1) DEFAULT '0' COMMENT '',
`keywords` varchar(255) DEFAULT '' COMMENT '',
`catch_id` varchar(255) DEFAULT '' COMMENT '',
`catch_url` varchar(255) DEFAULT '' COMMENT '',
`catch_source` varchar(255) DEFAULT '' COMMENT '',
`saleupdate40170` tinyint(3) DEFAULT '0' COMMENT '',
`saleupdate35843` tinyint(3) DEFAULT '0' COMMENT '',
`labelname` text COMMENT '',
`autoreceive` int(11) DEFAULT '0' COMMENT '',
`cannotrefund` tinyint(3) DEFAULT '0' COMMENT '',
`saleupdate33219` tinyint(3) DEFAULT '0' COMMENT '',
`bargain` int(11) DEFAULT '0' COMMENT '',
`buyagain` decimal(10,2) DEFAULT '0.00' COMMENT '',
`buyagain_islong` tinyint(1) DEFAULT '0' COMMENT '',
`buyagain_condition` tinyint(1) DEFAULT '0' COMMENT '',
`buyagain_sale` tinyint(1) DEFAULT '0' COMMENT '',
`buyagain_commission` text COMMENT '',
`saleupdate32484` tinyint(3) DEFAULT '0' COMMENT '',
`saleupdate36586` tinyint(3) DEFAULT '0' COMMENT '',
`diypage` int(11) COMMENT '',
`cashier` tinyint(1) DEFAULT '0' COMMENT '',
`saleupdate53481` tinyint(3) DEFAULT '0' COMMENT '',
`saleupdate30424` tinyint(3) DEFAULT '0' COMMENT '',
`isendtime` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`usetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`endtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchdisplayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`exchange_stock` int(11) DEFAULT '0' COMMENT '',
`exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`ispresell` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`presellprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`presellover` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`presellovertime` int(11) NOT NULL COMMENT '',
`presellstart` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`preselltimestart` int(11) NOT NULL DEFAULT '0' COMMENT '',
`presellend` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`preselltimeend` int(11) NOT NULL DEFAULT '0' COMMENT '',
`presellsendtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`presellsendstatrttime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`presellsendtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`edareas_code` text NOT NULL COMMENT '',
`unite_total` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`buyagain_price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`threen` varchar(255) DEFAULT '' COMMENT '',
`intervalfloor` tinyint(1) DEFAULT '0' COMMENT '',
`intervalprice` varchar(512) DEFAULT '' COMMENT '',
`isfullback` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`isstatustime` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`statustimestart` int(10) NOT NULL DEFAULT '0' COMMENT '',
`statustimeend` int(10) NOT NULL DEFAULT '0' COMMENT '',
`nosearch` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`showsales` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`islive` int(11) NOT NULL DEFAULT '0' COMMENT '',
`liveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`opencard` tinyint(1) DEFAULT '0' COMMENT '',
`cardid` varchar(255) DEFAULT '' COMMENT '',
`verifygoodsnum` int(11) DEFAULT '1' COMMENT '',
`verifygoodsdays` int(11) DEFAULT '1' COMMENT '',
`verifygoodslimittype` tinyint(1) DEFAULT '0' COMMENT '',
`verifygoodslimitdate` int(11) DEFAULT '0' COMMENT '',
`minliveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`maxliveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`tempid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`isstoreprice` tinyint(11) NOT NULL DEFAULT '0' COMMENT '',
`beforehours` int(11) NOT NULL DEFAULT '0' COMMENT '',
`saleupdate` tinyint(3) DEFAULT '0' COMMENT '',
`newgoods` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`video` varchar(512) DEFAULT '' COMMENT '',
`officthumb` varchar(512) DEFAULT '' COMMENT '',
`verifygoodstype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`isforceverifystore` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_pcate` (`pcate`),
KEY `idx_ccate` (`ccate`),
KEY `idx_isnew` (`isnew`),
KEY `idx_ishot` (`ishot`),
KEY `idx_isdiscount` (`isdiscount`),
KEY `idx_isrecommand` (`isrecommand`),
KEY `idx_iscomment` (`iscomment`),
KEY `idx_issendfree` (`issendfree`),
KEY `idx_istime` (`istime`),
KEY `idx_deleted` (`deleted`),
KEY `idx_tcate` (`tcate`),
KEY `idx_scate` (`tcate`),
KEY `idx_merchid` (`merchid`),
KEY `idx_checked` (`checked`),
KEY `idx_productsn` (`productsn`),
KEY `idx_buylevels` (`buylevels`),
KEY `idx_showgroups` (`showgroups`),
KEY `idx_buygroups` (`buygroups`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_cards` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`card_id` varchar(255) COMMENT '',
`card_title` varchar(255) COMMENT '',
`card_brand_name` varchar(255) COMMENT '',
`card_totalquantity` int(11) COMMENT '',
`card_quantity` int(11) COMMENT '',
`card_logoimg` varchar(255) COMMENT '',
`card_logowxurl` varchar(255) COMMENT '',
`card_backgroundtype` tinyint(1) COMMENT '',
`color` varchar(255) COMMENT '',
`card_backgroundimg` varchar(255) COMMENT '',
`card_backgroundwxurl` varchar(255) COMMENT '',
`prerogative` varchar(255) COMMENT '',
`card_description` varchar(255) COMMENT '',
`freewifi` tinyint(1) COMMENT '',
`withpet` tinyint(1) COMMENT '',
`freepark` tinyint(1) COMMENT '',
`deliver` tinyint(1) COMMENT '',
`custom_cell1` tinyint(1) COMMENT '',
`custom_cell1_name` varchar(255) COMMENT '',
`custom_cell1_tips` varchar(255) COMMENT '',
`custom_cell1_url` varchar(255) COMMENT '',
`color2` varchar(20) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_comment` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`nickname` varchar(50) DEFAULT '' COMMENT '',
`headimgurl` varchar(255) DEFAULT '' COMMENT '',
`content` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_group` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`goodsids` text NOT NULL COMMENT '',
`enabled` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_label` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`label` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`labelname` text NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_labelstyle` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`style` int(3) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_option` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`thumb` varchar(60) DEFAULT '' COMMENT '',
`productprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`marketprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`costprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`stock` int(11) DEFAULT '0' COMMENT '',
`weight` decimal(10,2) DEFAULT '0.00' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`specs` text COMMENT '',
`skuId` varchar(255) DEFAULT '' COMMENT '',
`goodssn` varchar(255) DEFAULT '' COMMENT '',
`productsn` varchar(255) DEFAULT '' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
`exchange_stock` int(11) DEFAULT '0' COMMENT '',
`exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`presellprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`day` int(3) NOT NULL COMMENT '',
`allfullbackprice` decimal(10,2) NOT NULL COMMENT '',
`fullbackprice` decimal(10,2) NOT NULL COMMENT '',
`allfullbackratio` decimal(10,2) COMMENT '',
`fullbackratio` decimal(10,2) COMMENT '',
`isfullback` tinyint(3) NOT NULL COMMENT '',
`islive` int(11) NOT NULL COMMENT '',
`liveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`cycelbuy_periodic` varchar(20) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_productsn` (`productsn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_param` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`value` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_spec` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`description` varchar(1000) DEFAULT '' COMMENT '',
`displaytype` tinyint(3) DEFAULT '0' COMMENT '',
`content` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`propId` varchar(255) DEFAULT '' COMMENT '',
`iscycelbuy` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_spec_item` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`specid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`show` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`valueId` varchar(255) DEFAULT '' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
`cycelbuy_periodic` varchar(20) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_specid` (`specid`),
KEY `idx_show` (`show`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goodscode_good` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`goodsid` int(11) NOT NULL COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`thumb` varchar(255) NOT NULL COMMENT '',
`qrcode` varchar(255) NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL COMMENT '',
`displayorder` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`advimg` varchar(255) DEFAULT '' COMMENT '',
`advurl` varchar(500) DEFAULT '' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`),
KEY `idx_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`displayorder` int(11) unsigned DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`category` int(11) COMMENT '',
`stock` int(11) NOT NULL DEFAULT '0' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`groupsprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`singleprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goodsnum` int(11) NOT NULL DEFAULT '1' COMMENT '',
`units` varchar(255) NOT NULL DEFAULT '件' COMMENT '',
`freight` decimal(10,2) DEFAULT '0.00' COMMENT '',
`endtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '',
`groupnum` int(10) NOT NULL DEFAULT '0' COMMENT '',
`sales` int(10) NOT NULL DEFAULT '0' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`description` varchar(1000) COMMENT '',
`content` text COMMENT '',
`createtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`ishot` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`deleted` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`followneed` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`followtext` varchar(255) COMMENT '',
`share_title` varchar(255) COMMENT '',
`share_icon` varchar(255) COMMENT '',
`share_desc` varchar(500) COMMENT '',
`goodssn` varchar(50) COMMENT '',
`productsn` varchar(50) COMMENT '',
`showstock` tinyint(2) NOT NULL COMMENT '',
`purchaselimit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`single` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`dispatchtype` tinyint(2) NOT NULL COMMENT '',
`dispatchid` int(11) NOT NULL COMMENT '',
`isindex` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`followurl` varchar(255) COMMENT '',
`deduct` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`rights` tinyint(2) NOT NULL DEFAULT '1' COMMENT '',
`thumb_url` text COMMENT '',
`gid` int(11) DEFAULT '0' COMMENT '',
`discount` tinyint(3) DEFAULT '0' COMMENT '',
`headstype` tinyint(3) COMMENT '',
`headsmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`headsdiscount` int(11) DEFAULT '0' COMMENT '',
`isdiscount` tinyint(3) DEFAULT '0' COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`verifytype` tinyint(3) DEFAULT '0' COMMENT '',
`verifynum` int(11) DEFAULT '0' COMMENT '',
`storeids` text COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`shorttitle` varchar(255) DEFAULT '' COMMENT '',
`teamnum` int(11) DEFAULT '0' COMMENT '',
`more_spec` tinyint(1) DEFAULT '0' COMMENT '',
`is_ladder` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`category`),
KEY `idx_createtime` (`createtime`),
KEY `idx_status` (`status`),
KEY `idx_istop` (`isindex`),
KEY `idx_category` (`category`),
KEY `idx_dispatchid` (`dispatchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_goods_atlas` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`g_id` int(11) NOT NULL COMMENT '',
`thumb` varchar(145) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_goods_option` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`groups_goods_id` int(255) DEFAULT '0' COMMENT '',
`goods_option_id` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) COMMENT '',
`marketprice` decimal(10,2) COMMENT '',
`price` decimal(10,2) COMMENT '',
`single_price` decimal(10,2) COMMENT '',
`specs` varchar(255) COMMENT '',
`stock` int(255) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_ladder` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`goods_id` int(11) DEFAULT '0' COMMENT '',
`ladder_num` int(11) COMMENT '',
`ladder_price` decimal(10,2) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(45) NOT NULL COMMENT '',
`orderno` varchar(45) NOT NULL COMMENT '',
`groupnum` int(11) NOT NULL COMMENT '',
`paytime` int(11) NOT NULL COMMENT '',
`price` decimal(11,2) DEFAULT '0.00' COMMENT '',
`freight` decimal(11,2) DEFAULT '0.00' COMMENT '',
`status` int(9) NOT NULL COMMENT '',
`pay_type` varchar(45) COMMENT '',
`goodid` int(11) NOT NULL COMMENT '',
`teamid` int(11) NOT NULL COMMENT '',
`is_team` int(2) NOT NULL COMMENT '',
`heads` int(11) DEFAULT '0' COMMENT '',
`starttime` int(11) NOT NULL COMMENT '',
`endtime` int(45) NOT NULL COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
`success` int(2) NOT NULL DEFAULT '0' COMMENT '',
`delete` int(2) NOT NULL DEFAULT '0' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`creditmoney` decimal(11,2) DEFAULT '0.00' COMMENT '',
`dispatchid` int(11) COMMENT '',
`addressid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`address` varchar(1000) COMMENT '',
`discount` decimal(10,2) DEFAULT '0.00' COMMENT '',
`canceltime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`finishtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refundid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refundstate` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`refundtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`express` varchar(45) COMMENT '',
`expresscom` varchar(100) COMMENT '',
`expresssn` varchar(45) COMMENT '',
`sendtime` int(45) DEFAULT '0' COMMENT '',
`remark` varchar(255) COMMENT '',
`remarkclose` text COMMENT '',
`remarksend` text COMMENT '',
`message` varchar(255) COMMENT '',
`deleted` int(2) NOT NULL DEFAULT '0' COMMENT '',
`realname` varchar(20) COMMENT '',
`mobile` varchar(11) COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`verifytype` tinyint(3) DEFAULT '0' COMMENT '',
`verifycode` varchar(45) DEFAULT '0' COMMENT '',
`verifynum` int(11) DEFAULT '0' COMMENT '',
`printstate` int(11) NOT NULL DEFAULT '0' COMMENT '',
`printstate2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`apppay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`isborrow` tinyint(1) DEFAULT '0' COMMENT '',
`borrowopenid` varchar(50) DEFAULT '' COMMENT '',
`source` tinyint(1) DEFAULT '0' COMMENT '',
`ladder_id` tinyint(1) DEFAULT '0' COMMENT '',
`is_ladder` tinyint(1) DEFAULT '0' COMMENT '',
`more_spec` tinyint(1) DEFAULT '0' COMMENT '',
`wxapp_prepay_id` varchar(255) DEFAULT '' COMMENT '',
`cancel_reason` varchar(255) DEFAULT '' COMMENT '',
`goods_price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goods_option_id` int(11) DEFAULT '0' COMMENT '',
`specs` varchar(255) DEFAULT '' COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_orderno` (`orderno`),
KEY `idx_paytime` (`paytime`),
KEY `idx_pay_type` (`pay_type`),
KEY `idx_teamid` (`teamid`),
KEY `idx_verifycode` (`verifycode`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`goods_id` int(11) DEFAULT '0' COMMENT '',
`groups_goods_id` int(11) DEFAULT '0' COMMENT '',
`groups_goods_option_id` int(11) DEFAULT '0' COMMENT '',
`groups_order_id` int(11) DEFAULT '0' COMMENT '',
`price` decimal(10,2) COMMENT '',
`option_name` varchar(255) COMMENT '',
`create_time` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order_refund` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`orderid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refundno` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`refundstatus` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`refundaddressid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refundaddress` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`reason` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`images` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`applytime` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`applycredit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`applyprice` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`reply` text NOT NULL COMMENT '',
`refundtype` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`rtype` int(3) NOT NULL DEFAULT '0' COMMENT '',
`refundtime` varchar(45) NOT NULL COMMENT '',
`endtime` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`message` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`operatetime` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`realcredit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`realmoney` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`express` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`expresscom` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`expresssn` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`sendtime` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`returntime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`rexpress` varchar(45) NOT NULL DEFAULT '' COMMENT '',
`rexpresscom` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`rexpresssn` varchar(45) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `openid` (`openid`),
KEY `orderid` (`orderid`),
KEY `refundno` (`refundno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_paylog` (
`plid` bigint(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`type` varchar(20) NOT NULL COMMENT '',
`uniacid` int(11) NOT NULL COMMENT '',
`acid` int(10) unsigned NOT NULL COMMENT '',
`openid` varchar(40) NOT NULL COMMENT '',
`tid` varchar(64) NOT NULL COMMENT '',
`credit` int(10) NOT NULL DEFAULT '0' COMMENT '',
`creditmoney` decimal(10,2) NOT NULL COMMENT '',
`fee` decimal(10,2) DEFAULT '0.00' COMMENT '',
`status` tinyint(4) NOT NULL COMMENT '',
`module` varchar(50) NOT NULL COMMENT '',
`tag` varchar(2000) NOT NULL COMMENT '',
`is_usecard` tinyint(3) unsigned NOT NULL COMMENT '',
`card_type` tinyint(3) unsigned NOT NULL COMMENT '',
`card_id` varchar(50) DEFAULT '' COMMENT '',
`card_fee` decimal(10,2) DEFAULT '0.00' COMMENT '',
`encrypt_code` varchar(100) DEFAULT '' COMMENT '',
`uniontid` varchar(50) DEFAULT '' COMMENT '',
PRIMARY KEY (`plid`),
KEY `idx_openid` (`openid`),
KEY `idx_tid` (`tid`),
KEY `idx_uniacid` (`uniacid`),
KEY `uniontid` (`uniontid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_set` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` varchar(45) COMMENT '',
`groups` int(2) NOT NULL DEFAULT '0' COMMENT '',
`followurl` varchar(255) COMMENT '',
`groupsurl` varchar(255) COMMENT '',
`share_title` varchar(255) COMMENT '',
`share_icon` varchar(255) COMMENT '',
`share_desc` varchar(255) COMMENT '',
`groups_description` text COMMENT '',
`description` int(2) NOT NULL DEFAULT '0' COMMENT '',
`followqrcode` varchar(255) COMMENT '',
`share_url` varchar(255) COMMENT '',
`creditdeduct` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`groupsdeduct` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`credit` int(11) NOT NULL DEFAULT '1' COMMENT '',
`groupsmoney` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`refund` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refundday` int(11) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` text NOT NULL COMMENT '',
`rules` text COMMENT '',
`receive` int(11) DEFAULT '0' COMMENT '',
`discount` tinyint(3) DEFAULT '0' COMMENT '',
`headstype` tinyint(3) DEFAULT '0' COMMENT '',
`headsmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`headsdiscount` int(11) DEFAULT '0' COMMENT '',
`followbar` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_verify` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(45) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`verifycode` varchar(45) DEFAULT '' COMMENT '',
`storeid` int(11) DEFAULT '0' COMMENT '',
`verifier` varchar(45) DEFAULT '0' COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`verifytime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_invitation` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`data` text NOT NULL COMMENT '',
`scan` int(11) NOT NULL DEFAULT '0' COMMENT '',
`follow` int(11) NOT NULL DEFAULT '0' COMMENT '',
`qrcode` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_invitation_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`invitation_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`invitation_openid` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`scan_time` int(10) NOT NULL DEFAULT '0' COMMENT '',
`follow` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_posterid` (`invitation_id`),
KEY `idx_scantime` (`scan_time`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_invitation_qr` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`acid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(60) NOT NULL COMMENT '',
`invitationid` int(11) NOT NULL COMMENT '',
`roomid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`sceneid` int(11) NOT NULL COMMENT '',
`ticket` varchar(255) NOT NULL COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
`expire` int(11) NOT NULL DEFAULT '0' COMMENT '',
`qrimg` varchar(255) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`livetype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`liveidentity` varchar(50) NOT NULL COMMENT '',
`screen` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` text NOT NULL COMMENT '',
`category` int(11) NOT NULL DEFAULT '0' COMMENT '',
`url` varchar(1000) NOT NULL COMMENT '',
`thumb` varchar(1000) NOT NULL COMMENT '',
`hot` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`recommend` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`living` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`livetime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`lastlivetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`introduce` text NOT NULL COMMENT '',
`packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`packettotal` int(11) NOT NULL DEFAULT '0' COMMENT '',
`packetprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`packetdes` varchar(255) NOT NULL COMMENT '',
`couponid` varchar(255) NOT NULL COMMENT '',
`share_title` varchar(255) NOT NULL COMMENT '',
`share_icon` varchar(1000) NOT NULL COMMENT '',
`share_desc` text NOT NULL COMMENT '',
`share_url` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
`subscribe` int(11) NOT NULL DEFAULT '0' COMMENT '',
`subscribenotice` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`visit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`video` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
`covertype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`cover` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
`iscoupon` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`nestable` text NOT NULL COMMENT '',
`tabs` text NOT NULL COMMENT '',
`invitation_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`showlevels` varchar(255) NOT NULL COMMENT '',
`showgroups` varchar(255) NOT NULL COMMENT '',
`showcommission` varchar(255) NOT NULL COMMENT '',
`jurisdiction_url` varchar(1000) NOT NULL COMMENT '',
`jurisdictionurl_show` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`notice` varchar(255) NOT NULL COMMENT '',
`notice_url` varchar(1000) NOT NULL COMMENT '',
`followqrcode` varchar(1000) NOT NULL COMMENT '',
`coupon_num` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`),
KEY `idx_category` (`category`),
KEY `idx_hot` (`hot`),
KEY `idx_recommend` (`recommend`),
KEY `idx_living` (`living`),
KEY `idx_status` (`status`),
KEY `idx_livetime` (`livetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`advimg` varchar(255) DEFAULT '' COMMENT '',
`advurl` varchar(500) DEFAULT '' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_coupon` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`roomid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`couponid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`coupontotal` int(11) NOT NULL DEFAULT '0' COMMENT '',
`couponlimit` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_roomid` (`roomid`),
KEY `idx_couponid` (`couponid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_favorite` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`roomid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` tinytext NOT NULL COMMENT '',
`deleted` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_roomid` (`roomid`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`liveid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`liveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`minliveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`maxliveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_goods_option` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL COMMENT '',
`optionid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`liveid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`liveprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_setting` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`ismember` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`share_title` varchar(255) NOT NULL COMMENT '',
`share_icon` varchar(1000) NOT NULL COMMENT '',
`share_desc` varchar(255) NOT NULL COMMENT '',
`share_url` varchar(255) NOT NULL COMMENT '',
`livenoticetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_ismember` (`ismember`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_status` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`roomid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`starttime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`endtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live_view` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(50) NOT NULL COMMENT '',
`roomid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`viewing` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_roomid` (`roomid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_lottery` (
`lottery_id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`lottery_title` varchar(150) COMMENT '',
`lottery_icon` varchar(255) COMMENT '',
`lottery_banner` varchar(255) COMMENT '',
`lottery_cannot` varchar(255) COMMENT '',
`lottery_type` tinyint(1) COMMENT '',
`is_delete` tinyint(1) DEFAULT '0' COMMENT '',
`addtime` int(11) COMMENT '',
`lottery_data` text COMMENT '',
`is_goods` tinyint(1) DEFAULT '0' COMMENT '',
`lottery_days` int(11) DEFAULT '0' COMMENT '',
`task_type` tinyint(1) DEFAULT '0' COMMENT '',
`task_data` text COMMENT '',
`start_time` int(11) COMMENT '',
`end_time` int(11) COMMENT '',
`award_start` int(11) DEFAULT '0' COMMENT '',
`award_end` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`lottery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_lottery_default` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`data` text COMMENT '',
`addtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_lottery_join` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`join_user` varchar(255) COMMENT '',
`lottery_id` int(11) COMMENT '',
`lottery_num` int(10) DEFAULT '0' COMMENT '',
`lottery_tag` varchar(255) COMMENT '',
`addtime` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_lottery_log` (
`log_id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`lottery_id` int(11) DEFAULT '0' COMMENT '',
`join_user` varchar(255) COMMENT '',
`lottery_data` text COMMENT '',
`is_reward` tinyint(1) DEFAULT '0' COMMENT '',
`addtime` int(11) COMMENT '',
PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_mc_merchant` (
`id` int(11) NOT NULL COMMENT '',
`uniacid` int(11) NOT NULL COMMENT '',
`merchant_no` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`username` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`password` varchar(32) NOT NULL DEFAULT '' COMMENT '',
`salt` varchar(8) NOT NULL DEFAULT '' COMMENT '',
`contact_name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`contact_mobile` varchar(16) NOT NULL DEFAULT '' COMMENT '',
`contact_address` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` tinyint(4) NOT NULL COMMENT '',
`status` tinyint(4) NOT NULL COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
`validitytime` int(11) NOT NULL COMMENT '',
`industry` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`uid` int(11) DEFAULT '0' COMMENT '',
`groupid` varchar(1000) DEFAULT '' COMMENT '',
`level` int(11) DEFAULT '0' COMMENT '',
`agentid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`realname` varchar(20) DEFAULT '' COMMENT '',
`mobile` varchar(11) DEFAULT '' COMMENT '',
`pwd` varchar(32) DEFAULT '' COMMENT '',
`weixin` varchar(100) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`createtime` int(10) DEFAULT '0' COMMENT '',
`agenttime` int(10) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`isagent` tinyint(1) DEFAULT '0' COMMENT '',
`clickcount` int(11) DEFAULT '0' COMMENT '',
`agentlevel` int(11) DEFAULT '0' COMMENT '',
`noticeset` text COMMENT '',
`nickname` varchar(255) DEFAULT '' COMMENT '',
`credit1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`credit2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`birthyear` varchar(255) DEFAULT '' COMMENT '',
`birthmonth` varchar(255) DEFAULT '' COMMENT '',
`birthday` varchar(255) DEFAULT '' COMMENT '',
`gender` tinyint(3) DEFAULT '0' COMMENT '',
`avatar` varchar(255) DEFAULT '' COMMENT '',
`province` varchar(255) DEFAULT '' COMMENT '',
`city` varchar(255) DEFAULT '' COMMENT '',
`area` varchar(255) DEFAULT '' COMMENT '',
`childtime` int(11) DEFAULT '0' COMMENT '',
`inviter` int(11) DEFAULT '0' COMMENT '',
`agentnotupgrade` int(11) DEFAULT '0' COMMENT '',
`agentselectgoods` tinyint(3) DEFAULT '0' COMMENT '',
`agentblack` int(11) DEFAULT '0' COMMENT '',
`fixagentid` tinyint(3) DEFAULT '0' COMMENT '',
`diymemberid` int(11) DEFAULT '0' COMMENT '',
`diymemberfields` text COMMENT '',
`diymemberdata` text COMMENT '',
`diymemberdataid` int(11) DEFAULT '0' COMMENT '',
`diycommissionid` int(11) DEFAULT '0' COMMENT '',
`diycommissionfields` text COMMENT '',
`diycommissiondata` text COMMENT '',
`diycommissiondataid` int(11) DEFAULT '0' COMMENT '',
`isblack` int(11) DEFAULT '0' COMMENT '',
`username` varchar(255) DEFAULT '' COMMENT '',
`commission_total` decimal(10,2) DEFAULT '0.00' COMMENT '',
`endtime2` int(11) DEFAULT '0' COMMENT '',
`ispartner` tinyint(3) DEFAULT '0' COMMENT '',
`partnertime` int(11) DEFAULT '0' COMMENT '',
`partnerstatus` tinyint(3) DEFAULT '0' COMMENT '',
`partnerblack` tinyint(3) DEFAULT '0' COMMENT '',
`partnerlevel` int(11) DEFAULT '0' COMMENT '',
`partnernotupgrade` tinyint(3) DEFAULT '0' COMMENT '',
`diyglobonusid` int(11) DEFAULT '0' COMMENT '',
`diyglobonusdata` text COMMENT '',
`diyglobonusfields` text COMMENT '',
`isaagent` tinyint(3) DEFAULT '0' COMMENT '',
`aagentlevel` int(11) DEFAULT '0' COMMENT '',
`aagenttime` int(11) DEFAULT '0' COMMENT '',
`aagentstatus` tinyint(3) DEFAULT '0' COMMENT '',
`aagentblack` tinyint(3) DEFAULT '0' COMMENT '',
`aagentnotupgrade` tinyint(3) DEFAULT '0' COMMENT '',
`aagenttype` tinyint(3) DEFAULT '0' COMMENT '',
`aagentprovinces` text COMMENT '',
`aagentcitys` text COMMENT '',
`aagentareas` text COMMENT '',
`diyaagentid` int(11) DEFAULT '0' COMMENT '',
`diyaagentdata` text COMMENT '',
`diyaagentfields` text COMMENT '',
`salt` varchar(32) COMMENT '',
`mobileverify` tinyint(3) DEFAULT '0' COMMENT '',
`mobileuser` tinyint(3) DEFAULT '0' COMMENT '',
`carrier_mobile` varchar(11) DEFAULT '0' COMMENT '',
`isauthor` tinyint(1) DEFAULT '0' COMMENT '',
`authortime` int(11) DEFAULT '0' COMMENT '',
`authorstatus` tinyint(1) DEFAULT '0' COMMENT '',
`authorblack` tinyint(1) DEFAULT '0' COMMENT '',
`authorlevel` int(11) DEFAULT '0' COMMENT '',
`authornotupgrade` tinyint(1) DEFAULT '0' COMMENT '',
`diyauthorid` int(11) DEFAULT '0' COMMENT '',
`diyauthordata` text COMMENT '',
`diyauthorfields` text COMMENT '',
`authorid` int(11) DEFAULT '0' COMMENT '',
`comefrom` varchar(20) COMMENT '',
`openid_qq` varchar(50) COMMENT '',
`openid_wx` varchar(50) COMMENT '',
`diymaxcredit` tinyint(3) DEFAULT '0' COMMENT '',
`maxcredit` int(11) DEFAULT '0' COMMENT '',
`datavalue` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`openid_wa` varchar(50) COMMENT '',
`nickname_wechat` varchar(255) DEFAULT '' COMMENT '',
`avatar_wechat` varchar(255) DEFAULT '' COMMENT '',
`updateaddress` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`membercardid` varchar(255) DEFAULT '' COMMENT '',
`membercardcode` varchar(255) DEFAULT '' COMMENT '',
`membershipnumber` varchar(255) DEFAULT '' COMMENT '',
`membercardactive` tinyint(1) DEFAULT '0' COMMENT '',
`commission` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission_pay` decimal(10,2) DEFAULT '0.00' COMMENT '',
`idnumber` varchar(255) COMMENT '',
`wxcardupdatetime` int(11) DEFAULT '0' COMMENT '',
`hasnewcoupon` tinyint(1) DEFAULT '0' COMMENT '',
`isheads` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`headsstatus` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`headstime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`headsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`diyheadsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`diyheadsdata` text COMMENT '',
`diyheadsfields` text COMMENT '',
`applyagenttime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_shareid` (`agentid`),
KEY `idx_openid` (`openid`),
KEY `idx_status` (`status`),
KEY `idx_agenttime` (`agenttime`),
KEY `idx_isagent` (`isagent`),
KEY `idx_uid` (`uid`),
KEY `idx_groupid` (`groupid`),
KEY `idx_level` (`level`),
KEY `idx_mobile` (`mobile`),
KEY `idx_openid_wx` (`openid_wx`),
KEY `idx_openid_wa` (`openid_wa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_address` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '0' COMMENT '',
`realname` varchar(20) DEFAULT '' COMMENT '',
`mobile` varchar(11) DEFAULT '' COMMENT '',
`province` varchar(30) DEFAULT '' COMMENT '',
`city` varchar(30) DEFAULT '' COMMENT '',
`area` varchar(30) DEFAULT '' COMMENT '',
`address` varchar(300) DEFAULT '' COMMENT '',
`isdefault` tinyint(1) DEFAULT '0' COMMENT '',
`zipcode` varchar(255) DEFAULT '' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`street` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`datavalue` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`streetdatavalue` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`lng` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`lat` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) COMMENT '',
`card_style` varchar(255) COMMENT '',
`sort_order` int(10) DEFAULT '0' COMMENT '',
`shipping` tinyint(11) COMMENT '',
`member_discount` tinyint(1) COMMENT '',
`discount_rate` decimal(10,1) COMMENT '',
`discount` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
`is_card_points` tinyint(1) COMMENT '',
`card_points` varchar(50) COMMENT '',
`is_card_coupon` tinyint(1) COMMENT '',
`card_coupon` varchar(500) COMMENT '',
`is_month_points` tinyint(1) COMMENT '',
`month_points` varchar(50) COMMENT '',
`is_month_coupon` tinyint(1) COMMENT '',
`month_coupon` varchar(500) COMMENT '',
`validate` int(11) NOT NULL DEFAULT '1' COMMENT '',
`price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`stock` int(10) COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
`description` text COMMENT '',
`kefu_tel` varchar(100) COMMENT '',
`create_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`sale_count` int(11) NOT NULL DEFAULT '0' COMMENT '',
`del_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`isdelete` tinyint(11) NOT NULL DEFAULT '0' COMMENT '',
`update_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card_buysend` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) COMMENT '',
`member_card_id` int(11) NOT NULL COMMENT '',
`name` varchar(255) NOT NULL COMMENT '',
`receive_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`create_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`sendtype` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
`card_points` varchar(50) COMMENT '',
`card_couponid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`card_couponcount` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card_history` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`order_id` int(11) NOT NULL COMMENT '',
`openid` varchar(50) COMMENT '',
`member_card_id` int(11) NOT NULL COMMENT '',
`name` varchar(255) NOT NULL COMMENT '',
`expire_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`receive_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`user_name` varchar(255) COMMENT '',
`telephone` varchar(32) COMMENT '',
`isdelete` int(11) NOT NULL DEFAULT '0' COMMENT '',
`del_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pay_type` int(1) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card_monthsend` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) COMMENT '',
`member_card_id` int(11) NOT NULL COMMENT '',
`name` varchar(255) NOT NULL COMMENT '',
`receive_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`create_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`validate` int(11) NOT NULL DEFAULT '1' COMMENT '',
`sendtype` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
`card_points` varchar(50) COMMENT '',
`card_couponid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`card_couponcount` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card_order` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) COMMENT '',
`member_id` int(11) DEFAULT '0' COMMENT '',
`payment_name` varchar(32) COMMENT '',
`telephone` varchar(32) COMMENT '',
`orderno` varchar(30) COMMENT '',
`total` decimal(15,2) NOT NULL DEFAULT '0.00' COMMENT '',
`status` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`finishtime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`member_card_id` int(11) DEFAULT '0' COMMENT '',
`wxapp_prepay_id` varchar(255) COMMENT '',
`transid` varchar(32) COMMENT '',
`paytype` varchar(32) COMMENT '',
`apppay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`borrowopenid` varchar(50) COMMENT '',
`isborrow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_card_uselog` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) COMMENT '',
`order_id` int(11) NOT NULL COMMENT '',
`member_card_id` int(11) NOT NULL COMMENT '',
`name` varchar(255) NOT NULL COMMENT '',
`shipping` tinyint(1) DEFAULT '0' COMMENT '',
`discount_rate` varchar(50) COMMENT '',
`order_price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`dec_price` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '',
`create_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_cart` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(100) DEFAULT '' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`marketprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`optionid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`diyformdataid` int(11) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`selected` tinyint(1) DEFAULT '1' COMMENT '',
`selectedadd` tinyint(1) DEFAULT '1' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`isnewstore` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_credit_record` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uid` int(11) unsigned NOT NULL COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`uniacid` int(11) NOT NULL COMMENT '',
`credittype` varchar(10) NOT NULL COMMENT '',
`num` decimal(10,2) NOT NULL COMMENT '',
`operator` int(10) unsigned NOT NULL COMMENT '',
`createtime` int(10) unsigned NOT NULL COMMENT '',
`remark` varchar(200) NOT NULL COMMENT '',
`module` varchar(30) NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_favorite` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`type` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_deleted` (`deleted`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_group` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`groupname` varchar(255) DEFAULT '' COMMENT '',
`description` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_group_log` (
`log_id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`mid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '',
`group_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`log_id`),
KEY `group_id` (`group_id`),
KEY `openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_history` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(10) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`times` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_deleted` (`deleted`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`level` int(11) DEFAULT '0' COMMENT '',
`levelname` varchar(50) DEFAULT '' COMMENT '',
`ordermoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`ordercount` int(10) DEFAULT '0' COMMENT '',
`discount` decimal(10,2) DEFAULT '0.00' COMMENT '',
`enabled` tinyint(3) DEFAULT '0' COMMENT '',
`enabledadd` tinyint(1) DEFAULT '0' COMMENT '',
`buygoods` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`goodsids` text NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(3) COMMENT '',
`logno` varchar(255) DEFAULT '' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`rechargetype` varchar(255) DEFAULT '' COMMENT '',
`gives` decimal(10,2) COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`transid` varchar(255) DEFAULT '' COMMENT '',
`realmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`charge` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`isborrow` tinyint(3) DEFAULT '0' COMMENT '',
`borrowopenid` varchar(100) DEFAULT '' COMMENT '',
`remark` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`apppay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`alipay` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`realname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`applytype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`sendmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`senddata` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_type` (`type`),
KEY `idx_createtime` (`createtime`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_mergelog` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`mergetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid_a` varchar(30) NOT NULL COMMENT '',
`openid_b` varchar(30) NOT NULL COMMENT '',
`mid_a` int(11) NOT NULL COMMENT '',
`mid_b` int(11) NOT NULL COMMENT '',
`detail_a` text COMMENT '',
`detail_b` text COMMENT '',
`detail_c` text COMMENT '',
`fromuniacid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_mid_a` (`mid_a`),
KEY `idx_mid_b` (`mid_b`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_message_template` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`template_id` varchar(255) DEFAULT '' COMMENT '',
`first` text NOT NULL COMMENT '',
`firstcolor` varchar(255) DEFAULT '' COMMENT '',
`data` text NOT NULL COMMENT '',
`remark` text NOT NULL COMMENT '',
`remarkcolor` varchar(255) DEFAULT '' COMMENT '',
`url` varchar(255) NOT NULL COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`sendtimes` int(11) DEFAULT '0' COMMENT '',
`sendcount` int(11) DEFAULT '0' COMMENT '',
`typecode` varchar(30) DEFAULT '' COMMENT '',
`messagetype` tinyint(1) DEFAULT '0' COMMENT '',
`send_desc` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_message_template_default` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`typecode` varchar(255) COMMENT '',
`uniacid` int(11) COMMENT '',
`templateid` varchar(255) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_message_template_type` (
`id` int(11) NOT NULL COMMENT '',
`name` varchar(255) COMMENT '',
`typecode` varchar(255) COMMENT '',
`templatecode` varchar(255) COMMENT '',
`templateid` varchar(255) COMMENT '',
`templatename` varchar(255) COMMENT '',
`content` varchar(1000) COMMENT '',
`showtotaladd` tinyint(1) DEFAULT '0' COMMENT '',
`typegroup` varchar(255) DEFAULT '' COMMENT '',
`groupname` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_printer` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`print_data` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_printer_template` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`print_title` varchar(255) DEFAULT '' COMMENT '',
`print_style` varchar(255) DEFAULT '' COMMENT '',
`print_data` text COMMENT '',
`code` varchar(500) DEFAULT '' COMMENT '',
`qrcode` varchar(500) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`goodssn` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`productsn` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_rank` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(10) unsigned NOT NULL COMMENT '',
`status` tinyint(4) NOT NULL COMMENT '',
`num` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_tmp` (
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_account` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`username` varchar(255) DEFAULT '' COMMENT '',
`pwd` varchar(255) DEFAULT '' COMMENT '',
`salt` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`perms` text COMMENT '',
`isfounder` tinyint(3) DEFAULT '0' COMMENT '',
`lastip` varchar(255) DEFAULT '' COMMENT '',
`lastvisit` varchar(255) DEFAULT '' COMMENT '',
`roleid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) COMMENT '',
`link` varchar(255) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` int(11) COMMENT '',
`enabled` int(11) COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_banner` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`bannername` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_bill` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`applyno` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderids` text NOT NULL COMMENT '',
`realprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`realpricerate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`finalprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`payrateprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`payrate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`applytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`checktime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`paytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`invalidtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`refusetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`remark` text NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`ordernum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`passrealprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`passrealpricerate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`passorderids` text NOT NULL COMMENT '',
`passordernum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`passorderprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`alipay` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`bankcard` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`applyrealname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`applytype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`handpay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`creditstatus` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`creditrate` int(10) NOT NULL DEFAULT '1' COMMENT '',
`creditnum` int(10) NOT NULL DEFAULT '0' COMMENT '',
`creditmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`passcreditnum` int(10) NOT NULL DEFAULT '0' COMMENT '',
`passcreditmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`isbillcredit` int(10) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_bill_select` (
`bill_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`order_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
UNIQUE KEY `bid_oid` (`bill_id`,`order_id`),
KEY `bid` (`bill_id`),
KEY `oid` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_billo` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`billid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`ordermoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`catename` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`thumb` varchar(500) DEFAULT '' COMMENT '',
`isrecommand` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_category_swipe` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(1) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`thumb` varchar(500) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_clearing` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`clearno` varchar(64) NOT NULL DEFAULT '' COMMENT '',
`goodsprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`dispatchprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`deductprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`deductcredit2` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`discountprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`deductenough` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`merchdeductenough` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`isdiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '',
`starttime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '',
`endtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`realprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`realpricerate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`finalprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`remark` varchar(2000) NOT NULL DEFAULT '' COMMENT '',
`paytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`payrate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `merchid` (`merchid`),
KEY `starttime` (`starttime`),
KEY `endtime` (`endtime`),
KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_commission_orderprice` (
`order_id` int(11) unsigned NOT NULL COMMENT '',
`commission_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_group` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`groupname` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`isdefault` tinyint(1) DEFAULT '0' COMMENT '',
`goodschecked` tinyint(1) DEFAULT '0' COMMENT '',
`commissionchecked` tinyint(1) DEFAULT '0' COMMENT '',
`changepricechecked` tinyint(1) DEFAULT '0' COMMENT '',
`finishchecked` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_nav` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`navname` varchar(255) DEFAULT '' COMMENT '',
`icon` varchar(255) DEFAULT '' COMMENT '',
`url` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_status` (`status`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_notice` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`detail` text COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`createtime` int(11) COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_perm_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uid` int(11) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`type` varchar(255) DEFAULT '' COMMENT '',
`op` text COMMENT '',
`ip` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_createtime` (`createtime`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`),
KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_perm_role` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`rolename` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`perms` text COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`),
KEY `idx_deleted` (`deleted`),
KEY `merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_reg` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`merchname` varchar(255) DEFAULT '' COMMENT '',
`salecate` varchar(255) DEFAULT '' COMMENT '',
`desc` varchar(500) DEFAULT '' COMMENT '',
`realname` varchar(255) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`applytime` int(11) DEFAULT '0' COMMENT '',
`reason` text COMMENT '',
`uname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`upass` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_saler` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`storeid` int(11) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`salername` varchar(255) DEFAULT '' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_storeid` (`storeid`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_store` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`storename` varchar(255) DEFAULT '' COMMENT '',
`address` varchar(255) DEFAULT '' COMMENT '',
`tel` varchar(255) DEFAULT '' COMMENT '',
`lat` varchar(255) DEFAULT '' COMMENT '',
`lng` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`type` tinyint(1) DEFAULT '0' COMMENT '',
`realname` varchar(255) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`fetchtime` varchar(255) DEFAULT '' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`saletime` varchar(255) DEFAULT '' COMMENT '',
`desc` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`commission_total` decimal(10,2) COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_merch_user` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`regid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`groupid` int(11) DEFAULT '0' COMMENT '',
`merchno` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`merchname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`salecate` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`desc` varchar(500) NOT NULL DEFAULT '' COMMENT '',
`realname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`accounttime` int(11) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`applytime` int(11) DEFAULT '0' COMMENT '',
`accounttotal` int(11) DEFAULT '0' COMMENT '',
`remark` text COMMENT '',
`jointime` int(11) DEFAULT '0' COMMENT '',
`accountid` int(11) DEFAULT '0' COMMENT '',
`sets` text COMMENT '',
`logo` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`payopenid` varchar(32) NOT NULL DEFAULT '' COMMENT '',
`payrate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`isrecommand` tinyint(1) DEFAULT '0' COMMENT '',
`cateid` int(11) DEFAULT '0' COMMENT '',
`address` varchar(255) DEFAULT '' COMMENT '',
`tel` varchar(255) DEFAULT '' COMMENT '',
`lat` varchar(255) DEFAULT '' COMMENT '',
`lng` varchar(255) DEFAULT '' COMMENT '',
`pluginset` text NOT NULL COMMENT '',
`uname` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`upass` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`maxgoods` int(11) NOT NULL DEFAULT '0' COMMENT '',
`iscredit` tinyint(3) NOT NULL DEFAULT '1' COMMENT '',
`creditrate` int(10) NOT NULL DEFAULT '1' COMMENT '',
`iscreditmoney` int(3) NOT NULL DEFAULT '1' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`),
KEY `idx_groupid` (`groupid`),
KEY `idx_regid` (`regid`),
KEY `idx_cateid` (`cateid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_multi_shop` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`uid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`company` varchar(255) DEFAULT '' COMMENT '',
`sales` varchar(255) DEFAULT '' COMMENT '',
`starttime` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`applytime` int(11) DEFAULT '0' COMMENT '',
`jointime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`refusecontent` text COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_nav` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`navname` varchar(255) DEFAULT '' COMMENT '',
`icon` varchar(255) DEFAULT '' COMMENT '',
`url` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`iswxapp` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_status` (`status`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_newstore_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(255) COMMENT '',
`uniacid` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_notice` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`detail` text COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`createtime` int(11) COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
`iswxapp` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`agentid` int(11) DEFAULT '0' COMMENT '',
`ordersn` varchar(30) DEFAULT '' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goodsprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`discountprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`paytype` tinyint(1) DEFAULT '0' COMMENT '',
`transid` varchar(30) DEFAULT '0' COMMENT '',
`remark` varchar(1000) DEFAULT '' COMMENT '',
`addressid` int(11) DEFAULT '0' COMMENT '',
`dispatchprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`dispatchid` int(10) DEFAULT '0' COMMENT '',
`createtime` int(10) COMMENT '',
`dispatchtype` tinyint(3) DEFAULT '0' COMMENT '',
`carrier` text COMMENT '',
`refundid` int(11) DEFAULT '0' COMMENT '',
`iscomment` tinyint(3) DEFAULT '0' COMMENT '',
`creditadd` tinyint(3) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`userdeleted` tinyint(3) DEFAULT '0' COMMENT '',
`finishtime` int(11) DEFAULT '0' COMMENT '',
`paytime` int(11) DEFAULT '0' COMMENT '',
`expresscom` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`expresssn` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`express` varchar(255) DEFAULT '' COMMENT '',
`sendtime` int(11) DEFAULT '0' COMMENT '',
`fetchtime` int(11) DEFAULT '0' COMMENT '',
`cash` tinyint(3) DEFAULT '0' COMMENT '',
`canceltime` int(11) COMMENT '',
`cancelpaytime` int(11) DEFAULT '0' COMMENT '',
`refundtime` int(11) DEFAULT '0' COMMENT '',
`isverify` tinyint(3) DEFAULT '0' COMMENT '',
`verified` tinyint(3) DEFAULT '0' COMMENT '',
`verifyopenid` varchar(255) DEFAULT '' COMMENT '',
`verifycode` varchar(255) DEFAULT '' COMMENT '',
`verifytime` int(11) DEFAULT '0' COMMENT '',
`verifystoreid` int(11) DEFAULT '0' COMMENT '',
`deductprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductcredit` int(10) DEFAULT '0' COMMENT '',
`deductcredit2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deductenough` decimal(10,2) DEFAULT '0.00' COMMENT '',
`virtual` int(11) DEFAULT '0' COMMENT '',
`virtual_info` text COMMENT '',
`virtual_str` text COMMENT '',
`address` text COMMENT '',
`sysdeleted` tinyint(3) DEFAULT '0' COMMENT '',
`ordersn2` int(11) DEFAULT '0' COMMENT '',
`changeprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`changedispatchprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`oldprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`olddispatchprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`isvirtual` tinyint(3) DEFAULT '0' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`couponprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`storeid` int(11) DEFAULT '0' COMMENT '',
`printstate` tinyint(1) DEFAULT '0' COMMENT '',
`printstate2` tinyint(1) DEFAULT '0' COMMENT '',
`address_send` text COMMENT '',
`refundstate` tinyint(3) DEFAULT '0' COMMENT '',
`closereason` text COMMENT '',
`remarksaler` text COMMENT '',
`remarkclose` text COMMENT '',
`remarksend` text COMMENT '',
`ismr` int(1) NOT NULL DEFAULT '0' COMMENT '',
`isdiscountprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`isvirtualsend` tinyint(1) DEFAULT '0' COMMENT '',
`virtualsend_info` text COMMENT '',
`verifyinfo` text COMMENT '',
`verifytype` tinyint(1) DEFAULT '0' COMMENT '',
`verifycodes` text COMMENT '',
`invoicename` varchar(255) DEFAULT '' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`ismerch` tinyint(1) DEFAULT '0' COMMENT '',
`parentid` int(11) DEFAULT '0' COMMENT '',
`isparent` tinyint(1) DEFAULT '0' COMMENT '',
`grprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`merchshow` tinyint(1) DEFAULT '0' COMMENT '',
`merchdeductenough` decimal(10,2) DEFAULT '0.00' COMMENT '',
`couponmerchid` int(11) DEFAULT '0' COMMENT '',
`isglobonus` tinyint(3) DEFAULT '0' COMMENT '',
`merchapply` tinyint(1) DEFAULT '0' COMMENT '',
`isabonus` tinyint(3) DEFAULT '0' COMMENT '',
`isborrow` tinyint(3) DEFAULT '0' COMMENT '',
`borrowopenid` varchar(100) DEFAULT '' COMMENT '',
`merchisdiscountprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`apppay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`coupongoodprice` decimal(10,2) DEFAULT '1.00' COMMENT '',
`buyagainprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`authorid` int(11) DEFAULT '0' COMMENT '',
`isauthor` tinyint(1) DEFAULT '0' COMMENT '',
`ispackage` tinyint(3) DEFAULT '0' COMMENT '',
`packageid` int(11) DEFAULT '0' COMMENT '',
`taskdiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`seckilldiscountprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`verifyendtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`willcancelmessage` tinyint(1) DEFAULT '0' COMMENT '',
`sendtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`lotterydiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`contype` tinyint(1) DEFAULT '0' COMMENT '',
`wxid` int(11) DEFAULT '0' COMMENT '',
`wxcardid` varchar(50) DEFAULT '' COMMENT '',
`wxcode` varchar(50) DEFAULT '' COMMENT '',
`dispatchkey` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`quickid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`istrade` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`isnewstore` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`liveid` int(11) NOT NULL COMMENT '',
`ordersn_trade` varchar(32) NOT NULL COMMENT '',
`tradestatus` tinyint(1) DEFAULT '0' COMMENT '',
`tradepaytype` tinyint(1) NOT NULL COMMENT '',
`tradepaytime` int(11) DEFAULT '0' COMMENT '',
`dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`betweenprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`isshare` int(11) NOT NULL DEFAULT '0' COMMENT '',
`officcode` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`wxapp_prepay_id` varchar(100) COMMENT '',
`cashtime` int(11) DEFAULT '0' COMMENT '',
`iswxappcreate` tinyint(1) DEFAULT '0' COMMENT '',
`random_code` varchar(4) COMMENT '',
`print_template` text COMMENT '',
`city_express_state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`is_cashier` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`commissionmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`iscycelbuy` tinyint(3) DEFAULT '0' COMMENT '',
`cycelbuy_predict_time` int(11) COMMENT '',
`cycelbuy_periodic` varchar(255) COMMENT '',
`invoice_img` varchar(255) DEFAULT '' COMMENT '',
`headsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend` text COMMENT '',
`dividend_applytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend_checktime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend_paytime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend_invalidtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend_deletetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dividend_status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`dividend_content` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_shareid` (`agentid`),
KEY `idx_status` (`status`),
KEY `idx_createtime` (`createtime`),
KEY `idx_refundid` (`refundid`),
KEY `idx_paytime` (`paytime`),
KEY `idx_finishtime` (`finishtime`),
KEY `idx_merchid` (`merchid`),
KEY `idx_ordersn` (`ordersn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_buysend` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`credit` float(10,2) DEFAULT '0.00' COMMENT '',
`money` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_orderid` (`orderid`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_comment` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '' COMMENT '',
`nickname` varchar(50) DEFAULT '' COMMENT '',
`headimgurl` varchar(255) DEFAULT '' COMMENT '',
`level` tinyint(3) DEFAULT '0' COMMENT '',
`content` varchar(255) DEFAULT '' COMMENT '',
`images` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`append_content` varchar(255) DEFAULT '' COMMENT '',
`append_images` text COMMENT '',
`reply_content` varchar(255) DEFAULT '' COMMENT '',
`reply_images` text COMMENT '',
`append_reply_content` varchar(255) DEFAULT '' COMMENT '',
`append_reply_images` text COMMENT '',
`istop` tinyint(3) DEFAULT '0' COMMENT '',
`checked` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`replychecked` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '1' COMMENT '',
`optionid` int(10) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`optionname` text COMMENT '',
`commission1` text COMMENT '',
`applytime1` int(11) DEFAULT '0' COMMENT '',
`checktime1` int(10) DEFAULT '0' COMMENT '',
`paytime1` int(11) DEFAULT '0' COMMENT '',
`invalidtime1` int(11) DEFAULT '0' COMMENT '',
`deletetime1` int(11) DEFAULT '0' COMMENT '',
`status1` tinyint(3) DEFAULT '0' COMMENT '',
`content1` text COMMENT '',
`commission2` text COMMENT '',
`applytime2` int(11) DEFAULT '0' COMMENT '',
`checktime2` int(10) DEFAULT '0' COMMENT '',
`paytime2` int(11) DEFAULT '0' COMMENT '',
`invalidtime2` int(11) DEFAULT '0' COMMENT '',
`deletetime2` int(11) DEFAULT '0' COMMENT '',
`status2` tinyint(3) DEFAULT '0' COMMENT '',
`content2` text COMMENT '',
`commission3` text COMMENT '',
`applytime3` int(11) DEFAULT '0' COMMENT '',
`checktime3` int(10) DEFAULT '0' COMMENT '',
`paytime3` int(11) DEFAULT '0' COMMENT '',
`invalidtime3` int(11) DEFAULT '0' COMMENT '',
`deletetime3` int(11) DEFAULT '0' COMMENT '',
`status3` tinyint(3) DEFAULT '0' COMMENT '',
`content3` text COMMENT '',
`realprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`goodssn` varchar(255) DEFAULT '' COMMENT '',
`productsn` varchar(255) DEFAULT '' COMMENT '',
`nocommission` tinyint(3) DEFAULT '0' COMMENT '',
`changeprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`oldprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commissions` text COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`diyformdataid` int(11) DEFAULT '0' COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`printstate` int(11) NOT NULL DEFAULT '0' COMMENT '',
`printstate2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`rstate` tinyint(3) DEFAULT '0' COMMENT '',
`refundtime` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`parentorderid` int(11) DEFAULT '0' COMMENT '',
`merchsale` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`isdiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`canbuyagain` tinyint(1) DEFAULT '0' COMMENT '',
`seckill` tinyint(3) DEFAULT '0' COMMENT '',
`seckill_taskid` int(11) DEFAULT '0' COMMENT '',
`seckill_roomid` int(11) DEFAULT '0' COMMENT '',
`seckill_timeid` int(11) DEFAULT '0' COMMENT '',
`is_make` tinyint(1) DEFAULT '0' COMMENT '',
`sendtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`expresscom` varchar(30) NOT NULL COMMENT '',
`expresssn` varchar(50) NOT NULL COMMENT '',
`express` varchar(255) NOT NULL COMMENT '',
`sendtime` int(11) NOT NULL COMMENT '',
`finishtime` int(11) NOT NULL COMMENT '',
`remarksend` text NOT NULL COMMENT '',
`prohibitrefund` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`storeid` varchar(255) NOT NULL COMMENT '',
`trade_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`optime` varchar(30) NOT NULL COMMENT '',
`tdate_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`peopleid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`esheetprintnum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`ordercode` varchar(30) NOT NULL COMMENT '',
`title` varchar(255) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_orderid` (`orderid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_applytime1` (`applytime1`),
KEY `idx_checktime1` (`checktime1`),
KEY `idx_status1` (`status1`),
KEY `idx_applytime2` (`applytime2`),
KEY `idx_checktime2` (`checktime2`),
KEY `idx_status2` (`status2`),
KEY `idx_applytime3` (`applytime3`),
KEY `idx_invalidtime1` (`invalidtime1`),
KEY `idx_checktime3` (`checktime3`),
KEY `idx_invalidtime2` (`invalidtime2`),
KEY `idx_invalidtime3` (`invalidtime3`),
KEY `idx_status3` (`status3`),
KEY `idx_paytime1` (`paytime1`),
KEY `idx_paytime2` (`paytime2`),
KEY `idx_paytime3` (`paytime3`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_peerpay` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`peerpay_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`peerpay_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`peerpay_maxprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`peerpay_realprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`peerpay_selfpay` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`peerpay_message` varchar(500) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_peerpay_payinfo` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`pid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`uid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`uname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`usay` varchar(500) NOT NULL DEFAULT '' COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`headimg` varchar(255) COMMENT '',
`refundstatus` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`refundprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`tid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_print` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`status` tinyint(3) DEFAULT '0' COMMENT '',
`sid` tinyint(3) DEFAULT '0' COMMENT '',
`foid` tinyint(3) DEFAULT '0' COMMENT '',
`oid` int(11) DEFAULT '0' COMMENT '',
`pid` int(11) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`addtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_refund` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`refundno` varchar(255) DEFAULT '' COMMENT '',
`price` varchar(255) DEFAULT '' COMMENT '',
`reason` varchar(255) DEFAULT '' COMMENT '',
`images` text COMMENT '',
`content` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`reply` text COMMENT '',
`refundtype` tinyint(3) DEFAULT '0' COMMENT '',
`orderprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`applyprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`imgs` text COMMENT '',
`rtype` tinyint(3) DEFAULT '0' COMMENT '',
`refundaddress` text COMMENT '',
`message` text COMMENT '',
`express` varchar(100) DEFAULT '' COMMENT '',
`expresscom` varchar(100) DEFAULT '' COMMENT '',
`expresssn` varchar(100) DEFAULT '' COMMENT '',
`operatetime` int(11) DEFAULT '0' COMMENT '',
`sendtime` int(11) DEFAULT '0' COMMENT '',
`returntime` int(11) DEFAULT '0' COMMENT '',
`refundtime` int(11) DEFAULT '0' COMMENT '',
`rexpress` varchar(100) DEFAULT '' COMMENT '',
`rexpresscom` varchar(100) DEFAULT '' COMMENT '',
`rexpresssn` varchar(100) DEFAULT '' COMMENT '',
`refundaddressid` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`realprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_createtime` (`createtime`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_package` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`freight` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`thumb` varchar(255) NOT NULL COMMENT '',
`starttime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`endtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` varchar(255) NOT NULL COMMENT '',
`cash` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`share_title` varchar(255) NOT NULL COMMENT '',
`share_icon` varchar(255) NOT NULL COMMENT '',
`share_desc` varchar(500) NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`deleted` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`dispatchtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_package_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`pid` int(11) NOT NULL COMMENT '',
`goodsid` int(11) NOT NULL COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`thumb` varchar(255) NOT NULL COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`option` varchar(255) NOT NULL COMMENT '',
`goodssn` varchar(255) NOT NULL COMMENT '',
`productsn` varchar(255) NOT NULL COMMENT '',
`hasoption` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`marketprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`packageprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission3` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_package_goods_option` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`goodsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`optionid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL COMMENT '',
`packageprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`marketprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`commission1` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`commission2` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`commission3` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_payment` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`appid` varchar(255) DEFAULT '' COMMENT '',
`mch_id` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`apikey` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`sub_appid` varchar(50) DEFAULT '' COMMENT '',
`sub_appsecret` varchar(50) DEFAULT '' COMMENT '',
`sub_mch_id` varchar(50) DEFAULT '' COMMENT '',
`cert_file` text COMMENT '',
`key_file` text COMMENT '',
`root_file` text COMMENT '',
`is_raw` tinyint(1) DEFAULT '0' COMMENT '',
`createtime` int(10) unsigned DEFAULT '0' COMMENT '',
`paytype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`alitype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`alipay_sec` text NOT NULL COMMENT '',
`qpay_signtype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`app_qpay_public_key` text NOT NULL COMMENT '',
`app_qpay_private_key` text NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_pc_adv` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) unsigned NOT NULL COMMENT '',
`advname` varchar(255) NOT NULL COMMENT '',
`title` varchar(255) COMMENT '',
`src` varchar(255) NOT NULL COMMENT '',
`alt` varchar(255) COMMENT '',
`enabled` tinyint(3) unsigned NOT NULL COMMENT '',
`link` varchar(255) COMMENT '',
`width` int(11) unsigned NOT NULL COMMENT '',
`height` int(11) unsigned NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_pc_link` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) unsigned NOT NULL COMMENT '',
`linkname` varchar(255) NOT NULL COMMENT '',
`url` varchar(255) NOT NULL COMMENT '',
`status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '',
`displayorder` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_pc_menu` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) unsigned NOT NULL COMMENT '',
`type` int(11) unsigned DEFAULT '0' COMMENT '',
`displayorder` int(11) unsigned DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`enabled` tinyint(3) unsigned DEFAULT '1' COMMENT '',
`createtime` int(11) unsigned COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_pc_slide` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) unsigned DEFAULT '0' COMMENT '',
`type` int(11) unsigned DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`backcolor` varchar(255) COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`shopid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_perm_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uid` int(11) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`type` varchar(255) DEFAULT '' COMMENT '',
`op` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`ip` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uid` (`uid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_op` (`op`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_perm_plugin` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`acid` int(11) DEFAULT '0' COMMENT '',
`uid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`plugins` text COMMENT '',
`coms` text COMMENT '',
`datas` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uid` (`uid`),
KEY `idx_acid` (`acid`),
KEY `idx_type` (`type`),
KEY `idx_uniacid` (`acid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_perm_role` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`rolename` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`perms` text COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`perms2` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_perm_user` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`uid` int(11) DEFAULT '0' COMMENT '',
`username` varchar(255) DEFAULT '' COMMENT '',
`password` varchar(255) DEFAULT '' COMMENT '',
`roleid` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`perms` text COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`realname` varchar(255) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`perms2` text COMMENT '',
`openid` varchar(50) COMMENT '',
`openid_wa` varchar(50) COMMENT '',
`member_nick` varchar(50) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_uid` (`uid`),
KEY `idx_roleid` (`roleid`),
KEY `idx_status` (`status`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_plugin` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`displayorder` int(11) DEFAULT '0' COMMENT '',
`identity` varchar(50) DEFAULT '' COMMENT '',
`category` varchar(255) DEFAULT '' COMMENT '',
`name` varchar(50) DEFAULT '' COMMENT '',
`version` varchar(10) DEFAULT '' COMMENT '',
`author` varchar(20) DEFAULT '' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`desc` text COMMENT '',
`iscom` tinyint(3) DEFAULT '0' COMMENT '',
`deprecated` tinyint(3) DEFAULT '0' COMMENT '',
`isv2` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_identity` (`identity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_polyapi_key` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`appkey` varchar(200) NOT NULL DEFAULT '' COMMENT '',
`token` varchar(200) NOT NULL DEFAULT '' COMMENT '',
`appsecret` varchar(200) NOT NULL DEFAULT '' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`updatetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_appkey` (`appkey`),
KEY `idx_token` (`token`),
KEY `idx_appsecret` (`appsecret`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_poster` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`bg` varchar(255) DEFAULT '' COMMENT '',
`data` text COMMENT '',
`keyword` varchar(255) DEFAULT '' COMMENT '',
`times` int(11) DEFAULT '0' COMMENT '',
`follows` int(11) DEFAULT '0' COMMENT '',
`isdefault` tinyint(3) DEFAULT '0' COMMENT '',
`resptitle` varchar(255) DEFAULT '' COMMENT '',
`respthumb` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`respdesc` varchar(255) DEFAULT '' COMMENT '',
`respurl` varchar(255) DEFAULT '' COMMENT '',
`waittext` varchar(255) DEFAULT '' COMMENT '',
`oktext` varchar(255) DEFAULT '' COMMENT '',
`subcredit` int(11) DEFAULT '0' COMMENT '',
`submoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`reccredit` int(11) DEFAULT '0' COMMENT '',
`recmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`paytype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`scantext` varchar(255) DEFAULT '' COMMENT '',
`subtext` varchar(255) DEFAULT '' COMMENT '',
`beagent` tinyint(3) DEFAULT '0' COMMENT '',
`bedown` tinyint(3) DEFAULT '0' COMMENT '',
`isopen` tinyint(3) DEFAULT '0' COMMENT '',
`opentext` varchar(255) DEFAULT '' COMMENT '',
`openurl` varchar(255) DEFAULT '' COMMENT '',
`templateid` varchar(255) DEFAULT '' COMMENT '',
`subpaycontent` text COMMENT '',
`recpaycontent` varchar(255) DEFAULT '' COMMENT '',
`entrytext` varchar(255) DEFAULT '' COMMENT '',
`reccouponid` int(11) DEFAULT '0' COMMENT '',
`reccouponnum` int(11) DEFAULT '0' COMMENT '',
`subcouponid` int(11) DEFAULT '0' COMMENT '',
`subcouponnum` int(11) DEFAULT '0' COMMENT '',
`resptype` tinyint(3) DEFAULT '0' COMMENT '',
`resptext` text COMMENT '',
`keyword2` varchar(255) DEFAULT '' COMMENT '',
`resptext11` text COMMENT '',
`reward_totle` varchar(500) DEFAULT '' COMMENT '',
`ismembergroup` tinyint(3) DEFAULT '0' COMMENT '',
`membergroupid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_times` (`times`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_poster_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`posterid` int(11) DEFAULT '0' COMMENT '',
`from_openid` varchar(255) DEFAULT '' COMMENT '',
`subcredit` int(11) DEFAULT '0' COMMENT '',
`submoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`reccredit` int(11) DEFAULT '0' COMMENT '',
`recmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`reccouponid` int(11) DEFAULT '0' COMMENT '',
`reccouponnum` int(11) DEFAULT '0' COMMENT '',
`subcouponid` int(11) DEFAULT '0' COMMENT '',
`subcouponnum` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_posterid` (`posterid`),
KEY `idx_from_openid` (`from_openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_poster_qr` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`acid` int(10) unsigned NOT NULL COMMENT '',
`openid` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`sceneid` int(11) DEFAULT '0' COMMENT '',
`mediaid` varchar(255) DEFAULT '' COMMENT '',
`ticket` varchar(250) NOT NULL COMMENT '',
`url` varchar(80) NOT NULL COMMENT '',
`createtime` int(10) unsigned NOT NULL COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`qrimg` varchar(1000) DEFAULT '' COMMENT '',
`scenestr` varchar(255) DEFAULT '' COMMENT '',
`posterid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_acid` (`acid`),
KEY `idx_sceneid` (`sceneid`),
KEY `idx_type` (`type`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_poster_scan` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`posterid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`from_openid` varchar(255) DEFAULT '' COMMENT '',
`scantime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_posterid` (`posterid`),
KEY `idx_scantime` (`scantime`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_postera` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`days` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`bg` varchar(255) DEFAULT '' COMMENT '',
`data` text COMMENT '',
`keyword` varchar(255) DEFAULT '' COMMENT '',
`isdefault` tinyint(3) DEFAULT '0' COMMENT '',
`resptitle` varchar(255) DEFAULT '' COMMENT '',
`respthumb` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`respdesc` varchar(255) DEFAULT '' COMMENT '',
`respurl` varchar(255) DEFAULT '' COMMENT '',
`waittext` varchar(255) DEFAULT '' COMMENT '',
`oktext` varchar(255) DEFAULT '' COMMENT '',
`subcredit` int(11) DEFAULT '0' COMMENT '',
`submoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`reccredit` int(11) DEFAULT '0' COMMENT '',
`recmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`scantext` varchar(255) DEFAULT '' COMMENT '',
`subtext` varchar(255) DEFAULT '' COMMENT '',
`beagent` tinyint(3) DEFAULT '0' COMMENT '',
`bedown` tinyint(3) DEFAULT '0' COMMENT '',
`isopen` tinyint(3) DEFAULT '0' COMMENT '',
`opentext` varchar(255) DEFAULT '' COMMENT '',
`openurl` varchar(255) DEFAULT '' COMMENT '',
`paytype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`subpaycontent` text COMMENT '',
`recpaycontent` varchar(255) DEFAULT '' COMMENT '',
`templateid` varchar(255) DEFAULT '' COMMENT '',
`entrytext` varchar(255) DEFAULT '' COMMENT '',
`reccouponid` int(11) DEFAULT '0' COMMENT '',
`reccouponnum` int(11) DEFAULT '0' COMMENT '',
`subcouponid` int(11) DEFAULT '0' COMMENT '',
`subcouponnum` int(11) DEFAULT '0' COMMENT '',
`timestart` int(11) DEFAULT '0' COMMENT '',
`timeend` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`starttext` varchar(255) DEFAULT '' COMMENT '',
`endtext` varchar(255) COMMENT '',
`resptype` tinyint(3) DEFAULT '0' COMMENT '',
`resptext` text COMMENT '',
`testflag` tinyint(1) DEFAULT '0' COMMENT '',
`keyword2` varchar(255) DEFAULT '' COMMENT '',
`reward_totle` varchar(500) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_postera_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`posterid` int(11) DEFAULT '0' COMMENT '',
`from_openid` varchar(255) DEFAULT '' COMMENT '',
`subcredit` int(11) DEFAULT '0' COMMENT '',
`submoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`reccredit` int(11) DEFAULT '0' COMMENT '',
`recmoney` decimal(10,2) DEFAULT '0.00' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`reccouponid` int(11) DEFAULT '0' COMMENT '',
`reccouponnum` int(11) DEFAULT '0' COMMENT '',
`subcouponid` int(11) DEFAULT '0' COMMENT '',
`subcouponnum` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_posteraid` (`posterid`),
KEY `idx_from_openid` (`from_openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_postera_qr` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`acid` int(10) unsigned NOT NULL COMMENT '',
`openid` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`posterid` int(11) DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`sceneid` int(11) DEFAULT '0' COMMENT '',
`mediaid` varchar(255) DEFAULT '' COMMENT '',
`ticket` varchar(250) NOT NULL COMMENT '',
`url` varchar(80) NOT NULL COMMENT '',
`createtime` int(10) unsigned NOT NULL COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`qrimg` varchar(1000) DEFAULT '' COMMENT '',
`expire` int(11) DEFAULT '0' COMMENT '',
`endtime` int(11) DEFAULT '0' COMMENT '',
`qrtime` varchar(32) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_acid` (`acid`),
KEY `idx_sceneid` (`sceneid`),
KEY `idx_type` (`type`),
KEY `idx_posterid` (`posterid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_print` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`status` tinyint(3) DEFAULT '0' COMMENT '',
`name` varchar(200) DEFAULT '' COMMENT '',
`print_no` varchar(200) DEFAULT '' COMMENT '',
`key` varchar(200) DEFAULT '' COMMENT '',
`print_nums` tinyint(3) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`sid` tinyint(3) DEFAULT '0' COMMENT '',
`print_type` tinyint(3) DEFAULT '0' COMMENT '',
`qrcode_link` varchar(200) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_qa_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_qa_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_qa_question` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`cate` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` mediumtext NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`isrecommand` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_qa_set` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`showmember` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`showtype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`enter_title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`enter_img` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`enter_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`share` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_unaicid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_quick` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`title` varchar(255) COMMENT '',
`keyword` varchar(255) COMMENT '',
`datas` mediumtext COMMENT '',
`cart` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) COMMENT '',
`lasttime` int(11) COMMENT '',
`share_title` varchar(255) COMMENT '',
`share_desc` varchar(255) COMMENT '',
`share_icon` varchar(255) COMMENT '',
`enter_title` varchar(255) COMMENT '',
`enter_desc` varchar(255) COMMENT '',
`enter_icon` varchar(255) COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_quick_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`merchid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_quick_cart` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`quickid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(100) DEFAULT '' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`marketprice` decimal(10,2) DEFAULT '0.00' COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`optionid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`diyformdataid` int(11) COMMENT '',
`diyformdata` text COMMENT '',
`diyformfields` text COMMENT '',
`diyformid` int(11) DEFAULT '0' COMMENT '',
`selected` tinyint(1) DEFAULT '1' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`selectedadd` tinyint(1) DEFAULT '1' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_openid` (`openid`),
KEY `idx_deleted` (`deleted`),
KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_refund_address` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(20) DEFAULT '' COMMENT '',
`name` varchar(20) DEFAULT '' COMMENT '',
`tel` varchar(20) DEFAULT '' COMMENT '',
`mobile` varchar(11) DEFAULT '' COMMENT '',
`province` varchar(30) DEFAULT '' COMMENT '',
`city` varchar(30) DEFAULT '' COMMENT '',
`area` varchar(30) DEFAULT '' COMMENT '',
`address` varchar(300) DEFAULT '' COMMENT '',
`isdefault` tinyint(1) DEFAULT '0' COMMENT '',
`zipcode` varchar(255) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`deleted` tinyint(1) DEFAULT '0' COMMENT '',
`openid` varchar(50) DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_openid` (`openid`),
KEY `idx_isdefault` (`isdefault`),
KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sale_coupon` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(3) DEFAULT '0' COMMENT '',
`ckey` decimal(10,2) DEFAULT '0.00' COMMENT '',
`cvalue` decimal(10,2) DEFAULT '0.00' COMMENT '',
`nums` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sale_coupon_data` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`couponid` int(11) DEFAULT '0' COMMENT '',
`gettime` int(11) DEFAULT '0' COMMENT '',
`gettype` tinyint(3) DEFAULT '0' COMMENT '',
`usedtime` int(11) DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_couponid` (`couponid`),
KEY `idx_gettime` (`gettime`),
KEY `idx_gettype` (`gettype`),
KEY `idx_usedtime` (`usedtime`),
KEY `idx_orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_saler` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`storeid` int(11) DEFAULT '0' COMMENT '',
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`salername` varchar(255) DEFAULT '' COMMENT '',
`username` varchar(50) DEFAULT '' COMMENT '',
`pwd` varchar(255) DEFAULT '' COMMENT '',
`salt` varchar(255) DEFAULT '' COMMENT '',
`lastvisit` varchar(255) DEFAULT '' COMMENT '',
`lastip` varchar(255) DEFAULT '' COMMENT '',
`isfounder` tinyint(3) DEFAULT '0' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`getmessage` tinyint(1) DEFAULT '0' COMMENT '',
`getnotice` tinyint(1) DEFAULT '0' COMMENT '',
`roleid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_storeid` (`storeid`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_enabled` (`enabled`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_task` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cateid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`enabled` tinyint(3) DEFAULT '0' COMMENT '',
`page_title` varchar(255) DEFAULT '' COMMENT '',
`share_title` varchar(255) DEFAULT '' COMMENT '',
`share_desc` varchar(255) DEFAULT '' COMMENT '',
`share_icon` varchar(255) DEFAULT '' COMMENT '',
`tag` varchar(10) DEFAULT '' COMMENT '',
`closesec` int(11) DEFAULT '0' COMMENT '',
`oldshow` tinyint(3) DEFAULT '0' COMMENT '',
`times` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`overtimes` tinyint(2) COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_task_goods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`taskid` int(11) DEFAULT '0' COMMENT '',
`roomid` int(11) DEFAULT '0' COMMENT '',
`timeid` int(11) DEFAULT '0' COMMENT '',
`goodsid` int(11) DEFAULT '0' COMMENT '',
`optionid` int(11) DEFAULT '0' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`total` int(11) DEFAULT '0' COMMENT '',
`maxbuy` int(11) DEFAULT '0' COMMENT '',
`totalmaxbuy` int(11) DEFAULT '0' COMMENT '',
`commission1` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission2` decimal(10,2) DEFAULT '0.00' COMMENT '',
`commission3` decimal(10,2) DEFAULT '0.00' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_goodsid` (`goodsid`),
KEY `idx_optionid` (`optionid`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_taskid` (`taskid`),
KEY `idx_roomid` (`roomid`),
KEY `idx_time` (`timeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_task_room` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`taskid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
`enabled` tinyint(3) DEFAULT '0' COMMENT '',
`page_title` varchar(255) DEFAULT '' COMMENT '',
`share_title` varchar(255) DEFAULT '' COMMENT '',
`share_desc` varchar(255) DEFAULT '' COMMENT '',
`share_icon` varchar(255) DEFAULT '' COMMENT '',
`oldshow` tinyint(3) DEFAULT '0' COMMENT '',
`tag` varchar(10) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`diypage` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_taskid` (`taskid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_seckill_task_time` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`taskid` int(11) DEFAULT '0' COMMENT '',
`time` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sendticket` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`cpid` varchar(200) NOT NULL COMMENT '',
`expiration` int(11) NOT NULL DEFAULT '0' COMMENT '',
`starttime` int(11) COMMENT '',
`endtime` int(11) COMMENT '',
`status` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '新人礼包' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sendticket_draw` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`cpid` varchar(50) NOT NULL COMMENT '',
`openid` varchar(200) NOT NULL COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `openid` (`openid`),
KEY `cpid` (`cpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sendticket_share` (
`id` int(10) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`sharetitle` varchar(255) NOT NULL COMMENT '',
`shareicon` varchar(255) COMMENT '',
`sharedesc` varchar(255) COMMENT '',
`expiration` int(11) NOT NULL DEFAULT '0' COMMENT '',
`starttime` int(11) COMMENT '',
`endtime` int(11) COMMENT '',
`paycpid1` int(11) COMMENT '',
`paycpid2` int(11) COMMENT '',
`paycpid3` int(11) COMMENT '',
`paycpnum1` int(11) COMMENT '',
`paycpnum2` int(11) COMMENT '',
`paycpnum3` int(11) COMMENT '',
`sharecpid1` int(11) COMMENT '',
`sharecpid2` int(11) COMMENT '',
`sharecpid3` int(11) COMMENT '',
`sharecpnum1` int(11) COMMENT '',
`sharecpnum2` int(11) COMMENT '',
`sharecpnum3` int(11) COMMENT '',
`status` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
`order` int(11) COMMENT '',
`enough` decimal(10,2) COMMENT '',
`issync` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sign_records` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`credit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`log` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`day` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_time` (`time`),
KEY `idx_type` (`type`),
KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sign_set` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`iscenter` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`iscreditshop` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`desc` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`isopen` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`signold` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`signold_price` int(11) NOT NULL DEFAULT '0' COMMENT '',
`signold_type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`textsign` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`textsignold` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`textsigned` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`textsignforget` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`maincolor` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`cycle` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`reward_default_first` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reward_default_day` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reword_order` text NOT NULL COMMENT '',
`reword_sum` text NOT NULL COMMENT '',
`reword_special` text NOT NULL COMMENT '',
`sign_rule` text NOT NULL COMMENT '',
`share` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sign_user` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`order` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderday` int(11) NOT NULL DEFAULT '0' COMMENT '',
`sum` int(11) NOT NULL DEFAULT '0' COMMENT '',
`signdate` varchar(10) DEFAULT '' COMMENT '',
`isminiprogram` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sms` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` varchar(10) NOT NULL DEFAULT '' COMMENT '',
`template` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`smstplid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`smssign` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`data` text NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sms_set` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`juhe` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`juhe_key` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`dayu` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`dayu_key` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`dayu_secret` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`emay_url` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_pw` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_sk` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_phost` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_pport` int(11) NOT NULL DEFAULT '0' COMMENT '',
`emay_puser` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_ppw` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`emay_out` int(11) NOT NULL DEFAULT '0' COMMENT '',
`emay_outresp` int(11) NOT NULL DEFAULT '30' COMMENT '',
`emay_warn` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`emay_mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '',
`emay_warn_time` int(11) NOT NULL DEFAULT '0' COMMENT '',
`aliyun` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`aliyun_appcode` varchar(255) NOT NULL COMMENT '',
`aliyun_new` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`aliyun_new_keyid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`aliyun_new_keysecret` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_board` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`cid` int(11) DEFAULT '0' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`desc` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
`showgroups` text COMMENT '',
`showlevels` text COMMENT '',
`postgroups` text COMMENT '',
`postlevels` text COMMENT '',
`showagentlevels` text COMMENT '',
`postagentlevels` text COMMENT '',
`postcredit` int(11) DEFAULT '0' COMMENT '',
`replycredit` int(11) DEFAULT '0' COMMENT '',
`bestcredit` int(11) DEFAULT '0' COMMENT '',
`bestboardcredit` int(11) DEFAULT '0' COMMENT '',
`notagent` tinyint(3) DEFAULT '0' COMMENT '',
`notagentpost` tinyint(3) DEFAULT '0' COMMENT '',
`topcredit` int(11) DEFAULT '0' COMMENT '',
`topboardcredit` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`noimage` tinyint(3) DEFAULT '0' COMMENT '',
`novoice` tinyint(3) DEFAULT '0' COMMENT '',
`needfollow` tinyint(3) DEFAULT '0' COMMENT '',
`needpostfollow` tinyint(3) DEFAULT '0' COMMENT '',
`share_title` varchar(255) DEFAULT '' COMMENT '',
`share_icon` varchar(255) DEFAULT '' COMMENT '',
`share_desc` varchar(255) DEFAULT '' COMMENT '',
`keyword` varchar(255) DEFAULT '' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
`banner` varchar(255) DEFAULT '' COMMENT '',
`needcheck` tinyint(3) DEFAULT '0' COMMENT '',
`needcheckmanager` tinyint(3) DEFAULT '0' COMMENT '',
`needcheckreply` int(11) DEFAULT '0' COMMENT '',
`needcheckreplymanager` int(11) DEFAULT '0' COMMENT '',
`showsnslevels` text COMMENT '',
`postsnslevels` text COMMENT '',
`showpartnerlevels` text COMMENT '',
`postpartnerlevels` text COMMENT '',
`notpartner` tinyint(3) DEFAULT '0' COMMENT '',
`notpartnerpost` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`),
KEY `idx_cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_board_follow` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`bid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_bid` (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`thumb` varchar(255) COMMENT '',
`displayorder` tinyint(3) unsigned DEFAULT '0' COMMENT '',
`enabled` tinyint(1) DEFAULT '1' COMMENT '',
`advimg` varchar(255) DEFAULT '' COMMENT '',
`advurl` varchar(500) DEFAULT '' COMMENT '',
`isrecommand` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_enabled` (`enabled`),
KEY `idx_isrecommand` (`isrecommand`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_complain` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) NOT NULL COMMENT '',
`postsid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`defendant` varchar(255) NOT NULL DEFAULT '0' COMMENT '',
`complainant` varchar(255) NOT NULL DEFAULT '0' COMMENT '',
`complaint_type` int(10) NOT NULL DEFAULT '0' COMMENT '',
`complaint_text` text NOT NULL COMMENT '',
`images` text NOT NULL COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`checkedtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`checked` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`checked_note` varchar(255) NOT NULL COMMENT '',
`deleted` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_complaincate` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`name` varchar(255) NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_level` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`levelname` varchar(255) DEFAULT '' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`enabled` tinyint(3) DEFAULT '0' COMMENT '',
`post` int(11) DEFAULT '0' COMMENT '',
`color` varchar(255) DEFAULT '' COMMENT '',
`bg` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_like` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`pid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_manage` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`bid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`enabled` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_bid` (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_member` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) COMMENT '',
`level` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`sign` varchar(255) DEFAULT '' COMMENT '',
`isblack` tinyint(3) DEFAULT '0' COMMENT '',
`notupgrade` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sns_post` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`bid` int(11) DEFAULT '0' COMMENT '',
`pid` int(11) DEFAULT '0' COMMENT '',
`rpid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(255) DEFAULT '' COMMENT '',
`avatar` varchar(255) DEFAULT '' COMMENT '',
`nickname` varchar(255) DEFAULT '' COMMENT '',
`title` varchar(50) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`images` text COMMENT '',
`voice` varchar(255) COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`replytime` int(11) DEFAULT '0' COMMENT '',
`credit` int(11) DEFAULT '0' COMMENT '',
`views` int(11) DEFAULT '0' COMMENT '',
`islock` tinyint(1) DEFAULT '0' COMMENT '',
`istop` tinyint(1) DEFAULT '0' COMMENT '',
`isboardtop` tinyint(1) DEFAULT '0' COMMENT '',
`isbest` tinyint(1) DEFAULT '0' COMMENT '',
`isboardbest` tinyint(3) DEFAULT '0' COMMENT '',
`deleted` tinyint(3) DEFAULT '0' COMMENT '',
`deletedtime` int(11) DEFAULT '0' COMMENT '',
`checked` tinyint(3) COMMENT '',
`checktime` int(11) DEFAULT '0' COMMENT '',
`isadmin` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_bid` (`bid`),
KEY `idx_pid` (`pid`),
KEY `idx_createtime` (`createtime`),
KEY `idx_islock` (`islock`),
KEY `idx_istop` (`istop`),
KEY `idx_isboardtop` (`isboardtop`),
KEY `idx_isbest` (`isbest`),
KEY `idx_deleted` (`deleted`),
KEY `idx_deletetime` (`deletedtime`),
KEY `idx_checked` (`checked`),
KEY `idx_rpid` (`rpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_store` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`storename` varchar(255) DEFAULT '' COMMENT '',
`address` varchar(255) DEFAULT '' COMMENT '',
`tel` varchar(255) DEFAULT '' COMMENT '',
`lat` varchar(255) DEFAULT '' COMMENT '',
`lng` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`realname` varchar(255) DEFAULT '' COMMENT '',
`mobile` varchar(255) DEFAULT '' COMMENT '',
`fetchtime` varchar(255) DEFAULT '' COMMENT '',
`type` tinyint(1) DEFAULT '0' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`saletime` varchar(255) DEFAULT '' COMMENT '',
`desc` text COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`order_printer` varchar(500) DEFAULT '' COMMENT '',
`order_template` int(11) DEFAULT '0' COMMENT '',
`ordertype` varchar(500) DEFAULT '' COMMENT '',
`banner` text COMMENT '',
`label` varchar(255) COMMENT '',
`tag` varchar(255) COMMENT '',
`classify` tinyint(1) COMMENT '',
`perms` text COMMENT '',
`citycode` varchar(20) DEFAULT '' COMMENT '',
`opensend` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`province` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`city` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`area` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`provincecode` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`areacode` varchar(30) NOT NULL DEFAULT '' COMMENT '',
`diypage` int(11) NOT NULL DEFAULT '0' COMMENT '',
`diypage_ispage` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`diypage_list` text COMMENT '',
`storegroupid` int(11) COMMENT '',
`cates` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sysset` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`sets` longtext COMMENT '',
`plugins` longtext COMMENT '',
`sec` text COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`url` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`module` varchar(255) DEFAULT '' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_article` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`author` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_banner` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`url` varchar(255) DEFAULT '' COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`background` varchar(10) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_case` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`qr` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`description` varchar(255) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_casecategory` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_company_article` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`author` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_company_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_copyright` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`copyright` text COMMENT '',
`bgcolor` varchar(255) DEFAULT '' COMMENT '',
`ismanage` tinyint(3) DEFAULT '0' COMMENT '',
`logo` varchar(255) DEFAULT '' COMMENT '',
`title` varchar(255) DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_copyright_notice` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) DEFAULT '' COMMENT '',
`author` varchar(255) DEFAULT '' COMMENT '',
`content` text COMMENT '',
`createtime` int(11) DEFAULT '0' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`status` tinyint(3) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_guestbook` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`content` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`createtime` int(11) COMMENT '',
`email` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`clientip` varchar(64) NOT NULL DEFAULT '' COMMENT '',
`mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_link` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`url` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`displayorder` int(11) COMMENT '',
`status` tinyint(3) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_enabled` (`enabled`),
KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`logno` varchar(50) COMMENT '',
`code` varchar(255) COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pluginid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`identity` varchar(50) COMMENT '',
`type` varchar(255) COMMENT '',
`month` int(10) NOT NULL DEFAULT '0' COMMENT '',
`permendtime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`permlasttime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`isperm` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(10) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_order` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`logno` varchar(50) COMMENT '',
`code` varchar(255) COMMENT '',
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`username` varchar(255) COMMENT '',
`pluginid` varchar(255) COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`month` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`paystatus` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`paytime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`paytype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_package` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`pluginid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`text` varchar(255) COMMENT '',
`thumb` varchar(1000) COMMENT '',
`data` text NOT NULL COMMENT '',
`state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`rec` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`desc` varchar(255) COMMENT '',
`content` text NOT NULL COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_plugin` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`pluginid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`thumb` varchar(1000) NOT NULL COMMENT '',
`data` text COMMENT '',
`state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`content` text NOT NULL COMMENT '',
`sales` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(10) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`plugintype` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_plugingrant_setting` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`com` varchar(1000) NOT NULL DEFAULT '' COMMENT '',
`adv` varchar(1000) NOT NULL COMMENT '',
`plugin` varchar(1000) NOT NULL COMMENT '',
`customer` varchar(50) NOT NULL DEFAULT '0' COMMENT '',
`contact` text NOT NULL COMMENT '',
`servertime` varchar(255) COMMENT '',
`weixin` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`appid` varchar(255) COMMENT '',
`mchid` varchar(255) COMMENT '',
`apikey` varchar(255) COMMENT '',
`alipay` tinyint(3) NOT NULL COMMENT '',
`account` varchar(255) COMMENT '',
`partner` varchar(255) COMMENT '',
`secret` varchar(255) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_setting` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(10) COMMENT '',
`background` varchar(10) DEFAULT '' COMMENT '',
`casebanner` varchar(255) DEFAULT '' COMMENT '',
`contact` text COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_system_site` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`type` varchar(32) NOT NULL DEFAULT '' COMMENT '',
`content` text COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` int(11) NOT NULL COMMENT '',
`starttime` int(11) NOT NULL COMMENT '',
`endtime` int(11) NOT NULL COMMENT '',
`dotime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`donetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`timelimit` float(11,1) NOT NULL COMMENT '',
`keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`explain` text COMMENT '',
`require_data` text NOT NULL COMMENT '',
`reward_data` text NOT NULL COMMENT '',
`period` int(11) NOT NULL DEFAULT '0' COMMENT '',
`repeat` int(11) NOT NULL DEFAULT '0' COMMENT '',
`maxtimes` int(11) NOT NULL DEFAULT '0' COMMENT '',
`everyhours` float(11,1) NOT NULL DEFAULT '0.0' COMMENT '',
`logo` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_adv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`advname` varchar(50) DEFAULT '' COMMENT '',
`link` varchar(255) DEFAULT '' COMMENT '',
`thumb` varchar(255) DEFAULT '' COMMENT '',
`displayorder` int(11) DEFAULT '0' COMMENT '',
`enabled` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_default` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`data` text COMMENT '',
`addtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`bgimg` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`open` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_extension` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`taskname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`taskclass` varchar(25) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`classify` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`classify_name` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`verb` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`unit` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_extension_join` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`uid` int(11) NOT NULL COMMENT '',
`taskid` int(11) NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL COMMENT '',
`require_data` text NOT NULL COMMENT '',
`progress_data` text NOT NULL COMMENT '',
`reward_data` text NOT NULL COMMENT '',
`completetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pickuptime` int(11) NOT NULL COMMENT '',
`endtime` int(11) NOT NULL COMMENT '',
`dotime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`rewarded` text NOT NULL COMMENT '',
`logo` varchar(255) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_join` (
`join_id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`join_user` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`task_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`task_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`needcount` int(11) NOT NULL DEFAULT '0' COMMENT '',
`completecount` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reward_data` text COMMENT '',
`is_reward` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`failtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`addtime` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`join_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_joiner` (
`complete_id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`task_user` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`joiner_id` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`join_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`task_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`task_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`join_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '',
`addtime` int(11) COMMENT '',
PRIMARY KEY (`complete_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_list` (
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` char(50) NOT NULL DEFAULT '' COMMENT '',
`image` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`type` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`starttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`demand` int(11) NOT NULL DEFAULT '0' COMMENT '',
`requiregoods` text NOT NULL COMMENT '',
`picktype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`stop_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`stop_limit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`stop_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`stop_cycle` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`repeat_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`repeat_interval` int(11) NOT NULL DEFAULT '0' COMMENT '',
`repeat_cycle` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`reward` text NOT NULL COMMENT '',
`followreward` text NOT NULL COMMENT '',
`goods_limit` int(11) NOT NULL DEFAULT '0' COMMENT '',
`notice` text NOT NULL COMMENT '',
`design_data` text NOT NULL COMMENT '',
`design_bg` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`native_data` text NOT NULL COMMENT '',
`native_data2` text COMMENT '',
`native_data3` text COMMENT '',
`reward2` text COMMENT '',
`reward3` text COMMENT '',
`level2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`level3` int(11) NOT NULL DEFAULT '0' COMMENT '',
`member_group` text COMMENT '',
`auto_pick` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`keyword_pick` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`verb` varchar(255) DEFAULT '' COMMENT '',
`unit` varchar(255) DEFAULT '' COMMENT '',
`member_level` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_passive` (`picktype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`from_openid` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`join_id` int(11) NOT NULL DEFAULT '0' COMMENT '',
`taskid` int(11) DEFAULT '0' COMMENT '',
`task_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`subdata` text COMMENT '',
`recdata` text COMMENT '',
`createtime` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_poster` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`days` int(11) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) COMMENT '',
`bg` varchar(255) DEFAULT '' COMMENT '',
`data` text COMMENT '',
`keyword` varchar(255) COMMENT '',
`resptype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`resptext` text COMMENT '',
`resptitle` varchar(255) COMMENT '',
`respthumb` varchar(255) COMMENT '',
`respdesc` varchar(255) COMMENT '',
`respurl` varchar(255) COMMENT '',
`createtime` int(11) COMMENT '',
`waittext` varchar(255) COMMENT '',
`oktext` varchar(255) COMMENT '',
`scantext` varchar(255) COMMENT '',
`beagent` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`bedown` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`timestart` int(11) COMMENT '',
`timeend` int(11) COMMENT '',
`is_repeat` tinyint(1) DEFAULT '0' COMMENT '',
`getposter` varchar(255) COMMENT '',
`status` tinyint(1) COMMENT '',
`starttext` varchar(255) COMMENT '',
`endtext` varchar(255) COMMENT '',
`reward_data` text COMMENT '',
`needcount` int(11) NOT NULL DEFAULT '0' COMMENT '',
`is_delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`poster_type` tinyint(1) DEFAULT '1' COMMENT '',
`reward_days` int(11) DEFAULT '0' COMMENT '',
`titleicon` text COMMENT '',
`poster_banner` text COMMENT '',
`is_goods` tinyint(1) DEFAULT '0' COMMENT '',
`autoposter` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_poster_qr` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`acid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(100) NOT NULL COMMENT '',
`posterid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`sceneid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`mediaid` varchar(255) COMMENT '',
`ticket` varchar(255) NOT NULL COMMENT '',
`url` varchar(255) NOT NULL COMMENT '',
`createtime` int(11) COMMENT '',
`qrimg` varchar(1000) COMMENT '',
`expire` int(11) COMMENT '',
`endtime` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_qr` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` varchar(100) NOT NULL DEFAULT '' COMMENT '',
`recordid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`sceneid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`mediaid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`ticket` varchar(255) NOT NULL DEFAULT '' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `recordid` (`recordid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_record` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`taskid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`tasktitle` varchar(255) NOT NULL COMMENT '',
`taskimage` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`tasktype` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`task_progress` int(11) NOT NULL DEFAULT '0' COMMENT '',
`task_demand` int(11) NOT NULL DEFAULT '0' COMMENT '',
`openid` char(50) NOT NULL DEFAULT '' COMMENT '',
`nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`picktime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`stoptime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`finishtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`reward_data` text NOT NULL COMMENT '',
`followreward_data` text NOT NULL COMMENT '',
`design_data` text NOT NULL COMMENT '',
`design_bg` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`require_goods` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`level1` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reward_data1` text NOT NULL COMMENT '',
`level2` int(11) NOT NULL DEFAULT '0' COMMENT '',
`reward_data2` text NOT NULL COMMENT '',
`member_group` text COMMENT '',
`auto_pick` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `taskid` (`taskid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_reward` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`taskid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`tasktitle` char(50) NOT NULL DEFAULT '' COMMENT '',
`tasktype` varchar(50) NOT NULL DEFAULT '' COMMENT '',
`taskowner` char(50) NOT NULL DEFAULT '' COMMENT '',
`ownernickname` char(50) NOT NULL DEFAULT '' COMMENT '',
`recordid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`nickname` char(50) NOT NULL DEFAULT '' COMMENT '',
`headimg` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`openid` char(50) NOT NULL DEFAULT '' COMMENT '',
`reward_type` char(10) NOT NULL DEFAULT '' COMMENT '',
`reward_title` char(50) NOT NULL DEFAULT '' COMMENT '',
`reward_data` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`get` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`sent` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`gettime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`senttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
`isjoiner` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '',
`level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`read` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `uniacid` (`uniacid`),
KEY `recordid` (`recordid`),
KEY `taskid` (`taskid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_set` (
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`entrance` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`keyword` varchar(10) NOT NULL DEFAULT '' COMMENT '',
`cover_title` varchar(20) NOT NULL DEFAULT '' COMMENT '',
`cover_img` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`cover_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`msg_pick` text NOT NULL COMMENT '',
`msg_progress` text NOT NULL COMMENT '',
`msg_finish` text NOT NULL COMMENT '',
`msg_follow` text NOT NULL COMMENT '',
`isnew` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`bg_img` varchar(255) NOT NULL DEFAULT '../addons/ewei_shopv2/plugin/task/static/images/sky.png' COMMENT '',
`top_notice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_type` (
`id` int(11) NOT NULL COMMENT '',
`type_key` char(20) NOT NULL DEFAULT '' COMMENT '',
`type_name` char(10) NOT NULL DEFAULT '' COMMENT '',
`description` char(30) NOT NULL DEFAULT '' COMMENT '',
`verb` char(11) NOT NULL DEFAULT '' COMMENT '',
`numeric` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`unit` char(10) NOT NULL DEFAULT '' COMMENT '',
`goods` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`theme` char(10) NOT NULL DEFAULT '' COMMENT '',
`once` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_upwxapp_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`type` tinyint(2) DEFAULT '0' COMMENT '',
`version` varchar(20) COMMENT '',
`describe` varchar(50) COMMENT '',
`version_time` int(11) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_verifygoods` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`openid` varchar(255) COMMENT '',
`orderid` int(11) COMMENT '',
`ordergoodsid` int(11) COMMENT '',
`storeid` int(11) COMMENT '',
`starttime` int(11) COMMENT '',
`limitdays` int(11) COMMENT '',
`limitnum` int(11) COMMENT '',
`used` tinyint(1) DEFAULT '0' COMMENT '',
`verifycode` varchar(20) COMMENT '',
`codeinvalidtime` int(11) COMMENT '',
`invalid` tinyint(1) DEFAULT '0' COMMENT '',
`getcard` tinyint(1) DEFAULT '0' COMMENT '',
`activecard` tinyint(1) DEFAULT '0' COMMENT '',
`cardcode` varchar(255) DEFAULT '' COMMENT '',
`limittype` tinyint(1) DEFAULT '0' COMMENT '',
`limitdate` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
UNIQUE KEY `verifycode` (`verifycode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_verifygoods_log` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`verifygoodsid` int(11) COMMENT '',
`salerid` int(11) COMMENT '',
`storeid` int(11) COMMENT '',
`verifynum` int(11) COMMENT '',
`verifydate` int(11) COMMENT '',
`remarks` varchar(255) COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_version` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uid` int(11) NOT NULL COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`uniacid` int(11) NOT NULL COMMENT '',
`version` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uid` (`uid`),
KEY `idx_version` (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_virtual_category` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`name` varchar(50) COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_virtual_data` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`typeid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`pvalue` varchar(255) DEFAULT '' COMMENT '',
`fields` text NOT NULL COMMENT '',
`openid` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`usetime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`orderid` int(11) DEFAULT '0' COMMENT '',
`ordersn` varchar(255) DEFAULT '' COMMENT '',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_typeid` (`typeid`),
KEY `idx_usetime` (`usetime`),
KEY `idx_orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_virtual_send_log` (
`id` int(11) unsigned NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) DEFAULT '0' COMMENT '',
`openid` varchar(40) NOT NULL DEFAULT '' COMMENT '',
`orderid` tinyint(3) unsigned NOT NULL COMMENT '',
`tag` varchar(20) NOT NULL COMMENT '',
`default` varchar(2000) NOT NULL DEFAULT '' COMMENT '',
`cusdefault` varchar(2000) NOT NULL DEFAULT '' COMMENT '',
`url` varchar(128) NOT NULL DEFAULT '' COMMENT '',
`datas` varchar(2000) NOT NULL DEFAULT '' COMMENT '',
`appurl` varchar(128) NOT NULL DEFAULT '' COMMENT '',
`status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '',
`sendtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_virtual_type` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`cate` int(11) DEFAULT '0' COMMENT '',
`title` varchar(255) NOT NULL DEFAULT '' COMMENT '',
`fields` text NOT NULL COMMENT '',
`usedata` int(11) NOT NULL DEFAULT '0' COMMENT '',
`alldata` int(11) NOT NULL DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`linktext` varchar(50) COMMENT '',
`linkurl` varchar(255) COMMENT '',
`recycled` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_cate` (`cate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxapp_bind` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`wxapp` int(11) NOT NULL COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_wxapp` (`wxapp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxapp_page` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) COMMENT '',
`data` mediumtext COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lasttime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
`isdefault` tinyint(1) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_status` (`status`),
KEY `idx_isdefault` (`isdefault`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxapp_poster` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL DEFAULT '0' COMMENT '',
`type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`title` varchar(255) COMMENT '',
`thumb` varchar(255) COMMENT '',
`bgimg` varchar(255) COMMENT '',
`data` text COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`displayorder` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_type` (`type`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxapp_startadv` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
`name` varchar(255) COMMENT '',
`data` text COMMENT '',
`createtime` int(11) NOT NULL DEFAULT '0' COMMENT '',
`lastedittime` int(11) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxapp_tmessage` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) NOT NULL COMMENT '',
`name` varchar(255) COMMENT '',
`templateid` varchar(50) DEFAULT '' COMMENT '',
`datas` text COMMENT '',
`emphasis_keyword` int(11) NOT NULL DEFAULT '0' COMMENT '',
`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`),
KEY `idx_uniacid` (`uniacid`),
KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_ewei_shop_wxcard` (
`id` int(11) NOT NULL COMMENT '' AUTO_INCREMENT,
`uniacid` int(11) COMMENT '',
`card_id` varchar(255) DEFAULT '0' COMMENT '',
`displayorder` int(11) COMMENT '',
`catid` int(11) COMMENT '',
`card_type` varchar(50) COMMENT '',
`logo_url` varchar(255) COMMENT '',
`wxlogourl` varchar(255) COMMENT '',
`brand_name` varchar(255) COMMENT '',
`code_type` varchar(255) COMMENT '',
`title` varchar(255) COMMENT '',
`color` varchar(50) COMMENT '',
`notice` varchar(50) COMMENT '',
`service_phone` varchar(50) COMMENT '',
`description` text COMMENT '',
`datetype` varchar(50) COMMENT '',
`begin_timestamp` int(11) COMMENT '',
`end_timestamp` int(11) COMMENT '',
`fixed_term` int(11) COMMENT '',
`fixed_begin_term` int(11) COMMENT '',
`quantity` int(11) COMMENT '',
`total_quantity` varchar(255) COMMENT '',
`use_limit` int(11) COMMENT '',
`get_limit` int(11) COMMENT '',
`use_custom_code` tinyint(1) COMMENT '',
`bind_openid` tinyint(1) COMMENT '',
`can_share` tinyint(1) COMMENT '',
`can_give_friend` tinyint(1) COMMENT '',
`center_title` varchar(20) COMMENT '',
`center_sub_title` varchar(20) COMMENT '',
`center_url` varchar(255) COMMENT '',
`setcustom` tinyint(1) COMMENT '',
`custom_url_name` varchar(20) COMMENT '',
`custom_url_sub_title` varchar(20) COMMENT '',
`custom_url` varchar(255) COMMENT '',
`setpromotion` tinyint(1) COMMENT '',
`promotion_url_name` varchar(20) COMMENT '',
`promotion_url_sub_title` varchar(20) COMMENT '',
`promotion_url` varchar(255) COMMENT '',
`source` varchar(255) COMMENT '',
`can_use_with_other_discount` tinyint(1) COMMENT '',
`setabstract` tinyint(1) COMMENT '',
`abstract` varchar(50) COMMENT '',
`abstractimg` varchar(255) COMMENT '',
`icon_url_list` varchar(255) COMMENT '',
`accept_category` varchar(50) COMMENT '',
`reject_category` varchar(50) COMMENT '',
`least_cost` decimal(10,2) COMMENT '',
`reduce_cost` decimal(10,2) COMMENT '',
`discount` decimal(10,2) COMMENT '',
`limitgoodtype` tinyint(1) DEFAULT '0' COMMENT '',
`limitgoodcatetype` tinyint(1) unsigned DEFAULT '0' COMMENT '',
`limitgoodcateids` varchar(255) COMMENT '',
`limitgoodids` varchar(255) COMMENT '',
`limitdiscounttype` tinyint(1) unsigned DEFAULT '0' COMMENT '',
`merchid` int(11) DEFAULT '0' COMMENT '',
`gettype` tinyint(3) COMMENT '',
`islimitlevel` tinyint(1) DEFAULT '0' COMMENT '',
`limitmemberlevels` varchar(500) DEFAULT '' COMMENT '',
`limitagentlevels` varchar(500) DEFAULT '' COMMENT '',
`limitpartnerlevels` varchar(500) DEFAULT '' COMMENT '',
`limitaagentlevels` varchar(500) DEFAULT '' COMMENT '',
`settitlecolor` tinyint(1) DEFAULT '0' COMMENT '',
`titlecolor` varchar(10) DEFAULT '' COMMENT '',
`tagtitle` varchar(20) DEFAULT '' COMMENT '',
`use_condition` tinyint(1) DEFAULT '0' COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `ims_ewei_shop_express` VALUES ('1', '顺丰', 'shunfeng', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('2', '申通', 'shentong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('3', '韵达快运', 'yunda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('4', '天天快递', 'tiantian', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('5', '圆通速递', 'yuantong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('6', '中通速递', 'zhongtong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('7', 'ems快递', 'ems', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('8', '汇通快运', 'huitongkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('9', '全峰快递', 'quanfengkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('10', '宅急送', 'zhaijisong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('11', 'aae全球专递', 'aae', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('12', '安捷快递', 'anjie', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('13', '安信达快递', 'anxindakuaixi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('14', '彪记快递', 'biaojikuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('15', 'bht', 'bht', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('16', '百福东方国际物流', 'baifudongfang', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('17', '中国东方（COE）', 'coe', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('18', '长宇物流', 'changyuwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('19', '大田物流', 'datianwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('20', '德邦物流', 'debangwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('21', 'dhl', 'dhl', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('22', 'dpex', 'dpex', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('23', 'd速快递', 'dsukuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('24', '递四方', 'disifang', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('25', 'fedex（国外）', 'fedex', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('26', '飞康达物流', 'feikangda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('27', '凤凰快递', 'fenghuangkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('28', '飞快达', 'feikuaida', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('29', '国通快递', 'guotongkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('30', '港中能达物流', 'ganzhongnengda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('31', '广东邮政物流', 'guangdongyouzhengwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('32', '共速达', 'gongsuda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('33', '恒路物流', 'hengluwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('34', '华夏龙物流', 'huaxialongwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('35', '海红', 'haihongwangsong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('36', '海外环球', 'haiwaihuanqiu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('37', '佳怡物流', 'jiayiwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('38', '京广速递', 'jinguangsudikuaijian', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('39', '急先达', 'jixianda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('40', '佳吉物流', 'jjwl', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('41', '加运美物流', 'jymwl', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('42', '金大物流', 'jindawuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('43', '嘉里大通', 'jialidatong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('44', '晋越快递', 'jykd', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('45', '快捷速递', 'kuaijiesudi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('46', '联邦快递（国内）', 'lianb', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('47', '联昊通物流', 'lianhaowuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('48', '龙邦物流', 'longbanwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('49', '立即送', 'lijisong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('50', '乐捷递', 'lejiedi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('51', '民航快递', 'minghangkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('52', '美国快递', 'meiguokuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('53', '门对门', 'menduimen', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('54', 'OCS', 'ocs', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('55', '配思货运', 'peisihuoyunkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('56', '全晨快递', 'quanchenkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('57', '全际通物流', 'quanjitong', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('58', '全日通快递', 'quanritongkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('59', '全一快递', 'quanyikuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('60', '如风达', 'rufengda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('61', '三态速递', 'santaisudi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('62', '盛辉物流', 'shenghuiwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('63', '速尔物流', 'sue', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('64', '盛丰物流', 'shengfeng', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('65', '赛澳递', 'saiaodi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('66', '天地华宇', 'tiandihuayu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('67', 'tnt', 'tnt', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('68', 'ups', 'ups', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('69', '万家物流', 'wanjiawuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('70', '文捷航空速递', 'wenjiesudi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('71', '伍圆', 'wuyuan', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('72', '万象物流', 'wxwl', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('73', '新邦物流', 'xinbangwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('74', '信丰物流', 'xinfengwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('75', '亚风速递', 'yafengsudi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('76', '一邦速递', 'yibangwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('77', '优速物流', 'youshuwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('78', '邮政包裹挂号信', 'youzhengguonei', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('79', '邮政国际包裹挂号信', 'youzhengguoji', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('80', '远成物流', 'yuanchengwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('81', '源伟丰快递', 'yuanweifeng', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('82', '元智捷诚快递', 'yuanzhijiecheng', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('83', '运通快递', 'yuntongkuaidi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('84', '越丰物流', 'yuefengwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('85', '源安达', 'yad', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('86', '银捷速递', 'yinjiesudi', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('87', '中铁快运', 'zhongtiekuaiyun', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('88', '中邮物流', 'zhongyouwuliu', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('89', '忠信达', 'zhongxinda', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('90', '芝麻开门', 'zhimakaimen', '1', '0', '');
INSERT INTO `ims_ewei_shop_express` VALUES ('91', '安能物流', 'annengwuliu', '1', '0', '');

INSERT INTO `ims_ewei_shop_plugin` (`id`, `displayorder`, `identity`, `category`, `name`, `version`, `author`, `status`, `thumb`, `desc`, `iscom`, `deprecated`, `isv2`) VALUES
(1, 1, 'qiniu', 'tool', '七牛存储', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/qiniu.jpg', NULL, 1, 0, 0),
(2, 2, 'taobao', 'tool', '商品助手', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/taobao.jpg', '', 0, 0, 0),
(3, 3, 'commission', 'biz', '人人分销', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/commission.jpg', '', 0, 0, 0),
(4, 4, 'poster', 'sale', '超级海报', '1.2', '官方', 1, '../addons/ewei_shopv2/static/images/poster.jpg', '', 0, 0, 0),
(5, 5, 'verify', 'biz', 'O2O核销', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/verify.jpg', NULL, 1, 0, 0),
(6, 6, 'tmessage', 'tool', '会员群发', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/tmessage.jpg', NULL, 1, 0, 0),
(7, 7, 'perm', 'help', '分权系统', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/perm.jpg', NULL, 1, 0, 0),
(8, 8, 'sale', 'sale', '营销宝', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/sale.jpg', NULL, 1, 0, 0),
(9, 9, 'designer', 'help', '店铺装修V1', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/designer.jpg', NULL, 0, 1, 0),
(10, 10, 'creditshop', 'biz', '积分商城', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/creditshop.jpg', '', 0, 0, 0),
(11, 11, 'virtual', 'biz', '虚拟物品', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/virtual.jpg', NULL, 1, 0, 0),
(12, 11, 'article', 'help', '文章营销', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/article.jpg', '', 0, 0, 0),
(13, 13, 'coupon', 'sale', '超级券', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/coupon.jpg', NULL, 1, 0, 0),
(14, 14, 'postera', 'sale', '活动海报', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/postera.jpg', '', 0, 0, 0),
(15, 16, 'system', 'help', '系统工具', '1.0', '官方', 0, '../addons/ewei_shopv2/static/images/system.jpg', NULL, 0, 1, 0),
(16, 15, 'diyform', 'help', '自定表单', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/diyform.jpg', '', 0, 0, 0),
(17, 16, 'exhelper', 'help', '快递助手', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/exhelper.jpg', '', 0, 0, 0),
(18, 19, 'groups', 'biz', '人人拼团', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/groups.jpg', '', 0, 0, 0),
(19, 20, 'diypage', 'help', '店铺装修', '2.0', '官方', 1, '../addons/ewei_shopv2/static/images/designer.jpg', '', 0, 0, 0),
(20, 22, 'globonus', 'biz', '全民股东', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/globonus.jpg', '', 0, 0, 0),
(21, 23, 'merch', 'biz', '多商户', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/merch.jpg', '', 0, 0, 1),
(22, 26, 'qa', 'help', '帮助中心', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/qa.jpg', '', 0, 0, 1),
(24, 27, 'sms', 'tool', '短信提醒', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/sms.jpg', '', 1, 0, 1),
(25, 29, 'sign', 'tool', '积分签到', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/sign.jpg', '', 0, 0, 1),
(26, 30, 'sns', 'sale', '全民社区', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/sns.jpg', '', 0, 0, 1),
(27, 33, 'wap', 'tool', '全网通', '1.0', '官方', 1, '', '', 1, 0, 1),
(28, 34, 'h5app', 'tool', 'H5APP', '1.0', '官方', 1, '', '', 1, 0, 1),
(29, 26, 'abonus', 'biz', '区域代理', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/abonus.jpg', '', 0, 0, 1),
(30, 33, 'printer', 'tool', '小票打印机', '1.0', '官方', 1, '', '', 1, 0, 1),
(31, 34, 'bargain', 'tool', '砍价活动', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/bargain.jpg', '', 0, 0, 1),
(32, 35, 'task', 'sale', '任务中心', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/task.jpg', '', 0, 0, 1),
(33, 36, 'cashier', 'biz', '收银台', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/cashier.jpg', '', 0, 0, 1),
(34, 37, 'messages', 'tool', '消息群发', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/messages.jpg', '', 0, 0, 1),
(35, 38, 'seckill', 'sale', '整点秒杀', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/seckill.jpg', '', 0, 0, 1),
(36, 39, 'exchange', 'biz', '兑换中心', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/exchange.jpg', '', 0, 0, 1),
(37, 65, 'wxcard', 'sale', '微信卡券', '1.0', '官方', 1, '', NULL, 1, 0, 1),
(38, 42, 'quick', 'biz', '快速购买', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/quick.jpg', '', 0, 0, 1),
(39, 43, 'mmanage', 'tool', '手机端商家管理中心', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/mmanage.jpg', '', 0, 0, 1),
(40, 44, 'polyapi', 'tool', '进销存-网店管家', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/polyapi.jpg', '', 0, 0, 1),
(41, 45, 'lottery', 'biz', '游戏营销', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/lottery.jpg', '', 0, 0, 1),
(43, 47, 'live', 'sale', '互动直播', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/live.jpg', '', 0, 0, 1),
(44, 48, 'invitation', 'sale', '邀请卡', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/invitation.png', '', 0, 0, 1),
(45, 49, 'app', 'help', '小程序', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/app.jpg', '', 0, 0, 1),
(46, 50, 'cycelbuy', 'biz', '周期购', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/cycelbuy.jpg', '', 0, 0, 1),
(47, 51, 'dividend', 'biz', '团队分红', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/dividend.jpg', '', 0, 0, 1),
(48, 52, 'pc', 'tool', 'PC端', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/pc.jpg', NULL, 0, 0, 1),
(49, 53, 'merchmanage', 'tool', '多商户手机端管理中心', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/mmanage.jpg', '', 0, 0, 1),
(50, 54, 'membercard', 'sale', '付费会员卡', '1.0', '官方', 1, '../addons/ewei_shopv2/static/images/membercard.png', '', 0, 0, 1);

INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('1', '订单付款通知', 'saler_pay', 'OPENTM405584202', 'xldHFTObiLLm7AK544PzW4bFJGgbS0o8Po4cXOgYEis', '订单付款通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('2', '自提订单提交成功通知', 'carrier', 'OPENTM201594720', 'W6-XbT9l2Wb9FUUISss9yVZdPU8iEmEes9IZfvNZnbc', '订单付款通知', '{{first.DATA}}自提码：{{keyword1.DATA}}商品详情：{{keyword2.DATA}}提货地址：{{keyword3.DATA}}提货时间：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('3', '订单取消通知', 'cancel', 'OPENTM201764653', 'EA6fL2052fvAs7F9w0Dx_UGbVuXmDFqLcrdT4IukWEY', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('4', '订单即将取消通知', 'willcancel', 'OPENTM201764653', 'EA6fL2052fvAs7F9w0Dx_UGbVuXmDFqLcrdT4IukWEY', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('5', '订单支付成功通知', 'pay', 'OPENTM405584202', 'xldHFTObiLLm7AK544PzW4bFJGgbS0o8Po4cXOgYEis', '订单支付通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('6', '订单发货通知', 'send', 'OPENTM401874827', 'c0Db6XJBYJ0PcdDyDR5YsoGKy6zfvnQrNM97Ml2hBt4', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('7', '自动发货通知(虚拟物品及卡密)', 'virtualsend', 'OPENTM207793687', 'c2kQ5Pf7QkBUXhAVQRGpRusO1BS2uu_IBjPlIZ7IbYo', '自动发货通知', '{{first.DATA}}商品名称：{{keyword1.DATA}}订单号：{{keyword2.DATA}}订单金额：{{keyword3.DATA}}卡密信息：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('8', '订单状态更新(修改收货地址)(修改价格)', 'orderstatus', 'TM00017', 'v6w5z7I8FMki08ndnGnfHSyx46eyYq9m_cIZUcvwCgU', '订单付款通知', '{{first.DATA}}订单编号: {{OrderSn.DATA}}订单状态: {{OrderStatus.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('9', '退款成功通知', 'refund1', 'TM00430', 'ez-VqnyVFEX6msJfoegrwMK2qZ6Va02sbOWvaHIMFNw', '退款成功通知', '{{first.DATA}}退款金额：{{orderProductPrice.DATA}}商品详情：{{orderProductName.DATA}}订单编号：{{orderName.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('10', '换货成功通知', 'refund3', 'OPENTM200605630', 'uS1mhnM85BtUum0s5xmlfEhnDGupvYqUkjK0A5o0sb8', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('11', '退款申请驳回通知', 'refund2', 'OPENTM200605630', 'uS1mhnM85BtUum0s5xmlfEhnDGupvYqUkjK0A5o0sb8', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('12', '充值成功通知', 'recharge_ok', 'OPENTM207727673', 'PWycmpCcbBEOuB99kZK6Lb_S_Ve6rZoigooR8lHtRHk', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('13', '提现成功通知', 'withdraw_ok', 'OPENTM207422808', 'dpgcRnw1OrF_Beo7kgkK_0ThxcEY3nxpGHUPZ9Q4Yt0', '提现通知', '{{first.DATA}}申请提现金额：{{keyword1.DATA}}取提现手续费：{{keyword2.DATA}}实际到账金额：{{keyword3.DATA}}提现渠道：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('14', '会员升级通知(任务处理通知)', 'upgrade', 'OPENTM200605630', 'UhLLmFRFoJB21zWe8Ue6s2Wbs6-hwAIcywjXFPEgAfk', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('15', '充值成功通知（后台管理员手动）', 'backrecharge_ok', 'OPENTM207727673', '8cH0W4PS46ttwb0NKaOsWlZXzp68pFkvhmz8Cx1TFYI', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('16', '积分变动提醒', 'backpoint_ok', 'OPENTM207509450', 't4X8tcZsZRfiLaxvlZSd9QTgmQTZRpy110DgoJeu4DU', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('17', '换货发货通知', 'refund4', 'OPENTM401874827', 'c0Db6XJBYJ0PcdDyDR5YsoGKy6zfvnQrNM97Ml2hBt4', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('18', '砍价活动通知', 'bargain_message', 'OPENTM200605630', null, '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'bargain', '砍价消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('19', '拼团活动通知', 'groups', null, null, null, null, '0', 'groups', '拼团消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('20', '人人分销通知', 'commission', null, null, null, null, '0', 'commission', '分销消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('21', '商品付款通知', 'saler_goodpay', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('22', '砍到底价通知', 'bargain_fprice', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'bargain', '砍价消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('23', '订单收货通知(卖家)', 'saler_finish', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'sys', '系统消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('24', '余额兑换成功通知', 'exchange_balance', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('25', '积分兑换成功通知', 'exchange_score', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('26', '兑换中心余额充值通知', 'exchange_recharge', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', 'exchange', '兑换中心消息通知');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('27', '游戏中心通知', 'lottery_get', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', '0', 'lottery', '抽奖消息通知');

INSERT INTO `ims_ewei_shop_task_extension` VALUES ('1', '推荐人数', 'commission_member', '1', 'number', 'number', '推荐', '人');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('2', '分销佣金', 'commission_money', '1', 'number', 'number', '达到', '元');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('3', '分销订单', 'commission_order', '1', 'number', 'number', '达到', '笔');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('4', '订单满额', 'cost_enough', '1', 'number', 'number', '满', '元');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('5', '累计金额', 'cost_total', '1', 'number', 'number', '累计', '元');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('6', '订单数量', 'cost_count', '1', 'number', 'number', '达到', '单');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('7', '指定商品', 'cost_goods', '1', 'select', 'select', '购买指定商品', '件');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('8', '商品评价', 'cost_comment', '1', 'number', 'number', '评价订单', '次');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('9', '累计充值', 'cost_rechargetotal', '1', 'number', 'number', '达到', '元');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('10', '充值满额', 'cost_rechargeenough', '1', 'number', 'number', '满', '元');
INSERT INTO `ims_ewei_shop_task_extension` VALUES ('11', '完善信息', 'member_info', '1', 'boole', 'boole', '填写手机号', '');


sql;
$row = pdo_run($installSql);