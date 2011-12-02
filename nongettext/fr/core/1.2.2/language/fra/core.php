<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: core.php 1048 2009-07-22 15:29:52Z yokav $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */
 
// date and time defines
define('_DATE','Date');
define('_DATEBRIEF','%d %b %Y');
define('_DATELONG','%A %d %B %Y');
define('_DATESTRING','%A %d %B à %H:%M:%S');
define('_DATESTRING2', '%A %d %B');
define('_DATETIMEBRIEF','%d %b %Y - %H:%M');
define('_DATETIMELONG','%A %d %B %Y - %H:%M');
define('_DATEINPUT', '%Y-%m-%d'); // Dateformat for input fields (parsable - ne pas essayer d\'autre format !)
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M'); // Date+time format for input fields (parsable - ne pas essayer d\'autre format !)
define('_DATEFIRSTWEEKDAY', 1); // 0 = dimanche, 1 = lundi et ainsi de suite
define('_DAY_OF_WEEK_LONG','Dimanche Lundi Mardi Mercredi Jeudi Vendredi Samedi');
define('_DAY_OF_WEEK_SHORT','Dim Lun Mar Mer Jeu Ven Sam');
define('_MONTH_LONG','Janvier Février Mars Avril Mai Juin Juillet Août Septembre Octobre Novembre Décembre');
define('_MONTH_SHORT','Jan Fév Mar Avr Mai Jn Jl Août Sep Oct Nov Déc');
define('_TIME', 'Heure');
define('_TIMEBRIEF','%H:%M');
define('_TIMELONG','%T %p');
define('_TIMEFORMAT', 24);
define('_SECOND', 'seconde');
define('_SECONDS', 'secondes');
define('_MINUTE', 'minute');
define('_MINUTES', 'minutes');
define('_DAY', 'jour');
define('_DAYS', 'jours');
define('_WEEK', 'semaine');
define('_WEEKS', 'semaines');
define('_MONTH', 'mois');
define('_MONTHS', 'mois');
define('_YEAR', 'année');
define('_YEARS', 'années');
define('_NOTAVALIDCATEGORY', 'Catégorie invalide');
define('_NOTAVALIDDATE', 'Date invalide');
define('_NOTAVALIDINT', 'Nombre entier invalide');
define('_NOTAVALIDNUMBER', 'Nombre invalide');
define('_NOTAVALIDEMAIL', 'Adresse e-mail invalide');
define('_NOTAVALIDURL', 'Url invalide');

