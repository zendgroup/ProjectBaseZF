<?php

$env = getenv('APP_ENV') ? : 'production';
$baseDir = dirname(dirname(__FILE__));
$cacheDir = $baseDir . '/data/cache';
$isPhpCli = PHP_SAPI === 'cli' ? true : false;
$productionModule = array(
    'ZgBase',
    'Application',
    'DoctrineModule',
    'DoctrineORMModule',
    'Workflow'
);
$developmentModule = array();
if ($env === 'development' && $isPhpCli === false && count($developmentModule)) {
    $appModule = array_merge($productionModule,$developmentModule);
} else {
    $appModule = $productionModule;
}

$moduleListener = array(
    'module_paths' => array(
        './vendor',
        './module'
    ),
    'config_glob_paths' => array(
        'config/autoload/{,*.}{global,local}.php'
    ),
    // Whether or not to enable a configuration cache.
    // If enabled, the merged configuration will be cached and used in
    // subsequent requests.
    // 'config_cache_enabled' => true,
    // The key used to create the configuration cache file name.
    // 'config_cache_key' => 'zg-cache',
    // Whether or not to enable a module class map cache.
    // If enabled, creates a module class map cache which will be used
    // by in future requests, to reduce the autoloading process.
    // 'module_map_cache_enabled' => true,
    // The key used to create the class map cache file name.
    // 'module_map_cache_key' => 'zg-mapper-cache',
    // The path in which to cache merged configuration.
    // 'cache_dir' => $cacheDir,
    // Whether or not to enable modules dependency checking.
    // Enabled by default, prevents usage of modules that depend on other modules
    // that weren't loaded.
    // 'check_dependencies' => true,
);
// $serviceManager = array();
// $appServiceOptions = array(
//     'service_manager' => $stringServiceManagerName,
//     'config_key'      => $stringConfigKey,
//     'interface'       => $stringOptionalInterface,
//     'method'          => $stringRequiredMethodName,
// );

return array(
    'modules' => $appModule,
    'module_listener_options' => $moduleListener,
//     'service_listener_options' => array($appServiceOptions),
//     'service_manager' => $serviceManager,
);

