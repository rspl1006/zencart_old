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
//  $Id: gv_mail.php 290 2004-09-15 19:48:26Z wilt $
//

define('HEADING_TITLE', '���� ' . TEXT_GV_NAME . ' ���ͻ�');

define('TEXT_CUSTOMER', '�ͻ�:');
define('TEXT_SUBJECT', '����:');
define('TEXT_FROM', '����:');
define('TEXT_TO', '����:');
define('TEXT_AMOUNT', '���');
define('TEXT_MESSAGE', '�ı���ʽ<br />������:');
define('TEXT_RICH_TEXT_MESSAGE', 'HTML��ʽ<br />������:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">���������뵥�������ʼ���ַ������ʹ������������˵�</span>');
define('TEXT_SELECT_CUSTOMER', 'ѡ��ͻ�');
define('TEXT_ALL_CUSTOMERS', '���пͻ�');
define('TEXT_NEWSLETTER_CUSTOMERS', '�����е������鶩����');

define('NOTICE_EMAIL_SENT_TO', '��ʾ: �����ʼ�����: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '����: û��ѡ��ͻ�.');
define('ERROR_NO_AMOUNT_SELECTED', '����: û��ѡ���');
define('ERROR_NO_SUBJECT', '����: û���������⡣');
define('ERROR_GV_AMOUNT', '�붨����Ϊ�޷�����ֵ������: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">���Ǻܸ��˸�������һ��' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', '��' . TEXT_GV_NAME . '�Ľ��Ϊ');
define('TEXT_TO_REDEEM', 'Ҫ���ָ�' . TEXT_GV_NAME . '��������������ӡ������' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', 'Ϊ');
define('TEXT_IN_CASE', '���Ա���ѯ��');
define('TEXT_OR_VISIT', '�����');
define('TEXT_ENTER_CODE', '���ڽ���ʱ������롣');
define('TEXT_CLICK_TO_REDEEM','����������');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '�������������վ������' . TEXT_GV_NAME . '�����ڰ�ȫ���ǣ���' . TEXT_GV_NAME . '�Ľ��û��������Ч��������ȯ�Ѿ���Ч�ˡ�');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . '��' . TEXT_GV_NAME . '�Ľ��ԭ����%s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . '�����Է������ǵ���վ����¼����' . TEXT_GV_NAME . '���κ��ˡ�');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>