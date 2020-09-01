<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('/public/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/public/css/app_to.css') }}">
    <title>@yield('text-title') | Адмін-панель</title>
</head>
<body>
<div id="menu"></div>
<!-- /#menu -->
<div id="panel">
    <header class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4">
                <h2>Адмінка</h2>
            </div>
            <div class="col-md-1">
                Меню
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @yield('admin-content')
            </div>

        </div>
    </main>
</div>
<!-- /#panel -->
</body>
</html>
