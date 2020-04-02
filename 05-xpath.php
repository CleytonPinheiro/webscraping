<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler =$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$text = $crawler->filterXPath('//title')->text();// Buscando o title do site

$text2 = $crawler->filterXPath('//h2')->text();// Buscando o h2 do site

var_dump($text,$text2);









