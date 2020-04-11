<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler =$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

//Loop em todos os dispositivos do site

$totalPaginas = $crawler->filter('header')->text();// Buscando o texto do header

$totalPaginas= preg_replace('/\D/','',$totalPaginas);// Substituin o texte da variável po nada

$totalPaginas= ceil($totalPaginas/10);//Dividindo por total de itens por página do site e arredondando valor para cima


print_r($totalPaginas);
















