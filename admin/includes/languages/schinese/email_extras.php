<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// | Simplified Chinese version   http://www.zen-cart.cn                  |
// +----------------------------------------------------------------------+
// $Id: email_extras.php 5454 2006-12-29 20:10:17Z drbyte $
//

// office use only
  define('OFFICE_FROM','����:');
  define('OFFICE_EMAIL','�����ʼ�:');

  define('OFFICE_SENT_TO','����:');
  define('OFFICE_EMAIL_TO','�����ʼ�:');
  define('OFFICE_USE','��վר��:');
  define('OFFICE_LOGIN_NAME','��¼��:');
  define('OFFICE_LOGIN_EMAIL','�����ʼ�:');
  define('OFFICE_LOGIN_PHONE','<strong>�绰����:</strong>');
  define('OFFICE_IP_ADDRESS','IP��ַ:');
  define('OFFICE_HOST_ADDRESS','������ַ:');
  define('OFFICE_DATE_TIME','���ں�ʱ��:');

// email disclaimer
  define('EMAIL_DISCLAIMER', '�õ����ʼ���ַ���������ǵ�һ���ͻ��ṩ��. �����û�еǼ��ʺ�, ��������������˸��ʼ�, �뷢�ʼ��� %s');
  define('EMAIL_SPAM_DISCLAIMER','�õ����ʼ���ѭ����2004��1��1����Ч�ķ������ʼ�����. �˶��뷢�����ϵ�ַ, ������������Ҫ��.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright &copy; ' . date('Y') . ' <a href="http://www.zen-cart.cn" target="_blank">Zen Cart ���İ�</a>��Powered by <a href="http://www.zen-cart.cn" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[����Ա�ѷ�GV]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[�Ż�ȯ]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[����״̬]');
  define('TEXT_UNSUBSCRIBE', "\n\nTo ��Ҫ�˶���������ʹ����ʼ�, ������������: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '�ر�');
?>