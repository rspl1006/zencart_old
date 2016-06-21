<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: sqlpatch.php 3093 2006-03-02 19:50:40Z drbyte $
//
  define('HEADING_TITLE','���������� SQL �������');
  define('HEADING_WARNING','�������� ��������� ����� ���� ������');
  define('HEADING_WARNING2','���� �� ��������� ������� �� �� ������ ��� ������������� �������������� ������������ �������,����������� �������� ��������� ����� ��!');
  define('TEXT_QUERY_RESULTS','���������� �������:');
  define('TEXT_ENTER_QUERY_STRING','������� ������ <br />��� ����������:&nbsp;&nbsp;<br /><br />��������� ���<br />�� ������������� �� ;');
  define('TEXT_ENTER_QUERY_STRING','Enter the query <br />to be executed:&nbsp;&nbsp;<br /><br />Be sure to<br />end with ;');
  define('TEXT_QUERY_FILENAME','��������� ����:');
  define('ERROR_NOTHING_TO_DO','������: �� ������ ���� �������');
  define('TEXT_CLOSE_WINDOW', '[ �������]');
  define('SQLPATCH_HELP_TEXT','����������� SQL ����� �������� ��� ��������� ������� ������ ������� ��� ������� � ��������� ���� '.
                              '�����, ��� �������� ���� � �������� (.SQL).<br />' .
                              '�� ���������� ������� � ���� �������, ��� ��� ���������� ��� ' .
                              '������������� ������� ������ ������� ��� �������� ���� ������, ����������� �� ���������� �������� ' .
                              'admin/includes/configure.php ���� (DB_PREFIX �����������).<br /><br />' .
                              '��������� ������� ��� �������� ����� �������� ������ �� ��������� �����������, � ������ ���� � ������� ����:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (������ ���� �������)</li><li>UPDATE IGNORE (������ ���� �������)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>');
  define('REASON_TABLE_ALREADY_EXISTS','���������� ������� ������� %s ������ ��� ��� ��� �������');
  define('REASON_TABLE_DOESNT_EXIST','���������� ������� ������� %s ������ ��� ��� �� �������');
  define('REASON_TABLE_NOT_FOUND','���������� ��������� ������� %s ������ ��� ��� �� �������');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','���������� �������� configuration_key "%s" ������ ��� �� ��� ����������');
  define('REASON_COLUMN_ALREADY_EXISTS','���������� �������� ������� %s ������ ��� ��� ��� �������');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','���������� ������� ������� %s ������ ��� ��� �� �������');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','���������� �������� ������� %s ������ ��� ��� �� �������');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','���������� �������� configuration_key "%s" ������ ��� �� ��� ����������');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','���������� ������� ������ %s � ������� %s ������ ��� �� ������');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','���������� ������� primary key � ������� %s ������ ��� �� �� ������');
  define('REASON_INDEX_ALREADY_EXISTS','���������� �������� ������ %s � ������� %s ������ ��� �� ��� ������');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','���������� �������� primary key � ������� %s ������ ��� �� ��� ������');
  define('REASON_NO_PRIVILEGES','������������ '.DB_SERVER_USERNAME.'@'.DB_SERVER.' �� ����� %s ���� � ���� ������ '.DB_DATABASE.'.');

?>