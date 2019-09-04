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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'rgTIyd1PqHufhrrzmmLFJxGTPOkVCg2LMRMrwVj7qpx2rUPMNL143P2/V0lOVrMag/hgKLA4H48nGSCJ3AOpYQ==');
define('SECURE_AUTH_KEY',  'nQulWl8Ze+SGabn3NrFcsmzoO+mPO6Nz12sosWW3lA8n31DWAKY1m0FiXgFvG1byN+nYepdLI4qfrhAOgbmC+Q==');
define('LOGGED_IN_KEY',    '40U+VNV4tuXSKdwNAo7iXdeDhwEazvlpChGZZrsmmtUDo+hGXu2scfn1vM6UoGXQO/+0C276t+J/8A3CIatoxw==');
define('NONCE_KEY',        'lqUOkSAh37fr4tSmskx+5y+ZNEwcoy1skXAsyjDC0Jh1D9JW1TJIj90WUUpak0ZVtrYQTMeMHmoHI4gFdluryQ==');
define('AUTH_SALT',        'TrQWizpdZP1cgGL8slsYaP/xzEBJMocs0Bs2MJ++IGlUGvqEuGlZMHL/3cIGCfYxB7DojPgkrIFCwOaFjPUTOw==');
define('SECURE_AUTH_SALT', 'iDvCNymWaUFFVfp0MKzodZUJ4rrxI4ImUD/jUxNvzlu/r+K0p96WVtgny+gH4iMwRq+06JQAKfaNzecZlCddnA==');
define('LOGGED_IN_SALT',   'idGrNhsanfJtt7pMJDzqCCZrzxwWFhzVgiTiA4Nf6wcU+E9jpLg033231n3rSXe+7S4G5BOjxE+2GYeti/AeuQ==');
define('NONCE_SALT',       'BoUcVv9TnjVuU8UQ/RrfDrxigws1i+3GLFRpCCWF3BhoxEZiJsnGQVwGeZWj+/VE8Ko1ctcqnyB/F8CoxkztoA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
