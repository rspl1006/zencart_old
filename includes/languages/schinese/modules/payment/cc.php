<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: cc.php 6361 2007-05-24 21:17:14Z drbyte $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */
 
  define('MODULE_PAYMENT_CC_TEXT_ADMIN_TITLE', '信用卡 - 脱机处理');
  define('MODULE_PAYMENT_CC_TEXT_CATALOG_TITLE', '信用卡');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', '信用卡测试内容:<br /><br />CC#: 4111111111111111<br />有效期: Any');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', '信用卡类型:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', '持卡人姓名:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', '信用卡号码:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV 号码 (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . '详情' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', '有效期:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* 持卡人姓名至少' . CC_OWNER_MIN_LENGTH . '个字符。\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* 信用卡号码至少' . CC_NUMBER_MIN_LENGTH . '个字符。\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', '信用卡错误:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* CVV号码至少' . CC_CVV_MIN_LENGTH . '个字符.\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','警告 - 配置错误: ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','警告: 您打开了信用卡支付模块，但是没有设置发送信用卡资料到您的电子邮箱。因此您将无法处理采用该支付方式订单的信用卡号码。管理页面->模块管理->支付模块->信用卡->编辑并设置接收信用卡资料的电子邮件地址。' . "\n\n\n\n");
  define('MODULE_PAYMENT_CC_TEXT_MIDDLE_DIGITS_MESSAGE', '请将该邮件转到财务部门，处理相关订单: ' . "\n\n" . '订单: %s' . "\n\n" . '截取的号码: %s' . "\n\n");
?>