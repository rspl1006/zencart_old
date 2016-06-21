<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', '�������� �������');

define('HEADING_TITLE', '��� ����������');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">��������:</strong> ���� �� ��� ������������������, ��������� �� �������� <a href="%s">����� � �������</a>.');

// greeting salutation
define('EMAIL_SUBJECT', '����� ���������� � ' . STORE_NAME);
define('EMAIL_GREET_MR', '��������� %s,' . "\n\n");
define('EMAIL_GREET_MS', '��������� %s,' . "\n\n");
define('EMAIL_GREET_NONE', '��. %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', '�� ���� ������ ��� � <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '�����������! �� �������� ���������� �������� � ����� ��������!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', '��� ������������� ���������� �������� ������� ' . TEXT_GV_REDEEM . ' � ��� � �������� �������� ������:  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', '���������� �������� ��� ��� ' . TEXT_GV_NAME . ' ��� %s!' . "\n");
define('EMAIL_GV_REDEEM', '��� ���������� ��������' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' ���: %s ' . "\n\n" . '�� ������ ������ ��� ' . TEXT_GV_REDEEM . ' � �������� �������� ������');
define('EMAIL_GV_LINK', ' �� ������ ������������ ��� ������� �� ������: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','���� ���������� ' . TEXT_GV_NAME . ' � ��� �������, �� ������ ������������ ' . TEXT_GV_NAME . ' ��� ����, ��� ��������� �����!' . "\n\n");

define('EMAIL_TEXT', '����� � ��� ���� �������, �� ������ ����������� <strong>���������� ��������</strong> ������� �� ��� ����������. ��� ��������� �� ���:' . "\n\n" . '<li><strong>���������� �������</strong> - ����� ����������� ����� �������� � ��� ���� �� �� ������� ��� �� ������ ���.' . "\n\n" . '<li><strong>�������� �����</strong> - ��������� ������� �������� ������ �� ������ ��������� �� ������ ������� �����.' . "\n\n" . '<li><strong>������� �������</strong> - ������� ���� ����� ������� �������� �����.' . "\n\n" . '<li><strong>������ � �������</strong> - ���������� ������ � ������� � ����� ��������.' . "\n\n");
define('EMAIL_CONTACT', '���� � ��� �������� �������, �� ������ �������� ���: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','� ���������,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', '������ ����� ��� ������ ��� ����������� ������� � ����� ��������. ���� �� �� ��������� ������� � ����� ��������, �������� ��� �� %s ');

//moved definitions to english.php
//define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacy Statement');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'I have read and agreed to your privacy statement.');
//define('TABLE_HEADING_ADDRESS_DETAILS', 'Address Details');
//define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Additional Contact Details');
//define('TABLE_HEADING_DATE_OF_BIRTH', 'Verify Your Age');
//define('TABLE_HEADING_LOGIN_DETAILS', 'Login Details');
//define('TABLE_HEADING_REFERRAL_DETAILS', 'Were You Referred to Us?');
?>