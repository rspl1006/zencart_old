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
// $Id: time_out.php 290 2004-09-15 19:48:26Z wilt $
//

define('NAVBAR_TITLE', '��¼��ʱ');
define('HEADING_TITLE', '��Ӵ����ʱ�� ...');
define('HEADING_TITLE_LOGGED_IN', '��Ӵ! �Բ�����û��ִ��Ȩ�ޡ�');
define('TEXT_INFORMATION', '<p>����������¶��������¼�����Ĺ��ﳵ�����棬Ȼ����Խ��ʡ�</p><p>��������ж�������鿴' . (DOWNLOAD_ENABLED == 'true' ? '��������Ҫ������Ʒ' : '') . '�������<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">�ҵ��ʺ�</a>ҳ���ѯ������</p>');

define('TEXT_INFORMATION_LOGGED_IN', '���Ѿ���¼�����Լ��������Ӳ˵���ѡ�����ܡ�');

define('HEADING_RETURNING_CUSTOMER', '��¼');
define('TEXT_PASSWORD_FORGOTTEN', '�������룿')
?>