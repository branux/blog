<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="@douglaszuqueto">
    <meta name="apple-mobile-web-app-title" content="@douglaszuqueto">
    <meta name="application-name" content="@douglaszuqueto">
    <meta name="theme-color" content="#008BD3">


    {!! app('seotools')->generate() !!}
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/c3.min.css')}}">


    <script src="{{asset('js/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>


    <script src="{{asset('js/d3.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/c3.min.js')}}"></script>
    <!-- Token for JS -->
    <script>
        window.Laravel = {!!   json_encode([
                'csrfToken' => csrf_token(),
            ])
        !!}
    </script>

</head>
<body>

@include('admin::_header.header')

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="{{asset('js/materialize.min.js')}}"></script>

</body>
</html>
