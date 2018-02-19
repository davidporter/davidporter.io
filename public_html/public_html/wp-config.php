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
define('DB_NAME', 'daviwzex_wp174');

/** MySQL database username */
define('DB_USER', 'daviwzex_wp174');

/** MySQL database password */
define('DB_PASSWORD', '774up@.auS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vochaqqqfsdf0p7zcmseb1ddj53kzqlu7gcj2b2y8xfmwk7h0cfdjut9hsqetaqh');
define('SECURE_AUTH_KEY',  'p9zrfl5ydjpidakp9ouvflwcyc8qo61sv2qu2uiqq0h2pviwmnpqpcn87qaolbfc');
define('LOGGED_IN_KEY',    '9fsmewcognqjzjtnc15knsayeovqcn5sqidi5mg2hvgvvpncgmubutejbraxgbkj');
define('NONCE_KEY',        'jko4ad1l3cppzzoesc5qyzahgszvhprsv2ftpflmcfd6cwtcuzjxu5dc52co2rqg');
define('AUTH_SALT',        'haji0nf8engcja8jjw37vuxpdy5jcxkiu579ursiuz2oiy6klrp6whol2etky4gl');
define('SECURE_AUTH_SALT', 'losmy8nuyf4kjo2yiqkiaa6zknqosknlgnrkljdf4fse2aqadxsva9zrrwcxb3zy');
define('LOGGED_IN_SALT',   'gnkyl70cq7abqtjlzdpqadqnvjckott6723w3idc1exhpii8bv34pipfzyqzsryz');
define('NONCE_SALT',       'xspa9lftbecdw2llrk4ddihdnwxu2fzykipgh2lwc3hdbnaaox8gn8d8y0lp2vgy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbe_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'davidporter.io');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
