<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 5745 2007-02-01 00:52:06Z ajeh $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */

define('NAVBAR_TITLE', '�����ʺ�');

define('HEADING_TITLE', '�ҵ��ʺ���Ϣ');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">��ʾ��</strong>������Ѿ����ʺ�, ��� <a href="%s">����</a> ��¼��');

// greeting salutation
define('EMAIL_SUBJECT', '��ӭ���� ' . STORE_NAME);
define('EMAIL_GREET_MR', '�װ���%s����,' . "\n\n");
define('EMAIL_GREET_MS', '�װ���%sŮʿ,' . "\n\n");
define('EMAIL_GREET_NONE', '�װ��� %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', '��ӭ���� <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '��ϲ! Ϊ�������´������ﹺ����ӳ�ֵ, ������ר��Ϊ��׼�����Ż�ȯ������!' . "\n\n");
// �����Ż�ȯ���齫�����¼���
define('EMAIL_COUPON_REDEEM', 'Ҫʹ���Ż�ȯ, ����ʱ���� ' . TEXT_GV_REDEEM . ' ����:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>�Ż�ȯ��Ч��Ϊ %s �� %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', '��л�ݹ�, ���Ǹ������� ' . TEXT_GV_NAME . ' ��Ϊ %s!' . "\n");
define('EMAIL_GV_REDEEM', '�� ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' ��:%s' . "\n\n" . '������ʱ���� ' . TEXT_GV_REDEEM . ', Ȼ�����̵�������ѡ��. ');
define('EMAIL_GV_LINK', ' �������ھͿ������������Ӷ���: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','��һ������ ' . TEXT_GV_NAME . ' �������ʺ�, �Ϳ����Լ�ʹ�� ' . TEXT_GV_NAME . ', ���߷�������!' . "\n\n");

define('EMAIL_TEXT', '�����ڿ���ʹ�������ṩ��<strong>���ַ���</strong>. �������:' . "\n\n" . '<li><strong>���ù��ﳵ</strong> - ���������߹��ﳵ����Ʒ, ���Ա���ֱ����ɾ������, ���߽������.' . "\n\n" . '<li><strong>��ַ��</strong> - ���ǿ��Է����������ʵ���ַ����������������ͻ���ַ! ����ʺϸ������������������' . "\n\n" . '<li><strong>������¼</strong> - �鿴��֮ǰ�����ж���.' . "\n\n" . '<li><strong>��Ʒ����</strong> - �����ǵ������ͻ���������ĳ��Ʒ�Ŀ���.' . "\n\n");
define('EMAIL_CONTACT', '�����Ҫ����, �뷢�����ʼ���: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','лл���Ĺ���,' . "\n\n" . STORE_OWNER . "\n�̵����Ա\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', '�õ����ʼ���ַ������ĳλ�ͻ������ǵ�. �����û�еǼ��ʺ�, ��������������˸��ʼ�, �뷢�ʼ���%s');

//define('TABLE_HEADING_PRIVACY_CONDITIONS', '��˽����');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '��������ķ��������ͬ�����ǵ���˽����������˽������<a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>����</u></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '���Ѿ��Ķ���ͬ�����˽������');
?>