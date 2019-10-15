## **安装微擎**
不要从官网在线安装 或 离线安装，不能使用localhost安装，需要使用可访问域名安装。
离线安装后也只能用公众号功能（菜单、消息管理等），没有最重要的应用（addons目录是空的）。
只能安装商业破解版，插件也是网上找

微擎v2.09商业破解版.rar
https://download.csdn.net/download/sky20082010/11260472

微擎人人商城插件V3 3.10.6全开源后端+前端 完美运营
https://download.csdn.net/download/ericjia8/10873347

## **后台添加平台和应用**
* 平台管理
	* 可以添加和关闭多种平台，这里的平台包括：公众号、小程序、PC、App、支付宝小程序等多种类型。
	* 添加平台时主要是向两个表插入信息
		* ims_uni_account， 产生uniacid。 
		* ims_account_xxx,具体就类型表，如添加公众号就向ims_account_wechats插数据，保存具体公众号信息
		* 平台类型中几个主要常用类型表
			* account_wxapp-小程序
			* account_wechats-公众号表
			* account_webapp PC表
			* account_phoneapp APP表
			* account_aliapp 支付宝小程序表

* 应用管理
	* 安装应用后主要向ims_modules插入一条记录，保存这个应用的详细信息s



##**站内商城**
后台有个站内商城不知道有什么用，和插件addons中的商城无关

##**路由**
路由快速定位
* m=ewei_shopv2，访问addons/ewei_shopv2下的文件
* r=goods，访问goods/index.php中的main方法
* r=goods.detail,访问goods/index.php中的detail方法
* r=goods.detail.eval,访问goods/detail.php中的eval方法

##**目录**
* web 微擎本身后台管理
	* source 后台管理控制器
	* themes 后台管理视图
* addons 插件（应用）
	* ewei_shopv2
	* core
		* mobile 公众号 API
		* web 后台订单、商品、会员管理等
	* template 模板文件目录(包括公众号H5和后台管理)
	* plugin
		* app
			* core
				* mobile 小程序 API(小程序的砍价、积分商城、秒杀，周期购也在这里)
		* creditshop 积分商城(砍价/周期购等应用模块类似)
			* core/mobile 公众号API
			* core/web 后台管理


##**数据库操作**


##**小程序登录**
`addons/ewei_shopv2/plugin/app/core/mobile/wxapp.php`

##**关闭微信H5内自动授权登录，当浏览器使用**
/app/common/bootstrap.app.inc.php
````
if($controller != 'utility') {
	$_W['token'] = token();
}
/**
 * 禁止在公众号内自动授权登录
 */
$_W['platform'] = null;
````

