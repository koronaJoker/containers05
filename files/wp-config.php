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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'N~Zh{06N{O3GVxIr{IW9EJ^a**:@]^3a=`^LJ&fM&;p}j-60:M<IpJi/8|:w}Vv.' );
define( 'SECURE_AUTH_KEY',  'K(1u*yYlF^B!P`H2&cu;oH`l+qJw1IQQ[P$R%M7z!2{TRWm:H|@!Q}igzTgRFM%<' );
define( 'LOGGED_IN_KEY',    '~hl>TWGip/U]fyBdbi_Gr$_lBTDgw?bM&!:=?zE?.w$^ZKGA41](OTr>^<P0L.SM' );
define( 'NONCE_KEY',        'bV=J[AwvZ!+Gn_AXR<nDDCj7>)y#Pyd`u4Ge@/7$%P`}O|gJV9cJJ*hk@;X3* u9' );
define( 'AUTH_SALT',        '^`7t;VWx+rY{C`zd&j=a?,WnVRQH9=Mg`#Aui3.ipqs@#jI|EZ?2kj$Kw{1 6bmX' );
define( 'SECURE_AUTH_SALT', ',GW=hDE|wv4Ro9aOuFoC05o @RLq6u0 ~{_%&w4Itx3b^om<7%r_wF4FseM2%M;s' );
define( 'LOGGED_IN_SALT',   'a`.y4I|j_.lzbI4GKFNbelp6xmX!C;t9tuy+=r-*xP}~i-31AIpvv2N8BlA26f.!' );
define( 'NONCE_SALT',       'Bq9A!TVoYxze?@@cZ-u@!qncM9 GWKyZ{x[-X6y&j**:yYjf6o[/kUo[>4SZ2e6k' );

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
