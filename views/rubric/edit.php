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
                        <label class="col-sm-4 control-label">Название рубрики</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" value="<?=$rubrika['name']?>" placeholder="Название рубрики" class="form-control" />
                        </div>
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Статус рубрики</label>
                        <div class="col-sm-8">


                            <div class="ckbox ckbox-primary">
                                <input name="status" type="checkbox" value="1" id="checkboxPrimary" checked="checked" />
                                <label for="checkboxPrimary">Статус</label>
                            </div>

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

