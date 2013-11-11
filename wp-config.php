<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress_e');

/** MySQL database username */
// define('DB_USER', 'wordpress_f');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'd1Q8E9Ksg#');
define('DB_PASSWORD', '111111');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JDJPu!uzxWDJwYZcK$Dk7lCY^Fza#n*J4rZpoGOTssS!$*wR#*y5jbX6uV71MW7)');
define('SECURE_AUTH_KEY',  'ZDYqJPY9z)9pTu$QrJw98V^cUeW#Ke9f0e#qDWJWO*OkPz5VN^L24aAtmPkhnG4l');
define('LOGGED_IN_KEY',    'HF16WKo*Q^eIL3oLERDBar*4ne7p)kN01UpTRmc9e#mOBBkS%maD4if2Llj9A9o&');
define('NONCE_KEY',        'TsljrypgdT2lA#r8K*)30wwsy4o(9AAq5Wumh(hRX3am9foU@7nN3TFj^iW)wnHq');
define('AUTH_SALT',        'LOF^csqeGHReOipNjUlAKWklwEyn2SCU6V9kyR6*3*lBFjtIjuvNcPyiQ#2kWtwT');
define('SECURE_AUTH_SALT', '794F^4giCRH%h&cy)n04CR4ERo3$1dwKrKyuWg#@v0BQ@xj9NzIVPyQkPgEGOFh0');
define('LOGGED_IN_SALT',   'xV)ph$JYLaU^Il*xj4XdsKEW@4FI)#m*w^JAX^uQxdZLS)#8Z4HEvBEuYi*OHPcr');
define('NONCE_SALT',       '4X)hSAXFPDhze690xoOI8Q^K@JoaCAgWQkb&A7P@!$!0T*^7KcK9s^9bv08V2jLQ');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
