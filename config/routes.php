<?php

return array(
     // Test:
     // actionIndex в CatalogController

    //Users
    'profile/([0-9]+)' => 'user/profile/$1', 
    
    'logout' => 'site/logout',
    'login' => 'site/login',
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
