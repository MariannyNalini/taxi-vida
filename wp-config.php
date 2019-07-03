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
define('DB_NAME', 'db_taxivida');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '*o?r}Ml2(hCq&pT}(^6HLoaCo}hDUJ|NFP4a!X1;bJs)b74+i$p+?2$M@DLN+DOU');
define('SECURE_AUTH_KEY',  '*Vig/#$]>r&Hgm78!(|lh^Iy?X|`Hr)Y!EG>@5u~p2h&A+?W9Bw*A1fcmYFO2hUW');
define('LOGGED_IN_KEY',    'm1[k?)Y(yPWC-!kCT(? V8>(AUL_FhDaT)UDU;^jjpqq8H_2^4u[?9^51dQOSQL*');
define('NONCE_KEY',        '`Kgc2Ce10UhDxr}3WP$nAn)=qSJ)Tpc{u;b($3_q2`~Bp;~:f}J<0qUR>mM5s}lQ');
define('AUTH_SALT',        'aoLMso-ELhHixQ4XVu+qSvU>I+V9RJ7<eKg$Puexy?sn~$p&%[ufwo8Brsl6K4+!');
define('SECURE_AUTH_SALT', 'H8=>L)=}5myO >!I[,rpKR{7:%e>2w?TymtVhp5QMWfz:@FS,^|]: @?R5PG[PVq');
define('LOGGED_IN_SALT',   '/kac9U;^q>%]]vV~/WhaZKSgoV%<fHcOMM99t}]LUON2bh~Din!j4pV<a9&+e-=&');
define('NONCE_SALT',       '57fp`nY >{k3m<mhmEs<9*W|XX? 4)K,DS>1*0< XvZ*4PXj?eU6]#t9aV-sEm~B');

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
