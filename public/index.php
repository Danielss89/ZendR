<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}


// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();

// Making XDebug more chatty in Development Environment
if ('APPLICATION_ENV' == 'development')
{
    ini_set('xdebug.collect_vars', 'on');
    ini_set('xdebug.collect_params', '4');
    ini_set('xdebug.dump_globals', 'on');
    ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
    ini_set('xdebug.show_local_vars', 'on');
}