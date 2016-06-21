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
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '��������� ' . TEXT_GV_NAME . ' ��������');

define('TEXT_CUSTOMER', '������:');
define('TEXT_SUBJECT', '����:');
define('TEXT_FROM', '��:');
define('TEXT_TO', 'Email:');
define('TEXT_AMOUNT', '����������');
define('TEXT_MESSAGE', '������ �����:');
define('TEXT_RICH_TEXT_MESSAGE', 'RTF �����:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">����������� ��� ��� �������� ������ email, � ������ ������� ����������� ���� ����</span>');
define('TEXT_SELECT_CUSTOMER', '�������� �������');
define('TEXT_ALL_CUSTOMERS', '��� �������');
define('TEXT_NEWSLETTER_CUSTOMERS', '���� ����������� �� ��������');

define('NOTICE_EMAIL_SENT_TO', '��������: Email ���������: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '������: �� ��� ������ ������');
define('ERROR_NO_AMOUNT_SELECTED', '������: �� ���� ������� ����������');
define('ERROR_NO_SUBJECT', '������: �� ���� ������� ����');
define('ERROR_GV_AMOUNT', '������� ���������� ��� ��������. ��������: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">�� ���� ���������� ��� ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', '' . TEXT_GV_NAME . ' ��������� ');
define('TEXT_TO_REDEEM', '��� ��� ��������� ' . TEXT_GV_NAME . ', ��������� �� ������ ����. �������� ���� ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' �������');
define('TEXT_IN_CASE', ' � ������ ���� ���� ��������');
define('TEXT_OR_VISIT', '��� �������� ');
define('TEXT_ENTER_CODE', ' � ������� ��� � �������� �������� ������');
define('TEXT_CLICK_TO_REDEEM','������� ����� ��� ���������');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '�� ��������  ' . TEXT_GV_NAME . ' �� ������ ��������, �� ����������� ������������, ����������  ' . TEXT_GV_NAME . ' �� ���� ����������� ��� ���. �������� �������� ������ ��������� ���������� ��������');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . '��������  ' . TEXT_GV_NAME . ' ���� %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . '�� ������ ��������� ��� �������, ������� � ���������  ' . TEXT_GV_NAME . ' � ����������� ������� ��� ����������');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>