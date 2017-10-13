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
define('DB_NAME', 'markokaj_wordpress');

/** MySQL database username */
define('DB_USER', 'markokaj_wordp');

/** MySQL database password */
define('DB_PASSWORD', 'Qwerty157');

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
define('AUTH_KEY',         '>|KSG-./);]Dk8T& z `+:O)[sHsiF9P.$XH4#$ncNb:^ma?8cuM`|IyB.T;1Kl ');
define('SECURE_AUTH_KEY',  '=Zx=hPybL nN2*;_;i@)yZf?TJA_UqSJ-hW`)2pv(p.W;;Osv|1m7WZxKXEB%kVD');
define('LOGGED_IN_KEY',    'VIzx?(o_gr|WPr$S E ?{t Cv]y4M92=Fya7TB_BPuy`  94to0Nc8|BA;98hw?4');
define('NONCE_KEY',        'fKDg|706:Z,Yg:s|y4P;1Ee(HAYqG-8Uk#M.0,FIB;[=5D6~Y:_]dbcr[GcC]eb>');
define('AUTH_SALT',        'L=`!-K=UK#^%M:`HBtDlB=ke}W-d|66qb{K:n~_x] q T[B4,hy0L<hNGeVVr:PD');
define('SECURE_AUTH_SALT', 'p:VLJg%Mzu3|*jDpqc$I_0;42[f2,Iz?>4+`zX0xFD5jh|7:-rr#VA0U Ik!N_r[');
define('LOGGED_IN_SALT',   'x1Ed|YO-+4jP1.()KWCdh?E2/<48e|IlQ-aNta*Wph(P54V{mQISoQqbV Z5^-*e');
define('NONCE_SALT',       '^;T0h|)++ScB}=kt[Of+zDqW/3Xjx]MQ}zW+-hH|ol5}~O,:K$Uc|9G4%Y>%,qix');

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
define('WP_MEMORY_LIMIT', '256M');
