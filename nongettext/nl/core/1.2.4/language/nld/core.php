<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2009, Dutch Zikula Community
 * @link http://zikula.nl
 * @version $Id: core.php 914 2010-02-08 22:15:46Z teb $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Teb (Arjen Tebbenhof)
 * @link http://zikula.nl Dutch Zikula Community
 */

// date and time defines
define('_DATE','Datum');
define('_DATEBRIEF','%d %b %Y');
define('_DATELONG','%A %d %B %Y');
define('_DATESTRING','%A %d %B om %H:%M u');
define('_DATESTRING2','%A %e %B');
define('_DATETIMEBRIEF','%d %b %Y - %H:%M');
define('_DATETIMELONG','%A %d %B %Y - %H:%M');
define('_DATEINPUT', '%Y-%m-%d'); // Dateformat for input fields (parsable - do not try other formats!)
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M'); // Date+time format for input fields (parsable - do not try other formats!)
define('_DATEFIRSTWEEKDAY', 1); // 0 = Sunday, 1 Monday and so on
define('_DAY_OF_WEEK_LONG','zondag maandag dinsdag woensdag donderdag vrijdag zaterdag');
define('_DAY_OF_WEEK_SHORT','zo ma di wo do vr za');
define('_MONTH_LONG','januari februari maart april mei juni juli augustus september oktober november december');
define('_MONTH_SHORT','jan feb mrt apr mei jun jul aug sep okt nov dec');
define('_TIME', 'Tijd');
define('_TIMEBRIEF','%H:%M');
define('_TIMELONG','%T %p');
define('_TIMEFORMAT', 24);  // use 12/24 depending on country
define('_SECOND', 'seconde');
define('_SECONDS', 'seconden');
define('_MINUTE', 'minuut');
define('_MINUTES', 'minuten');
define('_DAY', 'dag');
define('_DAYS', 'dagen');
define('_WEEK', 'week');
define('_WEEKS', 'weken');
define('_MONTH', 'maand');
define('_MONTHS', 'maanden');
define('_YEAR', 'jaar');
define('_YEARS', 'jaren');
define('_NOTAVALIDCATEGORY', 'Ongeldige categorie');
define('_NOTAVALIDDATE', 'Ongeldige datum');
define('_NOTAVALIDINT', 'Ongeldig getal');
define('_NOTAVALIDNUMBER', 'Ongeldig nummer');
define('_NOTAVALIDEMAIL', 'Ongeldig e-mail adres');
define('_NOTAVALIDURL', 'Ongeldige URL');

