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
//  $Id: banner_manager.php 1132 2005-04-06 02:39:19Z ajeh $
//

define('HEADING_TITLE', '������');

define('TABLE_HEADING_BANNERS', '���');
define('TABLE_HEADING_GROUPS', '���');
define('TABLE_HEADING_STATISTICS', '��ʾ/���');
define('TABLE_HEADING_STATUS', '״̬');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','�´���');
define('TABLE_HEADING_BANNER_ON_SSL', '��ʾ SSL');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_BANNER_SORT_ORDER', '����');

define('TEXT_BANNERS_TITLE', '������:');
define('TEXT_BANNERS_URL', '���URL:');
define('TEXT_BANNERS_GROUP', '������:');
define('TEXT_BANNERS_NEW_GROUP', ', �������������µĹ�����');
define('TEXT_BANNERS_IMAGE', 'ͼ��:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', �����������뱾���ļ�');
define('TEXT_BANNERS_IMAGE_TARGET', 'ͼ��Ŀ�� (���浽):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>ͼ���ڷ������ϵ��Ƽ�·��:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>˵��: HTML��治�Ƶ������</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML�ı�:');
define('TEXT_BANNERS_ALL_SORT_ORDER', '����˳�� - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>˵��: banners_box_all�߿����趨��˳����ʾ���</strong>');
define('TEXT_BANNERS_EXPIRES_ON', '��Ч��:');
define('TEXT_BANNERS_OR_AT', ', ����');
define('TEXT_BANNERS_IMPRESSIONS', '�ۿ�/�鿴.');
define('TEXT_BANNERS_SCHEDULED_AT', '��Ч����:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>���ע��:</b><ul><li>��治��ͬʱʹ��ͼ���HTML�ı�.</li><li>HTML�ı�������ͼ��</li><li>HTML�ı�����¼�����ֻ��¼��ʾ����</li><li>��Ҫ�ڰ�ȫҳ������ʾ����·��ͼ��</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>ͼ��ע��:</b><ul><li>�ϴ�Ŀ¼����Ҫ���ʵ��û�Ȩ��(��д)����!</li><li>�����û���ϴ�ͼ�񵽷�����, ��Ҫ��д \'���浽\' �ֶ� (����, ��ʹ�ñ��� (��������) ͼ��).</li><li>�� \'���浽\' �ֶα�����һ����/��β������Ŀ¼ (��, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>��Ч��ע��:</b><ul><li>ֻ�з��������ֶ��е�һ��</li><li>�����治���Զ�ʧЧ, ��ô��Ҫ����Щ�ֶ�</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>��Ч����ע��:</b><ul><li>����趨����Ч����, �ù�潫����Ӧ���ڼ���.</li><li>���й������Ч����ǰ���Ϊ[�ȴ���], ���ں󽫱��Ϊ[ʹ����].</li></ul>');
define('TEXT_BANNERS_STATUS', '���״̬:');
define('TEXT_BANNERS_ACTIVE', 'ʹ����');
define('TEXT_BANNERS_NOT_ACTIVE', '�ȴ���');
define('TEXT_INFO_BANNER_STATUS', '<strong>��ʾ:</strong> ���״̬������Ч���ں���ʾ����');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', '����´���');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>��ʾ:</strong> ��潫���´��ڴ�');
define('TEXT_BANNERS_ON_SSL', '��SSL�Ĺ��');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>��ʾ:</strong> �������������ʾ�ڰ�ȫҳ��');

define('TEXT_BANNERS_DATE_ADDED', '��������:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '��Ч����: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '��Ч��: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '��Ч��: <b>%s</b> ��ʾ');
define('TEXT_BANNERS_STATUS_CHANGE', '״̬�ı�: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Last 3 Days');
define('TEXT_BANNERS_BANNER_VIEWS', '���鿴');
define('TEXT_BANNERS_BANNER_CLICKS', '�����');

define('TEXT_INFO_DELETE_INTRO', '��ȷ��Ҫɾ���ù����?');
define('TEXT_INFO_DELETE_IMAGE', 'ɾ�����ͼ��');

define('SUCCESS_BANNER_INSERTED', '�ɹ�: ���������.');
define('SUCCESS_BANNER_UPDATED', '�ɹ�: ��������.');
define('SUCCESS_BANNER_REMOVED', '�ɹ�: ���ɾ����.');
define('SUCCESS_BANNER_STATUS_UPDATED', '�ɹ�: ���״̬������.');

define('ERROR_BANNER_TITLE_REQUIRED', '����: ��Ҫ�������.');
define('ERROR_BANNER_GROUP_REQUIRED', '����: ��Ҫ�����.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '����: Ŀ��Ŀ¼������: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '����: Ŀ��Ŀ¼����д: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '����: ͼ�񲻴���.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '����: ����ɾ��ͼ��.');
define('ERROR_UNKNOWN_STATUS_FLAG', '����: δ֪״̬���.');
define('ERROR_BANNER_IMAGE_REQUIRED', '����: ��Ҫ���ͼ��.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '����: ͼ��Ŀ¼������. �뽨��һ��ͼ��Ŀ¼ ����: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '����: ͼ��Ŀ¼����д. λ��: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', '��ʾSSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', '�´���');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','���´��� - ����');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','���´��� - �ر�');
define('IMAGE_ICON_BANNER_ON_SSL_ON','�ڰ�ȫҳ����ʾ - ����');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','�ڰ�ȫҳ����ʾ - �ر�');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', '�ɹ�: ���´����д򿪵Ĺ��״̬�Ѹ��¡�');
define('SUCCESS_BANNER_ON_SSL_UPDATED', '�ɹ�: �ڰ�ȫҳ������ʾ�Ĺ��״̬�Ѹ��¡�');
?>