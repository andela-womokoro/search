<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
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
                
                @if(isset($alert))
                    {{ $alert }}<br />
                @endif

                @yield('content')
                
            </div>
        </div>
    </body>
</html>
