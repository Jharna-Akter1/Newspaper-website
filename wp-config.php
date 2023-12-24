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
define( 'DB_NAME', 'wordpress-6.4.1' );

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
define( 'AUTH_KEY',         '$|_|!N{{Y*j`bfC8n,GQ`[Z>vi^ym L3p>1kf?Ypzjeb7}r>p^Px{NPD-6$`L#$S' );
define( 'SECURE_AUTH_KEY',  't[2#@qnfb|U)E6qj.v/8;Nb *eO^I+HE93V)%sYlS}8$6Tc@ SyzZ6%=bwd$C,&&' );
define( 'LOGGED_IN_KEY',    '68qp]gp1DHlkr{Il+?=OQ)0gaEne;H#B6TnRaU%%WDjbT.e@>,#*1buEX7AO`-C<' );
define( 'NONCE_KEY',        'u KvnX,T4?dJZbc(=&KGS8RK[XrtYDe^>p]R_%.O,5(E!F|gyN^.shDQ/j~39,/%' );
define( 'AUTH_SALT',        ');f-PR*T+Y@kfR_;=CN2wq^T&Z1>&WjQs++xS)|32eR8XOLG!bEJ,POP#^k/p+.!' );
define( 'SECURE_AUTH_SALT', '>t]WIliI6%,05VgX_^G1rR[yY@MGVyasak#)-?W7RCa8PU~NsVb n;z/*A3oO qr' );
define( 'LOGGED_IN_SALT',   'hUH@ [.[eR9.[lD~ujc+RQqH&Y*3rzi-<K{IT@c01vljVP`;6oXT Eb8NAYP5C?}' );
define( 'NONCE_SALT',       'H7pZA{Ko>|&,E>nB=?sOh-xfIf{/+)+Cr_|oux`vK~)|h 3WpK_PRu`EG~0zH>-c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'new';

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
