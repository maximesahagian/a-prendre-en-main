<!doctype html>
<html lang="en">

<head>
    <title>À prendre en main | Administration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/icon-sets.css">
    <link rel="stylesheet" href="/css/main.min.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon.png">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="brand">
            <a href="index.html"><img src="/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
        </div>
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Accueil</span></a></li>
                    <li><a href="/admin/news" class=""><i class="lnr lnr-code"></i> <span>Actualités</span></a></li>
                    <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>L'équipe</span></a></li>
                    <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                    <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i>
                            <span>Notifications</span></a></li>
                    <li>
                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i>
                            <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse ">
                            <ul class="nav">
                                <li><a href="page-profile.html" class="">Profile</a></li>
                                <li><a href="page-login.html" class="">Login</a></li>
                                <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                    <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i>
                            <span>Typography</span></a></li>
                    <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        @yield('content')
        <!-- END MAIN CONTENT -->
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017. All credits for A Prendre En Main</p>
            </div>
        </footer>
    </div>
    <!-- END MAIN -->
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="/js/jquery/jquery-2.1.0.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script src="/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
<script src="/js/plugins/chartist/chartist.min.js"></script>
<script src="/js/klorofil.min.js"></script>
</body>

</html>
