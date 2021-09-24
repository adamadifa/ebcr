<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ebcr_rwanda' );

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Zmdi()zqAJoH%s,Hc^rSW.AyHp0q)>ek+6hx:pluUtrcS>s%#~zVXTtEyjLF-y:a' );
define( 'SECURE_AUTH_KEY',   '}<G0EnoWs$rphh|N4((w!~KGkF.YFc@Q:p||c7ov-cg7;NQrS%A={;o3nx8:+wHl' );
define( 'LOGGED_IN_KEY',     '4H@vXE$pSW9x(vjPgEuqCJ[M10vQ4D$0?s~c<T+{n`YCOh-81i#Q+=?INH|Il=6a' );
define( 'NONCE_KEY',         '@2Ru6lql>megbvR) L~|=&@-T3,!q]*l}=GS]R[@;c#bhby(nt:.9#F<6<>39)o>' );
define( 'AUTH_SALT',         'Xj:77$`n 6j?]K;tS|wlWjI@{=Az>Sf74U/yTIA:UE`fw>jRBn`q=srngIV|]Hs<' );
define( 'SECURE_AUTH_SALT',  'mjK.mJ9>I)La2*fC49RoY_q`67c-B${I,Tcd-kSBXuLJk;P5L{4`+^w8)CWPu!8<' );
define( 'LOGGED_IN_SALT',    'vR@bMLTX&9JJg:!56,SR}&e!3_&Q<Yd*[,dHg;bf;-hu>lZulEQ50BT?I,11?:/j' );
define( 'NONCE_SALT',        'd[OGTTm[/}$#.YD%fEQJ$FX}+@ Y44A}I$g34r*m:.e[cG84vdlp@1E$}CIguf4*' );
define( 'WP_CACHE_KEY_SALT', 'o,In[@D>h*zv7cc/2EIU%-Z<5(GBLj9@}}E#SOmV_aI;!RS}.7Y;_yrj:XMj4Q.X' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
