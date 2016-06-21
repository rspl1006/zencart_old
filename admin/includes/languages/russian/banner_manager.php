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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//

define('HEADING_TITLE', '�������� ��������');

define('TABLE_HEADING_BANNERS', '�������');
define('TABLE_HEADING_GROUPS', '������');
define('TABLE_HEADING_STATISTICS', '���������� �����');
define('TABLE_HEADING_STATUS', '������');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','����� ����');
define('TABLE_HEADING_BANNER_ON_SSL', '���������� SSL');
define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_BANNER_SORT_ORDER', '�������<br />����������');

define('TEXT_BANNERS_TITLE', '�������� �������:');
define('TEXT_BANNERS_URL', 'URL �������:');
define('TEXT_BANNERS_GROUP', '������ �������:');
define('TEXT_BANNERS_NEW_GROUP', ', ��� �������� ����� ������ ����');
define('TEXT_BANNERS_IMAGE', '�����������:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', ��� ���������� ��������� ���� ����');
define('TEXT_BANNERS_IMAGE_TARGET', '����� � ������������:');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>����� � ������� ��� ��������:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>��������: HTML �� ������������ ������� ������</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML �����:');
define('TEXT_BANNERS_ALL_SORT_ORDER', '������� ���������� - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>��������: banners_box_all sidebox ����� ���������� ������� � ����� ������������ ������� ����������</strong>');
define('TEXT_BANNERS_EXPIRES_ON', '���� ��������� ������:');
define('TEXT_BANNERS_OR_AT', ', ��� ��/��');
define('TEXT_BANNERS_IMPRESSIONS', '����������');
define('TEXT_BANNERS_SCHEDULED_AT', '������ ������:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>��������� � ��������:</b><ul><li>����������� ����������� ��� HTML ����� ��� ������� - �� �� ��� ������.</li><li>HTML ����� ����� ������������ ��� ������������</li><li>HTML �� ������������ �����,�� ������������ ������</li><li>������� � ���������� URLs ����������� �� ����� ����������� �� ������������� ���������</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>��������� � ������������:</b><ul><li>���������� � ��������� ������ ����� ���������� ����� �� ������ � ������!</li><li>�� ���������� \'����� � ������������\' ���� �� �� ���������� ����������� �� ������');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>��������� �� �������:</b><ul><li>������ ���� �� ���� ����� ������ ���� ���������</li><li>���� ������ �� ������ ���������� �������������,�������� ���� �������</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>��������� � ����������:</b><ul><li>���� ������ ������ ����������,������ �������� �� ��������� ���� ���� ������.</li><li>��� ������� ������� �������� �� ��������� �������� �����������,����� ������ ������ ��� ������������� ����� �������� ��� ��������.</li></ul>');
define('TEXT_BANNERS_STATUS', '������ �������:');
define('TEXT_BANNERS_ACTIVE', '��������');
define('TEXT_BANNERS_NOT_ACTIVE', '�� ��������');
define('TEXT_INFO_BANNER_STATUS', '<strong>��������:</strong> ������ ������� ����� ���� �������� �� ����������� ���������� ��� ��������� ������');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', '������ � ����� ����');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>��������:</strong> ������ ����� ������ � ����� ����');
define('TEXT_BANNERS_ON_SSL', '������ �� SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>��������:</strong> ������ ����� ����������� �� ������������� ��������� ��� ������');

define('TEXT_BANNERS_DATE_ADDED', '���� ����������:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '������ ������: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '��������� ������: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '��������� ������ �����: <b>%s</b> �������');
define('TEXT_BANNERS_STATUS_CHANGE', '�������� ������: %s');

define('TEXT_BANNERS_DATA', '�<br>�<br>�<br>�<br>�');
define('TEXT_BANNERS_LAST_3_DAYS', '��������� 3 ���');
define('TEXT_BANNERS_BANNER_VIEWS', '���������� �������');
define('TEXT_BANNERS_BANNER_CLICKS', '������ �� �������');

define('TEXT_INFO_DELETE_INTRO', '�� ����� ������ ������� ������ ������?');
define('TEXT_INFO_DELETE_IMAGE', '������� ����������� �������');

define('SUCCESS_BANNER_INSERTED', '�������: ������ ��� ������');
define('SUCCESS_BANNER_UPDATED', '�������: ������ ��� ��������');
define('SUCCESS_BANNER_REMOVED', '�������: ������ ��� ������');
define('SUCCESS_BANNER_STATUS_UPDATED', '�������: ������ ������� ��� ��������');

define('ERROR_BANNER_TITLE_REQUIRED', '������: ���������� �������� �������');
define('ERROR_BANNER_GROUP_REQUIRED', '������: ���������� ������ �������');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '������: ����� � ������������� �� �������: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '������: ����� � ������������� �� ����� ���� �� ������: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '������: ����������� �� �������');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '������: ����������� �� ����� ���� �������');
define('ERROR_UNKNOWN_STATUS_FLAG', '������: ����������� ���� �������');
define('ERROR_BANNER_IMAGE_REQUIRED', '������: ���������� ����������� �������');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '������: ���������� � ������������� �� �������,�������� � ��������: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '������: ���������� � ������������� �� ����� ���� �� ������. ��� �����������: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', '�������� SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', '����� ����');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','������� ����� ���� - ��������');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','������� ����� ���� - ���������');
define('IMAGE_ICON_BANNER_ON_SSL_ON','���������� �� ������������� ��������� - ��������');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','���������� �� ������������� ��������� - ���������');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', '�������: ������ ������� ��� �������� � ����� ���� ��������');
define('SUCCESS_BANNER_ON_SSL_UPDATED', '�������: ������ ������� ��� ������ �� ������������� ��������� ��������');
?>