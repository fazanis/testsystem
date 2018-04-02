<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.03.2018
 * Time: 17:55
 */

class TeststirovanieController extends Controller
{

    public function actionIndex()
    {
        self::checkAdmin();
        $title = 'Рубрики тестов';
        $user = User::getUserById($_SESSION['user']);

        $rubriki = new Rubric();
        $rubrikList = $rubriki->getAllRubric();


        require_once(ROOT . '/views/testirovanie/index.php');
        return true;
    }

    public function actionTesti($id)
    {
        self::checkAdmin();
        $rubriki = new Rubric();
        $rubrika = $rubriki->getRubdikById($id);
        $title = 'Тесты рубрики - "' . $rubrika['name'] . '"';
        $user = User::getUserById($_SESSION['user']);
        $test = new Test();
        $testList = $test->getTestByRybricId($id);


        require_once(ROOT . '/views/testirovanie/testi.php');
        return true;
    }

    public function actionVoprosi($id)
    {
        self::checkAdmin();
        $test = new Test();
        $tests = $test->getTestById($id);
        $count = $test->getColTestInRub($id);
        $title = 'Вопросы теста - "' . $tests['name'] . '"';
        $user = User::getUserById($_SESSION['user']);
        $vopros = new Voprosi();
        $voprosList = $vopros->getVoprosiByTestId($id);
        $maxBall = $vopros->getMaxBall($id);

        $errors = false;
        if (isset($_POST['submit'])) {
            $arpost = $_POST;
            unset($arpost['submit']);
            if (count($arpost)){
                $arposts = array_sum($arpost);
                $arpost = json_encode($arpost);
//                echo $arpost;
//                echo '<pre>';
//                print_r($arpost);
//                echo '</pre>';
//                echo '<pre>';
//                print_r($arposts);
//                echo '</pre>';
//                echo '<pre>';
//                print_r($id);
//                echo '</pre>';
//                echo '<pre>';
//                print_r($user['id']);
//                echo '</pre>';
//                echo '<pre>';
//                print_r($maxBall);
//                echo '</pre>';
//
//                echo 'Вы набрали '.$arposts.' из '.$maxBall;

            }else{
                $errors[] = 'Вы не ответили на вопросы';
            }
        }

        require_once(ROOT . '/views/testirovanie/test.php');
        return true;
    }
}