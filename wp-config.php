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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'hob%(IgzGH$Ho=D!SnDSzK&xXT2qg|u!xzk^DyBTZ/0bn91n hu5Y.)NQ1ZN1Bcm');
define('SECURE_AUTH_KEY',  '=p&fF}|puE8$2A542E>lIv6>Fyo9nDXA[WP>~vMb,WfjjC;=RMa7T9g0A{shKJx<');
define('LOGGED_IN_KEY',    'L>G*L[?Igsb/|2OE*K>oId^+3VH$fOtxXB)BJR|rF=f-<=B$T~wkAC8kojvYSueT');
define('NONCE_KEY',        '3R@;QF.5IOV%v$,^9Ukt BOuQ8FzYCF-[]w+CoiO^YYh.Hm1`bVS jX}YK^gs(ff');
define('AUTH_SALT',        'Bet(Vpgt2@EM`K46X<NthK7 J0 tQA)S5?&s9Sbq7ZR|tW9Y)CT(l2VhT.%#C$4l');
define('SECURE_AUTH_SALT', '7G6iwpR5szTmojh$~{=a%nEwD=K IU&.)(36$mAo=Bti)[/4@,il+ggaA1$JqPqE');
define('LOGGED_IN_SALT',   'UwI>D{$C{CRerMV[0DFDj &W)GFY:.a&y~*y<OQyNp8rw^Bj,Dp[whZfUh1FBWpI');
define('NONCE_SALT',       'RYU6UM[SPF9E6w#L_1Qcs-~3&o>M|1:0JG|:o/|7v VehCL4,AH<V}hBuT]m!6<g');

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
