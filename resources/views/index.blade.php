<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>目標</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../assets/css/index.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
            <div class="navhome"><h2>ホーム</h2></div>
            <div class="navgoal"><h2><a href="/goals">細かいゴール</h2></div>
        </nav>
        <div class="main">
            <div class="calendar"><a href="/diaries/create">カレンダー</a></div>
            <div class="maingoal">
                @if($goal)
                <h3>maingoal</h3>{{$goal->maingoal}}
                @endif
            </div>
            <div class="todo">
                <h3>ToDo</h3>
                    <div>
                        @if($goal)
                        @foreach ($diaries as $diary)
                        <a href="/diaries/{{ $diary->id }}"><div>{{$diary->created_at}}</div></a>
                        <div>{{$diary->todo}}</div>
                        @endforeach
                        @endif
                    </div>
            </div>
        </div>    
    </body>
</html>