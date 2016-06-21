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
//  $Id: coupon_admin.php 5758 2007-02-08 01:39:34Z ajeh $
//

define('TOP_BAR_TITLE', 'ͳ��');
define('HEADING_TITLE', '�Ż�ȯ');
define('HEADING_TITLE_STATUS', '״̬ : ');
define('TEXT_CUSTOMER', '�ͻ�:');
define('TEXT_COUPON', '�Ż�ȯ����:');
define('TEXT_COUPON_ALL', '�����Ż�ȯ');
define('TEXT_COUPON_ACTIVE', '��Ч���Ż�ȯ');
define('TEXT_COUPON_INACTIVE', 'ʧЧ���Ż�ȯ');
define('TEXT_SUBJECT', '����:');
define('TEXT_UNLIMITED', '������');
define('TEXT_FROM', '����:');
define('TEXT_FREE_SHIPPING', '���˷�');
define('TEXT_MESSAGE', '�ı���ʽ����:');
define('TEXT_RICH_TEXT_MESSAGE','HTML��ʽ����:');
define('TEXT_SELECT_CUSTOMER', 'ѡ��ͻ�');
define('TEXT_ALL_CUSTOMERS', '���пͻ�');
define('TEXT_NEWSLETTER_CUSTOMERS', '�����е������鶩����');
define('TEXT_CONFIRM_DELETE', '��ȷ��Ҫɾ�����Ż�ȯ��');
define('TEXT_SEE_RESTRICT', '������');

define('TEXT_COUPON_ANNOUNCE','����������ṩһ���̵��Ż�ȯ');

define('TEXT_TO_REDEEM', '�������ڽ���ʱ���ָ��Ż�ȯ��ֻҪ�ڶԻ�����������룬Ȼ�������ְ�ť��');
define('TEXT_IN_CASE', ' �Է���һ��');
define('TEXT_VOUCHER_IS', '���Ż�ȯ������');
define('TEXT_REMEMBER', '��Ҫ��ʧ���Ż�ȯ���룬�����ư��ܸô����Ի�ø������Żݡ�');
define('TEXT_VISIT', '��������%s');
define('TEXT_ENTER_CODE', '���������');
define('TEXT_COUPON_HELP_DATE', '<p><p>�Ż�ȯ��Ч��Ϊ%s��%s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>�Ż�ȯ��Ч��Ϊ%s��%s</p></p>');

define('TABLE_HEADING_ACTION', '����');

define('CUSTOMER_ID', '�ͻ����');
define('CUSTOMER_NAME', '�ͻ�����');
define('REDEEM_DATE', '��������');
define('IP_ADDRESS', 'IP��ַ');

define('TEXT_REDEMPTIONS', '����');
define('TEXT_REDEMPTIONS_TOTAL', '�ܶ�');
define('TEXT_REDEMPTIONS_CUSTOMER', '�ÿͻ�');
define('TEXT_NO_FREE_SHIPPING', 'û�����˷�');

define('NOTICE_EMAIL_SENT_TO', '֪ͨ: �����ʼ�����: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '����: û��ѡ��ͻ���');
define('ERROR_NO_SUBJECT', '����: û��������⡣');

define('COUPON_NAME', '�Ż�ȯ����');
//define('COUPON_VALUE', '�Ż�ȯ��ֵ');
define('COUPON_AMOUNT', '�Ż�ȯ���');
define('COUPON_CODE', '�Ż�ȯ����');
define('COUPON_STARTDATE', '��Ч��');
define('COUPON_FINISHDATE', '������');
define('COUPON_FREE_SHIP', '���˷�');
define('COUPON_DESC', '�Ż�ȯ���<br />(�ͻ��ɼ�)');
define('COUPON_MIN_ORDER', '�Ż�ȯ��С����');
define('COUPON_USES_COUPON', 'ÿ�Ż�ȯʹ��');
define('COUPON_USES_USER', 'ÿ�ͻ�ʹ��');
define('COUPON_PRODUCTS', '������Ʒ�б�');
define('COUPON_CATEGORIES', '���÷����б�');
define('VOUCHER_NUMBER_USED', 'ʹ������');
define('DATE_CREATED', '��������');
define('DATE_MODIFIED', '�޸�����');
define('TEXT_HEADING_NEW_COUPON', '�������Ż�ȯ');
define('TEXT_NEW_INTRO', '����д��������<br />');
define('COUPON_ZONE_RESTRICTION', '�Ż�ȯ��Ч����: ');
define('TEXT_COUPON_ZONE_RESTRICTION', '�Ż�ȯ��Ч�����ǿ�ѡ�');

define('ERROR_NO_COUPON_AMOUNT', 'û�������Ż�ȯ���');
define('ERROR_NO_COUPON_NAME', 'û�������Ż�ȯ����');
define('ERROR_COUPON_EXISTS', '������ͬ������Ż�ȯ');


define('COUPON_NAME_HELP', '�Ż�ȯ�ļ��');
define('COUPON_AMOUNT_HELP', '���Ż�ȯ�Ľ������ǹ̶���������������%��ʾ�ٷֱȡ�');
define('COUPON_CODE_HELP', '�����������������Լ��Ĵ��룬�����������Զ����ɡ�');
define('COUPON_STARTDATE_HELP', '�Ż�ȯ��Ч����');
define('COUPON_FINISHDATE_HELP', '�Ż�ȯ��Ч��');
define('COUPON_FREE_SHIP_HELP', '���Ż�ȯ�������˷ѡ���ʾ: �������Ż�ȯ����Ҫ����С�������');
define('COUPON_DESC_HELP', '���ͻ����Ż�ȯ���');
define('COUPON_MIN_ORDER_HELP', '���Ż�ȯ���õ���С�������');
define('COUPON_USES_COUPON_HELP', '���Ż�ȯ��ʹ�õ������������û�������ա�');
define('COUPON_USES_USER_HELP', 'ͬһ�û���ʹ�ø��Ż�ȯ�Ĵ��������û�������ա�');
define('COUPON_PRODUCTS_HELP', '�Ը��Ż�ȯ��Ч���ö��ŷֿ�����Ʒ��ţ����û�������ա�');
define('COUPON_CATEGORIES_HELP', '�Ը��Ż�ȯ��Ч���ö��ŷֿ�����Ʒ���࣬���û�������ա�');
define('COUPON_BUTTON_PREVIEW', 'Ԥ��');
define('COUPON_BUTTON_CONFIRM', 'ȷ��');
define('COUPON_BUTTON_BACK', '����');

define('COUPON_ACTIVE', '״̬');
define('COUPON_START_DATE', '��ʼ����');
define('COUPON_EXPIRE_DATE', '��Ч����');

define('ERROR_DISCOUNT_COUPON_WELCOME', '���ܽ��ñ��Ż�ȯ�����Ż�ȯ�ǻ�ӭ�Ż�ȯ<br /><br />��ɾ��ǰ���޸Ļ�ӭ�Ż�ȯ��������ҳ��->�̵�����->��ȯ���Ż�ȯ');
define('SUCCESS_COUPON_DISABLED', '�ɹ����Ż�ȯ�ѽ��� ...');
define('TEXT_COUPON_NEW', 'ʹ���µ��Ż�ȯ����:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '���棡������ͬ���Ż�ȯ ... ȡ�������Ż�ȯ����: ');
define('TEXT_CONFIRM_COPY', '��ȷ��Ҫ���Ƹ��Ż�ȯ����һ���Ż�ȯ��');
define('SUCCESS_COUPON_DUPLICATE', '�ɹ������Ż�ȯ ...<br /><br />�����Ż�ȯ���ƺ����� ...');

?>