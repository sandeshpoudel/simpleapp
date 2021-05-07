<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Simple Website</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
@include('include.navbar')
    <div class="container">
        <!-- logic to show showcase only in home page if Request::is('/home') then include  -->
    @if (Request::is('/'))
        @include('include.showcase')    
    @endif
    
        <div class="row">
           
            <div class="col-md-8">
            @include('include.messages')
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('include.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>copyright 2021 | Sandesh</p>
    </footer>
    







</body>
</html>