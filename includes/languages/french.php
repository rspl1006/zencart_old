<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: french.php 4807 04-03-2008 04:10:20Z damien $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Traduction par <a href="http://www.zencart-france.com" target="_blank">Zen Cart France</a>.');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'fr_FR.UTF-8');
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="fr"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'requ&ecirc;tes depuis');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Ch&egrave;que cadeau');
  define('TEXT_GV_NAMES','Ch&egrave;ques cadeau');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Code de r&eacute;duction');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Code de r&eacute;duction : ');

// text for gender
  define('MALE', 'Mr.');
  define('FEMALE', 'Mme.');
  define('MALE_ADDRESS', 'Mr.');
  define('FEMALE_ADDRESS', 'Mme.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[plus]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Cat&eacute;gories');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Fabricants');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Nouveaux produits');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nouveaux produits ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'A la une');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Produits &agrave; la une ...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Plus de produits &agrave; la une seront ajout&eacute;s bient&ocirc;t. Veuillez revenir plus tard svp.');

  define('TEXT_NO_ALL_PRODUCTS', 'Plus de produits seront ajout&eacute;s bient&ocirc;t. Veuillez revenir plus tard svp.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Tous les produits ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Recherche');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Recherche avan&ccedil;&eacute;e');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Promotions');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Promotions ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Avis');
  define('BOX_REVIEWS_WRITE_REVIEW', '&Eacute;crire un avis sur ce produit.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Il n\'y a actuellement aucun avis de ce produit.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s sur 5 Etoiles!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Mon panier');
  define('BOX_SHOPPING_CART_EMPTY', 'Votre panier est vide.');
  define('BOX_SHOPPING_CART_DIVIDER', 'ea.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Re-Commande rapide');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Les meilleures ventes');
  define('BOX_HEADING_BESTSELLERS_IN', 'Les meilleures ventes dans<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
   define('BOX_HEADING_NOTIFICATIONS', 'Notifications');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Me notifier des mises &agrave; jour de <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Ne plus me notifier des mises &agrave; jour de <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Infos Fabricant');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Site de %s');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Autres Produits');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Langues');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Devises');

// information box text in sideboxes/information.php
 define('BOX_HEADING_INFORMATION', 'Informations');
  define('BOX_INFORMATION_PRIVACY', 'A Propos de Confidentialité');
  define('BOX_INFORMATION_CONDITIONS', 'Conditions G&eacute;n&eacute;rales');
  define('BOX_INFORMATION_SHIPPING', 'Livraisons &amp; Retours');
  define('BOX_INFORMATION_CONTACT', 'Nous Contacter');
  define('BOX_BBINDEX', 'Forum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'D&eacute;sabonnement Newsletter');

  define('BOX_INFORMATION_SITE_MAP', 'Plan du site');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'En savoir plus');
  define('BOX_INFORMATION_PAGE_2', 'Page 2');
  define('BOX_INFORMATION_PAGE_3', 'Page 3');
  define('BOX_INFORMATION_PAGE_4', 'Page 4');

// tell a friend box text in sideboxes/tell_a_friend.php
    define('BOX_HEADING_TELL_A_FRIEND', 'Informer un Ami');
  define('BOX_TELL_A_FRIEND_TEXT', 'Informer un ami de ce Produit.');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'Ma liste de souhaits');
  define('BOX_WISHLIST_EMPTY', 'Vous n\'avez aucun Produit dans votre Liste de souhaits');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'ajouter &agrave; ma Liste de souhaits');
  define('TEXT_WISHLIST_COUNT', 'Vous avez actuellement %s Produits dans votre Liste de souhaits.');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Affiche <strong>%d</strong> &agrave; <strong>%d</strong> (sur <strong>%d</strong> produits dans votre Wishlist)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Etablir en tant qu\'adresse principale');
  define('NEW_ADDRESS_TITLE', 'Adresse de Facturation');

