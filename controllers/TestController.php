<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.03.2018
 * Time: 11:43
 */

class TestController extends Controller
{
    public function actionIndex(){
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $tests = new Test();
        $testlist = $tests->getTestAll();

        require_once(ROOT.'/views/test/index.php');
        return true;
    }
    public function actionAddtest(){
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $test = new Test();
       if(isset($_POST['submit'])){
           $name = $_POST['name'];
           if($name!='') {
               $test->addTest($name);
               header("Location: /tests/");
           }

       }

        require_once(ROOT.'/views/test/add.php');
        return true;
    }
    public function actionEdit($id){
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $test = new Test();
        $onetest = $test->getTestById($id);
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            if($name!='') {
                $test->uploadTest($id,$name);
                header("Location: /tests/");
            }

        }

        require_once(ROOT.'/views/test/edit.php');
        return true;
    }

    public function actionDelete($id){

        $test = new Test();
        $test->delTest($id);
        return true;
    }

}