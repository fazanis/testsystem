<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.04.2018
 * Time: 8:42
 */

class Rezultat
{

    public static function getAllRezulataByUser(){
        $user = $_SESSION['user'];
        $db = Db::getConnection();
        $sql = 'SELECT * FROM rezultat r INNER JOIN testname t ON t.id=r.id_testa  WHERE user = :user';
        $result = $db->prepare($sql);
        $result->bindParam(':user', $user, PDO::PARAM_INT);
        $result->execute();
        $i=0;
        while ($row = $result->fetch()){
            $resultList[$i]['user']=$row['user'];
            $resultList[$i]['id_testa']=$row['id_testa'];
            $resultList[$i]['name']=$row['name'];
            $resultList[$i]['rezultat']=$row['rezultat'];
            $resultList[$i]['max']=$row['max'];
            $resultList[$i]['create_at']=$row['create_at'];
            $i++;
        }
if(isset($resultList))
        return $resultList;
    }

}