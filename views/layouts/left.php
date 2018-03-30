<div class="leftpanel">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="/profile/<?= $user['id'] ?>">
            <img class="img-circle" src="/templates/images/photos/profile.png" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading"><?= User::getLoginUser() ?></h4>
            <small class="text-muted"><?= $user['role'] ?></small>
        </div>
    </div><!-- media -->

    <h5 class="leftpanel-title">Навигация</h5>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="/"><i class="fa fa-home"></i> <span>Главная</span></a></li>
        <li><a href="/teststirovanie/"><i class="fa fa-envelope-o"></i> <span>Тестирование</span></a></li>

        <? if (User::userRole($user['id'])): ?>
            <li><a href="/rubric/"><span class="pull-right badge"><?= Rubric::getCountRubric() ?></span><i
                            class="fa fa-suitcase"></i> <span>Рубрики</span></a></li>
            <li><a href="/tests/"><span class="pull-right badge"><?= Test::getCountTest() ?></span><i
                            class="fa fa-bars"></i> <span>Тесты</span></a></li>
            <li><a href="/users/"><span class="pull-right badge"><?= User::getUserCol(); ?></span><i
                            class="fa fa-user"></i> <span>Пользователи</span></a></li>


        <? endif; ?>

    </ul>

</div><!-- leftpanel -->