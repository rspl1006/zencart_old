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
//  $Id: admin.php 290 2004-09-15 19:48:26Z wilt $
//

define('HEADING_TITLE', '��������');

define('TABLE_HEADING_ADMINS_NAME', '����Ա����');
define('TABLE_HEADING_ADMINS_ID', '���');
define('TABLE_HEADING_ADMINS_EMAIL', '�����ʼ�');
define('TABLE_HEADING_ACTION', '����');

define('TEXT_HEADING_NEW_ADMIN', '�½�');
define('TEXT_HEADING_EDIT_ADMIN', '�༭');
define('TEXT_HEADING_DELETE_ADMIN', 'ɾ��');
define('TEXT_HEADING_RESET_PASSWORD', '��������');

define('TEXT_ADMINS', '����Ա:');
define('TEXT_ADMINS_EMAIL', '�����ʼ�:');

define('TEXT_NEW_INTRO', '����д���¹����¹���Ա����Ϣ');
define('TEXT_EDIT_INTRO', '������Ҫ���޸�');

define('TEXT_ADMINS_NAME', '����Ա����:');
define('TEXT_ADMINS_PASSWORD', '����:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'ȷ������:');

define('TEXT_DELETE_INTRO', '��ȷ��Ҫɾ���ù���Ա��?');
define('TEXT_DELETE_IMAGE', 'ɾ������Աͼ��?');


define('ENTRY_PASSWORD_NEW_ERROR', '���µ���������Ҫ�� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ���ַ�.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '�������һ��.');

define('TEXT_ADMINS_LEVEL','���ʺŵĹ���Ա����:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','������Ա������Ϊ1��������ʺ����ù�����ʾģʽ����. ֻ�м���Ϊ1���ʺſ����ڹ�����ʾģʽ���޸Ĺ���Ա��¼������.');
define('TEXT_ADMIN_DEMO','������ʾģʽ�������ȫ������תΪ���ֹ���, �����趨��ʾ��ʱ, ���Խ����ƻ���. ֻ�м���Ϊ1�Ĺ���Ա�����޸ĸ����ò��ҿ��������ڹ�����ʾģʽ��Ҳ�߱�ȫ�����ܵĹ����ʺ�.<br />�ڼ���ù���ʱ, ȷ���Ѿ������˼���Ϊ0����ʾ�ʺ�.');
define('TEXT_DEMO_STATUS','��ǰ������ʾģʽ�趨Ϊ:');
define('TEXT_DEMO_OFF','�ر�');
define('TEXT_DEMO_ON','��');
?>