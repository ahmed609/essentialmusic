<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="/vendor/tinymce/tinymcetinymce.min.js"></script>
    <title>{{config('app.name','Essential Music')}}</title>
</head>
    <body>
        @include('inc.navbar') 
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>