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
//  $Id: products_to_categories.php,v 1.2 2006/01/17 20:00:25 gorkau Exp $
//

define('HEADING_TITLE','Administrador de enlace de productos a multiples categor�as ...');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Categor�as con productos que est�n disponibles para enlazar ...');

define('TABLE_HEADING_PRODUCTS_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT', 'Nombre del producto');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_ACTION', 'Actci�n');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'EDITANDO PRODUCTO A INFORMACI�N DE CATEGOR�AS');
define('TEXT_PRODUCTS_ID', 'N� de ID del producto ');
define('TEXT_PRODUCTS_NAME', 'Producto: ');
define('TEXT_PRODUCTS_MODEL', 'Modelo: ');
define('TEXT_PRODUCTS_PRICE', 'Precios: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualizar enlaces de categor�a');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Seleccionar producto a enlazar');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Configurar producto a categor�as de enlaces para: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;N�mero actual de categor�as enlazadas: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'El enlazador de productos a categor�as est� dise�ado para poder enlazar de manera r�pida el producto actual a una o m�s categor�as.<br />Tambi�n puedes enlazar todos los productos de una categor�a a otra categor�a o eliminar un producto enlazado de una categor�a que est� en otra categor�a (ver m�s abajo para instrucciones)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Para poder ser tasados, cada producto requiere una categor�a principal, sin importar a cu�ntas categorias est� enlazado. Esta puede ser configurada a trav�s de la lista desplegable de categor�a principal.<br />
El producto est� enlazado actualmente a la categor�a o categor�as que est�n seleccionadas arriba. Para a�adir una nueva categor�a o categor�as simplemente revise el checkbox al lado del nombre de la categor�a. Para borrar una categor�a o categor�as enlazadas existentes, simplemente deseleccione el checkbox al lado del nombre de la categor�a.<br />
Cuando haya revisado todas las categor�as que quer�a enlazar con este producto, presione el' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Cambioas en categor�a enlazada gobal y reinicio del ID de categor�a principal');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copiar TODOS los productos en una categor�a como productos ENLAZADOS a otra categor�a ...</strong><br />Ejemplo: Usando 8 y 22 quiero enlazar TODOS los productos de la categor�a 8 a la categor�a 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en una categor�a: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Enlace a categor�a: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copiar producto como enlazado ');

define('WARNING_COPY_LINKED', 'ATENCI�N: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a inv�lida desde la que enlazar productos: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a inv�lida a la que enlazar productos: ');
define('SUCCESS_COPY_LINKED', 'Actualizaci�n exitos de productos como enlazados ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a v�lida desde la que enlazar productos: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a v�lida a la que enlazar productos: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>ATENCI�N: No se realizaron cambios, los productos ya estaban enlazados ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Borrar TODOS los productos en una categor�a que est�n ENLAZADOS a otra categor�a ...</strong><br />Ejemplo: Usando 8 y 22 quiero desenlazar TODOS los productos de la categor�a 8 de la categor�a 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Seleccionar todos los productos en una categor�a: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Quitar el enlace del producto a categor�a: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Quitar productos como enlazados ');

define('WARNING_REMOVE_LINKED', 'WARNING: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a inv�lida desde la que quitar productos enlazados: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a inv�lida para quitar productos enlazados: ');
define('SUCCESS_REMOVE_LINKED', 'Borrado exitoso de productos como enlazados ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Categor�a v�lida desde la que quitar productos enlazados: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Categor�a v�lida para quitar productos enlazados: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>ATENCI�N: No se realizaron cambios, no hay productos enlazados ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATENCI�N: ��CONFLICTO DE ID DE CATEGOR�AS PRINCIPALES!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>El ID de categor�a principal es: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTA: La categor�a principal se usa s�lo con objeto de tasas en las que la categor�a del producto afecta el precio en un producto enlazado, ejemplo: Ofetas<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Para arreglar este problema, ha sido redirigido al primer producto conflictivo. Reasinge el ID de categor�a principal para que no siga siendo el ID de la categor�a principal de productos para la categor�a desde la que est� intentando borrar e int�ntelo de nuievo. Cuando todos los conflictos est�n corregidos, podr� completar el borrado que ha requerido.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflicto desde categor�a: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflicto a categor�a: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Actualizaci�n exitosa de enlaces de categor�as a productos ...');
define('WARNING_MASTER_CATEGORIES_ID', 'ATENCI�N: �No se ha configurado una categor�a principal!');

define('TEXT_PRODUCTS_ID_INVALID', 'ATENCI�N: ID DE PRODUCTO INV�LIDO O NO SE SELECCION� UN PRODUCTO');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Nota: Un ID de producto no necesita ser configurado para usar enlace a todos los productos desde una categor�a a otra categor�a<br />Sin embargo, configurar un ID de productos v�lido mostrar� todas las categor�as disponibles y sus n�meros de ID.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Reiniciar TODOS los productos en la categor�a seleccionada para usar la categor�a seleccionada como un nuevo ID de categor�a principal ...</strong><br />Ejemplo: Reiniciar categor�a 22 configurar�a TODOS los productos de la categor�a 22 para que usasen la categor�a 22 como ID de categor�a principal');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reiniciar el ID de categor�a principal para todos los productos en la categor�a: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Reiniciar el ID de categor�a principal');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'ATENCI�N: Categor�a seleccionada no v�lida ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Actualizaci�n exitosa de todos los productos a un nuevo ID de categor�a principal para la categor�a: ');

?>