<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');
$totalPaginas = $crawler->filter('header')->text();
$totalPaginas = preg_replace('/\D/', '', $totalPaginas);
$totalPaginas = ceil($totalPaginas/10);
$modelos = $crawler->filter('article .title')->each(function($node) {
    return $node->text();
});
for ($i = 2; $i <= $totalPaginas; $i++) {
    $crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/'.$i);
    $modelos = array_merge($modelos, $crawler->filter('article .title')->each(function($node) {
        return $node->text();
    }));
}
print_r($modelos);
