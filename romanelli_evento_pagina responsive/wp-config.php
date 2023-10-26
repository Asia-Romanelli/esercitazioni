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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'romanelli_evento' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y0yASL[*QTSCAq|,=[;,3^]3hxu+=9 GWC Cr.65Cw:%XTT3<Av*D]qC~w}&8DQz' );
define( 'SECURE_AUTH_KEY',  '0qD:G?;=hmMt0@v^lA|m DYvThV=&Muhl+9fY|`|;v9+qC5wgpj|h.K+[etgMyRr' );
define( 'LOGGED_IN_KEY',    '[zKU)Pg|n78?qXpCaNuXV]gEq]hs@M6p81GEU_iACPYVoWjmE-7,4E;wZ |1hE;i' );
define( 'NONCE_KEY',        '~(?0aYVtobN84rk4SKcKw<b!3xga7@U9g7D6*c>Z~piM:GMU0Xib[I+m%Uw&j9-o' );
define( 'AUTH_SALT',        'Xy.!m!J~gkK>DwI/e79yFL)UGY||4h*y=C+3[>7NCvyu2Nd3,! Rf]UXxD2(|yk2' );
define( 'SECURE_AUTH_SALT', 'pOyW}a :W^IdQONm<V2W,.+!MTYzY>$4l(lBuxRh!pCOCh@Y~HHK#5>(@-Vd?/Sg' );
define( 'LOGGED_IN_SALT',   '`O>Y-Q9.li6A4TT_gn=o!(H|nZ|%N}&/dDNer,uaV~-v0`h&dDWQM:(wJ7e#R(,6' );
define( 'NONCE_SALT',       'w_-|-tc_FuE.W9r$I%#G-(z[(QEGfI|6Jo>Tj.u-~LB+><GN0ot1}o>-D>50@|Eg' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('FS_METHOD', 'direct');

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';

