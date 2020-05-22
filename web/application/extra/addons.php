<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'app_init' => 
    array (
      0 => 'cms',
      1 => 'epay',
    ),
    'view_filter' => 
    array (
      0 => 'cms',
    ),
    'user_sidenav_after' => 
    array (
      0 => 'cms',
    ),
    'xunsearch_config_init' => 
    array (
      0 => 'cms',
    ),
    'xunsearch_index_reset' => 
    array (
      0 => 'cms',
    ),
  ),
  'route' => 
  array (
    '/$' => 'cms/index/index',
    '/a/[:diyname]' => 'cms/archives/index',
    '/t/[:name]' => 'cms/tags/index',
    '/p/[:diyname]' => 'cms/page/index',
    '/s' => 'cms/search/index',
    '/c/[:diyname]' => 'cms/channel/index',
    '/d/[:diyname]' => 'cms/diyform/index',
    '/special/[:diyname]' => 'cms/special/index',
    '/u/[:id]' => 'cms/user/index',
  ),
);