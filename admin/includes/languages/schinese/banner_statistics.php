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
//  $Id: banner_statistics.php 290 2004-09-15 19:48:26Z wilt $
//

define('HEADING_TITLE', '���ͳ��');

define('TABLE_HEADING_SOURCE', '��Դ');
define('TABLE_HEADING_VIEWS', '�鿴');
define('TABLE_HEADING_CLICKS', '���');

define('TEXT_BANNERS_DATA', '��<br>��<br>��<br>��');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s ����ͳ�Ƶ� %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s ����ͳ�Ƶ� %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s ����ͳ�Ƶ�');

define('STATISTICS_TYPE_DAILY', 'ÿ��');
define('STATISTICS_TYPE_MONTHLY', 'ÿ��');
define('STATISTICS_TYPE_YEARLY', 'ÿ��');

define('TITLE_TYPE', '����:');
define('TITLE_YEAR', '��:');
define('TITLE_MONTH', '��:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '����: ͼ��Ŀ¼������. �뽨��һ��ͼ��Ŀ¼ ����: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '����: ����: ͼ��Ŀ¼����д. λ��: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>