<?php /** @var $app Silex\Application */

use Symfony\Component\Asset\PathPackage;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;

$app['template'] = function($app) {
    $foil = Foil\Foil::boot([
        'folders' => [$app['config.views']]
    ]);

    $engine = $foil->engine();

    $engine->useData([
        'asset' => $app['asset'],
        'url' => $app['url_helper'],
    ]);

    return $engine;
};

$app['url_helper'] = function($app) {
    return new \App\UrlGenerator($app['url_generator']);
};

$app['asset'] = function($app) {
    return new PathPackage($app['config.assets.path'], new StaticVersionStrategy($app['config.assets.version']));
};