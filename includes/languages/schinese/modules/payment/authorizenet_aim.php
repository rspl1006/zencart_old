<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 6910 2007-09-02 01:51:33Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net�̻���¼</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />������Ϣ:<br /><b>�Զ���׼�����ÿ�����:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>˵��:</b> ��Щ��������ʽ����ģʽ�»ᱻ�ܾ����ڲ���ģʽ�¿���ͨ������Ч�ڿ������κν������ڣ�CVVУ����������κ�3��4 (AMEX)λ���֡�<br /><br /><b>�Զ��ܾ������ÿ���:</b><br /><br />Card #: 4222222222222<br /><br />������ſ����ڲ��Խ��վܾ�֪ͨ��<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">�����������ʺ�</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net�̻�ҳ��</a><br /><br /><strong>Ҫ��:</strong><br /><hr />*<strong>Authorize.net�ʺ�</strong> (��������������)<br />*<strong>��ҪCURL</strong>�ұ����SSL���뵽PHP��<br />*<strong>Authorize.net�û����ͽ�����Կ</strong>���̻�ҳ��');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'û�ҵ�CURL���� - Authorize.net AIM ֧��ģ����Ҫ');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', '���ÿ�');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', '���ÿ�����:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', '�ֿ���:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', '���ÿ���:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', '���ÿ���Ч��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVVУ����:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', '˵��');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* �ֿ�����������Ҫ' . CC_OWNER_MIN_LENGTH . '���ַ�\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* ���ÿ���������Ҫ' . CC_NUMBER_MIN_LENGTH . '���ַ�\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* 3��4λ����CVVУ���������ÿ����档\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', '�޷���Ȩ�������ÿ������޸���Ϣ���Ի���ϵ���ǡ�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', '���ÿ�����!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING', '����: ��ȫУ�����⣬��������ϵ���������Ķ��� *��δ* ��Ȩ��');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', '�˿�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', '����: ��Ҫ�˿��δѡ��ȷ�Ͽ�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', '����: ��Ҫ�˿������Ľ���ȷ��');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', '����: ��Ҫ�˿��δ�������ÿ������4λ���롣');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', '�˿���ױ��: %s - ��Ȩ��: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', '����: ��Ҫ�տ��δѡ��ȷ�Ͽ�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', '�տ�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', '����: �տ��������');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', '����: ��ָ�����ױ�š�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', '�տ���: %s.  ���ױ��: %s - ��Ȩ��: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'ȡ��');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', '����: ��Ҫ��ȡ�����ף���δѡ��ȷ�Ͽ�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'ȡ�������ױ��: %s - ��Ȩ��: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>�˿��</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', '�������������˿�ͻ������ÿ���:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'ѡ�񱾷���ȷ��: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', '����Ҫ���˿�Ľ��');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', '�������˿����ÿ���������4λ���֡�');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', '����ԭʼ���ױ��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', '˵�� (����ʾ�ڶ�����¼��):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', '�˿����');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', '�˿�����಻���������տ�������ṩԭ���������ÿ����4λ���֡�<br />�˿������ԭ�������ڵ�120���ڡ�');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>�տ��</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', '��������������ȡ��ǰ��Ȩ�Ľ��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', '�����տ���: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'ѡ�񱾷���ȷ��: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', '����ԭ���ױ��: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', '˵�� (����ʾ�ڶ�����¼��):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'ȷ������Ȩ������');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', '�տ������ԭ��Ȩ��30������ɣ�һ��ֻ����Ȩһ��������<br />��ȷ����������ȷ�Ľ��<br />������Ϊ�գ���ʹ��ԭ��');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>��Ч����</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'ȷ�����׺����ȡ��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'ѡ�񱾷���ȷ��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', '˵�� (����ʾ�ڶ�����¼��):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', '����ȡ��');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'ȡ�����ױ�����ÿ�ս���ȷ��ǰ��');

?>