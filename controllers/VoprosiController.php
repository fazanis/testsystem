<?php


class VoprosiController extends Controller
{
    public function actionVoprosi($id)
    {

        self::checkAdmin();
        $test = new Test();
        $testname = $test->getTestById($id);
        $title = 'Вопросы теста - '.$testname['name'];
        $user = User::getUserById($_SESSION['user']);

        $vopros = new Voprosi();
        $voprosList = $vopros->getVoprosiByTestId($id);

        require_once(ROOT . '/views/voprosi/voprosi.php');
        return true;

    }
}