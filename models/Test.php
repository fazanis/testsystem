<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.03.2018
 * Time: 12:38
 */

class Test
{

    public function getTestAll()
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM testname";
        $result = $db->prepare($sql);
        $result->execute();

        $i = 0;

        while ($row = $result->fetch()) {
            $testlist[$i]['id'] = $row['id'];
            $testlist[$i]['name'] = $row['name'];
            $i++;
        }
        return $testlist;
    }

    public function addTest($name,$rubrica)
    {
        $db = Db::getConnection();
        $select = "INSERT INTO testname (name,rubrica) VALUES (:name,:rubrica)";
        $result = $db->prepare($select);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':rubrica', $rubrica, PDO::PARAM_INT);

        return $result->execute();
    }

    public function getTestById($id)
    {
        $db = Db::getConnection();
        $select = 'SELECT * FROM testname WHERE id=:id';
        $result = $db->prepare($select);
        $result->bindParam(':id', $id, PDO::PARAM_INT);


        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    public function uploadTest($id, $name,$rubrica)
    {
        $db = Db::getConnection();
        $sql = "UPDATE testname SET name=:name,rubrica=:rubrica  WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':rubrica', $rubrica, PDO::PARAM_STR);

        $result->execute();
    }

    public static function getCountTest()
    {
        $db = Db::getConnection();
        $select = 'SELECT COUNT(*) FROM testname';
        $result = $db->query($select);
        return $result->fetchColumn();
    }

    public static function delTest($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM testname WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//echo $id;

    }

    public function getTestByRybricId($id){
        $db = Db::getConnection();
        $sql = 'SELECT * FROM testname WHERE rubrica = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $i=0;
        while ($row = $result->fetch()){
            $resultList[$i]['id'] = $row['id'];
            $resultList[$i]['name'] = $row['name'];
            $resultList[$i]['rubrica'] = $row['rubrica'];
            $i++;
        }
if(isset($resultList))
        return $resultList;
    }

    public function getColTestInRub($id_rub){
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM voprosi WHERE id_testa = :id_rub';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id_rub', $id_rub, PDO::PARAM_STR);
        $result->execute();

            return $result->fetchColumn();

    }


}