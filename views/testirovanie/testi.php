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

                    <div class="table-responsive">
                        <table class="table table-striped mb30">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            $i=1;
                            foreach ($testList as $test):?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><a href="/teststirovanie/voprosi/<?=$test['id']?>"><?=$test['name']?></a></td>

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

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.04.2018
 * Time: 10:52
 */