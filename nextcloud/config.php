<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'filelocking.enabled' => true,
  'memcache.locking' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocz71v1kq7cm',
  'passwordsalt' => 'FUGUKnRBNXtmWUyeRwXfzz9XmSB51K',
  'secret' => 'cp+y58qksaPXrXXf0htOBFum0VzWWnFUwX08xsFTaANGIXyb',
  'trusted_domains' => 
  array (
    0 => 'ooffice.local',
    1 => 'ooffice.ddns.net',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.2.1',
  'overwrite.cli.url' => 'http://ooffice.local/nextcloud',
  'overwritewebroot' => '/nextcloud',
  'overwriteprotocol' => 'https',
  'forwarded_for_headers' => 
  array (
    0 => 'HTTP_X_FORWARDED_FOR',
  ),
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'installed' => true,
  'default_phone_region' => 'CH',
  'onlyoffice' => 
  array (
    'jwt_secret' => 'yourSecret',
    'jwt_header' => 'AuthorizationJwt',
  ),
  'app_install_overwrite' => 
  array (
    0 => 'occweb',
  ),
  'loglevel' => 2,
  'maintenance' => false,
);
