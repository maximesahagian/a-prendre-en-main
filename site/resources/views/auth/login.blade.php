<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>A Prendre En Main | Connexion</title>

    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="css/themes.css">
    <link rel="stylesheet" href="css/loginpage.css">
    <!-- END Stylesheets -->
</head>
<body class="login-page">
<!-- Login Background -->
<div id="login-background">
    <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
    <img src="/img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
</div>
<!-- END Login Background -->

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <h1> <strong>Pannel d'administration</strong><br><small>Merci de vous <strong>connecter</strong></small></h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        <form method="POST" action="{{ url('/login') }}" id="form-login" class="form-horizontal form-bordered form-control-borderless">

            {{csrf_field()}}

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="email" id="login-email" name="email" class="form-control input-lg" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Mot de passe">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-4">
                    <label class="switch switch-primary" data-toggle="tooltip" title="Se souvenir ?">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-8 text-right">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Connexion au pannel</button>
                </div>
            </div>
            <div style="margin-bottom:20px;" class="margin">

            </div>
        </form>
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center" style="padding-bottom:0px;">
        <small><span id="year-copy"></span> &copy; <a href="/" target="_blank">A Prendre En Main</a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->

<!-- Load and execute javascript code used only in this page -->
</body>
</html>