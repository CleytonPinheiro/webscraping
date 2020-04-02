<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

   $browser = new HttpBrowser(HttpClient::create());

   $crawler = $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

   $html = $crawler->html();

   $browser->clickLink('Login');

   $browser->submitForm('Go',['username'=>'cleyton@mail.com.br', 'password'=>'senhaultrasecreta'],'GET');





