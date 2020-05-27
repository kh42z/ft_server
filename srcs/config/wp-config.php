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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'ft_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ft_wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '_bDP9Q{#E0gnTrB5FVk;Ysz1]7cLw[[|`pU4e|+tuRqbG#+qc_]wC_7#D.^OlI%9');
define('SECURE_AUTH_KEY',  'f=yE,-l)AS8!~z{7t{[pS 9O{@5sIZg|ex)r,kf2>Sl=_uJB-k@+~ORBp#,`{&v!');
define('LOGGED_IN_KEY',    'F|`/EcFYtu4aUwz*4R+,nZm(;$3jLB.ag[Rj:V!nhJAVC)9L`Yqr}puCp10p&n[!');
define('NONCE_KEY',        'MZ NJLFFllXvp,]Krr#+y!Yy3Yi(D_DU*+E$vA`{>^-BRfdMm9|( 9:}1B$qu(a ');
define('AUTH_SALT',        '^|!GiehZEr]lI]bh9G:YCwn+{UEB27l59wkxJX1ZeR9-#Y.Y{M ^IiWb~$IRB(Y|');
define('SECURE_AUTH_SALT', '*;s*}2C]Hqqf1B!v0sBez.-h|@~0[WJ[t-gTsvhbiw6tM~<Cj2z]&+4v4S}yra6V');
define('LOGGED_IN_SALT',   'gm5VYy5/BLu!znK$6,l||k7kgE];W.|/6?f~ECgUkp<`PRX-NMu.#-J+IEa>q~Y~');
define('NONCE_SALT',       '5@@-Lf>KTR2D+8y%eyC!$]|Q&&N~Y*Uq}o*m@f?CO1+5|;ZVL|hIW*8k}#6:U@dQ');

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
