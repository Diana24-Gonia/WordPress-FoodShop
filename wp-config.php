<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w#lRB)7t$ECq-?|}VPLu(10ri>0P8hDso5jB#*h@=q7 |bHhwA*J-E ;m*C~e:WG' );
define( 'SECURE_AUTH_KEY',  '_H(T[Do7<&iko^f44UjblO_nz8*E7x@}.m8f i`_k=M60%7l4#m865g3tD_#m41R' );
define( 'LOGGED_IN_KEY',    'FnFJbSov_-6c&{^md)MRis* [ai_R,PHQ[&e]*cRJ*%mLZF@@XH)[:~}VFgWnp3|' );
define( 'NONCE_KEY',        'jb?8U8$-(0q$|~0L-}bQgH@^U!d#0D_lMt&OAn*pIkf}cW/z8ovYV,8<bxZlhWbD' );
define( 'AUTH_SALT',        '#rZ;#:!MdaAt!eYDWIk0Vy,)9<W-VQ`Y1{u2omW(bVSVNUpoi/^8wH};oyPI@JCx' );
define( 'SECURE_AUTH_SALT', '4gp=PJlgF>Jd66VX][F.P{}g>6s=8HfXcT;!fS|XenJN6[@XIf^vJo)@RB+:(B9^' );
define( 'LOGGED_IN_SALT',   'Q,P{*Q7n0!vd0Qh]N*tYnhr;y;5/c>l>e/QdnO4J CKGKh&]&7`*GFwmql9$0rju' );
define( 'NONCE_SALT',       'cyQDcN`gJ>?x?S?x3raJ} DHWuJ(fjF62)X/Rvm[Ym/X6pfG7kz E)01NMn_w`mm' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
