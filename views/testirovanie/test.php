<?php require_once(ROOT . "/views/layouts/header.php"); ?>

    <body>

<?php require_once(ROOT . "/views/layouts/top.php"); ?>

    <section>
        <div class="mainwrapper">
            <?php require_once(ROOT . "/views/layouts/left.php"); ?>

            <div class="mainpanel">
                <div class="pageheader">
                    <div class="media">
                        <div class="pageicon pull-left">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                            <ul class="breadcrumb">
                                <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                <li><?= $title ?></li>
                            </ul>
                            <h4><?= $title ?></h4>
                        </div>
                    </div><!-- media -->
                </div><!-- pageheader -->
                <div class="panel panel-info-alt">
                    <div class="panel-heading">
                        <div class="panel-btns" style="display: none;">
                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title=""
                               data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title=""
                               data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                        </div><!-- panel-btns -->
                        <h3 class="panel-title">Информация о тесте</h3>
                    </div>
                    <div class="panel-body">
                        <p>Вопросов: <?= $count ?></p>
                        <p>Максимальный балл: <?=$maxBall?></p>
                    </div><!-- panel-body -->
                </div>
                <div class="col-md-6">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <div class="alert alert-danger">
                            <? foreach ($errors as $error): ?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong> <?= $error ?></strong>
                            <? endforeach; ?>
                        </div>
                    <? endif; ?>
                    <?if(!isset($_POST['submit'])):?>
                    <div class="table-responsive">
                        <table class="table table-striped mb30">
                            <thead>
                            <tr>
                                <th></th>

                            </tr>
                            </thead>
                            <form method="post" action="">
                                <tbody>
                                <?
                                $i = 1;
                                foreach ($voprosList as $vopros):
                                    $sum = ''; ?>
                                    <tr>

                                        <td><?= $i ?>) <?= $vopros['vopros'] ?></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <?
                                            foreach (Voprosi::getOtvetiByArray($vopros['otveti']) as $otvet => $parv):?>

                                                <div class="radio"><label><input type="radio" name='vopros<?= $i ?>'
                                                                                 value="<?= $parv ?>">=<?= $parv ?>
                                                        = <?= $otvet ?>
                                                    </label></div>

                                            <? endforeach; ?>

                                        </td>

                                    </tr>
                                    <?
                                    $i++; ?>

                                <? endforeach; ?>

                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="submit">Отправить результат</button>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                        </form>
                    </div><!-- table-responsive -->
                        <?else:?>
                        <h2>Поздравляем вы набрали <?=$arposts?> из <?=$maxBall?></h2>
                        <a href="/teststirovanie/">Вернутся в рубрики тестов</a>
    <?endif;?>
                </div><!-- col-md-6 -->

            </div><!-- mainpanel -->
        </div><!-- mainwrapper -->
    </section>
<?php require_once(ROOT . "/views/layouts/footer.php"); ?>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.04.2018
 * Time: 10:52
 */