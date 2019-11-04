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
define( 'DB_NAME', 'francesbeauty' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tmatt2015' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define('WP_HOME','https://francesbeauty.com.au');
define('WP_SITEURL','https://francesbeauty.com.au');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|Pid?8l@,b:of=CI6_Ri+MD5>)6ANKeVeV+s]O;^LHh-Aq^V5}UD+[IT=mynC46G');
define('SECURE_AUTH_KEY',  'T-![|803zjMJX6{/p{X Y$BmUS8fL|q2Y&o -2q}$*e$n5]2Dk3ac?i0-Yn,1K::');
define('LOGGED_IN_KEY',    'r%*A0j#7czr^q3Ad9f^_xf<x0e%=VPa8i%oR~B RUGG,5T+ dX-iFfGkbZ[_.@Gx');
define('NONCE_KEY',        '5[sPc$L{|AIPI[%US!a`eu<v;?4I,q?bI[^P4eSU4Ab[4;o7lUQkkv#ELY)|vWZ+');
define('AUTH_SALT',        'Fc`}!_)!f-YidFrA_]n)|elP*IHq1.W:gN5Mu+!%`I_-&+g|m|srHO*7F Rd|<J2');
define('SECURE_AUTH_SALT', 'FV1,F7|2y{xfVfAqii9shQfrg,4,E@Q@P~SpH.+/ i+{7wKzmF (%QE+_;i+isp^');
define('LOGGED_IN_SALT',   'Qy[|rFJ?;$D=qW%+pL&5|vM2#al|T-?WD)P&Z*vr21xS5$||K`MK)wsA$7qPXb,J');
define('NONCE_SALT',       '9ieG(i_Bmh6,v0CS?aOQy=T^@IneAVaQUr>K&&5#}&LcHyRC,It`QlC~K|!F 84n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fb_';

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
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
