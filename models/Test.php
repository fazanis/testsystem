<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.03.2018
 * Time: 12:38
 */

class Test
{

    public function getTestAll(){
        $db = Db::getConnection();
        $sql = "SELECT * FROM testname";
        $result = $db->prepare($sql);
        $result->execute();

        $i=0;

        while ($row = $result->fetch()){
            $testlist[$i]['id'] = $row['id'];
            $testlist[$i]['name'] = $row['name'];
            $i++;
        }
        return $testlist;
    }

    public function addTest($name){
        $db = Db::getConnection();
        $select = "INSERT INTO testname (name) VALUES (:name)";
        $result = $db->prepare($select);
        $result->bindParam(':name',$name,PDO::PARAM_STR);

        return $result->execute();
    }

    public function getTestById($id){
        $db = Db::getConnection();
        $select = 'SELECT * FROM testname WHERE id=:id';
        $result = $db->prepare($select);
        $result->bindParam(':id',$id,PDO::PARAM_INT);


        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    public function uploadTest($id,$name){
        $db = Db::getConnection();
        $sql = "UPDATE testname SET name=:name WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
        $result->bindParam(':name',$name, PDO::PARAM_STR);

        $result->execute();
    }

    public static function getCountTest(){
        $db = Db::getConnection();
        $select = 'SELECT COUNT(*) FROM testname';
        $result = $db->query($select);
        return $result->fetchColumn();
    }

    public function delTest($id){
        $db = Db::getConnection();
        $sql = "UPDATE testname SET name='123' WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
    }
}