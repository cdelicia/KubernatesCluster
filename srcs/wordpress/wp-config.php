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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Np# 4X=yWc6xtAaRv+lOEP$`W%1w1QE-Q}Ny*$H=XKN[{p;;SI74-&:Z]Va%)VO^');
define('SECURE_AUTH_KEY',  't_G `zCroYAY+S9zTm|Mp-u,wV,&`mD|=~W7}(<J1~a^wftpsv-o@_Qd ocy`zod');
define('LOGGED_IN_KEY',    'z)lm-4`YPx/apy|`tX2>+>a|L@nunVr}V[N-x+Do>s>_mRSfAG,9V-d|YGgna9&1');
define('NONCE_KEY',        '(Hq`0Avn>]5 m@9X7UiVytRN6ZaaTC%*1oLj:;*|9pnSw<3f[A.,,h^z3G9{KIRg');
define('AUTH_SALT',        'h<4YA~;:z|k(`G|gC=c/S+<q1L$q?T8R%OsU<Cl[-<jW&eq6,+#)DSOGmf,;88-c');
define('SECURE_AUTH_SALT', 'F8F|5/PgMe^@N+1i0y}X!Dl}ZM~RS;6qpH& f[j-ecftm-AU>+vX0r>Nee%L|h8]');
define('LOGGED_IN_SALT',   '%$ nm<YxJqa~&[<faay:dK_RPo+dc!5/z?9x(d]0N-]WoXbSR~#lRD^CQU 3cjK=');
define('NONCE_SALT',       '%-+kl( _|MlLxUFR-<}](hi5)*#b!vxlEJ0Lm&@O@e.uu@vhf9/2m29-vWN1y}h6');
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';