<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2009, Polish Zikula Team
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @link http://zikula.pl
 * @version $Id: core.php 106 2009-10-03 14:35:05Z jusuff $
 */ 


// date and time defines
define('_DATE', 'Data');
define('_DATEBRIEF', '%d-%m-%Y');
define('_DATELONG', '%A, %d %B %Y');
define('_DATESTRING', '%A, %d %B @ %H:%M:%S');
define('_DATESTRING2', '%A, %d %B');
define('_DATETIMEBRIEF', '%d-%m-%Y - %H:%M');
define('_DATETIMELONG', '%A, %d %B %Y - %H:%M');
define('_DATEINPUT', '%Y-%m-%d');
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M');
define('_DATEFIRSTWEEKDAY', '1');
define('_DAY_OF_WEEK_LONG', 'Niedziela Poniedziałek Wtorek Środa Czwartek Piątek Sobota');
define('_DAY_OF_WEEK_SHORT', 'Nie Pon Wto Śro Czw Pią Sob');
define('_MONTH_LONG', 'stycznia lutego marca kwietnia maja czerwca lipca sierpnia września października listopada grudnia');
define('_MONTH_SHORT', 'Sty Lut Mar Kwi Maj Cze Lip Sie Wrz Paź Lis Gru');
define('_TIME', 'Czas');
define('_TIMEBRIEF', '%H:%M');
define('_TIMELONG', '%H:%M:%S');
define('_TIMEFORMAT', '24');
define('_SECOND', 'sekunda');
define('_SECONDS', 'sekund');
define('_MINUTE', 'minuta');
define('_MINUTES', 'minut');
define('_DAY', 'dzień');
define('_DAYS', 'dni');
define('_WEEK', 'tydzień');
define('_WEEKS', 'tygodni');
define('_MONTH', 'miesiąc');
define('_MONTHS', 'miesięcy');
define('_YEAR', 'rok');
define('_YEARS', 'lat');
define('_NOTAVALIDCATEGORY', 'Błędna kategoria');
define('_NOTAVALIDDATE', 'Niepoprawna data');
define('_NOTAVALIDINT', 'Niepoprawna liczba całkowita');
define('_NOTAVALIDNUMBER', 'Niepoprawna liczba');
define('_NOTAVALIDEMAIL', 'Błędny e-mail');
define('_NOTAVALIDURL', 'Błędny URL');

