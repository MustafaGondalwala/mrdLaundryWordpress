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
 * @link http://goodherbwebmart.com/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mrdlaundry_static' );

/** MySQL database username */
define( 'DB_USER', 'mrdlaundry' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mrdlaundry' );

/** MySQL hostname */
define( 'DB_HOST', 'mrdlaundry.cfk71nh9pxol.us-east-2.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://goodherbwebmart.com/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Jl2XLB;7?wAh L~s`XUXRB@v;%]$rdy/x4,y)m*@V1hA[6ZQ1O<>Vlun2!_eIgk)' );
define( 'SECURE_AUTH_KEY',  'vnjd)oX%1y51AbQlE9-5ZKhb^S,{#Tl*+/u(v=sgrXl-!syk{%ICdFG<h%gsNqA*' );
define( 'LOGGED_IN_KEY',    '5Ayp+(cvS#-ngj4JH]oX<:`i}K}ZSOA4 :)WNLQ7W5-uV&lM-W)9bV-t~]WhkA~1' );
define( 'NONCE_KEY',        '(w~HKZUZk&N4M5^00h#B~8{J8awjtNt&dt=Ym~ZsA{hu>RtpMB_K!<_N{;rN7fth' );
define( 'AUTH_SALT',        'tBIX_POJ5Aif/-9{9`V` ]athqtvARu~&>>9p1NDn81j#U0#kwH~cZAVK6%C|vl:' );
define( 'SECURE_AUTH_SALT', 'jB@8z|j?}B!}A@=]3u&v5h,I8RZy4FK^MGqiy)A~TD7S*vKPIh,lX2<wd|gBv<4`' );
define( 'LOGGED_IN_SALT',   '`EMO;v{w=E7*6Qls&Z[JPpF{S6Ay*VW2~h^J)5ZJ>v_JNz<NTf)B%rW2/;uPjiPi' );
define( 'NONCE_SALT',       '<=xUl}|DMZvKsB~pHUWM&dvSEOX*rWTZuOjQoj1qCYnv6I8zTr`9sS<v;)5t^A.[' );
define('FS_METHOD', 'direct');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link http://goodherbwebmart.com/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
