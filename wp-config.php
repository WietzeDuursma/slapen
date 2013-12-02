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
define('DB_NAME', 'slaap');

/** MySQL database username */
define('DB_USER', 'wiet');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '6s,zgVw)8-4-8tD2|.w{WzlqKc}3KbhA;!;Fz*tJ?88`@ ebRv_-`s!O[P:Rj4%D');
define('SECURE_AUTH_KEY',  '=#[]ETPKDt>Km*RTh|?ivb:~o1fI!7;=~%Tqci_`5DT|Rc%XIbqad%xnE^|f?l}i');
define('LOGGED_IN_KEY',    '`3Y6@fH2B<ngT@2+5MebfNE~+E^-dCazTtDNb55y.OhM2R.4omg*<] Cu*x+pZ++');
define('NONCE_KEY',        'x1`u:lN{NZP-MK%yWyK[fJH=`[@+lb .r(5^61 F}5%q,Uv-~H_v~*gjJJ!7,2JC');
define('AUTH_SALT',        '!gdk(u+rE2K483)xqT-FNC<zf!:3V|(zY^`4h.]S#ZX&RQfIfq_]2Z>H<com/69J');
define('SECURE_AUTH_SALT', 'lS}r%w 5_B&@0;i^# e{ZEy8nO*>?loLbt0S|w.2mJwuD  {v!QA)-:pS{QH+,`K');
define('LOGGED_IN_SALT',   '*>/0?KI>ahS@hrwAe?{]d@mR{n)N>QzPQD(O#m@M,>pzfPb .ky;-8Eb93=fq_T ');
define('NONCE_SALT',       'LxsSPnR3FWK ^zDO$&A,4xvRA[+3?LN_-+T{[):3]1[#PDrmO*+ i@0a@IW>I1:>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

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
