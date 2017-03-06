<html>
<head>
        <link rel="stylesheet" href="/css/homepage.css">
</head>
<body class="home">
        <div class="container">
            @if(!Auth::guest())
                <h3 class="title">Salut</h3>
            @endif

        </div>
</body>
</html>