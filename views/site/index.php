<?php require_once(ROOT . "/views/layouts/header.php"); ?>

<body>

<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="templates/images/logo.png" alt=""/>
            </a>
            <div class="pull-right">
                <a href="" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->

        <div class="header-right">

            <div class="pull-right">

                <form class="form form-search" action="search-results.html">
                    <input type="search" class="form-control" placeholder="Search"/>
                </form>

                <div class="btn-group btn-group-list btn-group-notification">
<!--                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="fa fa-bell-o"></i>-->
<!--                        <span class="badge">5</span>-->
<!--                    </button>-->
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-search"></i></a>
                        <h5>Notification</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user2.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user3.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user4.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Notifications</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-list btn-group-messages">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">2</span>
                    </button>
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                        <h5>New Messages</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hi! How are you?...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user2.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <p>Lorem ipsum dolor sit amet...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user3.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong>
                                    <p>Do you have the time to listen to me...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user4.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong>
                                    <p>It might seem crazy what I'm about to say...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hey I just met you and this is crazy...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Messages</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="glyphicon glyphicon-log-out"></i>Выход</a></li>
                    </ul>
                </div><!-- btn-group -->

            </div><!-- pull-right -->

        </div><!-- header-right -->

    </div><!-- headerwrapper -->
</header>

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
                            <li>Главная</li>
                        </ul>
                        <h4>Главная</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">

                <div class="row row-stat">
                    <div class="col-md-4">
                        <div class="panel panel-success-alt noborder">
                            <div class="panel-heading noborder">
                                <div class="panel-btns">
                                    <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i
                                                class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <div class="panel-icon"><i class="fa fa-dollar"></i></div>
                                <div class="media-body">
                                    <h5 class="md-title nomargin">Тестов в системе</h5>
                                    <h1 class="mt5"><?= Test::getCountTest() ?></h1>
                                </div><!-- media-body -->
                                <hr>
                                <!--                                        <div class="clearfix mt20">-->
                                <!--                                            <div class="pull-left">-->
                                <!--                                                <h5 class="md-title nomargin">Yesterday</h5>-->
                                <!--                                                <h4 class="nomargin">$29,009.17</h4>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="pull-right">-->
                                <!--                                                <h5 class="md-title nomargin">This Week</h5>-->
                                <!--                                                <h4 class="nomargin">$99,103.67</h4>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->

                            </div><!-- panel-body -->
                        </div><!-- panel -->
                    </div><!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="panel panel-primary noborder">
                            <div class="panel-heading noborder">
                                <div class="panel-btns">
                                    <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i
                                                class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <div class="panel-icon"><i class="fa fa-users"></i></div>
                                <div class="media-body">
                                    <h5 class="md-title nomargin">Пользователей в системе</h5>
                                    <h1 class="mt5"><?= User::getUserCol(); ?></h1>
                                </div><!-- media-body -->
                                <hr>
                                <!--                                        <div class="clearfix mt20">-->
                                <!--                                            <div class="pull-left">-->
                                <!--                                                <h5 class="md-title nomargin">Yesterday</h5>-->
                                <!--                                                <h4 class="nomargin">10,009</h4>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="pull-right">-->
                                <!--                                                <h5 class="md-title nomargin">This Week</h5>-->
                                <!--                                                <h4 class="nomargin">178,222</h4>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->

                            </div><!-- panel-body -->
                        </div><!-- panel -->
                    </div><!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="panel panel-dark noborder">
                            <div class="panel-heading noborder">
                                <div class="panel-btns">
                                    <a href="" class="panel-close tooltips" data-toggle="tooltip" data-placement="left"
                                       title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                                <div class="media-body">
                                    <h5 class="md-title nomargin">Рубрик тестов</h5>
                                    <h1 class="mt5"><?= Rubric::getCountRubric() ?></h1>
                                </div><!-- media-body -->
                                <hr>
                                <!--                                        <div class="clearfix mt20">-->
                                <!--                                            <div class="pull-left">-->
                                <!--                                                <h5 class="md-title nomargin">Yesterday</h5>-->
                                <!--                                                <h4 class="nomargin">144,009</h4>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="pull-right">-->
                                <!--                                                <h5 class="md-title nomargin">This Week</h5>-->
                                <!--                                                <h4 class="nomargin">987,212</h4>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->

                            </div><!-- panel-body -->
                        </div><!-- panel -->
                    </div><!-- col-md-4 -->
                </div><!-- row -->
                <table class="table table-striped mb30">
                    <tr>
                        <td>Тест</td>
                        <td>Ваш результат</td>
                        <td>Максимальный результат по тесту</td>
                        <td>Дата прохождения</td>
                    </tr>
                    <?if(isset($rezultatList)):?>
                    <? foreach ($rezultatList as $item => $value): ?>
                        <tr>
                            <td><a href="/teststirovanie/voprosi/<?= $value['id_testa'] ?>"><?= $value['name'] ?></a></td><td><?= $value['rezultat'] ?></td><td><?= $value['max'] ?></td><td><?= date('d.m.Y',$value['create_at']) ?></td>
                        </tr>
                    <? endforeach; ?>
                    <?endif;?>
                </table>








            </div><!-- contentpanel -->

        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>

<?php require_once(ROOT . "/views/layouts/footer.php"); ?>
 
