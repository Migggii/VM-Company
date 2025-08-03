<?php
// ** Datenbankeinstellungen - Diese Informationen erhalten Sie von Ihrem Hosting-Anbieter ** //

// Der Name der Datenbank für WordPress
define('DB_NAME', 'datenbankname');

// Datenbankbenutzername
define('DB_USER', 'benutzername');

// Datenbankpasswort
define('DB_PASSWORD', 'passwort');

// Datenbank-Host (in der Regel "localhost")
define('DB_HOST', 'localhost');

// Zeichensatz für die Datenbank
define('DB_CHARSET', 'utf8');

// Datenbank-Kollation
define('DB_COLLATE', '');

// Sicherheitsschlüssel und Salze
define('AUTH_KEY',         'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('SECURE_AUTH_KEY',  'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('LOGGED_IN_KEY',    'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('NONCE_KEY',        'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('AUTH_SALT',        'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('SECURE_AUTH_SALT', 'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('LOGGED_IN_SALT',   'setzen Sie hier Ihren einzigartigen Schlüssel ein');
define('NONCE_SALT',       'setzen Sie hier Ihren einzigartigen Schlüssel ein');

// Tabellenpräfix
$table_prefix = 'wp_';

// Debugging-Modus (true oder false)
define('WP_DEBUG', false);

// Das absolute Pfadverzeichnis zu WordPress
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// Setzen Sie die WordPress-Variablen und -Dateien
require_once(ABSPATH . 'wp-settings.php');
?>