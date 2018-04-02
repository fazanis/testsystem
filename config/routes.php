<?php

return array(
    //teststirovanie
    'teststirovanie/voprosi/([0-9]+)' => 'teststirovanie/voprosi/$1',
    'teststirovanie/testi/([0-9]+)' => 'teststirovanie/testi/$1',
    'teststirovanie' => 'teststirovanie/index',
     // Test:
    'vopros/delete' => 'voprosi/delete',
    'tests/editvopros/([0-9]+)' => 'voprosi/editvopros/$1',
    'tests/voprosi/([0-9]+)' => 'voprosi/voprosi/$1',
    'tests/voprosi/addvopros' => 'voprosi/addvopros',

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
