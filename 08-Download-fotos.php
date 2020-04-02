<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler =$browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

//Loop em todos os dispositivos do site

$images = $crawler->filter('article .img-thumbnail')->images();

    if (!is_dir('images')){
        mkdir('images');
    }

    foreach ($images as $image){
        $url = $image->getUri();
        $name = basename($url);
        file_put_contents('images/'. $name,$url);

    }















