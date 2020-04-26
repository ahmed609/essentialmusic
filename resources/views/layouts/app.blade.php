<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','Essential Music')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <script src="https://cdn.tiny.cloud/1/0lf821e19j6sf2nrwo17stpz7u6oa6lbb8omqrimpabxobpv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{ asset('js/tinymce.min.js')}}"></script>
</head>
    <body>
        @include('inc.navbar') 
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
        
        {{-- Tiny MCE --}}
       
        <script type="text/javascript">
            tinymce.init({
                selector: '#mytextarea',
                height: 500,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help'
                });
          </script>
    </body>
</html>