<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.03.2018
 * Time: 11:43
 */

class TestController extends Controller
{
    public function actionIndex(){
        $title = 'Тестирование';
        $user = User::getUserById($_SESSION['user']);

        require_once(ROOT.'/views/test/index.php');
        return true;
    }

}