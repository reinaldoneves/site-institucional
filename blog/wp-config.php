<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'reinald_gtron');

/** MySQL database username */
define('DB_USER', 'reinald_gtron');

/** MySQL database password */
define('DB_PASSWORD', '2S1@7pGQ-3');

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
define('AUTH_KEY',         'wvxgr2sjfhbqhkqya9tosubbezrxlisjmajecnldpqepw53rsnof0qne2ciiat63');
define('SECURE_AUTH_KEY',  'yscjqqoljh06x2jqc5ivekftr02go7gsxbb1oa5jwkca51roqaoztybyemg6fjbs');
define('LOGGED_IN_KEY',    'ybbhtghnjoapnn5rk0b43wq2dupexcna3hosbuo6v0dspxygjfdcvxcuvndqptgh');
define('NONCE_KEY',        'rb33nsvuhmajl4a2bje9x7s1ywevpumhfx9chugpmxrdsbrmsbvsbpcwgedokui2');
define('AUTH_SALT',        'ervjkwijzdiahws5kmcsmo40uct3gkv6qvw1jrtyopdo9q8ocgaw83eu8jknixfq');
define('SECURE_AUTH_SALT', 'n4tfpmdtbnzp2vqfkya5yg7iu1etrbjcdbhfxccqnhu3bcaojnrwdupvybo5xjfk');
define('LOGGED_IN_SALT',   'vizk14lfiurwygnwseigt6ytbw0t2k6dncewo20itrenj97rna7bzptmasusq3dz');
define('NONCE_SALT',       '57ukiadbgx5cmkyt2zyfpivbkuaf3gy6swcsy4uqfckk5lewgbyjhunanhdysclw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gtron_';

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
