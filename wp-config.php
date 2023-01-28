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
define('WP_CACHE', true);
// define('WPCACHEHOME', '/var/www/crossfit_FINAL/wp-content/plugins/wp-super-cache/');
define('DB_NAME', 'crossfit_FINAL');

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
define('AUTH_KEY',         'A~N~R7v}wKfv.Bx+#k$e-7y)sgMzAtWlX9&bLV{9q5nav5b5y.m0.4Ky }^6HRfB');
define('SECURE_AUTH_KEY',  ')xpfJ]_7$glaQ{HX: WjU5J9)l=1NbglfAbv*>DU]Ey#_?pW>;LOHQ2H`ZcyY%cD');
define('LOGGED_IN_KEY',    'KNYa;B#>Ar!42vid,=1`mG+t?vZvt<3V[B.M1W@opC7}%~l{D]OTT`,3+cBF;Ft-');
define('NONCE_KEY',        'e)6qJzBn`<89aAt hPzV}QxP;}tUzse`aW[kqn2)yBd_I:uMRzaS.^]|2|?x<^8M');
define('AUTH_SALT',        'O6@rC(xkO(|{Y7?pXOZ(To ($%@}5xm=|JPo~* i+ 5?$1#J$axS,ZNLb/9N>.:T');
define('SECURE_AUTH_SALT', ' oBMBzEl/5Si+.5@$wXMwP?)pjYK7j`p_dkE4CX]nW?Vp1O)oEGsaJN@X|hcT hC');
define('LOGGED_IN_SALT',   'Rkt)&hnp}TX[=#is_CwV:K C2%LB}^N^ 39^;4>W#XxX&1dLC<@YoQ>.a+:oVDUo');
define('NONCE_SALT',       '>^0C8I1(N}R&t#F{t_gxMyu#<NUE#cO(^DG$Va>eZ^3-=hjy?F*Pyn=`U8HP[d8S');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
