<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_HOST', 'localhost');
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'jmb2828');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';

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
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('WP_TEMP_DIR', '/var/www/html/tmp/');

define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT', '2048M' );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'MD[/j~hYjRC^>#$Sb%z:l{oWg9VM_RT dX0%c?c<tQY$W^;+b`-o-;OY1 6H:N@z');
define('SECURE_AUTH_KEY',  '_2x+|XF0IO>]/3=>L9>]N;[%W==T8hyPU4:XDc?$H?6F@KMxpL.e9K/+?V+|L:W}');
define('LOGGED_IN_KEY',    'ycK+P_7@Gtm!(+eTgvh if>1nory 6|?>0D)o )1_pC#n_ltem,hTtYb=,44*S^F');
define('NONCE_KEY',        'HH{8)0skVc|CY+{Q:Ou+ZSEo_FJ_HP|hKsUo _q4>s][dDk+hp6G:8II^_q+GR}*');
define('AUTH_SALT',        'w%[^(YOB)Jd(0n[@)C>dS}Q@Q<@Q$D,-xx4h?r:n*2-$~P4bo=?WrSe{oN(&~ii/');
define('SECURE_AUTH_SALT', 'Nkvh[5>xVAgY_s`4idnYl`qUbEz!NM]9/C,%O6*-t?o1i(p#D`><z*c^hIrv;Lw{');
define('LOGGED_IN_SALT',   '3-k7/b~9G4d:=z,.9/-RnI-7;6R+fwT5pEa<in-Vt.wgHLNmu+A/:GwS9am)lCc9');
define('NONCE_SALT',       'O>V(PfQYlOC:Yo+|T|3]{BtXS,4|3lAlrh/Ns~9K;mt`vPqiwf%6N4tSkS8>Hk+O');
require_once(ABSPATH . 'wp-settings.php');