// javascript messages
  define('JS_ERROR', 'Des erreurs se sont produites pendant la validation de votre formulaire.\n\nMerci de rectifier les points suivants :\n\n');

  define('JS_REVIEW_TEXT', '* Votre commentaire doit comporter un minimum de ' . REVIEW_TEXT_MIN_LENGTH . ' caract&egrave;res.');
  define('JS_REVIEW_RATING', '* Vous devez attribuer une note au produit.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Veuillez indiquer un Mode de paiement pour votre commande.');

  define('JS_ERROR_SUBMITTED', 'Cette commande a d&eacute;j&agrave; &eacute;t&eacute; envoy&eacute;e. Veuillez cliquer sur OK et attendre la fin du traitement en cours.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Veuillez indiquer un Mode de paiement pour votre commande.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Veuillez confirmer votre acceptation de nos Conditions G&eacute;n&eacute;rales concernant cette Commande en cochant la case ci-dessous.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Veuillez confirmer votre acceptation de nos dispositions concernant la Vie priv&eacute;e en cochant la case ci-dessous.');

  define('CATEGORY_COMPANY', 'Entreprise');
  define('CATEGORY_PERSONAL', 'Vos informations personnelles');
  define('CATEGORY_ADDRESS', 'Votre adresse');
  define('CATEGORY_CONTACT', 'Vos coordonn&eacute;es');
  define('CATEGORY_OPTIONS', 'Options');
  define('CATEGORY_PASSWORD', 'Votre Mot de passe');
  define('CATEGORY_LOGIN', 'Identifiant');
  define('PULL_DOWN_DEFAULT', 'Veuillez choisir votre Pays');
  define('PLEASE_SELECT', 'Veuillez choisir ...');
  define('TYPE_BELOW', 'Entrer un choix ci-dessous ...');

  define('ENTRY_COMPANY', 'Soci&eacute;t&eacute; :');
  define('ENTRY_COMPANY_ERROR', 'Veuillez entrer le nom de votre soci&eacute;t&eacute;.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Civilit&eacute; :');
  define('ENTRY_GENDER_ERROR', 'Veuillez choisir une civilit&eacute;.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Pr&eacute;nom :');
  define('ENTRY_FIRST_NAME_ERROR', 'Votre pr&eacute;nom doit comporter un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract&egrave;res. Veuillez rectifier et r&eacute;essayer.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Nom :');
  define('ENTRY_LAST_NAME_ERROR', 'Votre nom doit comporter un minimum de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract&egrave;res. Veuillez rectifier et r&eacute;essayer.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Date de Naissance :');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Votre date de naissance doit &ecirc;tre au format suivant : jj/mm/aaaa (ex: 21/05/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex: 21/05/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Adresse E-mail :');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Votre adresse E-mail doit contenir un minimum de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract&egrave;res. Veuillez rectifier et r&eacute;essayer.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Votre adresse E-mail ne semble pas valide. Veuillez corriger et r&eacute;essayer.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Votre adresse E-mail est d&eacute;j&agrave; pr&eacute;sente dans notre base de donn&eacute;es - veuillez vous connecter avec cette adresse email ou cr&eacute;er un compte diff&eacute;rent avec une autre adresse.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Pseudo pour le Forum :');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Ce Pseudo est d&eacute;j&agrave; utilis&eacute; par un membre ! Veuillez en choisir un autre.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Le Pseudo doit contenir un minimum de ' . ENTRY_NICK_MIN_LENGTH . ' caract&egrave;res. Veuillez rectifier.');
  define('ENTRY_STREET_ADDRESS', 'Adresse :');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Votre Adresse doit contenir un minimum de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Adresse (compl&eacute;ment) :');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Code Postal :');
  define('ENTRY_POST_CODE_ERROR', 'Votre Code Postal doit contenir un minimum de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_POST_CODE_TEXT', '*');
    define('ENTRY_CITY', 'Ville :');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Code de parrainage :');

  define('ENTRY_CITY_ERROR', 'Votre ville doit contenir un minimum de ' . ENTRY_CITY_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Etat/province :');
  define('ENTRY_STATE_ERROR', 'Le champ Etat/province doit contenir un minimum de ' . ENTRY_STATE_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_STATE_ERROR_SELECT', 'Merci de renseigner le champ D&eacute;pt./Prov./Canton.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Veuillez choisir --');
define('ENTRY_COUNTRY', 'Pays :');
  define('ENTRY_COUNTRY_ERROR', 'Vous devez s&eacute;lectionner un Pays dans la liste d&eacute;roulante.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'T&eacute;l&eacute;phone :');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Votre num&eacute;ro de t&eacute;l&eacute;phone doit contenir un minimum de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax :');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'S\'abonner &agrave; notre newsletter :');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Souscrit');
  define('ENTRY_NEWSLETTER_NO', 'Non Souscrit');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Mot de Passe :');
  define('ENTRY_PASSWORD_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmation du mot de passe ne correspond pas &agrave; votre mot de passe.');
  define('ENTRY_PASSWORD_TEXT', '* (au minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmation du mot de passe :');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Mot de passe actuel :');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_PASSWORD_NEW', 'Nouveau mot de passe :');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Votre nouveau mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Votre mot de passe doit &ecirc;tre identique avec la confirmation.');
  define('PASSWORD_HIDDEN', '-- CACHE --');

  define('FORM_REQUIRED_INFORMATION', '* Information Requise');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
   define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> articles)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commandes)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> avis)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> nouveaut&eacute;s)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> promotions)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Affiche <strong>%d</strong> &agrave; <strong>%d</strong> (sur <strong>%d</strong> produits phares)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Affiche <strong>%d</strong> &agrave; <strong>%d</strong> (sur <strong>%d</strong> produits)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Premi&egrave;re Page');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Page Pr&eacute;c&eacute;dente');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Page Suivante');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Derni&egrave;re Page');
  define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Ensemble Pr&eacute;c&eacute;dent de %d Pages');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Ensemble Suivant de %d Pages');
  define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PREMIER');
  define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Pr&eacute;c]');
  define('PREVNEXT_BUTTON_NEXT', '[Suiv&nbsp;&gt;&gt;]');
  define('PREVNEXT_BUTTON_LAST', 'DERNIER&gt;&gt;');

  define('TEXT_BASE_PRICE','A partir de : ');

  define('TEXT_CLICK_TO_ENLARGE', 'Agrandir l\'image');

  define('TEXT_SORT_PRODUCTS', 'Classer les Produits ');
  define('TEXT_DESCENDINGLY', 'Ordre Descendant');
  define('TEXT_ASCENDINGLY', 'Ordre Ascendant');
  define('TEXT_BY', ' par ');

  define('TEXT_REVIEW_BY', 'par %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s mots');
  define('TEXT_REVIEW_RATING', 'Score : %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Date d\'Ajout : %s');
  define('TEXT_NO_REVIEWS', 'Il n\'y a actuellement Aucun Avis.');

  define('TEXT_NO_NEW_PRODUCTS', 'De nouveaux produits seront bient&ocirc;t ajout&eacute;s. Nous vous invitons donc &agrave; consulter cette page r&eacute;guli&egrave;rement.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Taux de taxes Inconnu');

  define('TEXT_REQUIRED', '<span class="errorText">Requis</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'attention : le r&eacute;pertoire d\'installation existe &aacute;: %s. Merci de supprimer ce r&eacute;pertoire pour des raisons de s&eacute;curit&eacute;.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'attention : il est possible d\'&eacute;crire dans le fichier de configuration : %s. C\'est un risque potentiel de s&eacute;curit&eacute;- Indiquez les bonnes permissions sur ce fichier ! (Lecture seule, souvent avec un CHMOD 644 ou 444). Vous devrez peut-&ecirc;tre utiliser votre panneau/gestionnaire de fichiers ou FTP pour changer les permissions efficacement. Entrez en contact avec votre h&eacute;bergeur pour de l\'aide.');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur: Le fichier sp&eacute;cifi&eacute; n\'a pas pu &ecirc;tre supprim&eacute;. Cela est d&ucirc; &agrave; la configuration des permissions sur le serveur, vous pouvez essayer de le supprimer par FTP.');
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'attention : le r&eacute;pertoire de sessions n\'existe pas : ' . zen_session_save_path() . '. Les sessions ne fonctionneront pas tant que ce r&eacute;pertoire n\'aura pas &eacute;t&eacute; cr&eacute;&eacute;.');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'attention : il est impossible d\'&eacute;crire dans le r&eacute;pertoire de sessions : ' . zen_session_save_path() . '. Celles-ci ne fonctionneront pas tant que les permissions n\'auront pas &eacute;t&eacute; corrig&eacute;es.');
  define('WARNING_SESSION_AUTO_START', 'attention : session.auto_start est actif - veuillez d&eacute;sactiver cette fonctionnalit&eacute; dans php.ini et red&eacute;marrer le serveur web.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'attention : le r&eacute;pertoire de t&eacute;l&eacute;chargement n\'existe pas : ' . DIR_FS_DOWNLOAD . '. Le t&eacute;l&eacute;chargement des produits ne fonctionnera qu\'avec un r&eacute;pertoire valide.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'attention : le r&eacute;pertoire de cache SQL est inexistant : ' . DIR_FS_SQL_CACHE . '. Le cache SQL ne peut fonctionner sans ce r&eacute;pertoire.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'attention : il est impossible d\'&eacute;crire dans le r&eacute;pertoire de cache SQL : ' . DIR_FS_SQL_CACHE . '. Le cache SQL ne peut fonctionner tant que vous n\'avez pas mis les bonnes permissions.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Votre base de donn&eacute;es semble avoir besoin d\'une mise &agrave; jour. Voir Admin->Tools->Server pour conna&icirc;tre la version courante.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'WARNING: Le fichier de langue n\'a pas pu &ecirc;tre trouv&eacute;: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La date d\'expiration de la carte de cr&eacute;dit est invalide. Veuillez corriger et recommencer.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Le num&eacute;ro de la carte de cr&eacute;dit est invalide. Veuillez corriger et recommencer.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Les 4 premiers chiffres que vous avez saisis (%s) ne sont pas corrects, ou nous n\'acceptons pas ce type de carte. Veuillez r&eacute;essayer ou utiliser une autre carte de cr&eacute;dit.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Bons de r&eacute;duction');
 define('BOX_INFORMATION_GV', 'FAQ ' . TEXT_GV_NAMES);
  define('VOUCHER_BALANCE', 'Balance ' . TEXT_GV_NAME);
  define('BOX_HEADING_GIFT_VOUCHER', 'Compte ' . TEXT_GV_NAME);
  define('GV_FAQ', 'FAQ ' . TEXT_GV_NAMES);
  define('ERROR_REDEEMED_AMOUNT', 'F&eacute;licitations, votre montant est valid&eacute;');
  define('ERROR_NO_REDEEM_CODE', 'Vous n\'avez pas renseign&eacute; votre ' . TEXT_GV_REDEEM);
  define('ERROR_NO_INVALID_REDEEM_GV', TEXT_GV_REDEEM . ' ' . TEXT_GV_NAME . ' n\'est pas valide');
  define('TABLE_HEADING_CREDIT', 'Cr&eacute;dits disponibles');
  define('GV_HAS_VOUCHERA', 'Votre ' . TEXT_GV_NAME . ' dispose de fonds. Vous pouvez <br />
                         envoyer tout ou une partie de cette somme par <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>E-mail</strong></a> &agrave; la personne de votre choix');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Vos fonds disponibles ne sont pas assez importants pour pouvoir envoyer ce montant.');
  define('BOX_SEND_TO_FRIEND', 'Envoyer un ' . TEXT_GV_NAME);

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Valid&eacute;');
  define('CART_COUPON', 'Coupon : ');
  define('CART_COUPON_INFO', 'En savoir plus');
