<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->registerNamespaces(array(
        // ...
        'Propel' => __DIR__.'/../vendor/bundles',
    ));
$loader->registerPrefixes(array(
        // ...
        'Phing'  => __DIR__.'/../vendor/phing/classes/phing',
    ));
// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';
}

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
