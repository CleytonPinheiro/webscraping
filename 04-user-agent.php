<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

require_once 'vendor/autoload.php';

   $browser = new HttpBrowser(HttpClient::create());


   $browser->setServerParameters('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0');//Alterando o navegador a ser acessado pelo site

   $crawler = $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');



   $browser->setServerParameters('HTTP_USER_AGENT', 'MobileSafari/604.1 CFNetwork/893.14.2 Darwin/17.3.0');

   $crawler = $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');



