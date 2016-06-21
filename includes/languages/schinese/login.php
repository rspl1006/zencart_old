<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 6352 2007-05-20 21:05:01Z drbyte $
 * Simplified Chinese version   http://www.zen-cart.cn
 */

define('NAVBAR_TITLE', '��¼');
define('HEADING_TITLE', '���ã����¼');

define('HEADING_NEW_CUSTOMER', '�¿ͻ�����ע��Ϊ��Ա');
define('HEADING_NEW_CUSTOMER_SPLIT', '�¿ͻ�');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'ע��Ϊ<strong>' . STORE_NAME . '</strong>�Ļ�Ա��������ӱ�����ͬʱ���Ը��ٵ�ǰ����״̬��Ҳ������ʱ�鿴��ʷ������');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', '����PayPal�ʺ�? Ҫ�����ÿ����ٽ�����? �������PayPal��ť���Կ��ٽ��ʡ�');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">����</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'ע��Ϊ<strong>' . STORE_NAME . '</strong>�Ļ�Ա��������ӱ�����ͬʱ���Ը��ٵ�ǰ����״̬��Ҳ������ʱ�鿴��ʷ���������ܻ�Ա�Żݡ�');

define('HEADING_RETURNING_CUSTOMER', '��Ա: ���¼');
define('HEADING_RETURNING_CUSTOMER_SPLIT', '��Ա');

define('TEXT_RETURNING_CUSTOMER_SPLIT', '���¼�����˻�');

define('TEXT_PASSWORD_FORGOTTEN', 'ȡ������');

define('TEXT_LOGIN_ERROR', '���󣺶Բ��𣬵����ʼ���ַ/���벻��ȷ��');
define('TEXT_VISITORS_CART', '<strong>��ʾ: </strong>��¼��&quot;�ÿ͹��ﳵ&quot;��&quot;��Ա���ﳵ&quot;�����Ʒ���ϲ���<a href="javascript:session_win();">[����]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">��˽����</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">�����¿���ȷ����ͬ�����ǵ���˽����������˽������</span><a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">����</span></a>��');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">���Ѿ��Ķ���ͬ�����˽������</span>');

define('ERROR_SECURITY_ERROR', '��¼ʱ���ְ�ȫ����');

define('TEXT_LOGIN_BANNED', '����: ���ܴ�ȡ��');
?>