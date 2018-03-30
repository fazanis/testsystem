<?php require_once(ROOT . "/views/layouts/header.php");?>

<body>

<?php require_once(ROOT . "/views/layouts/top.php");?>

<section>
    <div class="mainwrapper">
        <?php require_once(ROOT . "/views/layouts/left.php");?>

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li><?=$title?></li>
                        </ul>
                        <h4><?=$title?></h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="col-md-6">
                <h5 class="lg-title mb5"><?=$title?></h5>
                <div class="panel-footer">
                    <a href="/tests/voprosi/addvopros/"><button class="btn btn-primary">Добавить вопрос</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb30">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Ответы</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $i=1;
                        foreach ($voprosList as $vopros):?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><a href="/tests/editvopros/<?=$vopros['id']?>"><?=$vopros['vopros']?></a></td>
                                <td>
                                    <table class="table table-striped mb30">
                                    <? foreach (Voprosi::getOtvetiByArray($vopros['otveti']) as $variant => $ball):?>
                                        <tr><td><?= $variant ?></td><td><?= $ball ?></td></tr>
                                    <? endforeach; ?>
                                    </table>
                                </td>
                                <td>
                                    <a href="/tests/editvopros/<?=$vopros['id']?>"><i class="fa fa-edit"></i></a>
                                    <a href="#" onclick="delvop(<?=$vopros['id']?>)"><i class="glyphicon glyphicon-remove-sign"></i></a>
<!--                                    delete/--><?//=$test['id']?>
                                </td>
                            </tr>
                        <?endforeach;?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div><!-- col-md-6 -->

        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>
<?php require_once(ROOT . "/views/layouts/footer.php");?>

