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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DmaEKa+Y1IWO0dw0QVat+J4cFQKB+EZeIXVTfQZO3U62O74xHHRiKX+112NWtpKf3943g3XitAXZM3AL5bOqsg==');
define('SECURE_AUTH_KEY',  'EEOxmFdRN1VCUOcQyPrM27qTOgNP/s6B51gC3x27i8h15VTfMJiasNdRGLoykt1QMafIAmhYlFuDw4NK7x2T1w==');
define('LOGGED_IN_KEY',    '+CCV+TVNAdXT37prC5ZJjsTOQOQccEB0DKmQOvtM8FiD2Hsm7bhZ7Y289hwqj/K4n8KxBpUvN226H87kwXKxwA==');
define('NONCE_KEY',        '6AO/TyyqGSwSc9toRQ3n65wEx9PoXf3irdSipsRtgjXQ89dKI6YFY/rbu/yJd+121VdXK5eLodxVHaK6A0Zesg==');
define('AUTH_SALT',        'jws0VYGvx5IhFTq0ojfeTLVq3n3ndPcCaPLCH4/7KM3RUvPM/cQMspxN6wIz72YtTArqUQMoIm1zi7p0cOmS4g==');
define('SECURE_AUTH_SALT', 'DZAM9BpulIrpLVTpCbE6iBClwFiroaecwo3RCi2JZEqqcJOUYRftHrxOz9EG/LNfRM7Itsa428gNxDjfuVcmtg==');
define('LOGGED_IN_SALT',   'qhTWog1DrPgMNpLOcEt5XgYlEHg1E+ySnMfuOS5R+KMHXv4puztcPpARQdGUw8YRy/Rc0XPyoGLpnZE9mNiK0w==');
define('NONCE_SALT',       'rOxBpFHdwb3vvNHEOX48ATVfgZ5x9+KB83lw5nLQeTmrgaIvE5f2XhDH9lw64NCoxhOdQu0ljjqQkb2SK0ZywQ==');

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
