<?php require_once (ROOT . "/views/layouts/header.php"); ?>
<body class="signin">


<section>

    <div class="panel panel-signup">
        <div class="panel-body">
            <div class="logo text-center">
                <img src="templates/images/logo-primary.png" alt="Chain Logo" >
            </div>
            <br />
            <h4 class="text-center mb5">Регистрация нового пользователя</h4>
            <p class="text-center">Пожалуйста введите сови данные</p>
            <?php if (isset($errors) && is_array($errors)): ?>
                <? foreach ($errors as $error): ?>
                    <?= $error ?>
                <? endforeach; ?>
            <? endif; ?>
            <div class="mb30"></div>

            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="login" class="form-control" placeholder="Введите Логин">
                        </div><!-- input-group -->
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="fio" class="form-control" placeholder="Введите Ф.И.О.">
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->
                <br />
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Введите Email">
                        </div><!-- input-group -->
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Введите Пароль">
                        </div><!-- input-group -->
                    </div>
                </div><!-- row -->
                <br />
                <div class="clearfix">

                    <div class="pull-right">
                        <button type="submit" name="submit" class="btn btn-success">Зарегестрировать <i class="fa fa-angle-right ml5"></i></button>
                    </div>
                </div>
            </form>

        </div><!-- panel-body -->
        <div class="panel-footer">
            <a href="/login" class="btn btn-primary btn-block">Уже есть акаунт? Войдите</a>
        </div><!-- panel-footer -->
    </div><!-- panel -->

</section>


<?php require_once (ROOT . "/views/layouts/footer.php"); ?>
