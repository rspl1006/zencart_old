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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', '����ҳ�����');
define('TABLE_HEADING_PAGES', 'ҳü����');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_VSORT_ORDER', '�߿�˳��');
define('TABLE_HEADING_HSORT_ORDER', 'ҳ��˳��');
define('TEXT_PAGES_TITLE', 'ҳ�����:');
define('TEXT_PAGES_HTML_TEXT', 'HTML����:');
define('TABLE_HEADING_DATE_ADDED', '��������:');
define('TEXT_PAGES_STATUS_CHANGE', '״̬�ı�: %s');
define('TEXT_INFO_DELETE_INTRO', '��ȷ��Ҫɾ����ҳ��?');
define('SUCCESS_PAGE_INSERTED', '�ɹ�: ��ҳ�Ѿ�����.');
define('SUCCESS_PAGE_UPDATED', '�ɹ�: ��ҳ�Ѿ�����.');
define('SUCCESS_PAGE_REMOVED', '�ɹ�: ��ҳ�Ѿ�ɾ��.');
define('SUCCESS_PAGE_STATUS_UPDATED', '�ɹ�: ��ҳ״̬�Ѿ�����.');
define('ERROR_PAGE_TITLE_REQUIRED', '����: ��Ҫҳ�����.');
define('ERROR_UNKNOWN_STATUS_FLAG', '����: δ֪״̬��ǩ.');
define('ERROR_MULTIPLE_HTML_URL', '����: ÿ������ֻ������һ������ ...<br />ֻҪ��������һ��: HTML���� -��- �ڲ�����URL -��- �ⲿ����URL');

define('TABLE_HEADING_ID', '�˺�');
define('TABLE_HEADING_STATUS_HEADER', 'ҳü:');
define('TABLE_HEADING_STATUS_SIDEBOX', '�߿�:');
define('TABLE_HEADING_STATUS_FOOTER', 'ҳ��:');
define('TABLE_HEADING_STATUS_TOC', 'TOC:');
define('TABLE_HEADING_CHAPTER', '�½�:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', '���´���:');
define('TABLE_HEADING_PAGE_IS_SSL', 'ҳ����SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>ҳ)');
define('IMAGE_NEW_PAGE', '��ҳ��');
define('TEXT_INFO_PAGE_IMAGE', 'ͼ��');
define('TEXT_INFO_CURRENT_IMAGE', '��ǰͼ��:');
define('TEXT_INFO_PAGES_ID', '�˺�: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'ѡ��һ��ҳ�� ...');

define('TEXT_HEADER_SORT_ORDER', '����:');
define('TEXT_SIDEBOX_SORT_ORDER', '����:');
define('TEXT_FOOTER_SORT_ORDER', '����:');
define('TEXT_TOC_SORT_ORDER', '����:');
define('TEXT_CHAPTER', 'ǰ/�� �½�:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', '�½�:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'ҳü�������ڱ༭ҳ��ʱ����ҳü��˳������Ӧ����0���Ա�ʹ��ҳ���б��г���');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '�߿��������ڴ�ֱ�����ϵ�˳������Ӧ����0���Ա����ڴ�ֱ�б��г��֣�����Ҳ������HTML�ı�');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'ҳ���������ڱ༭ҳ��ʱ����ҳ�ŵ�˳������Ӧ����0���Ա�ʹ��ҳ���б��г���');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC�������ڱ༭ҳ��ʱ����ÿҳ��ͬ������ˮƽ������ߴ�ֱ��������Ӧ����0���Ա�ʹҳ�����б��г���');
define('TEXT_CHAPTER_EXPLAIN', '�½ں�TOC����һ����ʾǰ/�����ӣ�TOC�е����Ӱ���ҳ����룬��ʾ��TOC������');

define('TEXT_ALT_URL', '�ڲ����ӵ�ַ:');
define('TEXT_ALT_URL_EXPLAIN', '����HTML���ݣ������ڲ����ӵ�ַ<br />���۵�����ʾ��: index.php?main_page=reviews<br />�ҵ��˺ŵ�����ʾ��: index.php?main_page=account ������ΪSSL');

define('TEXT_ALT_URL_EXTERNAL', '�ⲿ���ӵ�ַ:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', '����HTML���ݣ������ⲿ���ӵ�ַ<br />�ⲿ����ʾ��: http://www.zen-cart.cn');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', '��ʾ˳��: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', '�½�/TOC');
define('TEXT_SORT_HEADER_TITLE', 'ҳü');
define('TEXT_SORT_SIDEBOX_TITLE', '�߿�');
define('TEXT_SORT_FOOTER_TITLE', 'ҳ��');
define('TEXT_SORT_PAGE_TITLE', 'ҳ�����');
define('TEXT_SORT_PAGE_ID_TITLE', 'ҳ��ID, ����');

define('TEXT_PAGE_TITLE', '����:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>����: �����Ӷ���</strong>');
?>
