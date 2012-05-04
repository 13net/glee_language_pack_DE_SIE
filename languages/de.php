<?php
/**
 * Core German Language
 *
 * @package Elgg.Core
 * @subpackage Languages.German
 */

$german = array(

/**
 * Sites
 */

	'item:site' => 'Seiten',

/**
 * Sessions
 */

	'login' => "Anmelden",
	'loginok' => "Sie sind nun angemeldet.",
        'loginerror' => "Die Anmeldung ist fehlgeschlagen. Bitte prüfen Sie, ob Ihre Eingaben für die Anmeldung richtig sind und versuchen Sie es erneut.",
        'login:empty' => "Benutzername/Email-Adresse und Passwort müssen eingegeben werden.",
        'login:baduser' => "Ihr Benutzeraccount ist nicht verfügbar.",
        'auth:nopams' => "Interner Fehler. Keine Methode zur Benutzerauthentifizierung installiert.",

	'logout' => "Abmelden",
	'logoutok' => "Sie sind nun abgemeldet.",
	'logouterror' => "Wir konnten Sie nicht abmelden. Bitte versuchen Sie es erneut.",

	'loggedinrequired' => "Sie müssen angemeldet sein, um diese Seite aufrufen zu können.",
	'adminrequired' => "Sie müssen ein Administrator sein, um diese Seite aufrufen zu können.",
	'membershiprequired' => "Sie müssen Mitglied dieser Gruppe sein, um diese Seite aufrufen zu können.",


/**
 * Errors
 */
	'exception:title' => "Schwerwiegender Fehler.",

	'InstallationException:CantCreateSite' => "Die Elgg-Seite mit Namen %s und URL %s konnte nicht erzeugt werden.",

	'actionundefined' => "Die angeforderte Aktion (%s) ist im System nicht definiert.",
        'actionnotfound' => "Die Datei für die Ausführung der Aktion %s wurde nicht gefunden.",
	'actionloggedout' => "Entschuldigung, Sie können diese Aktion nicht ausführen während Sie nicht angemeldet bist.",
	'actionunauthorized' => 'Sie sind nicht authorisiert, diese Aktion auszuführen',

        'InstallationException:SiteNotInstalled' => 'Die angeforderte Seite kann nicht geladen werden. Die Community-Seite '
        . ' ist nicht konfiguriert oder die zugehörige Datenbank ist nicht verfügbar.',
        'InstallationException:MissingLibrary' => '%s kann nicht geladen werden.',
        'InstallationException:CannotLoadSettings' => 'Elgg kann die Konfigurationsdatei settings.php nicht laden. Entweder existiert die Datei nicht oder der Zugriff ist aufgrund fehlender Zugriffsrechte blockiert.',

	'SecurityException:Codeblock' => "Zugriff auf die Ausführung des privilegierten Codeabschnittes verweigert.",
	'DatabaseException:WrongCredentials' => "Elgg konnte mit den gegebenen Verbindungsparametern keine Verbindung zur Datenbank herstellen. Bitte prüfe die Konfiguration in settings.pgp.",
	'DatabaseException:NoConnect' => "Elgg konnte keine Verbindung mit der Datenbank '%s' herstellen. Bitte prüfen Sie, ob die Datenbank erzeugt wurde und Sie die Rechte haben, darauf zuzugreifen.",
	'SecurityException:FunctionDenied' => "Zugriff auf die privilegierte Funktion '%s' verweigert.",
	'DatabaseException:DBSetupIssues' => "Einige Probleme sind aufgetreten: ",
	'DatabaseException:ScriptNotFound' => "Elgg konnte das angeforderte Datenbankskript %s nicht finden.",
        'DatabaseException:InvalidQuery' => "Unzulässige Datenbank-Query.",

	'IOException:FailedToLoadGUID' => "Das Laden der neuen Form %s von GUID ist gescheitert:%d",
	'InvalidParameterException:NonElggObject' => "Übergabe eines unzulässigen ElggObjects an einen ElggObject-Konstruktor!",
	'InvalidParameterException:UnrecognisedValue' => "Unbekannter Wert einen Konstruktor übergeben.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d ist kein zulässiger %s",

        'PluginException:MisconfiguredPlugin' => "%s (GUID: %s) ist ein falsch konfiguriertes Plugin. Es wurde deaktiviert. Im Elgg-Wiki sind einige mögliche Ursachen für das Problem beschrieben (http://docs.elgg.org/wiki/).",
        'PluginException:CannotStart' => '%s (GUID: %s) kann nicht gestartet werden und wurde deaktiviert. Ursache: %s.',
        'PluginException:InvalidID' => "%s ist eine ungültig Plugin-ID.",
        'PluginException:InvalidPath' => "%s ist ungültiger Plugin-Dateipfad.",
        'PluginException:InvalidManifest' => 'Ungültige Manifest-Datei für das Plugin %s.',
        'PluginException:InvalidPlugin' => '%s ist kein zulässiges Plugin.',
        'PluginException:InvalidPlugin:Details' => '%s ist kein zulässiges Plugin: %s',
        'PluginException:NullInstantiated' => 'Ein ElggPlugin-Objekt kann nicht mit NULL instanziiert werden. Es muss eine GUID, eine Plugin-ID oder ein vollständiger Dateipfad übergeben werden.',

        'ElggPlugin:MissingID' => 'Fehlende Plugin-ID (GUID: %s)',
        'ElggPlugin:NoPluginPackagePackage' => 'Das zugehörige Plugin-Paket für die Plugin-ID %s (GUID: %s) fehlt.',

        'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Fehlende Datei %s im Paket.',
        'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Ungültiger Dependency-Typ "%s".',
        'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Ungültiger Provides-Typ "%s"',
        'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Ungültige %s-Abhängigkeit "%s" im Plugin %s. Plugins können nicht mit etwas in Konflikt stehen oder etwas voraussetzen, das sie selbst bereitstellen!',

        'ElggPlugin:Exception:CannotIncludeFile' => 'Einbindung von %s für Plugin %s (GUID: %s) an %s gescheitert.',
        'ElggPlugin:Exception:CannotRegisterViews' => 'Öffnen des Views-Verzeichnis für Plugin %s (GUID: %s) an %s gescheitert.',
        'ElggPlugin:Exception:CannotRegisterLanguages' => 'Einbinden der Sprachen für Plugin %s (GUID: %s) an %s gescheitert.',
        'ElggPlugin:Exception:NoID' => 'Keine ID für Plugin-GUID %s!',

        'PluginException:ParserError' => 'Das Parsen der Manifest-Datei mit API-Version %s des Plugins %s ist fehlgeschlagen.',
        'PluginException:NoAvailableParser' => 'Es steht kein Parser für die Manifest-API-Version %s des Plugins %s zur Verfügung.',
        'PluginException:ParserErrorMissingRequiredAttribute' => "Fehlendes Required-'%s'-Attribut in der Manifest-Datei des Plugins %s.",

        'ElggPlugin:Dependencies:Requires' => 'Benötigt',
        'ElggPlugin:Dependencies:Suggests' => 'Schlägt vor',
        'ElggPlugin:Dependencies:Conflicts' => 'Im Konflikt mit',
        'ElggPlugin:Dependencies:Conflicted' => 'Im Konflikt mit',
        'ElggPlugin:Dependencies:Provides' => 'Stellt bereit',
        'ElggPlugin:Dependencies:Priority' => 'Priorität',

        'ElggPlugin:Dependencies:Elgg' => 'Elgg-Version',
        'ElggPlugin:Dependencies:PhpExtension' => 'PHP-Erweiterung: %s',
        'ElggPlugin:Dependencies:PhpIni' => 'PHP ini-Einstellung: %s',
        'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
        'ElggPlugin:Dependencies:Priority:After' => 'Nach %s',
        'ElggPlugin:Dependencies:Priority:Before' => 'Vor %s',
        'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s ist nicht installiert.',
        'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Fehlt',

        'ElggPlugin:InvalidAndDeactivated' => '%s ist ein unzulässiges Plugin und wurde deaktiviert.',

	'InvalidParameterException:NonElggUser' => "Übergabe eines unzulässigen ElggUsers-Objekts an einen ElggUser-Konstruktor!",

	'InvalidParameterException:NonElggSite' => "Übergabe einer unzulässigen ElggSite-Objekts an einen ElggSite-Konstruktor!",

	'InvalidParameterException:NonElggGroup' => "Übergabe einer unzulässigen ElggGroup-Objekts an einen ElggGroup-Konstruktor!",

	'IOException:UnableToSaveNew' => "Speichern der neuen %s war nicht erfolgreich.",

	'InvalidParameterException:GUIDNotForExport' => "GUID wurde beim Exportieren nicht spezifiziert. Das sollte normalerweise nicht passieren.",
	'InvalidParameterException:NonArrayReturnValue' => "Der Entitäts-Serialisierungs-Funktion wurde ein Rückgabewert übergeben, der nicht als Feld definiert ist.",

	'ConfigurationException:NoCachePath' => "Der Pfad des Cache ist nicht gesetzt!",
	'IOException:NotDirectory' => "%s ist kein Verzeichnis.",

	'IOException:BaseEntitySaveFailed' => "Das Speichern der Basis-Entitäts-Informationen für das neue Objekt ist gescheitert!",
	'InvalidParameterException:UnexpectedODDClass' => "Eine nicht erwartete ODD Klasse wurde von import() verarbeitet.",
	'InvalidParameterException:EntityTypeNotSet' => "Der Typ der Entität muß gesetzt sein.",

	'ClassException:ClassnameNotClass' => "%s ist kein %s.",
	'ClassNotFoundException:MissingClass' => "Die Klasse '%s' wurde nicht gefunden. Fehlendes Plugin?",
	'InstallationException:TypeNotSupported' => "Typ %s wird nicht unterstützt. Dies weist auf ein Problem in Ihrer Installation hin, höchst wahrscheinlich verursacht durch ein unvollständig durchgeführtes Upgrade.",

	'ImportException:ImportFailed' => "Element %d konnte nicht importiert werden.",
	'ImportException:ProblemSaving' => "Beim Speichern von %s ist ein Problem aufgetreten.",
	'ImportException:NoGUID' => "Es wurde eine neue Entität erzeugt, aber sie hat keine GUID. Das sollte nicht passieren.",

	'ImportException:GUIDNotFound' => "Entität '%d' konnte nicht gefunden werden.",
	'ImportException:ProblemUpdatingMeta' => "Beim Updaten von '%s' der Entität '%d' ist ein Problem aufgetreten.",

	'ExportException:NoSuchEntity' => "Die Entität (GUID:%d) ist nicht vorhanden.",

	'ImportException:NoODDElements' => "Keine OpenDD Elemente in den Importdaten gefunden. Das Importieren ist gescheitert.",
	'ImportException:NotAllImported' => "Es konnten nicht alle Elemente importiert werden.",

	'InvalidParameterException:UnrecognisedFileMode' => "Unbekannter Dateimodus '%s'",
	'InvalidParameterException:MissingOwner' => "Datei %s (Datei-GUID:%d) (Besitzer-GUID:%d) hat keinen Besitzer!",
	'IOException:CouldNotMake' => "%s war nicht möglich.",
	'IOException:MissingFileName' => "Sie müssen einen Namen angeben bevor Du eine Datei öffnen kannst.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Filestore-Klasse %s für Datei %u konnte nicht geladen werden.",
	'NotificationException:NoNotificationMethod' => "Es wurde keine Benachrichtigungsmethode festgelegt.",
	'NotificationException:NoHandlerFound' => "Es wurde kein Handler für '%s' gefunden oder der Handler konnte nicht aufgerufen werden.",
	'NotificationException:ErrorNotifyingGuid' => "Bei der Benachrichtigung von %d ist ein Fehler aufgetreten.",
	'NotificationException:NoEmailAddress' => "Für GUID:%d konnte keine Email-Adresse gefunden werden.",
	'NotificationException:MissingParameter' => "Notwendiger Parameter fehlt, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Der Where-Satz enthält eine ungültige Where-Query-Komponente.",
	'DatabaseException:SelectFieldsMissing' => "Fehlende Felder bei einer Select Style-Query.",
	'DatabaseException:UnspecifiedQueryType' => "Unbekannter oder unspezifizierter Query-Typ.",
	'DatabaseException:NoTablesSpecified' => "Es wurden keine Tablellen für die Query angegeben.",
	'DatabaseException:NoACL' => "Für die Query wurde keine Zugangskontrolle definiert.",

	'InvalidParameterException:NoEntityFound' => "Die Entität konnte nicht gefunden werden. Entweder existiert sie nicht oder Du darfst auf sie nicht zugreifen.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s konnte nicht gefunden werden oder Du darfst darauf nicht zugreifen.",
	'InvalidParameterException:IdNotExistForGUID' => "Entschuldigung, '%s' ist für GUID:%d nicht vorhanden.",
	'InvalidParameterException:CanNotExportType' => "Entschuldigung, wir wissen nicht wie '%s' exportiert werden kann.",
	'InvalidParameterException:NoDataFound' => "Es konnten keine Daten gefunden werden.",
	'InvalidParameterException:DoesNotBelong' => "Gehört nicht zur Entität.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Gehört nicht zur Entität oder zum Verweis auf die Entität.",
	'InvalidParameterException:MissingParameter' => "Fehlender Parameter. Sie müssen eine GUID angeben.",
        'InvalidParameterException:LibraryNotRegistered' => '%s ist keine eingebundene Library.',
        'InvalidParameterException:LibraryNotFound' => 'Die Library %s von %s konnte nicht geladen werden.',

	'APIException:ApiResultUnknown' => "Der Typ der API-Rückgabe ist unbekannt. Das sollte nicht passieren.",
	'ConfigurationException:NoSiteID' => "Es wurde keine Site-ID angegeben.",
	'SecurityException:APIAccessDenied' => "Entschuldigung, der API-Zugriff wurde durch den Administrator deaktiviert.",
	'SecurityException:NoAuthMethods' => "Eine konnte keine Authentifizierungs-Methode gefunden werden, um diesen API-Zugriff zu authentifizieren.",
	'SecurityException:ForwardFailedToRedirect' => 'Die Weiterleitung kann nicht durchgeführt werden, da der Seiten-Header bereits gesendet wurde. Die Ausführung wird sicherheitshalber gestoppt. Bitte gehe zu http://docs.elgg.org/ für weitere Informationen.',
	'SecurityException:UnexpectedOutputInGatekeeper' => 'Unerwartete Rückgabe bei einem Gatekeeper-Aufruf. Die Ausführung wurde zur Sicherheit gestoppt. Bitte gehe zu http://docs.elgg.org/, um detailliertere Informationen zu diesem Problem zu erhalten.',
        'InvalidParameterException:APIMethodOrFunctionNotSet' => "Die Methode oder Funktion wurde im Aufruf in expose_method() nicht gesetzt.",
	'InvalidParameterException:APIParametersArrayStructure' => "Die Parameter-Feldstruktur im Aufruf von Expose-Methode '%s' ist falsch.",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unbekannte Http-Methode %s für API-Mmethode '%s'",
	'APIException:MissingParameterInMethod' => "Fehlender Parameter %s in Methode %s",
	'APIException:ParameterNotArray' => "%s scheint kein Feld zu sein.",
	'APIException:UnrecognisedTypeCast' => "Unbekannter Typ in Cast %s für Variable '%s' in Methode '%s'",
	'APIException:InvalidParameter' => "Ungültiger Parameter für '%s' in Methode '%s' gefunden.",
	'APIException:FunctionParseError' => "%s(%s) ergab einen Parsing-Fehler.",
	'APIException:FunctionNoReturn' => "%s(%s) lieferte keinen Rückgabewert.",
	'APIException:APIAuthenticationFailed' => "Beim Aufruf der Methode schlug die API-Authentifizierung fehl.",
	'APIException:UserAuthenticationFailed' => "Beim Aufruf der Methode schlug die Benutzer-Authentifizierung fehl.",
	'SecurityException:AuthTokenExpired' => "Entweder fehlt das Authentifizierungs-Token, es ist ungültig oder abgelaufen.",
	'CallException:InvalidCallMethod' => "%s muß unter Verwendung von '%s' aufgerufen werden.",
	'APIException:MethodCallNotImplemented' => "Der Methoden-Aufruf '%s' ist nicht implementiert.",
	'APIException:FunctionDoesNotExist' => "Die Funktion für die Methode '%s' kann nicht aufgerufen werden.",
	'APIException:AlgorithmNotSupported' => "Algorithmus '%s' wird nicht unterstützt oder wurde deaktiviert.",
	'ConfigurationException:CacheDirNotSet' => "Das Cache-Verzeichnis 'cache_path' wurde nicht gesetzt.",
	'APIException:NotGetOrPost' => "Die Anfrage-Methode muß GET oder POST sein.",
	'APIException:MissingAPIKey' => "Fehlender API-Schlüssel",
	'APIException:BadAPIKey' => "Ungültiger API-Schlüssel",
	'APIException:MissingHmac' => "Fehlender X-Elgg-hmac Header",
	'APIException:MissingHmacAlgo' => "Fehlender X-Elgg-hmac-algo Header",
	'APIException:MissingTime' => "Fehlender X-Elgg-time Header",
	'APIException:MissingNonce' => "Fehlender X-Elgg-nonce Header",
	'APIException:TemporalDrift' => "Epoch-Fehler: X-Elgg-time liegt zu weit in der Vergangenheit oder Zukunft.",
	'APIException:NoQueryString' => "Fehlende Daten im Query-String",
	'APIException:MissingPOSTHash' => "Fehlender X-Elgg-posthash Header",
	'APIException:MissingPOSTAlgo' => "Fehlender X-Elgg-posthash_algo Header",
	'APIException:MissingContentType' => "Content Typ für POST-Daten fehlt",
	'SecurityException:InvalidPostHash' => "POST-Daten-Hash ist ungültig - Erwartet wurde %s aber %s erhalten.",
	'SecurityException:DupePacket' => "Packet-Signatur ist schon von früher bekannt.",
	'SecurityException:InvalidAPIKey' => "Ungültiger oder fehlender API-Schlüssel.",
	'NotImplementedException:CallMethodNotImplemented' => "Der Methoden-Aufruf '%s' wird derzeit nicht unterstützt.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "Der XML-RPC Methoden-Aufruf '%s' ist nicht implementiert.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Der Aufruf der Methode '%s' lieferte eine unerwartete Rückgabe.",
	'CallException:NotRPCCall' => "Der Aufruf scheint kein zulässiger XML-RPC Aufruf zu sein.",

	'PluginException:NoPluginName' => "Der Name des Plugins wurde nicht gefunden.",

	'SecurityException:authenticationfailed' => "Der Benutzer konnte nicht authentifiziert werden",

	'CronException:unknownperiod' => '%s ist ein unbekanntes Zeitintervall.',

	'SecurityException:deletedisablecurrentsite' => 'Sie können die Site-Installation nicht löschen oder deaktivieren, während Sie sich darauf befinden!',

	'RegistrationException:EmptyPassword' => 'Die Passwort-Felder dürfen nicht leer sein',
	'RegistrationException:PasswordMismatch' => 'Die Passwörter müssen übereinstimmen',
        'LoginException:BannedUser' => 'Ihr Benutzeraccount auf dieser Seite wurde gesperrt. Sie können Dich daher nicht anmelden.',
        'LoginException:UsernameFailure' => 'Die Anmeldung ist fehlgeschlagen. Bitte prüfen Sie, ob Benutzername/Email-Adresse und Passwort richtig eingegeben wurden.',
        'LoginException:PasswordFailure' => 'Die Anmeldung ist fehlgeschlagen. Bitte prüfe Sie, ob Benutzername/Email-Adresse und Passwort richtig eingegeben wurden.',
        'LoginException:AccountLocked' => 'Ihr Benutzeraccount wurde aufgrund zu vieler fehlgeschlagener Anmeldeversuche gesperrt.',
        'LoginException:ChangePasswordFailure' => 'Die Überprüfung des derzeitigen Passworts ist fehlgeschlagen.',

	'memcache:notinstalled' => 'Das PHP-Memcache-Modul ist nicht installiert. Sie müssen php5-memcache installieren.',
	'memcache:noservers' => 'Es wurden keine Memcache-Server definiert. Weisen Sie der Variablen $CONFIG->memcache_servers einen Wert zu.',
	'memcache:versiontoolow' => 'Memcache setzt zum Betrieb mindestens Version %s voraus. Sie benutzen Version %s.',
	'memcache:noaddserver' => 'Mehr-Server-Unterstützung ist deaktiviert. Sie müssen möglicherweise Ihre PECL-Memcache-Library upgraden.',

	'deprecatedfunction' => 'Warnung: Dieser Code verwendet die veraltete Funktion \'%s\' und ist mit dieser Version von Elgg nicht kompatibel.',

	'pageownerunavailable' => 'Warnung: Der Seiten-Eigentümer %d ist nicht erreichbar!',
        'viewfailure' => 'In der View %s ist ein interner Fehler aufgetreten.',
        'changebookmark' => 'Bitte änderen Sie Ihr Lesezeichen für diese Seite.',
        'noaccess' => 'Dieser Seiteninhalt wurde entweder gelöscht oder ist fehlerhaft oder Sie haben keine ausreichende Berechtigungen, um darauf zuzugreifen.',

        'error:default' => 'Entschuldigung, dies sollte nun wirklich nicht passieren..',
        'error:404' => 'Die gewünschte Seite konnte nicht gefunden werden. Wir werden weiterhin fieberhaft danach suchen! ',

/**
 * API
 */
	'system.api.list' => "Liste alle im System verfügbaren API-Aufrufe auf.",
	'auth.gettoken' => "Dieser API-Aufruf ermöglicht es einem Benutzer ein Authetifizierungs-Token zu beziehen, das für die Authentifizierung nachfolgender API-Aufrufe verwendet werden kann. Übergebe es als Parameter auth_token.",

/**
 * User details
 */

	'name' => "Name",
	'email' => "Email-Adresse",
	'username' => "Benutzername",
        'loginusername' => "Benutzername oder Email",
	'password' => "Passwort",
	'passwordagain' => "Passwort (wiederholen für Verifikation)",
	'admin_option' => "Diesen Benutzer zum Admin machen?",

/**
 * Access
 */

	'PRIVATE' => "Privat",
	'LOGGED_IN' => "Angemeldete Benutzer",
	'PUBLIC' => "Öffentlich",
	'access:friends:label' => "Freunde",
	'access' => "Zugangslevel",
	'access:limited:label' => "Beschränkt",
        'access:help' => "Der Zugangslevel",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Dashboard",
	'dashboard:nowidgets' => "Ihr persönliches Dashboard ermöglicht es Ihnen, die Aktivitäten auf dieser Commuity-Seite zu verfolgen und schnellen Zugriff auf die Inhalte zu bekommen, die Sie besonders interessieren.",

	'widgets:add' => 'Widgets hinzufügen',
	'widgets:add:description' => "Klicken Sie auf eines der unten aufgelisteten Widgets, um es zu Ihrer Seite hinzuzufügen.",
	'widgets:position:fixed' => '(Feste Position auf der Seite)',

        'widget:unavailable' => 'Sie haben dieses Widget bereits hinzugefügt.',
        'widget:numbertodisplay' => 'Anzahl der anzuzeigenden Einträge.',

        'widget:delete' => '%s entfernen',
        'widget:edit' => 'Dieses Widget konfigurieren',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "Das Widget wurde hinzugefügt.",
	'widgets:save:failure' => "Das Widget konnte nicht hinzugefügt werden. Bitte versuchen Sie es noch einmal.",
	'widgets:add:success' => "Das Widget wurde hinzugefügt.",
        'widgets:add:failure' => "Das Hinzufügen des Wigets ist fehlgeschlagen.",
        'widgets:move:failure' => "Die Position des Wigets auf Ihrer Seite konnte nicht gespeichert werden.",
        'widgets:remove:failure' => "Das Wiget konnte nicht entfernt werden.",

/**
 * Groups
 */

	'group' => "Gruppe",
	'item:group' => "Gruppen",

/**
 * Users
 */

	'user' => "Benutzer",
	'item:user' => "Mitglieder",

/**
 * Friends
 */

	'friends' => "Freunde",
	'friends:yours' => "Ihre Freunde",
	'friends:owned' => "Freunde von %s",
	'friend:add' => "Zu Freundesliste hinzufügen",
	'friend:remove' => "Aus Freundesliste entfernen",

	'friends:add:successful' => "%s wurde zu Ihrer Freundesliste hinzugefügt.",
	'friends:add:failure' => "%s konnte nicht zu Ihrer Freundesliste hinzugefügt werden. Bitte versuchen Sie es erneut.",

	'friends:remove:successful' => "%s wurde aus Ihrer Freundesliste entfernt.",
	'friends:remove:failure' => "%s konnte nicht aus Ihrer Freundesliste entfernt werden. Bitte versuchen Sie es erneut.",

	'friends:none' => "Dieser Benutzer hat noch niemand in seine Freundesliste aufgenommen.",
	'friends:none:you' => "Sie haben noch niemanden in Ihre Freundenliste aufgenommen!",

	'friends:none:found' => "Es wurden keine Freunde gefunden.",

	'friends:of:none' => "Bisher hat diesen Benutzer noch niemand in die Freundesliste aufgenommen.",
	'friends:of:none:you' => "Bisher hat Sie noch niemand in seine Freundesliste aufgenomen. Werden Sie aktiv und tragen Sie zur Community bei, füllen Sie Ihr Profil, damit Sie andere Mitglieder finden können!",

	'friends:of:owned' => "Mitglieder, die mit %s befreundet sind",

	'friends:of' => "Befreundet mit",
	'friends:collections' => "Freundeslisten",
        'collections:add' => "Neue Liste",
	'friends:collections:add' => "Neue Freundesliste erstellen",
	'friends:addfriends' => "Freunde hinzufügen",
	'friends:collectionname' => "Name der Freundesliste",
	'friends:collectionfriends' => "Freunde in dieser Liste",
	'friends:collectionedit' => "Liste bearbeiten",
	'friends:nocollections' => "Sie haben noch keine Freundesliste erstellt.",
	'friends:collectiondeleted' => "Ihre Freundesliste wurde gelöscht.",
	'friends:collectiondeletefailed' => "Wir konnten die Freundesliste nicht löschen. Entweder haben Sie dafür keine Berechtigung oder ein anderes Problem ist aufgetreten.",
	'friends:collectionadded' => "Die Freundesliste wurde erstellt",
	'friends:nocollectionname' => "Sie müssen Ihrer Freundesliste einen Namen geben, bevor sie abgespeichert werden kann.",
	'friends:collections:members' => "Mitglieder in der Freundesliste",
	'friends:collections:edit' => "Freundesliste bearbeiten",
        'friends:collections:edited' => "Die Freundesliste wurde gespeichert.",
        'friends:collection:edit_failed' => 'Das Speichern der Freundesliste ist fehlgeschlagen.',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

        'avatar' => 'Profilbild',
        'avatar:create' => 'Profilbild erstellen',
        'avatar:edit' => 'Profilbild bearbeiten',
        'avatar:preview' => 'Vorschau',
        'avatar:upload' => 'Profilbild hochladen',
        'avatar:current' => 'Derzeitiges Profilbild',
        'avatar:revert' => 'Zurücksetzen Ihres Profilbildes auf das Standardbild',
        'avatar:crop:title' => 'Tool zum Zuschneiden des Profilbildes',
        'avatar:upload:instructions' => "Das Profilbild ist das Bild, das auf Ihrer Profilseite und bei all Ihren Beiträgen auf der Seite angezeigt wird. Sie können es so oft ändern wie Sie möchten. (Gültige Dateiformate: GIF, JPG oder PNG)",
        'avatar:create:instructions' => 'Um Ihr Profilbild nach Ihren Wünschen zuzuschneiden (optional), klicken Sie es an und markieren Sie einen quadratischen Ausschnitt während Sie die Maustaste gedrückt halten. Sie können den Ausschnitt anschließend auch verschieben und in der Größe anpassen. Eine Vorschau Ihres Profilbildes wird in der Box rechts daneben dargestellt. Wenn Sie zufrieden mit dem Zuschneiden sind, klicken Sie auf \'Profilbild erstellen\', um das Profilbild zu übernehmen. Das zugeschnittene Bild wird dann auf der ganzen Seite als Ihr Profilbild verwendet.',
        'avatar:upload:success' => 'Ihr Profilbild wurde hochgeladen.',
        'avatar:upload:fail' => 'Das Hochladen des Profilbildes ist fehlgeschlagen.',
        'avatar:resize:fail' => 'Die Größenanpassung des Profilbildes ist fehlgeschlagen.',
        'avatar:crop:success' => 'Das Zuschneiden des Profilbildes war erfolgreich.',
        'avatar:crop:fail' => 'Das Zuschneiden des Profilbildes ist fehlgeschlagen.',
        'avatar:revert:success' => 'Das Profilbild wurde zurückgesetzt.',
        'avatar:revert:fail' => 'Das Zurücksetzen des Profilbildes ist fehlgeschlagen.',

        'profile:edit' => 'Profil bearbeiten',
        'profile:aboutme' => "Über mich",
        'profile:description' => "Über mich",
        'profile:briefdescription' => "Kurzbeschreibung",
        'profile:location' => "Heimatort",
        'profile:skills' => "Fähigkeiten",
        'profile:interests' => "Interessen",
        'profile:contactemail' => "Email-Kontaktadresse",
        'profile:phone' => "Telefon",
        'profile:mobile' => "Handy",
        'profile:website' => "Webseite",
        'profile:twitter' => "Twitter-Benutzername",
        'profile:saved' => "Die Änderungen an Ihrem Profil wurden gespeichert.",

        'profile:field:text' => 'Kurzbeschreibung',
        'profile:field:longtext' => 'Ausführliche Beschreibung',
        'profile:field:tags' => 'Tags',
        'profile:field:url' => 'Webseite',
        'profile:field:email' => 'Email-Adresse',
        'profile:field:location' => 'Heimatort',
        'profile:field:date' => 'Datum',

        'admin:appearance:profile_fields' => 'Profilfelder konfigurieren',
        'profile:edit:default' => 'Anpassen der Profilfelder',
        'profile:label' => "Name des Profilfeldes",
        'profile:type' => "Feldtyp",
        'profile:editdefault:delete:fail' => 'Das Entfernen des Standard-Feldes aus dem Profil ist fehlgeschlagen.',
        'profile:editdefault:delete:success' => 'Das Profilfeld wurde gelöscht!',
        'profile:defaultprofile:reset' => 'Die Standard-Profilfelder wurden wiederhergestellt.',
        'profile:resetdefault' => 'Die Standard-Profilfelder wiederherstellen',
        'profile:explainchangefields' => "Hier können Sie existierende Profilfelder durch eigene Felder ersetzen. Zuerst muss ein Namen für das neue Feld eingeben werden, z.B. 'Lieblingsteam'. Anschließend muss der Typ des Feldes gewählen werden (z.B. Text, URL, Tags). Mit einem Klick auf 'Hinzufügen' wird das Feld dann in das Profil aufgenommen. Um die Reihenfolge der Felder zu ändern, können Sie ein Feld am Greifer neben dem Namen in seine gewünschte Position ziehen. Um den Namen eines Feldes zu ändern, klicken Sie auf den Text, um ihn ui editieren. \n\n Sie können jederzeit das ursprüngliche Standard-Profil wiederherstellen (Alle Informationen, die bisher in den benutzerdefinierten Feldern eingegeben wurden, gehen dabei verloren!).",
        'profile:editdefault:success' => 'Das Profilfeld wurde hinzugefügt.',
        'profile:editdefault:fail' => 'Die Änderung der Profilfelder konnte nicht gespeichert werden.',


/**
 * Feeds
 */
	'feed:rss' => 'RSS-Feed für diese Seite',

/**
 * links
 **/
	'link:view' => 'Link aufrufen',
        'link:view:all' => 'Alle ansehen',


/**
 * River
 */
	'river' => "River",
	'river:friend:user:default' => "%s ist nun mit %s befreundet.",
        'river:update:user:avatar' => '%s hat ein neues Profilbild hochgeladen.',
        'river:update:user:profile' => 'Das Profil von %s aktualisiert.',
	'river:noaccess' => 'Sie haben keine Berechtigung um diesen Eintrag anzuzeigen.',
	'river:posted:generic' => '%s schrieb',
	'riveritem:single:user' => 'ein Mitglied',
	'riveritem:plural:user' => 'einige Mitglieder',
        'river:ingroup' => 'in der Gruppe %s',
        'river:none' => 'Keine Aktivität',
        'river:update' => 'Aktualisierung für %s',

        'river:widget:title' => "Aktivitäten",
        'river:widget:description' => "Neueste Aktivitäten anzeigen",
        'river:widget:type' => "Art der Aktivitäten",
        'river:widgets:friends' => 'Aktivitäten Ihrer Freunde',
        'river:widgets:all' => 'Alle Aktivitäten der Seite',

/**
 * Notifications
 */
	'notifications:usersettings' => "Benachrichtigungs-Einstellungen",
	'notifications:methods' => "Wählen Sie bitte die Benachrichtigungsmethoden aus, die Sie zulassen wollen.",
	'notification:method:email' => 'Email',

	'notifications:usersettings:save:ok' => "Ihre Benachrichtigungs-Einstellungen wurden gespeichert.",
	'notifications:usersettings:save:fail' => "Beim Speichern Ihrer Benachrichtigungs-Einstellungen ist ein Problem aufgetreten.",

	'user.notification.get' => 'Ausgabe der Benachrichtigungs-Einstellungen für einen bestimmten Benutzer.',
	'user.notification.set' => 'Setzen Sie die Benachrichtigungs-Einstellungen für einen bestimmten Benutzer.',
/**
 * Search
 */

	'search' => "Suche",
	'searchtitle' => "Suche: %s",
	'users:searchtitle' => "Suche nach Mitgliedern: %s",
	'groups:searchtitle' => "Suche nach Gruppen: %s",
	'advancedsearchtitle' => "%s mit Treffern passend zu %s",
	'notfound' => "Keine Treffer.",
	'next' => "Weiter",
	'previous' => "Zurück",

	'viewtype:change' => "Ansicht wechseln",
	'viewtype:list' => "Listen-Ansicht",
	'viewtype:gallery' => "Gallerie-Ansicht",

	'tag:search:startblurb' => "Einträge mit Tags passend zu '%s':",

	'user:search:startblurb' => "Mitglieder passend zu '%s':",
	'user:search:finishblurb' => "Für weitere Treffer hier klicken.",

	'group:search:startblurb' => "Gruppen passend zu '%s':",
	'group:search:finishblurb' => "Für weitere Treffer hier klicken.",
	'search:go' => 'Los',
	'userpicker:only_friends' => 'Nur Freunde',

/**
 * Account
 */

	'account' => "Account",
	'settings' => "Einstellungen",
	'tools' => "Tools",
	'settings:edit' => 'Einstellungen bearbeiten',

	'register' => "Registrieren",
	'registerok' => "Sie haben sich erfolgreich auf %s registriert.",
	'registerbad' => "Ihre Registrierung ist aufgrund eines unbekannten Fehlers fehlgeschlagen.",
	'registerdisabled' => "Die Registrierung wurde durch den Administrator deaktiviert.",
	'register:fields' => 'Es müssen alle Felder ausgefüllt werden.',

	'registration:notemail' => 'Die von Ihnen angegebene Email-Adresse ist keine gültige Email-Adresse.',
	'registration:userexists' => 'Dieser Benutzername ist schon belegt.',
	'registration:usernametooshort' => 'Ihr Benutzername muss mindestens %u Zeichen lang sein.',
	'registration:passwordtooshort' => 'Das Passwort muss mindestens %u Zeichen lang sein.',
	'registration:dupeemail' => 'Diese Email-Adresse ist im System schon bei einer früheren Registrierung verwendet worden.',
	'registration:invalidchars' => 'Entschuldigung, Ihr Benutzername enthält das unzulässige Zeichen %s. Folgende Zeichen sind nicht zulässig: %s',
	'registration:emailnotvalid' => 'Entschuldigung, die angegebene Email-Adresse ist auf dieser Seite nicht zulässig.',
	'registration:passwordnotvalid' => 'Entschuldigung, das angegebene Passwort ist auf dieser Seite nicht zulässig.',
	'registration:usernamenotvalid' => 'Entschuldigung, der angegebene Benutzername ist auf dieser Seite nicht zulässig.',

	'adduser' => "Benutzer hinzufügen",
	'adduser:ok' => "Es wurde ein neuer Benutzer hinzugefügt.",
	'adduser:bad' => "Der neue Benutzeraccount konnte nicht erzeugt werden.",

	'user:set:name' => "Benutzernamen-Einstellungen",
	'user:name:label' => "Ihr Name",
	'user:name:success' => "Ihr auf der Seite angezeigter Name wurde geändert.",
	'user:name:fail' => "Ihr Name konnte nicht geändert werden. Stellen Sie sicher, dass der Name nicht zu lang ist und versuchen Sie es erneut.",

	'user:set:password' => "Account-Passwort ändern",
        'user:current_password:label' => 'Ihr derzeitiges Passwort',
	'user:password:label' => "Ihr neues Passwort",
	'user:password2:label' => "Neues Passwort noch einmal eingeben",
	'user:password:success' => "Ihr Passwort wurde geändert",
	'user:password:fail' => "Ihr Passwort konnte nicht geändert werden.",
	'user:password:fail:notsame' => "Die zwei eingegebenen Passwörter stimmen nicht überein!",
	'user:password:fail:tooshort' => "Das angegebene Passwort ist zu kurz!",
        'user:password:fail:incorrect_current_password' => 'Ihre Eingabe stimmt nicht mit Ihrem derzeitigen Passwort überein.',
	'user:resetpassword:unknown_user' => 'Unbekannter Benutzername.',
	'user:resetpassword:reset_password_confirm' => 'Beim Zurücksetzen des Passworts wird eine Email mit dem neuen Passwort an Ihre bei der Accountregistrierung angegebene Email-Adresse versendet.',

	'user:set:language' => "Sprache der Community-Seite",
	'user:language:label' => "Ihre Sprache",
	'user:language:success' => "Ihre Spracheinstellungen wurden aktualisiert.",
	'user:language:fail' => "Ihre Spracheinstellungen konnten nicht gespeichert werden.",

	'user:username:notfound' => 'Benutzername %s unbekannt.',

	'user:password:lost' => 'Neues Passwort',
	'user:password:resetreq:success' => 'Die Anforderung eines neuen Passworts war erfolgreich. Die Email mit dem neuen Passwort wurde gesendet',
	'user:password:resetreq:fail' => 'Die Anforderung eines neuen Passworts ist fehlgeschlagen.',

	'user:password:text' => 'Um ein neues Passwort anzufordern, geben Sie im folgenden Textfeld Ihren Benutzernamen oder Ihre Email-Adresse ein. Wir werden Ihnen anschließend eine Email zur Bestätigung der Anfrage zusenden. Folgen Sie dem Link in dieser Email, um ein neues Passwort zu generieren.',

	'user:persistent' => 'Merken',

        'walled_garden:welcome' => 'Willkommen in',

/**
 * Administration
 */
        'menu:page:header:administer' => 'Administrieren',
        'menu:page:header:configure' => 'Konfigurieren',
        'menu:page:header:develop' => 'Entwickeln',
        'menu:page:header:default' => 'Anderes',

        'admin:view_site' => 'Seite anzeigen',
        'admin:loggedin' => 'Angemeldet als %s',
        'admin:menu' => 'Menü',

	'admin:configuration:success' => "Ihre Einstellungen wurden gespeichert.",
	'admin:configuration:fail' => "Ihre Einstellungen konnten nicht gespeichert werden.",

        'admin:unknown_section' => 'Unbekannter Adminbereich.',

	'admin' => "Admin",
	'admin:description' => "Der Admin-Bereich ermöglicht es Ihnen, Systemeinstellungen vorzunehmen. Sie haben Zugriff auf die Benutzerverwaltung und die Konfiguration von Plugins. Bitte wählen Sie eine der unten angebotenen Optionen.",

        'admin:statistics' => "Statistiken",
        'admin:statistics:overview' => 'Übersicht',
        'admin:statistics:server' => 'Server-Info',

        'admin:appearance' => 'Design',
        'admin:administer_utilities' => 'Werkzeuge',
        'admin:develop_utilities' => 'Werkzeuge',

        'admin:users' => "Benutzer",
        'admin:users:online' => 'Online',
        'admin:users:newest' => 'Neueste',
        'admin:users:add' => 'Neuen Benutzer hinzufügen',
        'admin:users:description' => "In diesem Admin-Bereich können Sie Benutzereinstellugen für Benutzeraccounts konfigurieren. Wählen Sie eine der unten gezeigten Optionen.",
        'admin:users:adduser:label' => "Hier klicken um einen neuen Benutzeraccount zu erstellen...",
        'admin:users:opt:linktext' => "Benutzeraccount konfigurieren...",
        'admin:users:opt:description' => "Benutzeraccounts und Accountinformationen bearbeiten. ",
        'admin:users:find' => 'Finde',

        'admin:settings' => 'Einstellungen',
        'admin:settings:basic' => 'Grundeinstellungen',
        'admin:settings:advanced' => 'Erweiterte Einstellungen',
	'admin:site:description' => "Hier können Sie einige globale Einstellungen für Ihre Seite vornehmen.",
	'admin:site:opt:linktext' => "Seite konfigurieren...",
	'admin:site:access:warning' => "Eine Änderung des Zugangslevels betrifft nur die Seiteninhalte, die nach der Änderung erstellt werden.",

        'admin:dashboard' => 'Dashboard',
        'admin:widget:online_users' => 'Angemeldete Benutzer',
        'admin:widget:online_users:help' => 'Auflistung der Benutzer, die momentan online sind.',
        'admin:widget:new_users' => 'Neue Benutzer',
        'admin:widget:new_users:help' => 'Auflistung der neuesten Benutzer.',
        'admin:widget:content_stats' => 'Inhalts-Statistiken',
        'admin:widget:content_stats:help' => 'Auflistung der Inhalte, die von Benutzern erzeugt wurden.',
        'widget:content_stats:type' => 'Typ des Inhalts',
        'widget:content_stats:number' => 'Anzahl',

        'admin:widget:admin_welcome' => 'Willkommen',
        'admin:widget:admin_welcome:help' => "Eine kurze Einführung in den Admin-Bereich von Elgg.",
        'admin:widget:admin_welcome:intro' =>
'Willkommen auf Ihrer Elgg-Seite! Sie befinden sich am Administrator-Dashboard. Es ist hilfreich, um auf Ihrer Seite den Überblick zu behalten.',

        'admin:widget:admin_welcome:admin_overview' =>
"Der Admin-Bereich ist in Unterseiten aufgeteilt, die über das Menu auf der rechten Seite aufgerufen werden können. Der Admin-Bereich ist aufgeteilt in"
. " drei Abschnitte:
        <dl>
                <dt>Administrieren</dt><dd>Alltägliche Aufgaben wie das Prüfen von gemeldeten Beiträgen, Auflisten der gerade angemeldeten Benutzern und das Anzeigen von Statistiken.</dd>
                <dt>Konfigurieren</dt><dd>Gelegentlich notwendige Aufgaben wie die Konfiguration des Namens der Seite oder das Aktivieren eines Plugins.</dd>
                <dt>Entwickeln</dt><dd>Für Entwickler, die ein Plugin oder ein Theme testen wollen. (Ein Entwickler-Plugin ist dafür notwendig.)</dd>
        </dl>
        ",

        // argh, this is ugly
        'admin:widget:admin_welcome:outro' => '<br />Werfen Sie einen Blick auf die zusätzlichen Ressourcen, die Sie über die Links in der Fußzeile des Admin-Bereichs aufrufen können. Vielen Dank, dass Sie Elgg verwenden!',

        'admin:widget:control_panel' => 'Seiten-Administration',
        'admin:widget:control_panel:help' => "Schnellzugriff auf einige allgemeine administrative Funktionen",

        'admin:cache:flush' => 'Seitencaches zurücksetzen',
        'admin:cache:flushed' => "Die Caches der Seite wurden zurückgesetzt.",

        'admin:footer:faq' => 'Administrations-FAQs',
        'admin:footer:manual' => 'Administrator-Handbuch',
        'admin:footer:community_forums' => 'Elgg-Community-Foren',
        'admin:footer:blog' => 'Elgg-Blog',

        'admin:plugins:category:all' => 'Alle Plugins',
        'admin:plugins:category:active' => 'Aktivierte Plugins',
        'admin:plugins:category:inactive' => 'Deaktivierte Plugins',
        'admin:plugins:category:admin' => 'Admin',
        'admin:plugins:category:bundled' => 'Mitgeliefert',
        'admin:plugins:category:nonbundled' => 'Nicht mitgeliefert',
        'admin:plugins:category:content' => 'Inhalte',
        'admin:plugins:category:development' => 'Entwicklung',
        'admin:plugins:category:enhancement' => 'Erweiterung',
        'admin:plugins:category:api' => 'Service/API',
        'admin:plugins:category:communication' => 'Kommunikation',
        'admin:plugins:category:security' => 'Sicherheit und Spam',
        'admin:plugins:category:social' => 'Social',
        'admin:plugins:category:multimedia' => 'Multimedia',
        'admin:plugins:category:theme' => 'Themes',
        'admin:plugins:category:widget' => 'Widgets',
        'admin:plugins:category:utility' => 'Werkzeuge',

        'admin:plugins:sort:priority' => 'Priorität',
        'admin:plugins:sort:alpha' => 'Alphabetisch',
        'admin:plugins:sort:date' => 'Neueste',

        'admin:plugins:markdown:unknown_plugin' => 'Unbekanntes Plugin.',
        'admin:plugins:markdown:unknown_file' => 'Unbekannte Datei.',


        'admin:notices:could_not_delete' => 'Die Benachrichtigung kann nicht gelöscht werden.',

        'admin:options' => 'Admin-Optionen',


/**
 * Plugins
 */
        'plugins:settings:save:ok' => "Die Einstellungen für das Plugin %s wurden gespeichert.",
        'plugins:settings:save:fail' => "Beim Speichern der Einstellungungen für das Plugin %s ist ein Problem aufgetreten.",
        'plugins:usersettings:save:ok' => "Die Benutzereinstellungen für das Plugin %s wurden gespeichert.",
        'plugins:usersettings:save:fail' => "Beim Speichern der Benutzereinstellungungen für das Plugin %s ist ein Problem aufgetreten.",
        'item:object:plugin' => 'Plugins',

        'admin:plugins' => "Plugins",
        'admin:plugins:activate_all' => 'Alle aktivieren',
        'admin:plugins:deactivate_all' => 'Alle deaktivieren',
        'admin:plugins:activate' => 'Aktivieren',
        'admin:plugins:deactivate' => 'Deaktivieren',
	'admin:plugins:description' => "Hier können Sie die auf Ihrer Seite installierten Tools (Plugins) verwalten und haben Zugriff auf deren Konfigurationsoptionen.",
	'admin:plugins:opt:linktext' => "Tools konfigurieren...",
	'admin:plugins:opt:description' => "Konfigurieren der installierten Tools der Community-Seite.",
	'admin:plugins:label:author' => "Author",
	'admin:plugins:label:copyright' => "Copyright",
        'admin:plugins:label:categories' => 'Kategorien',
	'admin:plugins:label:licence' => "Lizenz",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => 'Weitere Informationen',
	'admin:plugins:label:version' => 'Version',
        'admin:plugins:label:location' => 'Pfad zum Plugin-Verzeichnis',
        'admin:plugins:label:dependencies' => 'Abhängigkeiten',

        'admin:plugins:warning:elgg_version_unknown' => 'Dieses Plugin verwendet eine veraltete Manifest-Datei und es gibt keine Informationen bezüglich den kompatiblen Elgg-Versionen. Es wird wahrscheinlich nicht funktionieren!',
        'admin:plugins:warning:unmet_dependencies' => 'Dieses Plugin hat unerfüllte Abhängigkeiten und kann deshalb nicht aktiviert werden. Prüfen Sie die Abhängigkeiten für weitere Informationen.',
        'admin:plugins:warning:invalid' => '%s ist kein zulässiges Elgg-Plugin. Bitte schlagen Sie in der <a href="http://docs.elgg.org/Invalid_Plugin">Elgg-Dokumentation</a> nach, um weitere Hinweise zur Problemlösung zu erhalten.',
        'admin:plugins:cannot_activate' => 'Aktivierung nicht möglich.',

        'admin:plugins:set_priority:yes' => "%s neu angeordnet.",
        'admin:plugins:set_priority:no' => "%s kann nicht neu angeordnet werden.",
        'admin:plugins:set_priority:no_with_msg' => "%s konnte nicht neu angeordnet werden. Fehlermeldung: %s",
        'admin:plugins:deactivate:yes' => "%s deaktiviert.",
        'admin:plugins:deactivate:no' => "%s kann nicht deaktiviert werden.",
        'admin:plugins:deactivate:no_with_msg' => "%s konnte nicht deaktiviert werden. Fehlermeldung: %s",
        'admin:plugins:activate:yes' => "%s aktiviert.",
        'admin:plugins:activate:no' => "%s kann nicht aktiviert werden.",
        'admin:plugins:activate:no_with_msg' => "%s konnte nicht aktiviert werden. Fehlermeldung: %s",
        'admin:plugins:categories:all' => 'Alle Kategorien',
        'admin:plugins:plugin_website' => 'Plugin-Webseite',
        'admin:plugins:author' => '%s',
        'admin:plugins:version' => 'Version %s',
        'admin:plugin_settings' => 'Plugin-Einstellungen',
        'admin:plugins:warning:unmet_dependencies_active' => 'Dieses Plugin ist aktiviert aber es hat unerfüllte Abhängigkeiten. Dies kann zu Problemen führen. Siehe "mehr Info" unten für weitere Einzelheiten.',

        'admin:plugins:dependencies:type' => 'Typ',
        'admin:plugins:dependencies:name' => 'Name',
        'admin:plugins:dependencies:expected_value' => 'Erwarteter Wert',
        'admin:plugins:dependencies:local_value' => 'Tatsächlicher Wert',
        'admin:plugins:dependencies:comment' => 'Kommentar',

	'admin:statistics:description' => "Dies ist ein Überblick über die Seiten-Statistik Ihrer Seite. Falls Du detailiertere Statistiken benötigst, ist ein ausführlicheres, professionelles Administations-Tool verfügbar.",
	'admin:statistics:opt:description' => "Überblick über Statistiken zu Benutzern und Objekten Ihrer Seite.",
	'admin:statistics:opt:linktext' => "Statistiken anzeigen...",
	'admin:statistics:label:basic' => "Kurzstatistik Ihrer Seite",
	'admin:statistics:label:numentities' => "Entitäten Ihrer Seite",
	'admin:statistics:label:numusers' => "Anzahl der Mitglieder",
	'admin:statistics:label:numonline' => "Anzahl der angemeldeten Mitglieder",
	'admin:statistics:label:onlineusers' => "Momentan angemeldete Mitglieder",
	'admin:statistics:label:version' => "Elgg-Version",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Version",

	'admin:server:label:php' => 'PHP',
        'admin:server:label:web_server' => 'Webserver',
        'admin:server:label:server' => 'Server',
        'admin:server:label:log_location' => 'Speicherort des Logs',
        'admin:server:label:php_version' => 'PHP-Version',
        'admin:server:label:php_ini' => 'Speicherort der PHP ini-Datei',
        'admin:server:label:php_log' => 'PHP-Log',
        'admin:server:label:mem_avail' => 'Verfügbarer Hauptspeicher',
        'admin:server:label:mem_used' => 'Verwendeter Hauptspeicher',
        'admin:server:error_log' => "Fehler-Log des Webservers",

	'admin:user:label:search' => "Suche Benutzeraccount:",
	'admin:user:label:searchbutton' => "Suche",

	'admin:user:ban:no' => "Benutzeraccount sperren",
	'admin:user:ban:yes' => "Benutzeraccount gesperrt.",
        'admin:user:self:ban:no' => "Sie können sich nicht selbst sperren!",
	'admin:user:unban:no' => "Sperrung des Benutzeraccounts kann nicht aufgehoben werden.",
	'admin:user:unban:yes' => "Sperrung des Benutzeraccounts aufgehoben.",
	'admin:user:delete:no' => "Benutzeraccount kann nicht gelöscht werden.",
	'admin:user:delete:yes' => "Der Benutzeraccount %s wurde gelöscht.",
        'admin:user:self:delete:no' => "Sie können Ihren eigenen Account nicht löschen!",

	'admin:user:resetpassword:yes' => "Das Passwort wurde zurückgesetzt und der Benutzer benachrichtigt.",
	'admin:user:resetpassword:no' => "Das Passwort konnte nicht zurückgesetzt werden.",

	'admin:user:makeadmin:yes' => "Der Benutzer ist nun ein Administrator.",
	'admin:user:makeadmin:no' => "Die Zuweisung von Administratorrechten für den Benutzer ist fehlgeschlagen.",

	'admin:user:removeadmin:yes' => "Der Benutzer ist nicht länger ein Administrator.",
	'admin:user:removeadmin:no' => "Die Rücknahme von Administratorrechten für den Benutzer ist fehlgeschlagen.",
        'admin:user:self:removeadmin:no' => "Sie können sich nicht selbst die Administratorrechte entziehen.",

        'admin:appearance:menu_items' => 'Menü-Einträge',
        'admin:menu_items:configure' => 'Konfiguriere die Einträge im Hauptmenü.',
        'admin:menu_items:description' => 'Wählen Sie, welche Links als separate Menü-Einträge angezeigt werden sollen. Die restlichen Links werden unter "Mehr" am Ende der Liste zusammengefaßt.',
        'admin:menu_items:hide_toolbar_entries' => 'Links aus dem Toolbar-Menü entfernen?',
        'admin:menu_items:saved' => 'Menü-Einträge gespeichert.',
        'admin:add_menu_item' => 'Einen benutzerdefinierten Menü-Eintrag hinzufügen',
        'admin:add_menu_item:description' => 'Geben Sie den anzuzeigenden Namen und die URL an, um einen Eintrag zum Menü hinzuzufügen.',

        'admin:appearance:default_widgets' => 'Standard-Widgets',
        'admin:default_widgets:unknown_type' => 'Unbekannter Widget-Typ.',
        'admin:default_widgets:instructions' => 'Hinzufügen, Entfernen, Positionieren und Konfigurieren der standardmäßig anzuzeigenden Widgets für die gewünschte Seite.'
                . '  Diese Änderungen werden nur neu erstellte Benutzeraccounts auf Ihrer Community-Seite betreffen.',

/**
 * User settings
 */
	'usersettings:description' => "Hier können Sie alle Ihre persönlichen Einstellungen vornehmen (z.B.: Einstellungen der Benutzeraccounts, Konfiguration von Plugins, etc.).",

	'usersettings:statistics' => "Ihre persönliche Statistik",
	'usersettings:statistics:opt:description' => "Überblick über Statistiken zu Benutzern und Objekten Ihrer Seite.",
	'usersettings:statistics:opt:linktext' => "Account-Statistik",

	'usersettings:user' => "Ihre Einstellungen",
	'usersettings:user:opt:description' => "Hier können Sie Benutzereinstellungen konfigurieren.",
	'usersettings:user:opt:linktext' => "Account konfigurieren",

	'usersettings:plugins' => "Tools",
	'usersettings:plugins:opt:description' => "Einstellungen (falls vorhanden) der aktivierten Tools konfigurieren.",
	'usersettings:plugins:opt:linktext' => "Konfiguriere Ihre Tools",

	'usersettings:plugins:description' => "Hier können Sie Ihre persönlichen Einstellungen für Ihre Tools vornehmen.",
	'usersettings:statistics:label:numentities' => "Ihre Beiträge",

	'usersettings:statistics:yourdetails' => "Ihre Accountdetails",
	'usersettings:statistics:label:name' => "Vollständiger Name",
	'usersettings:statistics:label:email' => "Email-Adresse",
	'usersettings:statistics:label:membersince' => "Mitglied seit",
	'usersettings:statistics:label:lastlogin' => "Zuletzt angemeldet",

/**
 * Activity river
 */
        'river:all' => 'Alle Aktivitäten',
        'river:mine' => 'Meine Aktivitäten',
        'river:friends' => 'Aktivitäten von Freunden',
        'river:select' => 'Zeige %s',
        'river:comments:more' => '+%u weitere',
        'river:generic_comment' => 'kommentierte %s %s',

        'friends:widget:description' => "Auflistung einiger Ihrer Freunde",
        'friends:num_display' => "Anzahl der anzuzeigenden Freunde.",
        'friends:icon_size' => "Icon-Größe",
        'friends:tiny' => "sehr klein",
        'friends:small' => "klein",

/**
 * Generic action words
 */

	'save' => "Speichern",
        'reset' => 'Zurücksetzen',
	'publish' => "Veröffentlichen",
	'cancel' => "Abbrechen",
	'saving' => "Wird gespeichert...",
	'update' => "Aktualisieren",
        'preview' => "Vorschau",
	'edit' => "Bearbeiten",
	'delete' => "Löschen",
	'accept' => "Zustimmen",
	'load' => "Laden",
	'upload' => "Hochladen",
	'ban' => "Sperren",
	'unban' => "Sperrung aufheben",
        'banned' => "Gesperrt",
	'enable' => "Aktivieren",
	'disable' => "Deaktivieren",
	'request' => "Anfordern",
	'complete' => "vollständig",
	'open' => 'Öffnen',
	'close' => 'Schließen',
	'reply' => "Antworten",
	'more' => 'Weitere',
	'comments' => 'Kommentare',
	'import' => 'Importieren',
	'export' => 'Exportieren',
	'untitled' => 'Ohne Titel',
	'help' => 'Hilfe',
	'send' => 'Absenden',
	'post' => 'Schreiben',
	'submit' => 'Abschicken',
        'comment' => 'Kommentieren',
        'upgrade' => 'Aktualisieren',
        'sort' => 'Sortieren',
        'filter' => 'Filtern',
        'new' => 'Neu',
        'add' => 'Hinzufügen',
        'create' => 'Hinzufügen',
        'revert' => 'Zurücksetzen',

	'site' => 'Webseite',
        'activity' => 'Aktivitäten',
        'members' => 'Mitglieder',

	'up' => 'Höher',
	'down' => 'Tiefer',
	'top' => 'Anfang',
	'bottom' => 'Ende',

	'invite' => "Einladen",

	'resetpassword' => "Passwort zurücksetzen",
	'makeadmin' => "Zum Admin machen",
	'removeadmin' => "Admin entlassen",

	'option:yes' => "Ja",
	'option:no' => "Nein",

	'unknown' => 'Unbekannt',

	'active' => 'Aktiv',
	'total' => 'Gesamt',

	'learnmore' => "Hier klicken um mehr zu erfahren.",

	'content' => "Beiträge",
	'content:latest' => 'Letzte Aktivitäten',
	'content:latest:blurb' => 'Oder hier klicken, um die neuesten Beiträge der Seite zu sehen.',

	'link:text' => 'Link besuchen',

/**
 * Generic questions
 */

	'question:areyousure' => 'Bist Du sicher?',

/**
 * Generic data words
 */

	'title' => "Titel",
	'description' => "Beschreibung",
	'tags' => "Tags",
	'spotlight' => "Spotlight",
	'all' => "Alle",
        'mine' => "Meine",

	'by' => 'von',
        'none' => 'keine',

	'annotations' => "Kommentare",
	'relationships' => "Beziehungen",
	'metadata' => "Metadaten",
        'tagcloud' => "Tagcloud",
        'tagcloud:allsitetags' => "Alle Tags der Seite",

        'on' => 'An',
        'off' => 'Aus',

/**
 * Entity actions
 */
        'edit:this' => 'Bearbeiten',
        'delete:this' => 'Löschen',
        'comment:this' => 'Kommentieren',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Sind Sie sicher, dass Sie diesen Eintrag löschen willst?",
	'fileexists' => "Es wurde bereits eine Datei hochgeladen. Um sie zu ersetzen, unten auswählen:",

/**
 * User add
 */

	'useradd:subject' => 'Benutzeraccount erstellt',
	'useradd:body' => '
%s,

Auf der Seite %s wurde ein Benutzeraccount für Sie erstellt %s. Um sich anzumelden, gehe zu:

%s

und melden Sie sich mit diesen Zugangsdaten an:

Benutzername (Username): %s
Passwort: %s

Nachdem Sie sich angemeldet haben, solltest Sie Ihr Passwort ändern.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "Hier klicken, um die Statusmeldung auszublenden",


/**
 * Import / export
 */
	'importsuccess' => "Das Importieren der Daten war erfolgreich",
	'importfail' => "Das Importieren der OpenDD-Daten ist fehlgeschlagen.",

/**
 * Time
 */

	'friendlytime:justnow' => "soeben",
	'friendlytime:minutes' => "vor %s Minuten",
	'friendlytime:minutes:singular' => "vor einer Minute",
	'friendlytime:hours' => "vor %s Stunden",
	'friendlytime:hours:singular' => "vor einer Stunde",
	'friendlytime:days' => "vor %s Tagen",
	'friendlytime:days:singular' => "gestern",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => '%s Januar',
	'date:month:02' => '%s Februar',
	'date:month:03' => '%s März',
	'date:month:04' => '%s April',
	'date:month:05' => '%s Mai',
	'date:month:06' => '%s Juni',
	'date:month:07' => '%s Juli',
	'date:month:08' => '%s August',
	'date:month:09' => '%s September',
	'date:month:10' => '%s Oktober',
	'date:month:11' => '%s November',
	'date:month:12' => '%s Dezember',


/**
 * System settings
 */
        'installation:sitename' => "Der Name Ihrer Seite:",
        'installation:sitedescription' => "Eine kurze Beschreibung Ihrer Seite (optional):",
        'installation:wwwroot' => "Die URL Ihrer Seite:",
        'installation:path' => "Der vollständige Pfad zum Elgg-Installationsverzeichnis auf Ihrem Server:",
        'installation:dataroot' => "Der vollständige Pfad zum Elgg-Datenverzeichnis auf Ihrem Server:",
        'installation:dataroot:warning' => "Sie müssen dieses Verzeichnis selbst erzeugen. Es muß in einem anderen Verzeichnis als Ihr Elgg-Installationsverzeichnis sein.",
        'installation:sitepermissions' => "Der standardmäßige Zugangslevel: ",
	'installation:language' => "Die Standardsprache Ihrer Community-Seite: ",
	'installation:debug' => "Der Debug-Modus liefert detailiertere Rückmeldungen, die bei der Fehlersuche hilfreich sein können. Allerdings kann dadurch das Laden der Seiten verlangsamt werden. Daher sollte er nur aktiviert werden, falls Probleme auftreten: ",
	'installation:debug:none' => 'Debug-Modus deaktivieren (empfohlen)',
	'installation:debug:error' => 'Nur kritische Fehler anzeigen',
	'installation:debug:warning' => 'Kritische Fehler und Warnungen anzeigen',
	'installation:debug:notice' => 'Alle Fehler, Warnungen und Benachrichtigungen protokollieren',

         // Walled Garden support
        'installation:registration:description' => 'Standardmäßig ist die Registrierung neuer Benutzeraccounts erlaubt. Schalten Sie dies ab, wenn Sie verhindern wollen, dass sich neue Besucher registrieren.',
        'installation:registration:label' => 'Registrieren neuer Benutzeraccounts erlauben',
        'installation:walled_garden:description' => 'Ihre Seite als privates Netzwerk betreiben. Nur angemeldete Benutzer werden auf die Inhalte Ihrer Seite Zugriff haben mit der Ausnahme von Inhalten, deren Zugriffsberechtigung explizit auf \'öffentlich\' gesetzt ist.',
        'installation:walled_garden:label' => 'Zugriff auf angemeldete Benutzer beschränken',

        'installation:httpslogin' => "Aktivieren, um den Benutzern die Anmeldung via HTTPS zu ermöglichen. Dafür ist es notwendig, dass Ihr Server das https-Protokoll unterstützt.",
	'installation:httpslogin:label' => "HTTPS-Anmeldungen zulassen",
	'installation:view' => "Geben Sie den Ansichtsmodus an, der für Ihre Seite verwendet werden soll. Wenn Sie nicht sicher sind was Sie eingeben sollen, lassen Sie das Textfeld leer oder verwenden \"default\", um den Standardmodus zu verwenden:",

	'installation:siteemail' => "Email-Adresse Ihrer Seite (wird vom System verwendet, um Benachrichtigungen zu versenden)",

        'installation:disableapi' => "Elgg bietet eine API zum Erstellen von Webservices, die externen Anwendungen die Interaktion mit Ihrer Elgg-Seite ermöglicht.",
        'installation:disableapi:label' => "Webservice-API von Elgg aktivieren",

	'installation:allow_user_default_access:description' => "Falls diese Option aktiviert ist, dürfen Benutzer einen individuellen Zuganglevel für ihre Inhalte festlegen, wodurch der systemweite Zugangslevel außer Kraft gesetzt wird.",
	'installation:allow_user_default_access:label' => "Indivuellen benutzerdefinierten Zugangslevel erlauben",

	'installation:simplecache:description' => "Simple Cache verbessert die Systemleistung durch Caching von statischen Seiteninhalten inklusive einiger CSS- und JavaScript-Dateien. Es wird empfohlen Simple Cache zu aktivieren.",
	'installation:simplecache:label' => "Simple Cache aktivieren (empfohlen)",

	'installation:viewpathcache:description' => "Der View Filepath-Cache verringert die Ladezeit von Plugins durch Caching der Dateisystempfade ihrer Views.",
	'installation:viewpathcache:label' => "View Filepath-Cache aktivieren (empfohlen)",

	'upgrading' => 'Aktualisieren...',
	'upgrade:db' => 'Ihre Datenbank wurde aktualisiert.',
	'upgrade:core' => 'Ihre Elgg-Installation wurde aktualisiert.',
        'upgrade:unable_to_upgrade' => 'Die Aktualisierung ist fehlgeschlagen.',
        'upgrade:unable_to_upgrade_info' =>
                'Diese Installation kann nicht aktualisiert werden, da in den Views-Verzeichnissen der
                Elgg-Basisinstallation veraltete Views gefunden wurden. Diese Views werden nicht mehr
                unterstützt und müssen entfernt werden, damit Elgg funktionieren kann. Wenn Du keine
                Dateien modifiziert hast, die in der Standardinstallation von Elgg enthalten sind,
                können Sie einfach das Views-Verzeichnis löschen und durch das View-Verzeichnis ersetzen,
                das im Paket der neuesten Version von Elgg enthalten ist und von <a href="http://elgg.org">elgg.org</a>
                heruntergeladen werden kann.<br /><br />

                Wenn Sie genauere Installationsanweisungen benötigen, lesen Sie die <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
                Dokumentation über die Aktualisierung von Elgg</a>.  Falls Sie Hilfe benötigen, stellen Sie Ihre Frage in den
                <a href="http://community.elgg.org/pg/groups/discussion/">Community Support-Foren</a>.',

        'update:twitter_api:deactivated' => 'Die Twitter API (bisher Twitter Service genannt) wurde während der Seitenaktualisierung deaktiviert. Bitte aktivieren Sie die API manuell, falls sie benötigt wird.',
        'update:oauth_api:deactivated' => 'OAuth API (bisher OAuth Lib genannt) wurde während der Seitenaktualisierung deaktiviert. Bitte aktivieren Sie die API manuell, falls sie benötigt wird.',

        'deprecated:function' => '%s() wurde durch %s() als veraltet markiert.',

/**
 * Welcome
 */

	'welcome' => "Willkommen",
	'welcome:user' => 'Willkommen %s',

/**
 * Emails
 */
	'email:settings' => "Email",
	'email:address:label' => "Ihre Email-Adresse",

	'email:save:success' => "Neue Email-Adresse gespeichert. Eine Bestätigungs-Email wurde versandt.",
	'email:save:fail' => "Ihre neue Email-Adresse konnte nicht gespeichert werden.",

	'friend:newfriend:subject' => "Sie sind nun mit %s befreundet!",
	'friend:newfriend:body' => "Sie sind nun mit %s befreundet!

Klicken Sie auf den folgenden Link um die Profilseite zu besuchen:

%s

Sie können auf diese Email NICHT antworten.",



	'email:resetpassword:subject' => "Passwort wurde zurückgesetzt!",
	'email:resetpassword:body' => "Hallo %s,

Ihr Passwort wurde zurückgesetzt. Ihr neues Passwort ist: %s",


	'email:resetreq:subject' => "Anfrage zum Zurücksetzen Ihres Passworts.",
	'email:resetreq:body' => "Hallo %s,

es wurde eine Anfrage zum Zurücksetzen des Passworts Ihres Accounts gestellt (von der IP-Adresse %s).

Falls Sie diese Anfrage gestellt haben, klicken Sie bitte auf folgenden Link, um die Anfrage zu bestätigen:

%s

Anderenfalls ignorieren Sie bitte diese Email.
",

/**
 * user default access
 */

        'default_access:settings' => "Standard-Zugangslevel für Ihre Inhalte",
        'default_access:label' => "Standard-Zugangslevel",
        'user:default_access:success' => "Ihr neuer Standard-Zugangslevel wurde gespeichert.",
        'user:default_access:failure' => "Ihr neuer Standard-Zugangslevel konnte nicht gespeichert werden.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Fehlende Eingabedaten",

/**
 * Comments
 */

	'comments:count' => "Kommentare von %s",

	'riveraction:annotation:generic_comment' => '%s kommentierte %s',

        'generic_comments:add' => "Kommentieren",
        'generic_comments:post' => "Kommentieren",
	'generic_comments:text' => "Kommentar",
        'generic_comments:latest' => "Neueste Kommentare",
	'generic_comment:posted' => "Ihr Kommentar wurde gespeichert.",
	'generic_comment:deleted' => "Der Kommentar wurde gelöscht.",
	'generic_comment:blank' => "Entschuldigung, aber Sie müssen zuerst etwas schreiben bevor wir Ihren Kommentar abspeichern können.",
	'generic_comment:notfound' => "Entschuldigung, aber wird konnten den gesuchten Eintrag nicht finden.",
	'generic_comment:notdeleted' => "Entschuldigung, dieser Kommentar konnte nicht gelöscht werden.",
	'generic_comment:failure' => "Beim Speichern Ihres Kommentars ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.",
        'generic_comment:none' => 'Keine Kommentare.',
        'generic_comment:title' => 'Kommentar von %s',

	'generic_comment:email:subject' => 'Sie haben einen neuen Kommentar erhalten!',
	'generic_comment:email:body' => "Zu Ihrem Eintrag \"%s\" wurde von %s ein neuer Kommentar geschrieben. Der Kommentar lautet:


%s


Um zu antworten oder Ihren ursprünglichen Eintrag aufzurufen, folgen Sie diesem Link:

%s

Um das Profil von %s aufzurufen, folgen Sie diesem Link:

%s

Sie können auf diese Email NICHT antworten.",

/**
 * Entities
 */
        'byline' => 'Von %s',
	'entity:default:strapline' => '%s erzeugt von %s',
	'entity:default:missingsupport:popup' => 'Diese Entität kann nicht richtig angezeigt werden. Dies kann daran liegen, dass dafür ein Plugin benötigt wird, das nicht mehr installiert ist.',

	'entity:delete:success' => 'Die Entität %s wurde gelöscht',
	'entity:delete:fail' => 'Die Entität %s konnte nicht gelöscht werden',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Der Form fehlt der __token und/oder __ts Eintrag',
	'actiongatekeeper:tokeninvalid' => "Es ist ein Fehler aufgetreten (Token mismatch - ungültiges Token). Ursache dafür ist wahrscheinlich, dass das Authentifizierungs-Token für die Seite abgelaufen ist. Bitte laden Sie die Seite neu und versuchen Sie es erneut.",
	'actiongatekeeper:timeerror' => 'Das Authentifizierungs-Token für die die Seite ist abgelaufen. Bitte laden Sie die Seite neu und versuchen Sie es erneut.',
	'actiongatekeeper:pluginprevents' => 'Durch eine installierte Erweiterung wurde die Übertragung dieser Form verhindert.',

/**
 * Word blacklists
 */
	'word:blacklist' => 'und, der, die, das, den, dem, des, ein, eine, eines, einen, einem, einer, dann, aber, sie, er, es, ihr, ihm, ihres, ihrer, ihrem, ihren, sein, seiner, seines, seinem, seinen, nicht, also, über, jetzt, deshalb, daher, darum, demzufolge, deswegen, folglich, somit, allerdings, immer, noch, ebenso, andernfalls, umgekehrt, eher, infolgedessen, darüberhinaus, darüber, hinaus, trotzdem, dennoch, anstatt, stattdessen, inzwischen, mittlerweile, unterdessen, dementsprechend, dies, dieser, dieses, diesem, diesen, was, wem, wessen, deren, dessen',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Tags',
        'tags:site_cloud' => 'Tagcloud',

/**
 * Javascript
 */

        'js:security:token_refresh_failed' => 'Verbindung mit %s fehlgeschlagen. Eventuell gibt es Probleme beim Speichern neuer Inhalte.',
        'js:security:token_refreshed' => 'Verbindung mit %s wiederhergestellt!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abchasisch",
	"af" => "Afrikaans",
	"am" => "Amharisch",
	"ar" => "Arabisch",
	"as" => "Assamesisch",
	"ay" => "Aymara",
	"az" => "Aserbaidschanisch",
	"ba" => "Baschkirisch",
	"be" => "Weissrussisch",
	"bg" => "Bulgarisch",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengalisch",
	"bo" => "Tibetisch",
	"br" => "Bretonisch",
	"ca" => "Katalanisch",
	"co" => "Korsisch",
	"cs" => "Tschechisch",
	"cy" => "Walisisch",
	"da" => "Dänisch",
	"de" => "Deutsch",
	"dz" => "hutanisch",
	"el" => "Griechisch",
	"en" => "Englisch",
	"eo" => "Esperanto",
	"es" => "Spanisch",
	"et" => "Estnisch",
	"eu" => "Baskisch",
	"fa" => "Persisch",
	"fi" => "Finnisch",
	"fj" => "Fidschi",
	"fo" => "Färöisch",
	"fr" => "Französisch",
	"fy" => "Friesisch",
	"ga" => "Irisch",
	"gd" => "Schottisch / Gälisch",
	"gl" => "Galizisch",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebräisch",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Kroatisch",
	"hu" => "Ungarisch",
	"hy" => "Armenisch",
	"ia" => "Interlingua",
	"id" => "Indonesisch",
	"ie" => "Interlingue",
	"ik" => "Inupiaq",
	//"in" => "Indonesisch",
	"is" => "Isländisch",
	"it" => "Italienisch",
	"iu" => "Inuit",
	"iw" => "Hebräisch (obsolet)",
	"ja" => "Japanisch",
	"ji" => "Yiddish (obsolet)",
	"jw" => "Javanisch",
	"ka" => "Georgisch",
	"kk" => "Kasachisch",
	"kl" => "Grönländisch",
	"km" => "Kambodschanisch",
	"kn" => "Kanadisch",
	"ko" => "Koreanisch",
	"ks" => "Kashmiri",
	"ku" => "Kurdisch",
	"ky" => "Kirgisisch",
	"la" => "Latein",
        "ln" => "Lingala",
	"lo" => "Laotisch",
	"lt" => "Litauisch",
	"lv" => "Lettisch",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Mazedonisch",
	"ml" => "Malayalam",
	"mn" => "Mongolisch",
	"mo" => "Moldawisch",
	"mr" => "Marathi",
	"ms" => "Malaiisch",
	"mt" => "Maltesisch",
	"my" => "Burmanisch",
	"na" => "Nauruisch",
	"ne" => "Nepalesisch",
	"nl" => "Niederländisch",
	"no" => "Norwegisch",
	"oc" => "Ossetisch",
	"om" => "Oromo",
	"or" => "Oriya",
	"pa" => "Panjabi",
	"pl" => "Polnisch",
	"ps" => "Paschtunisch",
	"pt" => "Portugiesisch",
	"qu" => "Quechua",
	"rm" => "Rätoromanisch",
	"rn" => "Kirundi",
	"ro" => "Rumänisch",
	"ru" => "Russisch",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbokroatisch",
	"si" => "Singhalesisch",
	"sk" => "Slowakisch",
	"sl" => "Slowenisch",
	"sm" => "Samoisch",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanisch",
	"sr" => "Serbisch",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sudanesisch",
	"sv" => "Schwedisch",
	"sw" => "Swahili",
	"ta" => "Tamilisch",
	"te" => "Tegulu",
	"tg" => "Tadschikisch",
	"th" => "Thailändisch",
	"ti" => "Tigrinya",
	"tk" => "Turkmenisch",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tongaisch",
	"tr" => "Türkisch",
	"ts" => "Tsonga",
	"tt" => "Tatarisch",
	"tw" => "Twi",
	"ug" => "Uigurisch",
	"uk" => "Ukrainisch",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamesisch",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinesisch",
	"zu" => "Zulu",
);

add_translation("de",$german);