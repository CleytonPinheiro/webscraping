<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler =$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

//Loop em todos os dispositivos do site

$codigos = $crawler->filter('article .img-thumbnail')->each(function($node){
    //return $node->attr('src');
    return $node->attr('alt');

});
print_r($codigos);
















