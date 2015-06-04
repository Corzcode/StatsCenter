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
    <span><img style="vertical-align:top;padding: 8px" width="80" src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superplus/img/logo_white_ee663702.png" /></span>
    <span id="logo" style="margin-left: 0px"><strong style="font-size: 18px;"><?=Swoole::$php->config['common']['site_name']?></strong></span>
    <span style="float: right;padding: 15px 5px;font-weight: bolder">
        <span style="text-transform: none;">
                    <a style="text-decoration: none" href="/user/edit">用户：<?= $_COOKIE['username'] ?>
        </span>
        <span style="text-transform: none;padding: 15px 5px;">
                    <a style="text-decoration: none;font-weight: bolder" href="/page/logout/">退出</a>
        </span>
    </span>
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
            <!-- new widget -->

            <!-- end widget -->

            <div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false"
                 data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                 data-widget-deletebutton="false" role="widget" style="">
                <header role="heading">
                    <ul class="nav nav-tabs pull-left in">
                        <li class="active">
                            <a data-toggle="tab" href="#s1"><i class="fa fa-clock-o"></i>
                                <span class="hidden-mobile hidden-tablet">返回分布</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#s2"><i class="fa fa-bell"></i>
                                <span class="hidden-mobile hidden-tablet">详细信息</span></a>
                        </li>
                    </ul>
                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                </header>

                <!-- widget div-->
                <div class="no-padding" role="content">
                    <div class="widget-body" class="tab_content">
                        <div>
                            <div class="tab-pane fade active in padding-10 no-padding-bottom" id="s1">
                                <table width="100%">
                                    <tr>
                                        <td><div id="chart1" style="height:400px;"></div></td>
<!--                                        <td><div id="chart2" style="height:400px; width: 600px;"></div></td>-->
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade in padding-10 no-padding-bottom" id="s2">
                                <div class="row no-space">
                                    <div id="chart2" style="height:400px;"></div>
                                </div>
                            </div>
                        </div>
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
            <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i
                        class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span
                    class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<?php include dirname(__DIR__) . '/include/javascript.php'; ?>
    <script src="<?=WEBROOT?>/apps/static/js/stats.js" type="text/javascript"></script>
    <script src="<?=WEBROOT?>/apps/static/js/list.js" type="text/javascript"></script>
<script>
    var ret_code = <?=json_encode($succ_ret_code, JSON_NUMERIC_CHECK)?>;
    var fail_server = <?=json_encode($succ_server, JSON_NUMERIC_CHECK)?>;
    var ret_code_result = {};
    var fail_server_result = {};
    var i;
    for (i = 0; i < ret_code.length; i++) {
        for (var o in ret_code[i]) {
            if (!ret_code_result[o]) {
                ret_code_result[o] = 0;
            }
            ret_code_result[o] += ret_code[i][o]
        }
    }
    for (i = 0; i < fail_server.length; i++) {
        for (var o in fail_server[i]) {
            if (!fail_server_result[o]) {
                fail_server_result[o] = 0;
            }
            fail_server_result[o] += fail_server[i][o]
        }
    }

    $(function () {
        pageSetUp();
        StatsG.filter.interface_id = '<?=$_GET['interface_id']?>';
        StatsG.filter.module_id = '<?=$_GET['module_id']?>';

        require(['echarts', 'echarts/chart/pie'],
            function (ec) {
                var myChart1 = ec.init(document.getElementById('chart1'));
                var option1 = {
                    title: {
                        text: '返回码分布',
                        x: 'center'
                    },
                    legend: {
                        orient: 'vertical',
                        x: 'left',
                        data: []
                    },
                    calculable: true,
                    series: [
                        {
                            name: '返回数量',
                            type: 'pie',
                            minAngle:10,
                            radius: '55%',
                            center: ['50%', 225],
                            data: []
                        }
                    ]
                };
                var myChart2 = ec.init(document.getElementById('chart2'));
                var option2 = {
                    title: {
                        text: '被调IP分布',
                        x: 'center'
                    },
                    legend: {
                        orient: 'vertical',
                        x: 'left',
                        data: []
                    },
                    calculable: true,
                    series: [
                        {
                            name: '返回数量',
                            type: 'pie',
                            minAngle:10,
                            radius: '55%',
                            center: ['50%', 225],
                            data: []
                        }
                    ]
                };

                var show, o;
                for (o in ret_code_result) {
                    var code = o > Math.pow(2, 31) ? o - Math.pow(2, 32) : o;
                    show = '返回码：' + code + ' (' + ret_code_result[o] + '次)';
                    option1.legend.data.push(show);
                    option1.series[0].data.push({value: ret_code_result[o], name: show})
                }

                for (o in fail_server_result) {
                    show = '服务器：' + o + ' (' + fail_server_result[o] + '次)';
                    option2.legend.data.push(show);
                    option2.series[0].data.push({value: fail_server_result[o], name: show})
                }
                myChart1.setOption(option1);
                myChart2.setOption(option2);
            });
    });
</script>
</body>
</html>
