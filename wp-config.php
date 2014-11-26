<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'SEq_(~2IxZ:5Eu3ff^/]lVqC&6}xT@lek7Q3-LT]m?CNX|8Ot7gMdz5>e1-.v6kH');
define('SECURE_AUTH_KEY',  'p2XF1TBCGoV)8E]{SzLG0@5b&|}_ 6Dx[V&~`b:4x06o@m&Znrlc+(;Fq%&owGCZ');
define('LOGGED_IN_KEY',    'kHpa50JDBuWJ@ejk`+@qAG&P?V2)4,1{+U7_I`@/.G;[}B?2m~AcmPkWDwH1qk-`');
define('NONCE_KEY',        '~aFxp,zKl|85+bsP4^m7K*|q5^cBT#((LzniF%apo)LwG92CcUTA~U-?Rnk+zgHv');
define('AUTH_SALT',        '-C/ko6]N|JP+#S8&z`2V3aV%hnL&y7K?iJ$iW31]km_i80k*9HBSF>{E=y ~?IBG');
define('SECURE_AUTH_SALT', '7%GGr;~L.GFdpaFtu8(g|^g4AMO8K:%LUTfR~TWtbA%=;#e3T:Y*;&dchq#$v4Be');
define('LOGGED_IN_SALT',   'an=`RK<:*+.fx%)>6%XQ9R]x4j]eHJ-HzZ.s!p}_`!R>,gWNJgic+-}NN=yb8O;9');
define('NONCE_SALT',       '4W&s>7za.tu39#1&-Pv-AKhO0?,]ziK;+p8?pa{=Z!*p@13T=L%1kgD=bhJ*l95A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
