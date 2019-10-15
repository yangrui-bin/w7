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

* app 前端公众号和小程序API运行时需要的一些公用方法
* framework 微擎系统通用的工具类和方法
##**数据库操作**

http://s.w7.cc/index.php?c=wiki&do=view&id=1&simple=&list=173

##**小程序登录**
`addons/ewei_shopv2/plugin/app/core/mobile/wxapp.php`

##**关闭微信H5内自动授权登录，当浏览器使用**

/app/common/bootstrap.app.inc.php 159
````
if($controller != 'utility') {
	$_W['token'] = token();
}
/**
 * 禁止在公众号内自动授权登录
 */
$_W['platform'] = null;
````

##**调试**
- 输出执行过的SQL
`pdo_debug()` 

- 将SQL写入日志文件(data/logs)
````
    load()->func('logging');
    logging_run('记录下单数据');
    logging_run(pdo()->debug(false));
````
- 本地开启DEBUG模式
````
addons/ewei_shopv2/defines.php
define('EWEI_SHOPV2_DEBUG', true);
````

##**什么时侯弹出用户授权**
````
<view class="model" wx:if="{{modelShow}}">
    <include src="/pages/index/openauth.wxml"></include>
</view>
````
/pages/index/openauth.wxml
````
<view class="subtitle">您需要先允许【用户授权】，才能进行后续操作哦~</view>
<button bindgetuserinfo="userinfo" bindtap="confirmclick" openType="getUserInfo">去授权</button>
````
使用modelShow判断是否弹出授权，这个值默认为1，使用wx.getSetting可以得到是否有某一项授权(如用户信息)，如果否，则modelShow=1，则会立即弹出"您需要先允许【用户授权】...."层。
````
        wx.getSetting({
            success: function(e) {
                e.authSetting["scope.userInfo"] ? (i.selectpicker(t, a, "goodslist"), a.setData({
                    cover: "",
                    showvideo: !1
                })) : a.setData({
                    modelShow: !0 //如果未授权获取头像，立即弹出"您需要先允许【用户授权】..."层
                });
            }
        });
````
必须点击`<button open-type="getUserInfo"/>`后才会弹出小程序授权页，授权是指授权用户可以获取哪些信息项，如用户信息，地理位置，发票，如同意用户获取用户信息，只是说明用户可获取用户信息的权限了，但并未真正立即去获取用户信息，真正获取用户信息需要由`wx.getUserInfo`来完成。

##**小程序页面授权登录顺序**
- onLaunch -> wx.login -> 获取临时登录凭证code -> 用code异步请求php后端wxapp/login
> 后端php会请求微信code2Session接口，获取openid,session_key，unionid
> unionid在符合下发条件时才会返回，所以不要获取这里返回的unionid
- wx.getUserInfo 获取用户信息
	- 如查用户授权同意过，得到用户加密敏感信息，将这些加密信息异步请求php后端wxapp/auth，进行解密得到用户unionid等信息，在这里将用户信息更新到数据库。
	- 如果用户拒绝授权或初次进入没弹过授权，异步请求php后端wxapp/check，这个异步请求我觉得无意义
	- 授权有效期：一旦用户明确同意或拒绝过授权，其授权关系会记录在后台，直到用户主动删除小程序。
- 页面加载最后，读取`e.authSetting["scope.userInfo"]`，发现没有授权过，`modelShow=true`，弹出用户授权，用户同意或拒绝后，都会从wx.login再跑一遍。
> 当初次加载或用户拒绝过授权并且授权缓存还存在时，还是会从wx.login开始执行，只不过wx.getUserInfo返回失败。


##**关闭后台登录密码验证**

密码要是忘了
`/framework/model/user.mod.php` 192行 注释掉`return false;`

## **小程序访问文件**
````
获取微信小程序分享二维码 addons\ewei_shopv2\plugin\app\core\model.php 1171 getCodeUnlimit

````

##**微擎公众号非静默授权**
获取code
````
app/source/auth/oauth.ctrl.php
$oauth = $oauth_account->getOauthInfo($code);
````
然后进入
````
	/framework/class/account/weixin.account.class.php
	public function getOauthInfo($code = '') {
		global $_W, $_GPC;
		if (!empty($_GPC['code'])) {
			$code = $_GPC['code'];
		}
		if (empty($code)) {
			$oauth_url = uni_account_oauth_host();
			$url = $oauth_url . "app/index.php?{$_SERVER['QUERY_STRING']}";
			$forward = $this->getOauthCodeUrl(urlencode($url));
			header('Location: ' . $forward);
			exit;
		}
		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$this->account['key']}&secret={$this->account['secret']}&code={$code}&grant_type=authorization_code";
		$response = $this->requestApi($url);
		return $response;
	}
````
获取code后，通过code获取access_token及openid
````
//获取code后返回跳转到
/app/index.php?i=4&c=auth&a=oauth&scope=snsapi_userinfo&code=001icjP21a8mdQ1fAqN21BFAP21icjP7&state=we7sid-357e0a87bb0d7e7b566432ef50e3df16 framework/class/account/weixin.account.class.php->1550 

//还是上面weixin.account.class.php的getOauthInfo方法
````
然后拉取用户信息(unionid，昵称，性别等)
````
/app/source/auth/oauth.ctrl.php
$userinfo = $oauth_account->getOauthUserInfo($oauth['access_token'], $oauth['openid']);
````
然后将用户插入mc_members 和 mc_mapping_fans，并写session（都在oauth.ctrl.php中完成），这是微擎基础框架完成的。
至于向ewei_shop_member插入用户是在访问ewei_shop模块时，由
`/addons/ewei_shopv2/core/model/member.php` 中的`checkMember()`完成插入的(有返回没有则插入)

##**小程序授权登录**
````/addons/ewei_shopv2/plugin/app/core/mobile/wxapp.php````
小程序授权登录完全在上面wxapp.php里面完成的，不会执行auth.ctrl.php，也不会向mc_members 和 mc_mapping_fans插入用户。