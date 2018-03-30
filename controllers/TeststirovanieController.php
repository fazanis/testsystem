<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.03.2018
 * Time: 17:55
 */

class TeststirovanieController
{

    public function actionIndex(){
        $title = 'Редактирование вопроса ';
        $user = User::getUserById($_SESSION['user']);

        require_once (ROOT.'/views/testirovanie/index.php');
        return true;
    }
}