// time zone defines
define('_TIMEZONES', 'GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS', '-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET', 'ISO-8859-2');
define('_LOCALE', 'pl_PL');
define('_LOCALEWIN', 'pol');
define('_ERROR_LOCALENOTSET', 'Could not set locale: %locale%');
define('_PERMLINK_LOCALESEARCH', 'ŔÁÂĂÄĹŕáâăäĺŇÓÔŐÖŘňóôőöřČÉĘËčéęëÇçĚÍÎĎěíîďŮÚŰÜůúűü˙ŃńĄŚŁŻŹĆąśłżźć');
define('_PERMLINK_LOCALEREPLACE', 'aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynnaslzzcaslzzc');
define('_ALPHABET', 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z');

// common footer defines
define('_CMSHOMELINK', '<a href="http://www.zikula.org">Zikula</a>');
define('_XHTMLVALIDATORLINK', '<a href="http://validator.w3.org/check?uri=referer">XHTML</a>');
define('_CSSVALIDATORLINK', '<a href="http://jigsaw.w3.org/css-validator/">CSS</a>');
define('_ISPOWEREDBY', 'jest oparty na systemie');

// common words
define('_ZIKULA', 'Zikula');
define('_ALL', 'Wszystkie');
define('_AND', 'i');
define('_BY', 'autor');
define('_DOWN', 'W dół');
define('_FOR', 'dla');
define('_NO', 'Nie');
define('_NO_SHORT','N');
define('_OF', 'z');
define('_OK', 'OK');
define('_ON', 'w');
define('_OR', 'lub');
define('_TO', 'Do');
define('_UP', 'W górę');
define('_URL', 'URL');
define('_YES', 'Tak');
define('_YES_SHORT','T');

// on/off states
define('_ONOFF_ON', 'Włączone');
define('_ONOFF_OFF', 'Wyłączone');
define('_OFF_UC', 'WŁĄCZONE');
define('_ON_UC', 'WYŁĄCZONE');

// standard permissions levels
define('_ACCESS_ADD', 'Dodawanie');
define('_ACCESS_ADMIN', 'Administracja');
define('_ACCESS_COMMENT', 'Komentowanie');
define('_ACCESS_DELETE', 'Usuwanie');
define('_ACCESS_EDIT', 'Edycja');
define('_ACCESS_MODERATE', 'Moderowanie');
define('_ACCESS_NONE', 'Żaden');
define('_ACCESS_OVERVIEW', 'Przegląd');
define('_ACCESS_READ', 'Czytanie');

// extended (pnobjlib) permission levels
define('_PN_TEXT_PERMISSION_BASIC_PRIVATE', 'Prywatne');
define('_PN_TEXT_PERMISSION_BASIC_GROUP', 'Grupowe');
define('_PN_TEXT_PERMISSION_BASIC_PUBLIC', 'Publiczne');
define('_PN_TEXT_PERMISSION_BASIC_USER', 'Użytkownika');
define('_PN_TEXT_PERMISSION_LEVEL_NONE', 'Żaden');
define('_PN_TEXT_PERMISSION_LEVEL_READ', 'Czytanie');
define('_PN_TEXT_PERMISSION_LEVEL_WRITE', 'Pisanie');
define('_PN_TEXT_NOAUTH_NONE', 'Nie posiadasz uprawnień dostępu do tego modułu.');
define('_PN_TEXT_NOAUTH_OVERVIEW', 'Nie posiadasz uprawnień do przeglądania treści w tym module.');
define('_PN_TEXT_NOAUTH_READ', 'Nie posiadasz uprawnień czytania treści w tym module.');
define('_PN_TEXT_NOAUTH_COMMENT', 'Nie posiadasz uprawnień komentowania w tym module.');
define('_PN_TEXT_NOAUTH_MODERATION', 'Nie posiadasz uprawnień moderowania w tym module.');
define('_PN_TEXT_NOAUTH_EDIT', 'Nie posiadasz uprawnień edytowania treści w tym module.');
define('_PN_TEXT_NOAUTH_ADD', 'Nie posiadasz uprawnień dodawania treści w tym module.');
define('_PN_TEXT_NOAUTH_DELETE', 'Nie posiadasz uprawnień usuwania treści w tym module.');
define('_PN_TEXT_NOAUTH_ADMIN', 'Nie posiadasz uprawnień administracyjnych dla tego modułu.');

// common actions & results
define('_ACTIONS', 'Działania');
define('_ACTION', 'Działanie');
define('_ACTIVATE', 'Aktywuj');
define('_ACTIVE', 'Aktywny');
define('_ACTIVATED', 'Aktywowany');
define('_ADD', 'Dodaj');
define('_BACK', 'Powrót');
define('_CANCEL', 'Anuluj');
define('_CLEAR', 'Wyczyść');
define('_CLOSE', 'Zamknij');
define('_CONFIRM', 'Potwierdź');
define('_CONTINUE', 'Kontynuuj');
define('_COMMIT', 'Aktualizuj');
define('_COPY', 'Kopiuj');
define('_CREATE', 'Utwórz');
define('_DEACTIVATE', 'Deaktywuj');
define('_DEACTIVATED', 'Deaktywowany');
define('_DEFAULT', 'Domyślny');
define('_DEFAULTS', 'Domyślne');
define('_DELETE', 'Usuń');
define('_DETAILS', 'Szczegóły');
define('_EDIT', 'Edytuj');
define('_FILTER', 'Filtruj');
define('_FORWARD', 'Dalej');
define('_HELP', 'Pomoc');
define('_HELPPAGE', 'Pomoc');
define('_MESSAGESYOUMIGHTSEE', 'Komunikaty, które możesz zobaczyć');
define('_CONFIRMATIONPROMPT', 'Potwierdzenie');
define('_IGNORE', 'Ignoruj');
define('_INACTIVE', 'Nieaktywny');
define('_LOGIN', 'Zaloguj');
define('_LOGIN_FLC', 'Zaloguj');
define('_LOGOUT', 'Wyloguj');
define('_MODIFY', 'Modyfikuj');
define('_MOVE', 'Przenieś');
define('_NEW', 'Nowy');
define('_NEXT', 'Następny');
define('_OPEN', 'Otwórz');
define('_PREVIOUS', 'Poprzedni');
define('_REMOVE', 'Usuń');
define('_RESET', 'Resetuj');
define('_SAVE', 'Zapisz');
define('_SEARCH', 'Szukaj');
define('_STATE', 'Stan');
define('_SUBMIT', 'Wyślij');
define('_UPDATE', 'Aktualizuj');
define('_VIEW', 'Zobacz');

//common module names
define('_COMMENTS', 'Komentarze');
define('_DOWNLOADS', 'Downloads');
define('_SUBMITNEWS', 'Wyślij artykuł');
define('_USERSMANAGER', 'Menadżer użytkowników');
define('_WEB_LINKS', 'Linki');

//common module fields
define('_PROPERTIES', 'Właściwości');
define('_CONTENT', 'Zawartość');
define('_DESCRIPTION', 'Opis');
define('_EMAIL', 'Adres e-mail');
define('_ID', 'ID');
define('_LANGUAGE', 'Język');
define('_META', 'Dane Meta');
define('_META_FLC', 'Dane Meta');
define('_NAME', 'Nazwa');
define('_OPTIONAL', 'Opcjonalne');
define('_OPTIONS', 'Opcje');
define('_PASSWORD', 'Hasło');
define('_REQUIRED', 'Wymagane');
define('_TITLE', 'Tytuł');
define('_USERID', 'ID użytkownika');
define('_USERNAME', 'Użytkownik');
define('_USERNAME_FLC', 'Użytkownik');
define('_VALUE', 'Wartość');
define('_LINKSPERPAGE', 'Linków na stronę');

// permalinks system
define('_PERMALINKS', 'Permalinki');
define('_PERMALINKTITLE', 'Nazwa Permalinku (URL)');
define('_PERMALINKTITLEBLANK', '(puste = automatyczne generowanie)');
define('_PURGEPERMALINKS', 'Wyczyść Permalinki');
define('_PURGEPERMALINKSSUCCESFUL', 'Usunięcie permalinków zakończone sukcesem');
define('_PURGEPERMALINKSFAILED', 'Usunięcie permalinków zakończone błędem');
define('_ADDCATEGORYTITLETOPERMALINK', 'Dodaj nazwę kategorii do Permalinku');

// member descriptors
define('_GUEST', 'gość');
define('_GUEST0', 'gości');
define('_GUESTS', 'gości');
define('_MEMBER', 'użytkownik');
define('_MEMBER0', 'użytkowników');
define('_MEMBERS', 'użytkowników');

// member states
define('_ONLINE', 'online');
define('_OFFLINE', 'offline');

// common zikula terms
define('_BLOCK', 'Blok');
define('_BLOCKS', 'Bloki');
define('_CUSTOMARGS', 'Argumenty');
define('_FUNCTIONTYPE', 'Typ funkcji');
define('_FUNCTIONTYPES', 'Typy funkcji');
define('_FUNCTION', 'Funkcja');
define('_FUNCTIONS', 'Funkcje');
define('_HOOK', 'Wtyczka');
define('_HOOKS', 'Wtyczki');
define('_LEGACY', 'Legacy');
define('_MODULE', 'Moduł');
define('_MODULES', 'Moduły');
define('_PARAMETERS', 'Parametry');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Pluginy');
define('_PROFILE', 'Dane osobiste');
define('_TEMPLATE', 'Szablon');
define('_TEMPLATES', 'Szablony');
define('_THEME', 'Motyw');
define('_THEMES', 'Motywy');

// other common terms
define('_DIRECTORY', 'Katalog');
define('_POWEREDBY', 'Napędzany przez');
define('_VERSION', 'Wersja');
define('_COPYRIGHT', 'Copyright');
define('_VALIDXHTML', 'Poprawny XHTML');
define('_VALIDCSS', 'Poprawny CSS');
define('_MOREINFOHERE_LC', 'więcej informacji tutaj');
define('_MOREINFOHERE_UC', 'Więcej informacji tutaj');
define('_PERMITTEDHTMLTAGSREMINDER', 'Dozwolone tagi HTML:');
define('_PERMITTEDHTMLTAGSSHORTREMINDER', 'Dozwolony HTML');
define('_PUNC_PERIOD', '.');
define('_PUNC_COLON', ':');
define('_PUNC_SEMICOLON', ';');
define('_PUNC_QUESTIONMARK', '?');
define('_PUNC_OPENPARENTHESIS', '(');
define('_PUNC_CLOSEPARENTHESIS', ')');
define('_PUNC_OPENDOUBLEQUOTE', '"');
define('_PUNC_CLOSEDOUBLEQUOTE', '"');
define('_PUNC_OPENSINGLEQUOTE', '\'');
define('_PUNC_CLOSESINGLEQUOTE', '\'');


// module system
define('_BADAUTHKEY', 'Nieprawidłowy klucz autoryzacji \'authkey\': najprawdopodobniej oznacza to, że wciśnięto przycisk \'Wstecz\' lub wygasł klucz uwierzytelniający stronę. Proszę odświeżyć stronę i spróbować raz jeszcze.');
define('_CANCELDELETE', 'Anuluj usunięcie elementu.');
define('_CANCELEDIT', 'Anuluj edycję elementu.');
define('_CONFIGUPDATED', 'Gotowe! Konfiguracja modułu została zaktualizowana.');
define('_CONFIGUPDATEFAILED', 'Błąd! Aktualizacja konfiguracji modułu nie powiodła się.');
define('_CONFIRMDELETE', 'Czy potwierdzasz usunięcie?');
define('_CONFIRMDELETEITEM', 'Czy na pewno usunąć %i%?');
define('_CREATEDBY', 'Utworzony przez %username%');
define('_CREATEDBYON', 'Utworzony %date% przez %username%');
define('_CREATEDON', 'Utworzony %date%');
define('_CREATEITEM', 'Utwórz %i%');
define('_CREATEFAILED', 'Błąd! Próba utworzenia nie powiodła się.');
define('_CREATEINDEXFAILED', 'Błąd! Utworzenie indeksu nie powiodło się.');
define('_CREATEITEMSUCCEDED', 'Gotowe! %i% utworzono.');
define('_CREATESUCCEDED', 'Gotowe! Element utworzono.');
define('_CREATETABLEFAILED', 'Błąd! Utworzenie tabeli nie powiodło się.');
define('_DELETEITEM', 'Usuń %i%');
define('_DELETEFAILED', 'Błąd! Próba usunięcia nie powiodła się.');
define('_DELETEITEMSUCCEDED', 'Gotowe! %i% usunięto.');
define('_DELETESUCCEDED', 'Gotowe! Element usunięto.');
define('_DELETETABLEFAILED', 'Błąd! Usunięcie tabeli nie powiodło się.');
define('_DROPCOLUMNFAILED', 'Błąd! Usunięcie kolumny nie powiodło się.');
define('_DROPINDEXFAILED', 'Błąd! Usunięcie indeksu nie powiodło się.');
define('_FAILEDTOLOADMODULE', 'Błąd! Nie udało się załadować <strong>modułu</strong> %<strong>m</strong>%.');
define('_FAILEDTOLOADMODULEATFUNC', 'Błąd! Nie udało się załadować modułu  <strong>%m%</strong> (w funkcji: <strong>%f%</strong>).');
define('_GETFAILED', 'Błąd! Nie udało się załadować elementów.');
define('_GETITEMSFAILED', 'Błąd! Nie udało się załadować %i%.');
define('_GENERALSETTINGS', 'Ustawienia ogólne');
define('_LOADAPIFAILED', 'Błąd! Nie udało się załadować API modułu.');
define('_LOADFAILED', 'Błąd! Nie udało się załadować modułu.');
define('_MODARGSERROR', 'Błąd! Przekazano funkcji nieprawidłowe argumenty.');
define('_MODIFYCONFIG', 'Ustawienia');
define('_MODIFYCONFIGITEM', 'Ustawienia %1%');
define('_MODIFYITEM', 'Edytuj %i%');
define('_MODULENOAUTH', 'Brak uprawnień dostępu do tego modułu.');
define('_MODULENODIRECTACCESS', 'Ten moduł nie jest dostępny bezpośrednio.');
define('_MODULENOTAVAILABLE', 'Moduł %m% jest niedostępny.');
define('_MODULERETURNED', 'Powrót z funkcji <strong>%f%</strong> modułu <strong>%m%</strong>.');
define('_MUSTBENUMERIC', 'Wartość \'%s%\' musi być numeryczna.');
define('_NEWITEM', 'Utwórz %i%');
define('_NOITEMSFOUND', 'Nie znaleziono żadnych elementów.');
define('_NOFOUND', 'Nie znaleziono %i%.');
define('_NOSUCHITEM', 'Nie znaleziono takiego elementu.');
define('_NOSUCHITEMFOUND', 'Nie znaleziono %i%.');
define('_REGISTERFAILED', 'Błąd! Rejestracja wtyczki nie powiodła się.');
define('_RENAMECOLUMNFAILED', 'Błąd! Zmiana nazwy kolumny nie powiodła się.');
define('_RENAMETABLEFAILED', 'Błąd! Zmiana nazwy tabeli nie powiodła się.');
define('_SEARCHITEMS', 'Szukaj %i%');
define('_SEARCHRESULTSFOUND', 'Znaleziono %x% wyniki(ów).');
define('_SEARCHRESULTSNOITEMSFOUND', 'Nie znaleziono %i%.');
define('_TEMPLATENOTAVAILABLE', 'Dla modułu %m% nie znaleziono szablonu %t%');
define('_TRANSACTIONFAILED', 'Operacja nie powiodła się... Powrót!');
define('_UNABLETOLOADCLASS', 'Błąd! Błąd nie można załadować klasy [%s]');
define('_UNABLETOLOADMODULECLASS', 'Błąd! Nie udało się załadować klasy [%s] dla modułu [%s]');
define('_UNABLETOLOADMODULEARRAYCLASS', 'Błąd! Nie udało się załadować klasy listy (array class) [%s] dla modułu [%s]');
define('_UNKNOWNFUNC', 'Błąd! Wywołano nieznaną funkcję:');
define('_UNKNOWNUSER', 'nieznany użytkownik');
define('_UNREGISTERFAILED', 'Błąd! Nie udało się wyrejestrować wtyczki.');
define('_UPDATEITEM', 'Aktualizuj %i%');
define('_UPDATECONFIG', 'Aktualizuj konfigurację');
define('_UPDATEDBY', 'Ostatnio uaktualnione przez %username%');
define('_UPDATEDBYON', 'Ostatnio uaktualnione %date% przez %username%');
define('_UPDATEDON', 'Uaktualnione %date%');
define('_UPDATEFAILED', 'Błąd! Próba aktualizacji nie powiodła się.');
define('_UPDATETABLEFAILED', 'Błąd! Aktualizacja tabeli nie powiodła się.');
define('_UPDATEITEMSUCCEDED', 'Gotowe! %i% zaktualizowano.');
define('_UPDATESUCCEDED', 'Gotowe! Element zaktualizowano.');
define('_VIEWCONFIG', 'Konfiguracja');
define('_VIEWITEMS', 'Lista %i%');

// Central administration define
define('_ADMINMENU', 'Panel administracyjny');

// defines for the pager plugin
define('_FIRSTPAGE', 'Pierwsza');
define('_FIRSTPAGE_TITLE', 'Pierwsza strona');
define('_ITEMSPERPAGE', 'Elementów na stronie');
define('_PREVIOUSPAGE', 'Poprzednia');
define('_PREVIOUSPAGE_TITLE', 'Poprzednia strona');
define('_LASTPAGE', 'Ostatnia');
define('_LASTPAGE_TITLE', 'Ostatnia strona');
define('_NEXTPAGE', 'Następna');
define('_NEXTPAGE_TITLE', 'Następna strona');
define('_NONEXTPAGE', 'To jest ostatnia strona');
define('_NOPREVIOUSPAGE', 'To jest pierwsza strona');
define('_PAGE', 'Strona');
define('_PERPAGE', '%i% na stronie');
define('_TOTAL', 'Ogółem');

// WorkflowUtil
define('_WF_STATEERROR', 'Błąd stanu Workflow');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Pole jest wymagane.');
define('_PNFORM_MANDATORYSELECTERROR', 'Pole jest wymagane.');
define('_PNFORM_MAXLENGTHERROR', 'Liczba znaków nie może być większa niż %s.');
define('_PNFORM_SELECTDATE', 'Wybierz datę');
define('_PNFORM_RANGEERROR', 'Wartość wykracza poza dopuszczalny zakres.');
define('_PNFORM_RANGEMINERROR', 'Wartość musi być większa bądź równa %i%.');
define('_PNFORM_RANGEMAXERROR', 'Wartość musi być mniejsza bądź równa %i%.');
define('_PNFORM_UPLOADERROR', 'Błąd wysyłania pliku.');

// categories system
define('_ALLCATEGORIES', 'Wszystkie');
define('_CATEGORY', 'Kategoria');
define('_CATEGORY_LC', 'kategoria');
define('_CATEGORIES', 'Kategorie');
define('_CATEGORIESMAPPINGS', 'Mapowanie multi-kategorii');
define('_CATEGORIESMAPPINGSCOUNT', 'Ilość mapowań multi-kategorii');
define('_CHOOSECATEGORY', 'Wybierz kategorię');
define('_CHOOSEMODULE', 'Wybierz moduł');
define('_CHOOSETABLE', 'Wybierz tabelę');
define('_CHOOSEONE', 'Wybierz');
define('_ENABLECATEGORIZATION', 'Włącz kategoryzację');
define('_NOASSIGNEDCATEGORIES', 'Nieprzypisane kategorie');
define('_MODULECATEGORY', 'Kategoria modułu');
define('_MODULECATEGORY_LC', 'kategoria modułu');
define('_MODULECATEGORIES', 'Kategorie modułów');
define('_CATEGORIZATION', 'Kategoryzacja');

// 'templates' for error message
define('_ERROR_ADMIN', '%message% w %func% w linii %line% w pliku %file%.');

// userlinks plugin
define('_YOURACCOUNT', 'Twoje konto');
define('_CREATEACCOUNT', 'Załóż konto');

// onlune plugin
define('_CURRENTLYONLINE', 'Aktualnie online jest %numguests% %gueststext% i %numusers% %userstext%.');

// user welcome plugin
define('_WELCOMEUSER', 'Witaj %username%');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Błąd! Nie udało się zapisać daty logowania');
define('_LOGOUTFORCED', 'Nastąpiło automatyczne wylogowanie. Proszę zalogować się ponownie.');

// jscalendar
define('_DATE_SELECTOR', 'Kalendarz');

// mailer
define('_ERROR_SENDINGMAIL', 'Pojawił się błąd podczas wysyłania e-maila');
define('_ERROR_SENDINGMAIL_ADMINLOG', 'Pojawił się błąd podczas wysyłania e-maila od %fromname% (%fromaddress%) do %toname% (%toaddress%) o temacie \'%subject\': %errorinfo%');
define('_ERROR_UNKNOWNMAILERERROR', 'nieznany błąd mailera');

// module vars
define('_ERROR_NONULLVALUEALLOWED', 'Puste zmienne (NULL) modułu nie są dozwolone (%modname%/%varname%)');

// site disabled template
define('_THISSITEDISABLED', 'Serwis został zablokowany');
define('_ADMINLOGINREQUIRED', 'Aby kontynuować musisz zalogować się jako administrator');
define('_ADMINLOGIN', 'Zaloguj się jako administrator');

// exit functionality
// exit functionality
define('_EXITINSTALLERROR', 'Błąd instalacji:');
define('_EXITHANDLER', 'Exit-Handler: ');
define('_EXITSTACKTRACE', 'Śledzenie stosu:');
