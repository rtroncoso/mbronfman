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
define('DB_NAME', 'wp_mbronfman');

/** MySQL database username */
define('DB_USER', 'wp-mbronfman');

/** MySQL database password */
define('DB_PASSWORD', 'rpELJWQru3jXnL7f');

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
define('AUTH_KEY',         '7V_b96gxw4mL,Q|u:.#5!|v4Hg((AKzZm,FPN$8k,u.n:ak-^YbH#zihaaA4 CAn');
define('SECURE_AUTH_KEY',  'coZX4HE[f>F*d(tPvuS^4-(aZ8}c}j/`5mxGSN5]:N_VqBrU:9nljwGo%`uR]x+n');
define('LOGGED_IN_KEY',    'gf{#NNWo&#f5cKz_IRm.uaj0&hS~^-h7,wp1D!{SN|w5YTEaBEMJ$|W+HB/,~V?d');
define('NONCE_KEY',        'd8m$%D(@w!e[q5Il*tmpt:o+rEI,]Hc++)+-]ps|V8wVG|`pAEF1z<Fu#KbOT*5#');
define('AUTH_SALT',        '+JWaw;`SBrn`scDA@Qiv*{A1}%MY*BX2}Mc6.oH+sL00#zGv/Cifo_FqBP-W+ii.');
define('SECURE_AUTH_SALT', 'Bhb*f$`>MhY|jpuKUG5^nt9<iMGlY=k+>-FpYv`8g|6-1MxBf+0-bru_pPu[kqap');
define('LOGGED_IN_SALT',   'gd`8SOQIP1#hKw]5%nRt=a%nRFM,4)X7mr4|n<Aw.}k6ap}L.-+VaSsmn&i.C_j#');
define('NONCE_SALT',       'nC6o0K#O~Bf@)doc<-:j62RgJhl{`#?WVfv?{u&Wx5s&Aan&~{>2CgM*{}Gr_s:H');

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

