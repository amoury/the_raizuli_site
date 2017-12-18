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
define('DB_NAME', 'the_raizuli_db');

/** MySQL database username */
define('DB_USER', 'the_raizuli_boss');

/** MySQL database password */
define('DB_PASSWORD', 'Theraizuli123!');

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
 define('AUTH_KEY',         'A$W(H)FGk-8/){F&S-77|:>i4q*EG+-4pTJrTiVgV$ss6@G!lg;H a51c]4u7SC2');
 define('SECURE_AUTH_KEY',  '{#hRTx%Z1NksmB^K(@~+W=t^<HC!rc>eG j@&SGZ[oZHG,f8|4]u}0|U!6(|qWTc');
 define('LOGGED_IN_KEY',    '^3E*6(>|N5+W!@eT6ny/+pC(U)EydSl1Q(|nxZ4r/S4ATz.4Li<,-7dhrQmLt l+');
 define('NONCE_KEY',        '$-MU~sbvFvBLMAq,XmR$}UJ,|qMFs`!]ujRV>D|OZ?^_3ZJoCja/P>4>Mo.](R{/');
 define('AUTH_SALT',        'pG(5A{4>jXWDlVNI58x2aERC|-p}hjMUuOUwz6}GS9IaV,@J5 /TujJv|HB3BzZ=');
 define('SECURE_AUTH_SALT', '6ZuLIL%hMKOOUo)6J $QK%w_Y=85ls!H!BJ/8SOv#q=KUGoa|GwZQ/y?joR,hJ|p');
 define('LOGGED_IN_SALT',   '6{2kd5/X:b|er?)6tE**L+dG/s]5:lC#-+q,7i#HVk(J?r{(&*X=e2oPg#+-1k]>');
 define('NONCE_SALT',       '`%sYf+]Y&L-g2]!ED,u%U9--f4%7qqoEnoW5kQ6Gc:bWt_oezZ K7zr#/eT!d)jJ');
	
	

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