define('TEXT_SEND_OR_SPEND','Vous avez un solde disponible en ' . TEXT_GV_NAME . '. Vous pouvez le d&eacute;penser ou l\'envoyer &aacute; quelqu\'un. Pour l\'envoyer, cliquez sur le bouton ci-dessous.');
define('TEXT_BALANCE_IS', 'Votre solde ' . TEXT_GV_NAME . ' est: '); 
  define('TEXT_AVAILABLE_BALANCE', 'Votre compte ' . TEXT_GV_NAME);

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Ch&egrave;que cadeau/bon');
  define('PAYMENT_MODULE_GV', 'GV/DC');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Fonds disponibles');

  define('TEXT_INVALID_REDEEM_COUPON', 'Code de r&eacute;duction invalide');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Vous devez d&eacute;penser au moins %s pour utiliser ce bon');
   define('TEXT_INVALID_STARTDATE_COUPON', 'Ce coupon n\'est pas encore disponible');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Ce coupon a expir&eacute;');
  define('EXT_INVALID_USES_COUPON', 'Ce coupon peut &ecirc;tre utilis&eacute; uniquement pour ');
  define('TIMES', ' fois.');
  define('TIME', ' fois.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Vous avez d&eacute;j&agrave; utilis&eacute; ce coupon au maximum de fois pr&eacute;vu par client.');
  define('REDEEMED_COUPON', 'un coupon de r&eacute;duction d\'une valeur de ');
  define('REDEEMED_MIN_ORDER', 'sur des commandes d\'un montant sup&eacute;rieur &agrave; ');
  define('REDEEMED_RESTRICTIONS', ' [application des restrictions cat&eacute;gories/produits]');
  define('TEXT_ERROR', 'Une erreur est survenue');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Ce Coupon n\'est valable pour aucun des produits qui se trouvent actuellement dans votre panier.');
  define('TEXT_VALID_COUPON', 'F&eacute;licitations vous avez rachet&eacute; le bon de r&eacute;duction');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Le code de r&eacute;duction que vous avez entr&eacute; est invalide pour l\'adresse que vous avez choisie.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... Plus d\'information');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Votre adresse IP actuelle est: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Information adresse');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Quantit&eacute; dans le Panier : ');
  define('PRODUCTS_ORDER_QTY_TEXT','Ajouter au Panier : ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Produit ajout&eacute; au panier avec succ&egrave;s  ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Produit(s) choisi(s) ajout&eacute;(s) au panier avec succ&egrave;s ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','Kgs');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','Kgs');
  define('TEXT_SHIPPING_BOXES', 'Boxes');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Economie :&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de remise');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Prix :&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Partenaires');
  define('TEXT_BANNER_BOX','Rendez visite &agrave; nos partenaires...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Connaissez-vous ...');
  define('TEXT_BANNER_BOX2','A voir d&egrave;s aujourd\'hui !');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsors'); 
  define('TEXT_BANNER_BOX_ALL','Veuillez visiter nos sponsors ...');