// time zone defines
define('_TIMEZONES','GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS','-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET','UTF-8');
define('_LOCALE','nl_NL');
define('_LOCALEWIN', 'nld');
define('_ERROR_LOCALENOTSET', 'Kon locale "%locale%" niet instellen');
define('_PERMLINK_LOCALESEARCH',  'ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ');
define('_PERMLINK_LOCALEREPLACE', 'AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn');
define('_ALPHABET', 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z');

// common footer defines
define('_CMSHOMELINK', '<a href="http://zikula.org">Zikula</a>');
define('_XHTMLVALIDATORLINK', '<a href="http://validator.w3.org/check?uri=referer">XHTML</a>');
define('_CSSVALIDATORLINK', '<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>');
define('_ISPOWEREDBY', 'is powered by');

// common words
define('_ZIKULA', 'Zikula');
define('_ALL','Alle');
define('_AND','en');
define('_BY','door');
define('_DOWN','Omlaag');
define('_FOR', 'voor');
define('_NO','Nee');
define('_NO_SHORT','N');
define('_OF','van');
define('_OK','OK');
define('_ON','op');
define('_OR', 'of');
define('_TO','Aan');
define('_UP','Omhoog');
define('_URL', 'URL');
define('_YES','Ja');
define('_YES_SHORT','J');

// on/off states
define('_ONOFF_ON','Aan');
define('_ONOFF_OFF', 'Uit');
define('_OFF_UC', 'UIT');
define('_ON_UC', 'AAN');

// standard permissions levels
define('_ACCESS_ADD','Toevoegen');
define('_ACCESS_ADMIN','Beheer');
define('_ACCESS_COMMENT','Reageren');
define('_ACCESS_DELETE','Verwijderen');
define('_ACCESS_EDIT','Bewerken');
define('_ACCESS_MODERATE','Moderatie');
define('_ACCESS_NONE','Geen');
define('_ACCESS_OVERVIEW','Overzicht');
define('_ACCESS_READ','Lezen');

// extended (pnobjlib) permission levels
define('_PN_TEXT_PERMISSION_BASIC_PRIVATE', 'Privé');
define('_PN_TEXT_PERMISSION_BASIC_GROUP',   'Groep');
define('_PN_TEXT_PERMISSION_BASIC_PUBLIC',  'Openbaar');
define('_PN_TEXT_PERMISSION_BASIC_USER',    'Gebruiker');
define('_PN_TEXT_PERMISSION_LEVEL_NONE',    'Geen');
define('_PN_TEXT_PERMISSION_LEVEL_READ',    'Lezen');
define('_PN_TEXT_PERMISSION_LEVEL_WRITE',   'Schrijven');
define('_PN_TEXT_NOAUTH_NONE',       'U heeft geen toegangsrechten voor deze module.');
define('_PN_TEXT_NOAUTH_OVERVIEW',   'U heeft geen overzichtsrechten voor deze module.');
define('_PN_TEXT_NOAUTH_READ',       'U heeft geen leesrechten voor deze module.');
define('_PN_TEXT_NOAUTH_COMMENT',    'U heeft geen reageerrechten voor deze module');
define('_PN_TEXT_NOAUTH_MODERATION', 'U heeft geen moderatierechten voor deze module');
define('_PN_TEXT_NOAUTH_EDIT',       'U heeft geen bewerkrechten voor deze module');
define('_PN_TEXT_NOAUTH_ADD',        'U heeft geen toevoegrechten voor deze module');
define('_PN_TEXT_NOAUTH_DELETE',     'U heeft geen verwijderrechten voor deze module');
define('_PN_TEXT_NOAUTH_ADMIN',      'U heeft geen beheerrechten voor deze module');

// common actions & results
define('_ACTIONS', 'Acties');
define('_ACTION', 'Actie');
define('_ACTIVATE','Activeer');
define('_ACTIVE','Actief');
define('_ACTIVATED', 'Geactiveerd');
define('_ADD','Toevoegen');
define('_BACK', 'Terug');
define('_CANCEL', 'Annuleren');
define('_CLEAR', 'Leeg maken');
define('_CLOSE', 'Sluiten');
define('_CONFIRM', 'Bevestigen');
define('_CONTINUE', 'Doorgaan');
define('_COMMIT','Vastleggen');
define('_COPY', 'Kopiëren');
define('_CREATE', 'Creëer');
define('_DEACTIVATE','Deactiveren');
define('_DEACTIVATED', 'Gedeactiveerd');
define('_DEFAULT', 'Standaard');
define('_DEFAULTS', 'Standaardwaarden');
define('_DELETE','Verwijderen');
define('_DETAILS', 'Details');
define('_EDIT','Bewerken');
define('_FILTER', 'Filter');
define('_FORWARD', 'Naar voren');
define('_HELP', 'Help');
define('_HELPPAGE', 'Help Pagina');
define('_MESSAGESYOUMIGHTSEE', 'Berichten die getoond kunnen worden');
define('_CONFIRMATIONPROMPT', 'Bevestiging');
define('_IGNORE','Negeren');
define('_INACTIVE','Inactief');
define('_LOGIN','Inloggen');
define('_LOGIN_FLC','Inloggen');
define('_LOGOUT','Uitloggen');
define('_MODIFY','Aanpassen');
define('_MOVE', 'Verplaatsen');
define('_NEW','Nieuw');
define('_NEXT', 'Volgende');
define('_OPEN', 'Openen');
define('_PREVIOUS', 'Vorige');
define('_REMOVE', 'Verwijderen');
define('_RESET', 'Opnieuw instellen');
define('_SAVE', 'Opslaan');
define('_SEARCH','Zoeken');
define('_STATE','Status');
define('_SUBMIT','Versturen');
define('_UPDATE', 'Bijwerken');
define('_VIEW', 'Bekijken');

//common module names
define('_COMMENTS', 'Reacties');
define('_DOWNLOADS', 'Downloads');
define('_SUBMITNEWS', 'Artikel inzenden');
define('_USERSMANAGER', 'Gebruikersbeheer');
define('_WEB_LINKS', 'Web Links');

//common module fields
define('_PROPERTIES', 'Eigenschappen');
define('_CONTENT', 'Inhoud');
define('_DESCRIPTION', 'Beschrijving');
define('_EMAIL' ,'E-mail adres');
define('_ID', 'Intern ID');
define('_LANGUAGE', 'Taal');
define('_META', 'Meta gegevens');
define('_META_FLC', 'Meta Gegevens');
define('_NAME', 'Naam');
define('_OPTIONAL', 'Optioneel');
define('_OPTIONS', 'Opties');
define('_PASSWORD', 'Wachtwoord');
define('_REQUIRED', 'Verplicht');
define('_TITLE', 'Titel');
define('_USERID', 'Gebruikers ID');
define('_USERNAME' ,'Gebruikersnaam');
define('_USERNAME_FLC', 'Gebruikersnaam');
define('_VALUE', 'Waarde');
define('_LINKSPERPAGE', 'Links per pagina');

// permalinks system
define('_PERMALINK', 'Permalink');
define('_PERMALINKS', 'Permalinks');
define('_PERMALINKTITLE', 'Permalink URL titel');
define('_PERMALINKTITLEBLANK', '(Leeg laten om automatisch te genereren)');
define('_PURGEPERMALINKS', 'Permalinks opschonen');
define('_PURGEPERMALINKSSUCCESFUL', 'opschonen van permalinks geslaagd');
define('_PURGEPERMALINKSFAILED', 'Opschonen van permalinks mislukt');
define('_ADDCATEGORYTITLETOPERMALINK', 'Categorie titel toevoegen aan permalink');

// member descriptors
define('_GUEST','gast');
define('_GUEST0','gasten');
define('_GUESTS','gasten');
define('_MEMBER','lid');
define('_MEMBER0','leden');
define('_MEMBERS','leden');

// member states
define('_ONLINE','online');
define('_OFFLINE','offline');

// common zikula terms
define('_BLOCK' ,'Blok');
define('_BLOCKS' ,'Blokken');
define('_CUSTOMARGS', 'Eigen Argumenten');
define('_FUNCTIONTYPE', 'Functie type');
define('_FUNCTIONTYPES', 'Functie type(n)');
define('_FUNCTION', 'Functie');
define('_FUNCTIONS', 'Functies');
define('_HOOK', 'Hook');
define('_HOOKS', 'Hooks');
define('_LEGACY', 'Legacy');
define('_MODULE', 'Module');
define('_MODULES', 'Modules');
define('_PARAMETERS', 'Parameters');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Plugins');
define('_PROFILE', 'Persoonlijke Info');
define('_TEMPLATE', 'Template');
define('_TEMPLATES', 'Templates');
define('_THEME', 'Theme');
define('_THEMES', 'Themes');

// other common terms
define('_DIRECTORY', 'Directory');
define('_POWEREDBY', 'Deze site maakt gebruik van');
define('_VERSION', 'Versie');
define('_COPYRIGHT', 'Copyright');
define('_VALIDXHTML', 'Geldige XHTML');
define('_VALIDCSS', 'Geldige CSS');
define('_MOREINFOHERE_LC', 'meer info');
define('_MOREINFOHERE_UC', 'Meer Info');
define('_PERMITTEDHTMLTAGSREMINDER', 'Toegestane HTML tags:');
define('_PERMITTEDHTMLTAGSSHORTREMINDER', 'HTML toegestaan');
define('_PUNC_PERIOD', '.');
define('_PUNC_COLON', ':');
define('_PUNC_SEMICOLON', ';');
define('_PUNC_QUESTIONMARK', '?');
define('_PUNC_OPENPARENTHESIS','(');
define('_PUNC_CLOSEPARENTHESIS', ')');
define('_PUNC_OPENDOUBLEQUOTE', '"');
define('_PUNC_CLOSEDOUBLEQUOTE', '"');
define('_PUNC_OPENSINGLEQUOTE', '\'');
define('_PUNC_CLOSESINGLEQUOTE', '\'');


// module system
define('_BADAUTHKEY', 'Ongeldige \'autorisatiesleutel\': Dit betekent waarschijnlijk dat de terug-knop in de browser is gebruikt, of dat de autorisatiesleutel van de pagina verlopen is. A.u.b. de pagina vernieuwen en nogmaals proberen.');
define('_CANCELDELETE', 'Annuleer het verwijderen van het item.');
define('_CANCELEDIT', 'Annuleer het bewerken van het item.');
define('_CONFIGUPDATED', 'Module configuratie bijgewerkt.');
define('_CONFIGUPDATEFAILED', 'Bijwerken van module configuratie is mislukt.');
define('_CONFIRMDELETE', 'Bevestig het verwijderen van het item');
define('_CONFIRMDELETEITEM', 'Bevestig het verwijderen van %i%');
define('_CREATEDBY', 'Aangemaakt door %username%');
define('_CREATEDBYON', 'Aangemaakt door %username% op %date%');
define('_CREATEDON', 'Aangemaakt op %date%');
define('_CREATEITEM', 'Maak %i% aan');
define('_CREATEFAILED','Foutmelding: poging tot aanmaken is mislukt.');
define('_CREATEINDEXFAILED', 'Foutmelding: aanmaken van index is mislukt.');
define('_CREATEITEMSUCCEDED','%i% aangemaakt.');
define('_CREATESUCCEDED','Item aangemaakt.');
define('_CREATETABLEFAILED','Foutmelding: aanmaken van tabel is mislukt.');
define('_DELETEITEM', 'Verwijder %i%');
define('_DELETEFAILED','Foutmelding: poging tot verwijderen is mislukt.');
define('_DELETEITEMSUCCEDED','%i% verwijderd.');
define('_DELETESUCCEDED','Item verwijderd.');
define('_DELETETABLEFAILED','Foutmelding: verwijderen van tabel is mislukt.');
define('_DROPCOLUMNFAILED', 'Foutmelding: verwijderen van kolom is mislukt.');
define('_DROPINDEXFAILED', 'Foutmelding: verwijderen van index is mislukt.');
define('_FAILEDTOLOADMODULE', 'Module <strong>%m%<strong> kon niet geladen worden.');
define('_FAILEDTOLOADMODULEATFUNC', 'Module <strong>%m%<strong> kon niet geladen worden (bij functie: <strong>%f%</strong>).');
define('_GETFAILED', 'Foutmelding: Er was een probleem bij het laden van de items.');
define('_GETITEMSFAILED', 'Foutmelding: Er was een probleem bij het laden van %i%.');
define('_GENERALSETTINGS', 'Algemene instellingen');
define('_LOADAPIFAILED', 'Foutmelding: Module API kon niet geladen worden.');
define('_LOADFAILED','Foutmelding: Module kon niet geladen worden.');
define('_MODARGSERROR','Foutmelding: Dit verzoek kon niet worden uitgevoerd. Controleer de ingevoerde gegevens.');
define('_MODIFYCONFIG', 'Wijzig configuratie');
define('_MODIFYCONFIGITEM', '%1% Instellingen');
define('_MODIFYITEM', 'Wijzig %i%');
define('_MODULENOAUTH', 'Sorry! Geen rechten om deze module te benaderen.');
define('_MODULENODIRECTACCESS', 'Sorry! Deze module kan niet rechtstreeks worden benaderd.');
define('_MODULENOTAVAILABLE', 'Module <strong>%m%</strong> niet beschikbaar.');
define('_MODULERETURNED', 'Functie <strong>%f%</strong> in module <strong>%m%</strong> retourneerde.');
define('_MUSTBENUMERIC', 'De \'%s%\' instelling moet numeriek zijn.');
define('_NEWITEM', 'Nieuw %i%');
define('_NOITEMSFOUND', 'Geen items gevonden.');
define('_NOFOUND', 'Geen %i% gevonden.');
define('_NOSUCHITEM', 'Dit item werd niet gevonden.');
define('_NOSUCHITEMFOUND', 'Item %i% werd niet gevonden.');
define('_REGISTERFAILED', 'Foutmelding: Hook registreren mislukt.');
define('_RENAMECOLUMNFAILED', 'Foutmelding: Kolom hernoemen mislukt.');
define('_RENAMETABLEFAILED', 'Foutmelding: Tabel hernoemen mislukt.');
define('_SEARCHITEMS', 'Zoeken naar %i%');
define('_SEARCHRESULTSFOUND', '%x% treffer(s) gevonden.');
define('_SEARCHRESULTSNOITEMSFOUND', 'Geen %i% treffers gevonden.');
define('_TEMPLATENOTAVAILABLE', 'Template %t% kon niet geladen worden voor module %m%.');
define('_TRANSACTIONFAILED', 'Transactie mislukt... Ongedaan maken!');
define('_UNABLETOLOADCLASS', 'Foutmelding: Class [%s%] kon niet geladen worden');
define('_UNABLETOLOADMODULECLASS', 'Foutmelding: Module class [%s%] voor module [%m%] kon niet geladen worden');
define('_UNABLETOLOADMODULEARRAYCLASS', 'Foutmelding: Module array class [%s%] voor module [%m%] kon niet geladen worden');
define('_UNKNOWNFUNC', 'Fout: Aanroep naar onbekende functie:');
define('_UNKNOWNUSER', 'Fout: onbekende gebruiker');
define('_UNREGISTERFAILED', 'Foutmelding: hook deregistreren mislukt.');
define('_UPDATEITEM', 'Werk %i% bij');
define('_UPDATECONFIG', 'Configuratie bijwerken');
define('_UPDATEDBY', 'Bijgewerkt door %username%');
define('_UPDATEDBYON', 'Bijgewerkt door %username% op %date%');
define('_UPDATEDON', 'Bijgewerkt op %date%');
define('_UPDATEFAILED','Foutmelding: poging tot bijwerken mislukt.');
define('_UPDATETABLEFAILED','Foutmelding: bijwerken van tabel is mislukt.');
define('_UPDATEITEMSUCCEDED','%i% bijgewerkt.');
define('_UPDATESUCCEDED','Item bijgewerkt.');
define('_VIEWCONFIG', 'Bekijk configuratie');
define('_VIEWITEMS', 'Bekijk %i%');

// Central administration define
define('_ADMINMENU','Beheer overzicht');

// defines for the pager plugin
define('_FIRSTPAGE', 'Eerste');
define('_FIRSTPAGE_TITLE', 'Eerste pagina');
define('_ITEMSPERPAGE', 'Items per pagina');
define('_PREVIOUSPAGE', 'Vorige');
define('_PREVIOUSPAGE_TITLE', 'Vorige pagina');
define('_LASTPAGE', 'Laatste');
define('_LASTPAGE_TITLE', 'Laatste pagina');
define('_NEXTPAGE', 'Volgende');
define('_NEXTPAGE_TITLE', 'Volgende pagina');
define('_NONEXTPAGE', 'Geen verdere pagina\'s beschikbaar');
define('_NOPREVIOUSPAGE', 'Geen eerdere pagina\'s beschikbaar');
define('_PAGE', 'Pagina');
define('_PERPAGE', '%i% per pagina');
define('_TOTAL', 'Totaal');

// WorkflowUtil
define('_WF_STATEERROR', 'Workflow Status Foutmelding');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Dit is een verplicht veld.');
define('_PNFORM_MANDATORYSELECTERROR', 'Maak a.u.b. een keuze.');
define('_PNFORM_MAXLENGTHERROR', 'Ingevoerde tekst mag niet meer dan %s karakters bevatten.');
define('_PNFORM_SELECTDATE', 'Selecteer datum');
define('_PNFORM_RANGEERROR', 'De waarde zit niet in het toegestane bereik.');
define('_PNFORM_RANGEMINERROR', 'De waarde moet minstens %i% zijn.');
define('_PNFORM_RANGEMAXERROR', 'De waarde moet ten hoogste %i% zijn.');
define('_PNFORM_UPLOADERROR', 'Fout bij het ontavngen van het bestand.');

// categories system
define('_ALLCATEGORIES', 'Alle');
define('_CATEGORY', 'Categorie');
define('_CATEGORY_LC', 'categorie');
define('_CATEGORIES', 'Categorieën');
define('_CATEGORIESMAPPINGS', 'Multi-Categorie koppelingen');
define('_CATEGORIESMAPPINGSCOUNT', 'Aantal Multi-Categorie koppelingen');
define('_CHOOSECATEGORY', 'Kies een categorie');
define('_CHOOSEMODULE', 'Kies een module');
define('_CHOOSETABLE', 'Kies een tabel');
define('_CHOOSEONE', 'Maak een keuze');
define('_ENABLECATEGORIZATION', 'Categorisatie gebruiken');
define('_NOASSIGNEDCATEGORIES', 'Geen toegewezen categorieën');
define('_MODULECATEGORY', 'Module Categorie');
define('_MODULECATEGORY_LC', 'Module categorie');
define('_MODULECATEGORIES', 'Module Categorieën');
define('_CATEGORIZATION', 'Categorisatie');

// attributes system
define('_ATTRIBUTE', 'Attribuut');
define('_ATTRIBUTES', 'Attributen');
define('_ATTRIBUTE_NEW', 'Nieuw attribuut');
define('_ENABLEATTRIBUTION', 'Attributen aanzetten');

// 'templates' for error message
define('_ERROR_ADMIN', '%message% in %func% op regel %line% in bestand %file%.');

// userlinks plugin
define('_YOURACCOUNT', 'Mijn account');
define('_CREATEACCOUNT', 'Een nieuw account registreren');

// online plugin
define('_CURRENTLYONLINE', 'Momenteel hebben we %numguests% %gueststext% en %numusers% %userstext% online.');

// user welcome plugin
define('_WELCOMEUSER', 'Welcome %username%');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Login datum kon niet worden opgeslagen.');
define('_LOGOUTFORCED', 'U bent uitgelogd door een beheerder. A.u.b. opnieuw inloggen.');
define('_REMEMBERME', 'Onthoud mij');

// jscalendar
define('_DATE_SELECTOR', 'Datum selector');

// mailer
define('_ERROR_SENDINGMAIL', 'Er is een fout opgetreden tijdens het versturen van de mail');
define('_ERROR_SENDINGMAIL_ADMINLOG', 'Er is een fout opgetreden tijdens het versturen van de mail met afzender %fromname% (%fromaddress%) naar %toname% (%toaddress%) en onderwerp \'%subject\': %errorinfo%');
define('_ERROR_UNKNOWNMAILERERROR', 'Onbekende foutmelding bij de mailer');

// module vars
define('_ERROR_NONULLVALUEALLOWED', 'Module variabelen met NULL waarden zijn niet toegestaan (module "%modname%" / variabele "%varname%")');

// site disabled template
define('_THISSITEDISABLED', 'Deze site is uitgeschakeld');
define('_ADMINLOGINREQUIRED', 'Om door te gaan is een beheerders login vereist');
define('_ADMINLOGIN', 'Beheerders login');

// exit functionality
define('_EXITINSTALLERROR', 'Installatie Fout:');
define('_EXITHANDLER', 'Exit-Handler: ');
define('_EXITSTACKTRACE', 'Stack Trace:');
