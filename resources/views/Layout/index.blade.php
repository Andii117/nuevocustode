<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    {!! Html::style('') !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CUSTODE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Fonts from Font Awsome -->
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    <!-- CSS Animate -->
    {!! Html::style('ssets/css/animate.css') !!}
    <!-- Custom styles for this theme -->
    {!! Html::style('assets/css/main.css') !!}
    <!-- Vector Map  -->
    {!! Html::style('assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css') !!}
    <!-- ToDos  -->
    {!! Html::style('assets/plugins/todo/css/todos.css') !!}
    <!-- Morris  -->
    {!! Html::style('assets/plugins/morris/css/morris.css') !!}
    <!-- Fonts -->
    {!! Html::style('ssets/css/googleapiesSourceSansPro.css') !!}
    {!! Html::style('ssets/css/googleapisOpenSans.css') !!}
    <!-- Feature detection -->
    {!! Html::style('assets/js/modernizr-2.6.2.min.js') !!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! Html::style('assets/js/html5shiv.js') !!}
    {!! Html::style('assets/js/respond.min.js') !!}
    <![endif]-->
</head>

<body>
<section id="container">
    <header id="header">
        <!--logo start-->
        <div class="brand">
            <a href="/" class="logo"><span>CUSTODE</span></a>
        </div>
        <!--logo end-->
        <div class="toggle-navigation toggle-left">
            <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="user-nav">
            <ul>
                <li class="profile-photo">
                    <img src="assets/img/avatar.png" alt="" class="img-circle">
                </li>
                <li class="dropdown settings">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Andres Jara <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeInDown">
                        <li>
                            <a href="#"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <!--sidebar left start-->
    <aside class="sidebar">
        <div id="leftside-navigation" class="nano">
            <ul class="nano-content">
                <li class="active">
                    <a href="/Funcionarios"><i class="fa fa-users"></i><span>FUNCIONARIOS</span></a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-tasks"></i><span>SECCIONES Y CARGOS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>

                        <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                        </li>
                        <li><a href="ui-panels.html">Panels</a>
                        </li>
                        <li><a href="ui-buttons.html">Buttons</a>
                        </li>
                        <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
                        </li>
                        <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
                        </li>
                        <li><a href="ui-icons.html">Icons</a>
                        </li>
                        <li><a href="ui-grid.html">Grid</a>
                        </li>
                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                        </li>
                        <li><a href="ui-nestable-list.html">Nestable Lists</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa  fa-male"></i><span>INVITADOS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li><a href="tables-data.html">Data Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-users"></i><span>USUARIOS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="forms-components.html">Components</a>
                        </li>
                        <li><a href="forms-validation.html">Validation</a>
                        </li>
                        <li><a href="forms-mask.html">Mask</a>
                        </li>
                        <li><a href="forms-wizard.html">Wizard</a>
                        </li>
                        <li><a href="forms-multiple-file.html">Multiple File Upload</a>
                        </li>
                        <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-clock-o"></i><span>HORARIOS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="mail-inbox.html">Inbox</a>
                        </li>
                        <li><a href="mail-compose.html">Compose Mail</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-credit-card"></i><span>LICENCIAS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="charts-chartjs.html">Chartjs</a>
                        </li>
                        <li><a href="charts-morris.html">Morris</a>
                        </li>
                        <li><a href="charts-c3.html">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-pencil-square-o"></i><span>GESTION DE AREAS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="/GestionAreas">AREAS</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="/ControlAreas"><i class="fa  fa-unlock-alt"></i><span>CONTROL DE AREAS</span></a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>ESTADISTICAS</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                    <ul>
                        <li><a href="/Estadisticas">GENERAR ESTADISTICAS</a><!--CONSULTAR-->
                        </li>
                        <li><a href="pages-login.html">Login</a>
                        </li>
                        <li><a href="pages-sign-up.html">Sign Up</a>
                        </li>
                        <li><a href="pages-calendar.html">Calendar</a>
                        </li>
                        <li><a href="pages-timeline.html">Timeline</a>
                        </li>
                        <li><a href="pages-404.html">404</a>
                        </li>
                        <li><a href="pages-500.html">500</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="typography.html"><i class="fa  fa-legal"></i><span>AUDITORIAS</span></a>
                </li>
                <li class="sub-menu">
                    <a href="typography.html"><i class="fa   fa-file-text"></i><span>REPORTES</span></a>
                </li>
                <li class="sub-menu">
                    <a href="typography.html"><i class="fa   fa-leaf"></i><span>AHORRO DE ENERGIA</span></a>
                </li>
            </ul>
        </div>

    </aside>
    <!--sidebar left end-->
    <!--main content start-->
    <section class="main-content-wrapper">
        <section id="main-content">
            @yield('content')
        </section>
    </section>
    <!--main content end-->
    <!--sidebar right start-->
    <aside class="sidebarRight">
        <div id="rightside-navigation ">
            <div class="sidebar-heading"><i class="fa fa-user"></i> Contacts</div>
            <div class="sidebar-title">online</div>
            <div class="list-contacts">
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>James Bagian</h4>
                        <p>Los Angeles, CA</p>
                    </div>
                    <div class="item-status item-status-online"></div>
                </a>
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar1.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>Jeffrey Ashby</h4>
                        <p>New York, NY</p>
                    </div>
                    <div class="item-status item-status-online"></div>
                </a>
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar2.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>John Douey</h4>
                        <p>Dallas, TX</p>
                    </div>
                    <div class="item-status item-status-online"></div>
                </a>
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar3.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>Ellen Baker</h4>
                        <p>London</p>
                    </div>
                    <div class="item-status item-status-away"></div>
                </a>
            </div>

            <div class="sidebar-title">offline</div>
            <div class="list-contacts">
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar4.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>Ivan Bella</h4>
                        <p>Tokyo, Japan</p>
                    </div>
                    <div class="item-status"></div>
                </a>
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar5.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>Gerald Carr</h4>
                        <p>Seattle, WA</p>
                    </div>
                    <div class="item-status"></div>
                </a>
                <a href="javascript:void(0)" class="list-item">
                    <div class="list-item-image">
                        <img src="assets/img/avatar6.gif" class="img-circle">
                    </div>
                    <div class="list-item-content">
                        <h4>Viktor Gorbatko</h4>
                        <p>Palo Alto, CA</p>
                    </div>
                    <div class="item-status"></div>
                </a>
            </div>
        </div>
    </aside>
    <!--sidebar right end-->
</section>
<!--Global JS-->
{!! Html::script('assets/js/jquery-1.10.2.min.js') !!}
{!! Html::script('assets/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('assets/plugins/waypoints/waypoints.min.js') !!}
{!! Html::script('assets/js/application.js') !!}
<!--Page Level JS-->
{!! Html::script('assets/plugins/countTo/jquery.countTo.js') !!}
{!! Html::script('') !!}
<!-- FlotCharts  -->
{!! Html::script('assets/plugins/flot/js/jquery.flot.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.resize.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.canvas.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.image.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.categories.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.crosshair.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.errorbars.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.fillbetween.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.navigate.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.pie.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.selection.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.stack.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.symbol.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.threshold.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.colorhelpers.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.time.min.js') !!}
{!! Html::script('assets/plugins/flot/js/jquery.flot.example.js') !!}
<!-- Morris  -->
{!! Html::script('assets/plugins/morris/js/morris.min.js') !!}
{!! Html::script('assets/plugins/morris/js/raphael.2.1.0.min.js') !!}
<!-- Vector Map  -->
{!! Html::script('assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js') !!}
<!-- ToDo List  -->
{!! Html::script('assets/plugins/todo/js/todos.js') !!}
<!--Load these page level functions-->
<script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46627904-1', 'authenticgoods.co');
    ga('send', 'pageview');

</script>

</body>

</html>