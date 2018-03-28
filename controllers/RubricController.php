<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2018
 * Time: 9:37
 */

class RubricController extends Controller
{
    public function actionIndex()
    {

        self::checkAdmin();
        $user = User::getUserById($_SESSION['user']);
        $title = 'Рубрики';
        $rubric = new Rubric();
        $rubriclist = $rubric->getAllRubric();
        require_once(ROOT . '/views/rubric/index.php');
        return true;
    }

    public function actionAdd()
    {
        $user = User::getUserById($_SESSION['user']);
        $title = 'Добавление рубрики';
        $rubric = new Rubric();
        if(isset($_POST['submit']))
        {
           $name = $_POST['name'];
           $status = $_POST['status'];

           if($name!=''){
               $rubric->addRubric($name,$status);
               header('Location: /rubric/');
           }
        }

        require_once(ROOT . '/views/rubric/add.php');
        return true;
    }

    public function actionEdit($id){
        $user = User::getUserById($_SESSION['user']);
        $title = 'Редактирование рубрики';
        $rubric = new Rubric();

        $rubrika = $rubric->getRubdikById($id);
        if(isset($_POST['submit']))
        {
            $status = '';
            $name = $_POST['name'];
            if(isset($_POST['status'])) {
                $status = $_POST['status'];
            }else{
                $status = 0;
            }

            if($name!=''){
                $rubric->updateRubric($name,$status,$id);
                header('Location: /rubric/');
            }
        }
        require_once(ROOT . '/views/rubric/edit.php');
        return true;
    }

}