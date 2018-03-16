<?php require_once (ROOT . "/views/layouts/header.php"); ?>
<body class="signin">


    <section>

        <div class="panel panel-signin">
            <div class="panel-body">
                <div class="logo text-center">
                    <img src="templates/images/logo-primary.png" alt="Chain Logo" >
                </div>
                <br />
                <h4 class="text-center mb5">Готовы к тестированию?</h4>
                <p class="text-center">Войдите используя свой логин и пароль</p>
                <?if(isset($errors) && is_array($errors)): ?>
                <ul class="" style="text-align: center; color: red; ">
                    <?foreach ($errors as $error):?>
                    <li style="list-style-type: none;"><?= $error ?></li>
                    <?endforeach;?>
                </ul>
                <?endif;?>
                <div class="mb30"></div>

                <form action="" method="post">
                    <div class="input-group mb15">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div><!-- input-group -->
                    <div class="input-group mb15">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                    </div><!-- input-group -->

                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="ckbox ckbox-primary mt10">
                                <input type="checkbox" id="rememberMe" value="1">
                                <label for="rememberMe">Запомнить меня</label>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success">Войти <i class="fa fa-angle-right ml5"></i></button>
                        </div>
                    </div>                      
                </form>

            </div><!-- panel-body -->
            <div class="panel-footer">
                <a href="signup" class="btn btn-primary btn-block">Регистрация</a>
            </div><!-- panel-footer -->
        </div><!-- panel -->

    </section>


    <?php require_once (ROOT . "/views/layouts/footer.php"); ?>
