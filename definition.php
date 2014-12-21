<?php

defined('DS')
|| define('DS', DIRECTORY_SEPARATOR);

defined('REQUEST_MICROTIME')
|| define('REQUEST_MICROTIME', microtime(true));

defined('WEB_ROOT')
|| define('WEB_ROOT', realpath(dirname(__FILE__)));

// defined('LIBRARY_PATH')
// || define('LIBRARY_PATH', WEB_ROOT . DS . 'library' . DS);

defined('PUBLIC_PATH')
|| define('PUBLIC_PATH', WEB_ROOT . DS . 'public' . DS);

defined('ZF2_LIBRARY')
|| define('ZF2_LIBRARY', realpath((getenv('ZF2_PATH')?getenv('ZF2_PATH'):'vendors\ZF2\library')));

defined('DT2_LIBRARY')
|| define('DT2_LIBRARY', realpath((getenv('DT2_PATH')?getenv('DT2_PATH'):'vendors\Doctrine2')));

defined('APP_ENV')
|| define('APP_ENV', getenv('APP_ENV'));

defined('FRONT_TEMPLATES_PATH')
|| define('FRONT_TEMPLATES_PATH', WEB_ROOT . DS . 'templates' . DS . 'frontend' . DS . 'default' . DS);

defined('BACKEND_TEMPLATES_PATH')
|| define('BACKEND_TEMPLATES_PATH', WEB_ROOT . DS . 'templates' . DS . 'bo' . DS . 'default' . DS);

defined('ASSETS_PATH')
|| define('ASSETS_PATH', WEB_ROOT . DS . 'assets' . DS);

defined('ASSETS_LINK')
|| define('ASSETS_LINK', 'http://assets.projectbase.local');

defined('DOCTRINE_PROXY_DIR') || define('DOCTRINE_PROXY_DIR', WEB_ROOT . '/data/Doctrine/Proxy');
