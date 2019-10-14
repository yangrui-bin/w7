/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 8.0.12 : Database - we7
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`we7` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `we7`;

/*Table structure for table `ims_account` */

DROP TABLE IF EXISTS `ims_account`;

CREATE TABLE `ims_account` (
  `acid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `hash` varchar(8) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `isconnect` tinyint(4) NOT NULL DEFAULT '0',
  `isdeleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`acid`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_account` */

insert  into `ims_account`(`acid`,`uniacid`,`hash`,`type`,`isconnect`,`isdeleted`,`endtime`) values (1,1,'uRr8qvQV',1,0,0,0);

/*Table structure for table `ims_account_aliapp` */

DROP TABLE IF EXISTS `ims_account_aliapp`;

CREATE TABLE `ims_account_aliapp` (
  `acid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `level` tinyint(4) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `key` varchar(16) NOT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_aliapp` */

/*Table structure for table `ims_account_baiduapp` */

DROP TABLE IF EXISTS `ims_account_baiduapp`;

CREATE TABLE `ims_account_baiduapp` (
  `acid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `appid` varchar(32) NOT NULL,
  `key` varchar(32) NOT NULL,
  `secret` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_baiduapp` */

/*Table structure for table `ims_account_phoneapp` */

DROP TABLE IF EXISTS `ims_account_phoneapp`;

CREATE TABLE `ims_account_phoneapp` (
  `acid` int(11) NOT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_phoneapp` */

/*Table structure for table `ims_account_toutiaoapp` */

DROP TABLE IF EXISTS `ims_account_toutiaoapp`;

CREATE TABLE `ims_account_toutiaoapp` (
  `acid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `appid` varchar(32) NOT NULL,
  `key` varchar(32) NOT NULL,
  `secret` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_toutiaoapp` */

/*Table structure for table `ims_account_webapp` */

DROP TABLE IF EXISTS `ims_account_webapp`;

CREATE TABLE `ims_account_webapp` (
  `acid` int(11) NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_webapp` */

/*Table structure for table `ims_account_wechats` */

DROP TABLE IF EXISTS `ims_account_wechats`;

CREATE TABLE `ims_account_wechats` (
  `acid` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(255) NOT NULL,
  `level` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  `original` varchar(50) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `country` varchar(10) NOT NULL,
  `province` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  `key` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `styleid` int(10) unsigned NOT NULL DEFAULT '1',
  `subscribeurl` varchar(120) NOT NULL DEFAULT '',
  `auth_refresh_token` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`acid`),
  KEY `idx_key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_wechats` */

insert  into `ims_account_wechats`(`acid`,`uniacid`,`token`,`encodingaeskey`,`level`,`name`,`account`,`original`,`signature`,`country`,`province`,`city`,`username`,`password`,`lastupdate`,`key`,`secret`,`styleid`,`subscribeurl`,`auth_refresh_token`) values (1,1,'omJNpZEhZeHj1ZxFECKkP48B5VFbk1HP','',1,'we7team','','','','','','','','',0,'','',1,'','');

/*Table structure for table `ims_account_wxapp` */

DROP TABLE IF EXISTS `ims_account_wxapp`;

CREATE TABLE `ims_account_wxapp` (
  `acid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(43) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `account` varchar(30) NOT NULL,
  `original` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `appdomain` varchar(255) NOT NULL,
  `auth_refresh_token` varchar(255) DEFAULT '',
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_wxapp` */

/*Table structure for table `ims_account_xzapp` */

DROP TABLE IF EXISTS `ims_account_xzapp`;

CREATE TABLE `ims_account_xzapp` (
  `acid` int(11) NOT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `original` varchar(50) NOT NULL,
  `lastupdate` int(10) NOT NULL,
  `styleid` int(10) NOT NULL,
  `createtime` int(10) NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(255) NOT NULL,
  `xzapp_id` varchar(30) NOT NULL,
  `level` tinyint(4) unsigned NOT NULL,
  `key` varchar(80) NOT NULL,
  `secret` varchar(80) NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_account_xzapp` */

/*Table structure for table `ims_activity_clerk_menu` */

DROP TABLE IF EXISTS `ims_activity_clerk_menu`;

CREATE TABLE `ims_activity_clerk_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `displayorder` int(4) NOT NULL,
  `pid` int(6) NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `system` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_activity_clerk_menu` */

/*Table structure for table `ims_activity_clerks` */

DROP TABLE IF EXISTS `ims_activity_clerks`;

CREATE TABLE `ims_activity_clerks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `storeid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `password` (`password`),
  KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_activity_clerks` */

/*Table structure for table `ims_article_category` */

DROP TABLE IF EXISTS `ims_article_category`;

CREATE TABLE `ims_article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_article_category` */

/*Table structure for table `ims_article_comment` */

DROP TABLE IF EXISTS `ims_article_comment`;

CREATE TABLE `ims_article_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `articleid` int(10) NOT NULL,
  `parentid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `is_like` tinyint(1) NOT NULL,
  `is_reply` tinyint(1) NOT NULL,
  `like_num` int(10) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articleid` (`articleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_article_comment` */

/*Table structure for table `ims_article_news` */

DROP TABLE IF EXISTS `ims_article_news`;

CREATE TABLE `ims_article_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `source` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_show_home` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `cateid` (`cateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_article_news` */

/*Table structure for table `ims_article_notice` */

DROP TABLE IF EXISTS `ims_article_notice`;

CREATE TABLE `ims_article_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_show_home` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  `style` varchar(200) NOT NULL DEFAULT '',
  `group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `cateid` (`cateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_article_notice` */

/*Table structure for table `ims_article_unread_notice` */

DROP TABLE IF EXISTS `ims_article_unread_notice`;

CREATE TABLE `ims_article_unread_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notice_id` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `notice_id` (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_article_unread_notice` */

/*Table structure for table `ims_attachment_group` */

DROP TABLE IF EXISTS `ims_attachment_group`;

CREATE TABLE `ims_attachment_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_attachment_group` */

/*Table structure for table `ims_basic_reply` */

DROP TABLE IF EXISTS `ims_basic_reply`;

CREATE TABLE `ims_basic_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_basic_reply` */

/*Table structure for table `ims_business` */

DROP TABLE IF EXISTS `ims_business`;

CREATE TABLE `ims_business` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `province` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `dist` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(500) NOT NULL DEFAULT '',
  `lng` varchar(10) NOT NULL DEFAULT '',
  `lat` varchar(10) NOT NULL DEFAULT '',
  `industry1` varchar(10) NOT NULL DEFAULT '',
  `industry2` varchar(10) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_lat_lng` (`lat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_business` */

/*Table structure for table `ims_core_attachment` */

DROP TABLE IF EXISTS `ims_core_attachment`;

CREATE TABLE `ims_core_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `module_upload_dir` varchar(100) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_attachment` */

/*Table structure for table `ims_core_cache` */

DROP TABLE IF EXISTS `ims_core_cache`;

CREATE TABLE `ims_core_cache` (
  `key` varchar(100) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_cache` */

insert  into `ims_core_cache`(`key`,`value`) values ('we7:cloud_api_method:module/query','a:2:{s:6:\"expire\";i:1571024548;s:4:\"data\";a:2:{s:7:\"message\";s:21:\"站点信息不完整\";s:5:\"errno\";i:-1;}}'),('we7:cloud_api_method:site/build/index','a:2:{s:6:\"expire\";i:1571024548;s:4:\"data\";a:2:{s:7:\"message\";s:21:\"站点信息不完整\";s:5:\"errno\";i:-1;}}'),('we7:cloud_api_method:site/token/index','a:2:{s:6:\"expire\";i:1571024548;s:4:\"data\";a:2:{s:7:\"message\";s:21:\"站点信息不完整\";s:5:\"errno\";i:-1;}}'),('we7:cloud_api_method:work-order/status/index','a:2:{s:6:\"expire\";i:1571024548;s:4:\"data\";a:2:{s:7:\"message\";s:21:\"站点信息不完整\";s:5:\"errno\";i:-1;}}'),('we7:setting','a:4:{s:8:\"authmode\";i:1;s:5:\"close\";a:2:{s:6:\"status\";s:1:\"0\";s:6:\"reason\";s:0:\"\";}s:9:\"copyright\";a:1:{s:6:\"slides\";a:3:{i:0;s:58:\"https://img.alicdn.com/tps/TB1pfG4IFXXXXc6XXXXXXXXXXXX.jpg\";i:1;s:58:\"https://img.alicdn.com/tps/TB1sXGYIFXXXXc5XpXXXXXXXXXX.jpg\";i:2;s:58:\"https://img.alicdn.com/tps/TB1h9xxIFXXXXbKXXXXXXXXXXXX.jpg\";}}s:8:\"register\";a:4:{s:4:\"open\";i:1;s:6:\"verify\";i:0;s:4:\"code\";i:1;s:7:\"groupid\";i:1;}}'),('we7:system_frame:0','a:23:{s:7:\"welcome\";a:7:{s:5:\"title\";s:6:\"首页\";s:4:\"icon\";s:10:\"wi wi-home\";s:3:\"url\";s:48:\"./index.php?c=home&a=welcome&do=system&page=home\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:2;}s:8:\"platform\";a:8:{s:5:\"title\";s:12:\"平台入口\";s:4:\"icon\";s:14:\"wi wi-platform\";s:9:\"dimension\";i:2;s:3:\"url\";s:44:\"./index.php?c=account&a=display&do=platform&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:3;}s:6:\"module\";a:8:{s:5:\"title\";s:12:\"应用入口\";s:4:\"icon\";s:11:\"wi wi-apply\";s:9:\"dimension\";i:2;s:3:\"url\";s:53:\"./index.php?c=module&a=display&do=switch_last_module&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:4;}s:14:\"account_manage\";a:8:{s:5:\"title\";s:12:\"平台管理\";s:4:\"icon\";s:21:\"wi wi-platform-manage\";s:9:\"dimension\";i:2;s:3:\"url\";s:31:\"./index.php?c=account&a=manage&\";s:7:\"section\";a:1:{s:14:\"account_manage\";a:2:{s:5:\"title\";s:12:\"平台管理\";s:4:\"menu\";a:5:{s:22:\"account_manage_display\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"平台列表\";s:3:\"url\";s:31:\"./index.php?c=account&a=manage&\";s:15:\"permission_name\";s:22:\"account_manage_display\";s:4:\"icon\";N;s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:1:{i:0;a:2:{s:5:\"title\";s:12:\"帐号停用\";s:15:\"permission_name\";s:19:\"account_manage_stop\";}}}s:27:\"account_wxapp_register_list\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:16:\" 待审核列表\";s:3:\"url\";s:39:\"./index.php?c=wxapp&a=register&do=list&\";s:15:\"permission_name\";s:27:\"account_wxapp_register_list\";s:4:\"icon\";N;s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:22:\"account_manage_recycle\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:9:\"回收站\";s:3:\"url\";s:32:\"./index.php?c=account&a=recycle&\";s:15:\"permission_name\";s:22:\"account_manage_recycle\";s:4:\"icon\";N;s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{i:0;a:2:{s:5:\"title\";s:12:\"帐号删除\";s:15:\"permission_name\";s:21:\"account_manage_delete\";}i:1;a:2:{s:5:\"title\";s:12:\"帐号恢复\";s:15:\"permission_name\";s:22:\"account_manage_recover\";}}}s:30:\"account_manage_system_platform\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:19:\" 微信开放平台\";s:3:\"url\";s:32:\"./index.php?c=system&a=platform&\";s:15:\"permission_name\";s:30:\"account_manage_system_platform\";s:4:\"icon\";N;s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:30:\"account_manage_expired_message\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:22:\" 自定义到期提示\";s:3:\"url\";s:40:\"./index.php?c=account&a=expired-message&\";s:15:\"permission_name\";s:30:\"account_manage_expired_message\";s:4:\"icon\";N;s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:5;}s:13:\"module_manage\";a:8:{s:5:\"title\";s:12:\"应用管理\";s:4:\"icon\";s:19:\"wi wi-module-manage\";s:9:\"dimension\";i:2;s:3:\"url\";s:50:\"./index.php?c=module&a=manage-system&do=installed&\";s:7:\"section\";a:1:{s:13:\"module_manage\";a:2:{s:5:\"title\";s:12:\"应用管理\";s:4:\"menu\";a:6:{s:23:\"module_manage_installed\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"已安装列表\";s:3:\"url\";s:50:\"./index.php?c=module&a=manage-system&do=installed&\";s:15:\"permission_name\";s:23:\"module_manage_installed\";s:4:\"icon\";N;s:12:\"displayorder\";i:6;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:20:\"module_manage_stoped\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"已停用列表\";s:3:\"url\";s:54:\"./index.php?c=module&a=manage-system&do=recycle&type=1\";s:15:\"permission_name\";s:20:\"module_manage_stoped\";s:4:\"icon\";N;s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:27:\"module_manage_not_installed\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"未安装列表\";s:3:\"url\";s:54:\"./index.php?c=module&a=manage-system&do=not_installed&\";s:15:\"permission_name\";s:27:\"module_manage_not_installed\";s:4:\"icon\";N;s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:21:\"module_manage_recycle\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:9:\"回收站\";s:3:\"url\";s:54:\"./index.php?c=module&a=manage-system&do=recycle&type=2\";s:15:\"permission_name\";s:21:\"module_manage_recycle\";s:4:\"icon\";N;s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:23:\"module_manage_subscribe\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"订阅管理\";s:3:\"url\";s:50:\"./index.php?c=module&a=manage-system&do=subscribe&\";s:15:\"permission_name\";s:23:\"module_manage_subscribe\";s:4:\"icon\";N;s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:20:\"module_manage_expire\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"应用停用提醒\";s:3:\"url\";s:30:\"./index.php?c=module&a=expire&\";s:15:\"permission_name\";s:20:\"module_manage_expire\";s:4:\"icon\";N;s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:6;}s:11:\"user_manage\";a:8:{s:5:\"title\";s:12:\"用户管理\";s:4:\"icon\";s:16:\"wi wi-user-group\";s:9:\"dimension\";i:2;s:3:\"url\";s:29:\"./index.php?c=user&a=display&\";s:7:\"section\";a:1:{s:11:\"user_manage\";a:2:{s:5:\"title\";s:12:\"用户管理\";s:4:\"menu\";a:5:{s:19:\"user_manage_display\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"普通用户\";s:3:\"url\";s:29:\"./index.php?c=user&a=display&\";s:15:\"permission_name\";s:19:\"user_manage_display\";s:4:\"icon\";N;s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:17:\"user_manage_clerk\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"店员管理\";s:3:\"url\";s:39:\"./index.php?c=user&a=display&type=clerk\";s:15:\"permission_name\";s:17:\"user_manage_clerk\";s:4:\"icon\";N;s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:17:\"user_manage_check\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"审核用户\";s:3:\"url\";s:39:\"./index.php?c=user&a=display&type=check\";s:15:\"permission_name\";s:17:\"user_manage_check\";s:4:\"icon\";N;s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:19:\"user_manage_recycle\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:9:\"回收站\";s:3:\"url\";s:41:\"./index.php?c=user&a=display&type=recycle\";s:15:\"permission_name\";s:19:\"user_manage_recycle\";s:4:\"icon\";N;s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:18:\"user_manage_fields\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"用户属性设置\";s:3:\"url\";s:39:\"./index.php?c=user&a=fields&do=display&\";s:15:\"permission_name\";s:18:\"user_manage_fields\";s:4:\"icon\";N;s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:7;}s:10:\"permission\";a:8:{s:5:\"title\";s:9:\"权限组\";s:4:\"icon\";s:22:\"wi wi-userjurisdiction\";s:9:\"dimension\";i:2;s:3:\"url\";s:29:\"./index.php?c=module&a=group&\";s:7:\"section\";a:1:{s:10:\"permission\";a:2:{s:5:\"title\";s:9:\"权限组\";s:4:\"menu\";a:3:{s:23:\"permission_module_group\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"应用权限组\";s:3:\"url\";s:29:\"./index.php?c=module&a=group&\";s:15:\"permission_name\";s:23:\"permission_module_group\";s:4:\"icon\";N;s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:31:\"permission_create_account_group\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"账号权限组\";s:3:\"url\";s:34:\"./index.php?c=user&a=create-group&\";s:15:\"permission_name\";s:31:\"permission_create_account_group\";s:4:\"icon\";N;s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}s:21:\"permission_user_group\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"用户权限组合\";s:3:\"url\";s:27:\"./index.php?c=user&a=group&\";s:15:\"permission_name\";s:21:\"permission_user_group\";s:4:\"icon\";N;s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:0:{}}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:8;}s:6:\"system\";a:8:{s:5:\"title\";s:12:\"系统功能\";s:4:\"icon\";s:13:\"wi wi-setting\";s:9:\"dimension\";i:3;s:3:\"url\";s:31:\"./index.php?c=article&a=notice&\";s:7:\"section\";a:4:{s:7:\"article\";a:3:{s:5:\"title\";s:12:\"站内公告\";s:4:\"menu\";a:1:{s:14:\"system_article\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"站内公告\";s:3:\"url\";s:31:\"./index.php?c=article&a=notice&\";s:15:\"permission_name\";s:14:\"system_article\";s:4:\"icon\";s:13:\"wi wi-article\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{i:0;a:2:{s:5:\"title\";s:12:\"公告列表\";s:15:\"permission_name\";s:26:\"system_article_notice_list\";}i:1;a:2:{s:5:\"title\";s:12:\"公告分类\";s:15:\"permission_name\";s:30:\"system_article_notice_category\";}}}}s:7:\"founder\";b:1;}s:15:\"system_template\";a:3:{s:5:\"title\";s:6:\"模板\";s:4:\"menu\";a:1:{s:15:\"system_template\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"微官网模板\";s:3:\"url\";s:32:\"./index.php?c=system&a=template&\";s:15:\"permission_name\";s:15:\"system_template\";s:4:\"icon\";s:17:\"wi wi-wx-template\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:7:\"founder\";b:1;}s:3:\"sms\";a:3:{s:5:\"title\";s:6:\"短信\";s:4:\"menu\";a:1:{s:16:\"system_cloud_sms\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"短信管理\";s:3:\"url\";s:26:\"./index.php?c=cloud&a=sms&\";s:15:\"permission_name\";s:16:\"system_cloud_sms\";s:4:\"icon\";s:9:\"wi wi-sms\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:7:\"founder\";b:1;}s:5:\"cache\";a:2:{s:5:\"title\";s:6:\"缓存\";s:4:\"menu\";a:1:{s:26:\"system_setting_updatecache\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"更新缓存\";s:3:\"url\";s:35:\"./index.php?c=system&a=updatecache&\";s:15:\"permission_name\";s:26:\"system_setting_updatecache\";s:4:\"icon\";s:12:\"wi wi-update\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:9;}s:4:\"site\";a:9:{s:5:\"title\";s:12:\"站点设置\";s:4:\"icon\";s:17:\"wi wi-system-site\";s:9:\"dimension\";i:3;s:3:\"url\";s:30:\"./index.php?c=cloud&a=upgrade&\";s:7:\"section\";a:4:{s:5:\"cloud\";a:2:{s:5:\"title\";s:9:\"云服务\";s:4:\"menu\";a:3:{s:14:\"system_profile\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"系统升级\";s:3:\"url\";s:30:\"./index.php?c=cloud&a=upgrade&\";s:15:\"permission_name\";s:20:\"system_cloud_upgrade\";s:4:\"icon\";s:11:\"wi wi-cache\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:21:\"system_cloud_register\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"注册站点\";s:3:\"url\";s:30:\"./index.php?c=cloud&a=profile&\";s:15:\"permission_name\";s:21:\"system_cloud_register\";s:4:\"icon\";s:18:\"wi wi-registersite\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:21:\"system_cloud_diagnose\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"云服务诊断\";s:3:\"url\";s:31:\"./index.php?c=cloud&a=diagnose&\";s:15:\"permission_name\";s:21:\"system_cloud_diagnose\";s:4:\"icon\";s:14:\"wi wi-diagnose\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}s:7:\"setting\";a:2:{s:5:\"title\";s:6:\"设置\";s:4:\"menu\";a:9:{s:19:\"system_setting_site\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"站点设置\";s:3:\"url\";s:28:\"./index.php?c=system&a=site&\";s:15:\"permission_name\";s:19:\"system_setting_site\";s:4:\"icon\";s:18:\"wi wi-site-setting\";s:12:\"displayorder\";i:9;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:19:\"system_setting_menu\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"菜单设置\";s:3:\"url\";s:28:\"./index.php?c=system&a=menu&\";s:15:\"permission_name\";s:19:\"system_setting_menu\";s:4:\"icon\";s:18:\"wi wi-menu-setting\";s:12:\"displayorder\";i:8;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:25:\"system_setting_attachment\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"附件设置\";s:3:\"url\";s:34:\"./index.php?c=system&a=attachment&\";s:15:\"permission_name\";s:25:\"system_setting_attachment\";s:4:\"icon\";s:16:\"wi wi-attachment\";s:12:\"displayorder\";i:7;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:25:\"system_setting_systeminfo\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"系统信息\";s:3:\"url\";s:34:\"./index.php?c=system&a=systeminfo&\";s:15:\"permission_name\";s:25:\"system_setting_systeminfo\";s:4:\"icon\";s:17:\"wi wi-system-info\";s:12:\"displayorder\";i:6;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:19:\"system_setting_logs\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"查看日志\";s:3:\"url\";s:28:\"./index.php?c=system&a=logs&\";s:15:\"permission_name\";s:19:\"system_setting_logs\";s:4:\"icon\";s:9:\"wi wi-log\";s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:26:\"system_setting_ipwhitelist\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:11:\"IP白名单\";s:3:\"url\";s:35:\"./index.php?c=system&a=ipwhitelist&\";s:15:\"permission_name\";s:26:\"system_setting_ipwhitelist\";s:4:\"icon\";s:8:\"wi wi-ip\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:28:\"system_setting_sensitiveword\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"过滤敏感词\";s:3:\"url\";s:37:\"./index.php?c=system&a=sensitiveword&\";s:15:\"permission_name\";s:28:\"system_setting_sensitiveword\";s:4:\"icon\";s:15:\"wi wi-sensitive\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:25:\"system_setting_thirdlogin\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:25:\"用户登录/注册设置\";s:3:\"url\";s:33:\"./index.php?c=user&a=registerset&\";s:15:\"permission_name\";s:25:\"system_setting_thirdlogin\";s:4:\"icon\";s:10:\"wi wi-user\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:20:\"system_setting_oauth\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"全局借用权限\";s:3:\"url\";s:29:\"./index.php?c=system&a=oauth&\";s:15:\"permission_name\";s:20:\"system_setting_oauth\";s:4:\"icon\";s:11:\"wi wi-oauth\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}s:7:\"utility\";a:2:{s:5:\"title\";s:12:\"常用工具\";s:4:\"menu\";a:6:{s:24:\"system_utility_filecheck\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"系统文件校验\";s:3:\"url\";s:33:\"./index.php?c=system&a=filecheck&\";s:15:\"permission_name\";s:24:\"system_utility_filecheck\";s:4:\"icon\";s:10:\"wi wi-file\";s:12:\"displayorder\";i:6;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:23:\"system_utility_optimize\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"性能优化\";s:3:\"url\";s:32:\"./index.php?c=system&a=optimize&\";s:15:\"permission_name\";s:23:\"system_utility_optimize\";s:4:\"icon\";s:14:\"wi wi-optimize\";s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:23:\"system_utility_database\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:9:\"数据库\";s:3:\"url\";s:32:\"./index.php?c=system&a=database&\";s:15:\"permission_name\";s:23:\"system_utility_database\";s:4:\"icon\";s:9:\"wi wi-sql\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:19:\"system_utility_scan\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"木马查杀\";s:3:\"url\";s:28:\"./index.php?c=system&a=scan&\";s:15:\"permission_name\";s:19:\"system_utility_scan\";s:4:\"icon\";s:12:\"wi wi-safety\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:18:\"system_utility_bom\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:15:\"检测文件BOM\";s:3:\"url\";s:27:\"./index.php?c=system&a=bom&\";s:15:\"permission_name\";s:18:\"system_utility_bom\";s:4:\"icon\";s:9:\"wi wi-bom\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:20:\"system_utility_check\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"系统常规检测\";s:3:\"url\";s:29:\"./index.php?c=system&a=check&\";s:15:\"permission_name\";s:20:\"system_utility_check\";s:4:\"icon\";s:9:\"wi wi-bom\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}s:7:\"backjob\";a:2:{s:5:\"title\";s:12:\"后台任务\";s:4:\"menu\";a:1:{s:10:\"system_job\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"后台任务\";s:3:\"url\";s:38:\"./index.php?c=system&a=job&do=display&\";s:15:\"permission_name\";s:10:\"system_job\";s:4:\"icon\";s:9:\"wi wi-job\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}}s:7:\"founder\";b:1;s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:10;}s:6:\"myself\";a:8:{s:5:\"title\";s:12:\"我的账户\";s:4:\"icon\";s:10:\"wi wi-bell\";s:9:\"dimension\";i:2;s:3:\"url\";s:29:\"./index.php?c=user&a=profile&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:11;}s:7:\"message\";a:8:{s:5:\"title\";s:12:\"消息管理\";s:4:\"icon\";s:10:\"wi wi-bell\";s:9:\"dimension\";i:2;s:3:\"url\";s:31:\"./index.php?c=message&a=notice&\";s:7:\"section\";a:1:{s:7:\"message\";a:2:{s:5:\"title\";s:12:\"消息管理\";s:4:\"menu\";a:3:{s:14:\"message_notice\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"消息提醒\";s:3:\"url\";s:31:\"./index.php?c=message&a=notice&\";s:15:\"permission_name\";s:14:\"message_notice\";s:4:\"icon\";N;s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:15:\"message_setting\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"消息设置\";s:3:\"url\";s:42:\"./index.php?c=message&a=notice&do=setting&\";s:15:\"permission_name\";s:15:\"message_setting\";s:4:\"icon\";N;s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:22:\"message_wechat_setting\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:18:\"微信提醒设置\";s:3:\"url\";s:49:\"./index.php?c=message&a=notice&do=wechat_setting&\";s:15:\"permission_name\";s:22:\"message_wechat_setting\";s:4:\"icon\";N;s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:12;}s:7:\"account\";a:8:{s:5:\"title\";s:9:\"公众号\";s:4:\"icon\";s:18:\"wi wi-white-collar\";s:9:\"dimension\";i:3;s:3:\"url\";s:41:\"./index.php?c=home&a=welcome&do=platform&\";s:7:\"section\";a:4:{s:8:\"platform\";a:4:{s:5:\"title\";s:12:\"增强功能\";s:4:\"menu\";a:6:{s:14:\"platform_reply\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"自动回复\";s:3:\"url\";s:31:\"./index.php?c=platform&a=reply&\";s:15:\"permission_name\";s:14:\"platform_reply\";s:4:\"icon\";s:11:\"wi wi-reply\";s:12:\"displayorder\";i:6;s:2:\"id\";N;s:14:\"sub_permission\";a:7:{s:22:\"platform_reply_keyword\";a:4:{s:5:\"title\";s:21:\"关键字自动回复\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=keyword\";s:15:\"permission_name\";s:22:\"platform_reply_keyword\";s:6:\"active\";s:7:\"keyword\";}s:22:\"platform_reply_special\";a:4:{s:5:\"title\";s:24:\"非关键字自动回复\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=special\";s:15:\"permission_name\";s:22:\"platform_reply_special\";s:6:\"active\";s:7:\"special\";}s:22:\"platform_reply_welcome\";a:4:{s:5:\"title\";s:24:\"首次访问自动回复\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=welcome\";s:15:\"permission_name\";s:22:\"platform_reply_welcome\";s:6:\"active\";s:7:\"welcome\";}s:22:\"platform_reply_default\";a:4:{s:5:\"title\";s:12:\"默认回复\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=default\";s:15:\"permission_name\";s:22:\"platform_reply_default\";s:6:\"active\";s:7:\"default\";}s:22:\"platform_reply_service\";a:4:{s:5:\"title\";s:12:\"常用服务\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=service\";s:15:\"permission_name\";s:22:\"platform_reply_service\";s:6:\"active\";s:7:\"service\";}s:22:\"platform_reply_userapi\";a:5:{s:5:\"title\";s:21:\"自定义接口回复\";s:3:\"url\";s:40:\"./index.php?c=platform&a=reply&m=userapi\";s:15:\"permission_name\";s:22:\"platform_reply_userapi\";s:6:\"active\";s:7:\"userapi\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:22:\"platform_reply_setting\";a:4:{s:5:\"title\";s:12:\"回复设置\";s:3:\"url\";s:38:\"./index.php?c=profile&a=reply-setting&\";s:15:\"permission_name\";s:22:\"platform_reply_setting\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}}}s:13:\"platform_menu\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:15:\"自定义菜单\";s:3:\"url\";s:38:\"./index.php?c=platform&a=menu&do=post&\";s:15:\"permission_name\";s:13:\"platform_menu\";s:4:\"icon\";s:16:\"wi wi-custommenu\";s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:21:\"platform_menu_default\";a:4:{s:5:\"title\";s:12:\"默认菜单\";s:3:\"url\";s:38:\"./index.php?c=platform&a=menu&do=post&\";s:15:\"permission_name\";s:21:\"platform_menu_default\";s:6:\"active\";s:4:\"post\";}s:25:\"platform_menu_conditional\";a:5:{s:5:\"title\";s:15:\"个性化菜单\";s:3:\"url\";s:47:\"./index.php?c=platform&a=menu&do=display&type=3\";s:15:\"permission_name\";s:25:\"platform_menu_conditional\";s:6:\"active\";s:7:\"display\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}}}s:11:\"platform_qr\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:2:{i:0;i:1;i:1;i:3;}s:10:\"is_display\";i:0;s:5:\"title\";s:22:\"二维码/转化链接\";s:3:\"url\";s:28:\"./index.php?c=platform&a=qr&\";s:15:\"permission_name\";s:11:\"platform_qr\";s:4:\"icon\";s:12:\"wi wi-qrcode\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:14:\"platform_qr_qr\";a:4:{s:5:\"title\";s:9:\"二维码\";s:3:\"url\";s:36:\"./index.php?c=platform&a=qr&do=list&\";s:15:\"permission_name\";s:14:\"platform_qr_qr\";s:6:\"active\";s:4:\"list\";}s:22:\"platform_qr_statistics\";a:4:{s:5:\"title\";s:21:\"二维码扫描统计\";s:3:\"url\";s:39:\"./index.php?c=platform&a=qr&do=display&\";s:15:\"permission_name\";s:22:\"platform_qr_statistics\";s:6:\"active\";s:7:\"display\";}}}s:17:\"platform_masstask\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"定时群发\";s:3:\"url\";s:30:\"./index.php?c=platform&a=mass&\";s:15:\"permission_name\";s:17:\"platform_masstask\";s:4:\"icon\";s:13:\"wi wi-crontab\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:22:\"platform_masstask_post\";a:4:{s:5:\"title\";s:12:\"定时群发\";s:3:\"url\";s:38:\"./index.php?c=platform&a=mass&do=post&\";s:15:\"permission_name\";s:22:\"platform_masstask_post\";s:6:\"active\";s:4:\"post\";}s:22:\"platform_masstask_send\";a:4:{s:5:\"title\";s:12:\"群发记录\";s:3:\"url\";s:38:\"./index.php?c=platform&a=mass&do=send&\";s:15:\"permission_name\";s:22:\"platform_masstask_send\";s:6:\"active\";s:4:\"send\";}}}s:17:\"platform_material\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:16:\"素材/编辑器\";s:3:\"url\";s:34:\"./index.php?c=platform&a=material&\";s:15:\"permission_name\";s:17:\"platform_material\";s:4:\"icon\";s:12:\"wi wi-redact\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:5:{s:22:\"platform_material_news\";a:4:{s:5:\"title\";s:6:\"图文\";s:3:\"url\";s:43:\"./index.php?c=platform&a=material&type=news\";s:15:\"permission_name\";s:22:\"platform_material_news\";s:6:\"active\";s:4:\"news\";}s:23:\"platform_material_image\";a:4:{s:5:\"title\";s:6:\"图片\";s:3:\"url\";s:44:\"./index.php?c=platform&a=material&type=image\";s:15:\"permission_name\";s:23:\"platform_material_image\";s:6:\"active\";s:5:\"image\";}s:23:\"platform_material_voice\";a:4:{s:5:\"title\";s:6:\"语音\";s:3:\"url\";s:44:\"./index.php?c=platform&a=material&type=voice\";s:15:\"permission_name\";s:23:\"platform_material_voice\";s:6:\"active\";s:5:\"voice\";}s:23:\"platform_material_video\";a:5:{s:5:\"title\";s:6:\"视频\";s:3:\"url\";s:44:\"./index.php?c=platform&a=material&type=video\";s:15:\"permission_name\";s:23:\"platform_material_video\";s:6:\"active\";s:5:\"video\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:24:\"platform_material_delete\";a:3:{s:5:\"title\";s:6:\"删除\";s:15:\"permission_name\";s:24:\"platform_material_delete\";s:10:\"is_display\";b:0;}}}s:13:\"platform_site\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:2:{i:0;i:1;i:1;i:3;}s:10:\"is_display\";i:0;s:5:\"title\";s:16:\"微官网-文章\";s:3:\"url\";s:27:\"./index.php?c=site&a=multi&\";s:15:\"permission_name\";s:13:\"platform_site\";s:4:\"icon\";s:10:\"wi wi-home\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:4:{s:19:\"platform_site_multi\";a:4:{s:5:\"title\";s:9:\"微官网\";s:3:\"url\";s:38:\"./index.php?c=site&a=multi&do=display&\";s:15:\"permission_name\";s:19:\"platform_site_multi\";s:6:\"active\";s:5:\"multi\";}s:19:\"platform_site_style\";a:4:{s:5:\"title\";s:15:\"微官网模板\";s:3:\"url\";s:39:\"./index.php?c=site&a=style&do=template&\";s:15:\"permission_name\";s:19:\"platform_site_style\";s:6:\"active\";s:5:\"style\";}s:21:\"platform_site_article\";a:4:{s:5:\"title\";s:12:\"文章管理\";s:3:\"url\";s:40:\"./index.php?c=site&a=article&do=display&\";s:15:\"permission_name\";s:21:\"platform_site_article\";s:6:\"active\";s:7:\"article\";}s:22:\"platform_site_category\";a:4:{s:5:\"title\";s:18:\"文章分类管理\";s:3:\"url\";s:41:\"./index.php?c=site&a=category&do=display&\";s:15:\"permission_name\";s:22:\"platform_site_category\";s:6:\"active\";s:8:\"category\";}}}}s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;}s:15:\"platform_module\";a:3:{s:5:\"title\";s:12:\"应用模块\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}s:2:\"mc\";a:4:{s:5:\"title\";s:6:\"粉丝\";s:4:\"menu\";a:3:{s:7:\"mc_fans\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"粉丝管理\";s:3:\"url\";s:24:\"./index.php?c=mc&a=fans&\";s:15:\"permission_name\";s:7:\"mc_fans\";s:4:\"icon\";s:16:\"wi wi-fansmanage\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:15:\"mc_fans_display\";a:4:{s:5:\"title\";s:12:\"全部粉丝\";s:3:\"url\";s:35:\"./index.php?c=mc&a=fans&do=display&\";s:15:\"permission_name\";s:15:\"mc_fans_display\";s:6:\"active\";s:7:\"display\";}s:21:\"mc_fans_fans_sync_set\";a:4:{s:5:\"title\";s:18:\"粉丝同步设置\";s:3:\"url\";s:41:\"./index.php?c=mc&a=fans&do=fans_sync_set&\";s:15:\"permission_name\";s:21:\"mc_fans_fans_sync_set\";s:6:\"active\";s:13:\"fans_sync_set\";}}}s:9:\"mc_member\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:5:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;i:4;i:5;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"会员管理\";s:3:\"url\";s:26:\"./index.php?c=mc&a=member&\";s:15:\"permission_name\";s:9:\"mc_member\";s:4:\"icon\";s:10:\"wi wi-fans\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:7:{s:17:\"mc_member_diaplsy\";a:4:{s:5:\"title\";s:12:\"会员管理\";s:3:\"url\";s:37:\"./index.php?c=mc&a=member&do=display&\";s:15:\"permission_name\";s:17:\"mc_member_diaplsy\";s:6:\"active\";s:7:\"display\";}s:15:\"mc_member_group\";a:4:{s:5:\"title\";s:9:\"会员组\";s:3:\"url\";s:36:\"./index.php?c=mc&a=group&do=display&\";s:15:\"permission_name\";s:15:\"mc_member_group\";s:6:\"active\";s:7:\"display\";}s:12:\"mc_member_uc\";a:5:{s:5:\"title\";s:12:\"会员中心\";s:3:\"url\";s:34:\"./index.php?c=site&a=editor&do=uc&\";s:15:\"permission_name\";s:12:\"mc_member_uc\";s:6:\"active\";s:2:\"uc\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:19:\"mc_member_quickmenu\";a:5:{s:5:\"title\";s:12:\"快捷菜单\";s:3:\"url\";s:41:\"./index.php?c=site&a=editor&do=quickmenu&\";s:15:\"permission_name\";s:19:\"mc_member_quickmenu\";s:6:\"active\";s:9:\"quickmenu\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:25:\"mc_member_register_seting\";a:5:{s:5:\"title\";s:12:\"注册设置\";s:3:\"url\";s:46:\"./index.php?c=mc&a=member&do=register_setting&\";s:15:\"permission_name\";s:25:\"mc_member_register_seting\";s:6:\"active\";s:16:\"register_setting\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:24:\"mc_member_credit_setting\";a:4:{s:5:\"title\";s:12:\"积分设置\";s:3:\"url\";s:44:\"./index.php?c=mc&a=member&do=credit_setting&\";s:15:\"permission_name\";s:24:\"mc_member_credit_setting\";s:6:\"active\";s:14:\"credit_setting\";}s:16:\"mc_member_fields\";a:4:{s:5:\"title\";s:18:\"会员字段管理\";s:3:\"url\";s:34:\"./index.php?c=mc&a=fields&do=list&\";s:15:\"permission_name\";s:16:\"mc_member_fields\";s:6:\"active\";s:4:\"list\";}}}s:10:\"mc_message\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"留言管理\";s:3:\"url\";s:27:\"./index.php?c=mc&a=message&\";s:15:\"permission_name\";s:10:\"mc_message\";s:4:\"icon\";s:13:\"wi wi-message\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:5:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;i:4;i:5;}s:10:\"is_display\";i:0;}s:7:\"profile\";a:4:{s:5:\"title\";s:6:\"配置\";s:4:\"menu\";a:5:{s:15:\"profile_setting\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:5:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;i:4;i:5;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"参数配置\";s:3:\"url\";s:31:\"./index.php?c=profile&a=remote&\";s:15:\"permission_name\";s:15:\"profile_setting\";s:4:\"icon\";s:23:\"wi wi-parameter-setting\";s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:5:{s:22:\"profile_setting_remote\";a:4:{s:5:\"title\";s:12:\"远程附件\";s:3:\"url\";s:42:\"./index.php?c=profile&a=remote&do=display&\";s:15:\"permission_name\";s:22:\"profile_setting_remote\";s:6:\"active\";s:7:\"display\";}s:24:\"profile_setting_passport\";a:5:{s:5:\"title\";s:12:\"借用权限\";s:3:\"url\";s:42:\"./index.php?c=profile&a=passport&do=oauth&\";s:15:\"permission_name\";s:24:\"profile_setting_passport\";s:6:\"active\";s:5:\"oauth\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:25:\"profile_setting_tplnotice\";a:5:{s:5:\"title\";s:18:\"微信通知设置\";s:3:\"url\";s:42:\"./index.php?c=profile&a=tplnotice&do=list&\";s:15:\"permission_name\";s:25:\"profile_setting_tplnotice\";s:6:\"active\";s:4:\"list\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:22:\"profile_setting_notify\";a:5:{s:5:\"title\";s:18:\"邮件通知参数\";s:3:\"url\";s:39:\"./index.php?c=profile&a=notify&do=mail&\";s:15:\"permission_name\";s:22:\"profile_setting_notify\";s:6:\"active\";s:4:\"mail\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}s:27:\"profile_setting_upload_file\";a:5:{s:5:\"title\";s:20:\"上传JS接口文件\";s:3:\"url\";s:46:\"./index.php?c=profile&a=common&do=upload_file&\";s:15:\"permission_name\";s:27:\"profile_setting_upload_file\";s:6:\"active\";s:11:\"upload_file\";s:10:\"is_display\";a:2:{i:0;i:1;i:1;i:3;}}}}s:15:\"profile_payment\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:3:{i:0;i:1;i:1;i:3;i:2;i:5;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"支付参数\";s:3:\"url\";s:32:\"./index.php?c=profile&a=payment&\";s:15:\"permission_name\";s:15:\"profile_payment\";s:4:\"icon\";s:17:\"wi wi-pay-setting\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:19:\"profile_payment_pay\";a:4:{s:5:\"title\";s:12:\"支付配置\";s:3:\"url\";s:32:\"./index.php?c=profile&a=payment&\";s:15:\"permission_name\";s:19:\"profile_payment_pay\";s:6:\"active\";s:7:\"payment\";}s:22:\"profile_payment_refund\";a:4:{s:5:\"title\";s:12:\"退款配置\";s:3:\"url\";s:42:\"./index.php?c=profile&a=refund&do=display&\";s:15:\"permission_name\";s:22:\"profile_payment_refund\";s:6:\"active\";s:6:\"refund\";}}}s:23:\"profile_app_module_link\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"数据同步\";s:3:\"url\";s:44:\"./index.php?c=profile&a=module-link-uniacid&\";s:15:\"permission_name\";s:31:\"profile_app_module_link_uniacid\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:18:\"webapp_module_link\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:5;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"数据同步\";s:3:\"url\";s:44:\"./index.php?c=profile&a=module-link-uniacid&\";s:15:\"permission_name\";s:18:\"webapp_module_link\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:14:\"webapp_rewrite\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:5;}s:10:\"is_display\";i:0;s:5:\"title\";s:9:\"伪静态\";s:3:\"url\";s:31:\"./index.php?c=webapp&a=rewrite&\";s:15:\"permission_name\";s:14:\"webapp_rewrite\";s:4:\"icon\";s:13:\"wi wi-rewrite\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:5:{i:0;i:1;i:1;i:3;i:2;i:9;i:3;i:10;i:4;i:5;}s:10:\"is_display\";i:0;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:13;}s:5:\"wxapp\";a:8:{s:5:\"title\";s:15:\"微信小程序\";s:4:\"icon\";s:19:\"wi wi-small-routine\";s:9:\"dimension\";i:3;s:3:\"url\";s:38:\"./index.php?c=wxapp&a=display&do=home&\";s:7:\"section\";a:6:{s:14:\"wxapp_entrance\";a:4:{s:5:\"title\";s:15:\"小程序入口\";s:4:\"menu\";a:1:{s:20:\"module_entrance_link\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"入口页面\";s:3:\"url\";s:36:\"./index.php?c=wxapp&a=entrance-link&\";s:15:\"permission_name\";s:19:\"wxapp_entrance_link\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;}s:15:\"platform_module\";a:3:{s:5:\"title\";s:6:\"应用\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}s:2:\"mc\";a:4:{s:5:\"title\";s:6:\"粉丝\";s:4:\"menu\";a:1:{s:9:\"mc_member\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:6:\"会员\";s:3:\"url\";s:26:\"./index.php?c=mc&a=member&\";s:15:\"permission_name\";s:15:\"mc_wxapp_member\";s:4:\"icon\";s:10:\"wi wi-fans\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";a:4:{s:17:\"mc_member_diaplsy\";a:4:{s:5:\"title\";s:12:\"会员管理\";s:3:\"url\";s:37:\"./index.php?c=mc&a=member&do=display&\";s:15:\"permission_name\";s:17:\"mc_member_diaplsy\";s:6:\"active\";s:7:\"display\";}s:15:\"mc_member_group\";a:4:{s:5:\"title\";s:9:\"会员组\";s:3:\"url\";s:36:\"./index.php?c=mc&a=group&do=display&\";s:15:\"permission_name\";s:15:\"mc_member_group\";s:6:\"active\";s:7:\"display\";}s:24:\"mc_member_credit_setting\";a:4:{s:5:\"title\";s:12:\"积分设置\";s:3:\"url\";s:44:\"./index.php?c=mc&a=member&do=credit_setting&\";s:15:\"permission_name\";s:24:\"mc_member_credit_setting\";s:6:\"active\";s:14:\"credit_setting\";}s:16:\"mc_member_fields\";a:4:{s:5:\"title\";s:18:\"会员字段管理\";s:3:\"url\";s:34:\"./index.php?c=mc&a=fields&do=list&\";s:15:\"permission_name\";s:16:\"mc_member_fields\";s:6:\"active\";s:4:\"list\";}}}}s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;}s:9:\"wxapp_api\";a:4:{s:5:\"title\";s:15:\"API上传审核\";s:4:\"menu\";a:4:{s:14:\"wxapp_api_base\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"基本信息\";s:3:\"url\";s:39:\"./index.php?c=miniapp&a=platform-basic&\";s:15:\"permission_name\";s:14:\"wxapp_api_base\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:17:\"wxapp_api_version\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"版本管理\";s:3:\"url\";s:41:\"./index.php?c=miniapp&a=platform-version&\";s:15:\"permission_name\";s:17:\"wxapp_api_version\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:18:\"wxapp_api_template\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:9:\"模板库\";s:3:\"url\";s:42:\"./index.php?c=miniapp&a=platform-template&\";s:15:\"permission_name\";s:18:\"wxapp_api_template\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:16:\"wxapp_api_domain\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:15:\"服务器配置\";s:3:\"url\";s:40:\"./index.php?c=miniapp&a=platform-domain&\";s:15:\"permission_name\";s:16:\"wxapp_api_domain\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:1:{i:0;i:14;}s:10:\"is_display\";i:0;}s:13:\"wxapp_profile\";a:3:{s:5:\"title\";s:6:\"配置\";s:4:\"menu\";a:5:{s:33:\"wxapp_profile_module_link_uniacid\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:8:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;i:4;i:6;i:5;i:11;i:6;i:12;i:7;i:13;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"数据同步\";s:3:\"url\";s:42:\"./index.php?c=wxapp&a=module-link-uniacid&\";s:15:\"permission_name\";s:33:\"wxapp_profile_module_link_uniacid\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:6;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:21:\"wxapp_profile_payment\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"支付参数\";s:3:\"url\";s:30:\"./index.php?c=wxapp&a=payment&\";s:15:\"permission_name\";s:21:\"wxapp_profile_payment\";s:4:\"icon\";s:16:\"wi wi-appsetting\";s:12:\"displayorder\";i:5;s:2:\"id\";N;s:14:\"sub_permission\";a:2:{s:17:\"wxapp_payment_pay\";a:4:{s:5:\"title\";s:12:\"支付参数\";s:3:\"url\";s:41:\"./index.php?c=wxapp&a=payment&do=display&\";s:15:\"permission_name\";s:17:\"wxapp_payment_pay\";s:6:\"active\";s:7:\"payment\";}s:20:\"wxapp_payment_refund\";a:4:{s:5:\"title\";s:12:\"退款配置\";s:3:\"url\";s:40:\"./index.php?c=wxapp&a=refund&do=display&\";s:15:\"permission_name\";s:20:\"wxapp_payment_refund\";s:6:\"active\";s:6:\"refund\";}}}s:28:\"wxapp_profile_front_download\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:7:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:6;i:4;i:11;i:5;i:12;i:6;i:13;}s:10:\"is_display\";i:0;s:5:\"title\";s:15:\"下载程序包\";s:3:\"url\";s:37:\"./index.php?c=wxapp&a=front-download&\";s:15:\"permission_name\";s:28:\"wxapp_profile_front_download\";s:4:\"icon\";s:13:\"wi wi-examine\";s:12:\"displayorder\";i:4;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:23:\"wxapp_profile_domainset\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:3:{i:0;i:4;i:1;i:7;i:2;i:8;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"域名设置\";s:3:\"url\";s:32:\"./index.php?c=wxapp&a=domainset&\";s:15:\"permission_name\";s:23:\"wxapp_profile_domainset\";s:4:\"icon\";s:13:\"wi wi-examine\";s:12:\"displayorder\";i:3;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:22:\"profile_setting_remote\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:7:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:6;i:4;i:11;i:5;i:12;i:6;i:13;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"参数配置\";s:3:\"url\";s:31:\"./index.php?c=profile&a=remote&\";s:15:\"permission_name\";s:22:\"profile_setting_remote\";s:4:\"icon\";s:23:\"wi wi-parameter-setting\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:8:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;i:4;i:6;i:5;i:11;i:6;i:12;i:7;i:13;}}s:10:\"statistics\";a:4:{s:5:\"title\";s:6:\"统计\";s:4:\"menu\";a:2:{s:16:\"statistics_visit\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:8:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;i:4;i:6;i:5;i:11;i:6;i:12;i:7;i:13;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"访问统计\";s:3:\"url\";s:31:\"./index.php?c=statistics&a=app&\";s:15:\"permission_name\";s:22:\"statistics_visit_wxapp\";s:4:\"icon\";s:17:\"wi wi-statistical\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";a:3:{s:20:\"statistics_visit_app\";a:4:{s:5:\"title\";s:24:\"app端访问统计信息\";s:3:\"url\";s:42:\"./index.php?c=statistics&a=app&do=display&\";s:15:\"permission_name\";s:20:\"statistics_visit_app\";s:6:\"active\";s:3:\"app\";}s:21:\"statistics_visit_site\";a:4:{s:5:\"title\";s:24:\"所有用户访问统计\";s:3:\"url\";s:51:\"./index.php?c=statistics&a=site&do=current_account&\";s:15:\"permission_name\";s:21:\"statistics_visit_site\";s:6:\"active\";s:4:\"site\";}s:24:\"statistics_visit_setting\";a:4:{s:5:\"title\";s:18:\"访问统计设置\";s:3:\"url\";s:46:\"./index.php?c=statistics&a=setting&do=display&\";s:15:\"permission_name\";s:24:\"statistics_visit_setting\";s:6:\"active\";s:7:\"setting\";}}}s:15:\"statistics_fans\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:4:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"用户统计\";s:3:\"url\";s:33:\"./index.php?c=wxapp&a=statistics&\";s:15:\"permission_name\";s:21:\"statistics_fans_wxapp\";s:4:\"icon\";s:17:\"wi wi-statistical\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:18:\"permission_display\";a:8:{i:0;i:4;i:1;i:7;i:2;i:8;i:3;i:14;i:4;i:6;i:5;i:11;i:6;i:12;i:7;i:13;}s:10:\"is_display\";i:0;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:14;}s:6:\"webapp\";a:7:{s:5:\"title\";s:2:\"PC\";s:4:\"icon\";s:8:\"wi wi-pc\";s:3:\"url\";s:39:\"./index.php?c=webapp&a=home&do=display&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:15;}s:8:\"phoneapp\";a:7:{s:5:\"title\";s:3:\"APP\";s:4:\"icon\";s:18:\"wi wi-white-collar\";s:3:\"url\";s:41:\"./index.php?c=phoneapp&a=display&do=home&\";s:7:\"section\";a:2:{s:15:\"platform_module\";a:3:{s:5:\"title\";s:6:\"应用\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}s:16:\"phoneapp_profile\";a:4:{s:5:\"title\";s:6:\"配置\";s:4:\"menu\";a:2:{s:28:\"profile_phoneapp_module_link\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";a:1:{i:0;i:6;}s:10:\"is_display\";i:0;s:5:\"title\";s:12:\"数据同步\";s:3:\"url\";s:42:\"./index.php?c=wxapp&a=module-link-uniacid&\";s:15:\"permission_name\";s:28:\"profile_phoneapp_module_link\";s:4:\"icon\";s:18:\"wi wi-data-synchro\";s:12:\"displayorder\";i:2;s:2:\"id\";N;s:14:\"sub_permission\";N;}s:14:\"front_download\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";b:1;s:10:\"is_display\";i:1;s:5:\"title\";s:9:\"下载APP\";s:3:\"url\";s:40:\"./index.php?c=phoneapp&a=front-download&\";s:15:\"permission_name\";s:23:\"phoneapp_front_download\";s:4:\"icon\";s:13:\"wi wi-examine\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}s:10:\"is_display\";b:1;s:18:\"permission_display\";a:1:{i:0;i:6;}}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:16;}s:5:\"xzapp\";a:7:{s:5:\"title\";s:9:\"熊掌号\";s:4:\"icon\";s:11:\"wi wi-xzapp\";s:3:\"url\";s:38:\"./index.php?c=xzapp&a=home&do=display&\";s:7:\"section\";a:1:{s:15:\"platform_module\";a:3:{s:5:\"title\";s:12:\"应用模块\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:17;}s:6:\"aliapp\";a:7:{s:5:\"title\";s:18:\"支付宝小程序\";s:4:\"icon\";s:12:\"wi wi-aliapp\";s:3:\"url\";s:40:\"./index.php?c=miniapp&a=display&do=home&\";s:7:\"section\";a:1:{s:15:\"platform_module\";a:3:{s:5:\"title\";s:6:\"应用\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:18;}s:8:\"baiduapp\";a:7:{s:5:\"title\";s:15:\"百度小程序\";s:4:\"icon\";s:14:\"wi wi-baiduapp\";s:3:\"url\";s:40:\"./index.php?c=miniapp&a=display&do=home&\";s:7:\"section\";a:1:{s:15:\"platform_module\";a:3:{s:5:\"title\";s:6:\"应用\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:19;}s:10:\"toutiaoapp\";a:7:{s:5:\"title\";s:15:\"头条小程序\";s:4:\"icon\";s:16:\"wi wi-toutiaoapp\";s:3:\"url\";s:40:\"./index.php?c=miniapp&a=display&do=home&\";s:7:\"section\";a:1:{s:15:\"platform_module\";a:3:{s:5:\"title\";s:6:\"应用\";s:4:\"menu\";a:0:{}s:10:\"is_display\";b:1;}}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:20;}s:9:\"appmarket\";a:9:{s:5:\"title\";s:6:\"市场\";s:4:\"icon\";s:12:\"wi wi-market\";s:3:\"url\";s:14:\"http://s.w7.cc\";s:7:\"section\";a:0:{}s:5:\"blank\";b:1;s:7:\"founder\";b:1;s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:21;}s:9:\"workorder\";a:9:{s:5:\"title\";s:6:\"工单\";s:4:\"icon\";s:10:\"wi wi-bell\";s:9:\"dimension\";i:2;s:3:\"url\";s:44:\"./index.php?c=system&a=workorder&do=display&\";s:7:\"section\";a:1:{s:9:\"workorder\";a:2:{s:5:\"title\";s:12:\"工单系统\";s:4:\"menu\";a:1:{s:16:\"system_workorder\";a:10:{s:9:\"is_system\";i:1;s:18:\"permission_display\";N;s:10:\"is_display\";i:1;s:5:\"title\";s:12:\"工单系统\";s:3:\"url\";s:44:\"./index.php?c=system&a=workorder&do=display&\";s:15:\"permission_name\";s:16:\"system_workorder\";s:4:\"icon\";s:17:\"wi wi-system-work\";s:12:\"displayorder\";i:1;s:2:\"id\";N;s:14:\"sub_permission\";N;}}}}s:7:\"founder\";b:1;s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:22;}s:4:\"help\";a:7:{s:5:\"title\";s:6:\"帮助\";s:4:\"icon\";s:12:\"wi wi-market\";s:3:\"url\";s:29:\"./index.php?c=help&a=display&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:23;}s:11:\"custom_help\";a:7:{s:5:\"title\";s:12:\"本站帮助\";s:4:\"icon\";s:12:\"wi wi-market\";s:3:\"url\";s:39:\"./index.php?c=help&a=display&do=custom&\";s:7:\"section\";a:0:{}s:9:\"is_system\";b:1;s:10:\"is_display\";b:1;s:12:\"displayorder\";i:24;}}'),('we7:uniaccount:1','a:21:{s:4:\"acid\";s:1:\"1\";s:7:\"uniacid\";s:1:\"1\";s:5:\"token\";s:32:\"omJNpZEhZeHj1ZxFECKkP48B5VFbk1HP\";s:14:\"encodingaeskey\";s:0:\"\";s:5:\"level\";s:1:\"1\";s:4:\"name\";s:7:\"we7team\";s:7:\"account\";s:0:\"\";s:8:\"original\";s:0:\"\";s:9:\"signature\";s:0:\"\";s:7:\"country\";s:0:\"\";s:8:\"province\";s:0:\"\";s:4:\"city\";s:0:\"\";s:8:\"username\";s:0:\"\";s:8:\"password\";s:0:\"\";s:10:\"lastupdate\";s:1:\"0\";s:3:\"key\";s:0:\"\";s:6:\"secret\";s:0:\"\";s:7:\"styleid\";s:1:\"1\";s:12:\"subscribeurl\";s:0:\"\";s:18:\"auth_refresh_token\";s:0:\"\";s:11:\"encrypt_key\";s:0:\"\";}'),('we7:unisetting:1','a:30:{s:7:\"uniacid\";s:1:\"1\";s:8:\"passport\";a:3:{s:8:\"focusreg\";i:0;s:4:\"item\";s:5:\"email\";s:4:\"type\";s:8:\"password\";}s:5:\"oauth\";a:2:{s:6:\"status\";s:1:\"0\";s:7:\"account\";s:1:\"0\";}s:11:\"jsauth_acid\";s:1:\"0\";s:2:\"uc\";s:23:\"a:1:{s:6:\"status\";i:0;}\";s:6:\"notify\";a:1:{s:3:\"sms\";a:2:{s:7:\"balance\";i:0;s:9:\"signature\";s:0:\"\";}}s:11:\"creditnames\";a:5:{s:7:\"credit1\";a:2:{s:5:\"title\";s:6:\"积分\";s:7:\"enabled\";i:1;}s:7:\"credit2\";a:2:{s:5:\"title\";s:6:\"余额\";s:7:\"enabled\";i:1;}s:7:\"credit3\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit4\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit5\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}}s:15:\"creditbehaviors\";a:2:{s:8:\"activity\";s:7:\"credit1\";s:8:\"currency\";s:7:\"credit2\";}s:7:\"welcome\";s:0:\"\";s:7:\"default\";s:0:\"\";s:15:\"default_message\";s:0:\"\";s:7:\"payment\";a:4:{s:6:\"credit\";a:1:{s:6:\"switch\";b:0;}s:6:\"alipay\";a:4:{s:6:\"switch\";b:0;s:7:\"account\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:6:\"secret\";s:0:\"\";}s:6:\"wechat\";a:5:{s:6:\"switch\";b:0;s:7:\"account\";b:0;s:7:\"signkey\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"delivery\";a:1:{s:6:\"switch\";b:0;}}s:4:\"stat\";s:0:\"\";s:12:\"default_site\";s:1:\"1\";s:4:\"sync\";s:1:\"0\";s:8:\"recharge\";s:0:\"\";s:9:\"tplnotice\";s:0:\"\";s:10:\"grouplevel\";s:1:\"1\";s:8:\"mcplugin\";s:0:\"\";s:15:\"exchange_enable\";s:1:\"0\";s:11:\"coupon_type\";s:1:\"1\";s:7:\"menuset\";s:0:\"\";s:10:\"statistics\";s:0:\"\";s:11:\"bind_domain\";s:0:\"\";s:14:\"comment_status\";s:1:\"0\";s:13:\"reply_setting\";s:1:\"0\";s:14:\"default_module\";s:0:\"\";s:16:\"attachment_limit\";N;s:15:\"attachment_size\";N;s:11:\"sync_member\";s:1:\"0\";}'),('we7:user_modules:1','a:0:{}');

/*Table structure for table `ims_core_cron` */

DROP TABLE IF EXISTS `ims_core_cron`;

CREATE TABLE `ims_core_cron` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cloudid` int(10) unsigned NOT NULL DEFAULT '0',
  `module` varchar(50) NOT NULL,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `name` varchar(50) NOT NULL DEFAULT '',
  `filename` varchar(50) NOT NULL DEFAULT '',
  `lastruntime` int(10) unsigned NOT NULL DEFAULT '0',
  `nextruntime` int(10) unsigned NOT NULL DEFAULT '0',
  `weekday` tinyint(3) NOT NULL DEFAULT '-1',
  `day` tinyint(3) NOT NULL DEFAULT '-1',
  `hour` tinyint(3) NOT NULL DEFAULT '-1',
  `minute` varchar(255) NOT NULL DEFAULT '',
  `extra` varchar(5000) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `createtime` (`createtime`),
  KEY `nextruntime` (`nextruntime`),
  KEY `uniacid` (`uniacid`),
  KEY `cloudid` (`cloudid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_cron` */

/*Table structure for table `ims_core_cron_record` */

DROP TABLE IF EXISTS `ims_core_cron_record`;

CREATE TABLE `ims_core_cron_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `module` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `note` varchar(500) NOT NULL,
  `tag` varchar(5000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `tid` (`tid`),
  KEY `module` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_cron_record` */

/*Table structure for table `ims_core_job` */

DROP TABLE IF EXISTS `ims_core_job`;

CREATE TABLE `ims_core_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `payload` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `title` varchar(22) NOT NULL,
  `handled` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_job` */

/*Table structure for table `ims_core_menu` */

DROP TABLE IF EXISTS `ims_core_menu`;

CREATE TABLE `ims_core_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `append_title` varchar(30) NOT NULL,
  `append_url` varchar(255) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL DEFAULT 'url',
  `is_display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_system` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `permission_name` varchar(50) NOT NULL,
  `group_name` varchar(30) NOT NULL DEFAULT '',
  `icon` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_menu` */

/*Table structure for table `ims_core_menu_shortcut` */

DROP TABLE IF EXISTS `ims_core_menu_shortcut`;

CREATE TABLE `ims_core_menu_shortcut` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `modulename` varchar(100) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `position` varchar(100) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_menu_shortcut` */

/*Table structure for table `ims_core_paylog` */

DROP TABLE IF EXISTS `ims_core_paylog`;

CREATE TABLE `ims_core_paylog` (
  `plid` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL DEFAULT '',
  `uniacid` int(11) NOT NULL,
  `acid` int(10) NOT NULL,
  `openid` varchar(40) NOT NULL DEFAULT '',
  `uniontid` varchar(64) NOT NULL DEFAULT '',
  `tid` varchar(128) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `module` varchar(50) NOT NULL DEFAULT '',
  `tag` varchar(2000) NOT NULL DEFAULT '',
  `is_usecard` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` varchar(50) NOT NULL,
  `card_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `encrypt_code` varchar(100) NOT NULL,
  `is_wish` tinyint(1) NOT NULL,
  PRIMARY KEY (`plid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_tid` (`tid`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `uniontid` (`uniontid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_paylog` */

/*Table structure for table `ims_core_performance` */

DROP TABLE IF EXISTS `ims_core_performance`;

CREATE TABLE `ims_core_performance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `runtime` varchar(10) NOT NULL,
  `runurl` varchar(512) NOT NULL,
  `runsql` varchar(512) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_performance` */

/*Table structure for table `ims_core_queue` */

DROP TABLE IF EXISTS `ims_core_queue`;

CREATE TABLE `ims_core_queue` (
  `qid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `message` varchar(2000) NOT NULL DEFAULT '',
  `params` varchar(1000) NOT NULL DEFAULT '',
  `keyword` varchar(1000) NOT NULL DEFAULT '',
  `response` varchar(2000) NOT NULL DEFAULT '',
  `module` varchar(50) NOT NULL DEFAULT '',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`qid`),
  KEY `uniacid` (`acid`),
  KEY `module` (`module`),
  KEY `dateline` (`dateline`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_queue` */

/*Table structure for table `ims_core_refundlog` */

DROP TABLE IF EXISTS `ims_core_refundlog`;

CREATE TABLE `ims_core_refundlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `refund_uniontid` varchar(64) NOT NULL DEFAULT '',
  `reason` varchar(80) NOT NULL DEFAULT '',
  `uniontid` varchar(64) NOT NULL DEFAULT '',
  `fee` decimal(10,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `is_wish` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `refund_uniontid` (`refund_uniontid`),
  KEY `uniontid` (`uniontid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_refundlog` */

/*Table structure for table `ims_core_resource` */

DROP TABLE IF EXISTS `ims_core_resource`;

CREATE TABLE `ims_core_resource` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `media_id` varchar(100) NOT NULL,
  `trunk` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `acid` (`uniacid`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_resource` */

/*Table structure for table `ims_core_sendsms_log` */

DROP TABLE IF EXISTS `ims_core_sendsms_log`;

CREATE TABLE `ims_core_sendsms_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `mobile` varchar(11) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `result` varchar(255) NOT NULL DEFAULT '',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_sendsms_log` */

/*Table structure for table `ims_core_sessions` */

DROP TABLE IF EXISTS `ims_core_sessions`;

CREATE TABLE `ims_core_sessions` (
  `sid` char(32) NOT NULL DEFAULT '',
  `uniacid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `expiretime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_sessions` */

/*Table structure for table `ims_core_settings` */

DROP TABLE IF EXISTS `ims_core_settings`;

CREATE TABLE `ims_core_settings` (
  `key` varchar(200) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_core_settings` */

insert  into `ims_core_settings`(`key`,`value`) values ('authmode','i:1;'),('close','a:2:{s:6:\"status\";s:1:\"0\";s:6:\"reason\";s:0:\"\";}'),('copyright','a:1:{s:6:\"slides\";a:3:{i:0;s:58:\"https://img.alicdn.com/tps/TB1pfG4IFXXXXc6XXXXXXXXXXXX.jpg\";i:1;s:58:\"https://img.alicdn.com/tps/TB1sXGYIFXXXXc5XpXXXXXXXXXX.jpg\";i:2;s:58:\"https://img.alicdn.com/tps/TB1h9xxIFXXXXbKXXXXXXXXXXXX.jpg\";}}'),('register','a:4:{s:4:\"open\";i:1;s:6:\"verify\";i:0;s:4:\"code\";i:1;s:7:\"groupid\";i:1;}');

/*Table structure for table `ims_coupon_location` */

DROP TABLE IF EXISTS `ims_coupon_location`;

CREATE TABLE `ims_coupon_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `acid` int(10) unsigned NOT NULL DEFAULT '0',
  `sid` int(10) unsigned NOT NULL DEFAULT '0',
  `location_id` int(10) unsigned NOT NULL DEFAULT '0',
  `business_name` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `province` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `longitude` varchar(15) NOT NULL,
  `latitude` varchar(15) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `photo_list` varchar(10000) NOT NULL,
  `avg_price` int(10) unsigned NOT NULL DEFAULT '0',
  `open_time` varchar(50) NOT NULL,
  `recommend` varchar(255) NOT NULL,
  `special` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `offset_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`acid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_coupon_location` */

/*Table structure for table `ims_cover_reply` */

DROP TABLE IF EXISTS `ims_cover_reply`;

CREATE TABLE `ims_cover_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL DEFAULT '0',
  `rid` int(10) unsigned NOT NULL,
  `module` varchar(30) NOT NULL DEFAULT '',
  `do` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ims_cover_reply` */

insert  into `ims_cover_reply`(`id`,`uniacid`,`multiid`,`rid`,`module`,`do`,`title`,`description`,`thumb`,`url`) values (1,1,0,7,'mc','','进入个人中心','','','./index.php?c=mc&a=home&i=1'),(2,1,1,8,'site','','进入首页','','','./index.php?c=home&i=1&t=1');

/*Table structure for table `ims_custom_reply` */

DROP TABLE IF EXISTS `ims_custom_reply`;

CREATE TABLE `ims_custom_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `start1` int(10) NOT NULL DEFAULT '-1',
  `end1` int(10) NOT NULL DEFAULT '-1',
  `start2` int(10) NOT NULL DEFAULT '-1',
  `end2` int(10) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_custom_reply` */

/*Table structure for table `ims_images_reply` */

DROP TABLE IF EXISTS `ims_images_reply`;

CREATE TABLE `ims_images_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `mediaid` varchar(255) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_images_reply` */

/*Table structure for table `ims_job` */

DROP TABLE IF EXISTS `ims_job`;

CREATE TABLE `ims_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `payload` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `title` varchar(22) NOT NULL,
  `handled` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_job` */

/*Table structure for table `ims_mc_cash_record` */

DROP TABLE IF EXISTS `ims_mc_cash_record`;

CREATE TABLE `ims_mc_cash_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `clerk_id` int(10) unsigned NOT NULL DEFAULT '0',
  `store_id` int(10) unsigned NOT NULL DEFAULT '0',
  `clerk_type` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `final_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit1` int(10) unsigned NOT NULL DEFAULT '0',
  `credit1_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit2` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `cash` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `return_cash` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `final_cash` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `remark` varchar(255) NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `trade_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_cash_record` */

/*Table structure for table `ims_mc_chats_record` */

DROP TABLE IF EXISTS `ims_mc_chats_record`;

CREATE TABLE `ims_mc_chats_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `openid` varchar(32) NOT NULL,
  `msgtype` varchar(15) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`acid`),
  KEY `openid` (`openid`),
  KEY `createtime` (`createtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_chats_record` */

/*Table structure for table `ims_mc_credits_recharge` */

DROP TABLE IF EXISTS `ims_mc_credits_recharge`;

CREATE TABLE `ims_mc_credits_recharge` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `tid` varchar(64) NOT NULL,
  `transid` varchar(30) NOT NULL,
  `fee` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL DEFAULT 'credit',
  `tag` varchar(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL,
  `backtype` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid_uid` (`uid`),
  KEY `idx_tid` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_credits_recharge` */

/*Table structure for table `ims_mc_credits_record` */

DROP TABLE IF EXISTS `ims_mc_credits_record`;

CREATE TABLE `ims_mc_credits_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `uniacid` int(11) NOT NULL,
  `credittype` varchar(10) NOT NULL DEFAULT '',
  `num` decimal(10,2) NOT NULL DEFAULT '0.00',
  `operator` int(10) unsigned NOT NULL,
  `module` varchar(30) NOT NULL,
  `clerk_id` int(10) unsigned NOT NULL DEFAULT '0',
  `store_id` int(10) unsigned NOT NULL DEFAULT '0',
  `clerk_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `createtime` int(10) unsigned NOT NULL,
  `remark` varchar(200) NOT NULL DEFAULT '',
  `real_uniacid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_credits_record` */

/*Table structure for table `ims_mc_fans_groups` */

DROP TABLE IF EXISTS `ims_mc_fans_groups`;

CREATE TABLE `ims_mc_fans_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `acid` int(10) unsigned NOT NULL DEFAULT '0',
  `groups` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_fans_groups` */

/*Table structure for table `ims_mc_fans_tag` */

DROP TABLE IF EXISTS `ims_mc_fans_tag`;

CREATE TABLE `ims_mc_fans_tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `fanid` int(11) NOT NULL DEFAULT '0',
  `openid` varchar(50) NOT NULL,
  `subscribe` int(11) DEFAULT '0',
  `nickname` varchar(100) DEFAULT NULL,
  `sex` int(11) DEFAULT '0',
  `language` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `headimgurl` varchar(150) DEFAULT NULL,
  `subscribe_time` int(11) NOT NULL DEFAULT '0',
  `unionid` varchar(100) DEFAULT NULL,
  `remark` varchar(250) DEFAULT NULL,
  `groupid` varchar(100) DEFAULT NULL,
  `tagid_list` varchar(250) DEFAULT NULL,
  `subscribe_scene` varchar(100) DEFAULT NULL,
  `qr_scene_str` varchar(250) DEFAULT NULL,
  `qr_scene` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fanid` (`fanid`),
  KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_fans_tag` */

/*Table structure for table `ims_mc_fans_tag_mapping` */

DROP TABLE IF EXISTS `ims_mc_fans_tag_mapping`;

CREATE TABLE `ims_mc_fans_tag_mapping` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fanid` int(11) unsigned NOT NULL,
  `tagid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mapping` (`tagid`),
  KEY `fanid_index` (`fanid`),
  KEY `tagid_index` (`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_fans_tag_mapping` */

/*Table structure for table `ims_mc_groups` */

DROP TABLE IF EXISTS `ims_mc_groups`;

CREATE TABLE `ims_mc_groups` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(20) NOT NULL DEFAULT '',
  `credit` int(10) unsigned NOT NULL DEFAULT '0',
  `isdefault` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_groups` */

insert  into `ims_mc_groups`(`groupid`,`uniacid`,`title`,`credit`,`isdefault`) values (1,1,'默认会员组',0,1);

/*Table structure for table `ims_mc_handsel` */

DROP TABLE IF EXISTS `ims_mc_handsel`;

CREATE TABLE `ims_mc_handsel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `touid` int(10) unsigned NOT NULL,
  `fromuid` varchar(32) NOT NULL,
  `module` varchar(30) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `credit_value` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`touid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_handsel` */

/*Table structure for table `ims_mc_mapping_fans` */

DROP TABLE IF EXISTS `ims_mc_mapping_fans`;

CREATE TABLE `ims_mc_mapping_fans` (
  `fanid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acid` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `openid` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `groupid` varchar(60) NOT NULL,
  `salt` char(8) NOT NULL DEFAULT '',
  `follow` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `followtime` int(10) unsigned NOT NULL,
  `unfollowtime` int(10) unsigned NOT NULL,
  `tag` varchar(1000) NOT NULL DEFAULT '',
  `updatetime` int(10) unsigned DEFAULT '0',
  `unionid` varchar(64) NOT NULL,
  PRIMARY KEY (`fanid`),
  UNIQUE KEY `openid_2` (`openid`),
  KEY `acid` (`acid`),
  KEY `uniacid` (`uniacid`),
  KEY `nickname` (`nickname`),
  KEY `updatetime` (`updatetime`),
  KEY `uid` (`uid`),
  KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_mapping_fans` */

/*Table structure for table `ims_mc_mapping_ucenter` */

DROP TABLE IF EXISTS `ims_mc_mapping_ucenter`;

CREATE TABLE `ims_mc_mapping_ucenter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `centeruid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_mapping_ucenter` */

/*Table structure for table `ims_mc_mass_record` */

DROP TABLE IF EXISTS `ims_mc_mass_record`;

CREATE TABLE `ims_mc_mass_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `acid` int(10) unsigned NOT NULL DEFAULT '0',
  `groupname` varchar(50) NOT NULL,
  `fansnum` int(10) unsigned NOT NULL,
  `msgtype` varchar(10) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `group` int(10) NOT NULL DEFAULT '-1',
  `attach_id` int(10) unsigned NOT NULL DEFAULT '0',
  `media_id` varchar(100) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cron_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sendtime` int(10) unsigned NOT NULL DEFAULT '0',
  `finalsendtime` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `msg_id` varchar(50) NOT NULL,
  `msg_data_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`acid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_mass_record` */

/*Table structure for table `ims_mc_member_address` */

DROP TABLE IF EXISTS `ims_mc_member_address`;

CREATE TABLE `ims_mc_member_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(50) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `province` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `address` varchar(512) NOT NULL,
  `isdefault` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uinacid` (`uniacid`),
  KEY `idx_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_member_address` */

/*Table structure for table `ims_mc_member_fields` */

DROP TABLE IF EXISTS `ims_mc_member_fields`;

CREATE TABLE `ims_mc_member_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `displayorder` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_fieldid` (`fieldid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_member_fields` */

/*Table structure for table `ims_mc_member_property` */

DROP TABLE IF EXISTS `ims_mc_member_property`;

CREATE TABLE `ims_mc_member_property` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `property` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_member_property` */

/*Table structure for table `ims_mc_members` */

DROP TABLE IF EXISTS `ims_mc_members`;

CREATE TABLE `ims_mc_members` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `mobile` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `groupid` int(11) NOT NULL DEFAULT '0',
  `credit1` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit2` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit3` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit4` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit5` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `credit6` decimal(10,2) NOT NULL DEFAULT '0.00',
  `createtime` int(10) unsigned NOT NULL,
  `realname` varchar(10) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `vip` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `birthyear` smallint(6) unsigned NOT NULL DEFAULT '0',
  `birthmonth` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `birthday` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `constellation` varchar(10) NOT NULL DEFAULT '',
  `zodiac` varchar(5) NOT NULL DEFAULT '',
  `telephone` varchar(15) NOT NULL DEFAULT '',
  `idcard` varchar(30) NOT NULL DEFAULT '',
  `studentid` varchar(50) NOT NULL DEFAULT '',
  `grade` varchar(10) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(10) NOT NULL DEFAULT '',
  `nationality` varchar(30) NOT NULL DEFAULT '',
  `resideprovince` varchar(30) NOT NULL DEFAULT '',
  `residecity` varchar(30) NOT NULL DEFAULT '',
  `residedist` varchar(30) NOT NULL DEFAULT '',
  `graduateschool` varchar(50) NOT NULL DEFAULT '',
  `company` varchar(50) NOT NULL DEFAULT '',
  `education` varchar(10) NOT NULL DEFAULT '',
  `occupation` varchar(30) NOT NULL DEFAULT '',
  `position` varchar(30) NOT NULL DEFAULT '',
  `revenue` varchar(10) NOT NULL DEFAULT '',
  `affectivestatus` varchar(30) NOT NULL DEFAULT '',
  `lookingfor` varchar(255) NOT NULL DEFAULT '',
  `bloodtype` varchar(5) NOT NULL DEFAULT '',
  `height` varchar(5) NOT NULL DEFAULT '',
  `weight` varchar(5) NOT NULL DEFAULT '',
  `alipay` varchar(30) NOT NULL DEFAULT '',
  `msn` varchar(30) NOT NULL DEFAULT '',
  `taobao` varchar(30) NOT NULL DEFAULT '',
  `site` varchar(30) NOT NULL DEFAULT '',
  `bio` text NOT NULL,
  `interest` text NOT NULL,
  `pay_password` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `groupid` (`groupid`),
  KEY `uniacid` (`uniacid`),
  KEY `email` (`email`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_members` */

/*Table structure for table `ims_mc_oauth_fans` */

DROP TABLE IF EXISTS `ims_mc_oauth_fans`;

CREATE TABLE `ims_mc_oauth_fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oauth_openid` varchar(50) NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_oauthopenid_acid` (`acid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mc_oauth_fans` */

/*Table structure for table `ims_menu_event` */

DROP TABLE IF EXISTS `ims_menu_event`;

CREATE TABLE `ims_menu_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `picmd5` varchar(32) NOT NULL,
  `openid` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `picmd5` (`picmd5`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_menu_event` */

/*Table structure for table `ims_message_notice_log` */

DROP TABLE IF EXISTS `ims_message_notice_log`;

CREATE TABLE `ims_message_notice_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL DEFAULT '',
  `is_read` tinyint(3) NOT NULL DEFAULT '1',
  `uid` int(11) NOT NULL DEFAULT '0',
  `sign` varchar(22) NOT NULL DEFAULT '',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_message_notice_log` */

/*Table structure for table `ims_mobilenumber` */

DROP TABLE IF EXISTS `ims_mobilenumber`;

CREATE TABLE `ims_mobilenumber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(10) NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_mobilenumber` */

/*Table structure for table `ims_modules` */

DROP TABLE IF EXISTS `ims_modules`;

CREATE TABLE `ims_modules` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL,
  `version` varchar(15) NOT NULL DEFAULT '',
  `ability` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `settings` tinyint(1) NOT NULL DEFAULT '0',
  `subscribes` varchar(500) NOT NULL DEFAULT '',
  `handles` varchar(500) NOT NULL DEFAULT '',
  `isrulefields` tinyint(1) NOT NULL DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `target` int(10) unsigned NOT NULL DEFAULT '0',
  `iscard` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `permissions` varchar(5000) NOT NULL,
  `title_initial` varchar(1) NOT NULL DEFAULT '',
  `wxapp_support` tinyint(1) NOT NULL DEFAULT '1',
  `welcome_support` int(2) NOT NULL DEFAULT '1',
  `oauth_type` tinyint(1) NOT NULL DEFAULT '1',
  `webapp_support` tinyint(1) NOT NULL DEFAULT '1',
  `phoneapp_support` tinyint(1) NOT NULL,
  `account_support` tinyint(1) NOT NULL,
  `xzapp_support` tinyint(1) NOT NULL,
  `aliapp_support` tinyint(1) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `baiduapp_support` tinyint(1) NOT NULL,
  `toutiaoapp_support` tinyint(1) NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules` */

insert  into `ims_modules`(`mid`,`name`,`type`,`title`,`version`,`ability`,`description`,`author`,`url`,`settings`,`subscribes`,`handles`,`isrulefields`,`issystem`,`target`,`iscard`,`permissions`,`title_initial`,`wxapp_support`,`welcome_support`,`oauth_type`,`webapp_support`,`phoneapp_support`,`account_support`,`xzapp_support`,`aliapp_support`,`logo`,`baiduapp_support`,`toutiaoapp_support`) values (1,'basic','system','基本文字回复','1.0','和您进行简单对话','一问一答得简单对话. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的回复内容.','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(2,'news','system','基本混合图文回复','1.0','为你提供生动的图文资讯','一问一答得简单对话, 但是回复内容包括图片文字等更生动的媒体内容. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的图文回复内容.','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(3,'music','system','基本音乐回复','1.0','提供语音、音乐等音频类回复','在回复规则中可选择具有语音、音乐等音频类的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝，实现一问一答得简单对话。','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(4,'userapi','system','自定义接口回复','1.1','更方便的第三方接口设置','自定义接口又称第三方接口，可以让开发者更方便的接入微擎系统，高效的与微信公众平台进行对接整合。','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(5,'recharge','system','会员中心充值模块','1.0','提供会员充值功能','','WeEngine Team','http://www.we7.cc/',0,'','',0,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(6,'custom','system','多客服转接','1.0.0','用来接入腾讯的多客服系统','','WeEngine Team','http://bbs.we7.cc',0,'a:0:{}','a:6:{i:0;s:5:\"image\";i:1;s:5:\"voice\";i:2;s:5:\"video\";i:3;s:8:\"location\";i:4;s:4:\"link\";i:5;s:4:\"text\";}',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(7,'images','system','基本图片回复','1.0','提供图片回复','在回复规则中可选择具有图片的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝图片。','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(8,'video','system','基本视频回复','1.0','提供图片回复','在回复规则中可选择具有视频的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝视频。','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(9,'voice','system','基本语音回复','1.0','提供语音回复','在回复规则中可选择具有语音的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝语音。','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(10,'chats','system','发送客服消息','1.0','公众号可以在粉丝最后发送消息的48小时内无限制发送消息','','WeEngine Team','http://www.we7.cc/',0,'','',0,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(11,'wxcard','system','微信卡券回复','1.0','微信卡券回复','微信卡券回复','WeEngine Team','http://www.we7.cc/',0,'','',1,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0),(12,'store','business','站内商城','1.0','站内商城','站内商城','WeEngine Team','http://www.we7.cc/',0,'','',0,1,0,0,'','',1,1,1,1,0,2,0,0,'',0,0);

/*Table structure for table `ims_modules_bindings` */

DROP TABLE IF EXISTS `ims_modules_bindings`;

CREATE TABLE `ims_modules_bindings` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(100) NOT NULL DEFAULT '',
  `entry` varchar(30) NOT NULL DEFAULT '',
  `call` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL,
  `do` varchar(200) NOT NULL DEFAULT '',
  `state` varchar(200) NOT NULL,
  `direct` int(11) NOT NULL DEFAULT '0',
  `url` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL DEFAULT 'fa fa-puzzle-piece',
  `displayorder` tinyint(255) unsigned NOT NULL DEFAULT '0',
  `multilevel` tinyint(1) NOT NULL,
  `parent` varchar(50) NOT NULL,
  PRIMARY KEY (`eid`),
  KEY `idx_module` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_bindings` */

/*Table structure for table `ims_modules_cloud` */

DROP TABLE IF EXISTS `ims_modules_cloud`;

CREATE TABLE `ims_modules_cloud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_initial` varchar(1) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `version` varchar(10) NOT NULL,
  `install_status` tinyint(4) NOT NULL,
  `account_support` tinyint(4) NOT NULL,
  `wxapp_support` tinyint(4) NOT NULL,
  `webapp_support` tinyint(4) NOT NULL,
  `phoneapp_support` tinyint(4) NOT NULL,
  `welcome_support` tinyint(4) NOT NULL,
  `main_module_name` varchar(50) NOT NULL,
  `main_module_logo` varchar(100) NOT NULL,
  `has_new_version` tinyint(1) NOT NULL,
  `has_new_branch` tinyint(1) NOT NULL,
  `is_ban` tinyint(4) NOT NULL,
  `lastupdatetime` int(11) NOT NULL,
  `xzapp_support` tinyint(1) NOT NULL,
  `cloud_id` int(11) NOT NULL,
  `aliapp_support` tinyint(1) NOT NULL,
  `baiduapp_support` tinyint(1) NOT NULL,
  `toutiaoapp_support` tinyint(1) NOT NULL,
  `buytime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `lastupdatetime` (`lastupdatetime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_cloud` */

/*Table structure for table `ims_modules_ignore` */

DROP TABLE IF EXISTS `ims_modules_ignore`;

CREATE TABLE `ims_modules_ignore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `version` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_ignore` */

/*Table structure for table `ims_modules_plugin` */

DROP TABLE IF EXISTS `ims_modules_plugin`;

CREATE TABLE `ims_modules_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  `main_module` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `main_module` (`main_module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_plugin` */

/*Table structure for table `ims_modules_plugin_rank` */

DROP TABLE IF EXISTS `ims_modules_plugin_rank`;

CREATE TABLE `ims_modules_plugin_rank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `rank` int(10) NOT NULL,
  `plugin_name` varchar(200) NOT NULL,
  `main_module_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_plugin_rank` */

/*Table structure for table `ims_modules_rank` */

DROP TABLE IF EXISTS `ims_modules_rank`;

CREATE TABLE `ims_modules_rank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) NOT NULL,
  `uid` int(10) NOT NULL,
  `rank` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `module_name` (`module_name`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_rank` */

/*Table structure for table `ims_modules_recycle` */

DROP TABLE IF EXISTS `ims_modules_recycle`;

CREATE TABLE `ims_modules_recycle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `account_support` tinyint(1) NOT NULL,
  `wxapp_support` tinyint(1) NOT NULL,
  `welcome_support` tinyint(1) NOT NULL,
  `webapp_support` tinyint(1) NOT NULL,
  `phoneapp_support` tinyint(1) NOT NULL,
  `xzapp_support` tinyint(1) NOT NULL,
  `aliapp_support` tinyint(1) NOT NULL,
  `baiduapp_support` tinyint(1) NOT NULL,
  `toutiaoapp_support` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_modules_recycle` */

/*Table structure for table `ims_music_reply` */

DROP TABLE IF EXISTS `ims_music_reply`;

CREATE TABLE `ims_music_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `hqurl` varchar(300) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_music_reply` */

/*Table structure for table `ims_news_reply` */

DROP TABLE IF EXISTS `ims_news_reply`;

CREATE TABLE `ims_news_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `parent_id` int(10) NOT NULL DEFAULT '-1',
  `title` varchar(50) NOT NULL,
  `author` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `content` mediumtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `incontent` tinyint(1) NOT NULL DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `media_id` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_news_reply` */

/*Table structure for table `ims_phoneapp_versions` */

DROP TABLE IF EXISTS `ims_phoneapp_versions`;

CREATE TABLE `ims_phoneapp_versions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `version` varchar(20) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `modules` text,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `version` (`version`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_phoneapp_versions` */

/*Table structure for table `ims_profile_fields` */

DROP TABLE IF EXISTS `ims_profile_fields`;

CREATE TABLE `ims_profile_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `displayorder` smallint(6) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `unchangeable` tinyint(1) NOT NULL DEFAULT '0',
  `showinregister` tinyint(1) NOT NULL DEFAULT '0',
  `field_length` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `ims_profile_fields` */

insert  into `ims_profile_fields`(`id`,`field`,`available`,`title`,`description`,`displayorder`,`required`,`unchangeable`,`showinregister`,`field_length`) values (1,'realname',1,'真实姓名','',0,1,1,1,0),(2,'nickname',1,'昵称','',1,1,0,1,0),(3,'avatar',1,'头像','',1,0,0,0,0),(4,'qq',1,'QQ号','',0,0,0,1,0),(5,'mobile',1,'手机号码','',0,0,0,0,0),(6,'vip',1,'VIP级别','',0,0,0,0,0),(7,'gender',1,'性别','',0,0,0,0,0),(8,'birthyear',1,'出生生日','',0,0,0,0,0),(9,'constellation',1,'星座','',0,0,0,0,0),(10,'zodiac',1,'生肖','',0,0,0,0,0),(11,'telephone',1,'固定电话','',0,0,0,0,0),(12,'idcard',1,'证件号码','',0,0,0,0,0),(13,'studentid',1,'学号','',0,0,0,0,0),(14,'grade',1,'班级','',0,0,0,0,0),(15,'address',1,'邮寄地址','',0,0,0,0,0),(16,'zipcode',1,'邮编','',0,0,0,0,0),(17,'nationality',1,'国籍','',0,0,0,0,0),(18,'resideprovince',1,'居住地址','',0,0,0,0,0),(19,'graduateschool',1,'毕业学校','',0,0,0,0,0),(20,'company',1,'公司','',0,0,0,0,0),(21,'education',1,'学历','',0,0,0,0,0),(22,'occupation',1,'职业','',0,0,0,0,0),(23,'position',1,'职位','',0,0,0,0,0),(24,'revenue',1,'年收入','',0,0,0,0,0),(25,'affectivestatus',1,'情感状态','',0,0,0,0,0),(26,'lookingfor',1,' 交友目的','',0,0,0,0,0),(27,'bloodtype',1,'血型','',0,0,0,0,0),(28,'height',1,'身高','',0,0,0,0,0),(29,'weight',1,'体重','',0,0,0,0,0),(30,'alipay',1,'支付宝帐号','',0,0,0,0,0),(31,'msn',1,'MSN','',0,0,0,0,0),(32,'email',1,'电子邮箱','',0,0,0,0,0),(33,'taobao',1,'阿里旺旺','',0,0,0,0,0),(34,'site',1,'主页','',0,0,0,0,0),(35,'bio',1,'自我介绍','',0,0,0,0,0),(36,'interest',1,'兴趣爱好','',0,0,0,0,0);

/*Table structure for table `ims_qrcode` */

DROP TABLE IF EXISTS `ims_qrcode`;

CREATE TABLE `ims_qrcode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'scene',
  `extra` int(10) unsigned NOT NULL DEFAULT '0',
  `qrcid` bigint(20) NOT NULL DEFAULT '0',
  `scene_str` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `keyword` varchar(100) NOT NULL,
  `model` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ticket` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(256) NOT NULL,
  `expire` int(10) unsigned NOT NULL DEFAULT '0',
  `subnum` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_qrcid` (`qrcid`),
  KEY `uniacid` (`uniacid`),
  KEY `ticket` (`ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_qrcode` */

/*Table structure for table `ims_qrcode_stat` */

DROP TABLE IF EXISTS `ims_qrcode_stat`;

CREATE TABLE `ims_qrcode_stat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `acid` int(10) unsigned NOT NULL,
  `qid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `qrcid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `scene_str` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_qrcode_stat` */

/*Table structure for table `ims_rule` */

DROP TABLE IF EXISTS `ims_rule`;

CREATE TABLE `ims_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `module` varchar(50) NOT NULL,
  `displayorder` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `containtype` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `ims_rule` */

insert  into `ims_rule`(`id`,`uniacid`,`name`,`module`,`displayorder`,`status`,`containtype`) values (1,0,'城市天气','userapi',255,1,''),(2,0,'百度百科','userapi',255,1,''),(3,0,'即时翻译','userapi',255,1,''),(4,0,'今日老黄历','userapi',255,1,''),(5,0,'看新闻','userapi',255,1,''),(6,0,'快递查询','userapi',255,1,''),(7,1,'个人中心入口设置','cover',0,1,''),(8,1,'微擎团队入口设置','cover',0,1,'');

/*Table structure for table `ims_rule_keyword` */

DROP TABLE IF EXISTS `ims_rule_keyword`;

CREATE TABLE `ims_rule_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `module` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_content` (`content`),
  KEY `rid` (`rid`),
  KEY `idx_rid` (`rid`),
  KEY `idx_uniacid_type_content` (`uniacid`,`type`,`content`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `ims_rule_keyword` */

insert  into `ims_rule_keyword`(`id`,`rid`,`uniacid`,`module`,`content`,`type`,`displayorder`,`status`) values (1,1,0,'userapi','^.+天气$',3,255,1),(2,2,0,'userapi','^百科.+$',3,255,1),(3,2,0,'userapi','^定义.+$',3,255,1),(4,3,0,'userapi','^@.+$',3,255,1),(5,4,0,'userapi','日历',1,255,1),(6,4,0,'userapi','万年历',1,255,1),(7,4,0,'userapi','黄历',1,255,1),(8,4,0,'userapi','几号',1,255,1),(9,5,0,'userapi','新闻',1,255,1),(10,6,0,'userapi','^(申通|圆通|中通|汇通|韵达|顺丰|EMS) *[a-z0-9]{1,}$',3,255,1),(11,7,1,'cover','个人中心',1,0,1),(12,8,1,'cover','首页',1,0,1);

/*Table structure for table `ims_site_article` */

DROP TABLE IF EXISTS `ims_site_article`;

CREATE TABLE `ims_site_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `iscommend` tinyint(1) NOT NULL DEFAULT '0',
  `ishot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pcate` int(10) unsigned NOT NULL DEFAULT '0',
  `ccate` int(10) unsigned NOT NULL DEFAULT '0',
  `template` varchar(300) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `incontent` tinyint(1) NOT NULL DEFAULT '0',
  `source` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL,
  `displayorder` int(10) unsigned NOT NULL DEFAULT '0',
  `linkurl` varchar(500) NOT NULL DEFAULT '',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `edittime` int(10) NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT '',
  `credit` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_iscommend` (`iscommend`),
  KEY `idx_ishot` (`ishot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_article` */

/*Table structure for table `ims_site_article_comment` */

DROP TABLE IF EXISTS `ims_site_article_comment`;

CREATE TABLE `ims_site_article_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `articleid` int(10) NOT NULL,
  `parentid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `content` text,
  `is_read` tinyint(1) NOT NULL,
  `iscomment` tinyint(1) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `articleid` (`articleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_article_comment` */

/*Table structure for table `ims_site_category` */

DROP TABLE IF EXISTS `ims_site_category`;

CREATE TABLE `ims_site_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `nid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `icon` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `styleid` int(10) unsigned NOT NULL,
  `linkurl` varchar(500) NOT NULL DEFAULT '',
  `ishomepage` tinyint(1) NOT NULL DEFAULT '0',
  `icontype` tinyint(1) unsigned NOT NULL,
  `css` varchar(500) NOT NULL,
  `multiid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_category` */

/*Table structure for table `ims_site_multi` */

DROP TABLE IF EXISTS `ims_site_multi`;

CREATE TABLE `ims_site_multi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `site_info` text NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `bindhost` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `bindhost` (`bindhost`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_multi` */

insert  into `ims_site_multi`(`id`,`uniacid`,`title`,`styleid`,`site_info`,`status`,`bindhost`) values (1,1,'微擎团队',1,'',1,'');

/*Table structure for table `ims_site_nav` */

DROP TABLE IF EXISTS `ims_site_nav`;

CREATE TABLE `ims_site_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `section` tinyint(4) NOT NULL DEFAULT '0',
  `module` varchar(50) NOT NULL DEFAULT '',
  `displayorder` smallint(5) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL DEFAULT '',
  `position` tinyint(4) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(500) NOT NULL DEFAULT '',
  `css` varchar(1000) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `categoryid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_nav` */

/*Table structure for table `ims_site_page` */

DROP TABLE IF EXISTS `ims_site_page`;

CREATE TABLE `ims_site_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `multiid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `params` longtext NOT NULL,
  `html` longtext NOT NULL,
  `multipage` longtext NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `goodnum` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_page` */

/*Table structure for table `ims_site_slide` */

DROP TABLE IF EXISTS `ims_site_slide`;

CREATE TABLE `ims_site_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `displayorder` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_slide` */

/*Table structure for table `ims_site_store_cash_log` */

DROP TABLE IF EXISTS `ims_site_store_cash_log`;

CREATE TABLE `ims_site_store_cash_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `founder_uid` int(10) NOT NULL,
  `number` char(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `founder_uid` (`founder_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_cash_log` */

/*Table structure for table `ims_site_store_cash_order` */

DROP TABLE IF EXISTS `ims_site_store_cash_order`;

CREATE TABLE `ims_site_store_cash_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` char(30) NOT NULL,
  `founder_uid` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `order_amount` decimal(10,2) NOT NULL,
  `cash_log_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `founder_uid` (`founder_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_cash_order` */

/*Table structure for table `ims_site_store_create_account` */

DROP TABLE IF EXISTS `ims_site_store_create_account`;

CREATE TABLE `ims_site_store_create_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `endtime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_create_account` */

/*Table structure for table `ims_site_store_goods` */

DROP TABLE IF EXISTS `ims_site_store_goods`;

CREATE TABLE `ims_site_store_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `title` varchar(100) NOT NULL,
  `module` varchar(50) NOT NULL,
  `account_num` int(10) NOT NULL,
  `wxapp_num` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `slide` varchar(1000) NOT NULL,
  `category_id` int(10) NOT NULL,
  `title_initial` varchar(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createtime` int(10) NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `module_group` int(10) NOT NULL DEFAULT '0',
  `api_num` int(10) NOT NULL DEFAULT '0',
  `user_group_price` varchar(1000) DEFAULT NULL,
  `user_group` int(10) NOT NULL,
  `account_group` int(10) NOT NULL,
  `is_wish` tinyint(1) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `platform_num` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `module` (`module`),
  KEY `category_id` (`category_id`),
  KEY `price` (`price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_goods` */

/*Table structure for table `ims_site_store_goods_cloud` */

DROP TABLE IF EXISTS `ims_site_store_goods_cloud`;

CREATE TABLE `ims_site_store_goods_cloud` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cloud_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `wish_branch` int(10) NOT NULL,
  `is_edited` tinyint(1) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL,
  `branchs` varchar(6000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cloud_id` (`cloud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_goods_cloud` */

/*Table structure for table `ims_site_store_order` */

DROP TABLE IF EXISTS `ims_site_store_order`;

CREATE TABLE `ims_site_store_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` varchar(28) NOT NULL,
  `goodsid` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `buyerid` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `changeprice` tinyint(1) NOT NULL DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `endtime` int(15) NOT NULL,
  `wxapp` int(15) NOT NULL DEFAULT '0',
  `is_wish` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `goodid` (`goodsid`),
  KEY `buyerid` (`buyerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_store_order` */

/*Table structure for table `ims_site_styles` */

DROP TABLE IF EXISTS `ims_site_styles`;

CREATE TABLE `ims_site_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `templateid` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_styles` */

insert  into `ims_site_styles`(`id`,`uniacid`,`templateid`,`name`) values (1,1,1,'微站默认模板_gC5C');

/*Table structure for table `ims_site_styles_vars` */

DROP TABLE IF EXISTS `ims_site_styles_vars`;

CREATE TABLE `ims_site_styles_vars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `templateid` int(10) unsigned NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `variable` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_styles_vars` */

/*Table structure for table `ims_site_templates` */

DROP TABLE IF EXISTS `ims_site_templates`;

CREATE TABLE `ims_site_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `title` varchar(30) NOT NULL,
  `version` varchar(64) NOT NULL,
  `description` varchar(500) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `sections` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_site_templates` */

insert  into `ims_site_templates`(`id`,`name`,`title`,`version`,`description`,`author`,`url`,`type`,`sections`) values (1,'default','微站默认模板','','由微擎提供默认微站模板套系','微擎团队','http://we7.cc','1',0);

/*Table structure for table `ims_stat_fans` */

DROP TABLE IF EXISTS `ims_stat_fans`;

CREATE TABLE `ims_stat_fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `new` int(10) unsigned NOT NULL,
  `cancel` int(10) unsigned NOT NULL,
  `cumulate` int(10) NOT NULL,
  `date` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_fans` */

/*Table structure for table `ims_stat_keyword` */

DROP TABLE IF EXISTS `ims_stat_keyword`;

CREATE TABLE `ims_stat_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` varchar(10) NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `hit` int(10) unsigned NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_keyword` */

/*Table structure for table `ims_stat_msg_history` */

DROP TABLE IF EXISTS `ims_stat_msg_history`;

CREATE TABLE `ims_stat_msg_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT '',
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_msg_history` */

/*Table structure for table `ims_stat_rule` */

DROP TABLE IF EXISTS `ims_stat_rule`;

CREATE TABLE `ims_stat_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `hit` int(10) unsigned NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_rule` */

/*Table structure for table `ims_stat_visit` */

DROP TABLE IF EXISTS `ims_stat_visit`;

CREATE TABLE `ims_stat_visit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL DEFAULT '0',
  `module` varchar(100) NOT NULL DEFAULT '',
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL,
  `ip_count` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `module` (`module`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_visit` */

insert  into `ims_stat_visit`(`id`,`uniacid`,`module`,`count`,`date`,`type`,`ip_count`) values (1,0,'',11,20191014,'web',1);

/*Table structure for table `ims_stat_visit_ip` */

DROP TABLE IF EXISTS `ims_stat_visit_ip`;

CREATE TABLE `ims_stat_visit_ip` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` bigint(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `module` varchar(100) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_date_module_uniacid` (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_stat_visit_ip` */

insert  into `ims_stat_visit_ip`(`id`,`ip`,`uniacid`,`type`,`module`,`date`) values (1,2130706433,0,'web','',20191014);

/*Table structure for table `ims_system_stat_visit` */

DROP TABLE IF EXISTS `ims_system_stat_visit`;

CREATE TABLE `ims_system_stat_visit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `modulename` varchar(100) NOT NULL,
  `uid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_system_stat_visit` */

/*Table structure for table `ims_uni_account` */

DROP TABLE IF EXISTS `ims_uni_account`;

CREATE TABLE `ims_uni_account` (
  `uniacid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `default_acid` int(10) unsigned NOT NULL DEFAULT '0',
  `rank` int(10) DEFAULT '0',
  `title_initial` varchar(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account` */

insert  into `ims_uni_account`(`uniacid`,`groupid`,`name`,`description`,`default_acid`,`rank`,`title_initial`) values (1,-1,'微擎团队','一个朝气蓬勃的团队',1,0,'W');

/*Table structure for table `ims_uni_account_group` */

DROP TABLE IF EXISTS `ims_uni_account_group`;

CREATE TABLE `ims_uni_account_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account_group` */

/*Table structure for table `ims_uni_account_menus` */

DROP TABLE IF EXISTS `ims_uni_account_menus`;

CREATE TABLE `ims_uni_account_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `menuid` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `title` varchar(30) NOT NULL,
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` int(10) NOT NULL DEFAULT '-1',
  `client_platform_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `area` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `isdeleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `menuid` (`menuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account_menus` */

/*Table structure for table `ims_uni_account_modules` */

DROP TABLE IF EXISTS `ims_uni_account_modules`;

CREATE TABLE `ims_uni_account_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL,
  `settings` text NOT NULL,
  `shortcut` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `displayorder` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_module` (`module`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account_modules` */

/*Table structure for table `ims_uni_account_modules_shortcut` */

DROP TABLE IF EXISTS `ims_uni_account_modules_shortcut`;

CREATE TABLE `ims_uni_account_modules_shortcut` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(250) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `version_id` int(10) NOT NULL,
  `module_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account_modules_shortcut` */

/*Table structure for table `ims_uni_account_users` */

DROP TABLE IF EXISTS `ims_uni_account_users`;

CREATE TABLE `ims_uni_account_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `role` varchar(255) NOT NULL,
  `rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_memberid` (`uid`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_account_users` */

/*Table structure for table `ims_uni_group` */

DROP TABLE IF EXISTS `ims_uni_group`;

CREATE TABLE `ims_uni_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `modules` text NOT NULL,
  `templates` varchar(5000) NOT NULL DEFAULT '',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_group` */

insert  into `ims_uni_group`(`id`,`owner_uid`,`name`,`modules`,`templates`,`uniacid`,`uid`) values (1,0,'体验套餐服务','N;','N;',0,0);

/*Table structure for table `ims_uni_link_uniacid` */

DROP TABLE IF EXISTS `ims_uni_link_uniacid`;

CREATE TABLE `ims_uni_link_uniacid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `link_uniacid` int(10) NOT NULL,
  `version_id` int(10) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_link_uniacid` */

/*Table structure for table `ims_uni_modules` */

DROP TABLE IF EXISTS `ims_uni_modules`;

CREATE TABLE `ims_uni_modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_modules` */

/*Table structure for table `ims_uni_settings` */

DROP TABLE IF EXISTS `ims_uni_settings`;

CREATE TABLE `ims_uni_settings` (
  `uniacid` int(10) unsigned NOT NULL,
  `passport` varchar(200) NOT NULL DEFAULT '',
  `oauth` varchar(100) NOT NULL DEFAULT '',
  `jsauth_acid` int(10) unsigned NOT NULL,
  `uc` varchar(700) NOT NULL,
  `notify` varchar(2000) NOT NULL DEFAULT '',
  `creditnames` varchar(500) NOT NULL DEFAULT '',
  `creditbehaviors` varchar(500) NOT NULL DEFAULT '',
  `welcome` varchar(60) NOT NULL DEFAULT '',
  `default` varchar(60) NOT NULL DEFAULT '',
  `default_message` varchar(2000) NOT NULL DEFAULT '',
  `payment` text NOT NULL,
  `stat` varchar(300) NOT NULL,
  `default_site` int(10) unsigned DEFAULT '0',
  `sync` tinyint(3) unsigned NOT NULL,
  `recharge` varchar(500) NOT NULL,
  `tplnotice` varchar(2000) NOT NULL,
  `grouplevel` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `mcplugin` varchar(500) NOT NULL DEFAULT '',
  `exchange_enable` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `coupon_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `menuset` text NOT NULL,
  `statistics` varchar(100) NOT NULL DEFAULT '',
  `bind_domain` varchar(200) NOT NULL DEFAULT '',
  `comment_status` tinyint(1) NOT NULL,
  `reply_setting` tinyint(4) NOT NULL,
  `default_module` varchar(100) NOT NULL,
  `attachment_limit` int(11) DEFAULT NULL,
  `attachment_size` varchar(20) DEFAULT NULL,
  `sync_member` tinyint(1) NOT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_settings` */

insert  into `ims_uni_settings`(`uniacid`,`passport`,`oauth`,`jsauth_acid`,`uc`,`notify`,`creditnames`,`creditbehaviors`,`welcome`,`default`,`default_message`,`payment`,`stat`,`default_site`,`sync`,`recharge`,`tplnotice`,`grouplevel`,`mcplugin`,`exchange_enable`,`coupon_type`,`menuset`,`statistics`,`bind_domain`,`comment_status`,`reply_setting`,`default_module`,`attachment_limit`,`attachment_size`,`sync_member`) values (1,'a:3:{s:8:\"focusreg\";i:0;s:4:\"item\";s:5:\"email\";s:4:\"type\";s:8:\"password\";}','a:2:{s:6:\"status\";s:1:\"0\";s:7:\"account\";s:1:\"0\";}',0,'a:1:{s:6:\"status\";i:0;}','a:1:{s:3:\"sms\";a:2:{s:7:\"balance\";i:0;s:9:\"signature\";s:0:\"\";}}','a:5:{s:7:\"credit1\";a:2:{s:5:\"title\";s:6:\"积分\";s:7:\"enabled\";i:1;}s:7:\"credit2\";a:2:{s:5:\"title\";s:6:\"余额\";s:7:\"enabled\";i:1;}s:7:\"credit3\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit4\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit5\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}}','a:2:{s:8:\"activity\";s:7:\"credit1\";s:8:\"currency\";s:7:\"credit2\";}','','','','a:4:{s:6:\"credit\";a:1:{s:6:\"switch\";b:0;}s:6:\"alipay\";a:4:{s:6:\"switch\";b:0;s:7:\"account\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:6:\"secret\";s:0:\"\";}s:6:\"wechat\";a:5:{s:6:\"switch\";b:0;s:7:\"account\";b:0;s:7:\"signkey\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"delivery\";a:1:{s:6:\"switch\";b:0;}}','',1,0,'','',1,'',0,1,'','','',0,0,'',NULL,NULL,0);

/*Table structure for table `ims_uni_verifycode` */

DROP TABLE IF EXISTS `ims_uni_verifycode`;

CREATE TABLE `ims_uni_verifycode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `verifycode` varchar(6) NOT NULL,
  `total` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `failed_count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_uni_verifycode` */

/*Table structure for table `ims_userapi_cache` */

DROP TABLE IF EXISTS `ims_userapi_cache`;

CREATE TABLE `ims_userapi_cache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_userapi_cache` */

/*Table structure for table `ims_userapi_reply` */

DROP TABLE IF EXISTS `ims_userapi_reply`;

CREATE TABLE `ims_userapi_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `description` varchar(300) NOT NULL DEFAULT '',
  `apiurl` varchar(300) NOT NULL DEFAULT '',
  `token` varchar(32) NOT NULL DEFAULT '',
  `default_text` varchar(100) NOT NULL DEFAULT '',
  `cachetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `ims_userapi_reply` */

insert  into `ims_userapi_reply`(`id`,`rid`,`description`,`apiurl`,`token`,`default_text`,`cachetime`) values (1,1,'\"城市名+天气\", 如: \"北京天气\"','weather.php','','',0),(2,2,'\"百科+查询内容\" 或 \"定义+查询内容\", 如: \"百科姚明\", \"定义自行车\"','baike.php','','',0),(3,3,'\"@查询内容(中文或英文)\"','translate.php','','',0),(4,4,'\"日历\", \"万年历\", \"黄历\"或\"几号\"','calendar.php','','',0),(5,5,'\"新闻\"','news.php','','',0),(6,6,'\"快递+单号\", 如: \"申通1200041125\"','express.php','','',0);

/*Table structure for table `ims_users` */

DROP TABLE IF EXISTS `ims_users`;

CREATE TABLE `ims_users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL DEFAULT '0',
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `founder_groupid` tinyint(4) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `joindate` int(10) unsigned NOT NULL DEFAULT '0',
  `joinip` varchar(15) NOT NULL DEFAULT '',
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(15) NOT NULL DEFAULT '',
  `remark` varchar(500) NOT NULL DEFAULT '',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `register_type` tinyint(3) NOT NULL DEFAULT '0',
  `openid` varchar(50) NOT NULL DEFAULT '0',
  `welcome_link` tinyint(4) NOT NULL,
  `notice_setting` varchar(5000) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ims_users` */

insert  into `ims_users`(`uid`,`owner_uid`,`groupid`,`founder_groupid`,`username`,`password`,`salt`,`type`,`status`,`joindate`,`joinip`,`lastvisit`,`lastip`,`remark`,`starttime`,`endtime`,`register_type`,`openid`,`welcome_link`,`notice_setting`) values (1,0,1,0,'admin','642f3cefe4dce2db041963dd5e95ba1baffa6680','d49faac8',1,0,1571023910,'',1571024246,'127.0.0.1','',0,0,0,'0',0,'');

/*Table structure for table `ims_users_bind` */

DROP TABLE IF EXISTS `ims_users_bind`;

CREATE TABLE `ims_users_bind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `bind_sign` varchar(50) NOT NULL DEFAULT '',
  `third_type` tinyint(4) NOT NULL DEFAULT '0',
  `third_nickname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `bind_sign` (`bind_sign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_bind` */

/*Table structure for table `ims_users_create_group` */

DROP TABLE IF EXISTS `ims_users_create_group`;

CREATE TABLE `ims_users_create_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL,
  `maxaccount` int(10) NOT NULL,
  `maxwxapp` int(10) NOT NULL,
  `maxwebapp` int(10) NOT NULL,
  `maxphoneapp` int(10) NOT NULL,
  `maxxzapp` int(10) NOT NULL,
  `maxaliapp` int(10) NOT NULL,
  `createtime` int(10) NOT NULL,
  `maxbaiduapp` int(10) NOT NULL,
  `maxtoutiaoapp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_create_group` */

/*Table structure for table `ims_users_extra_group` */

DROP TABLE IF EXISTS `ims_users_extra_group`;

CREATE TABLE `ims_users_extra_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `uni_group_id` int(10) NOT NULL,
  `create_group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `uni_group_id` (`uni_group_id`),
  KEY `create_group_id` (`create_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_extra_group` */

/*Table structure for table `ims_users_extra_limit` */

DROP TABLE IF EXISTS `ims_users_extra_limit`;

CREATE TABLE `ims_users_extra_limit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `maxaccount` int(10) NOT NULL,
  `maxwxapp` int(10) NOT NULL,
  `maxwebapp` int(10) NOT NULL,
  `maxphoneapp` int(10) NOT NULL,
  `maxxzapp` int(10) NOT NULL,
  `maxaliapp` int(10) NOT NULL,
  `timelimit` int(10) NOT NULL,
  `maxbaiduapp` int(10) NOT NULL,
  `maxtoutiaoapp` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_extra_limit` */

/*Table structure for table `ims_users_extra_modules` */

DROP TABLE IF EXISTS `ims_users_extra_modules`;

CREATE TABLE `ims_users_extra_modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `support` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `module_name` (`module_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_extra_modules` */

/*Table structure for table `ims_users_extra_templates` */

DROP TABLE IF EXISTS `ims_users_extra_templates`;

CREATE TABLE `ims_users_extra_templates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `template_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `template_id` (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_extra_templates` */

/*Table structure for table `ims_users_failed_login` */

DROP TABLE IF EXISTS `ims_users_failed_login`;

CREATE TABLE `ims_users_failed_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `username` varchar(32) NOT NULL DEFAULT '',
  `count` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ip_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_failed_login` */

/*Table structure for table `ims_users_founder_group` */

DROP TABLE IF EXISTS `ims_users_founder_group`;

CREATE TABLE `ims_users_founder_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `package` varchar(5000) NOT NULL DEFAULT '',
  `maxaccount` int(10) unsigned NOT NULL DEFAULT '0',
  `maxsubaccount` int(10) unsigned NOT NULL,
  `timelimit` int(10) unsigned NOT NULL DEFAULT '0',
  `maxwxapp` int(10) unsigned NOT NULL DEFAULT '0',
  `maxwebapp` int(10) NOT NULL DEFAULT '0',
  `maxphoneapp` int(10) NOT NULL,
  `maxxzapp` int(10) NOT NULL,
  `maxaliapp` int(10) NOT NULL,
  `maxbaiduapp` int(10) NOT NULL,
  `maxtoutiaoapp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_founder_group` */

/*Table structure for table `ims_users_founder_own_create_groups` */

DROP TABLE IF EXISTS `ims_users_founder_own_create_groups`;

CREATE TABLE `ims_users_founder_own_create_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `founder_uid` int(10) NOT NULL,
  `create_group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `founder_uid` (`founder_uid`),
  KEY `create_group_id` (`create_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_founder_own_create_groups` */

/*Table structure for table `ims_users_founder_own_uni_groups` */

DROP TABLE IF EXISTS `ims_users_founder_own_uni_groups`;

CREATE TABLE `ims_users_founder_own_uni_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `founder_uid` int(10) NOT NULL,
  `uni_group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `founder_uid` (`founder_uid`),
  KEY `uni_group_id` (`uni_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_founder_own_uni_groups` */

/*Table structure for table `ims_users_founder_own_users` */

DROP TABLE IF EXISTS `ims_users_founder_own_users`;

CREATE TABLE `ims_users_founder_own_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `founder_uid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `founder_uid` (`founder_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_founder_own_users` */

/*Table structure for table `ims_users_founder_own_users_groups` */

DROP TABLE IF EXISTS `ims_users_founder_own_users_groups`;

CREATE TABLE `ims_users_founder_own_users_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `founder_uid` int(10) NOT NULL,
  `users_group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `founder_uid` (`founder_uid`),
  KEY `users_group_id` (`users_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_founder_own_users_groups` */

/*Table structure for table `ims_users_group` */

DROP TABLE IF EXISTS `ims_users_group`;

CREATE TABLE `ims_users_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `package` varchar(5000) NOT NULL DEFAULT '',
  `maxaccount` int(10) unsigned NOT NULL DEFAULT '0',
  `maxsubaccount` int(10) unsigned NOT NULL,
  `timelimit` int(10) unsigned NOT NULL DEFAULT '0',
  `maxwxapp` int(10) unsigned NOT NULL DEFAULT '0',
  `maxwebapp` int(10) NOT NULL DEFAULT '0',
  `maxphoneapp` int(10) NOT NULL,
  `maxxzapp` int(10) NOT NULL,
  `maxaliapp` int(10) NOT NULL,
  `maxbaiduapp` int(10) NOT NULL,
  `maxtoutiaoapp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_group` */

/*Table structure for table `ims_users_invitation` */

DROP TABLE IF EXISTS `ims_users_invitation`;

CREATE TABLE `ims_users_invitation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(64) NOT NULL,
  `fromuid` int(10) unsigned NOT NULL,
  `inviteuid` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_invitation` */

/*Table structure for table `ims_users_lastuse` */

DROP TABLE IF EXISTS `ims_users_lastuse`;

CREATE TABLE `ims_users_lastuse` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `uniacid` int(10) DEFAULT NULL,
  `modulename` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_lastuse` */

/*Table structure for table `ims_users_permission` */

DROP TABLE IF EXISTS `ims_users_permission`;

CREATE TABLE `ims_users_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `type` varchar(100) NOT NULL,
  `permission` varchar(10000) NOT NULL,
  `url` varchar(255) NOT NULL,
  `modules` text NOT NULL,
  `templates` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_permission` */

/*Table structure for table `ims_users_profile` */

DROP TABLE IF EXISTS `ims_users_profile`;

CREATE TABLE `ims_users_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `edittime` int(10) NOT NULL,
  `realname` varchar(10) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `mobile` varchar(11) NOT NULL DEFAULT '',
  `fakeid` varchar(30) NOT NULL,
  `vip` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `birthyear` smallint(6) unsigned NOT NULL DEFAULT '0',
  `birthmonth` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `birthday` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `constellation` varchar(10) NOT NULL DEFAULT '',
  `zodiac` varchar(5) NOT NULL DEFAULT '',
  `telephone` varchar(15) NOT NULL DEFAULT '',
  `idcard` varchar(30) NOT NULL DEFAULT '',
  `studentid` varchar(50) NOT NULL DEFAULT '',
  `grade` varchar(10) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(10) NOT NULL DEFAULT '',
  `nationality` varchar(30) NOT NULL DEFAULT '',
  `resideprovince` varchar(30) NOT NULL DEFAULT '',
  `residecity` varchar(30) NOT NULL DEFAULT '',
  `residedist` varchar(30) NOT NULL DEFAULT '',
  `graduateschool` varchar(50) NOT NULL DEFAULT '',
  `company` varchar(50) NOT NULL DEFAULT '',
  `education` varchar(10) NOT NULL DEFAULT '',
  `occupation` varchar(30) NOT NULL DEFAULT '',
  `position` varchar(30) NOT NULL DEFAULT '',
  `revenue` varchar(10) NOT NULL DEFAULT '',
  `affectivestatus` varchar(30) NOT NULL DEFAULT '',
  `lookingfor` varchar(255) NOT NULL DEFAULT '',
  `bloodtype` varchar(5) NOT NULL DEFAULT '',
  `height` varchar(5) NOT NULL DEFAULT '',
  `weight` varchar(5) NOT NULL DEFAULT '',
  `alipay` varchar(30) NOT NULL DEFAULT '',
  `msn` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `taobao` varchar(30) NOT NULL DEFAULT '',
  `site` varchar(30) NOT NULL DEFAULT '',
  `bio` text NOT NULL,
  `interest` text NOT NULL,
  `workerid` varchar(64) NOT NULL DEFAULT '',
  `is_send_mobile_status` tinyint(3) NOT NULL DEFAULT '0',
  `send_expire_status` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_users_profile` */

/*Table structure for table `ims_video_reply` */

DROP TABLE IF EXISTS `ims_video_reply`;

CREATE TABLE `ims_video_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `mediaid` varchar(255) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_video_reply` */

/*Table structure for table `ims_voice_reply` */

DROP TABLE IF EXISTS `ims_voice_reply`;

CREATE TABLE `ims_voice_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `mediaid` varchar(255) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_voice_reply` */

/*Table structure for table `ims_wechat_attachment` */

DROP TABLE IF EXISTS `ims_wechat_attachment`;

CREATE TABLE `ims_wechat_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `media_id` varchar(255) NOT NULL,
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL,
  `model` varchar(25) NOT NULL,
  `tag` varchar(5000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `module_upload_dir` varchar(100) NOT NULL DEFAULT '',
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `media_id` (`media_id`),
  KEY `acid` (`acid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_wechat_attachment` */

/*Table structure for table `ims_wechat_news` */

DROP TABLE IF EXISTS `ims_wechat_news`;

CREATE TABLE `ims_wechat_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned DEFAULT '0',
  `attach_id` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb_media_id` varchar(60) NOT NULL,
  `thumb_url` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_source_url` varchar(200) NOT NULL,
  `show_cover_pic` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL,
  `displayorder` int(2) NOT NULL DEFAULT '0',
  `need_open_comment` tinyint(1) NOT NULL,
  `only_fans_can_comment` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `attach_id` (`attach_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_wechat_news` */

/*Table structure for table `ims_wxapp_general_analysis` */

DROP TABLE IF EXISTS `ims_wxapp_general_analysis`;

CREATE TABLE `ims_wxapp_general_analysis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `session_cnt` int(10) NOT NULL,
  `visit_pv` int(10) NOT NULL,
  `visit_uv` int(10) NOT NULL,
  `visit_uv_new` int(10) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `stay_time_uv` varchar(10) NOT NULL,
  `stay_time_session` varchar(10) NOT NULL,
  `visit_depth` varchar(10) NOT NULL,
  `ref_date` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `ref_date` (`ref_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_wxapp_general_analysis` */

/*Table structure for table `ims_wxapp_versions` */

DROP TABLE IF EXISTS `ims_wxapp_versions`;

CREATE TABLE `ims_wxapp_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL DEFAULT '0',
  `version` varchar(10) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `modules` varchar(1000) NOT NULL DEFAULT '',
  `design_method` tinyint(1) NOT NULL DEFAULT '1',
  `template` int(10) NOT NULL DEFAULT '0',
  `quickmenu` varchar(2500) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `type` int(2) NOT NULL DEFAULT '0',
  `entry_id` int(11) NOT NULL DEFAULT '0',
  `appjson` text NOT NULL,
  `default_appjson` text NOT NULL,
  `use_default` tinyint(1) NOT NULL DEFAULT '1',
  `last_modules` varchar(1000) DEFAULT NULL,
  `tominiprogram` varchar(1000) NOT NULL,
  `upload_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `version` (`version`),
  KEY `uniacid` (`uniacid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_wxapp_versions` */

/*Table structure for table `ims_wxcard_reply` */

DROP TABLE IF EXISTS `ims_wxcard_reply`;

CREATE TABLE `ims_wxcard_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL,
  `card_id` varchar(50) NOT NULL,
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  `brand_name` varchar(30) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `success` varchar(255) NOT NULL,
  `error` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ims_wxcard_reply` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
