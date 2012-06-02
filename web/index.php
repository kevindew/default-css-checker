<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application as SilexApp;
use Symfony\Component\DomCrawler\Crawler as DomCrawler;
use Symfony\Component\HttpFoundation\Request;

/**
 * Application
 */
$app = new SilexApp();

$app['renderTemplate'] = function() {
    return function($template, $params = array()) {
        ob_start();
        extract($params);
        require rtrim(__DIR__, '/') . '/' . $template;
        return ob_get_clean();
    };
};

/**
 * Homepage
 */
$app->get('/', function(Request $request) use ($app) {
    return $app['renderTemplate']('../templates/index.php', array(
        'url' => $request->get('url'),
        'base' => $request->get('base'),
        'html' => $request->get('html')
    ));
});

$app->post('/', function(Request $request) use ($app) {

    $url = $request->request->get('url');

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
         throw new RuntimeException('Invalid URL');
    }

    $contents = @file_get_contents($url);
    if (!$contents) {
        throw new RuntimeException('URL Returned an error');
    }

    $crawler = new DomCrawler();
    $crawler->addHtmlContent($contents);
    $crawler = $crawler->filter('link[rel=stylesheet], style');
    $htmlElements = array();
    foreach ($crawler as $domElement) {
        $htmlElements[] = $domElement->ownerDocument->saveHTML($domElement);
    }

    return $app->json(array(
        'base' => $url,
        'elements' => $htmlElements
    ));

});

/**
 * Bombs away
 */
$app->run();