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

        $user = User::getUserById($_SESSION['user']);
        
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
    public function actionLogout()
    {
        User::logout();
        return true;
    }

    public function actionSignup()
    {
        $title = 'Регистрация нового пользователя';
        $user = new User();

        if(isset($_POST['submit'])) {

            $login = $_POST['login'];
            $fio = $_POST['fio'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            //валидация полей
            if (User::loginValidate($login)) {
                $errors[] = 'Такой логин уже используется';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if ($errors == false) {
                $user->singupUser($login, $fio, $email, $password);
                header("Location: /login");
            }
        }
        require_once(ROOT . '/views/site/singup.php');
        return true;
    }
    

}
