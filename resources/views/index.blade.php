<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>目標</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
            <p class="navhome">ホーム</p>
            <p class="navgoal"><a href="goals/details">細かいゴール</p>
        </nav>

        <div class="calendar"><a href="/diaries/create">カレンダー</a>
            <style>
                .calendar{
                    width:200px; height:100px;
                    margin:5px; padding:10px; border:1px solid black;
                    background-color:lightgray; 
                 }                    
            </style>
        </div>
        <div> {{$goal->maingoal}}</div>
        @foreach ($diaries as $diary)
        <div>ToDo{{$diary->todo}}</div>
        @endforeach
        
        <div><a href="/goals/create">目標設定</a></div>



    </body>
</html>