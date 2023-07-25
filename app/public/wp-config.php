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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'g8q26DB84tTLIlVIuTq/ppVeP2O3726XLzqYov4/rCQCq28yFNJP7aOI3c+l2IhSn902J8iVFBAg67jhLZ7E6w==');
define('SECURE_AUTH_KEY',  'aXlQQoxrUef7TIaGAIRjjoyXhIx2mZefjFNLW1LpBOAe8G/dLqlrDpoeuJyllQlETi4NZLUbABWEhdhuSTWtDA==');
define('LOGGED_IN_KEY',    'm+Cp9x4Tewq1qmnfh/6WCjUIC19P7F9n6PIKpCdwfnyCNWIvBHh1OP4WSpHvMnHDtMgRyHkSPXJqx61lZ9KjfA==');
define('NONCE_KEY',        'C7u3BRuxZvJuN0uxmXUcGZq0BKgZNgnSVOw1Z8+Rv+yMwzdaL+Dt4slRsQN3CVz+tcC5TeYdFJW/aAbrl2uPug==');
define('AUTH_SALT',        '2aqHciA/iO6fqAsxTnvl7MmWvQ5azJxxn7i8PYRcSKnsh0dn9QIBs75klPEPTY2vpLW3Q/AVTw8eJnIu6wLFyQ==');
define('SECURE_AUTH_SALT', 'HR4274xcvqUbzz+hsfR1mHB2zObRTfV1fCTZEs6Yw8YF/e+JPXGw9Bzgbtp+hB1+0nSdHe5A+wxih/t2wWTlNg==');
define('LOGGED_IN_SALT',   'BnIBeP3S4gSGBJkaHoribgyWSSVJ5EdD0z5dSkmQgRNn9/7XjXPvT5o8n5NVbhFWmdKoBT3OWgo+UrXcHxHJpg==');
define('NONCE_SALT',       'FHqZD6ez26ZtQ2q7gWCR/QtYJZupok3jcryjgEJSZJDzQ1ocqvYpDCVAY8xhoXBgPQ7LAsM+wG5Y/cCbTN5z4A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
