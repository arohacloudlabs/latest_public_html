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
define('DB_NAME', 'website');

/** MySQL database username */
define('DB_USER', 'integra');

/** MySQL database password */
define('DB_PASSWORD', 'B5eEWKiVqHP0s');

/** MySQL hostname */
define('DB_HOST', 'albertapayments.cfixtkqw8bai.us-east-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '7A^>#1,F1&0rOMaD75z_H^l8:7._oM!cmO9>q22A:U.*3H#IE[C}g:cBrTkn.yI:');
define('SECURE_AUTH_KEY',  'oAW_E?w9Awh]<_wM0KU:{8u&&REb1GNJxzSQ~q{&mLbnWk;oA/~8eD5V?r{w+7$N');
define('LOGGED_IN_KEY',    'l!yX^bF}Fmx-om2sWvM%n.Tbrp-1mjaVfwwQ_^6V<v=$v1+0?&)u.tYPO]E6xN7+');
define('NONCE_KEY',        '{.aTV]@J B[~+hLX#K_&ck0f{iT0~+RGZiuz]A7l%^l[J:uo%@nLts4iAHKRf&vP');
define('AUTH_SALT',        '8t|$TL(oduJc-1*%_FYFi<2-*P`:EZR&SHY98uoy`VD@K6V&6?TQ}JWrDMckUr:B');
define('SECURE_AUTH_SALT', '_XL5}!+{t]v.T&#<Bj}G?G#|a Yh}UGGzxRsgIdzYC7l#N[0[Ss(LD!i<JbGG{C_');
define('LOGGED_IN_SALT',   'm#T1~FWt)Ma%B4;=-xZ3ps1Ta<},Mk0!@)R^~(KK&RPSqQY1$R+ZO.Zm#tRJ[pxA');
define('NONCE_SALT',       ':]s-].;lIG8Q)YMz;p&9|B$Q/wWou`-ar$nI}i$<,oofk,!moY?j/]1M~*`3O6/H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alberta_';

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
