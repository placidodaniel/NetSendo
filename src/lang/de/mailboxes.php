<?php

return [
    'title' => 'Postfächer',
    'created' => 'Das Postfach wurde erstellt.',
    'updated' => 'Das Postfach wurde aktualisiert.',
    'deleted' => 'Das Postfach wurde gelöscht.',
    'set_default' => 'Postfach als Standard festgelegt.',

    'types' => [
        'broadcast' => 'Einmalig (Broadcast)',
        'autoresponder' => 'Autoresponder (Warteschlange)',
        'system' => 'System',
    ],

    'bounce' => [
        'section_title' => 'Bounce-Postfach Überwachung',
        'section_desc' => 'Überwachen Sie ein dediziertes IMAP-Postfach für Bounce-E-Mails und markieren Sie Abonnenten automatisch als Bounced.',
        'enabled' => 'Bounce-Überwachung aktivieren',
        'imap_host' => 'IMAP Host',
        'imap_port' => 'IMAP Port',
        'imap_encryption' => 'Verschlüsselung',
        'imap_username' => 'IMAP Benutzername',
        'imap_password' => 'IMAP Passwort',
        'imap_folder' => 'IMAP Ordner',
        'test_connection' => 'IMAP-Verbindung testen',
        'test_success' => 'Verbindung zum Bounce-Postfach erfolgreich',
        'test_failed' => 'Verbindung zum Bounce-Postfach fehlgeschlagen',
        'last_scanned' => 'Zuletzt gescannt',
        'last_scan_count' => 'Bounces im letzten Scan gefunden',
        'never_scanned' => 'Noch nie gescannt',
        'processed' => ':count Bounce(s) verarbeitet',
    ],
];
