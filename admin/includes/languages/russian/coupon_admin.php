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

//  $Id: coupon_admin.php 3665 2006-05-28 15:01:11Z ajeh $

//



define('TOP_BAR_TITLE', '����������');

define('HEADING_TITLE', '���������� ��������');

define('HEADING_TITLE_STATUS', '������ : ');

define('TEXT_CUSTOMER', '������:');

define('TEXT_COUPON', '�������� ��������:');

define('TEXT_COUPON_ALL', '��� ��������');

define('TEXT_COUPON_ACTIVE', '�������� ��������');

define('TEXT_COUPON_INACTIVE', '���������� ��������');

define('TEXT_SUBJECT', '����:');

define('TEXT_UNLIMITED', '������������');

define('TEXT_FROM', '��:');

define('TEXT_FREE_SHIPPING', '���������� ��������');

define('TEXT_MESSAGE', '���������:');

define('TEXT_RICH_TEXT_MESSAGE','RTF ���������:');

define('TEXT_SELECT_CUSTOMER', '�������� �������');

define('TEXT_ALL_CUSTOMERS', '��� �������');

define('TEXT_NEWSLETTER_CUSTOMERS', '���� ����������� �� ��������');

define('TEXT_CONFIRM_DELETE', '�� ����� ������ ������� ����� ��������?');

define('TEXT_SEE_RESTRICT', '����������� ���������');



define('TEXT_COUPON_ANNOUNCE','�� ���� ���������� ��� �������� ��������');



define('TEXT_TO_REDEEM', '�� ������ ������������ � �� ����� �������� �������� ������. ������ ������� ��� � ������������ �����, � ������� �� ������ �����������');

define('TEXT_IN_CASE', ' � ������ ���� � ��� ����� �� ��������. ');

define('TEXT_VOUCHER_IS', '��� �������� ');

define('TEXT_REMEMBER', '�� ��������� ��� ��������');

define('TEXT_VISIT', '�������� ��� %s');

define('TEXT_ENTER_CODE', ' � ������� ��� ');



define('TABLE_HEADING_ACTION', '��������');



define('CUSTOMER_ID', 'ID �������');

define('CUSTOMER_NAME', '��� �������');

define('REDEEM_DATE', '���� �����������');

define('IP_ADDRESS', 'IP �����');



define('TEXT_REDEMPTIONS', '�����������');

define('TEXT_REDEMPTIONS_TOTAL', '� �����');

define('TEXT_REDEMPTIONS_CUSTOMER', '��� ������� �������');

define('TEXT_NO_FREE_SHIPPING', '��� ���������� ��������');



define('NOTICE_EMAIL_SENT_TO', '��������: Email ���������: %s');

define('ERROR_NO_CUSTOMER_SELECTED', '������: �� ��� ������ ������');

define('ERROR_NO_SUBJECT', '������: �� ���� ������� ����');



define('COUPON_NAME', '�������� ��������');

//define('COUPON_VALUE', 'Coupon Value');

define('COUPON_AMOUNT', '���������� ��������');

define('COUPON_CODE', '��� ��������');

define('COUPON_STARTDATE', '���� ������');

define('COUPON_FINISHDATE', '���� ���������');

define('COUPON_FREE_SHIP', '���������� ��������');

define('COUPON_DESC', '�������� �������� <br />(������� ��������)');

define('COUPON_MIN_ORDER', '����������� ����� �� ��������');

define('COUPON_USES_COUPON', '������������� ��������');

define('COUPON_USES_USER', '������������� ��������r');

define('COUPON_PRODUCTS', '������������ ������ ������');

define('COUPON_CATEGORIES', '������������ ������ ���������');

define('VOUCHER_NUMBER_USED', '���������� �������������');

define('DATE_CREATED', '���� ��������');

define('DATE_MODIFIED', '���� ���������');

define('TEXT_HEADING_NEW_COUPON', '������� ����� ��������');

define('TEXT_NEW_INTRO', '������� ���������� � ����� ��������<br />');
define('COUPON_ZONE_RESTRICTION', 'Coupon Zone Restriction: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Coupon Zone Restriction are optional.');

define('ERROR_NO_COUPON_AMOUNT', '�� ������� ���������� ��������');

define('ERROR_NO_COUPON_NAME', '�� ������� �������� �������� ');

define('ERROR_COUPON_EXISTS', '�������� � ����� ����� ��� ����������');





define('COUPON_NAME_HELP', '�������� �������� ��� ��������');
define('COUPON_AMOUNT_HELP', '�������� ������ ��� ������ ��������, ���� ���������� ��� �������� % � ����� �������� ������');
define('COUPON_CODE_HELP', '�� ������ ������ ��� ��� �����, ���� �������� ������ ��� �����������������');
define('COUPON_STARTDATE_HELP', '���� �������� ����� ����� ��');
define('COUPON_FINISHDATE_HELP', '���� ��������� ��������');
define('COUPON_FREE_SHIP_HELP', '�������� ���� ����������� ���������� ��������');
define('COUPON_DESC_HELP', '�������� �������� ��� �������');
define('COUPON_MIN_ORDER_HELP', '����������� �������� ������ ����� ������� �������� ��������');
define('COUPON_USES_COUPON_HELP', '������������ ���������� ���,����� �������� ����� ���� ������������ - ��� ��������������� ������������� �������� ������');
define('COUPON_USES_USER_HELP', '������������ ���������� ���,����� �������� ����� ���� ������������ - ��� ��������������� ������������� �������� ������');
define('COUPON_PRODUCTS_HELP', '������� ��������� ������ product_ids � �������� �������� ������ ��������. �������� ������ ��� ������ �����������');
define('COUPON_CATEGORIES_HELP', '������� ��������� ������ cpaths � �������� �������� ������ ��������, �������� ������ ��� ������ �����������');
define('COUPON_BUTTON_PREVIEW', '������������');
define('COUPON_BUTTON_CONFIRM', '�������������');
define('COUPON_BUTTON_BACK', '�����');


define('COUPON_ACTIVE', '������');

define('COUPON_START_DATE', '�����');

define('COUPON_EXPIRE_DATE', '�����');



define('ERROR_DISCOUNT_COUPON_WELCOME', '�������� �� ����� ���� ��������������.<br />���������� �������� ��������������� �������� ��� �������� ����');

define('SUCCESS_COUPON_DISABLED', '�������! �������� ���� �������������� ...');

define('TEXT_COUPON_NEW', '����������� ����� ��� ��������:');

define('ERROR_DISCOUNT_COUPON_DUPLICATE', '��������! �������� ������� ... ����� ��������� ��� ��������: ');

define('TEXT_CONFIRM_COPY', '�� ����� ������ ���������� ������ �������� � ������ ��������?');

define('SUCCESS_COUPON_DUPLICATE', '�������! �������� ���� �������������� ...<br /><br />��������� �������� �������� � ���� ...');

?>