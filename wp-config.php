<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

 // Added by WP Rocket


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
define( 'DB_NAME', 'SaludWomDB2023' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'tHZjulYceJHVytwe1rEV' );

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
define( 'AUTH_KEY',         'hhcmmnwvkhihz655llyn4gdqk2nbezvyvti3fb1tzptlmdfrmdeedhdtkb1ogkm0' );
define( 'SECURE_AUTH_KEY',  'hgcmiddcppp31v2qqhnr4ogrppwqbj8uunfqaikcyowjbmdfvgkkeeqfblpbjq8n' );
define( 'LOGGED_IN_KEY',    'wmk5snjyhlxkunnhlb9evq15wgkqshnplsksq8si1zfpcon1nwoddmsgf4jc3ak2' );
define( 'NONCE_KEY',        'bww92jftcs1lmmqzyib92cmjcfzev1o7pg4htldwzbfla659ux7kc1fzd8amngim' );
define( 'AUTH_SALT',        'rcabxsnyqrjduwqy8wgfw8ivenisvp4ayzje5xmfo1arn4czkvyzauwcr9kaasz0' );
define( 'SECURE_AUTH_SALT', 'hsw2dr2molqsozb0us7ejqazutmg00pvrh8grivcmrghjqbnfz9shrctsy9oq7m8' );
define( 'LOGGED_IN_SALT',   'qudxtucwhe8nrnrh8azdfqgyfeztsj4njyfjvcnvjocooublcej4pyqxu1abpjdw' );
define( 'NONCE_SALT',       'i4whohvwg0zznpnf8kc4wycnhku4ursr57w4rtl24rw6q99xev6thujnrgvma75h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwh_';

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
