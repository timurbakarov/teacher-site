<?php /** @var $app Silex\Application */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

// ===============================================
$app->error(function (\Exception $e, Request $request, $code) use($app) {
    switch ($code) {
        case 404:
            $message = $app['template']->render('errors/404');
            break;

        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message);
});

// ===============================================
$app->get('/', function() use($app) {
    return $app['template']->render('home');
})->bind('home');

// ===============================================
$app->get('/{page}', function($page) use($app) {
    $viewPath = 'pages/' . $page;

    if(!$app['template']->find($viewPath)) {
        throw new NotFoundHttpException();
    }

    return $app['template']->render($viewPath);
})->bind('page');

// ===============================================
$app->get('/{page}/{subpage}', function($page, $subpage) use($app) {
    $viewPath = 'pages/' . $page . '/' . $subpage;

    if(!$app['template']->find($viewPath)) {
        throw new NotFoundHttpException();
    }

    return $app['template']->render($viewPath);
})->bind('subpage');
