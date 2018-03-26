<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.01.2018
 * Time: 17:09
 */

class User
{
    const USER_STAGE = 'registr';

    public static function chekLogin($login)
    {
        if(strlen($login)>=2)
        {
            return true;
        }
        return false;

    }

    public static function chekPassword($password)
    {
        if(strlen($password)>=2)
        {
            return true;
        }
        return false;
    }

    public static function chekUserData($login,$password)
    {
        $db = Db::getConnection();

        $select = "SELECT * FROM users WHERE login = :login and parol = :password";
        $result = $db->prepare($select);
        $result -> bindParam(':login',$login,PDO::PARAM_STR);
        $result -> bindParam(':password', $password, PDO::PARAM_STR);
        $result ->execute();

        $user = $result->fetch();
        if($user){
            return $user['id'];
        }

        return false;

    }

    public static function auth($id)
    {

        $_SESSION['user'] = $id;

    }

    public static function chekUser()
    {
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }

        header("Location: /admin/");
    }
    public static function isGest()
    {
        if(isset($_SESSION['user'])){
            return false;
        }
        return true;
    }

    public static function logout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }

    public static function getUserById($id)
    {
        if($id) {
            $db = Db::getConnection();;
            $select = "SELECT * FROM users WHERE id = :id";
            $result = $db->prepare($select);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function checkLogged()
    {
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        header("Location: /login");
    }
    
    public static function getLoginUser()
    {
        $db = Db::getConnection();
        $select = "SELECT * FROM users WHERE id=:id";
        $result = $db->prepare($select);
        $result -> bindParam(':id',$_SESSION['user'], PDO::PARAM_INT);
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $result ->execute();
        $row = $result->fetch();
        return $row['login'];
    }

    public function singupUser($login,$fio,$email,$password)
    {
        $db = Db::getConnection();
       if ($this->loginValidate($login)){
            return 'занят';
       }else {
        $role = self::USER_STAGE;
        $select = "INSERT INTO users (login, parol, email, fio, role) VALUES (:login,:password, :email, :fio, :role)";
        $result = $db->prepare($select);
        $result->bindParam(':login',$login,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':fio',$fio,PDO::PARAM_STR);
        $result->bindParam(':role',$role,PDO::PARAM_STR);
        return $result->execute();
       }
    }

    public function loginValidate($login){
        $db = Db::getConnection();
        $select = "SELECT * FROM users WHERE login=:login";
        $result = $db->prepare($select);
        $result->bindParam(':login',$login,PDO::PARAM_STR);
        if ($result->execute()){
            return true;
        }
    }
    public static function userRole($id){

        $db = Db::getConnection();
        $select = "SELECT * FROM users WHERE id=:id";
        $result = $db->prepare($select);
        $result -> bindParam(':id',$id, PDO::PARAM_INT);
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $result ->execute();
        $row = $result->fetch();
        if ($row['role'] !== self::USER_STAGE){
            return true;
        }
        return false;
    }

    public static function getUsers(){
        $db = Db::getConnection();
        $select = "SELECT * FROM users";
        $result = $db->query($select);
        $usersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $usersList[$i]['id'] = $row['id'];
            $usersList[$i]['fio'] = $row['fio'];
            $usersList[$i]['login'] = $row['login'];
            $usersList[$i]['email'] = $row['email'];
            $i++;
        }
        return $usersList;
    }

    public static function updateUserPass($login,$email,$password,$fio,$id){
        $db = Db::getConnection();
        $sql = "UPDATE users SET login=:login, email=:email, parol=:password, fio=:fio WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
        $result->bindParam(':login',$login, PDO::PARAM_STR);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->bindParam(':password',$password, PDO::PARAM_STR);
        $result->bindParam(':fio',$fio, PDO::PARAM_STR);

        $result->execute();

    }
    public static function updateUser($login,$email,$fio,$id){

        $db = Db::getConnection();
        $sql = "UPDATE users SET login=:login, email=:email, fio=:fio WHERE id=:id";
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
        $result->bindParam(':login',$login, PDO::PARAM_STR);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->bindParam(':fio',$fio, PDO::PARAM_STR);
        $result->execute();
    }
}