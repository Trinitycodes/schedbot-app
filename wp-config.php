<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'schedapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hVh:Sc!$v3a)UpN]9BJx**pUI~I-iV{8E;+KK$PH:D[K2QA`Ior0dJ${wmoiIb,V');
define('SECURE_AUTH_KEY',  'x1|_k_{xLq5~8xc{+B-4fk]PvjODX`r[qrMAzPXx-?lEm9kJ|f$;gOA*M_Y7}1Rj');
define('LOGGED_IN_KEY',    'H}gE84_Akw%;CBS_M#dZpB:G27x-gv$%P|^5t*Ln=|G`Ew?>g5*O@)9?(c$;nyYN');
define('NONCE_KEY',        '+.iNf%~^c1 z %PDACvK&]a!={}b |+Ffv-*N[L2Vhj$1pKyUUcU<H9Can$cbAe3');
define('AUTH_SALT',        '-$F7+~DU]r2@a|]mc=f``[YvnrQdpsr2OM?L}Ui~@ngq bG)Y p+[W%x8.)7| 6-');
define('SECURE_AUTH_SALT', 'oF|O=>#= @fLggA!9*|Y;Q?pf@rdYYhR1Y,b>SRq8QPin/lhDo}~ Et0C*=)3Gz0');
define('LOGGED_IN_SALT',   'tJY#a(?Q<)P,/a7i0D2zxh_+|<GHs-zr;k;|nSt9QzT]+{.tZWB->~;bO=g^T8Y0');
define('NONCE_SALT',       '~[VN=p[CBqln,pAch9Q;+zy$zaOhg<4yyS`k(,R%UEJ$68W@_S*#mT`3<6?,l])H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
