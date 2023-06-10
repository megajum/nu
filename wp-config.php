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
define( 'DB_NAME', 'nu' );

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
define( 'AUTH_KEY',         'PF$>q8mxGPFe,B1}f6vzn|0I]73+/d&HNiYJ9+}}ea-8;M.}1/%tyN?Sr:nU}WiT' );
define( 'SECURE_AUTH_KEY',  '}&v~$LgQaO,tSUc}amzj;b3~1Nszz`L8X,0]}x;)cp)#uG6J(MMki^8ihm(KqV%?' );
define( 'LOGGED_IN_KEY',    '8SMU^[EGs55.`&2s[Coox[pPE<f%# ch=vu3iPwkJzj |3&(8s|RI,ODitTo)5NQ' );
define( 'NONCE_KEY',        ']7nTy~6([6)=dCcI_uR}/CaQQKoAuwz7 [/o lu-,8W&jF+05x3 L$y<3Om$+3tr' );
define( 'AUTH_SALT',        '1{/r0ifOs_m7<Djs&]u>O4+o:&*Ji8SFSUw$m5WHRQxp`KCIgQKs_Qb=%ZLgk.>u' );
define( 'SECURE_AUTH_SALT', '__?mR$,6nf,+-0#$Gb7.;)X+FK2|MXM3Q2MhjoHOMe[hOG&hD1#oEVIiA&PU2IH5' );
define( 'LOGGED_IN_SALT',   '$*A)R7Oe51Kvw1++|O|OlxFd478<vV)4!3~UCD_[f[[;XwrZybysLxMLKwI|]E<$' );
define( 'NONCE_SALT',       '+L?5L*fgBnL|=}SrjpLSH;6vIm}WrBR0O1E&c:$]=S6c7hC+RMA~cPhQ&*($l)[s' );

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
