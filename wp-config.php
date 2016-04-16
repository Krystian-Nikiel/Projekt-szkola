<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'szkola_projekt');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~6.S-VZ<ciUY!t)}&X?8`vCuol+3AG)*{h+Trj~B#wh+wenDX,@1oO^+K;.Ok#(^');
define('SECURE_AUTH_KEY',  '$_j6Z}Tc.7},tAB+nQBQL~+nGvXC>h%xyxjH/Tj&||+V`@E7TZ.|GNig>&Xwbij^');
define('LOGGED_IN_KEY',    '}S+llL)o`Gpx&.Z/7[JB/N(|y+15^81)=8l5bF:s,d1FyS0>e8sc81kTdB0G3U]v');
define('NONCE_KEY',        'BxEuVf()u^)+B3*k&fF89VD5@_0h&&DioH+TRx0]6O%0gPjEb8&^2CQAz~xUKvFU');
define('AUTH_SALT',        'HW7xq+Ah0P@rhp^_7 @kAQ2ylO=5y9iI0FfG.$-E]PI+P}Qu1a+<11()V3u{umF8');
define('SECURE_AUTH_SALT', 'gv|eLP/u.DQw2;lsyMzPI+V,cB!,,#A|;( c9?t/o4|e)9 eI?E!|lLms2PLZ+x6');
define('LOGGED_IN_SALT',   'aa=+%_I]hS3d3`2U|&nyL`P4JUf?wofk8e.E,J|kO#^<V`_;y[qG12L7tw>@|unh');
define('NONCE_SALT',       'KP43]]W%o*o=D#k8v|WSbkB@Wc)+nRPA1k|B$q8h,O#gf54a-Y<-${5u.k?r/AM+');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