// boxes defines
  define('PULL_DOWN_ALL','Veuillez S&eacute;lectionner');
  define('PULL_DOWN_MANUFACTURERS','- RAZ -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Veuillez choisir');

// general Sort By
  define('TEXT_INFO_SORT_BY','Trier par: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Cliquez sur l\'image pour la fermer');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Fermer la fen&ecirc;tre [x] ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur : type de fichier interdit.');
  define('WARNING_NO_FILE_UPLOADED', 'Erreur : &eacute;chec du t&eacute;l&eacute;chargement du fichier.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succ&egrave;s : fichier sauvegard&eacute;.');
  define('ERROR_FILE_NOT_SAVED', 'Erreur : fichier non sauvegard&eacute;.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur : impossible d\'&eacute;crire sur le fichier de destination.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur : le fichier de destination est inexistant.');
  define('ERROR_FILE_TOO_BIG', 'Avertissement : Le fichier &eacute;tait trop gros pour &ecirc;tre t&eacute;l&eacute;charg&eacute; !<br />La commande peut &ecirc;tre pass&eacute;e mais veuillez entrer en contact avec le webmaster du site pour de l\'aide sur le t&eacute;l&eacute;chargement');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'ANNONCE : le site sera ferm&eacute; pour maintenance le : ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'ANNONCE : le site est actuellement en maintenance, il est ferm&eacute; au public');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','C\'est Gratuit !');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Prix sur demande');
  define('TEXT_CALL_FOR_PRICE','Prix sur demande');

  define('TEXT_INVALID_SELECTION',' S&eacute;lection non valide : ');
  define('TEXT_ERROR_OPTION_FOR',' de l\'option pour : ');
  define('TEXT_INVALID_USER_INPUT', 'Information Requise<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min : ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unit&eacute;s : ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','Dans le panier :');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Ajouter :');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mix. OFF');
  define('TEXT_PRODUCTS_MIX_ON','*Mix. ON');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Vous ne pouvez pas mixer les options sur ce produit en respectant les quantit&eacute;s minimum requises.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*les Valeurs d\'options Mix. sont sur ON');

  define('ERROR_MAXIMUM_QTY','La quantit&eacute; ajout&eacute;e &agrave; votre panier a &eacute;t&eacute; ajust&eacute;e pour tenir compte d\'une restriction sur le nombre maximum de produits autoris&eacute;s. Voir cet objet: ');
  define('ERROR_CORRECTIONS_HEADING','Veuillez corriger l\'info suivante : <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'La quantit&eacute; ajout&eacute;e &agrave; votre panier a &eacute;t&eacute; ajust&eacute;e. La quantit&eacute; de l\'article que vous voulez n\'est pas divisible. La quantit&eacute; de l\'article: ');
  define('ERROR_QUANTITY_CHANGED_FROM', ', a &eacute;t&eacute; chang&eacute; de: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' en ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTE : les t&eacute;l&eacute;chargements ne sont pas disponibles tant que le paiement n\'a pas est valid&eacute;');
  define('TEXT_FILESIZE_BYTES', ' octets');
  define('TEXT_FILESIZE_MEGS', ' MO');

