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
define('DB_NAME', 'onebooki_pudhu_vilambi_db');

/** MySQL database username */
define('DB_USER', 'onebooki_vilambi');

/** MySQL database password */
define('DB_PASSWORD', 'onebookingsystem');

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
define('AUTH_KEY',         'v#H3jejEcx1lIVt7|s&yl,=Nyj}kn2p+mQK^WDR+|gDY_4JdHqD#rHhBpb&?<olQ');
define('SECURE_AUTH_KEY',  '`,TG`->=wO9Uk/69~{6XE+UvuDc2o!> 1Wkr^;VTc!]Be61v?7^rRvQ*(=2nylUM');
define('LOGGED_IN_KEY',    'Xt@kiV?U5RCWb.;iaYG;dN+}OHFh+RcCw?}jKDBMw#?0{MW/&$zgVH[dNlzKkbwT');
define('NONCE_KEY',        'G@]#%[dxvcXl[a<4W>db|QkP.GQfue)/k4faIRfulxHqi}K%*tgu_%|+x6+O)#j5');
define('AUTH_SALT',        'h* ;CGSFi;R<N:dJjd,Mcw^ysY2uBt,a6/A2QSR#y|<;cw(w|VUIEgJO71=Kv$=F');
define('SECURE_AUTH_SALT', ')8*/w0`3J,N`]-d=VR$w*+/,!VFbM[/$b1<z|-)Y#P1zfn!(m&H5L$UcY];w!rr(');
define('LOGGED_IN_SALT',   'vR#;mERoy*^D4CQy0zzBL,L]|ZJ[ lI+UM_%gJ.cJ(tdKqe|zf<V&t,Om)x{o./T');
define('NONCE_SALT',       '*)f%Vd=/vG.YmeF(}OQ7g&B,cyihC0$e4^t n~oQsnG. oYZ+Tf*9S$4/r,$Yi4;');

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
