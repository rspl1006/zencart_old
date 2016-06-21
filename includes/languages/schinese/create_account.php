<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 5745 2007-02-01 00:52:06Z ajeh $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */

define('NAVBAR_TITLE', '建立帐号');

define('HEADING_TITLE', '我的帐号信息');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">提示：</strong>如果您已经有帐号, 请点 <a href="%s">这里</a> 登录。');

// greeting salutation
define('EMAIL_SUBJECT', '欢迎来到 ' . STORE_NAME);
define('EMAIL_GREET_MR', '亲爱的%s先生,' . "\n\n");
define('EMAIL_GREET_MS', '亲爱的%s女士,' . "\n\n");
define('EMAIL_GREET_NONE', '亲爱的 %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', '欢迎来到 <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '恭喜! 为了让您下次在这里购物更加超值, 下面是专门为你准备的优惠券的详情!' . "\n\n");
// 您的优惠券详情将在以下加入
define('EMAIL_COUPON_REDEEM', '要使用优惠券, 结帐时输入 ' . TEXT_GV_REDEEM . ' 代码:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>优惠券有效期为 %s 至 %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', '多谢惠顾, 我们给您发了 ' . TEXT_GV_NAME . ' 作为 %s!' . "\n");
define('EMAIL_GV_REDEEM', '该 ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' 是:%s' . "\n\n" . '您结帐时输入 ' . TEXT_GV_REDEEM . ', 然后在商店里作出选择. ');
define('EMAIL_GV_LINK', ' 或者现在就可以依以下链接兑现: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','您一旦加入 ' . TEXT_GV_NAME . ' 到您的帐号, 就可以自己使用 ' . TEXT_GV_NAME . ', 或者发给朋友!' . "\n\n");

define('EMAIL_TEXT', '您现在可以使用我们提供的<strong>多种服务</strong>. 服务包括:' . "\n\n" . '<li><strong>永久购物车</strong> - 加入您在线购物车的商品, 可以保存直至您删除他们, 或者结帐完毕.' . "\n\n" . '<li><strong>地址簿</strong> - 我们可以发货到您的帐单地址或者您另外输入的送货地址! 这很适合给您的朋友送生日礼物。' . "\n\n" . '<li><strong>订单记录</strong> - 查看您之前的所有订单.' . "\n\n" . '<li><strong>商品评论</strong> - 和我们的其它客户分享您对某商品的看法.' . "\n\n");
define('EMAIL_CONTACT', '如果需要帮助, 请发电子邮件到: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','谢谢您的光临,' . "\n\n" . STORE_OWNER . "\n商店管理员\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', '该电子邮件地址是您或某位客户给我们的. 如果您没有登记帐号, 或者您错误接收了该邮件, 请发邮件到%s');

//define('TABLE_HEADING_PRIVACY_CONDITIONS', '隐私声明');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '请点击下面的方框表明您同意我们的隐私声明。该隐私声明在<a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>这里</u></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '我已经阅读并同意该隐私声明。');
?>