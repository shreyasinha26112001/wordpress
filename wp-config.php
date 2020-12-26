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
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Personal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm@d@nkum@r' );

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
define( 'AUTH_KEY',         ':e3^scgKX)(9vW!K_`t]&%[|ks`*e^*sYpJ=I$v.KCx7^#XFJ]SpgD5!K3nBUfm+' );
define( 'SECURE_AUTH_KEY',  'y}w(4?Jw<k]Y*.A:7rXs2H.iu 9r8s.u>YlMN[)00MENm6fRe3jIn.*Db(#iOdkH' );
define( 'LOGGED_IN_KEY',    '~0.e3G[~_[D&6)r$(*QgZvO<>>$6yccOAomuMd~::x5Xfm:u`|Bg3W;iud|wg88&' );
define( 'NONCE_KEY',        'j9^>?>.5<E 1.3L ^Q_p*2FmE4{f8/0rLIp}]zyHyzMzJf]U675S`.!Qvo!K!kG-' );
define( 'AUTH_SALT',        'SZ^~oH`|[m1R0=h(r^^qfA,PcYi8Owg.Wmvt;e_*E[ :WnO-D_G:@-`Kpm#`x{ka' );
define( 'SECURE_AUTH_SALT', 'uw},DxMN*aZ)8SCtq]uE#M?c&ssu OZ|.oR{K23h$W<)Vw5GE3Vjp@^{cuD|FdY/' );
define( 'LOGGED_IN_SALT',   'YRL#%^ajiucnOdMJUP8/K;J61:.6z{xz?T}05LN%|p15h(j{g2MWh)sNU|5lWpQZ' );
define( 'NONCE_SALT',       '63I4;&4l.vb_`l|M,1NFb_Y_Eaf`)i*!flbr2ufD0vT{w(8DTy rXj:7ECexR*hn' );

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
