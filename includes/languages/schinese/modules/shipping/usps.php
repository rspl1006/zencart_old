<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: usps.php 4867 2006-10-31 09:59:01Z drbyte $
 * Simplified Chinese version   http://www.zen-cart.cn
 */

define('MODULE_SHIPPING_USPS_TEXT_TITLE', '��������USPS');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'Ҫʹ�ø�ģ�飬����Ҫ������������ҳ<br /><br />USPS http://www.uspsprioritymail.com/et_regcert.html ��ע��һ���ʺ�<br /><br />ע��USPS�ϵ�������λ�ǰ�');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'United States Postal Service<br /><br />����Ҫ��USPSע��һ����ҳ�����ʺţ��뵽<a href="http://www.usps.com/webtools/" target="_blank">USPS����վ</a>ע�ᡣ<br /><br />USPSҪ����<strong>ʹ�ð�Ϊ������λ</strong>��' . ((MODULE_SHIPPING_USPS_USERID == 'NONE' || MODULE_SHIPPING_USPS_USERID == '' || MODULE_SHIPPING_USPS_SERVER == 'test') ? '<br /><br /><strong>�½�һ���ʺ���ʹ��USPSʵʱ�˷Ѳ�ѯ</strong><br />
1. <a href="http://www.usps.com/webtools/rate.htm" target="_blank">USPS���Ϻ��˷�ѯ��</a><br />
2. <a href="https://secure.shippingapis.com/registration/" target="_blank">�½�һ��USPS��ҳ�����ʺ�</a><br />
3. ��д���Ŀͻ����ϣ�Ȼ����<br />
4. �����յ�һ���ʼ�����USPS�ʺŵ��û����<br />
5. ��Zen Cart��USPS����ģ����������ҳ���ߵ��û���š�<br />
6. ��绰��USPS 1-800-344-7779�������ǽ������ʺ�ת����ʽ�������ϣ����߷��ʼ��� icustomercare@usps.com, ����������ҳ���ߵ��û���š�<br />
7. ���ǻ��������ȷ���ʼ�����Zen Cartģ������Ϊ��ʽ���á�(�����ǲ���ģʽ)': ''));
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', '�ʵ�');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', '�ӿ�');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', '���');
define('MODULE_SHIPPING_USPS_TEXT_ERROR', '�޷��������ĵ�ַ����USPS�˷ѡ�<br />�����Ҫʹ��USPS����������ϵ���ǡ�<br />(���������ʱ��Ƿ���ȷ)');
define('MODULE_SHIPPING_USPS_TEXT_SERVER_ERROR', '����USPS�˷�ʱ���ִ���<br />�����Ҫʹ��USPS����������ϵ���ǡ�');
define('MODULE_SHIPPING_USPS_TEXT_DAY', '��');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', '��');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', '����');
define('MODULE_SHIPPING_USPS_TEXT_TEST_MODE_NOTICE', '<br /><span class="alert">���ʺŴ��� ����ģʽ����������ʽ����ǰ��������ʾʵ���˷ѡ�(1-800-344-7779)</span>');

?>