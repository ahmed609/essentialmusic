<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="/vendor/tinymce/tinymce/tinymce.min.js"></script>
    <title>{{config('app.name','Essential Music')}}</title>
</head>
    <body>
        @include('inc.navbar') 
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        
        <script src="{{ asset('/js/app.js') }}"></script>
        
        {{-- Tiny MCE --}}
        <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
              toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
              toolbar_mode: 'floating',
              tinycomments_mode: 'embedded',
              tinycomments_author: 'Author name',
            });
          </script>
    </body>
</html>