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
define('DB_NAME', 'project-name');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'f)i^eqZ6O{t`cfQyvacGZ`q.6@*n)V]viBH#]2h]e[FGo&O{_@2=JjW&lsXiF,Z+');
define('SECURE_AUTH_KEY',  ']u?rO+[E{+iU5G|rF/a@`~>ZFxDG^71=:<V[x[,A-<3icb)l|4M7%C0V*cBY6_0(');
define('LOGGED_IN_KEY',    'MUy( -nN]{E-Z;2dR|OIb1~B}az`c3b&73uq?WgeI+nIoSP2hb; $t,<2fa>}}?)');
define('NONCE_KEY',        '15z{DX6t.0W;nQO<FXCltL%Fda|ba.epYFr`C7>Ef,_P]Ig.*^n;+d_Uc5K-S)zU');
define('AUTH_SALT',        'y9OfIf3tU=F@06B%:hB_VIRCN(w-6P^BH3,ej{A*,PUi%SinU~SL%2BZz;cMTC-p');
define('SECURE_AUTH_SALT', 'X4.fW|,vj9 #P8#+72,:!I9}>Ph|Tn/<n>m@)3i^U1.INqOJne&a-?/oxSQ=j<L0');
define('LOGGED_IN_SALT',   'gv}`bY%.qRE%b0FyGWBSJ<WAvw0;C] jQ(0ranK]IP}3r -|48wN0:<xXn^Tw;[v');
define('NONCE_SALT',       'h^k,]U/3g5Q<sS`VzW2)Yfb3N]g$NK{Q?bpCt&ltJM}N$B[BgDWY)D!$C77j(.E;');

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
