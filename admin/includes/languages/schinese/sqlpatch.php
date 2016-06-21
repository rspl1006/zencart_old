<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: sqlpatch.php 4138 2006-08-14 05:56:44Z drbyte $
//
  define('HEADING_TITLE','SQL����');
  define('HEADING_WARNING','�뱸�����ݿ���ִ�����½ű�');
  define('HEADING_WARNING2','�������װ����ģ��, �����и���.<br />Zen Cart&trade; �����������ű��İ�ȫ��. ���Ժ��������������ݿ�!');
  define('HEADING_WARNING_INSTALLSCRIPTS', '˵��: ��Ҫ����������Zen Cart���ݿ������ű���<br />���ϴ��µ�<strong>zc_install</strong>Ŀ¼��Ȼ��������');
  define('TEXT_QUERY_RESULTS','ִ�н��:');
  define('TEXT_ENTER_QUERY_STRING','����Ҫִ�е����:&nbsp;&nbsp;<br /><br />�� ; �Ž�β');
  define('TEXT_QUERY_FILENAME','�ϴ��ļ�:');
  define('ERROR_NOTHING_TO_DO','����: û��ִ�в��� - û��ָ��ִ��������ִ���ļ�.');
  define('TEXT_CLOSE_WINDOW', '[ �رմ��� ]');
  define('SQLPATCH_HELP_TEXT','��SQL�������ڰ�װϵͳ����, ֱ��ճ��SQL���뵽�ı���. '.
                              '�����ϴ�(.SQL) �ű��ļ�.<br />' .
                              '�����ù���ʹ�õĽű��ļ�ʱ, ��Ҫ�������ݱ�ǰ׺, �ù��߻�' .
                              '�Զ����뵱ǰ���ݿ��ǰ׺, ���������̵�� ' .
                              'admin/includes/configure.php �ļ��� (DB_PREFIX ����).<br /><br />' .
                              '������ϴ������������������俪ͷ, ��Ϊ��д:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (just a single table)</li><li>UPDATE IGNORE (just a single table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>�߼�ģʽ</h2>���·������ڸ����ӵĴ���:<br />
To run some blocks of code together so that they are treated as one command by MySQL, you need the "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" value set.  The parser will then treat X number of commands as one.<br />
If you are running this file thru phpMyAdmin or equivalent, the "#NEXT..." comment is ignored, and the script will process fine.<br />
<br /><strong>��ʾ: </strong>SELECT.... FROM... and LEFT JOIN statements need the "FROM" or "LEFT JOIN" to be on a line by itself in order for the parse script to add the table prefix.<br /><br />
<em><strong>����:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','��%s�Ѿ����ڣ��޷�����');
  define('REASON_TABLE_DOESNT_EXIST','��%s�����ڣ��޷�ɾ��.');
  define('REASON_TABLE_NOT_FOUND','��%s�����ڣ��޷�ִ��.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','����ֵ "%s" �Ѿ����ڣ��޷�����');
  define('REASON_COLUMN_ALREADY_EXISTS','��%s�Ѿ����ڣ��޷����.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','��%s�����ڣ��޷�ɾ��.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','��%s�����ڣ��޷��޸�.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','prod-type-layout configuration_key "%s" �Ѿ����ڣ��޷�����');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','����%s�ڱ�%s�����ڣ��޷�ɾ��.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','��%s�����ؼ��ֲ����ڣ��޷�ɾ��.');
  define('REASON_INDEX_ALREADY_EXISTS','����%s�ڱ�%s�Ѵ��ڣ��޷����.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','��%s���ؼ����Ѿ����ڣ��޷����.');
  define('REASON_NO_PRIVILEGES','�û� '.DB_SERVER_USERNAME.'@'.DB_SERVER.' û��%sȨ�޷������ݿ� '.DB_DATABASE.'.');

?>