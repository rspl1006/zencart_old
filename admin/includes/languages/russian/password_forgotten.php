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
// $Id: password_forgotten.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '��������� ������');

define('TEXT_ADMIN_EMAIL', 'Email ������: ');

define('ERROR_WRONG_EMAIL', '<p>�� ����� ����������� email</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>���������� ���</p>');
define('SUCCESS_PASSWORD_SENT', '<p>�������: ����� ������ ��� ��������� �� ��� e-mail</p>');

define('TEXT_EMAIL_SUBJECT', '�� ������ ������� ��������');
define('TEXT_EMAIL_FROM', EMAIL_FROM);
define('TEXT_EMAIL_MESSAGE', '����� ������ �� �������� �� ' . $_SESSION['REMOTE_ADDR'] . '.' . "\n\n" . '��� ����� ������ \'' . STORE_NAME . '\' :' . "\n\n" . '   %s' . "\n\n");

?>