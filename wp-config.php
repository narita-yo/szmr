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
define( 'DB_NAME', 'huxofyww_wp4' );

/** MySQL database username */
define( 'DB_USER', 'huxofyww_wp4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'T.WAi0tAMB0txZ7Jvka27' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'xGWhXOIrsqCIjd9lK3inHfXYRxm11fnCtEv47Z1IHpwK7mBpNmSs3qBRdfoH7geB');
define('SECURE_AUTH_KEY',  'FMiU7s8dgBDOYimb1cC42vt44iauVMCjASjgE1XUwOmWUEPlY051SeBLBzK7PhP4');
define('LOGGED_IN_KEY',    'ti44NUcEszaEeRt6XEaXLq3ipt4Hf3pX1UOXWuXRq5veM7IoPal1XQzFqtPLXt2j');
define('NONCE_KEY',        '3aAr4O1Hq4QB0LG6spSHHazIkzgYd6mzU99ovlvtZTpcPinx0pnUPhtUIRW3tg3P');
define('AUTH_SALT',        'LctDpHsjvX5RH6klK6NwOCwgeSFWnkn35BhiUqzdW1MQqxVfNLtmMqvWstncryrz');
define('SECURE_AUTH_SALT', 'Qbd4Pajx5Sq3PLz3bn7TbhrCdtGG55qU13FCJL9dYAXJlhFosKLtEoqmc5UNFqGz');
define('LOGGED_IN_SALT',   'PmxQneWy7ERYxjBVpdMGJ6OmrHfCWQZ3xYg3C3jk3OgqFVxMsrCe5uFvGfRya5nN');
define('NONCE_SALT',       'gnEV7vulTEEyZDX85bjdmGfD8wZOPwxJtRLRsJv12uAtFcx6ofiaX7r8IS3iiMea');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
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
