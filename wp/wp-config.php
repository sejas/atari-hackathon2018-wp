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


if ('/Users/macbookpro/Documents/proyectos/' == $_SERVER["DOCUMENT_ROOT"]) {
  define('DB_NAME', 'atari-hackathon');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'root!root!');
  define('DB_HOST', '127.0.0.1:8889');
}else{
  define('DB_NAME', 'db4283421_pwa');
  define('DB_USER', 'u4283421_pwa');
  define('DB_PASSWORD', 'aHbHkA3f');
  define('DB_HOST', 'mysql377int.srv-hostalia.com');
}


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
define('AUTH_KEY',         'BFrI@6m8egvjKU4dmA ~,pUt;ePOeL]J24#S Y1g7^rc<ilUI^1SrVp*OQtr(&k@');
define('SECURE_AUTH_KEY',  'q)}M8gWTM/caND3](I<bf+]i?akj<+z<URdL%eQX?h,N*cf=;a`hF4CN8f}{#pHh');
define('LOGGED_IN_KEY',    'w+N+RJW hL-SW/EM|)1rmFaO(w,;Je/}P^Oo1!>si/[k~4#i:e_kc|z0CJbm40Nr');
define('NONCE_KEY',        'n-SDbllb m)xTB:r8h^h3aOK0patH^Xcgrr#rPlN3:LSo3wT3;3s]?j7}bt[kDmx');
define('AUTH_SALT',        't,F[2[{#sulIQC04Y^8GP_i<_~pie8bT2h-p%1;7;@?Xk+7N8:7DJUBZVs6$-O.=');
define('SECURE_AUTH_SALT', '9NoCJ&(uQyds?b2`]5Y|;0;)1*#UDAMkY-Rg?*|9_Rx=Ovp*DCostg%#&#Lx@ CK');
define('LOGGED_IN_SALT',   'Am(XN,n~#mgCM7;W0aDbbWg>fAU:^,oRLDo,{b,A.3}2iRSO8Y50u{<<7$?z7hj0');
define('NONCE_SALT',       'U]$=sKmj.S.K&Nv?gH*!%,e{-hpwZ{6F0G|P7xO|,^{dX}D*)E2mIH|oMgr(SkNT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'at_';

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
