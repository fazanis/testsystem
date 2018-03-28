<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2018
 * Time: 9:42
 */

class Rubric
{

    public function getAllRubric(){
        $db = Db::getConnection();
        $select = 'SELECT * FROM rubrici';
        $result = $db->query($select);
        $i=0;
        while ($row = $result->fetch()) {
            $rubricList[$i]['id'] = $row['id'];
            $rubricList[$i]['name'] = $row['name'];
            $rubricList[$i]['status'] = $row['status'];
            $i++;
        }
        return $rubricList;
    }

    public function addRubric($name,$status){
        $db = Db::getConnection();

        $sql = 'INSERT INTO rubrici (name, status) VALUES (:name, :status)';
        $result = $db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':status',$status,PDO::PARAM_INT);
        $result->execute();
    }

    public function getRubdikById($id){
        $db = Db::getConnection();
        $select = 'SELECT * FROM rubrici WHERE id=:id';
        $result = $db->prepare($select);
        $result->bindParam(':id',$id,PDO::PARAM_INT);


        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    public function updateRubric($name,$status,$id){
        echo $name;
    }

}