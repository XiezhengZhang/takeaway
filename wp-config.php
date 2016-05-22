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
define('DB_NAME', 'takeaway_base');

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
define('AUTH_KEY',         'x@1L2t-U>*IG+{i]mhDJ^*8$g#|4:C4A{Duj_Yb0GUS#~*p-}[i%#G)CY#c5PCZ2');
define('SECURE_AUTH_KEY',  '0nO%*#U3?=iyCu%/EWy*6,%2LY]W} @loV9k*}ZMu5L@|fWzKHfU0Cxv~lA 6ZX1');
define('LOGGED_IN_KEY',    'W-Kw}3R+Kv{:g]=yN3okjfcO~#?+A#-OMk9Cn*,1JdcqT)O7,7>x72.sI|b+vxP|');
define('NONCE_KEY',        'xcJz<O{JJ,{FXT8VUxXFj+&U:!H:G*du_9cM-ZF(Q>ni.jeO}3kSm:$MAnX]b!x3');
define('AUTH_SALT',        '[TP4k]+$^|ch*,E{^dPm^k(3%#.umIA9|+&RUl7,[|^>P6<5ed -D/+L^C%U-5@G');
define('SECURE_AUTH_SALT', 'ij$-JD9|+|H3I()--*&9g+E%7zP-mDB[zc^6G!)u1uL$qvB%oXU>oHb[;qARX?|3');
define('LOGGED_IN_SALT',   'iA$zdJQ!*T$W)|l=l:KPD?></|=ndodJ~P.2,|~$+R2ur[- pV`(dN.hL<%uW6XR');
define('NONCE_SALT',       'kQJdyU`GW{a5=sP0B+(s=t/|PtG,HxPjGU]yrimuN%-v+[;3VR3s.;.|kahOE+F=');

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
