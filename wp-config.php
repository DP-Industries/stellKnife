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
define('DB_NAME', 'steelknife');

/** MySQL database username */
define('DB_USER', 'srv50402_user');

/** MySQL database password */
define('DB_PASSWORD', '22356db');

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
define('AUTH_KEY',         '&X.~ncC5Q:1Mlp|)rpL^{J3538vNadMDLd{YdG:5/EHgC,>I!gQD.FHo;NemH%7@');
define('SECURE_AUTH_KEY',  '&m1^C%xB_%gGQfX}6>_$j~RK;-q7isJ_FtQuni8on?Uww`(j?Z#Dn9 Uub8qU`j(');
define('LOGGED_IN_KEY',    'C8cpI!M%L;}{8h^&OF)e`xipUeha0w8][)}Axcs %N{l%jTFqAivEm?aR Z{sC{L');
define('NONCE_KEY',        'Hd|<.I5ykilstHgLDc<X0z9/#24#);Ke Qba0`R?%Sotj+?S==l!I0&naokpRV+u');
define('AUTH_SALT',        'i@c`mq@WVXo$Y$qZEpr;&oc44:XEG?sH$bZX7vQ>;p6xN9pG>/>B1eeX4p2$jI`;');
define('SECURE_AUTH_SALT', 'Lda,9ydde:+jjb!C~AGSa+!,nDyej6&dOVHlBITf>bgpcOh&%vZu5-z0<5j:X{#v');
define('LOGGED_IN_SALT',   '?@z[+Ux5Vt2xmOut(-;4sbSwyG58aotgH=o!`}K7F+AKt_27{6Y4!(8QAU0{s32P');
define('NONCE_SALT',       'C4jK+xK-]*p7NXONd:f5>k9w*fzXLHFz0>5OdsSuRrvis2%e2xq#AS.? SLXQ)$i');

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
