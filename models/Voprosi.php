<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.03.2018
 * Time: 16:20
 */

class Voprosi extends Test
{
    public function getVoprosiByTestId($id){
        $db = Db::getConnection();
        $sql = 'SELECT * FROM voprosi WHERE id_testa=:id';
        $result = $db->prepare($sql);

        $result->bindParam(':id',$id,PDO::PARAM_INT);
        $result->execute();
        $i=0;
        while ($row = $result->fetch()){
            $resultList[$i]['id'] = $row['id'];
            $resultList[$i]['id_testa'] = $row['id_testa'];
            $resultList[$i]['vopros'] = $row['vopros'];
            $resultList[$i]['otveti'] = $row['otveti'];
            $i++;
        }
        if(isset($resultList)) {
            return $resultList;
        }


    }

    public static function getOtvetiByArray($array){

       return $var = json_decode($array);

    }

    public static function doArrayInJson($array1,$array2){
        $array = array_combine($array1,$array2);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }

    public static function saveVopros($id_testa,$vopros,$otveti){

        $db = Db::getConnection();
        $sql = 'INSERT INTO voprosi (id_testa,vopros, otveti) VALUES (:id_testa,:vopros,:otveti)';
        $result = $db->prepare($sql);
        $result->bindParam(':id_testa',$id_testa,PDO::PARAM_INT);
        $result->bindParam(':vopros',$vopros,PDO::PARAM_STR);
        $result->bindParam(':otveti',$otveti,PDO::PARAM_STR);
        $result->execute();
    }

    public function getVoprosById($id){
        $db = Db::getConnection();
        $sql = 'SELECT * FROM voprosi WHERE id=:id';
        $result = $db->prepare($sql);

        $result->bindParam(':id',$id,PDO::PARAM_INT);
        $result->execute();
        $i=0;
        while ($row = $result->fetch()){
            $resultList['id'] = $row['id'];
            $resultList['vopros'] = $row['vopros'];
            $resultList['otveti'] = $row['otveti'];
            $i++;
        }

        return $resultList;

    }

    public static function updateVopros($id,$vopros,$otveti){
        $db = Db::getConnection();
        $sql = 'UPDATE voprosi SET vopros=:vopros, otveti=:otveti WHERE id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_INT);
        $result->bindParam(':vopros',$vopros,PDO::PARAM_STR);
        $result->bindParam(':otveti',$otveti,PDO::PARAM_STR);
        $result->execute();
    }

    public static function delVopros($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM voprosi WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
//echo $id;

    }
    public function getMaxBall($id){
        $db = Db::getConnection();
        $sql = 'SELECT * FROM voprosi WHERE id_testa = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $i=0;


        while ($row = $result->fetch()) {
            $rezList[$i]['otveti'] = $row['otveti'];

$i++;
        }
        if(isset($rezList)) {
            $end = 0;
            foreach ($rezList as $item) {

                $str = json_decode($item['otveti'], true);

                $max = max($str);
                $end = $end + $max;

            }


            return $end;
        }
    }

    public function saveRezult($userid,$id_testa,$maxBall,$rezultat){
        $time = time();
        $db = Db::getConnection();
        $sql = 'INSERT INTO rezultat (user,id_testa, rezultat,max,create_at) VALUES (:userid,:id_testa,:rezultat,:max,:create_at)';
        $result = $db->prepare($sql);
        $result->bindParam(':userid',$userid,PDO::PARAM_INT);
        $result->bindParam(':id_testa',$id_testa,PDO::PARAM_INT);
        $result->bindParam(':rezultat',$rezultat,PDO::PARAM_INT);
        $result->bindParam(':max',$maxBall,PDO::PARAM_INT);
        $result->bindParam(':create_at',$time,PDO::PARAM_INT);
        $result->execute();
    }

}