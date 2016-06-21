<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 5458 2006-12-29 22:00:08Z drbyte $
 */


define('NAVBAR_TITLE', '����');
define('HEADING_TITLE', '����');

define('HEADING_NEW_CUSTOMER', '���������? ������� ���������� � ����');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', '������ ���� ������� � ' . STORE_NAME . ' �� ������ ������� ��������� �������,������������� ������� �������,��������� ��������� ������� �������� � ����������� ��������');

define('HEADING_RETURNING_CUSTOMER', '���� �� ������: ���������� ������� � �������');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Have a PayPal account? Want to pay quickly with a credit card? Use the PayPal button below to use the Express Checkout option.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Or</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Create a Customer Profile with <strong>' . STORE_NAME . '</strong> which allows you to shop faster, track the status of your current orders, review your previous orders and take advantage of our other member\'s benefits.');

define('TEXT_PASSWORD_FORGOTTEN', '������ ������?');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Returning Customers');

define('TEXT_LOGIN_ERROR', '������: ��������,�� � ����� ���� ��� ������ � ����� �������');
define('TEXT_VISITORS_CART', '<strong>��������:</strong> ���� &quot;������� ����������&quot; � � ���������� ����� ���������� � &quot;������� �������&quot; ��� ������ �� ������� � �������. <a href="javascript:session_win();">[���������]</a>');
define('TEXT_PASSWORD_FORGOTTEN', 'Forgot your password?');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">�������� �����������</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">�� ������ �����,��� ������������ �� ����� ���������, ��������� ��� ��������� �� ��������� ��������. �������� ����������� �� ������ ������</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">�����</span></a>.');
define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privacy Statement</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">I have read and agreed to your privacy statement.</span>');
?>