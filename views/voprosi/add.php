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
                            <li><?=$title?></li>
                        </ul>
                        <h4><?=$title?></h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="col-md-6">
                <h5 class="lg-title mb5"><?=$title?></h5>
                <form class="form-horizontal form-bordered" action="" method="post">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Вопрос</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="vopros" placeholder="Вопрос" class="form-control" ></textarea>
                        </div>
                        <label class="col-sm-4 control-label">Ответ 1</label>
                        <div class="col-sm-8">
                            <input type="text" name="otvet[]" placeholder="Ответ" class="form-control" />
                            <input type="text" name="ball[]" placeholder="Баллов за ответ" class="form-control" />
                        </div>
                        <div id="eshevar">
                        </div>
                        <div class="col-sm-8">
                        <a href="#" id="npole" class="btn btn-success btn-sm btn-block" data-id="1" onclick="addpole()">Добавить поле</a>
                        </div>
                    </div><!-- form-group -->
                    <div class="form-group">

                        <input type="submit" name="submit" class="btn btn-primary">



                    </div><!-- col-sm-8 -->
            </div><!-- form-group -->
            </form>
        </div><!-- table-responsive -->
    </div><!-- col-md-6 -->

    </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>
<?php require_once (ROOT."/views/layouts/footer.php");?>

