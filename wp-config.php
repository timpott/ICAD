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
define('DB_NAME', 'icad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'Au-eYuQ#gz4Co6],|2|Vw).qj:-NCZvuU<eki dbd1vx[sLeQDAu2SX}mtt0;+Mb');
define('SECURE_AUTH_KEY',  'I;3~ki]]sf;|.q;m1VwPfYqg--B-R-X(uJd)=oH1D42fpa<y^v{-bl~EhLn+{McL');
define('LOGGED_IN_KEY',    'Xo`|@eRVaIIi5#zvh|L>abg!EiKFk9.:ARE-F(~gjjO:|!P#{/C^dd/-7~-OJ<4j');
define('NONCE_KEY',        'MNx-.)6#&~x>AGuW!.#Oh-.pPJ1sRxB|E/*8Gu/.[BFq$722^RRRb~+1^@56n^fU');
define('AUTH_SALT',        '2Wr<d7I~+=Zhb<+3y/AS-yS#PK;U44Bw0HH.#7)CRY99P#z{N5*JRU/k^=mx(4om');
define('SECURE_AUTH_SALT', 'v$_og]h?VdgW!t@*jt_EpO*^{BHwra3hP&~XIw-;l;H{N=_|P_Ur,*2A-/Y+kSkK');
define('LOGGED_IN_SALT',   '~~q*1P0[aTkV;} X?XNUxfu*5}-.h5LB|[W]h73IbRe*J0Rv-f/H^p_);jftE&zQ');
define('NONCE_SALT',       'r~Naok>^i+@Fc!(l&-1s_n_D&guLc,x,-~_mz%7YW3$W=/?Z_yu-D;kNqMZfy1:k');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
