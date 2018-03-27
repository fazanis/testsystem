<?php require_once (ROOT."/views/layouts/header.php");?>

<body>

<?php require_once (ROOT."/views/layouts/top.php");?>

<section>
    <div class="mainwrapper">
        <?php require_once (ROOT."/views/layouts/left.php");?>

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Рубрики</li>
                        </ul>
                        <h4>Рубрики</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="col-md-6">
                <h5 class="lg-title mb5">Рубрики</h5>
                <div class="panel-footer">
                    <a href="/addrubric/"><button class="btn btn-primary">Добавить рубрику</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb30">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Статус</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $i=1;
                        foreach ($rubriclist as $rubrica):?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><a href="/rubric/<?=$rubrica['id']?>"><?=$rubrica['name']?></a></td>
                                <td><?=$rubrica['status']==1 ? 'Активный':'Не активный'?></td>
                            </tr>
                        <?endforeach;?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div><!-- col-md-6 -->

        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>

<?php require_once (ROOT."/views/layouts/footer.php");?>

