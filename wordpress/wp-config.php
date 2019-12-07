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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'ALLOW_UNFILTERED_UPLOADS', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2/;sN1DF*qc$Jt@N+*TBvGwj.v5Spv<@2~p Q.f~ujZ.#L@%[#WE7Wgw6 dMyI8l' );
define( 'SECURE_AUTH_KEY',  '90n%i_:(}tRg,}Mx4efdtPb$SbIYqn!GN<usN:DbC)o}xKd;%74|I1q8RO=M@TrD' );
define( 'LOGGED_IN_KEY',    'l%z!~q!e ^l,p-YtQVSWwLJc$4S_bm{|fIEu&|AFMcK)Yi+JN<:hY.^2q*+N0M8)' );
define( 'NONCE_KEY',        'Zp)1+wTTI gBa)y}z`^p:`q`}Vaq6>/%y< Ss}RbfaNZ0nH5<>,acr%9=]%^ MI~' );
define( 'AUTH_SALT',        '&J7i0rjG3w@:PKWlRrEg|>n|q.}wKXhZN1Nhskhp)DkQ9(nP9f272.n<aLkO]_;.' );
define( 'SECURE_AUTH_SALT', 'vWfS&-mGd;/`p%QBZ,=bx[Cd]4yPCF{]k8,(Ur|kO[79@z1xDsR3#]~NMw<+rkaW' );
define( 'LOGGED_IN_SALT',   '?;&zfq]$FrV[{3eu/Q;YJ23fjNrsVfGfy@Hv!wP:GCx~-h4^g.dWHa:PR3RPbsjL' );
define( 'NONCE_SALT',       'q.GKeG<h)`h(OAxgnpkYt5( };~Gf;:gK(v@[8ie!(!=y.FvPtH]fZz#sZC{fazo' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
