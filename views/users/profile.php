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
                                    <li>Редактирование пользователя</li>
                                </ul>
                                <h4>Редактирование пользователя</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    <div class="mainwrapper">
                    <h3>Редактирование пользователя - <?=$upuser['login']?></h3>
                    <form action="" method="post" class="form-horizontal form-bordered" style="float: left">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Логин пользователя</label>
                            <div class="col-sm-8">
                                <input type="text" name="login" value="<?=$upuser['login']?>" placeholder="Default Input" class="form-control" />
                            </div>
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">ФИО пользователя</label>
                            <div class="col-sm-8">
                                <input type="text" name="fio" value="<?=$upuser['fio']?>" placeholder="Default Input" class="form-control" />
                            </div>
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email пользователя</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" value="<?=$upuser['email']?>" placeholder="Default Input" class="form-control" />
                            </div>
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Пароль пользователя</label>
                            <div class="col-sm-8">
                                <input type="text" name="password" placeholder="Default Input" class="form-control" />
                            </div>
                        </div><!-- form-group -->
                        <div class="panel-footer">
                            <button class="btn btn-primary mr5">Сохранить</button>
                        </div><!-- panel-footer -->
                    </form>
                    </din>   
                        
                        
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

<?php require_once (ROOT."/views/layouts/footer.php");?>
 
