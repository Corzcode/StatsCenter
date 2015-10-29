<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title><?=Swoole::$php->config['common']['site_name']?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php include __DIR__.'/../include/css.php'; ?>
</head>
<body class="">
<header style="background: #E4E4E4;color: #22201F" id="header">
    <?php include __DIR__ . '/../include/top_menu.php'; ?>
</header>
<aside id="left-panel">
    <!--            --><?php //include __DIR__.'/../include/login_info.php'; ?>
    <?php include __DIR__.'/../include/leftmenu.php'; ?>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>
</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

    <span class="ribbon-button-alignment">
        <span id="refresh" class="btn btn-ribbon" data-title="refresh" rel="tooltip"
              data-placement="bottom"
              data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings."
              data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Dashboard</li>
        </ol>

    </div>

    <div id="content">
        <div class="row">
            <article class="col-sm-12 sortable-grid ui-sortable">
                <div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false"
                     data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                     data-widget-deletebutton="false" role="widget" style="width: 800px">
                    <header role="heading">
                        <ul class="nav nav-tabs pull-left in">
                            <li class="active">
                                <a><i class="fa fa-clock-o"></i>
                                    <span class="hidden-mobile hidden-tablet">新增模块</span>
                                </a>
                            </li>
                        </ul>
                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                    </header>

                    <!-- widget div-->
                    <div class="no-padding" role="content">
                        <div class="widget-body">
                            <form class="smart-form" method="post">
                                <?=$this->value($form, 'id')?>
                                <fieldset>
                                    <section>
                                        <label class="label">模块名称</label>
                                        <label class="input">
                                            <?=$form['name']?>
                                        </label>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">所属项目</label>
                                        <div class="form-group">
                                            <?=$form['project_id']?>
                                        </div>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">报警策略</label>
                                        <label class="radio state-success" style="display: inline-block">
                                            <input type="radio" name="enable_alert"
                                                   value="1" <?php echo $this->value($data, 'enable_alert') == 1 ? 'checked' : ''; ?>>
                                            <i></i>开启
                                        </label>
                                        <label class="radio state-error" style="display: inline-block">
                                            <input type="radio" name="enable_alert"
                                                   value="2" <?php echo $this->value($data, 'enable_alert') == 2 ? 'checked' : ''; ?>>
                                            <i></i>关闭
                                        </label>
                                        <label class="label">报警间隔时间(分钟)</label>
                                        <label class="input" style="padding-bottom: 10px">
                                            <input type="text" class="input" name="alert_int"  value="<?= $this->value($data, 'alert_int') ?>">
                                        </label>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">成功率阀值(0-100)</label>
                                        <label class="input">
                                            <input type="text" class="input" name="succ_hold"  value="<?= $this->value($data, 'succ_hold') ?>">
                                        </label>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">调用量波动阀值(0-100)</label>
                                        <label class="input">
                                            <input type="text" class="input" name="wave_hold"  value="<?= $this->value($data, 'wave_hold') ?>">
                                        </label>
                                    </section>
                                </fieldset>
<!--                                <fieldset>-->
<!--                                    <section>-->
<!--                                        <label class="label">报警人员</label>-->
<!--                                        <div class="form-group">-->
<!--                                            --><?//=$form['alert_uids']?>
<!--                                        </div>-->
<!--                                    </section>-->
<!--                                </fieldset>-->
                                <fieldset>
                                    <section>
                                        <label class="label">负责人</label>
                                        <div class="form-group">
                                            <?=$form['owner_uid']?>
                                        </div>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">备份负责人</label>
                                        <div class="form-group">
                                            <?=$form['backup_uids']?>
                                        </div>
                                    </section>
                                </fieldset>
                                <fieldset>
                                    <section>
                                        <label class="label">模块介绍</label>
                                        <label class="textarea textarea-resizable">
                                            <?=$form['intro']?>
                                        </label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-default" onclick="window.history.back();">
                                        Back
                                    </button>
                                </footer>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div id="shortcut">
        <ul>
            <li>
                <a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i
                            class="fa fa-envelope fa-4x"></i> <span>Mail <span
                                class="label pull-right bg-color-darken">14</span></span> </span> </a>
            </li>
            <li>
                <a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i
                            class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
            </li>
            <li>
                <a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i
                            class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
            </li>
            <li>
                <a href="#invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i
                            class="fa fa-book fa-4x"></i> <span>Invoice <span
                                class="label pull-right bg-color-darken">99</span></span> </span> </a>
            </li>
            <li>
                <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span
                        class="iconbox"> <i
                            class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span
                        class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
            </li>
        </ul>
    </div>
    <?php include dirname(__DIR__) . '/include/javascript.php'; ?>
</body>
    <script >
        pageSetUp();
    </script>
</html>
