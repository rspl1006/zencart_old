<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', '����');
define('NAVBAR_TITLE_2', '������� ������');

define('HEADING_TITLE', '������� ������');

define('TEXT_MAIN', '������� ��� email � �� ������ ��� ��� ������');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '������: Email ������� �� �����, �� ������ � ����� ���� ������');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - ����� ������');
define('EMAIL_PASSWORD_REMINDER_BODY', '����� ������ ��� ���������� ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . '��� ����� ������ \'' . STORE_NAME . '\' :' . "\n\n" . '   %s' . "\n\n����� ����� � ������� ��� ����� �������,�� ������ �������� ��� � ����� �������");

define('SUCCESS_PASSWORD_SENT', '����� ������ ��� ��������� �� ��������� ���� email');
?>