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
// $Id: password_forgotten.php 4820 2006-10-23 07:19:46Z drbyte $
//

define('HEADING_TITLE', '�ط�����');

define('TEXT_ADMIN_EMAIL', '����Ա�ʼ�: ');

define('ERROR_WRONG_EMAIL', '<p>������ĵ����ʼ���ַ����ȷ��</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>����һ�� :-P</p>');
define('SUCCESS_PASSWORD_SENT', '<p>�µ������Ѿ�������ĵ������䡣</p>');

define('TEXT_EMAIL_SUBJECT', '��ĸ�������');
define('TEXT_EMAIL_FROM', ������);
define('TEXT_EMAIL_MESSAGE', '����������������' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . '����\'' . STORE_NAME . '\'����������:' . "\n\n" . '   %s' . "\n\n���������¼�󣬿�����'����->��������'���޸ġ�");

?>