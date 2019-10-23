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
define( 'DB_NAME', 'H2NsplYLxv' );

/** MySQL database username */
define( 'DB_USER', 'H2NsplYLxv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G9d9nI4i4j' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'wgi#:4y`$L[|2W6<cp74rN,,`AgB3{V~=n6dMLwBAVU[HU@kVv#_^haW|>6I-@ .' );
define( 'SECURE_AUTH_KEY',  'IK$Tx+=mgP{bu<eq `L=~0v)eef}~CtFN<V%6;^UzeFAKhe}+M}o`=.jY8B^/~K]' );
define( 'LOGGED_IN_KEY',    'xjVitw<;Z/Yl{/qZ6~`p>(jU`!)IlZ|Bg@X=bwjuDChEIw3]fA$kl%}g72-(}%iG' );
define( 'NONCE_KEY',        '}Q.&P8M[V~UC&TM6|Ll(4KO%;m`uLrdZAf*s^bcVVH;uU,m!^`^W>k^l|a1mx&8;' );
define( 'AUTH_SALT',        'fuHln103aIxBa1#Uf#LZi`dnQ|}L2B4=wQQ6ZkaC`y]So$5]/R}p m(&kp2`kMn=' );
define( 'SECURE_AUTH_SALT', '`uP^}~EW4)qGkBGVI9YS&=7pE*].hx&o%,u5_BQgs|NR!Sk5:akq=Ipts_}=#,:[' );
define( 'LOGGED_IN_SALT',   'aIkwR9*h9eC~B&n1tTRJK(;Jl,rAeo1w`t(F:+Gs$%-1@,^|[4loc@}g}@9hk2%X' );
define( 'NONCE_SALT',       '6.gI!4$x uq<SQdj] `jYuRqnL&aA1Fe{e?u0%5cS.f_ ; W8)wdo|AeK`u8@^OE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
