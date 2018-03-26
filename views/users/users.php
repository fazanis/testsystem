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
                            <li>Пользователи</li>
                        </ul>
                        <h4>Пользователи</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="col-md-6">
                <h5 class="lg-title mb5">Пользователи</h5>
                <div class="table-responsive">
                    <table class="table table-striped mb30">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Логин</th>
                            <th>ФИО</th>
                            <th>email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $i=1;
                        foreach ($userlist as $useritem):?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><a href="/users/<?=$useritem['id']?>"><?=$useritem['login']?></a></td>
                            <td><?=$useritem['fio']?></td>
                            <td><?=$useritem['email']?></td>
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

