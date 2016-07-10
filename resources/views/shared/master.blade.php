<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/sweetalert.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="/js/sweetalert.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Product Search</div>
                <p>
                    <a href="/">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="/product/add">Add a Product</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="/search">Search Product</a>
                </p>
                @yield('content')

                @if(isset($alert))
                    <script>swal('', '{!! $alert !!}');</script>
                @endif
            </div>
        </div>
    </body>
</html>
