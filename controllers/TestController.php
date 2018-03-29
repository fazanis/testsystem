<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.03.2018
 * Time: 11:43
 */

class TestController extends Controller
{
    public function actionIndex()
    {
        self::checkAdmin();
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $tests = new Test();
        $testlist = $tests->getTestAll();

        require_once(ROOT . '/views/test/index.php');
        return true;
    }

    public function actionAddtest()
    {
        self::checkAdmin();
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $test = new Test();
        $rubric = new Rubric();
        $rubricList = $rubric->getAllRubric();
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $rubrica = $_POST['rubrica'];
            if ($name != '') {
                $test->addTest($name,$rubrica);
                header("Location: /tests/");
            }

        }

        require_once(ROOT . '/views/test/add.php');
        return true;
    }

    public function actionEdit($id)
    {
        self::checkAdmin();
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        $test = new Test();
        $onetest = $test->getTestById($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            if ($name != '') {
                $test->uploadTest($id, $name);
                header("Location: /tests/");
            }

        }

        require_once(ROOT . '/views/test/edit.php');
        return true;
    }

    public function actionVoprosi($id)
    {
        self::checkAdmin();
        $title = 'Раздел тестов';
        $user = User::getUserById($_SESSION['user']);
        require_once(ROOT . '/views/test/voprosi.php');
        return true;

    }

    // ajax delet
    public function actionDelete()
    {
        self::checkAdmin();
        $id = $_POST['id'];
        Test::delTest($id);


    }


}