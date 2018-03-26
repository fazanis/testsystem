<?php

return array(
     // Test:
    'tests' => 'test/index',

     // actionIndex в CatalogController

    //Users

    'users/([0-9]+)' => 'user/profile/$1',
    'users' => 'user/index',
//    'profile/([0-9]+)' => 'user/profile/$1',
    
    'logout' => 'site/logout',
    'signup' => 'site/signup',
    'login' => 'site/login',
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
