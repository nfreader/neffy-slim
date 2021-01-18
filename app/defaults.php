<?php

//Production safe defaults
//DO NOT EDIT THIS FILE!

$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

$settings['app'] = [
  'name' => 'Application Name',
  'timezone' => 'UTC',
  'version' => VERSION
];

$settings['twig'] = [
  'paths' => [
    __DIR__ . '/../views',
  ],
  'options' => [
    'debug' => false,
    'cache_enabled' => true,
    'cache_path' => $settings['temp'] . '/twig',
  ],
];

// Error handler
$settings['error'] = [
  'display_error_details' => false,
  'log_errors' => true,
  'log_error_details' => true,
];

$settings['session'] = [
  'name' => 'app',
  'cache_expire' => 0,
];

return $settings;
