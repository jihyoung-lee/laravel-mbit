<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--미리보기 화면 정하는 것-->
    <meta property="og:title" content="나의 개발 유형은?" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />

    <!-- jquery 랑 css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    @yield('css')
    <title>@yield('title','나의 개발 유형찾기')</title>
</head>
<body>
    @yield('contents')
    @yield('js')
</body>
</html>
