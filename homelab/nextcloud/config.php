<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
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
  'instanceid' => 'ocmbtppbve7e',
  'passwordsalt' => 'UoEJde5wLBQQssMXCvc0SHuklHRLwc',
  'secret' => '6v8ZaeA/DZmENqTPztRMdALFF3x8EB8k+L4k6UWZAlJ9EzEP',
  'trusted_domains' => 
  array (
    0 => 'ooffice.local',
    1 => 'ooffice.ddns.net',
  ),
  'overwrite.cli.url' => 'http://ooffice.local/nextcloud',
  'overwritewebroot' => '/nextcloud',
  'overwriteprotocol' => 'https',
  'forwarded_for_headers' =>
  array (
    0 => 'HTTP_X_FORWARDED_FOR',
  ),
  'allow_local_remote_servers' => true,
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '25.0.1.1',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud',
  'installed' => true,
);
