<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteController
 *
 * @author User
 */
class SiteController extends Controller {

    //put your code here
    public function actionIndex() {
        self::checkAdmin();
        $title = "Тестирование";




        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionLogin() {
        
        $email = "";
        $password = "";
        $errors = false;
        if ($_POST) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = new User;
            if ($user->chekLogin($email)) {
                
            } else {
                $errors[] = "Не верный формат email";
            }
            if ($user->chekPassword($password)) {
                
            } else {
                $errors[] = "Не верный формат пароля";
            }
            $userId = $user->chekUserData($email,$password);
            if($userId == false){
                $errors[] = "Не верные двнные для входа";
            }else{
                User::auth($userId);
                header("Location: /");
            }
        }
        $title = "Вход в тестирование";
        require_once(ROOT . '/views/site/singin.php');
        return true;
    }
    
    

}
