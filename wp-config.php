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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
	define( 'DB_NAME', 'demoSite' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbndwxb7xbtre3' );
	define( 'DB_USER', 'uknc7ufaxtgxc' );
	define( 'DB_PASSWORD', 'EsAG735GFbBH' );
	define( 'DB_HOST', '127.0.0.1' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '94T)Hb>@NL)[<[=uCrySPFxU%4nI=0/+54Nt~Lq_0F`-%&!vZxSzZx6OsySsbC+w' );
define( 'SECURE_AUTH_KEY',  'BLruy/ M`Yy+:OPkMq^Hkmr579;WV[+3D@/:$<[_}:[ujDecy5VyaA,=Nf_*`}UT' );
define( 'LOGGED_IN_KEY',    '.pb RW+FbCjNoK}[|*.1f3o%/:glG->/&+|egrE[w/di2*d`1q1H!WUR3Lyar>Ip' );
define( 'NONCE_KEY',        '#Uckv7ADPb_RwKAA4)88|D`!ck%]@W%)J_-_w6`IS#RiR!aU`f{jkoAL_7D*=q)h' );
define( 'AUTH_SALT',        '(r(vo*:1_U.|XEa>>9GE(UCZ-9Sx[I{%5CiA,Msw5Z@Qz-2*+dm6s`gb3X%odfTF' );
define( 'SECURE_AUTH_SALT', 'BpY/(B6bO^Mzkw^XM`B*cU@oK{,L]}6S`zZ+vEw6+;g.85Gdg&G}A*;[`<a0a)tj' );
define( 'LOGGED_IN_SALT',   'Ar$7>B5f-0PjJk;5>5UH32S14d+18Z[/?&EC&HIT<$AtVLqO$k& X8u%,6Utq}<l' );
define( 'NONCE_SALT',       'BtL%:$:_wr>ovPu8g;[&U9997VBgHc-6+ra;c`mh))FKL#Y+{,.Q`)9a}vHU[VdD' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
