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
//  $Id: products_to_categories.php 1168 2005-04-11 18:49:29Z ajeh $
//

define('HEADING_TITLE','���ӵ�����������Ʒ���� ...');
define('HEADING_TITLE2','����/��Ʒ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', '�ɹ����ӵĺ�����Ʒ�ķ��� ...');

define('TABLE_HEADING_PRODUCTS_ID', '��Ʒ���');
define('TABLE_HEADING_PRODUCT', '��Ʒ����');
define('TABLE_HEADING_MODEL', '�ͺ�');
define('TABLE_HEADING_ACTION', '����');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', '�༭��Ʒ�����������');
define('TEXT_PRODUCTS_ID', '��Ʒ���# ');
define('TEXT_PRODUCTS_NAME', '��Ʒ: ');
define('TEXT_PRODUCTS_MODEL', '�ͺ�: ');
define('TEXT_PRODUCTS_PRICE', '�۸�: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', '���·�������');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'ѡ��Ҫ���ӵ���Ʒ');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', '�������ӵ��������Ʒ: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Ŀǰ���ӵķ�����: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'����Ʒ�������������Ϊ���ܷ���ؽ���ǰ��Ʒ���ӵ�һ����������.<br />��Ҳ���Խ�һ�������µ�������Ʒ���ӵ���һ�������У�����ɾ��һ�������е�������Ʒ������Ʒ������һ��������. (��������˵��)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER', '���ڼ۸�ԭ��, ÿ����Ʒ���������ӵ����ٸ����࣬����Ҫ��һ�������ࡣ�����ͨ��������������˵����á�<br />����ƷĿǰ���ӵ�������ķ��ࡣҪ�����µķ��ֻ࣬���ڷ�������ǰ��档Ҫɾ�����еķ������ӣ�ֻҪȥ����������ǰ�Ĳ�����ˡ�<br />��������Ҫ���ӵķ��඼ѡ��ú󣬵��' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />');

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'ȫ�ַ��������޸ļ�������������');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>����:</strong> ���޸����ӷ���ǰ������������������');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>����һ��������������Ʒ����һ��������Ϊ������Ʒ ...</strong><br />����: ʹ�� 8 �� 22 ���������з���8�е���Ʒ������22��');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'ѡ�������������Ʒ: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '���ӵ�����: ');
define('BUTTON_COPY_CATEGORY_LINKED', '������ƷΪ���� ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', '����: ��Ʒ�����ã��������ڸ÷��� ...');
define('WARNING_COPY_LINKED', '����: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������Ʒ����ʼ���಻��ȷ: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������Ʒ��Ŀ����಻��ȷ: ');
define('WARNING_NO_CATEGORIES_ID', '����: û��ѡ����� ... δ�޸�');
define('SUCCESS_COPY_LINKED', '�ɹ�������ƷΪ���� ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������Ʒ����ʼ������Ч: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������Ʒ��Ŀ�������Ч: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>����: δ���޸ģ���Ʒ�Ѿ����� ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>ɾ��һ�����������ӵ���һ�������е�������Ʒ ...</strong><br />����: ʹ�� 8 �� 22 ��ɾ������22���������ӵ�����8�е���Ʒ����');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'ѡ�������������Ʒ: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'ɾ�������������: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'ɾ����Ʒ������ ');

define('WARNING_REMOVE_LINKED', '����: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'ɾ��������Ʒ����ʼ���಻��ȷ: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'ɾ��������Ʒ��Ŀ����಻��ȷ: ');
define('SUCCESS_REMOVE_LINKED', '�ɹ�ɾ����Ʒ���� ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'ɾ��������Ʒ����ʼ������Ч: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'ɾ��������Ʒ��Ŀ�������Ч: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>����: δ���޸ģ�û��������Ʒ ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>����: �������ų�ͻ!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>��������Ϊ: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', '��ʾ: ���������ڼ۸�Ŀ�ģ���Ʒ����Ӱ��������Ʒ�ļ۸�, ����: ����<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Ϊ�������ô���, ����ת����ͻ�ĵ�һ����Ʒ. �������趨�������ţ�����Ϊ��Ҫɾ���ķ����е���Ʒ�������ţ�Ȼ�����ԡ� �����г�ͻ�������󣬾Ϳ�����ȫɾ���������.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' ��ͻ����ʼ����: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' ��ͻ��Ŀ�����: ');
define('SUCCESS_MASTER_CATEGORIES_ID', '�ɹ�������Ʒ����������� ...');
define('WARNING_MASTER_CATEGORIES_ID', '����: û������������!');

define('TEXT_PRODUCTS_ID_INVALID', '����: ��Ʒ�����Ч��ûѡ����Ʒ');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '��ʾ: ����һ��������������Ʒ����һ�����࣬����Ҫ������Ʒ��š�<br />����, ���������Ч����Ʒ��ţ�����ʾ���п��õķ��༰��š�');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>������ѡ������������Ʒ����������ʹ�ø÷��� ...</strong><br />����: ���÷���22�����÷���22��������Ʒʹ�÷���22Ϊ����Ʒ���');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '����������Ʒ�����������ڷ���: ');
define('BUTTON_RESET_CATEGORY_MASTER', '������������');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '����: ѡ��ķ�����Ч ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '�ɹ�����������Ʒ����������Ϊ����: ');

?>