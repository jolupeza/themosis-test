<?php

/*
|--------------------------------------------------------------------------
| Notes - README
|--------------------------------------------------------------------------
|
| You can add as many WordPress constants as you want here. Just make sure
| to add them at the end of the file or at least after the "WordPress
| authentication keys and salts" section.
|
*/

/*
|--------------------------------------------------------------------------
| WordPress authentication keys and salts
|--------------------------------------------------------------------------
|
| @link https://api.wordpress.org/secret-key/1.1/salt/
|
*/
define('AUTH_KEY',         '#b@]8i:L)|N~z&z9>/5upwka>[(`OI7y2>skY[!?RJq]@7e#G%Q:#jf:xHznQp9M');
define('SECURE_AUTH_KEY',  'b>%YoE4w%E#dNE+,Oj#8sJl 6;^mnSr;Z(0r=b/Z{&aj4Y5IF&WST,d7GAob3h7Q');
define('LOGGED_IN_KEY',    'zbP|,MJ|Hc)5<K+smja>VToGKzs~pO_S-Fx8@ia6/ZifLr_P0<}$1Mjf]<VctdnH');
define('NONCE_KEY',        'u;[S*r ;h:.zh7D(YQQI9_v+ne}gAhY=-mq;s$J$0Hw7T^-j7T/mmpaQ3h+t7V47');
define('AUTH_SALT',        'i/UyL5Y~i2iO$B]+HP)9x6W 4%PQ`t}U!)_nC].<Hb]bwYkSFP*p~(Vp6]1|sFG ');
define('SECURE_AUTH_SALT', '}t%COe~pH>;F?|;?N)Qw+a@b#i M*48Un6.x(SX|m/e-:8X{Q;pM7LQ}Fg0$MpVw');
define('LOGGED_IN_SALT',   'pcvk88rPBaQ$|`>m`1]Ce&+oQlFhvG nS>qfjHuyP*3]Zh8+i}Ds5$R+eWKYg2`Q');
define('NONCE_SALT',       'l-NzQaw{(&^mvhheG$A13=9y}*D!mw=^Gb>+i):S=l@*b9#P96tVBuU)1~Tg*LeE');

/*
|--------------------------------------------------------------------------
| WordPress database
|--------------------------------------------------------------------------
*/
define('DB_NAME', config('database.connections.mysql.database'));
define('DB_USER', config('database.connections.mysql.username'));
define('DB_PASSWORD', config('database.connections.mysql.password'));
define('DB_HOST', config('database.connections.mysql.host'));
define('DB_CHARSET', config('database.connections.mysql.charset'));
define('DB_COLLATE', config('database.connections.mysql.collation'));

/*
|--------------------------------------------------------------------------
| WordPress URLs
|--------------------------------------------------------------------------
*/
define('WP_HOME', config('app.url'));
define('WP_SITEURL', config('app.wp.url'));
define('WP_CONTENT_URL', WP_HOME.'/'.CONTENT_DIR);

/*
|--------------------------------------------------------------------------
| WordPress debug
|--------------------------------------------------------------------------
*/
define('SAVEQUERIES', config('app.debug'));
define('WP_DEBUG', config('app.debug'));
define('WP_DEBUG_DISPLAY', config('app.debug'));
define('SCRIPT_DEBUG', config('app.debug'));

/*
|--------------------------------------------------------------------------
| WordPress auto-update
|--------------------------------------------------------------------------
*/
define('WP_AUTO_UPDATE_CORE', false);

/*
|--------------------------------------------------------------------------
| WordPress file editor
|--------------------------------------------------------------------------
*/
define('DISALLOW_FILE_EDIT', true);

/*
|--------------------------------------------------------------------------
| WordPress default theme
|--------------------------------------------------------------------------
*/
define('WP_DEFAULT_THEME', 'themosis');

/*
|--------------------------------------------------------------------------
| Application Text Domain
|--------------------------------------------------------------------------
*/
define('APP_TD', env('APP_TD', 'themosis'));

/*
|--------------------------------------------------------------------------
| JetPack
|--------------------------------------------------------------------------
*/
define('JETPACK_DEV_DEBUG', config('app.debug'));
