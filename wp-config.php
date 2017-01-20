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
define('DB_NAME', 'bellVirtual');

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
define('AUTH_KEY',         'a?E$Bs!vr<dBy[nta@)?e4Od{o}9`I>p:Smr8+ni~6tocGnu#HZ(dnwAzC26uk;$');
define('SECURE_AUTH_KEY',  '}Siy*0>%bb}?CanCE<ld?JhRQw*$V-q3bS_VG9tV8~S$}b7*5iT7ErWcBX+v3Lop');
define('LOGGED_IN_KEY',    ';+PFHSY20$L%)x(ZvKrZ<{5f2![lbHoT!t{#4~$^@gaKFp>t2l;*Sy>;e)hv6RZy');
define('NONCE_KEY',        'Vy:;)ws^|0[@AOnD ?onW_z-}Om###m+f-I#V]}=ZGkJn>+Y^#/@-|CnV1(Gvq+<');
define('AUTH_SALT',        'gVpeUT9YH+}<-%;7/?A>Y-*N{K`8Z2ns+}rt#J$^YM*|XuM}~hDc6WnZ6c(oaNZ)');
define('SECURE_AUTH_SALT', 'C|3&* `+IDvlx+`hH+CiWo+Q^{RHIl,s*kOu0`>8tg}%7(r :8]v&4,AOs_|RH(v');
define('LOGGED_IN_SALT',   'R&9B?}R8!Fa2Wdn*Xh2<J{T6*_pMbF=o#2>47WLP]=,IbcLK!xzA4Bgwl$XMJO@L');
define('NONCE_SALT',       '~-JykIJrVX0_ph$_PPYl4&64{+Y/e*`y9kdSCKEWnKF#O+bjT=/t+-5;0^tL&EEY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jkl';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
