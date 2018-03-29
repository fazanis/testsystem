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

        return $resultList;

    }

    public static function getOtvetiByArray($array){
//        var_dump($array);
//        foreach ($array as $otvet){
          //$str = array_keys($array);

        echo gettype($array);
        echo json_decode($array);


//        }
       // return $end;
    }
}