// time zone defines
define('_TIMEZONES','GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS','-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET','ISO-8859-1');
define('_LOCALE','fr_FR');
define('_LOCALEWIN', 'fra');
define('_ERROR_LOCALENOTSET', 'Impossible d\'appliquer la localisation : %locale%');
define('_PERMLINK_LOCALESEARCH', 'ÀÁÂÃÅàáâãåÒÓÔÕØòóôõøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛùúûÿÑñ');
define('_PERMLINK_LOCALEREPLACE', 'AAAAAaaaaaOOOOOoooooEEEEeeeeCcIIIIiiiiUUUuuuyNn');
define('_ALPHABET', 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z');

// common footer defines
define('_CMSHOMELINK', '<a href="http://www.zikula.fr">Zikula</a>');
define('_XHTMLVALIDATORLINK', '<a href="http://validator.w3.org/check?uri=referer">XHTML</a>');
define('_CSSVALIDATORLINK', '<a href="http://jigsaw.w3.org/css-validator/">CSS</a>');
define('_ISPOWEREDBY', 'fonctionne grâce à');

// common words
define('_ZIKULA', 'Zikula');
define('_ALL','Tous');
define('_AND','et');
define('_BY','par');
define('_DOWN','Bas');
define('_FOR', 'pour');
define('_NO','Non');
define('_NO_SHORT','N');
define('_OF','de');
define('_OK','Valider');
define('_ON','Actif');
define('_OR', 'ou');
define('_TO','a');
define('_UP','Haut');
define('_URL', 'Url');
define('_YES','Oui');
define('_YES_SHORT','O');

// on/off states
define('_ONOFF_ON','Marche');
define('_ONOFF_OFF', 'Arrêt');
define('_OFF_UC','ARRET');
define('_ON_UC','MARCHE');

// standard permissions levels
define('_ACCESS_ADD','Ajouter');
define('_ACCESS_ADMIN','Administrer');
define('_ACCESS_COMMENT','Commenter');
define('_ACCESS_DELETE','Supprimer');
define('_ACCESS_EDIT','Modifier');
define('_ACCESS_MODERATE','Modérer');
define('_ACCESS_NONE','Aucun');
define('_ACCESS_OVERVIEW','Survoler');
define('_ACCESS_READ','Lire');

// extended (pnobjlib) permission levels
define('_PN_TEXT_PERMISSION_BASIC_PRIVATE',	'Privé');
define('_PN_TEXT_PERMISSION_BASIC_GROUP',	'Groupe');
define('_PN_TEXT_PERMISSION_BASIC_PUBLIC',	'Publique');
define('_PN_TEXT_PERMISSION_BASIC_USER',	'Utilisateur');
define('_PN_TEXT_PERMISSION_LEVEL_NONE', 	'Aucune');
define('_PN_TEXT_PERMISSION_LEVEL_READ',	'Lecture');
define('_PN_TEXT_PERMISSION_LEVEL_WRITE',	'Ecriture');
define('_PN_TEXT_NOAUTH_NONE', 'Vous n\'avez pas les droits d\'accès pour ce module.');
define('_PN_TEXT_NOAUTH_OVERVIEW', 'Vous n\'avez pas les droits de survol pour ce module.');
define('_PN_TEXT_NOAUTH_READ', 'Vous n\'avez pas les droits de lecture pour ce module.');
define('_PN_TEXT_NOAUTH_COMMENT', 'Vous n\'avez pas les droits de commentaire pour ce module.');
define('_PN_TEXT_NOAUTH_MODERATION', 'Vous n\'avez pas les droits de modération pour ce module.');
define('_PN_TEXT_NOAUTH_EDIT', 'Vous n\'avez pas les droits de modification pour ce module.');
define('_PN_TEXT_NOAUTH_ADD', 'Vous n\'avez pas les droits d\'ajout pour ce module.');
define('_PN_TEXT_NOAUTH_DELETE', 'Vous n\'avez pas les droits de suppression pour ce module.');
define('_PN_TEXT_NOAUTH_ADMIN', 'Vous n\'avez pas les droits d\'administration pour ce module.');

// common actions & results
define('_ACTIONS', 'Actions');
define('_ACTION', 'Action');
define('_ACTIVATE','Activer');
define('_ACTIVE','Actif');
define('_ACTIVATED', 'Activé');
define('_ADD','Ajouter');
define('_BACK', 'Retour');
define('_CANCEL', 'Annuler');
define('_CLEAR', 'Effacer');
define('_CLOSE', 'Fermer');
define('_CONFIRM', 'Confirmer');
define('_CONTINUE', 'Continuer');
define('_COMMIT', 'Mettre à jour');
define('_COPY', 'Copier');
define('_CREATE', 'Créer');
define('_DEACTIVATE','Désactiver');
define('_DEACTIVATED', 'Désactivé');
define('_DEFAULT', 'Défaut');
define('_DEFAULTS', 'Défauts');
define('_DELETE','Supprimer');
define('_DETAILS', 'Détails');
define('_EDIT','Modifier');
define('_FILTER', 'Filtre');
define('_FORWARD', 'Faire suivre');
define('_HELP', 'Aide');
define('_HELPPAGE', 'Page d\'Aide');
define('_MESSAGESYOUMIGHTSEE', 'Messages que vous devriez lire');
define('_CONFIRMATIONPROMPT', 'Avertissement avant confirmation');
define('_IGNORE','Ignorer');
define('_INACTIVE','Inactif');
define('_LOGIN','Identification');
define('_LOGIN_FLC','Identification');
define('_LOGOUT','Déconnexion');
define('_MODIFY','Modifier');
define('_MOVE', 'Déplacer');
define('_NEW','Nouveau');
define('_NEXT', 'Suivant');
define('_OPEN', 'Ouvrir');
define('_PREVIOUS', 'Précédent');
define('_REMOVE', 'Enlever');
define('_RESET', 'Ré-initialiser');
define('_SAVE', 'Enregistrer');
define('_SEARCH', 'Rechercher');
define('_STATE','Etat');
define('_SUBMIT','Valider');
define('_UPDATE', 'Mettre à jour');
define('_VIEW', 'Afficher');

//common module names
define('_COMMENTS', 'Commentaires');
define('_DOWNLOADS', 'Téléchargements');
define('_SUBMITNEWS', 'Soumettre un article');
define('_USERSMANAGER', 'Gestion des membres');
define('_WEB_LINKS', 'Liens web');

//common module fields
define('_PROPERTIES', 'Propriétés');
define('_CONTENT', 'Contenu');
define('_DESCRIPTION', 'Description');
define('_EMAIL' ,'Adresse e-mail');
define('_ID', 'ID');
define('_LANGUAGE', 'Langue');
define('_META', 'Meta données');
define('_META_FLC', 'Meta données');
define('_NAME', 'Nom');
define('_OPTIONAL', 'Optionnel');
define('_OPTIONS', 'Options');
define('_PASSWORD', 'Mot de passe');
define('_REQUIRED', 'Nécessaire');
define('_TITLE', 'Titre');
define('_USERID', 'ID utilisateur');
define('_USERNAME' ,'Identifiant');
define('_USERNAME_FLC', 'Identifiant');
define('_VALUE', 'Valeur');
define('_LINKSPERPAGE', 'Liens par page');

// permalinks system
define('_PERMALINK', 'Lien permanent');
define('_PERMALINKS', 'Liens permanents');
define('_PERMALINKTITLE', 'Titre du lien permanent');
define('_PERMALINKTITLEBLANK', '(Laisser vide pour générer automatiquement un titre de lien permanent)');
define('_PURGEPERMALINKS', 'Epurer les liens permanents');
define('_PURGEPERMALINKSSUCCESFUL', 'L\'épuration des liens permanents a réussi');
define('_PURGEPERMALINKSFAILED', 'L\'épuration des liens permanents a échoué');
define('_ADDCATEGORYTITLETOPERMALINK', 'Ajouter le titre de la catégorie au lien permanent');

// member descriptors
define('_GUEST','visiteur');
define('_GUEST0','visiteur');
define('_GUESTS','visiteurs');
define('_MEMBER','membre');
define('_MEMBER0','membre');
define('_MEMBERS','membres');

// member states
define('_ONLINE','en ligne');
define('_OFFLINE','hors ligne');

// common zikula terms
define('_BLOCK' ,'Bloc');
define('_BLOCKS' ,'Blocs');
define('_CUSTOMARGS', 'Arguments personnalisés');
define('_FUNCTIONTYPE', 'Type de fonction');
define('_FUNCTIONTYPES', 'Type(s) de fonction');
define('_FUNCTION', 'Fonction');
define('_FUNCTIONS', 'Fonctions');
define('_HOOK', 'Extension');
define('_HOOKS', 'Extensions');
define('_LEGACY', 'Legs');
define('_MODULE', 'Module');
define('_MODULES', 'Modules');
define('_PARAMETERS', 'Paramètres');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Plugins');
define('_PROFILE', 'Profil');
define('_TEMPLATE', 'Template');
define('_TEMPLATES', 'Templates');
define('_THEME', 'Thème');
define('_THEMES', 'Thèmes');

// other common terms
define('_DIRECTORY', 'Répertoire');
define('_POWEREDBY', 'Propulsé par');
define('_VERSION', 'Version');
define('_COPYRIGHT', 'Copyright');
define('_VALIDXHTML', 'XHTML Valide');
define('_VALIDCSS', 'CSS Valide');
define('_MOREINFOHERE_LC', 'd\'avantage d\'informations ici');
define('_MOREINFOHERE_UC', 'D\'avantage d\'informations ici');
define('_PERMITTEDHTMLTAGSREMINDER', 'Balises HTML autorisées :');
define('_PERMITTEDHTMLTAGSSHORTREMINDER', 'HTML autorisé');
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
define('_BADAUTHKEY','Clé d\'authentification invalide : cela signifie que vous avez cliqué sur le bouton page précédente, ou que la page authentifiée a expirée. Veuillez rafraîchir la page et recommencer.');
define('_CANCELDELETE', 'Annuler la suppression de l\'élément.');
define('_CANCELEDIT', 'Annuler la modification de l\'élément.');
define('_CONFIGUPDATED', 'Configuration du module mise à jour.');
define('_CONFIGUPDATEFAILED', 'Erreur : Echec de la mise à jour de la configuration du module.');
define('_CONFIRMDELETE', 'Confirmer la suppression de l\'élément');
define('_CONFIRMDELETEITEM', 'Confirmez-vous la suppression de %i% ?');
define('_CREATEDBY', 'Créé par %username%');
define('_CREATEDBYON', 'Créé par %username% le %date%');
define('_CREATEDON', 'Créé le %date%');
define('_CREATEITEM', 'Créer %i%');
define('_CREATEFAILED','Erreur : la création a échoué.');
define('_CREATEINDEXFAILED', 'Erreur : La création de l\'index a échoué.');
define('_CREATEITEMSUCCEDED','%i% créé.');
define('_CREATESUCCEDED','Elément créé.');
define('_CREATETABLEFAILED','Erreur : Echec de la création de la table.');
define('_DELETEITEM', 'Supprimer %i%');
define('_DELETEFAILED','Erreur : Echec de la suppression.');
define('_DELETEITEMSUCCEDED','%i% supprimé.');
define('_DELETESUCCEDED','Elément supprimé.');
define('_DELETETABLEFAILED','Erreur : Echec de la suppression de la table.');
define('_DROPCOLUMNFAILED', 'Erreur : Echec de la suppression de la colonne.');
define('_DROPINDEXFAILED', 'Erreur : Echec de la suppression de l\'index.');
define('_FAILEDTOLOADMODULE', 'Erreur : Impossible de charger le module <strong>%m%<strong>.');
define('_FAILEDTOLOADMODULEATFUNC', 'Erreur : Impossible de charger le module <strong>%m%</strong> (avec la fonction: <strong>%f%</strong>).');
define('_GETFAILED', 'Erreur : Un problème est survenu lors du chargement des éléments.');
define('_GETITEMSFAILED', 'Erreur : Un problème est survenu lors du chargement de %i%.');
define('_GENERALSETTINGS', 'Paramètres Généraux');
define('_LOADAPIFAILED', 'Erreur : Un problème est survenu lors du chargement de l\'API.');
define('_LOADFAILED','Erreur : Un problème est survenu lors du chargement du module.');
define('_MODARGSERROR','Erreur : Un problème est survenu lors du traitement de votre demande. Merci de vérifier les données d\'entrées.');
define('_MODIFYCONFIG', 'Paramètres');
define('_MODIFYCONFIGITEM', '%1% Paramètres');
define('_MODIFYITEM', 'Modifier %i%');
define('_MODULENOAUTH', 'Désolé, vous n\'avez pas l\'autorisation d\'accéder à ce module.');
define('_MODULENODIRECTACCESS', 'Désolé, vous ne pouvez pas accéder directement à ce module.');
define('_MODULENOTAVAILABLE', 'Désolé, module <strong>%m%</strong> non disponible.');
define('_MODULERETURNED', 'Résultat de la fonction <strong>%f%</strong> du module <strong>%m%</strong>.');
define('_MUSTBENUMERIC', '\'%s%\' : ce paramètre doit être numérique.');
define('_NEWITEM', 'Créer %i%');
define('_NOITEMSFOUND', 'Aucun élément trouvé.');
define('_NOFOUND', 'Aucun %i% trouvé.');
define('_NOSUCHITEM', 'Aucun élément trouvé.');
define('_NOSUCHITEMFOUND', 'Pas de résultat trouvé pour %i%.');
define('_REGISTERFAILED', 'Erreur : Echec lors de l\'enregistrement de l\'extension');
define('_RENAMECOLUMNFAILED', 'Erreur : Echec du renommage de la colonne.');
define('_RENAMETABLEFAILED', 'Erreur : Le renommage de la table a echoué.');
define('_SEARCHITEMS', 'Recherche pour %i%');
define('_SEARCHRESULTSFOUND', '%x% résultat(s) trouvé(s).');
define('_SEARCHRESULTSNOITEMSFOUND', 'Aucun %i% trouvé.');
define('_TEMPLATENOTAVAILABLE', 'Template %t% n\'a pu être trouvé pour le module %m%.');
define('_TRANSACTIONFAILED', 'Transaction interrompue... Revenez en arrière !');
define('_UNABLETOLOADCLASS', 'Erreur : Impossible de charger la classe [%s]');
define('_UNABLETOLOADMODULECLASS', 'Erreur : Impossible de charger la classe de module [%s] pour le module [%s]');
define('_UNABLETOLOADMODULEARRAYCLASS', 'Erreur : Impossible de charger le tableau de classe de module [%s] pour module [%s]');
define('_UNKNOWNFUNC', 'Erreur: Appel de fonction inconnue :');
define('_UNKNOWNUSER', 'utilisateur inconnu');
define('_UNREGISTERFAILED', 'Erreur : Echec lors de la suppression de l\'extension.');
define('_UPDATEITEM', 'Mise à jour de %i%');
define('_UPDATECONFIG', 'Mettre à jour la configuration');
define('_UPDATEDBY', 'Mis à jour par %username%');
define('_UPDATEDBYON', 'Mis à jour par %username% le %date%');
define('_UPDATEDON', 'Mis à jour le %date%');
define('_UPDATEFAILED','Erreur : Echec de la mise à jour.');
define('_UPDATETABLEFAILED','Erreur : Echec de la mise à jour de la table.');
define('_UPDATEITEMSUCCEDED','%i% mis à jour.');
define('_UPDATESUCCEDED','Elément mis à jour.');
define('_VIEWCONFIG', 'Afficher la configuration');
define('_VIEWITEMS', 'Afficher %i%');

// Central administration define
define('_ADMINMENU','Interface d\'Administration');

// defines for the pager plugin
define('_FIRSTPAGE', 'Première');
define('_FIRSTPAGE_TITLE', 'Première page');
define('_ITEMSPERPAGE', 'Eléments par page');
define('_PREVIOUSPAGE', 'Précédent');
define('_PREVIOUSPAGE_TITLE', 'Page précédente');
define('_LASTPAGE', 'Dernière');
define('_LASTPAGE_TITLE', 'Dernière page');
define('_NEXTPAGE', 'Suivante');
define('_NEXTPAGE_TITLE', 'Page suivante');
define('_NONEXTPAGE', 'Pas de page suivante');
define('_NOPREVIOUSPAGE', 'Pas de page précédente');
define('_PAGE', 'Page');
define('_PERPAGE', '%i% par page');
define('_TOTAL', 'Total');

// WorkflowUtil
define('_WF_STATEERROR', 'Erreur d\'état du Workflow');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Veuillez compléter ce champ.');
define('_PNFORM_MANDATORYSELECTERROR', 'Veuillez sélectionner quelque chose.');
define('_PNFORM_MAXLENGTHERROR', 'Le texte entré ne doit pas contenir plus de %s caractères');
define('_PNFORM_SELECTDATE', 'Sélectionner une date');
define('_PNFORM_RANGEERROR', 'La valeur est hors limite.');
define('_PNFORM_RANGEMINERROR', 'La valeur doit être plus grande ou égale à %i%.');
define('_PNFORM_RANGEMAXERROR', 'La valeur doit être inférieure ou égale à %i%.');
define('_PNFORM_UPLOADERROR', 'Erreur lors de l\'envoi du fichier.');

// categories system
define('_ALLCATEGORIES', '- Toutes -');
define('_CATEGORY', 'Catégorie');
define('_CATEGORY_LC', 'catégorie');
define('_CATEGORIES', 'Catégories');
define('_CATEGORIESMAPPINGS', 'Multi-Catégories');
define('_CATEGORIESMAPPINGSCOUNT', 'Nombre de catégorie multiples');
define('_CHOOSECATEGORY', '- Choisissez une catégorie -');
define('_CHOOSEMODULE', '- Choisissez un module -');
define('_CHOOSETABLE', '- Choisissez une table -');
define('_CHOOSEONE', '- Choisissez en une -');
define('_ENABLECATEGORIZATION', 'Activer la catégorisation');
define('_NOASSIGNEDCATEGORIES', 'Aucune catégorie assignée');
define('_MODULECATEGORY', 'Module Catégorie');
define('_MODULECATEGORY_LC', 'module catégorie');
define('_MODULECATEGORIES', 'Module Catégories');
define('_CATEGORIZATION', 'Catégoriser');

// attributes system
define('_ATTRIBUTE', 'Attribut');
define('_ATTRIBUTES', 'Attributs');
define('_ATTRIBUTE_NEW', 'Nouvel attribut');
define('_ENABLEATTRIBUTION', 'Activer les attributs');

// 'templates' for error message
define('_ERROR_ADMIN', '%message% %func% à la ligne %line% dans le fichier %file%');

// userlinks plugin
define('_YOURACCOUNT', 'Votre compte');
define('_CREATEACCOUNT', 'Créer un compte');

// onlune plugin
define('_CURRENTLYONLINE', 'Il y a actuellement %numguests% %gueststext% et %numusers% %userstext% en ligne');

// user welcome plugin
define('_WELCOMEUSER', 'Bienvenue %username%');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Erreur : Impossible d\'enregistrer la date de connexion.');
define('_LOGOUTFORCED', 'Vous avez été déconnecté par un administrateur. Veuillez vous connecter à nouveau.');
define('_REMEMBERME', 'Se souvenir de moi');

// jscalendar
define('_DATE_SELECTOR', 'Sélection de date');

// mailer
define('_ERROR_SENDINGMAIL', 'Une erreur est survenue lors de l\'envoi de l\'e-mail');
define('_ERROR_SENDINGMAIL_ADMINLOG', 'Une erreur est survenue lors de l\'envoi de l\'e-mail de %fromname% (%fromaddress%) à %toname% (%toaddress%) ayant comme objet \'%subject\' : %errorinfo%');
define('_ERROR_UNKNOWNMAILERERROR', 'Erreur inconnue du mailer');

// module vars
define('_ERROR_NONULLVALUEALLOWED', 'Les variables de module avec une valeur NULL ne sont pas autorisées (%modname%/%varname%)');

// site disabled template
define('_THISSITEDISABLED', 'Ce site a été fermé');
define('_ADMINLOGINREQUIRED', 'Une connexion au compte admin est nécessaire pour réaliser cette action');
define('_ADMINLOGIN', 'Connexion Admin');

// exit functionality
define('_EXITINSTALLERROR', 'Erreur de l\'installation :');
define('_EXITHANDLER', 'Fonction qui ferme le processus : ');
define('_EXITSTACKTRACE', 'Suivi des fonctions exécutées :');
