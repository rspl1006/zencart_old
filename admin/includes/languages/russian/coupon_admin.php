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



define('TOP_BAR_TITLE', 'Статистика');

define('HEADING_TITLE', 'Дисконтные карточки');

define('HEADING_TITLE_STATUS', 'Статус : ');

define('TEXT_CUSTOMER', 'Клиент:');

define('TEXT_COUPON', 'Название карточки:');

define('TEXT_COUPON_ALL', 'Все карточки');

define('TEXT_COUPON_ACTIVE', 'Активные карточки');

define('TEXT_COUPON_INACTIVE', 'Неактивные карточки');

define('TEXT_SUBJECT', 'Тема:');

define('TEXT_UNLIMITED', 'Неограничено');

define('TEXT_FROM', 'От:');

define('TEXT_FREE_SHIPPING', 'Бесплатная отгрузка');

define('TEXT_MESSAGE', 'Сообщение:');

define('TEXT_RICH_TEXT_MESSAGE','RTF сообщение:');

define('TEXT_SELECT_CUSTOMER', 'Выберите клиента');

define('TEXT_ALL_CUSTOMERS', 'Все клиенты');

define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписчикам на рассылку');

define('TEXT_CONFIRM_DELETE', 'Вы точно хотите удалить даную карточку?');

define('TEXT_SEE_RESTRICT', 'Ограничения применены');



define('TEXT_COUPON_ANNOUNCE','Мы рады предложить вам карточку магазина');



define('TEXT_TO_REDEEM', 'Вы можете использовать её во время процесса контроля заказа. Просто введите код в предложенную форму, и нажмите на кнопку продолжения');

define('TEXT_IN_CASE', ' в случае если у вас какие то проблемы. ');

define('TEXT_VOUCHER_IS', 'Код карточки ');

define('TEXT_REMEMBER', 'Не потеряйте код карточки');

define('TEXT_VISIT', 'Посетите нас %s');

define('TEXT_ENTER_CODE', ' и введите код ');



define('TABLE_HEADING_ACTION', 'Действие');



define('CUSTOMER_ID', 'ID клиента');

define('CUSTOMER_NAME', 'Имя клиента');

define('REDEEM_DATE', 'Дата предложения');

define('IP_ADDRESS', 'IP адрес');



define('TEXT_REDEMPTIONS', 'Предложения');

define('TEXT_REDEMPTIONS_TOTAL', 'В общем');

define('TEXT_REDEMPTIONS_CUSTOMER', 'Для данного клиента');

define('TEXT_NO_FREE_SHIPPING', 'Нет бесплатной отгрузки');



define('NOTICE_EMAIL_SENT_TO', 'Внимание: Email отправлен: %s');

define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Не был выбран клиент');

define('ERROR_NO_SUBJECT', 'Ошибка: Не была введена тема');



define('COUPON_NAME', 'Название карточки');

//define('COUPON_VALUE', 'Coupon Value');

define('COUPON_AMOUNT', 'Количество карточек');

define('COUPON_CODE', 'Код карточки');

define('COUPON_STARTDATE', 'Дата начала');

define('COUPON_FINISHDATE', 'Дата окончания');

define('COUPON_FREE_SHIP', 'Бесплатная отгрузка');

define('COUPON_DESC', 'Описание карточки <br />(видимое клиентом)');

define('COUPON_MIN_ORDER', 'Минимальный заказ на карточку');

define('COUPON_USES_COUPON', 'Использование карточки');

define('COUPON_USES_USER', 'Использование клиентомr');

define('COUPON_PRODUCTS', 'Утвержденный список товара');

define('COUPON_CATEGORIES', 'Утвержденный список категорий');

define('VOUCHER_NUMBER_USED', 'Количество использований');

define('DATE_CREATED', 'Дата создания');

define('DATE_MODIFIED', 'Дата изменения');

define('TEXT_HEADING_NEW_COUPON', 'Создать новую карточку');

define('TEXT_NEW_INTRO', 'Введите информацию о новой карточке<br />');
define('COUPON_ZONE_RESTRICTION', 'Coupon Zone Restriction: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Coupon Zone Restriction are optional.');

define('ERROR_NO_COUPON_AMOUNT', 'Не введено количество карточек');

define('ERROR_NO_COUPON_NAME', 'Не введено название карточки ');

define('ERROR_COUPON_EXISTS', 'Карточка с таким кодом уже существует');





define('COUPON_NAME_HELP', 'Короткое название для карточки');
define('COUPON_AMOUNT_HELP', 'Значение скидки для данной карточки, либо установите или добавьте % в конце процента скидки');
define('COUPON_CODE_HELP', 'Вы можете ввести ваш код здесь, либо оставить пустым для автогенерирования');
define('COUPON_STARTDATE_HELP', 'Дата карточки будет верна от');
define('COUPON_FINISHDATE_HELP', 'Дата окончания действия');
define('COUPON_FREE_SHIP_HELP', 'Карточка дает возможность бесплатной отгрузки');
define('COUPON_DESC_HELP', 'Описание карточки для клиента');
define('COUPON_MIN_ORDER_HELP', 'Минимальное значение заказа перед началом действия карточки');
define('COUPON_USES_COUPON_HELP', 'Максимальное количество раз,когда карточка может быть использована - для неограниченного использования оставьте пустым');
define('COUPON_USES_USER_HELP', 'Максимальное количество раз,когда карточка может быть использована - для неограниченного использования оставьте пустым');
define('COUPON_PRODUCTS_HELP', 'Запятая разделяет список product_ids с которыми работает данная карточка. Оставьте пустым для снятия ограничений');
define('COUPON_CATEGORIES_HELP', 'Запятая разделяет список cpaths с которыми работает данная карточка, оставьте пустым для снятия ограничений');
define('COUPON_BUTTON_PREVIEW', 'Предпросмотр');
define('COUPON_BUTTON_CONFIRM', 'Подтверждение');
define('COUPON_BUTTON_BACK', 'Назад');


define('COUPON_ACTIVE', 'Статус');

define('COUPON_START_DATE', 'Старт');

define('COUPON_EXPIRE_DATE', 'Финиш');



define('ERROR_DISCOUNT_COUPON_WELCOME', 'Карточка не может быть деактивирована.<br />Попробуйте изменить Пригласительную Карточку для удаления этой');

define('SUCCESS_COUPON_DISABLED', 'Успешно! Карточка была деактивирована ...');

define('TEXT_COUPON_NEW', 'Используйте новый код карточки:');

define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'Внимание! карточка создана ... Копия отмененна для карточки: ');

define('TEXT_CONFIRM_COPY', 'Вы точно хотите копировать данную карточку в другую карточку?');

define('SUCCESS_COUPON_DUPLICATE', 'Успешно! Карточка была продублирована ...<br /><br />Проверьте название карточки и дату ...');

?>