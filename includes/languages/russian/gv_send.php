<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', '���������' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', '��������� ' . TEXT_GV_NAME . ' �������������');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' ����������');
define('NAVBAR_TITLE', '��������� ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', '��������� �� ' . STORE_NAME);
define('HEADING_TEXT','������� ���, email � ���������� ' . TEXT_GV_NAME . ' ������� �� ������ ���������. ��� ����� ��������� ���������� �������� <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', '��� ����������:');
define('ENTRY_EMAIL', 'Email ����������:');
define('ENTRY_MESSAGE', '���� ���������:');
define('ENTRY_AMOUNT', '���������� � ��������:');
define('ERROR_ENTRY_TO_NAME_CHECK', '������� ��� ����������');
define('ERROR_ENTRY_AMOUNT_CHECK', '' . TEXT_GV_NAME . ' ���������� �� ���������');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '���������� �� email?');
define('MAIN_MESSAGE', '�� ����������� ' . TEXT_GV_NAME . ' ��������� %s �� %s, �� email %s');
define('SECONDARY_MESSAGE', '�� %s,<br /><br />' . '�� ��������� ' . TEXT_GV_NAME . ' ��������� %s �� %s');
define('PERSONAL_MESSAGE', '%s �������:');
define('TEXT_SUCCESS', '�����������, ��� ' . TEXT_GV_NAME . ' ��� ���������');
define('TEXT_SEND_ANOTHER', '������ ��������� ��� ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  '������� ���������� ��������');

define('EMAIL_GV_TEXT_SUBJECT', '���������� �������� �� %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', '�����������, �� ��������� ' . TEXT_GV_NAME . ' ��������� %s');
define('EMAIL_GV_FROM', 'This ' . TEXT_GV_NAME . ' ��� ��������� ��� �� %s');
define('EMAIL_GV_MESSAGE', '������� �� ���������: ');
define('EMAIL_GV_SEND_TO', '������, %s');
define('EMAIL_GV_REDEEM', '��� �� �������� ��� ' . TEXT_GV_NAME . ', �������� �� ������ ����. ���������� ����� �������� ' . TEXT_GV_REDEEM . ': %s  �� ��������� �������');
define('EMAIL_GV_LINK', '��� ���� ��� �� ��������,������� �����');
define('EMAIL_GV_VISIT', ' ��� �������� ');
define('EMAIL_GV_ENTER', ' � ������� ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', '���� � ��� �������� �������� �� ����� ��������� ' . TEXT_GV_NAME . ' ����������� ������ ����, ' . "\n" .
                                '�� ������ ����� ������ ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' �� ����� �������� ������');
define('EMAIL_GV_SHOP_FOOTER', '');
?>