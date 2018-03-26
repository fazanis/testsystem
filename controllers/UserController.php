<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author User
 */
class UserController extends Controller {
    //put your code here

    public function actionIndex(){

        $title = 'Пользователи';
        self::checkAdmin();
        $user = User::getUserById($_SESSION['user']);

        $userlist = User::getUsers();

        require_once(ROOT.'/views/users/users.php');
        return true;
    }

    public function actionProfile($id){
        self::checkAdmin();
        $user = User::getUserById($_SESSION['user']);
        $upuser = User::getUserById($id);
        $title = $user['login'].' - Профиль пользователя'; 
        
        if($_POST){
            if($_POST['password']){
                $login = $_POST['login'];
                $email = $_POST['email'];
                $fio = $_POST['fio'];
                $password = $_POST['password'];

                User::updateUserPass($login,$email,$password,$fio,$id);
            }else{
                $login = $_POST['login'];
                $email = $_POST['email'];
                $fio = $_POST['fio'];
                User::updateUser($login,$email,$fio,$id);

            }
            header('Location: /users/');
        }
        require_once(ROOT.'/views/users/profile.php');
        return true;
    }
}
