<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$german = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Dateien",
	'file:user' => "Dateien von %s",
	'file:friends' => "Dateien Deiner Freunde",
	'file:all' => "Alle Dateien der Community",
	'file:edit' => "Datei-Eintrag editieren",
	'file:more' => "Weitere Dateien",
	'file:list' => "Listen-Ansicht",
	'file:group' => "Gruppen-Dateien",
	'file:gallery' => "Gallerie-Ansicht",
	'file:gallery_list' => "Gallerie- oder Listen-Ansicht",
	'file:num_files' => "Anzahl der anzuzeigenden Dateien",
	'file:user:gallery'=>'Gallerie-Ansicht der Dateien von %s',
	'file:via' => 'via Dateien',
	'file:upload' => "Datei hochladen",
	'file:replace' => 'Ersetzen der Datei (leer lassen, um Datei nicht zu ändern)',
	'file:list:title' => "%s's %s %s",
	'file:title:friends' => "Freunde",

	'file:add' => 'Datei hochladen',

	'file:file' => "Datei",
	'file:title' => "Titel",
	'file:desc' => "Beschreibung",
	'file:tags' => "Tags",

	'file:list:list' => 'Zur Listen-Ansicht wechseln',
        'file:list:gallery' => 'Zur Gallerie-Ansicht wechseln',

	'file:types' => "Hochgeladene Dateitypen",

	'file:type:' => 'Dateien',
	'file:type:all' => "Alle Dateien",
	'file:type:video' => "Videos",
	'file:type:document' => "Dokumente",
	'file:type:audio' => "Audio-Dateien",
	'file:type:image' => "Bilder",
	'file:type:general' => "Unbestimmte Dateien",

	'file:user:type:video' => "Videos von %s",
	'file:user:type:document' => "Dokumente von %s",
	'file:user:type:audio' => "Audio-Dateien von %s",
	'file:user:type:image' => "Bilder von %s",
	'file:user:type:general' => "Unbestimmte Dateien von %s",

	'file:friends:type:video' => "Videos Deiner Freunde",
	'file:friends:type:document' => "Dokumente Deiner Freunde",
	'file:friends:type:audio' => "Audio-Dateien Deiner Freunde",
	'file:friends:type:image' => "Bilder Deiner Freunde",
	'file:friends:type:general' => "Unbestimmte Dateien Deiner Freunde",

	'file:widget' => "Datei-Widget",
	'file:widget:description' => "Auflistung Deiner neuesten Dateien",

	'groups:enablefiles' => 'Gruppen-Dateien aktivieren',

	'file:download' => "Download",

	'file:delete:confirm' => "Bist Du sicher, dass Du diese Datei löschen willst?",

	'file:tagcloud' => "Tagcloud",

	'file:display:number' => "Anzahl der anzuzeigenden Dateien",

	'river:create:object:file' => '%s hat die Datei %s hochgeladen',
	'river:comment:object:file' => '%s kommentierte die Datei %s',

	'item:object:file' => 'Dateien',

        'file:newupload' => 'Eine neue Datei wurde hochgeladen.',

	/**
	 * Embed media
	 **/

		'file:embed' => "Medien einbetten",
		'file:embedall' => "Alle",

	/**
	 * Status messages
	 */

		'file:saved' => "Deine Datei wurde gespeichert.",
		'file:deleted' => "Deine Datei wurde gelöscht.",

	/**
	 * Error messages
	 */

		'file:none' => "Noch keine Dateien vorhanden.",
		'file:uploadfailed' => "Entschuldigung, wir konnten Deine Datei nicht speichern.",
		'file:downloadfailed' => "Entschuldigung, diese Datei ist derzeit nicht verfügbar.",
		'file:deletefailed' => "Deine Datei konnte zu diesem Zeitpunkt nicht gelöscht werden.",
		'file:noaccess' => "Du hast keine Berechtigung, um diesen Datei-Eintrag zu ändern.",
		'file:cannotload' => "Beim Hochladen dieser Datei ist ein Fehler aufgetreten.",
		'file:nofile' => "Du mußt eine Datei auswählen.",
);

add_translation("de", $german);