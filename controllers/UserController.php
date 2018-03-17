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
    public function actionProfile(){
        self::checkAdmin();
        $user = User::getUserById($_SESSION['user']);
        $title = $user['login'].' - Профиль пользователя'; 
        
        if($_POST){
            echo $_POST['login'];
        }
        require_once(ROOT.'/views/users/profile.php');
        return true;
    }
}
