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
define('DB_NAME', '17760088_0000031');

/** MySQL database username */
define('DB_USER', '17760088_0000031');

/** MySQL database password */
define('DB_PASSWORD', 'e8CNOL0ZF3zsz5BdKXHOCqviUPStUmCp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'XCPy%yx)@%oIRsuu&!aOsBKALvoA6qtE5j3KfYhTi)*AZdFZrphB%CPeHvdghBmG');
define('SECURE_AUTH_KEY',  '5uhc6qgBCi6Q9178ImUa(nBQzsfUxddsbiC8QVEweuqU49Yqp#Jb4M#lDgQnp)n)');
define('LOGGED_IN_KEY',    '3ZVlmWYK%eLv4w4JGR#w29KpxiSIGgqq0FkzcsRRTYo*x8Pnj&wqaaPy6%*m5p5l');
define('NONCE_KEY',        'S(PJbCSZ8GnX6gHqGPL(dJonrDX9#xGvnd1p7DGr7r(uJrVXe&rq)xWfZ0XXrIgL');
define('AUTH_SALT',        'IqkrktbA^DxlXUbPo&lh&yreZNrrX!garUd99Hg7Gwv5%48aWaYj2WHacD!L%Z*O');
define('SECURE_AUTH_SALT', '3hSw8CTVq)VLO1oN86oLjDP8579Qroz2B&elkTu8DM#vjtuYw^DYkourq4nIOB%7');
define('LOGGED_IN_SALT',   'muKoAdVr1H*wvfuPwp4blBAvHMhkL8rT&De!yZQSaysNHEXxw7IKjHvCkS8ZpxM(');
define('NONCE_SALT',       '*Lq%JMp@Lvx1bzIaQ!aVNd3iV8Z7104@(OF54J6kWg8ELhVg*Oa9W5DeMwUk0^hw');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>