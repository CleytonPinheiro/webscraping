<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler =$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$nomes = $crawler->filter('article title')->each(function ($node){
    return $node->text();

});

//$text2 = $crawler->filter('.title-page')->text();// Buscando o title do site com css

var_dump($title);









