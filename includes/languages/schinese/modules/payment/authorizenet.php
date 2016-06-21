<?php
/**
 * Authorize.net SIM Payment Module
 *
  * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * Simplified Chinese version   http://www.zen-cart.cn
 * @version $Id: authorizenet.php 6641 2007-07-26 21:47:38Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', '���ÿ�');  // Payment option title as displayed to the customer


  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net�̻���¼</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />������Ϣ:<br /><b>�Զ���׼�����ÿ�����:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>˵��:</b> ��Щ��������ʽ����ģʽ�»ᱻ�ܾ����ڲ���ģʽ�¿���ͨ������Ч�ڿ������κν������ڣ�CVVУ����������κ�3��4 (AMEX)λ���֡�<br /><br /><b>�Զ��ܾ������ÿ���:</b><br /><br />Card #: 4222222222222<br /><br />������ſ����ڲ��Խ��վܾ�֪ͨ��<br /><br />' : ''));
  } else { 
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">�����������ʺ�</a><br /><br /><a target="_blank" href="https://account.authorize.net/">�����¼Authorize.net�̻�ҳ��</a><br /><br /><strong>Ҫ��:</strong><br /><hr />*<strong>Authorize.net�ʺ�</strong> (��������������)<br />*<strong>Authorize.net�û����ͽ�����Կ</strong>���̻�ҳ��');
  }


  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '���ÿ�������Ϣ:<br /><br />CC#: 4111111111111111<br />��Ч��: ����');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', '����:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', '�ֿ���:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', '���ÿ���:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', '���ÿ���Ч��:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVVУ����:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', '˵��');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* �ֿ�����������Ҫ' . CC_OWNER_MIN_LENGTH . '���ַ�.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* ���ÿ���������Ҫ' . CC_NUMBER_MIN_LENGTH . '���ַ�.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* 3��4λ����CVVУ���������ÿ����档\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', '�����������ÿ�ʱ���ִ���������һ�Ρ�');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', '�������ÿ����ܾ���. ������һ�ſ����Ի�����ϵ�������ÿ���˾.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '���ÿ�����!');
?>