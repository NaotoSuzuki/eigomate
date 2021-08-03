<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<body>
    @csrf
    <title>@yield('title')</title>






    @yield('content')



    <!-- js読み込み -->
    <!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src=" {{ mix('js/app.js') }} "></script> -->ß
</body>
</html>