// shopping cart errors
  define('ERROR_PRODUCT','Le produit: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Nous sommes d&eacute;sol&eacute;s mais ce produit a &eacute;t&eacute; retir&eacute; de notre stock pour le moment.<br />Cet article a &eacute;t&eacute; enlev&eacute; de votre panier.');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Erreurs de quantit&eacute; minimum - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Erreurs des unit&eacute;s de quantit&eacute; - ');
  define('ERROR_PRODUCT_OPTION_SELECTION',' ... Options s&eacute;lectionn&eacute;es invalides ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','Vous avez command&eacute; pour un total de : ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Erreurs de quantit&eacute;s Maximum - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', a une restriction de quantit&eacute; minimum. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Erreurs d\'unit&eacute;s de quantit&eacute; - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Erreurs de quantit&eacute;s Maximum - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'REMARQUE: Dans votre int&eacute;r&ecirc;t, votre panier courant a &eacute;t&eacute; combin&eacute; avec le panier de votre visite pr&eacute;c&eacute;dente. Pensez tout de m&ecirc;me &agrave; v&eacute;rifier votre panier avant de commander.');  
  
// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'L\'information de client ne peut pas &ecirc;tre valid&eacute;e !<br />Veuillez vous connecter ou recr&eacute;er votre compte ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Produits Phares');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaux produits pour %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produits &agrave; venir...');
  define('TABLE_HEADING_DATE_EXPECTED', 'Date pr&eacute;vue');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Promotions du mois de %s');

  define('CAPTION_UPCOMING_PRODUCTS','Ces produits seront en stock prochainement');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','ce tableau contient une liste des produits qui devraient &ecirc;tre en stock prochainement, ainsi que les dates pr&eacute;visionnelles de leurs arriv&eacute;es en stock');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','C\'est Gratuit !');

