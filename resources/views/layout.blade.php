<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        @if(Auth::check())
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                        <li><a class="navbar-brand" href="/list-course">Hello {{Auth::user()->name}}</a></li>
                </div>
                <ul class="nav navbar-nav">
                    @if(Auth::user()->role==1)
                        <li><a href="/list-course">Manage course</a></li>
                        <li><a href="/list-user">Manage traner</a></li>
                    @endif
                    <li><a href="/change-password">Change password</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </nav>
        @endif
    </head>
    <body>
        <div class="" style="margin-left: 50px; margin-right: 50px">
                @yield('content')
        </div>
    </body>
</html>