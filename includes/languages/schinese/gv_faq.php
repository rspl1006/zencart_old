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
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . '�ʴ�');
define('HEADING_TITLE', TEXT_GV_NAME . '�ʴ�');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">��ι���' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">��η���' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">���ʹ��' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">��ζһ�' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">��ϵ����</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','��ι���' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . '��������Ʒһ������������ʹ��һ���֧����ʽ��<br />�����' . TEXT_GV_NAME . '���������' . TEXT_GV_NAME . '�ʺ��С�<br />�������' . TEXT_GV_NAME . '�ʺ������ʽ𣬹��ﳵ������ʾ�������ӣ�ͨ���������������õ����ʼ�����' . TEXT_GV_NAME . '�����ѡ�');
  break;
  case '2':
define('SUB_HEADING_TITLE','��η���' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Ҫ����' . TEXT_GV_NAME . '���뵽����' . TEXT_GV_NAME . 'ҳ�棬�ڹ��ﳵ�����������ӡ�<br /><br />��������' . TEXT_GV_NAME . 'ʱ����Ҫ��д������Ϣ��<br />����' . TEXT_GV_NAME . '�˵�����<br />����' . TEXT_GV_NAME . '�˵ĵ����ʼ���ַ<br />��ϣ�����͵Ľ��(��ʾ: �����ط���' . TEXT_GV_NAME . '�ʺ��ϵ�ȫ�����)��<br /><br />һ����Żᷢ�����ĵ����ʼ��С���ȷ������ȷ����������Ϣ���ڵ����ʼ�����ǰ�����޸ġ�');
  break;
  case '3':
  define('SUB_HEADING_TITLE','���ʹ��' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','�������' . TEXT_GV_NAME . '�ʺ������ʽ�����������Щ�ʽ���������Ʒ��<br />�ڽ���ʱ������ʾһ������ĶԻ�������Ҫʹ�õ�' . TEXT_GV_NAME . '�ʺ���Ľ�<br />��ע�⣬�������' . TEXT_GV_NAME . '�ʺ����ʽ��㣬��Ҫ����ѡ��һ��֧����ʽ��<br />��������㹻�Ľ����' . TEXT_GV_NAME . '�ʺ������Ȼ��������' . TEXT_GV_NAME . '�ʺ��С�');
  break;
  case '4':
  define('SUB_HEADING_TITLE','��ζһ�' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','�����ͨ�������ʼ��յ�' . TEXT_GV_NAME . '�������ע����˭����' . TEXT_GV_NAME . '�����������Լ�'. TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . 'Ҳд���ʼ��С���ô�ӡ�õ����ʼ��Ա������ο���<br /><br />�������ַ�������' . TEXT_GV_NAME . '��<br /><br />
  1. ��򵥵ķ������ǵ�������ʼ��е����ӡ������ӻ�ת�������̵�Ķ���' . TEXT_GV_NAME . 'ҳ�档����Ҫ����һ���ʺţ�Ȼ��' . TEXT_GV_NAME . '��ŵ�����' . TEXT_GV_NAME . '�ʺ���Ϳ���ʹ�����ˡ�<br /><br />
  2. ���ʵ�ʱ����ѡ��֧����ʽ��ҳ�棬��������' . TEXT_GV_REDEEM . '������' . TEXT_GV_REDEEM . '�󣬵�����ְ�ť�����뾭�˶Ժ���������' . TEXT_GV_NAME . '�ʺţ��Ϳ��������ڱ����깺���ˡ�');
  break;
  case '5':
  define('SUB_HEADING_TITLE','��ϵ����');
  define('SUB_HEADING_TEXT','�й�' . TEXT_GV_NAME . '���κ����ʣ���ͨ�������ʼ�'. STORE_OWNER_EMAIL_ADDRESS . '��ϵ���ǡ����ڵ����ʼ��о�����д����ϸ�����');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','�������ѡ��һ��˵����');

  }

  define('TEXT_GV_REDEEM_INFO', '����������' . TEXT_GV_NAME . '���ִ���: ');
  define('TEXT_GV_REDEEM_ID', '���ִ���:');
?>