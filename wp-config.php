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
define( 'DB_NAME', 'portfolio_ts' );

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
define( 'AUTH_KEY',         '5Bb]0v@nn=d&Z= _v}KJS+)g<Q6h;3jf}%=N:AVpKLD6NW(_`GRuSabj>a{CsmlD' );
define( 'SECURE_AUTH_KEY',  'SqcGdzpQ7z;*D[2tWJTD|_5p|G1?{]}@hHY(mf1ab(LM+(6oY{Z;M%Yz*yLXf)%-' );
define( 'LOGGED_IN_KEY',    'suA8,dF&ei{M|B-8@iq)S?`%M;&|^8PHDa`U!Pzlbq?/r.`*#Q:0VIR79m7Q_YB~' );
define( 'NONCE_KEY',        'F=Z(t:L{C`h@TVRCT1KcXhObaiFJ+R2[c@q{Y>?#;M1Q`cOqLJc9R8NJSRko>Zr=' );
define( 'AUTH_SALT',        'Fjk>E#|FFauiem?<ZW(|C3;T}cQPNBSA~r7Yc?~3si.Z7%O,q.$}X:;=(~ u(H2I' );
define( 'SECURE_AUTH_SALT', 'vg]dBh=36-DjWz=F0oBe;#x.=HqQNnwqRm>sPewdAHAlCs$.!tM3-2-5U|Nk-Vgz' );
define( 'LOGGED_IN_SALT',   'Hxf&ii(vkzwv9yEF7,~7[JoP;|Xsp[V8YA1,*%JmH53`ZDj}hxb#Yoh}1er?3Irz' );
define( 'NONCE_SALT',       '<eU5zINRbr:V7fI`/;vD`mf>2<M:wFo[N^vNLs/zj)(g}nle:N<gL18SHF~xCa4^' );

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
