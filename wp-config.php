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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'EMPTY_TRASH_DAYS', 0 );
define( 'WP_POST_REVISIONS', false );
define( 'WP_PROXY_HOST', '127.0.0.1' );
define( 'WP_PROXY_PORT', '1087' );


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'KbdScoZXPQ9lEb0gTvFxYTUja0e5kW55YPhxY42a94SD8q16HSW9ZbDcfFKb/tYjCghdAyUhmSSpokYtwY5COg==' );
define( 'SECURE_AUTH_KEY', 'RBEZ4D7WgKCNMcHJxrFUUeROhSX3pT4P1TzWx/OKxwGZBE9Q8ZZ/5v6Lq66OnR7BtRpneFzVSyY7pusxf6P2CA==' );
define( 'LOGGED_IN_KEY', 'HkYMxf/64pbGtDPQ2UOpp4McWIvoE+2qk4tmHCucGx2IYg2v9qenDztwbIHJchzSlOGVK/dG4XcxrJ6mKJZsTw==' );
define( 'NONCE_KEY', 'n97P7TQ5fWeJ3xRiYpzqJ7nsWuZF/Pc8yoVRIVpsIKPF9fFVKlqTHBpUw6pald/54yzONoUdGRUoN1CDSmQIZg==' );
define( 'AUTH_SALT', 'dpbj41Z9vRT+ZrymTnR+CFacXnItFPSswpZESsxn87PaznkdbMlOZB+oixIL5n82VVbG0W8drd6Eh92QRqUl4g==' );
define( 'SECURE_AUTH_SALT', '6Vcu6XricMVxHr1h/OPiydyPavBoJqoUuOWOv5gOER+Lx4GTwdlhmjkLFyzgqm4yqoPIWXyq/NST4wBj9jB5ug==' );
define( 'LOGGED_IN_SALT', 'Osid3TNE4JKYXL43RGKn3R5UK+Dw6LvaGYBqFQWVoT67o6/Y2olRqyZRH1bIaxyf3vnGLvTqlLenqL5OLC/uTQ==' );
define( 'NONCE_SALT', 'X4TLp7Tb7XoqHf7uLXapQn3HpceA+8eeiVlJSB4dNPwgmeEQ3jgW9ntYtR1Caq4FLEiE0wVizzCofV5aKY2j0Q==' );

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
