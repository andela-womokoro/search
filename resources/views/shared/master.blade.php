<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
