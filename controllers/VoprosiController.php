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
        $_SESSION['rubid'] = $id;
        require_once(ROOT . '/views/voprosi/voprosi.php');
        return true;

    }

    public function actionAddvopros(){
        self::checkAdmin();

        $title = 'Добавление вопроса ';
        $user = User::getUserById($_SESSION['user']);

        if(isset($_POST['submit'])){
            $vopros = $_POST['vopros'];
            $otvet = $_POST['otvet'];
            $ball = $_POST['ball'];
            $otveti = Voprosi::doArrayInJson($otvet,$ball);
            $id = $_SESSION['rubid'];

            Voprosi::saveVopros($id,$vopros,$otveti);
            header("Location: /tests/voprosi/$id");


        }
        require_once(ROOT . '/views/voprosi/add.php');
        return true;
    }

    public function actionEditvopros($id){
        $title = 'Редактирование вопроса ';
        $user = User::getUserById($_SESSION['user']);
        $vopros = new Voprosi();
        $voproslist = $vopros->getVoprosById($id);

        if(isset($_POST['submit'])){
            $vopros = $_POST['vopros'];
            $otvet = $_POST['otvet'];
            $ball = $_POST['ball'];
            $otveti = Voprosi::doArrayInJson($otvet,$ball);
            $id_test = $_SESSION['rubid'];
            Voprosi::updateVopros($id,$vopros,$otveti);
            header("Location: /tests/voprosi/$id_test");
        }

        require_once (ROOT.'/views/voprosi/edit.php');
        return true;
    }

    // ajax delet
    public function actionDelete()
    {
        self::checkAdmin();
        $id = $_POST['id'];
        Voprosi::delVopros($id);


    }
}