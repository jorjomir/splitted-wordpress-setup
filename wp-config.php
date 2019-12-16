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
 
define('WP_HOME', 'http://localhost/blank-wordpress');
define('WP_SITEURL', 'http://localhost/blank-wordpress/cms');


/**
 * Custom Content Directory
 */
define( 'CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_DIR', $root_dir . CONTENT_DIR );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );
 
 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blank-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9M6ma3am48W3uGBEz1annPTeES9BmdhEvKL0yW+gw58UTs9ZimFPFMlfK7pj6DTwxbmkffMfiXR3/VeuLOs0pQ==');
define('SECURE_AUTH_KEY',  '5O2oIWJEY2YHkICMmyntIM9Fc0AZ6aDpu1g1n9SRQzas+3Fsy7QsJNpIkR9eF8U2jtwodf7yzUTGQ0krJvxt3Q==');
define('LOGGED_IN_KEY',    'tV1KXIEu4KINe6tBFtP9tNido0R+Tlty/MlHiCa4LZqgg5sTd7nDyAajGmHwgZRV7fq02S1NaWuQ6XwN0ThTrA==');
define('NONCE_KEY',        'W+gBZfMXmqtE8Ck1xV4prDLv4z2FI5zSLAM9hkMLebffDy4wdj8R0uN11uUjFfLNvuCqOnwRKYPf00abdkxUfg==');
define('AUTH_SALT',        '/TyHBS7Ikuo5LDUM7amx8qfDucUoN2A1Z8xImwNcKYheQQ2NA91jPM2lBSjx9DJqr99J4yVh7BlCzubTviuwLg==');
define('SECURE_AUTH_SALT', 'LO40Dp1orvyweqK18z9nDVErnGHqWsuIcBlyE+AQ7yU+mLQZbIrZjveU7uccmxBS37euSbHpGHRibFJr7tIvpg==');
define('LOGGED_IN_SALT',   'UAhX+laaCzhAlaMl1Xr27VmKElbUfUANaRkLRyD7iGSG77tNucbEIDTfrn+JKkcUX4k4Iqb9XZYdtF/9zQ02LQ==');
define('NONCE_SALT',       'Q2xM3F0+c3chRRk1Z5IvQ4rMDA94yN9atRt7ONHFrfVUWzqedG0MCyn2r4iXpxHW1LY9emKLsaHt8wkiCB7pMA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
