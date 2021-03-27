<?php
/**
 * Setările de bază pentru WordPress.
 *
 * Acest fișier este folosit la crearea wp-config.php în timpul procesului de instalare.
 * Folosirea interfeței web nu este obligatorie, acest fișier poate fi copiat
 * sub numele de „wp-config.php”, iar apoi populate toate detaliile.
 *
 * Acest fișier conține următoarele configurări:
 *
 * * setările MySQL
 * * cheile secrete
 * * prefixul pentru tabele
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define( 'DB_NAME', 'setway_mgz' );

/** Numele de utilizator MySQL */
define( 'DB_USER', 'setway_coman' );

/** Parola utilizatorului MySQL */
define( 'DB_PASSWORD', 'coman,.123' );

/** Adresa serverului MySQL */
define( 'DB_HOST', 'localhost' );

/** Setul de caractere pentru tabelele din baza de date. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Schema pentru unificare. Nu face modificări dacă nu ești sigur. */
define('DB_COLLATE', '');

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modifică conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link https://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 * Pentru a invalida toate cookie-urile poți schimba aceste valori în orice moment. Aceasta va forța toți utilizatorii să se autentifice din nou.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd.y$7)]G`G~P]*K0[Idw(S!H9PygIK!B-kiO]zw`O`Se~)RR$JWARc{y05OMFXMP' );
define( 'SECURE_AUTH_KEY',  'NM}Gw~7M|iVhoiK$A.cIwxNHx@{wNg;R,ln~Qw:PMjPu=tJ]QnRhGTS[z:s?0x?9' );
define( 'LOGGED_IN_KEY',    '$j~npOFE&Zhzx<,ZzlXt6AL${~K>K[c!*)<3([#n?BTf/+<MOe.V:88DDQ E|B7&' );
define( 'NONCE_KEY',        'bBHk*!mnj4Xy_w t=h8QM3{@or&$.!bBMX(aROcHr)uC~ l1(-;;bW|{jpgZOMP{' );
define( 'AUTH_SALT',        'fA;,+l_Wlg[5k4b8h-{q4RDpu(+!#B7sHQqe*jQ?)eXZHr6GlHD*@+y]LR#<s4-8' );
define( 'SECURE_AUTH_SALT', '(.q&4ZM~}T/?,];a7unC?=uwJ^$e=emBgysBkPt+V]6cz~8XMo{WA)rRgO^i!cH@' );
define( 'LOGGED_IN_SALT',   'vYAAI9rbGQ*Zi%``{tS:jM5 `<paaEwce&8%Ss..PD6[S]srDM!0r5jBEW-*0$,|' );
define( 'NONCE_SALT',       'h|9A(3GGqj6T]eK<6a!29S)m1ATKb7PClU:iMSDO0%?4Sf>!LXHd[cx,lDFwCsn8' );

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea mai multor instanțe WordPress folosind aceeași bază de date
 * dacă prefixul este diferit pentru fiecare instanță. Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix = 'mg_';

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor în timpul dezvoltării.
 * Este recomadată folosirea modului WP_DEBUG în timpul dezvoltării modulelor și
 * a șabloanelor/temelor în mediile personale de dezvoltare.
 *
 * Pentru detalii despre alte constante ce pot fi utilizate în timpul depanării,
 * vizitează Codex-ul.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setează variabilele WordPress și fișierele incluse. */
require_once(ABSPATH . 'wp-settings.php');
