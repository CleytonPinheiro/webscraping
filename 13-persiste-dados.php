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

// Buscando todos os elementos modelos de celulares do site

$modelos = $crawler->filter('article')->each(function($node){
   $return['modelo']= $node->filter('.title')->text();

   $attributes = $node->filter('td')->each(function ($attr){
       return $attr->text();
   });
    $values = $node->filter('th')->each(function ($attr){
        return $attr->text();
    });

    $return = array_merge($return, array_combine($attributes,$values));
    return $return;

});

print_r($modelos);
















