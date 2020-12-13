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
define('DB_NAME', 'conormcf_WPS9S');

/** MySQL database username */
define('DB_USER', 'conormcf_WPS9S');

/** MySQL database password */
define('DB_PASSWORD', '}I$HykRWZiB]eA!3<');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'd4c354c8db46884bd37aa7ef3db1e3adb50b651779a848cb890bc8c5fa1a682e');
define('SECURE_AUTH_KEY', '58305d2e847b555317d252ce0a5b9d9a685fa759b9cd7b88b7500db49e3f137a');
define('LOGGED_IN_KEY', '92321a018c5212b0d4fa10412b1434a1090510b1abb4004d803d122e1be5c9aa');
define('NONCE_KEY', '5935026a5bcb51797d0c165237a2b47ae60081295d0c963f7cac6657ebb6e8fb');
define('AUTH_SALT', '96746c03a7fcd48b1aecccd2aeeedc67a05d803d422c38fb560433863f16de22');
define('SECURE_AUTH_SALT', 'a8726db853e4c09f238c3690f428e5db6134d2cf098d4c815085d34e45ab5a8f');
define('LOGGED_IN_SALT', '3c72ae24dad7dc9af02039e5f148f2fb03ddcd417a01dcff2fa0e04e1922fc76');
define('NONCE_SALT', '9139cf91b790fcd4129c21abe15722b1b037c994a6faada69a6eacc869fb5ba7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'OkV_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
