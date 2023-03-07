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
  'instanceid' => 'ocpvz5852r61',
  'passwordsalt' => "$PASSWORDSALT",
  'secret' => "$SECRET",
  'trusted_domains' => 
  array (
    0 => '192.168.0.29',
    1 => '192.168.0.21',
    2 => 'localhost',
    3 => "$DNS"
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '25.0.4.1',
  'overwrite.cli.url' => "http://localhost:$PORT",
  'installed' => true,
  'forcessl' => true,
  'overwriteprotocol' => 'https',
);