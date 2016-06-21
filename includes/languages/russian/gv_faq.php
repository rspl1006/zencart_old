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
// $Id: gv_faq.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . ' ������-�����');
define('HEADING_TITLE', TEXT_GV_NAME . ' ������-�����');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">������� � ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">�������� ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">���������� ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">��������� ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">��������</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','������� � ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' ������� ��������� ������� ��������.
  ��� ������� ������ ' . TEXT_GV_NAME . ' ����� ��������� � ���
   ' . TEXT_GV_NAME . ' �������. ���� � ��� ���� ���������� � ����� ' . TEXT_GV_NAME . ' �������, �� ������ ���������� �� ����, � ����� ���������� ������ �� �������� � ������� �� ������ ��������� ' . TEXT_GV_NAME . ' �� ����� ���� email');
  break;
  case '2':
define('SUB_HEADING_TITLE','�������� ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','��� �� ��������� ' . TEXT_GV_NAME . ' ��� ���� ������� �� �������� �������� ' . TEXT_GV_NAME . '. �� ������ ����� ������ �� ��� � ������ �������,�������� � ����� �������.
  ����� �� ����������� ' . TEXT_GV_NAME . ', ��� ����� ���������� ���������:
  <br>��� ���������� ' . TEXT_GV_NAME . '
  <br>Email ����� ���������� ' . TEXT_GV_NAME . '
  <br>���������� ������������ ������
  <br>�������� ��������� ����������');
  break;
  case '3':
  define('SUB_HEADING_TITLE','���������� ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','���� � ��� ���� ���������� � ����� ' . TEXT_GV_NAME . ' �������, �� ������ ����������� �� ��� ������� ������ ������� � ����� ��������. �� ������ �������� ���������� ��������� �����,������� �������� � �������� �������� ������');
  break;
  case '4':
  define('SUB_HEADING_TITLE','��������� ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','���� �� �������� ' . TEXT_GV_NAME . ' ��� ������ ���������� ���������� � ����������� ' . TEXT_GV_NAME . ', � �������� ��������� �� ����. ��������� �������� ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. �� ������ ������������ ' . TEXT_GV_NAME . ' � ��� �������.<br /><br />
  1. ������� �� ������ � ������.
  � ��������� �� �������� � ���������� ' . TEXT_GV_NAME . '. ��� ��������� ������� ���� ������� ' . TEXT_GV_NAME . ' ����� ���� �� ����� ��������� � ������� � ��� �������
   ' . TEXT_GV_NAME . '<br /><br />
  2. � �������� �������� ������ � ������ ������ ������ ����� ����� ��� ����� ' . TEXT_GV_REDEEM . '. ������� ' . TEXT_GV_REDEEM . ' �����, � ������� �� ������ ���������. ����� ������������� ����, ��� ����� �������� � ��� ' . TEXT_GV_NAME . ' �������');
  break;
  case '5':
  define('SUB_HEADING_TITLE','��������');
  define('SUB_HEADING_TEXT','��� ������������� ������� ' . TEXT_GV_NAME . ' ����������, ��������� � ���� '. STORE_OWNER_EMAIL_ADDRESS . '');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','���������� �������� ���� �� �������� ����');

  }
  define('TEXT_GV_REDEEM_INFO', 'Please enter your ' . TEXT_GV_NAME . ' redemption code: ');
  define('TEXT_GV_REDEEM_ID', 'Redemption Code:');
?>