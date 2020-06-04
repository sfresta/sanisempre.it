<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'sanisempredb');

/** Nome utente del database MySQL */
define('DB_USER', 'sanisempreusr');

/** Password del database MySQL */
define('DB_PASSWORD', 'Eb03%5es');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Of/HtK7xFq.L8}0-dX|(_a^|=T%bX95Or CSG[1lAHPqQT>25o0AaV8NB)-!9d;1');
define('SECURE_AUTH_KEY',  'tO|xG/VV}w`(Hox()>=/#]7S!wUUhL1PPxS|05rM^k0Oh/*)O:6~?Rc`+{$jVRcK');
define('LOGGED_IN_KEY',    'El5G,-yv[Y.(DODJ5d}t/bAZKL={QDK&G)|*m0VwNWu6o<W2UH+Hp4|+3}Tn-h<L');
define('NONCE_KEY',        'eWL/mNf3NEuKxR{?6=NZ]1?)3eW2Bng2VYsd-N(^v!]Ge^>_bCf#:ICU:D(h5jIl');
define('AUTH_SALT',        '}AL1ZO9D|$x*p8eLu/,yJ?u^Qx;ti8D0@Elw?n_c~tacX[&]2rfR+,q^+F[zkvH9');
define('SECURE_AUTH_SALT', 'Sk0tZQ/CRM|H/z++z)%qYl|;|q)$5[ZS=wFtx3I5eH%U^j]1adF,(n3dykEpw!_I');
define('LOGGED_IN_SALT',   'jMNy_W!|M|S9+`qnKKe8K1p[4g*zpL&f:f8*`q.]C(+;E=a|a97!>%*3Rh-CQ+ 2');
define('NONCE_SALT',       'g9#+*7,4g2K>w?hdEY3QI^jWOVMJ:1skmG?P Jq,`X&4fF0t||4i+F9!1*`-gze{');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
