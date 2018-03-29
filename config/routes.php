<?php

return array(
     // Test:
    'tests/voprosi/([0-9]+)' => 'voprosi/voprosi/$1',

    'tests/delete' => 'test/delete',
    'edittest/([0-9]+)' => 'test/edit/$1',
    'addtest' => 'test/addtest',
    'tests' => 'test/index',

     // actionIndex в CatalogController

    //рубрики
    'rubric/([0-9]+)'=>'rubric/edit/$1',
    'addrubric'=>'rubric/add',

    'rubric'=>'rubric/index',

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
