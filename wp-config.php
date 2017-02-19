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

/** MySQL database username */

/** MySQL database password */

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
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'tuftsdaily.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('WP_TEMP_DIR', '/var/www/html/tmp/');

define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT', '2048M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'MD[/j~hYjRC^>#$Sb%z:l{oWg9VM_RT dX0%c?c<tQY$W^;+b`-o-;OY1 6H:N@z');
define('SECURE_AUTH_KEY',  '_2x+|XF0IO>]/3=>L9>]N;[%W==T8hyPU4:XDc?$H?6F@KMxpL.e9K/+?V+|L:W}');
define('LOGGED_IN_KEY',    'ycK+P_7@Gtm!(+eTgvh if>1nory 6|?>0D)o )1_pC#n_ltem,hTtYb=,44*S^F');
define('NONCE_KEY',        'HH{8)0skVc|CY+{Q:Ou+ZSEo_FJ_HP|hKsUo _q4>s][dDk+hp6G:8II^_q+GR}*');
define('AUTH_SALT',        'w%[^(YOB)Jd(0n[@)C>dS}Q@Q<@Q$D,-xx4h?r:n*2-$~P4bo=?WrSe{oN(&~ii/');
define('SECURE_AUTH_SALT', 'Nkvh[5>xVAgY_s`4idnYl`qUbEz!NM]9/C,%O6*-t?o1i(p#D`><z*c^hIrv;Lw{');
define('LOGGED_IN_SALT',   '3-k7/b~9G4d:=z,.9/-RnI-7;6R+fwT5pEa<in-Vt.wgHLNmu+A/:GwS9am)lCc9');
define('NONCE_SALT',       'O>V(PfQYlOC:Yo+|T|3]{BtXS,4|3lAlrh/Ns~9K;mt`vPqiwf%6N4tSkS8>Hk+O');
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'jmb2828');
require_once(ABSPATH . 'wp-settings.php');
