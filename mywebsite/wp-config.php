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
/** The name of the database for WordPress */
define( 'DB_NAME', 'nxthanh00' );

/** MySQL database username */
define( 'DB_USER', 'nxthanh00' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         's{m?H:gHMonv-,(b`yd!dMdY!Z3<H_W[WkG}~0 -8!8JU=5^|>LDTnY-Z+8N&QJ(' );
define( 'SECURE_AUTH_KEY',  '^3 $S1--.(-Ih7GlB{<FUZed>kS7#EPi&.yy*L8A1TBJvPrLVQj~3VDFtaepLd~3' );
define( 'LOGGED_IN_KEY',    'ZXL<`>KGT4 3]IY_Y?``Ta;.@V=(@:9 `tP,7C5(4XUS<7g<B1HU-+JFmjR~iuW$' );
define( 'NONCE_KEY',        'M?l#N[}I]%qa1ziSwIRVgTv~<hHH+osxn8%DQZZ%ByU~G+{!r$RNMyF]u%DAOKM>' );
define( 'AUTH_SALT',        'dNVdh8skzZ*RG%_#rg;A9,-fK[>r1;<y}E>+=#]];@h>;v^w0,a;70V.)Sc_P!yH' );
define( 'SECURE_AUTH_SALT', '<;AFGk7wGJCws58e[Bq]b<-;$irznZWI&nHfBG,?)+>V!FG<(NKW+_4n)QbMVE~u' );
define( 'LOGGED_IN_SALT',   'w9006d$yQu@[-G[M@L9HSA=<hdtadSfmB<@>R]+mVKRvWwx4;Z Ue=)3Zcst]n?h' );
define( 'NONCE_SALT',       '8ny[._SC_qzws2]){*&mvrR{IQ5(w:|>bq;0.dgJ+XR;~5&NYLUCc%hdE>.ZZaQO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
