<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>細かいゴール</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
            <p class="navhome"><a href="/">ホーム</a></p>
            <p class="navgoal">細かいゴール</p>
        </nav>
        <div> {{$goal->maingoal}}</div>
        <div>{{$goal->measurable}}</div>
        <div>{{$goal->actionable}}</div>
        <div>{{$goal->competent}}</div
    </body>
</html>