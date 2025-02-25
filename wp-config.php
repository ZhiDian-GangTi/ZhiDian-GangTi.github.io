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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test.cn' );

/** Database username */
define( 'DB_USER', 'test.cn' );

/** Database password */
define( 'DB_PASSWORD', 'test.cn' );

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
define( 'AUTH_KEY',         'Tb<[-bdMO(yY;esdK+@Ootc},=ab<uz$~>Kui@gMC3Kd`BKVq:ANFZnnR,C^L);x' );
define( 'SECURE_AUTH_KEY',  'I=?=-d~.^b7kUPrJaE/A,~`[peNw2x71!Ro`0S)r)xsemt9JRGx7Si*meR~@!zy?' );
define( 'LOGGED_IN_KEY',    '80AJ6K4b_26/oCE?hT@IHXHFVF4I@3$LP2%{0TN{K}8pFK;D?Ezy=,8%>gUVfKv*' );
define( 'NONCE_KEY',        'h>f&ODHvO!OW)QvI;.W&W.ChW-E6KRXm,$Efsv@G|h>t2T]=)_0<PG%H1XaNK^t}' );
define( 'AUTH_SALT',        '+;B8}bdqA0+unSDgK`]d3Wu0=&Js3;b)VJzsuW95iz_P{{~*nK)ZblW*L4Y!V=f}' );
define( 'SECURE_AUTH_SALT', '[FBor%:$G*Q+qxjjsK#u5!0A)>iLqm:BR|:Z{ 61UpDj6CT_=n= 21x9:._:Eg[2' );
define( 'LOGGED_IN_SALT',   '=%?9%{[[Be:<-bH*@lUfIS^:Fd$O5&9[mN3iR2:pq/E9f+`v3q|0UN`0F5 ayL/>' );
define( 'NONCE_SALT',       'EQWd**JUc$U}.u*`{Z/ w(Vn$#Rp?1OZ!K9[KC$^GXma8:gBL-=idr[ZBhU<xpu{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
