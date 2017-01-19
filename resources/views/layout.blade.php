<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Laravel Demo</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="/project">Project</a></li>
                    <li><a href="/import-excel">Import Excel</a></li>
                    <li><a href="/export-excel">Export Excel</a></li>
                    <li style="position: absolute;right: 0px;"><a href="/logout">Đăng xuất</a></li>
                </ul>
            </div>
        </nav>
    </head>
    <body>
        <div class="" style="margin-left: 50px; margin-right: 50px">
                @yield('content')
        </div>
    </body>
</html>