// customer login
  define('TEXT_SHOWCASE_ONLY','Nous Contacter');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Prix non disponible');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Connectez-vous pour conna&icirc;tre le prix');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Showroom seulement');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Prix non disponible');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'APPROBATION EN ATTENTE');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Se connecter &agrave; la boutique');

// text pricing
  define('TEXT_CHARGES_WORD','Calcul des frais :');
  define('TEXT_PER_WORD','<br />Prix par mot : ');
  define('TEXT_WORDS_FREE',' Mot(s) gratuit(s) ');
  define('TEXT_CHARGES_LETTERS','Calcul des frais :');
  define('TEXT_PER_LETTER','<br />Prix par lettre : ');
  define('TEXT_LETTERS_FREE',' Lettre(s) gratuite(s) ');
  define('TEXT_ONETIME_CHARGES','*paiement unique = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*paiement unique = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option de remises pour les grandes quantit&eacute;s');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTE');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIX');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option de remises sur quantit&eacute;s avec Paiement Unique');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caract&egrave;res maximum  autoris&eacute;s');
  define('TEXT_REMAINING','restant(s)');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Estimation des Frais de livraison :');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Veuillez <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Vous Connecter</u></a>, pour afficher vos Frais de livraison personnalis&eacute;s.');
  define('CART_SHIPPING_METHOD_TEXT','Modes de livraison disponibles :');
  define('CART_SHIPPING_METHOD_RATES','Taux :');
  define('CART_SHIPPING_METHOD_TO','Livr&eacute; &agrave; : ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Livr&eacute; &agrave; : <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Connexion</u></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Livraison Gratuite');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- T&eacute;l&eacute;chargements');
  define('CART_SHIPPING_METHOD_RECALCULATE','Recalculer');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','correcte');
  define('CART_SHIPPING_METHOD_ADDRESS','Adresse :');
  define('CART_OT','Estimation du co&ucirc;t total :');
  define('CART_OT_SHOW','correcte'); // set to false if you don't want order totals
  define('CART_ITEMS','Articles dans le panier: ');
  define('CART_SELECT','S&eacute;lectionnez');
  define('ERROR_CART_UPDATE', '<strong>Veuillez actualiser votre Commande.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Actualiser');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Whoops ! Votre session a expir&eacute; ... Veuillez mettre &agrave; jour votre panier pour les frais d\'exp&eacute;dition ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Les frais de port sont bas&eacute;s sur votre adresse de livraison courante:');
  
// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Ajouter: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Ajouter: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Ajouter: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Ajouter: '); 
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Qt&eacute; de Pourcentages Remis&eacute;s');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Qt&eacute; de Nouveaux Prix Remis&eacute;s');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Qt&eacute; de Prix Remis&eacute;s');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Les Prix Remis&eacute;s peuvent varier en fonction des &eacute;l&eacute;ments pr&eacute;cit&eacute;s');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Remises sur Qt&eacute; non disponibles...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nom du Produit');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nom du Produit - desc');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prix - bas vers haut');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prix - haut vers bas');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Mod&egrave;le');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Date d\'Ajout - nouveau vers ancien');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Date d\'Ajout - ancien vers nouveau');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Affichage par d&eacute;faut');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Le lien expire');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Restant');
  define('HEADING_DOWNLOAD', 'Pour t&eacute;l&eacute;charger vos fichiers, cliquer sur le bouton de t&eacute;l&eacute;chargement et choisir « enregistrer sur le disque » dans le menu qui s\'ouvre.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Nom de fichier');
  define('TABLE_HEADING_PRODUCT_NAME','Nom d\'article');
  define('TABLE_HEADING_BYTE_SIZE','Taille du fichier');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Illimit&eacute;');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Qt&eacute;.');
  define('TABLE_HEADING_PRODUCTS', 'Nom d\'article');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Confidentialit&eacute;');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Veuillez vous mettre en accord avec notre notice de confidentialit&eacute; en cochant la case suivante. La notice de confidentialit&eacute; peut &ecirc;tre lue <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">ici</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'J\'ai lu et suis d\'accord avec votre notice de confidentialit&eacute;.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Vos coordonn&eacute;es');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'D&eacute;tails additionnels de contact');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'V&eacute;rification de votre &acirc;ge');
  define('TABLE_HEADING_LOGIN_DETAILS', 'D&eacute;tails de connection');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Comment nous avez-vous connu?');

  define('ENTRY_EMAIL_PREFERENCE','Pr&eacute;f&eacute;rences de newsletter et E-mail :');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','TEXTE-Seulement');
  define('EMAIL_SEND_FAILED','ERREUR : Envoi d\'email impossible &agrave; : "%s" <%s> avec le sujet : "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Erreur - Connexion &aacute; la base de donn&eacute;es impossible');

  
  define('COD_TAX_WARNING', '* Estimate duties and taxes required for shipping. Other local taxes may be due upon delivery.'); 
// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVERTISSEMENT : EN-TETE d\'EZ-PAGES - actif pour l\'IP de l\'Admin seulement');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVERTISSEMENT : PIED-DE-PAGE d\'EZ-PAGES - actif  pour l\'IP de l\'Admin seulement');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVERTISSEMENT : SIDEBOX d\'EZ-PAGES  - actif  pour l\'IP de l\'Admin seulement');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Articles commen&ccedil;ant par… ');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset  --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
?>
