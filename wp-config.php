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
define('DB_NAME', 'portfolio_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'w1 j^]#NvTq31FKl$~X7pl.}]a90893nGqhc6}q>{vyrVJd8~ANe2a <&Es/GK6~');
define('SECURE_AUTH_KEY',  'ca/hYRgs3:*@nw@t-@:-yR#^?ye~wGFD_-PD{{yxGtw0EwoB,El:/J{]m`ZxOQ1?');
define('LOGGED_IN_KEY',    'qk_So!GuA4p=vHNBygxMl_hl[:uzFPA6E$8c=ot(eS4JaQlo@L6]khe2@vA(!%Tz');
define('NONCE_KEY',        'c&YP/s/gwU#ANOgr#x!W?%ONQFEvVF^+49z2G7#T=B.~SbOO]ULm]U5x5wF7iFMW');
define('AUTH_SALT',        '{v|8}p!KQ7!N2f<(>;-T)Og$NEf?$;d`:D:X.IEhl,N]~Ir>xsUeAQ( $-ggqZz_');
define('SECURE_AUTH_SALT', '06@7P,XS$ERojz03=wJH+@`D2)%;Sa@(#B0mvb1b;)Hf _U}!=f/wxS}7p(-EYD/');
define('LOGGED_IN_SALT',   'XR2dDtkYE!!-<PotZvS3!Ba|C(%i<Vzvf~A_FAlD9lIVn&9/5@E,Hnpf7AV0t0}-');
define('NONCE_SALT',       'M[Cq_erg`nDBlX<|v6Wc_ N;JxZw]tAV]fB1r=(Q(CGrb*r%jO9r[R;H4x0P|im[');

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
