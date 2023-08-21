<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'regestration-form-db' );

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
define( 'AUTH_KEY',         'ZJ ^ 2bsc8UrY7)GpLq.QPMu?<-kN.2{1UCa)$9CXY4<f/eTMe$WltD56ooSBo*n' );
define( 'SECURE_AUTH_KEY',  'aVWGNf}Xv+`yAJ6nS*$ACSSqL:.s([hnrbC;4;LYq}]5BTyOuq.D$Oe?@HyGYh]p' );
define( 'LOGGED_IN_KEY',    'wHFV)KPh;h.(q3-]/:4f2$a_BD6Ot<6f2/]IXubY}f#{W>4}&0.ix@cIpP$WfCW ' );
define( 'NONCE_KEY',        '2681Ii>Fdr8<GLisjbA6996r+)h2t%o@grX.bpL#Uxx-nZ(r319-9wUNdkD~yU;s' );
define( 'AUTH_SALT',        'Wql~mqd]=E~MLUf!uQw+@W5V,`v>Lop5gl1.0a?_&WR_~oh(Ox4K)fa/W?z76q1N' );
define( 'SECURE_AUTH_SALT', 'l+/,D*[C_;z]O%y6U&VxdO!7}pQJRCB728YtblMW=sQy}KNmN<zLk#ruFH<qNox$' );
define( 'LOGGED_IN_SALT',   'nyA^]vJg,|;s^9rT[k+f;:QEx0>wtqXKX,lfgMS+yMNy@_ro#wb1h#8}>t%N}xl!' );
define( 'NONCE_SALT',       'ax5&`Vho,0X e<6f[b[L+#+1LZ+$n:JRj 8d0yRlQjF)>3j[R%ZNe!39jhP_m!nU' );

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
