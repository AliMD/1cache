<?php

require_once('cache.class.php');

$cache = new MicroCache();

if(@$_GET['act'] == 'page_without_caching')
  $cache->cache_on = false; // disable cache

$cache->lifetime = 5; // set the cache lifetime to 60 seconds
$cache->memcache_compressed=true;

if($cache->check()) die($cache->out());
else $cache->start();

// your code here

echo ('testing ...');

$cache->end();
?>