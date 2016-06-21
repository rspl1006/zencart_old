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
// $Id: gv_send.php 290 2004-09-15 19:48:26Z wilt $
//

define('HEADING_TITLE', '����' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', '����' . TEXT_GV_NAME . 'ȷ��');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . '�ѷ���');
define('NAVBAR_TITLE', '����' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', '�ʼ��� ' . STORE_NAME);

define('HEADING_TEXT','�����������������������ʼ���ַ�Լ���Ҫ���͵�' . TEXT_GV_NAME . '����ϸ˵����<a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '��</a>');
define('ENTRY_NAME', '����������:');
define('ENTRY_EMAIL', '�������ʼ�:');
define('ENTRY_MESSAGE', '�������˵�����:');
define('ENTRY_AMOUNT', '���ͽ��:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'û�н����������������������롣');
define('ERROR_ENTRY_AMOUNT_CHECK', TEXT_GV_NAME . '���ԡ�������һ�Ρ�');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '�����ʼ���ַ��ȷ��������һ�Ρ�');
define('MAIN_MESSAGE', '�����ڷ��͵�' . TEXT_GV_NAME . '��ֵΪ%s��%s�������ʼ���ַΪ%s���������ȷ������<strong>�༭</strong>��ť�޸ġ�<br /><br />�����ڷ��͵�����Ϊ:<br /><br />');
define('SECONDARY_MESSAGE', '�װ���%s��<br /><br />' . '��������һ��' . TEXT_GV_NAME . '����ֵ%s��ͨ��%s');
define('PERSONAL_MESSAGE', '%sд��:');
define('TEXT_SUCCESS', '��ϲ������' . TEXT_GV_NAME . '�ѷ��͡�');
define('TEXT_SEND_ANOTHER', '���뷢������һ��' . TEXT_GV_NAME . '��');
define('TEXT_AVAILABLE_BALANCE',  '��ȯ�ʺ�');

define('EMAIL_GV_TEXT_SUBJECT', '����%s������');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', '��ϲ�����յ���һ��' . TEXT_GV_NAME . '����ֵ%s');
define('EMAIL_GV_FROM', '��' . TEXT_GV_NAME . '����%s');
define('EMAIL_GV_MESSAGE', '��������: ');
define('EMAIL_GV_SEND_TO', '���ã�%s');
define('EMAIL_GV_REDEEM', 'Ҫ���ָ�' . TEXT_GV_NAME . '��������������ӡ�ͬʱ����' . TEXT_GV_REDEEM . ': %s  �ѱ���ѯ��');
define('EMAIL_GV_LINK', 'Ҫ������������');
define('EMAIL_GV_VISIT', '�������');
define('EMAIL_GV_ENTER', '��������' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', '���������ͨ����������Ӷ���' . TEXT_GV_NAME . '��' . "\n" .
                                '���������ǵ��̵����ʱ����' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '��');
define('EMAIL_GV_SHOP_FOOTER', '');
?>