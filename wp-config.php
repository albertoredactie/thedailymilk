<?php
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
define('DB_NAME', 'thedailymilk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i,U9W,b66&NM1g3rp)&&:tc3N2f^VS<,8z/nuLc.Lz%R|}Q=FEvgeNzE*6z`j*Ww');
define('SECURE_AUTH_KEY',  'noF/gBbDK`{`V{#o4s:dRP*/POjcyUP!#S0k|AaxT( FLUwsE|:Nk>T$oJ+3)$qx');
define('LOGGED_IN_KEY',    'F5dES?DNiU_:)z%Y# <q,+Y>h+=6FmOJZPuy:I?E)A`KYP,=o$rdQYf!d8U]GL P');
define('NONCE_KEY',        '{ZT=JXa7VQJDS-Nf0rWAE5=no4Qy3Acih<v,7_nxbK?[p)|W(c-HE?ZA9:c*4Fej');
define('AUTH_SALT',        'ft5?Wo6+uG5`EXsec/yfh#_2[9x<Zto&hqhYyB]nr8b6yy/OoWHv&Nq*y@tV8s7*');
define('SECURE_AUTH_SALT', 'Y*gOm_zfpVN.Tz$av[Pk.*;o@U{f>[t$q):4>~N[OU}hV^ytgws5lP{?Q(OKua4M');
define('LOGGED_IN_SALT',   '#91>Bm`Pffx 1io$<m~}V;8:,IBh6hm-0!o`Z^h8O]^_fFUi:Bo|J>/I[o&l:H1=');
define('NONCE_SALT',       'VwAk2j@C?LWF6<U$:WY-fzU1~Rx@LN5Ci<1/@%=/G,|*mxq<oVrsmxw*uz+Z-qo+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
