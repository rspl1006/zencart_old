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
// $Id: password_forgotten.php 290 2004-09-15 19:48:26Z wilt $
//

define('NAVBAR_TITLE_1', '��¼');
define('NAVBAR_TITLE_2', 'ȡ������');

define('HEADING_TITLE', 'ȡ������');

define('TEXT_MAIN', '���������ĵ����ʼ���ַ�����ǻὫ�µ����뷢����');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '����: �õ����ʼ���ַ���ڼ�¼�У�������һ�Ρ�');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - ������');
define('EMAIL_PASSWORD_REMINDER_BODY', '�����������������' . $_SERVER['REMOTE_ADDR']  . '��' . "\n\n" . '����\'' . STORE_NAME . '\'����������:' . "\n\n" . '   %s' . "\n\n���µ������¼�󣬿�����'�ҵ��ʺ�'���޸ġ�");

define('SUCCESS_PASSWORD_SENT', '�������Ѿ��������������ˡ�');
?>