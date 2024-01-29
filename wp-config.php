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
define( 'DB_NAME', 'mutuaWP2024' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'CeFtdVseX3MK2yBDvHP0u32vb3oT3T3I4ANtvIVuGeFrLmsgtj3Xpo7n0U24uJIz' );
define( 'SECURE_AUTH_KEY',  'pIQuZCraQsrXx3O6RWbyBHVR4iO1UowSsouWFuDP9l28RRyrVs2P6tuVyTDfutcN' );
define( 'LOGGED_IN_KEY',    'G7eiYk5wPIr4WO4Uzh9FduPF6eXh5sEHPXHD6i48ymx7RmKzs0YEgobsMxIZOV8l' );
define( 'NONCE_KEY',        'ZjWbmGy6RDOJ8NwmJ2D0YajkhjS9HIrfC19RU4GxYKyDiBOPUHzVlFykgCpxO7pw' );
define( 'AUTH_SALT',        'gHk1lncrPUNPwzLcqmAhAYc9jf3pRMz51ymylR7OnM5Ci72XqpwJwAeRufui9zk6' );
define( 'SECURE_AUTH_SALT', 'Hepbkj4Q5sKTMrb9oJifV93dbR6AiQ2wrxBPKmvINAbropBGDlIVgjm0W4FZTDbM' );
define( 'LOGGED_IN_SALT',   'C3XtGBpCbvZunNk5yBR8Bii1JFC2Yaazui7ntTYxg8Cp0YckQThIAQv8kMLlChdw' );
define( 'NONCE_SALT',       'hVmndM0evEgNFcQm6Q0vFx6t7C8M60Fj3dhMj3T9MS3wu8WJCXLqSJuemr7R0x9I' );

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
