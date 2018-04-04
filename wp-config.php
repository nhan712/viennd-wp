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
define('DB_NAME', 'heroku_92267de3ed0165b');

/** MySQL database username */
define('DB_USER', 'b6403fa75171f3');

/** MySQL database password */
define('DB_PASSWORD', '0b2245e4');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         'hM`G)g^gs.TV<s-ALY|Me$m@boRl>8:979dzW~OHOT7FM9y,5_hAeRqf1jZ dFQM');
define('SECURE_AUTH_KEY',  '}.`QH(XhT|H506K&M@Ak&9%g-cexQjs >NE}UBx~wK3*uZ_6D5>NU=0m|x{3f/GR');
define('LOGGED_IN_KEY',    'DK.BN=3H>;3aLFIkg03X{jLPr#*E+CYy .( R!(#5:6%@Jj=ZDga`sX,YXjygU<x');
define('NONCE_KEY',        'Fpw~9?}@&wia4c#&.Aa`G4,9jO<O-GB3pc vz8t669Vu_512YFf &~H8RwC*w,at');
define('AUTH_SALT',        '^fW--6IHq*6k0pM/<FaN<hb+S05o:DV<e4UVY4Dy`&]|[EH,Rkw.y :)#`DOJ#&D');
define('SECURE_AUTH_SALT', 'XA{CM4`9E(-m9^COIo .4`J{D/]?&=qVhD[sHof]&yB*oDJAy ;3PH5~}sp|vlF|');
define('LOGGED_IN_SALT',   'o4+2(Y/!LR8mV7E@M(ceKTjEK)KcIRs48)4V`48FmAESF(%IFo};N/)KB{?X6=vM');
define('NONCE_SALT',       '}*KHTiI=X~#1%tDb&0t$By/=TBgpcYQ[LP iQ]S:PWldsf/.b;Xkbz`NhWv!~mpN');

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
