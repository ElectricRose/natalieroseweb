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
define('DB_NAME', 'natalierose.net');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'GL{cYnXMKJ`w7HJVz=67qRp-^(yUx4)&!s~})2yG%#~Icmup!U31m&f.we^0af<d');
define('SECURE_AUTH_KEY',  'hItys+&8S ptY,d~GT!VY%g2EV?oBD9ZLV`(~v/5x:v};b/mnB0vG?yZ.XBP<-5{');
define('LOGGED_IN_KEY',    'a7+a!S9M%M&LWH@wBv;ip~V4XTKve>_)<Y[: 80*v/EQ{j{}vwAo9A^TADB%u&KG');
define('NONCE_KEY',        '&K@QetrJMf,!8K$xYViBz5g4;0a|Cr^>]s6-<^O:|.PJ[u[gHF#.7`6i#uv3Rk$&');
define('AUTH_SALT',        '}N9+coscn,Z6$>7{`j8=(d)^@G57-[J3,Gb:~)%WhSG%j4Vq|%w7Y|3m}GS:0iFY');
define('SECURE_AUTH_SALT', 'GceU./@U~.&:g6^#YU/:^(|J_bWuQWm.,zJX-LUqNz/sGHyF+W 7pCyq5c|`.YYM');
define('LOGGED_IN_SALT',   '*3`YNU*0_W>1Oe}5h0f-} `9V<%/.Ri:xc!ca@Bx2F{&!y51L,y_=4w&&&N`^| =');
define('NONCE_SALT',       '0R+=f[B<y/`c0g^sSj>LErGH~PJZT]rDRFE=ABwXZ<(Ur1MtF`Hi@_gEM1I1^SBg');

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
